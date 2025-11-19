@extends('layouts.frontend.master')

@section('seo')
    @include('frontend.seo', [
        'name' => $contact_page->seo_title ?? '',
        'title' => $contact_page->seo_title ?? $contact_page->title,
        'description' => $contact_page->meta_description ?? '',
        'keyword' => $contact_page->meta_keywords ?? '',
        'schema' => $contact_page->seo_schema ?? '',
        'created_at' => $contact_page->created_at,
        'updated_at' => $contact_page->updated_at,
    ])
@endsection

@section('content')

<!--===== HERO AREA STARTS =======-->
<div class="about-header-area" 
     style="background-image: url('{{ asset('frontend/assets/img/bg/inner-header.png') }}');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;">

    <img src="{{ asset('frontend/assets/img/elements/elements1.png') }}" 
         alt="" class="elements1 aniamtion-key-1">

    <img src="{{ asset('frontend/assets/img/elements/star2.png') }}" 
         alt="" class="star2 keyframe5">

    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="about-inner-header heading9 text-center">
                    <h1>Contact Us</h1>
                    <a href="{{ url('/') }}">Home 
                        <i class="fa-solid fa-angle-right"></i> 
                        <span>Contact Us</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== HERO AREA ENDS =======-->

<!--===== CONTACT AREA STARTS =======-->
<div class="contact-main-inner-area sp1">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="heading2 contact-header">
                    <h5>Contact Us</h5>
                    <h2>Get in Touch with SEOC We Value Your Connection</h2>
                    <p>Our dedicated team is committed to providing prompt and effective support to ensure your needs are met. We believe in open communication and are always ready to listen. Reach out to us via phone, email, or live chat, or visit our office during business hours.</p>

                    <div class="space32"></div>

                    <div class="number-address-area">
                        <div class="phone-number">
                            <div class="img1">
                                <img src="{{ asset('admin/assets/img/call.png') }}" alt="">
                            </div>
                            <div class="content">
                                <p>Phone Number</p>
                                <a href="tel:123-456-7890">123-456-7890</a>
                            </div>
                        </div>

                        <div class="phone-number m-0">
                            <div class="img1">
                                <img src="{{ asset('admin/assets/img/email.png') }}" alt="">
                            </div>
                            <div class="content">
                                <p>Email Address</p>
                                <a href="mailto:Infoseoc@gmail.com">Infoseoc@gmail.com</a>
                            </div>
                        </div>
                    </div>

                    <div class="space50"></div>

                    <div class="number-address-area2">
                        <div class="phone-number">
                            <div class="img1">
                                <img src="{{ asset('admin/assets/img/location.png') }}" alt="">
                            </div>
                            <div class="content">
                                <a href="#">
                                    8708 Technology Forest Pl Suite 
                                    <br class="d-lg-block d-none">
                                    125 -G, The Woodlands, TX 773
                                </a>
                            </div>
                        </div>

                        <div class="phone-number">
                            <a href="https://www.google.com/maps/@24.0098057,88.9892437,15z?entry=ttu" 
                               class="map" target="_blank">View Our Map</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div class="contact-form-area">
                    <h4>Get In Touch</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-area">
                                <input type="text" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="input-area">
                                <input type="text" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="input-area">
                                <input type="email" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="input-area">
                                <input type="number" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="input-area">
                                <textarea placeholder="Your Message"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="header-btn21">
                                Get In Touch 
                                <span><i class="fa-solid fa-arrow-right"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Location Boxes -->
{{-- <div class="location-section-area sp2 bg2">
    <div class="container">

        <div class="row">
            <div class="col-lg-4 m-auto">
                <div class="location-header text-center heading2">
                    <h5>Location</h5>
                    <h2>Our Location</h2>
                </div>
            </div>
        </div>

        <div class="space60 d-lg-block d-none"></div>
        <div class="space30 d-lg-none d-block"></div>

        <div class="row">

            @foreach (['San Francisco', 'Chicago', 'Boston'] as $city)
            <div class="col-lg-4 col-md-6">
                <div class="location-boxes">
                    <div class="img1">
                        <img src="{{ asset('frontend/assets/img/icons/location3.svg') }}" alt="">
                    </div>

                    <div class="space32"></div>

                    <a href="#">{{ $city }} <br class="d-lg-block d-none"> Address Line Here</a>

                    <div class="space24"></div>

                    <p>Phone Number</p>
                    <a href="tel:123-456-7890">123-456-7890</a>

                    <div class="space32"></div>

                    <a href="https://www.google.com/maps/@24.0098057,88.9892437,15z?entry=ttu" 
                       class="map" target="_blank">View Our Map</a>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</div> --}}

<!-- Google Map -->
<div class="mapouter">
    <div class="gmap_canvas">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4506257.120552435!2d88.67021924228865!3d21.954385721237916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1704088968016!5m2!1sen!2sbd"
                width="600" height="450" style="border:0;" allowfullscreen loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<!-- CTA Section -->
{{-- <div class="cta-section-area">
    <img src="{{ asset('frontend/assets/img/bg/cta-bg1.png') }}" 
         alt="" class="cta-bg1 aniamtion-key-2">

    <img src="{{ asset('frontend/assets/img/bg/cta-bg2.png') }}" 
         alt="" class="cta-bg2 aniamtion-key-1">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto">
                <div class="cta-header-area text-center sp4 heading2">
                    <h2>Ready To Take Your SEO To <br class="d-md-block d-none"> The Next Level</h2>
                    <p>Effective SEO strategies not only elevate a website's visibility but also drive 
                       targeted traffic, enhance user experience,</p>

                    <div class="btn-area text-center">
                        <a href="{{ url('contact') }}" class="header-btn1">
                            Free Consultation 
                            <span><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> --}}

@endsection
