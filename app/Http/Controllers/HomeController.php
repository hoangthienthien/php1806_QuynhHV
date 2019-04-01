<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    // public function uploadImage(Request $request) {
    //      $this->validate($request, [
    //     'input_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);

    //     if ($request->hasFile('input_img')) {
    //         $image = $request->file('input_img');
    //         $name = time().'.'.$image->getClientOriginalExtension();
    //         $destinationPath = public_path('/images');
    //         $image->move($destinationPath, $name);
    //         $this->save();

    //         return back()->with('success','Image Upload successfully');
    //     }
    // }
}
