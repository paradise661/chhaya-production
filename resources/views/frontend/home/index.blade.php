@extends('layouts.frontend.master')
@section('content')
<!--===== MOBILE HEADER STARTS =======-->
<!--===== HERO AREA STARTS =======-->
<div class="hero13-section-area">
  <div class="img2">
      <img src="{{ asset('frontend/assets/img/bg/header-bg13.png') }}" alt="" class="header-bg13">
  </div>

  <div class="container">
      <div class="row align-items-center">
          <div class="col-lg-6">
              <div class="hero13-header heading19">
                  {{-- Dynamic Small Title --}}
                  <h5>
                      <img src="{{ asset('frontend/assets/img/icons/logo-icons8.svg') }}" alt="">
                      {{ $sliders->title ?? '' }}
                  </h5>
                  <div class="space16"></div>
                  {{-- Dynamic Main Title --}}
                  <h2>{{ $sliders->short_description ?? '' }}</h2>
                  <div class="space24"></div>
                  {{-- Dynamic Description --}}
                  <p>{!! $sliders->description ?? 'Default description goes here.' !!}</p>
                  <div class="space32"></div>
                  <div class="btn-area1">
                      {{-- Dynamic Button 1 --}}
                      <a href="{{ route('frontend.contact')}}" class="header-btn21">
                          {{ $sliders->btn_text1 ?? 'Contact Us' }}
                          <i class="fa-solid fa-arrow-right"></i>
                      </a>

                      {{-- Dynamic Button 2 --}}
                      {{-- <a href="{{ $sliders->btn_link2 ?? '#' }}" class="header-btn21 btn2">
                          {{ $sliders->btn_text2 ?? 'Button Two' }}
                          <i class="fa-solid fa-arrow-right"></i>
                      </a> --}}
                  </div>

              </div>
          </div>

          <div class="col-lg-1"></div>

          <div class="col-lg-5">
              <div class="img1">
                  {{-- Dynamic Slider Image --}}
                  <img src="{{ asset($sliders->image) }}" alt="">
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
<!--===== SERVICE AREA STARTS =======-->
<div class="service13-section-area sp2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="header-area-service space-margin60">
          <div class="heading20">
            <h5 class="fade-left" data-aos-duration="800"><img src="assets/img/icons/logo-icons8.svg" alt="">{{ $settings['services_title'] ?? '' }}</h5>
            <div class="space16"></div>
            <h2 class="text-anime-style-3"> {{ $settings['services_subtitle'] ?? '' }}</h2>
          </div>
          <div class="btn-area1">
            <a href="{{route('frontend.service')}}" class="header-btn21">View All Service <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach($services as $index => $service)
          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="{{ 800 + ($index * 100) }}">
              <div class="service13-boxarea">
  
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
<!--===== SERVICE AREA ENDS =======-->
<!--===== project AREA STARTS =======-->
<div class="work13-section-area sp1">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 m-auto">
        <div class="work-haader text-center heading20 space-margin60">
          <h5 data-aos="fade-left" data-aos-duration="800">
            <img src="assets/img/icons/logo-icons8.svg" alt="">{{ $settings['countries_title'] ?? '' }}
          </h5>
          <div class="space16"></div>
          <h2 class="text-anime-style-3">{{ $settings['countries_subtitle'] ?? '' }}</h2>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach ($projects as $project)
        <div class="col-lg-4 col-md-6" data-aos="zoom-in">
          <div class="project13-boxrea">

            {{-- Dynamic Image (Only One) --}}
            <div class="img1 image-anime">
              <img src="{{ asset($project->image) }}" alt="">
            </div>

            {{-- Dynamic Content --}}
            <div class="content-area">
              <span>#{{ $project->title ?? 'Advertising Agency' }}</span>
              <div class="space16"></div>
              <a href="{{ route('frontend.projectsingle', $project->slug ?? $project->id) }}">
                {{ $project->short_description }}
              </a>
            </div>

          </div>
        </div>
      @endforeach

      <div class="col-lg-12">
        <div class="btn-area1 text-center">
          <a href="{{ route('frontend.project') }}" class="header-btn21">
            View All Projects <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </div>

    </div>
  </div>
</div>
<!--===== project AREA ENDS =======-->
<!--===== TESTIMONIAL AREA STARTS =======-->
<div class="testimonial13-section-area sp1">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="testimonial13-header heading20 space-margin60">
          <h5 data-aos="fade-left" data-aos-duration="800"><img src="assets/img/icons/logo-icons8.svg" alt="">{{ $settings['testioninal_title'] ?? '' }}</h5>
          <div class="space16"></div>
          <h2 class="text-anime-style-3">  {{ $settings['testioninal_subtitle'] ?? '' }} <br class="d-md-block d-none"> </h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
          <div class="testimonial13-slider owl-carousel">
  
              @foreach($testimonials as $test)
              <div class="testimonial13-boxrea">
  
                  {{-- Static Stars --}}
                  <ul>
                      @for($i = 1; $i <= 5; $i++)
                          <li><i class="fa-solid fa-star"></i></li>
                      @endfor
                  </ul>
  
                  <div class="space24"></div>
                  {{-- Dynamic Description --}}
                  <p>“{!! $test->description !!}”</p>
                  <div class="space24"></div>
                  <div class="name-area">
                      <div class="name-text">
                          {{-- Dynamic Image (Only 1 image dynamic) --}}
                          <img src="{{ asset($test->image) }}" alt="">
                          <div class="content">
                              {{-- Dynamic Name --}}
                              <a href="#">{{ $test->name }}</a>
                              <div class="space12"></div>
                              {{-- Dynamic Position / Role --}}
                              <p>{{ $test->position ?? 'Client' }}</p>
                          </div>

                      </div>
  
                      {{-- Static SVG Icon --}}
                      <img src="{{ asset('frontend/assets/img/icons/quito8.svg') }}" alt="" class="quito8">
                  </div>
  
              </div>
              @endforeach
  
          </div>
      </div>
  </div>
  
  </div>
</div>
<!--===== TESTIMONIAL AREA ENDS =======-->
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
                  <img src="{{ asset( $team->image) }}" alt="">
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
<!--===== TEAM AREA ENDS =======-->
<!--===== OTHERS AREA STARTS =======-->
<div class="others13-section-area sp1">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5">
        <div class="others-header heading20">
          <h2 class="text-anime-style-3">  {{ $settings['courses_title'] ?? '' }}</h2>
          <div class="space16"></div>
          <p data-aos="fade-left" data-aos-duration="1000"> {{ $settings['courses_subtitle'] ?? '' }}</p>
          <div class="space32"></div>
          <div class="btn-area1" data-aos="fade-left" data-aos-duration="1200">
            <a href="contact.html" class="header-btn21">Get A Free Proposal <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-1"></div>
      <div class="col-lg-6">
        <div class="row">
          @foreach($courses as $index => $course)
              <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="{{ 800 + ($index * 100) }}">
                  <div class="img1">
                      {{-- Dynamic Image --}}
                      <img src="{{ asset('uploads/course/' . $course->image) }}" alt="{{ $course->title }}">
                  </div>
              </div>
          @endforeach
      </div>
      
      </div>
    </div>
  </div>
</div>
<!--===== OTHERS AREA ENDS =======-->
<!--===== BLOG AREA STARTS =======-->
<div class="blog13-section-area sp2">
  <div class="container">
      <div class="row">
          <div class="col-lg-5 m-auto">
              <div class="blog4-header text-center heading20 space-margin60">
                  <h5 data-aos="fade-up" data-aos-duration="1000"><img src="assets/img/icons/logo-icons8.svg" alt="">{{ $settings['blogs_title'] ?? '' }}</h5>
                  <div class="space16"></div>
                  <h2 class="text-anime-style-3">{{ $settings['blogs_subtitle'] ?? '' }}</h2>
              </div>
          </div>
      </div>
      <div class="row">
        @foreach($blogs as $index => $blog)
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
                        <img src="{{ asset( $blog->image) }}" alt="{{ $blog->title }}" class="blog-img">
                    </div>
    
                    <div class="space24"></div>
    
                    {{-- Blog Content --}}
                    <div class="blog-content-area">
                        <a href="{{ route('frontend.blogsingle', $blog->slug) }}" class="line-clamp-2">{{ $blog->title }}</a>
                        {{-- <div class="space16"></div> --}}
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
<!--===== BLOG AREA ENDS =======-->
<!--===== CTA AREA STARTS =======-->
<div class="cta13-section-area sp1">
  <img src="assets/img/bg/cta13-bg1.png" alt="" class="cta13-bg1">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 m-auto">
        <div class="cta13-header text-center heading20">
          <h2 class="text-anime-style-3">{{ $settings['whyChooseUs_title'] ?? '' }}</h2>
            <div class="space16"></div>
          <p data-aos="fade-up" data-aos-duration="1000">{{ $settings['whyChooseUs_subtitle'] ?? '' }} </p>
          <div class="space40"></div>
          <div class="btn-area1" data-aos="fade-up" data-aos-duration="1200">
            {{-- <a href="contact.html" class="header-btn21">Get Started Today <i class="fa-solid fa-arrow-right"></i></a> --}}
            <a href="contact.html" class="header-btn21 btn2">Contact Us<i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== CTA AREA ENDS =======-->






@endsection
