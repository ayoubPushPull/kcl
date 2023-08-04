@extends('layouts.errorsLayout')
@section('title', '400')
@section('content_error')
    <div class="col-md-5">
        <div class="form-input-content text-center error-page">
            <h1 class="error-text font-weight-bold">400</h1>
            <h4><i class="fa fa-thumbs-down text-danger"></i> Bad Request</h4>
            <p>Your Request resulted in an error</p>
            <div>
                <a class="btn btn-primary" href="{{route('landing')}}">Back to Home</a>
            </div>
        </div>
    </div>
@endsection
