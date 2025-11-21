<nav class="navbar navbar-expand-lg main-header"  id="header">
  <div class="container">

    <!-- Logo -->
    <a class="navbar-brand" href="#">
      <img src="{{ $settings['site_main_logo'] ? asset($settings['site_main_logo']) : asset('frontend/assets/images/logo1.png') }}" alt="logo" class="header-logo">
    </a>

    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#headerMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Center Menu -->
    <div class="collapse navbar-collapse justify-content-center" id="headerMenu">
      <ul class="navbar-nav menu-links">
        
        <li class="nav-item dropdown">
          <a class="nav-link " href="{{route('frontend.home')}}">Home</a>
          
        </li>

        <li class="nav-item"><a class="nav-link" href="{{route('frontend.about')}}">About</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('frontend.service')}}">Service</a></li>

        {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#">Services</a>
          <ul class="dropdown-menu custom-drop">
            <li><a class="dropdown-item" href="#">SEO Optimization</a></li>
            <li><a class="dropdown-item" href="#">Digital Marketing</a></li>
            <li><a class="dropdown-item" href="#">Content Writing</a></li>
          </ul>
        </li> --}}

        <li class="nav-item dropdown">
          <a class="nav-link " href="{{route('frontend.blog')}}">Blogs</a>
          
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link " href="{{route('frontend.project')}}">Project</a>
        </li>
        {{-- <li class="nav-item"><a class="nav-link" href="{{route('frontend.contact')}}">Contact Us</a></li> --}}
      </ul>
    </div>
    <!-- Right Quote Button -->
    <a href="{{route('frontend.contact')}}" class="quote-btn d-none d-lg-block">
      Contact Us &nbsp; <i class="fa-solid fa-arrow-up-right-from-square"></i>
    </a>
  </div>
</nav>
<script>
  document.addEventListener('DOMContentLoaded', function() {
      const header = document.querySelector("#header");
      const handleScroll = () => {
          const scrollTop = window.scrollY;
          if (scrollTop > 100) {
              header.classList.add('sticky');
          } else {
              header.classList.remove('sticky');
          }
      };
      window.addEventListener("scroll", handleScroll);

      return () => {
          window.removeEventListener("scroll", handleScroll);
      };
  });
</script>