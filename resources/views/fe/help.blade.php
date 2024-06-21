@extends('fe.layouts.main')

@section('main-container')
<head>

   <link href="{{url('fe/glightbox/css/glightbox.min.css')}}" rel="stylesheet">

</head>
<section class="book mt" id="book">
    <h1 class="heading"> <span>Quick</span> Treatment </h1>
    <div class="row">
        <form action="">
            <h3>Quick Treatment</h3>
            {{-- <input type="checkbox" class="box">allergies
            <input type="checkbox" class="box">cold and flue
            <input type="checkbox" class="box">diarrhea
            <input type="checkbox" class="box">headaches
            <input type="checkbox" class="box">mononucleosis
            <input type="checkbox" class="box">stomach aches
            <input type="submit" value="book now" class="btn"> --}}




      <!-- ======= Gallery Section ======= -->
      <section id="gallery" class="gallery">
        <div class="container-fluid">

          <div class="row gy-4 justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="gallery-item h-100">
                <img src="{{url('fe/image/md-1.jpg')}}" class="img-fluid" alt="">
                <div class="gallery-links d-flex align-items-center justify-content-center">
                  <a href="{{url('fe/image/md-1.jpg')}}" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>

                </div>
              </div>
            </div><!-- End Gallery Item -->
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="gallery-item h-100">
                <img src="{{url('fe/image/md-2.jpg')}}" class="img-fluid" alt="">
                <div class="gallery-links d-flex align-items-center justify-content-center">
                  <a href="{{url('fe/image/md-2.jpg')}}" title="Gallery 2" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>

                </div>
              </div>
            </div><!-- End Gallery Item -->
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="gallery-item h-100">
                <img src="{{url('fe/image/md-3.jpg')}}" class="img-fluid" alt="">
                <div class="gallery-links d-flex align-items-center justify-content-center">
                  <a href="{{url('fe/image/md-3.jpg')}}" title="Gallery 3" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>

                </div>
              </div>
            </div><!-- End Gallery Item -->
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="gallery-item h-100">
                <img src="{{url('fe/image/md-4.jpg')}}" class="img-fluid" alt="">
                <div class="gallery-links d-flex align-items-center justify-content-center">
                  <a href="{{url('fe/image/md-4.jpg')}}" title="Gallery 4" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>

                </div>
              </div>
            </div><!-- End Gallery Item -->
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="gallery-item h-100">
                <img src="{{url('fe/image/md-5.jpg')}}" class="img-fluid" alt="">
                <div class="gallery-links d-flex align-items-center justify-content-center">
                  <a href="{{url('fe/image/md-5.jpg')}}" title="Gallery 5" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>

                </div>
              </div>
            </div><!-- End Gallery Item -->
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="gallery-item h-100">
                <img src="{{url('fe/image/md-6.jpg')}}" class="img-fluid" alt="">
                <div class="gallery-links d-flex align-items-center justify-content-center">
                  <a href="{{url('fe/image/md-6.jpg')}}" title="Gallery 6" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>

                </div>
              </div>
            </div><!-- End Gallery Item -->
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="gallery-item h-100">
                <img src="{{url('fe/image/md-7.jpg')}}" class="img-fluid" alt="">
                <div class="gallery-links d-flex align-items-center justify-content-center">
                  <a href="{{url('fe/image/md-7.jpg')}}" title="Gallery 7" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>

                </div>
              </div>
            </div><!-- End Gallery Item -->
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="gallery-item h-100">
                <img src="{{url('fe/image/md-8.jpg')}}" class="img-fluid" alt="">
                <div class="gallery-links d-flex align-items-center justify-content-center">
                  <a href="{{url('fe/image/md-8.jpg')}}" title="Gallery 8" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>

                </div>
              </div>
            </div><!-- End Gallery Item -->
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="gallery-item h-100">
                <img src="{{url('fe/image/md-9.jpg')}}" class="img-fluid" alt="">
                <div class="gallery-links d-flex align-items-center justify-content-center">
                  <a href="{{url('fe/image/md-9.jpg')}}" title="Gallery 9" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>

                </div>
              </div>
            </div><!-- End Gallery Item -->
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="gallery-item h-100">
                <img src="{{url('fe/image/md-10.jpg')}}" class="img-fluid"  alt="">
                <div class="gallery-links d-flex align-items-center justify-content-center">

                  <a href="{{url('fe/image/md-10.jpg')}}" title="nasal congestion" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand" ></i></a>

                </div>
              </div>
            </div><!-- End Gallery Item -->
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="gallery-item h-100">
                <img src="{{url('fe/image/md-11.jpg')}}" class="img-fluid" alt="" >
                <div class="gallery-links d-flex align-items-center justify-content-center">
                  <a href="{{url('fe/image/md-11.jpg')}}" title="ear pain" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>

                </div>
              </div>
            </div><!-- End Gallery Item -->

          </div>

        </div>
      </section><!-- End Gallery Section -->
    </form>
</div>

<script src="{{url('fe/glightbox/js/glightbox.min.js')}}"></script>
</section>



    {{-- <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
    --}}
@endsection

{{--
        disease
        types
        age
        days
        name of medicine

--}}


