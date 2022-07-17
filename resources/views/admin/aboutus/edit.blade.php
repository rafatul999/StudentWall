@extends('layouts.app') 

@section('title','Edit | About')


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
               <form action="{{ route('admin.about.update',$about->id) }}" method="POST" 
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" name="name" value="{{ $about->name }}">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Details</label>
                          <input type="text" class="form-control" name="details" value="{{ $about->details }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <img src="{{ asset('uploads/about/'.$about->image) }}" alt="" style="height:70px; width:130px;">
                          <label class="bmd-label-floating">Feature Image</label>
                          <input type="file" name="image" class="form-control">
                        </div>
                      </div>

                    <button type="submit" class="btn btn-primary float-end">Update</button>
                  <a class="btn btn-primary" href="{{ route('admin.about.index') }}">back</a>
                  </form>
               </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>   

@endsection

