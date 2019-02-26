<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index() {
    	$users = User::all();

    	return view('users.index',['users' => $users]);
    }
    public function delete() {

    }
    public function edit() {

    }
    public function show($id) {
    	dd(1);
        $profile = User::find($id)->profile();

        return view('users.show', ['profile'=>$profile]);
    }
}
