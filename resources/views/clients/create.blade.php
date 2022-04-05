@extends('clients.layout')
@section('content')
    @if(Session::has('error_message'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top:10px;">
            {{Session::get('error_message')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if(Session::has('success_message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:10px;">
            {{Session::get('success_message')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
<form action="{{route('clients.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" required="">
    </div>
    <div class="mb-3">
        <label for="family" class="form-label">Family</label>
        <input type="text" name="family" class="form-control" id="family"  required="">
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="number" name="phone" class="form-control" id="phone"  required="">
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
