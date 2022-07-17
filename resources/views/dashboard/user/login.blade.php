<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('bootstarap.min.css') }}">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-4 ofset-md-4" style="margin-top: 45px;">
			<h4>User Login</h4>
			<form action="">
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" class="form-control" name="email" placeholder="Enter Email">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="password" placeholder="Enter Password">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Login</button>
				</div>
			</form>
		</div> 
	</div>
</div>
</body>
</html>