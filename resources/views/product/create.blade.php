@extends('layouts.app')

@section ("content")
	<div class="container">
		<form method="POST" action="{{route('product.store')}}">
			@csrf
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Create Product</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="col"><label for="categoryid">Category ID</label></th>
						<th scope="col"><input type="text" name="category_id"></th>
					</tr>
					<tr>
						<th scope="col"><label for="product_name">Product Name</label></th>
						<th scope="col"><input type="text" name="product_name"></th>
					</tr>
					<tr>
						<th scope="col"><label for="price">Price</label></th>
						<th scope="col"><input type="text" name="price"></th>
					</tr>
					<tr>
						<th scope="col"><label for="image">Image</label></th>
						<th scope="col"><input type="text" name="image"></th>
					</tr>
					<tr>
						<th scope="col"><label for="quanity">Quanity</label></th>
						<th scope="col"><input type="text" name="quanity"></th>
					</tr>
					<tr>
						<th scope="col"><label for="avg_rating">Avg Rating</label></th>
						<th scope="col"><input type="text" name="avg_rating"></th>
					</tr>
				</tbody>
				
			</table>
			<button type="submit">Create Product</button>
		</form>
	</div>
		
@endsection