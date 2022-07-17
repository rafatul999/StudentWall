<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap.min.css') }}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="background-color: #c8d9e8 !important;">
   <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4" style="margin-top: 45px;">

			<h4>Admin Login</h4>
			<form action="{{ route('admin.check') }}" method="post" autocomplete="off">
				@if (Session::get('fail'))
                         <div class="alert alert-danger">
                             {{ Session::get('fail') }}
                         </div>
                    @endif
				@csrf
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" class="form-control" name="email" placeholder="Enter Email" value="{{ old('email') }}">
					<span class="text-danger">@error('email'){{ $message }} @enderror</span>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="password" placeholder="Enter Password" value="{{ old('password') }}" >
					<span class="text-danger">@error('password'){{ $message }} @enderror</span>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Login</button>
					<br>
					
				</div>
			</form>
		</div> 
	</div>
</div>
</body>
</html>