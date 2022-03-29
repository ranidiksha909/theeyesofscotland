<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::orderBy('updated_at','DESC')->get();
        return view('admin.Category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'icon' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
            'sort_order' => 'nullable|integer',
            'status' => 'required',
        ]);
        if ($request->hasfile('icon')) {
            $bnr_image = $request->file('icon');
            $name = preg_replace("/[^a-z0-9\._]+/", "-", strtolower(time() . rand(1, 9999) . '.' . $bnr_image->getClientOriginalName()));
            if ($bnr_image->move(public_path() . '/uploads/category', str_replace(" ", "", $name))) {
                // $imageURL = url('/') . '/uploads/banners/' . $name;
                $cat_icon = '/uploads/category/' . $name;
            }
        }
        else{
            $cat_icon = "";
        }
        $category = Category::create([
            'title' => $request->title,
            'icon' => $cat_icon,
            'sort_order' => $request->sort_order,
            'status' => $request->status
        ]);
        return redirect('admin/category/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $input = $request->all();
        $editable_value = Category::where('id',$input['id'])->get();
        return view('admin/category/update',compact('editable_value'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'icon' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
            'sort_order' => 'nullable|integer',
            'status' => 'required',
        ]);
        if(empty($request->icon)){
            $product_icon = $request->old_icon;
        }
        else{
            if ($request->hasfile('icon')) {
                $bnr_image = $request->file('icon');
                // var_dump($image);exit;
                // foreach($)
                $bnr_name = preg_replace("/[^a-z0-9\._]+/", "-", strtolower(time() . rand(1, 9999) . '.' . $bnr_image->getClientOriginalName()));
                if ($bnr_image->move(public_path() . '/uploads/category', str_replace(" ", "", $bnr_name))) {
                    // $imageURL = url('/') . '/uploads/banners/' . $name;
                    $product_icon = '/uploads/category/' . $bnr_name;
                }
            }
        }
        $category = Category::where('id',$request->id)->update([
            'title' => $request->title,
            'icon' => $product_icon,
            'sort_order' => $request->sort_order,
            'status' => $request->status
        ]);
        return redirect('admin/category/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
