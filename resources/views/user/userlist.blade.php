<!DOCTYPE html>
<html>
<head>
	<title>UserList</title>
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
	
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">STT</th>
	      <th scope="col">Name</th>
	      <th scope="col">Email</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($users as $user)
	    <tr>
	      <th scope="row">{{$user->id}}</th>
	      <th><a href="#">{{$user->name}}</a></th>
	      <th>{{$user->email}}</th>
	      <th>
	      	<button type="button" name="edit" id="edit">Edit</button>
	      	<button type="button" name="delete" id="delete">Delete</button>
	      </th>
	    </tr>
	    @endforeach
	  </tbody>
	  
	</table>


</body>
</html>