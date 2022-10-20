<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Set;
use App\Models\Product;
use DB;

class ProductController extends Controller


{
    function index($slug)
    {
        $aSet = DB::table('sets')->where('sets.slug', 'like', '%' . $slug . '%')->get();
        foreach ($aSet as $set) {
            $set_id =  $set->id;
            $set_description = $set->description;
            $set_name = $set->name;
            $set_image = $set->image;
        }
        $colors = DB::table('colors')
            ->join('products', 'products.color_ID', '=', 'colors.id')
            ->join('sets', 'sets.id', '=', 'products.set_ID')
            ->where('sets.slug', 'like', '%' . $slug . '%')
            ->groupBy('colors.id')
            ->select('colors.id', 'colors.name')
            ->get();

        $member = DB::table('members')->orderBy('members.display_order')->get();
        $allProducts = array();

        foreach ($member as $member) {
            $product_set = DB::table('sizes')
                ->join('products', 'products.size_ID', '=', 'sizes.id')
                ->join('members', 'members.id', '=', 'products.member_ID')
                ->join('colors', 'colors.id', '=', 'products.color_ID')
                ->join('sets', 'sets.id', '=', 'products.set_ID')
                ->where('members.id', $member->id)
                ->where('sets.id',  $set_id)
                ->select('sizes.id', 'sizes.name', 'products.id', 'products.price')
                ->orderBy('sizes.display_order')
                ->get();
            $allProducts[$member->name] = $product_set;
        }

        return view('product', compact('colors', 'set_description', 'set_image', 'set_name', 'allProducts'));
    }
}
