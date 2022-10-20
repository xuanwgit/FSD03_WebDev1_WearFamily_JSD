<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use Auth;

class CartController extends Controller
{
    function index()
    {
        if (Auth::check()){
            $userid = Auth::id();
            // print_r($userid);
            // exit;
        }
        else {
            header("Location: /login");
            exit();
        }

        // using database carts
        $data = DB::table('carts')
        ->join('products', 'products.id', '=', 'carts.product_ID')
        ->join('colors', 'colors.id', '=', 'products.color_ID')
        ->join('sizes', 'sizes.id', '=', 'products.size_ID')
        ->join('members', 'members.id', '=', 'products.member_ID')        
        ->join('categories', 'categories.id', '=', 'products.category_ID')
        ->join('sets', 'sets.id', '=', 'products.set_ID')
        ->join('shoppingsession', 'shoppingsession.id', '=', 'carts.session_id')
        ->where('shoppingsession.user_id', '=', $userid)
        ->select('shoppingsession.user_id', 'carts.id', 'carts.quantity', 'carts.session_id', 'carts.product_id', 'sets.name','sets.image','colors.name AS color','sizes.name AS size','categories.name as category', 'members.name AS member', 'products.price' )
        ->get();
        //   print_r($data); exit;
        return view('cart',['data'=>$data]); 

        

    }
    
    public function addItemToOrderItems(Request $request){

        if (Auth::check()){
            $userid = Auth::id();
            // print_r($userid);
            // exit;
        }
        else {
            header("Location: /login");
            exit();
        }

        DB::insert('insert into order_items (order_payment_id, product_id, quantity) values (? , ?, ?)', [$request->order_payment_id, $request->product_id,  $request->quantity]);
    }

    public function updateCart(Request $request){

        if (Auth::check()){
            $userid = Auth::id();
        }
        else {
            header("Location: /login");
            exit();
        }

        // check if shopping session exist
        $countSession = DB::select('select count(id) as countSess from shoppingsession where user_id = ?', [$userid]);

        if ($countSession[0]->countSess > 0) {
            $shoppingSessionID = DB::select('select shoppingsession.id from shoppingsession where user_id = ? order by id desc limit 1', [$userid]);

            DB::update('update shoppingsession set total = ? where id = ?', [$request->total, $shoppingSessionID[0]->id]);
            DB::update('update carts set quantity = ? where product_id = ? and session_id = ?', [$request->quantity, $request->productID, $shoppingSessionID[0]->id]);
        }   
    }
    
    function delete($id)
    {
        // using databse carts 
        if (Auth::check()){
            $userid = Auth::id();
            // print_r($userid);
            // exit;
        }
        else {
            header("Location: /login");
            exit();
        }

        DB::delete('delete from carts where id = ?', [$id]);
        return redirect('cart');
    }
}