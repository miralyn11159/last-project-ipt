@extends('base')

@extends('navbar')

@section('title', 'Dashboard')

@section('content')
    <div class="container d-flex align-items-center justify-content-center">
        <a href="/my-post" id="dash-link" class="m-5" style="padding: 20px;">
            <div class="container bg-primary m-3 d-flex align-items-center justify-content-around p-4">
                <span class="text-white float-right" id="text">View post</span><br>
            </div>
        </a>
        <a href="https://www.facebook.com" id="dash-link" class="m-5" style="padding: 20px;">
            <div class="container bg-primary m-3 d-flex align-items-center justify-content-around p-4">
                <span class="text-white float-right" id="text">Go facebook</span><br>
            </div>
        </a>

        <a href="https://www.youtube.com" id="dash-link" class="m-5" style="padding: 20px;">
            <div class="container bg-primary m-3 d-flex align-items-center justify-content-around p-4">
                <span class="text-white float-right" id="text">Go Youtube</span><br>
            </div>
        </a>

    </div>

@endsection
