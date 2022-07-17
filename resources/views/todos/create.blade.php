@extends('layout.app')
@section('title','Todos | Create')

@section('content')

<br><br>

  <div class="row">
  	<div class="col-lg-4">
  <div class="list-group">
  <button type="button" class="list-group-item list-group-item-action active" style="background-color:#7A00B7;">
    Todos
  </button>
  <button type="button" class="list-group-item list-group-item-action"><a href="todos" class="nav-link" style="color:#7A00B7;"> Home</a></button>
  <button type="button" class="list-group-item list-group-item-action"><a href="" class="nav-link" style="color:#7A00B7;">Create new todo</a></button>
  <button type="button" class="list-group-item list-group-item-action"><a href="" class="nav-link" style="color:#7A00B7;">Update todo</a></button>
  <button type="button" class="list-group-item list-group-item-action" disabled>Delete Todo</button>
</div>
  	</div>
  	<div class="col-lg-8">

  		<div class="card" >
  			<div class="card-header">
  				<h3 class="card-title"></h3>
  			</div>
            <div class="card-body">
                @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif


    <form action="/store-todo" method="POST">
      @csrf
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" placeholder="name">
      </div>
      <div class="form-group mt-4">
        <label>Description</label>
        <textarea type="text" name="description" class="form-control" placeholder="description"></textarea>
      </div>
      <div class="form-group">
        <input type="submit" name="submit" class="mt-3 btn btn-success">
      </div>

    </form>
           </div>

  		</div>
  	   
    </div>
  </div>

@endsection