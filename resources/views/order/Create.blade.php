@extends("Layouts.app")

@section ("content")
	<div class="container">
		<form method="POST" action="{{route('order.store')}}">
			@csrf
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Create Order</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="col"><label for="userid">User ID</label></th>
						<th scope="col"><input type="text" name="userid"></th>
					</tr>
					<tr>
						<th scope="col"><label for="price">Total price</label></th>
						<th scope="col"><input type="text" name="totalprice"></th>
					</tr>
					<tr>
						<th scope="col"><label for="description">Description</label></th>
						<th scope="col"><textarea name="description">Enter text here...</textarea></th>
					</tr>
				</tbody>
				
			</table>
			<button type="submit">Create Order</button>
		</form>
	</div>
		
@endsection