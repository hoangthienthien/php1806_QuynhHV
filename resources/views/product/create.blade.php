@extends('layouts.app')

@section ("content")
	<div class="container">
		<!-- <form method="POST" action="{{route('product.store')}}">
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
		</form> -->
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">Create Product</div>
					<div class="card-body">
						<form method="POST" action="{{route('product.store')}}">
							@csrf
							  <div class="form-group row">
							    <label for="inlineFormInput" class="col-sm-2 col-form-label">Category ID</label>
							    <div class="col-sm-4">
							      <input type="text" class="form-control" id="category_id" name="category_id">
							    </div>
							  </div>
							  <div class="form-group row">
							    <label for="inlineFormInput" class="col-sm-2 col-form-label">Product Name</label>
							    <div class="col-sm-4">
							      <input type="text" class="form-control" id="product_name" name="product_name" >
							    </div>
							  </div>
							  <div class="form-group row">
							    <label for="inlineFormInput" class="col-sm-2 col-form-label">Price</label>
							    <div class="col-sm-4">
							      <input type="text" class="form-control" id="price" name="price">
							    </div>
							  </div>
							  <div class="form-group row">
							    <label for="inlineFormInput" class="col-sm-2 col-form-label">Image</label>
							    <div class="col-sm-4">
							      <input type="text" class="form-control" id="image" name="image">
							    </div>
							  </div>
							  <div class="form-group row">
							    <label for="inlineFormInput" class="col-sm-2 col-form-label">Quanity</label>
							    <div class="col-sm-4">
							      <input type="text" class="form-control" id="quanity" name="quanity">
							    </div>
							  </div>
							  <div class="form-group row">
							    <label for="inlineFormInput" class="col-sm-2 col-form-label">Avg Rating</label>
							    <div class="col-sm-4">
							      <input type="text" class="form-control" id="avg_rating" name="avg_rating">
							    </div>
							  </div>
							  <div class="form-group row">
							    <label for="inlineFormInput" class="col-sm-2 col-form-label">Description</label>
							    <div class="col-sm-4">
							      <textarea class="ckeditor" name="editor" cols="80" rows="5"></textarea>
							    </div>
							  </div>
							  
							  <div class="form-group row">
							    <div class="col-sm-10">
							      <button type="submit" class="btn btn-primary">Create Product</button>
							    </div>
							  </div>
						</form>
					</div>
				</div>
			</div>
		</div>




	</div>
@endsection