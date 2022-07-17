@extends('layouts.app')
@section('title','Edit | About')
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
                    <h3>{{ $about->name }}</h3>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Details</label>
                    <p>{{ $about->details }}</p>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <label class="bmd-label-floating">Feature Image</label>
                  <img src="{{ asset('uploads/about/'.$about->image) }}" alt="" style="height:170px; width:130px;">
                </div>
              </div>
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