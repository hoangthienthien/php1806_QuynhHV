<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Http\Requests\ProductCreateRequest;

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
    public function store(ProductCreateRequest $request)
    {
        $image = $request->file('image');
        $uploaded = $this->uploadimage($image);
        // dd($uploaded);
        $product = new Products;

        $product->category_id = $request->category_id;
        $product->product_name = $request->product_name;
        $product->price = $request->price;
        $product->quanity = $request->quanity;
        $product->image = 'image/' . $uploaded['file_name'];
        $product->avg_rating = $request->avg_rating;
        $product->description = $request->description;
        try {
            $product->save();
            
        }catch(Exception $e) {

            return back()->with('status', 'Create fail!');
        }
        return redirect()->route('product.index')->with('success', 'Create product succes');
       

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
            return view('product.show',['product'=>$product]);
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
            'description',
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


        } catch(Exception $e) {
            $result = [
                'status' => 'false',
                'msg' => 'Delete fail',
            ];

        }
        return response()->json($result);
    }

    private function uploadimage($file) {
        $destinationFolder = public_path('image');

            $fileName = $file->getClientOriginalName();
            $imageFileType = $file->getClientOriginalExtension();

            if($imageFileType != "jpg" || $imageFileType != 'png') {
                $result = [
                    'status' => false,
                    'msg' => 'Anh chỉ chấp nhận jpg với png thôi cưng',
                ];
            }else {
                $file->move($destinationFolder, $fileName);

                $result = [
                    'status' => true,
                    'file_name' => $fileName,
                    'destination' => $destinationFolder,
                ];
            }
        
        return $result;
    }
}
