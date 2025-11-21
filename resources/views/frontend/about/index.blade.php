@section('seo')
    @include('frontend.seo', [
        'name' => $about_us->seo_title ?? '',
        'title' => $about_us->seo_title ?? $about_us->title,
        'description' => $about_us->meta_description ?? '',
        'keyword' => $about_us->meta_keywords ?? '',
        'schema' => $about_us->seo_schema ?? '',
        'created_at' => $about_us->created_at,
        'updated_at' => $about_us->updated_at,
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

    <!--===== ABOUT AREA STARTS =======-->
    <div class="about13-section-area sp1">
        <div class="container">
            <div class="row align-items-center">
                {{-- LEFT IMAGE AREA --}}
                <div class="col-lg-6">
                    <div class="images-area" data-aos="zoom-in" data-aos-duration="1000">
                        {{-- ⭐ Dynamic Main Image --}}
                        <div class="img1">
                            <img src="{{ asset(($about_us->banner_image ?? 'default.png')) }}" alt="">
                        </div>
                        {{-- ⭐ SVG remains STATIC --}}
                        <div class="img2">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 288 288">
                                <linearGradient id="imagewave" x1="70.711%" x2="0%" y1="70.711%" y2="0%">
                                    <stop class="stop-color2" offset="0%" stop-opacity="1"></stop>
                                    <stop class="stop-color1" offset="100%" stop-opacity="1"></stop>
                                </linearGradient>
                                <path fill="url(#imagewave)">
                                    <animate repeatCount="indefinite" attributeName="d" dur="5s"
                                        values="M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45
                                  c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2
                                  c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7
                                  c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z;
      
                                  M51,171.3c-6.1-17.7-15.3-17.2-20.7-32c-8-21.9,0.7-54.6,20.7-67.1c19.5-12.3,32.8,5.5,67.7-3.4C145.2,62,145,49.9,173,43.4
                                  c12-2.8,41.4-9.6,60.2,6.6c19,16.4,16.7,47.5,16,57.7c-1.7,22.8-10.3,25.5-9.4,46.4c1,22.5,11.2,25.8,9.1,42.6
                                  c-2.2,17.6-16.3,37.5-33.5,40.8c-22,4.1-29.4-22.4-54.9-22.6c-31-0.2-40.8,39-68.3,35.7c-17.3-2-32.2-19.8-37.3-34.8
                                  C48.9,198.6,57.8,191,51,171.3z;
      
                                  M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45
                                  c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2
                                  c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7
                                  c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z">
                                    </animate>
                                </path>
                            </svg>
                        </div>
      
                    </div>
                </div>
                {{-- RIGHT CONTENT AREA STATIC FOR NOW --}}
                <div class="col-lg-6">
                    <div class="about13-header heading20">
      
                        <h5 data-aos="fade-left" data-aos-duration="800">
                            <img src="{{ asset('frontend/assets/img/icons/logo-icons8.svg') }}" alt="">
                            {{ $about_us->small_title ?? 'About Us' }}
                        </h5>
      
                        <div class="space16"></div>
      
                        <h2 class="text-anime-style-3">
                            {{ $about_us->title ?? 'Default About Title' }}
                        </h2>
      
                        <div class="space16"></div>
      
                        <p data-aos="fade-left" data-aos-duration="1000">
                            {!! $about_us->description ?? '' !!}
                        </p>
      
                        <div class="space32"></div>
      
                        <div class="btn-area1" data-aos="fade-left" data-aos-duration="1200">
                            <a href="{{ $about_us->button_link ?? '#' }}" class="header-btn21">
                                {{ $about_us->button_text ?? 'Get Free Quote' }}
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
      
                    </div>
                </div>
            </div>
        </div>
      </div>
    <!--===== ABOUT AREA ENDS =======-->
    <div class="space60"></div>
    <!--===== TEAM AREA STARTS =======-->
    <div class="team13-section-area sp2">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 m-auto">
              <div class="team13-header text-center heading20 space-margin60">
                <h5><img src="{{asset("frontend/assets/img/icons/logo-icons8.svg")}}" alt="">{{ $settings['teams_title'] ?? '' }}</h5>
                <div class="space16"></div>
                <h2 class="text-anime-style-3">{{ $settings['teams_subtitle'] ?? '' }}</h2>
              </div>
            </div>
          </div>
          <div class="row">
      
            @foreach($teams as $index => $team)
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="{{ 800 + ($index * 200) }}">
                <div class="team13-boxarea">
        
                    {{-- Dynamic Image --}}
                    <div class="img1 image-anime">
                        <img src="{{ asset( $team->image) }}"style="height:150px;"  class="team-img" alt="">
                    </div>
        
                    <div class="space24"></div>
        
                    <div class="content-area">
        
                        {{-- Dynamic Name --}}
                        <a href="#">{{ $team->name }}</a>
                        <div class="space12"></div>
                        {{-- Dynamic Position --}}
                        <p>{{ $team->position }}</p>
                    </div>
                    {{-- Dynamic Social Links --}}
                    {{-- <ul>
                        @if($team->facebook)
                            <li><a href="{{ $team->facebook }}"><i class="fa-brands fa-facebook-f"></i></a></li>
                        @endif
        
                        @if($team->instagram)
                            <li><a href="{{ $team->instagram }}"><i class="fa-brands fa-instagram"></i></a></li>
                        @endif
        
                        @if($team->linkedin)
                            <li><a href="{{ $team->linkedin }}"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        @endif
        
                        @if($team->youtube)
                            <li><a href="{{ $team->youtube }}"><i class="fa-brands fa-youtube"></i></a></li>
                        @endif
                    </ul> --}}
                </div>
            </div>
            @endforeach
        
        </div>
        
        </div>
      </div>
@endsection
