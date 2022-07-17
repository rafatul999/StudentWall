@extends('layout.app')
@section('title','Todos | Details')

@section('content')

<br><br>

  <div class="row">
  	<div class="col-lg-4">
  <div class="list-group">
  <button type="button" class="list-group-item list-group-item-action active" style="background-color:#7A00B7;">
    Todos
  </button>
  <button type="button" class="list-group-item list-group-item-action"><a href="/todos" class="nav-link" style="color:#7A00B7;"> Home</a></button>
  <button type="button" class="list-group-item list-group-item-action"><a href="/create" class="nav-link" style="color:#7A00B7;">Create new todo</a></button>
  <button type="button" class="list-group-item list-group-item-action"><a href="" class="nav-link" style="color:#7A00B7;">Update todo</a></button>
  <button type="button" class="list-group-item list-group-item-action" disabled>Delete Todo</button>
</div>
  	</div>
  	<div class="col-lg-8">

  		<div class="card" >

  			  	<div class="card">
		<div class="card-header">
				<h4 class="card-title">{{ $todo->name }}</h4>
		</div>
		<div class="card-body">
			<p>{{ $todo->description }}</p>
			<a href="/todos/{{ $todo->id }}/edit" class="btn btn-primary float-end">Edit</a> 
			<a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger float-end">Delete</a>
		</div>
	</div>

  	   
        </div>
    </div>

@endsection