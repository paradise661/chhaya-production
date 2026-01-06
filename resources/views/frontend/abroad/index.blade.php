@section('seo')
    @include('frontend.seo', [
        'name' => $abroad_page->seo_title ?? '',
        'title' => $abroad_page->seo_title ?? $abroad_page->title,
        'description' => $abroad_page->meta_description ?? '',
        'keyword' => $abroad_page->meta_keywords ?? '',
        'schema' => $abroad_page->seo_schema ?? '',
        'created_at' => $abroad_page->created_at,
        'updated_at' => $abroad_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    <!--===== HERO AREA STARTS =======-->
    <div class="about-header-area" style="">
        <img src="{{ asset('frontend/assets/img/elements/elements1.png') }}" alt="" class="elements1 aniamtion-key-1">
        <img src="{{ asset('frontend/assets/img/elements/star2.png') }}" alt="" class="star2 keyframe5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 m-auto">
                    <div class="about-inner-header heading9 text-center">
                        <h1>{{ $title ?? 'Project' }}</h1>
                        <a href="{{ url('/') }}">
                            Home <i class="fa-solid fa-angle-right"></i>
                            <span>{{ $title ?? 'Project' }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== HERO AREA ENDS =======-->
    <!--===== project AREA STARTS =======-->
    <div class="work13-section-area sp1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 m-auto">
                    {{-- <div class="work-haader text-center heading20 space-margin60">
            <h5 data-aos="fade-left" data-aos-duration="800">
              <img src="assets/img/icons/logo-icons8.svg" alt="">{{ $settings['countries_title'] ?? '' }}
            </h5>
            <div class="space16"></div>
            <h2 class="text-anime-style-3">{{ $settings['countries_subtitle'] ?? '' }}</h2>
          </div> --}}
                </div>
            </div>
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                        <div class="project13-boxrea">
                            {{-- Dynamic Image (Only One) --}}
                            <div class="img1 image-anime">
                                <img src="{{ asset($project->image) }}" class="project-img" alt="">
                            </div>
                            {{-- Dynamic Content --}}
                            <div class="content-area">
                                <span>#{{ $project->title ?? 'Advertising Agency' }}</span>
                                <div class="space16"></div>
                                <a href="{{ route('frontend.projectsingle', $project->slug ?? $project->id) }}"
                                    class="line-clamp-6">
                                    {{ $project->short_description }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--===== project AREA ENDS =======-->
@endsection
