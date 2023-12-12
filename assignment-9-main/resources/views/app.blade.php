@extends('index')
@section('content')
    <!-- ======= Hero Section ======= -->
    @include('partials.hero')
    <!-- End Hero -->

    <div class="container">
        <div class="row my-2">
            <div class="col-md-3"></div>
            <div class="col-md-9">
                @include('partials.skills')
            </div>
        </div>
    </div>
@endsection