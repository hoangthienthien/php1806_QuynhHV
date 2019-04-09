@extends('layouts.app')

@section("content")
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<!-- @if (session("status"))
					<div class="alert alert-success">
						{{ session('status')}}
					</div>
				@endif -->
				<div class="card">
					<div class="card-header">Product profile</div>

					<div class="card-body">
						<div class="row">
							<div class="col-md-4">{{__('Category')}}</div>
							<div class="col-md-4">{{ $product->category_id }}</div>
						</div>
						<div class="row">
							<div class="col-md-4">{{__('Product Name')}}</div>
							<div class="col-md-4">{{ $product->product_name }}</div>
						</div>
						<div class="row">
							<div class="col-md-4">{{ __('Price')}}</div>
							<div class="col-md-4">{{ $product->price }}</div>
						</div>
						<div class="row">
							<div class="col-md-4">{{ __('image')}}</div>
							<img src="{{ asset($product->image) }}" alt = "{{ $product->image }}" style="width: 100%">
							
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
@endsection

