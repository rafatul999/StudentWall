<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Register</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('bootstarap.min.css') }}">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-4 ofset-md-4" style="margin-top: 45px;">
			<h4>User Register</h4>
			<form action="">
				<div class="form-group">
					<label for="name">Email</label>
					<input type="text" class="form-control" name="name" placeholder="Enter Full Name">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" class="form-control" name="email" placeholder="Enter Email">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="password" placeholder="Enter Password">
				</div>
				<div class="form-group">
					<label for="cpassword">Confirm Password</label>
					<input type="password" class="form-control" name="cpassword" placeholder="Confirm Password">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Register</button>
				</div>
			</form>
		</div> 
	</div>
</div>
</body>
</html>