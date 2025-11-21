<!--===== FOOTER AREA STARTS =======-->
<div class="footer13-section-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="footer-logo-area">
          <img src="{{ asset($settings['site_main_logo']) }}" style="height: 150px" alt="">
          <p> {{ $settings['site_information'] }}</p>
          <ul>
            @foreach ($socials as $item)
            <li><a href="{{ $item->link }}"><i class="{{ $item->icon }}"></i></a></li>
        @endforeach
          </ul>
        </div>
      </div>

      <div class="col-lg-2 col-md-6">
        <div class="footer-logo-area1">
          <h3>About Link</h3>
          <ul>
            <li><a href="{{ route('frontend.blog') }}">Our Blog</a></li>
            <li><a href="{{ route('frontend.about') }}">About Us</a></li>
            <li><a href="{{ route('frontend.service') }}">Services</a></li>
            {{-- <li><a href="case.html">Marketing</a></li> --}}
            <li><a href="{{ route('frontend.project') }}">Projects</a></li>
            <li><a href="{{ route('frontend.contact') }}">Contact Us</a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="footer-logo-area2">
          <h3>Get in touch</h3>
          <ul>
            <li><a href="404-4.html"><img src="assets/img/icons/email.svg" alt=""><span>{{ $settings['contact_email'] ?? '' }}</span></a></li>
            <li><a href="#"><img src="assets/img/icons/location.svg" alt=""><span>{{ $settings['contact_location'] ?? 'asmita' }} <br class="d-lg-block d-none"> Pl Suite 125 -G, The <br class="d-lg-block d-none"> Woodlands, TX 773</span></a></li>
            <li><a href="tel:123-456-7890"><img src="assets/img/icons/phone.svg" alt=""><span>{{ $settings['contact_phone'] ?? '+123456789' }}</span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="footer-logo-area3">
          <h3>Projects</h3>
          
          <form action="#">
            <input type="text" placeholder="Enter Your email">
            <div class="space16"></div>
            <button class="header-btn21"> </button>
          </form>
        </div>
      </div>
    </div>
    <div class="space50 d-lg-block d-none"></div>
    <div class="space40 d-lg-none d-block"></div>
    <div class="row">
      <div class="col-lg-12">
        <div class="copyright-area">
          <div class="pera">
            <p>ⓒCopyright 2024 SEOC . All rights reserved</p>
          </div>
          <ul>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#" class="m-0"> Privacy Policy </a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== FOOTER AREA ENDS =======-->