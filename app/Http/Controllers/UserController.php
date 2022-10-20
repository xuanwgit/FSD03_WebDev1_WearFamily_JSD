<?php

namespace App\Http\Controllers;
use App\Models\OrderPayment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
     public function index() 
    {
        $orders = OrderPayment::where('user_id', Auth::id()) ->get();
        return view ('order', compact('orders'));
    }

    public function view($id) 
    {
        $orders = OrderPayment::where('id', $id)->where('user_id', Auth::id())->get();
        return view('view-order',compact('orders'));
    }
}
