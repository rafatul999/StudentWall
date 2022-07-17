@extends('layouts.app')
@section('title','Edit | Library')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Edit</h4>
          </div>
          <div class="card-body">
            <form action="{{ route('admin.library.update',$library->id) }}" method="POST"
              enctype="multipart/form-data">
              @csrf
              @method('put')
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Category</label>
                    <select class="form-control" name="category">
                      @foreach($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $library->name }}">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Description</label>
                    <input type="text" class="form-control" name="description" value="{{ $library->description }}">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <label class="bmd-label-floating">Feature Image</label>
                  <img src="{{ asset('uploads/library/'.$library->image) }}" alt="" style="height:130px; width:90px;">    
                  <input type="file" name="image" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <label class="bmd-label-floating">PDF Book</label>
                  <iframe src="{{ asset('uploads/library/'.$library->file) }}"></iframe>
                  <input type="file" name="file" class="form-control">
                </div>
              </div>
              <button type="submit" class="btn btn-primary float-end">Update</button>
              <a class="btn btn-primary" href="{{ route('admin.library.index') }}">back</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection