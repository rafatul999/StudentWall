@extends('layouts.app')
@section('title','Create | About')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Add new</h4>
          </div>
          <div class="card-body">
            <form action="{{ route('admin.about.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Name</label>
                    <input type="text" class="form-control" name="name">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Details</label>
                    <input type="text" class="form-control" name="details">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <label class="bmd-label-floating">Image</label>
                  <input type="file" name="image" class="form-control">
                </div>
              </div>
              <button type="submit" class="btn btn-primary pull-right">Create</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection