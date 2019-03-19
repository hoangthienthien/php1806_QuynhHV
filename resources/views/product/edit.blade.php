@extends('layouts.app')

@section ("content")
	<div class="container">
		<form method="POST" action="{{route('product.update')}}">
			@csrf
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Update Product</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="col"><label for="categoryid">Category ID</label></th>
						<th scope="col"><input type="text" name="category_id" value = "{{$product->category_id}}"></th>
					</tr>
					<tr>
						<th scope="col"><label for="product_name">Product Name</label></th>
						<th scope="col"><input type="text" name="product_name" value = "{{$product->product_name}}"></th>
					</tr>
					<tr>
						<th scope="col"><label for="price">Price</label></th>
						<th scope="col"><input type="text" name="price" value="{{$product->price}}"></th>
					</tr>
					<tr>
						<th scope="col"><label for="image">Image</label></th>
						<th scope="col"><input type="text" name="image" value="{{$product->image}}"></th>
					</tr>
					<tr>
						<th scope="col"><label for="quanity">Quanity</label></th>
						<th scope="col"><input type="text" name="quanity" value="{{$product->quanity}}"></th>
					</tr>
					<tr>
						<th scope="col"><label for="avg_rating">Avg Rating</label></th>
						<th scope="col"><input type="text" name="avg_rating" value="{{$product->avg_rating}}"></th>
					</tr>
				</tbody>
				
			</table>
			<button type="submit">Update Product</button>
		</form>
	</div>
		
@endsection