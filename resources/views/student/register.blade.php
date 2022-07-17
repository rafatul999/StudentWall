<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Register</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
   <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4" style="margin-top: 45px;">
			<h4>Student Register</h4>
			<form action="{{ route('user.create') }}" method="post" autocomplete="off">
				 @if (Session::get('success'))
                         <div class="alert alert-success">
                             {{ Session::get('success') }}
                         </div>
                    @endif
                    @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif
				@csrf
				<div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" class="form-control" name="name" placeholder="Enter full name" value="{{ old('name') }}">
                          <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                      </div>
				{{-- <div class="form-group">
					<label for="university">University</label>
					<input type="text" class="form-control" name="university" placeholder="Enter University Name" value="{{ old('university') }}">
					<span class="text-danger">@error('university'){{ $message }} @enderror</span>
				</div>
				<div class="form-group">
					<label for="department">Department</label>
					<input type="text" class="form-control" name="department" placeholder="Enter Department Name" value="{{ old('department') }}">
					<span class="text-danger">@error('department'){{ $message }} @enderror</span>
				</div>
				<div class="form-group">
					<label for="studentid">Student ID</label>
					<input type="number" class="form-control" name="studentid" placeholder="Enter Student ID" value="{{ old('studentid') }}">
					<span class="text-danger">@error('studentid'){{ $message }} @enderror</span>
				</div> --}}
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" class="form-control" name="email" placeholder="Enter Email" value="{{ old('email') }}">
					<span class="text-danger">@error('email'){{ $message }} @enderror</span>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="password" placeholder="Enter Password" value="{{ old('password') }}">
					<span class="text-danger">@error('password'){{ $message }} @enderror</span>
				</div>
				<div class="form-group">
					<label for="cpassword">Confirm Password</label>
					<input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" value="{{ old('cpassword') }}">
					<span class="text-danger">@error('cpassword'){{ $message }} @enderror</span>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Register</button>
					<br>
					<a href="{{ route('user.login') }}">Already have student Account</a>
				</div>
			</form>
		</div> 
	</div>
</div>
</body>
</html>