<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();

        return view('product.index',['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new \App\Products;
        
        $product->category_id = $request->get('category_id');
        $product->product_name = $request->get('product_name');
        $product->price = $request->get('price');
        $product->image = $request->get('image');
        $product->quanity = $request->get('quanity');
        $product->avg_rating = $request->get('avg_rating');

        $product->save();

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Products::find($id);

        if(!$product) {
            return back();
        }
        else {
            return view('product.show',[]);
        }

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Products::find($id);
        if(!$product) {
            return back();
        }
        else {
            return view('product.edit', ['product' => $product]);
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->only([
            'category_id',
            'product_name',
            'price',
            'image',
            'quanity',
            'avg_rating',
        ]);
        try{
            $product = Products::find($id);
            $product->update($data);

        }catch(Exception $e) {
            return back()->with('Fail', 'Update fail');
        }

        return redirect('product/index')->with('success','Update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{

            $product = Products::findOrFail($id);
            $product->delete();

            $result = [
                'status' => 'true',
                'msg' => 'Delete success',
            ];


        } catch(\Exception $e) {
            $result = [
                'status' => 'false',
                'msg' => 'Delete fail',
            ];

        }
        return response()->json($result);
    }
}
