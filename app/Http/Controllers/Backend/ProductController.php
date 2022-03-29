<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('updated_at','DESC')->get();
        return view('admin/product/index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Product.create');
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
            'sub_title' => 'required|min:3',
            'description' => 'required|min:3',
            'sort_order' => 'nullable|integer',
            'status' => 'required',
        ]);

        // PRODUCT IMAGE UPLOADING
        $images = $request->file('image');
        // dd($images);exit;
        if ($request->hasFile('image')) :
                foreach ($images as $item):
                    $var = date_create();
                    $time = date_format($var, 'YmdHis');
                    $imageName = $time . '-' . $item->getClientOriginalName();
                    $item->move(public_path() . '/uploads/products/', $imageName);
                    $arr[] = '/uploads/products/' . $imageName;
                endforeach;
                $image = implode(",", $arr);
        else:
                $image = '';
        endif;

        $location = Product::create([
            'cat_id' => $request->cat_id,
            'location_id' => $request->location_id,
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'description' => $request->description,
            'img_url' => $image,
            'iframe' => $request->iframe,
            'sort_order' => $request->sort_order,
            'status' => $request->status
        ]);
        return redirect('admin/product/index');
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
        $editable_value = Product::where('id',$input['id'])->get();
        return view('admin/product/update',compact('editable_value'));
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
            'sub_title' => 'required|min:3',
            'description' => 'required|min:3',
            'sort_order' => 'nullable|integer',
            'status' => 'required',
        ]);

        if(empty($request->image)){
            $image = $request->old_images;
        }
        else{
            $images = $request->file('image');
            if ($request->hasFile('image')) :
                    foreach ($images as $item):
                        $var = date_create();
                        $time = date_format($var, 'YmdHis');
                        $imageName = $time . '-' . $item->getClientOriginalName();
                        $item->move(public_path() . '/uploads/products/', $imageName);
                        $arr[] = '/uploads/products/' . $imageName;
                    endforeach;
                    $image = implode(",", $arr);
            else:
                    $image = '';
            endif;
        }

        $location = Product::where('id',$request->product_id)->update([
            'cat_id' => $request->cat_id,
            'location_id' => $request->location_id,
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'description' => $request->description,
            'img_url' => $image,
            'iframe' => $request->iframe,
            'sort_order' => $request->sort_order,
            'status' => $request->status
        ]);
        return redirect('admin/product/index');
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
