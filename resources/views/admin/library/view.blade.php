@extends('layouts.app')
@section('title','View | Library')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">View</h4>
          </div>
          <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Name</label>
                     <h4>{{ $library->name }}</h4>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Category</label>
                     <h4>{{ $library->category->name }}</h4>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Description</label>
                    <p>{{ $library->description }}</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <label class="bmd-label-floating">Feature Image</label>
                  <img src="{{ asset('uploads/library/'.$library->image) }}" alt="" style="height:170px; width:130px;">
                </div>
              </div>
               <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">PDF</label>
                    {{-- <p>{{ $library->file }}</p> --}}
                    <iframe style="height: 400px; width:400px" src="{{ asset('uploads/library/'.$library->file) }}"></iframe>
                  </div>
                </div>
              </div>
              <a class="btn btn-primary" href="{{ route('admin.library.index') }}">back</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection