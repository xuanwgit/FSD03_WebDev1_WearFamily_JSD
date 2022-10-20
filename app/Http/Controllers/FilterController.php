<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filter;
use DB;


class FilterController extends Controller
{
    public function index($category){

        $colors = DB::table('colors')->get();

        $sizes = DB::table('sizes')->orderBy('display_order')->get();

        $sets = DB::table('sets')
                    ->join('products', 'sets.id', '=', 'products.set_ID')
                    ->join('categories', 'categories.id', '=', 'products.category_ID')
                    ->groupBy('sets.id')
                    ->where('categories.name', '=', $category)
                    ->select('sets.id', 'sets.name', 'sets.slug', 'sets.image', 'products.price')
                    ->get();

        return view("filter", ['category'=> $category, 'colors' => $colors, 'sizes' => $sizes, 'sets'=>$sets]); 
      
    }

    public function getSetsByFilter(Request $request ){

        $sets = array();

        if ($request->filteredColors == null && $request->filteredSizes == null) {
            $sets = DB::table('sets')
                ->select('sets.id', 'sets.name', 'sets.slug', 'sets.image', 'products.price')
                ->join('products', 'sets.id', '=', 'products.set_ID')
                ->join('categories', 'categories.id', '=', 'products.category_ID')
                ->join('colors', 'colors.id', '=', 'products.color_ID')
                ->join('sizes', 'sizes.id', '=', 'products.size_ID')
                ->where('categories.name', '=', $request->category)
                ->groupBy('sets.id')
                ->get();
        }
        else if ($request->filteredSizes == null){
            $sets = DB::table('sets')
                    ->select('sets.id', 'sets.name', 'sets.slug', 'sets.image', 'products.price')
                    ->join('products', 'sets.id', '=', 'products.set_ID')
                    ->join('categories', 'categories.id', '=', 'products.category_ID')
                    ->join('colors', 'colors.id', '=', 'products.color_ID')
                    ->join('sizes', 'sizes.id', '=', 'products.size_ID')
                    ->where('categories.name', '=', $request->category)
                    ->whereIn('colors.id', $request->filteredColors)
                    ->groupBy('sets.id')
                    ->get();
        }
        else if ($request->filteredColors == null){
            $sets = DB::table('sets')
                    ->select('sets.id', 'sets.name', 'sets.slug', 'sets.image', 'products.price')
                    ->join('products', 'sets.id', '=', 'products.set_ID')
                    ->join('categories', 'categories.id', '=', 'products.category_ID')
                    ->join('colors', 'colors.id', '=', 'products.color_ID')
                    ->join('sizes', 'sizes.id', '=', 'products.size_ID')
                    ->where('categories.name', '=', $request->category)
                    ->whereIn('sizes.id', $request->filteredSizes)
                    ->groupBy('sets.id')
                    ->get();
        }
        else {
            $sets = DB::table('sets')
                    ->select('sets.id', 'sets.name', 'sets.slug', 'sets.image', 'products.price')
                    ->join('products', 'sets.id', '=', 'products.set_ID')
                    ->join('categories', 'categories.id', '=', 'products.category_ID')
                    ->join('colors', 'colors.id', '=', 'products.color_ID')
                    ->join('sizes', 'sizes.id', '=', 'products.size_ID')
                    ->where('categories.name', '=', $request->category)
                    ->whereIn('colors.id', $request->filteredColors)
                    ->whereIn('sizes.id', $request->filteredSizes)
                    ->groupBy('sets.id')
                    ->get();
        }

        return $sets;
    }
}
