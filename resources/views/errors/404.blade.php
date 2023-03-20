@extends('layouts.master')
@section('title','Page Not Found')
@section('content')

<section style="padding-top:100px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h1 style="font-size:162px;">404</h1>
                <h2>Page not Found</h2>
                <p>I'm sorry, the page you requested could not be reached at the moment.</p>
                <a href="/" class="btn btn-primary">Homepage</a>
            </div>
        </div>
    </div>
</section>

@endsection
