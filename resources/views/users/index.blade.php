@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    
                    
                   
                    <div class="example">
        <div class="container">
            <div class="row">
                <h2>Table Basic</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	@foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td><a href="/user/{{$user->id}}">{{$user->name}}</a></td>
                            <td>{{$user->email}}</td>
                            <td></td>
                        </tr>
                         @endforeach

                    </tbody>
                </table>
            </div>
        </div>
         
    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
