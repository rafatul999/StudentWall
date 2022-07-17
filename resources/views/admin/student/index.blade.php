@extends('layouts.app')
@section('title','Student | Dashboard')
@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet"  href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">
@endpush
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <a href="{{ route('admin.student.create') }}" class="btn btn-primary">Add new</a>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Student info </h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered" id="table">
                <thead class=" text-primary">
                  <th> SI </th>
                  <th> Name </th>
                  <th> Email </th>
                  <th> Phone </th>
                  <th> DOB</th>
                  <th> Department</th>
                  <th> S ID</th>
                  <th> Pass</th>
                  <th> Action</th>
                </thead>
                {{-- <tbody>
                  @foreach($about as $key=>$about)
                  <tr>
                    <td> {{ $key+1 }} </td>
                    <td> {{ $about->name }}</td>
                    <td> {{ $about->details }} </td>
                    <td> <img style="height: 50px; width: 70px" src="{{ asset('uploads/about/'.$about->image)  }}"> </td>
                    <td class="text-primary">
                      <form id="delete-form-{{ $about->id }}" action="{{ route('about.destroy',$about->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                      </form>
                      <button class="btn btn-danger float-right" type="button" onclick="if(confirm('Are you sure want to delete?')){
                      event.preventDefault();document.getElementById('delete-form-{{ $about->id }}').submit();
                      }else{
                      event.preventDefault();
                      } ">
                      <i class="material-icons">delete</i>
                      </button>
                      <a href="{{ route('about.edit',$about->id) }}" class="btn btn-info float-right"> <i class="material-icons">edit</i> </a>
                      <a href="{{ route('about.show',$about->id) }}" class="btn btn-primary float-right"> View </a>
                    </td>
                  </tr>
                  @endforeach
                  
                </tbody> --}}
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@push('js')
<script  src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script  src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
<script>
  $(document).ready(function() {
$('#table').DataTable();
} );
</script>

@endpush