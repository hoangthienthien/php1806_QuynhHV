<!DOCTYPE html>
<html>
<head>
	<title>Grocery Store</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
		<div class="container">
         <form id="myForm">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name">
            </div>
            <div class="form-group">
              <label for="type">Type:</label>
              <input type="text" class="form-control" id="type">
            </div>
            <div class="form-group">
               <label for="price">Price:</label>
               <input type="text" class="form-control" id="price">
             </div>
            <button class="btn btn-primary">Submit</button>
          </form>
      </div>
</body>
</html>