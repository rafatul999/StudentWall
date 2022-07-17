@extends('layouts.app')
@section('title','Create | Class')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Add New Class</h4>
          </div>
          <div class="card-body">
            <form action="{{-- {{ route('class.store') }} --}}" method="POST" enctype="multipart/form-data">
              @csrf
              
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Class Name</label>
                    <input type="text" class="form-control" name="name">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Section</label>
                    <input type="text" class="form-control" name="section">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Subject</label>
                    <input type="text" class="form-control" name="subject">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Room</label>
                    <input type="text" class="form-control" name="room">
                  </div>
                </div>
              </div>
              
              <button type="submit" class="btn btn-primary pull-right">Create Class</button>
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