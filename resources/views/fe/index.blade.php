
@extends('fe.layouts.main')

@section('main-container')
<!-- home section starts  -->

<section class="home" id="home">

    <div class="image" >
        <img src="{{url('fe/image/h2.svg')}}" alt="">
    </div>

    <div class="content">
        <h3>stay safe, stay healthy</h3>
        <p>We Take Care Of Your Healthy Life.Over a long period of work we have provided hundreds of thousands of Health care services</p>
        @if (session()->get('h_id')=="")

        <a href="{{url('/login')}}" class="btn"> log in <span class="fas fa-chevron-right"></span> </a>
        @else
        <a href="{{url('/help')}}" class="btn">quick treatment <span class="fas fa-chevron-right"></span> </a>
        @endif
    </div>

</section>




<!-- icons section starts  -->

<section class="icons-container ">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>50+</h3>
        <p>doctors at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-smile"></i>
        <h3>500+</h3>
        <p>happy patients</p>
        <!-- <p>satisfied patients</p> fas fa-users -->
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>200+</h3>
        <p>bed facility</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>10+</h3>
        <p>available hospitals</p>
    </div>

    </section>
    <!-- icons section ends -->


<!-- home section ends -->

<section class="home">
    <div id="founder" style="margin:auto;">
     <img src="{{asset('storage/uploads/doctors/11.jpeg')}}" height="400" width="400" class="img-fluid img-thumbnail g-hover"  alt="">
    </div>{{--class="g-hover" --}}


     <div class="content">
        <h3 class="homecen">dipak vora </h3>
        <h1 class="homecen">founder</h1>
        <p>It’s been said that one must think, plan, then act, and likewise once you start there should be no turning back. The struggle is always real hence the success shows the efforts you have given in your journey. Mr.Vora, visionary of Life care hospital, has started his career as a share broker in 1985, and the hard work was astonishing. The endeavour for achieving the goals was remarkable. In 1995, provided knowledge of infrastructure and equipments helped him in trying something new which he had never done before, a dream was taking the shape of vision.</p>

    </div>
</section>

<section class="home">

    <div class="content">
        <h3 class="homecen">Online health care</h3>
        <p>
            Manage Your patient with Ease. Comes with Online Software so NO need to Use from ONE PC, Use Software from MOBILE, LAPTOP, TABLET, DESKTOP etc. Also, Same Login with Unlimited DEVICE. Use patient Login For booking online bed facility and quick treatment and so on feachers .</p>

    </div>
    <div class="image" >
        <img src="{{url('fe/image/features-1.jpg')}}" height="300" width="300"  class="img-fluid img-thumbnail g-hover" alt="">
    </div>

        {{-- <img src="{{url('fe/image/featuresimg-2.jfif')}}" class="" width="50" height="100" alt=""> --}}

</section>



{{--
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="{{url('fe/image/blog-1.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="{{url('fe/image/blog-2.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{url('fe/image/blog-3.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> --}}

@endsection

