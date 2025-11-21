@section('seo')
    @include('frontend.seo', [
        'name' => $services->seo_title ?? '',
        'title' => $services->seo_title ?? $services->title,
        'description' => $services->meta_description ?? '',
        'keyword' => $services->meta_keywords ?? '',
        'schema' => $services->seo_schema ?? '',
        'created_at' => $services->created_at,
        'updated_at' => $services->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')

@section('content')
    <!--===== HERO AREA STARTS =======-->
    <div class="about-header-area"
        style="background-image: url('{{ asset('frontend/assets/img/bg/inner-header.png') }}'); 
      background-repeat: no-repeat; 
      background-size: cover; 
      background-position: center;">

        <img src="{{ asset('frontend/assets/img/elements/elements1.png') }}" alt="" class="elements1 aniamtion-key-1">

        <img src="{{ asset('frontend/assets/img/elements/star2.png') }}" alt="" class="star2 keyframe5">

        <div class="container">
            <div class="row">
                <div class="col-lg-3 m-auto">
                    <div class="about-inner-header heading9 text-center">
                        <h1>{{ $title ?? 'About Us' }}</h1>
                        <a href="{{ url('/') }}">
                            Home <i class="fa-solid fa-angle-right"></i>
                            <span>{{ $title ?? 'About Us' }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== HERO AREA ENDS =======-->

@endsection
