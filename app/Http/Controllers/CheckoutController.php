<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use Auth;

class CheckoutController extends Controller
{
    public function newIdFromOrderPayment(Request $request){

        if (Auth::check()){
            $userid = Auth::id();
        }
        else {
            header("Location: /login");
            exit();
        }

        $orderpaymentid = DB::table('order_payment')
        ->where('user_id', '=', $userid)
        ->where('firstname', '=', "")
        ->max('id');

        if ($orderpaymentid == null) {
            DB::insert('insert into order_payment (user_id) values (?)', [$userid]);
            $orderpaymentid = DB::table('order_payment')
            ->where('user_id', '=', $userid)
            ->max('id');
        }

        return $orderpaymentid;
    }

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
        return view('checkout',['data'=>$data]); 
    }

    public function updateOrderPayment(Request $request){

        if (Auth::check()){
            $userid = Auth::id();
        }
        else {
            header("Location: /login");
            exit();
        }

        $orderpaymentid = DB::table('order_payment')
        ->where('user_id', '=', $userid)
        ->max('id');

        $updateDetails = [
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'address' => $request->get('address'),
            'city' => $request->get('city'),
            'zip' => $request->get('zip'),
            'state' => $request->get('state'),
            'country' => $request->get('country'),
            'mobile' => $request->get('mobile'),
            'cc_name' => $request->get('cc_name'),
            'account_no' => $request->get('account_no'),
            'expiry' => $request->get('expiry'),
            'cvv' => $request->get('cvv'),
            'total' => $request->get('total'),
            'status' => $request->get('status')
        ];

        DB::table('order_payment')
        ->where('id', $orderpaymentid)
        ->update($updateDetails);

        $shoppingSessionID = DB::select('select shoppingsession.id from shoppingsession where user_id = ? order by id desc limit 1', [$userid]);

        DB::delete('delete from carts where session_id = ?', [$shoppingSessionID[0]->id]);

        DB::delete('delete from shoppingsession where id = ?', [$shoppingSessionID[0]->id]);




    }

    public function getIdFromOrderPayment(Request $request){

        if (Auth::check()){
            $userid = Auth::id();
            //print_r($userid);
        }
        else {
            header("Location: /login");
            exit();
        }
        $orderpaymentid = DB::table('order_payment')
        ->where('user_id', '=', $userid)
        ->max('id');
        return ($orderpaymentid); 
    }

    public function getDataInfo(Request $request){

        if (Auth::check()){
            $userid = Auth::id();
            // print_r($userid);
        }
        else {
            header("Location: /login");
            exit();
        }
        $orderpaymentid = DB::table('order_payment')
        ->where('user_id', '=', $userid)
        ->max('id');

        $data = DB::table('order_items')
        ->select('order_items.product_id', 'order_items.quantity','products.price')
        ->join('products', 'products.id', '=', 'order_items.product_ID')
        ->where('order_items.order_payment_id', '=', $orderpaymentid)
        ->get();
        return ($data); 
    } 
}