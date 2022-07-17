@extends('layout.app')
@section('title','Todos | Home')

@section('content')

<br><br>

  <div class="row">
  	<div class="col-lg-4">
  <div class="list-group">
  <button type="button" class="list-group-item list-group-item-action active" style="background-color:#7A00B7;">
    Todos
  </button>
  <button type="button" class="list-group-item list-group-item-action"><a href="" class="nav-link" style="color:#7A00B7;"> Home</a></button>
  <button type="button" class="list-group-item list-group-item-action"><a href="create" class="nav-link" style="color:#7A00B7;">Create new todo</a></button>
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
            	<ul class="list-group">
            		@foreach($todos as $todo)
            		<li class="list-group-item">{{ $todo->name }}
                     @if(!$todo->completed)
					   <a href="/todos/{{ $todo->id }}/complete"class="btn btn-warning float-end">Complete</a>
					   @endif
					    <a href="todos/{{ $todo->id }}" class="btn btn-primary float-end">View</a>
            		</li>
            		@endforeach
            	</ul>
            </div>

  		</div>
  	   
    </div>
  </div>

@endsection