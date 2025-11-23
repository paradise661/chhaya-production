@section('seo')
    @include('frontend.seo', [
        'name' => $projectsstudiesingle->seo_title ?? '',
        'title' => $projectsstudiesingle->seo_title ?? $projectsstudiesingle->title,
        'description' => $projectsstudiesingle->meta_description ?? '',
        'keyword' => $projectsstudiesingle->meta_keywords ?? '',
        'schema' => $projectsstudiesingle->seo_schema ?? '',
        'created_at' => $projectsstudiesingle->created_at,
        'updated_at' => $projectsstudiesingle->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    <div class="about-header-area"
        style="">
        <img src="{{asset("frontend/assets/img/elements/elements1.png")}}" alt="" class="elements1 aniamtion-key-1">
        <img src="{{asset("frontend/assets/img/elements/star2.png")}}" alt="" class="star2 keyframe5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="about-inner-header heading9 text-center">
                        <h1>{!! $projectsstudiesingle->title !!}</h1>
                        <a href="{{route('frontend.home')}}">Home <i class="fa-solid fa-angle-right"></i> </a><a href="{{route('frontend.service')}}">Service <i class="fa-solid fa-angle-right"></i> </a>
                        <span>{{$projectsstudiesingle->title}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== HERO AREA ENDS =======-->
    <!--===== BLOG AREA STARTS =======-->
    <div class="blog-auhtor-section-area sp1">
        <div class="container">
            <div class="row">
                {{-- LEFT SIDE (Main Blog Content) --}}
                <div class="col-lg-8">
                    <div class="blog-auhtor-sidebar-area heading2">

                        {{-- Blog Title --}}
                        <h2>{!! $projectsstudiesingle->title !!}</h2>

                        {{-- <div class="space34"></div> --}}

                        {{-- Blog Image --}}
                        <div class="img11">
                            <img src="{{ asset($projectsstudiesingle->image) }}" alt="{{ $projectsstudiesingle->title }}" class="" >
                        </div>
                        <div class="space32"></div>

                        {{-- Blog Description --}}
                        <p>{!! $projectsstudiesingle->description !!}</p>

                        <div class="space50"></div>
                    </div>
                </div>
                {{-- RIGHT SIDE (Sidebar) --}}
                <div class="col-lg-4">
                    <div class="blog-sidebar-area">
                        <div class="space32"></div>
                        {{-- Recent Posts --}}
                        <div class="posts-area">
                            <h3>Recent Post</h3>
                            @foreach ($projectsstudies as $item)
                                <div class="post-auhtor-area ">
                                    <div class="img1" style="width:80px; height:100px;">
                                        <a href="{{ route('frontend.projectsingle', $item->slug) }}">
                                            <img src="{{ asset($item->image) }}" style="width:100% !important; height:100% !important;" alt="{{ $item->title }}">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <a href="{{ route('frontend.projectsingle', $item->slug) }}" class="date">
                                            <img src="{{ asset('frontend/assets/img/icons/calender1.svg') }}"
                                                alt="">
                                            {{ $item->created_at->format('d F Y') }}
                                        </a>
                                        <a href="{{ route('frontend.projectsingle', $item->slug) }}" class="head">
                                            {{ Str::limit($item->title, 50) }}
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="space32"></div>
                        <div class="space32"></div>
                        {{-- Contact Section --}}
                        {{-- <div class="others-area">
                            <h3>If You Need Any Help Contact With Us</h3>
                            <div class="space16"></div>

                           
                            <div class="btn-area">
                                <a href="tel:{{ $blog_page->contact ?? '1234567890' }}" class="header-btn1">
                                    {{ $blog_page->contact ?? '123-456-7890' }}
                                    <span><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== MORE BLOGS =====-->
    {{-- @if ($projectsstudies->count() > 0)
        <div class="blog1-scetion-area sp2 bg2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto text-center">
                        <div class="blog-hedaer-area heading2">
                            <h2>More Services & News</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($projectsstudies as $blog)
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-author-boxarea">
                                <div class="img1">
                                    <img src="{{ asset($blog->image) }}" alt="">
                                </div>
                                <div class="content-area">
                                    <div class="tags-area">
                                        <ul>
                                            <li><i class="fa-solid fa-user"></i> Admin</li>
                                            <li><i class="fa-solid fa-calendar"></i>
                                                {{ $blog->created_at->format('d M Y') }}</li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('frontend.projectsingle', $blog->slug) }}">{{ $blog->title }}</a>
                                    <p>{{ Str::limit(strip_tags($blog->description), 90) }}</p>
                                    <a href="{{ route('frontend.projectsingle', $blog->slug) }}" class="readmore">Read More <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="space30"></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif --}}
@endsection