@extends('layouts.errorsLayout')
@section('title', '503')
@section('content_error')
    <div class="col-md-5">
        <div class="form-input-content text-center error-page">
            <h1 class="error-text font-weight-bold">503</h1>
            <h4><i class="fa fa-times-circle text-danger"></i> Service Unavailable</h4>
            <p>Sorry, we are under maintenance!</p>
            <div>
                <a class="btn btn-primary" href="{{route('landing')}}">Back to Home</a>
            </div>
        </div>
    </div>
@endsection
