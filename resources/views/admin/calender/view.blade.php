@extends('layouts.app')
@section('title','View | Calender')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">View Calender</h4>
          </div>
          <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Name</label>
                     <h4>{{ $calender->name }}</h4>
                  </div>
                </div>
              </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Descrition</label>
                  <h4>{{ $calender->description }}</h4>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">PDF</label>
                  {{-- <p>{{ $calender->file }}</p> --}}
                  <iframe style="height: 400px; width:400px" src="{{ asset('uploads/calender/'.$calender->file) }}"></iframe>
                </div>
              </div>
            </div>
            <a class="btn btn-primary" href="{{ route('admin.calender.index') }}">back</a>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection