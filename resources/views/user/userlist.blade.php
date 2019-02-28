@extends('layouts.app');

@section('content')
	<div class="card-header"> User List</div>

	<div class="card-body">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col">Email</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($users as $user)
					<tr>
						<th> {{ $user -> id }} </th>
						<th> {{ $user -> name }} </th>
						<th> {{ $user -> email }} </th>
						<th>
							<button>Edit</button>
							<button>Update</button>
						</th>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection