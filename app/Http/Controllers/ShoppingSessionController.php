<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class ShoppingSessionController extends Controller
{
    public function addToShoppingCart(Request $request){

        if (Auth::check()){
            $userid = Auth::id();
        }
        else {
            return -1;
        }


        // check if shopping session exist
        $countSession = DB::select('select count(id) as countSess from shoppingsession where user_id = ?', [$userid]);

        if ($countSession[0]->countSess > 0) {
            $shoppingSessionID = DB::select('select shoppingsession.id from shoppingsession where user_id = ? order by id desc limit 1', [$userid]);
            $total = DB::select('select shoppingsession.total from shoppingsession where id = ?', [$shoppingSessionID[0]->id]);
            $newTotal = $total[0]->total + $request->total;
            DB::update('update shoppingsession set total = ? where id = ?', [$newTotal, $shoppingSessionID[0]->id]);
        }
        else {
            DB::insert('insert into shoppingsession (user_id, total) values (?, ?)', [$userid, $request->total]);
            $shoppingSessionID = DB::select('select shoppingsession.id from shoppingsession where user_id = ? order by id desc limit 1', [$userid]);
        }   
        
        // check if product exist in cart
        $countProduct = DB::select('select count(id) as countProd from carts where product_id = ? and session_id = ?', [$request->productID, $shoppingSessionID[0]->id]);

        if ($countProduct[0]->countProd > 0){
            $quantity = DB::select('select carts.quantity from carts where product_id = ?', [$request->productID]);
            $newQuantity = $quantity[0]->quantity + $request->quantity;
            DB::update('update carts set quantity = ? where product_id = ?', [$newQuantity, $request->productID]);
        }
        else {
            DB::insert('insert into carts (quantity, session_id, product_id) values (?, ?, ?)', [$request->quantity, $shoppingSessionID[0]->id, $request->productID]);
        }
        $cartTotal = DB::select('select total from shoppingsession where user_id = ?', [$userid]);

        return $cartTotal;
    }
}
