@extends('layouts.app')

@section('content')

	<div class="container">
	        <div class="row justify-content-center">
	            <div class="col-md-8">
	                <div class="card">
	                    <div class="card-header">Order List</div>

	                    <div class="card-body">
	                        @if (Session::has('message'))
	                            <div class="alert alert-success">{{ Session::get('message') }} </div>
	                        @endif
	                        @if (Session::has('error'))
	                            <div class="alert alert-warning">{{ Session::get('error') }} </div>
	                        @endif
	                        @if($orders->isEmpty())
	                            <div class="alert alert-info alert-block">
	                                <strong>You have not roduct</strong>
	                            </div>
	                        @else

							<form method="GET" action="{{route('product.create')}}">
								@csrf
								<table class="table">
								  <thead>
								    <tr>
								      <th scope="col">#</th>
								      <th scope="col">category_id</th>
								      <th scope="col">product_na</th>
								      <th scope="col">price</th>
								      <th scope="col">quanity</th>
								      <th scope="col">avg_rating</th>
								      <th scope="col">image</th>
								      <th scope="col">Action</th>
								    </tr>
								  </thead>
								  <tbody>
								  	@foreach($products as $product)
								    <tr>
								      <th scope="col">{{$product->id}}</th>
								      <td scope="col">{{$product->category_id}}</td>
								      <td scope="col">{{$product->product_na}}</td>
								      <td scope="col">{{$product->price}}</td>
								      <td scope="col">{{$product->quanity}}</td>
								      <td scope="col">{{$product->avg_rating}}</td>
								      <td scope="col">{{$product->image}}</td>
								      <td scope="col">
								      		<button type="button" name="edit">Edit</button>
								      		<button type="button" name="delete">Delete</button>
								      </td>
								    </tr>
								    @endforeach
								  </tbody>

								</table>
								<button type="submit">Add Product</button>
							</form>
						</div>	
					</div>		
				</div>			
			</div>				
	</div>

@endsection

<script type="text/javascript">
	
</script>