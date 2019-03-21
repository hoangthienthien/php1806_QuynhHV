@extends('layouts.app')

@section ("content")
	<div class="container">
		<!-- <form method="POST" action="{{route('product.update',$product->id)}}">
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
		</form> -->

		<form method="POST" action="{{route('product.update',$product->id)}}">
		  <div class="form-group row">
		    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
		    </div>
		  </div>
		  <fieldset class="form-group">
		    <div class="row">
		      <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
		      <div class="col-sm-10">
		        <div class="form-check">
		          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
		          <label class="form-check-label" for="gridRadios1">
		            First radio
		          </label>
		        </div>
		        <div class="form-check">
		          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
		          <label class="form-check-label" for="gridRadios2">
		            Second radio
		          </label>
		        </div>
		        <div class="form-check disabled">
		          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
		          <label class="form-check-label" for="gridRadios3">
		            Third disabled radio
		          </label>
		        </div>
		      </div>
		    </div>
		  </fieldset>
		  <div class="form-group row">
		    <div class="col-sm-2">Checkbox</div>
		    <div class="col-sm-10">
		      <div class="form-check">
		        <input class="form-check-input" type="checkbox" id="gridCheck1">
		        <label class="form-check-label" for="gridCheck1">
		          Example checkbox
		        </label>
		      </div>
		    </div>
		  </div>
		  <div class="form-group row">
		    <div class="col-sm-10">
		      <button type="submit" class="btn btn-primary">Sign in</button>
		    </div>
		  </div>
		</form>






		
	</div>
		
@endsection