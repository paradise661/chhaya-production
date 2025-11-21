@section('seo')
    @include('frontend.seo', [
        'name' => $blog_page->seo_title ?? '',
        'title' => $blog_page->seo_title ?? $blog_page->title,
        'description' => $blog_page->meta_description ?? '',
        'keyword' => $blog_page->meta_keywords ?? '',
        'schema' => $blog_page->seo_schema ?? '',
        'created_at' => $blog_page->created_at,
        'updated_at' => $blog_page->updated_at,
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
    <div class="blog13-section-area sp2">
        <div class="container">
            <div class="row">
              @foreach($blog as $index => $blog)
                  <div class="col-lg-4 col-md-6" data-aos="zoom-out" data-aos-duration="{{ 800 + ($index * 200) }}">
                      
                      <div class="blog-auhtor-boxarea">
                          
                          {{-- Author and Date --}}
                          <ul>
                              <li><a href="#"><i class="fa-regular fa-circle-user"></i>{{ $blog->author }}</a></li>
                              <li class="m-0"><a href="#"><i class="fa-solid fa-calendar-days"></i> {{ \Carbon\Carbon::parse($blog->created_at)->format('d M Y') }}</a></li>
                          </ul>
          
                          <div class="space24"></div>
          
                          {{-- Blog Image --}}
                          <div class="img1 image-anime">
                              <img src="{{ asset( $blog->image) }}" alt="{{ $blog->title }}">
                          </div>
          
                          <div class="space24"></div>
          
                          {{-- Blog Content --}}
                          <div class="blog-content-area">
                              <a href="{{ route('frontend.blogsingle', $blog->slug) }}">{{ $blog->title }}</a>
                              <div class="space16"></div>
                              <p>{{ Str::limit($blog->excerpt, 120) }}</p>
                              <div class="space24"></div>
                              <a href="{{ route('frontend.blogsingle', $blog->slug) }}" class="readmore">Learn More<i class="fa-solid fa-arrow-right"></i></a>
                          </div>
                          
                      </div>
                  </div>
              @endforeach
          </div>
          
        </div>
      </div>
@endsection
