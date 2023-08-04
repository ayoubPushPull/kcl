@extends('layouts.errorsLayout')
@section('title','404')
@section('content_error')
<div class="col-md-8">
    <div class="form-input-content text-center error-page">
        <h1 class="error-text font-weight-bold">404</h1>
        <h4><i class="fa fa-exclamation-triangle text-warning"></i> The page you were looking for is not found!</h4>
        <p>You may have mistyped the address or the page may have moved.</p>
        <div>
            <a class="btn btn-primary" href="{{route('landing')}}">Back to Home</a>
        </div>
    </div>
</div>
@endsection
