@extends('layouts.app')

@section ("content")
	<div class="container">
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
							      <input type="text" class="form-control {{ $errors->has('category_id') ? ' is-invalid' : '' }}" id="category_id " name="category_id" autofocus>
							      @if($errors->has('category_id'))
								      <span class="invalid-feedback" role="alert">
								      		<strong>{{$errors->first('category_id')}}</strong>
								      </span>
							       @endif
							    </div>
							  </div>
							  <div class="form-group row">
							    <label for="inlineFormInput" class="col-sm-2 col-form-label">Product Name</label>
							    <div class="col-sm-4">
							      <input type="text" class="form-control {{ $errors->has('product_name') ? ' is-invalid' : '' }}" id="product_name" name="product_name" >
							      @if($errors->has('product_name'))
								      <span class="invalid-feedback" role="alert">
								      		<strong>{{$errors->first('product_name')}}</strong>
								      </span>
							       @endif
							    </div>
							  </div>
							  <div class="form-group row">
							    <label for="inlineFormInput" class="col-sm-2 col-form-label">Price</label>
							    <div class="col-sm-4">
							      <input type="text" class="form-control {{ $errors->has('price') ? ' is-invalid' : '' }}" id="price" name="price">
							    </div>
							    @if($errors->has('price'))
								      <span class="invalid-feedback" role="alert">
								      		<strong>{{ $errors->first('price') }}</strong>
								      </span>
							    @endif
							  </div>
							  <div class="form-group row">
							    <label for="inlineFormInput" class="col-sm-2 col-form-label">Image</label>
							    <div class="col-sm-4">
							      <input type="file" id="image" name="image">
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
							    <div class="col-sm-10">
							      <textarea class="ckeditor" name="description" id="description" cols="100" rows="9"></textarea>
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

	
	<script>
        ClassicEditor
            .create( document.querySelector( '#description' ) )
            .catch( error => {
                console.error( error );
            } );

    </script>
@endsection