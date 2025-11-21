@section('seo')
    @include('frontend.seo', [
        'name' => $service_page->seo_title ?? '',
        'title' => $service_page->seo_title ?? $service_page->title,
        'description' => $service_page->meta_description ?? '',
        'keyword' => $service_page->meta_keywords ?? '',
        'schema' => $service_page->seo_schema ?? '',
        'created_at' => $service_page->created_at,
        'updated_at' => $service_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')

@section('content')

    <!--===== HERO AREA STARTS =======-->
    <div class="about-header-area"
        style="">

        <img src="{{ asset('frontend/assets/img/elements/elements1.png') }}" alt="" class="elements1 aniamtion-key-1">

        <img src="{{ asset('frontend/assets/img/elements/star2.png') }}" alt="" class="star2 keyframe5">

        <div class="container">
            <div class="row">
                <div class="col-lg-3 m-auto">
                    <div class="about-inner-header heading9 text-center">
                        <h1>{{ $title ?? 'Service' }}</h1>
                        <a href="{{ url('/') }}">
                            Home <i class="fa-solid fa-angle-right"></i>
                            <span>{{ $title ?? 'Service' }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== HERO AREA ENDS =======-->
    <div class="service13-section-area sp2"  style=" background-color:white;">
        <div class="container">
          <div class="row">
            @foreach($services as $index => $service)
                <div class="col-lg-4 col-md-6 " data-aos="zoom-in" data-aos-duration="{{ 800 + ($index * 100) }}">
                    <div class="service13-boxarea shadow">
        
                        {{-- Dynamic Icon --}}
                        <div class="icons">
                            <img src="{{ asset( $service->image) }}" alt="">
                        </div>
        
                        <div class="space32"></div>
        
                        <div class="content-area">
        
                            {{-- Dynamic Service Title --}}
                            <a href="{{ route('frontend.singleservice', $service->slug) }}" class="head">
                                {{ $service->title }}
                            </a>
        
                            <div class="space16"></div>
        
                            {{-- Dynamic Short Description --}}
                            <p>{{ Str::limit($service->short_description, 120) }}</p>
        
                            <div class="space24"></div>
        
                            {{-- Learn More Link --}}
                            <a href="{{ route('frontend.singleservice', $service->slug) }}" class="readmore">
                                Learn More <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            {{-- Dynamic Number 01, 02, 03 --}}
                            <h2>{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</h2>
                        </div>
                    </div>
                </div>
            @endforeach
        
        </div>
        
        </div>
      </div>

    <!--=====service end=======-->
@endsection
