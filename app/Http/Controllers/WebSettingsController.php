<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class WebSettingsController extends Controller
{
   public function itemDetails(Request $request)
   {
        $details = Product::where(['id'=>$request->id])->with(['location','category'])->first();
        return view('details',compact('details'));
   }

   public function search(Request $request)
   {
    //    dd('hi');
    $search_result = array();
    $search_key = (isset($request->search_key))?$request->search_key:'';
    $search_result = Product::where('title','like',"%{$search_key}%")->with(['location','category'])->get();
    // dd($search_result);
    return view('search',compact('search_result','search_key'));
   }
}
