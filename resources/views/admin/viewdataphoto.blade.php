@extends('admin.layouts.main')

@section('main-container')

<main id="main" class="main" >

    <div class="pagetitle">
      <h1>Data</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/official')}}">Official</a></li>
          <li class="breadcrumb-item active">View Data </li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
{{--
<section class="section" >

    <div class="container mt-5 pt-5 " > --}}


        <section id="gallery" class="gallery">

            <div class="container-fluid">
              <div class="row gy-4 justify-content-center">

                @foreach ($data as $d)

                <div class="col-xl-3 col-lg-4 col-md-6">
                  <div class="gallery-item h-100">
                    <img src="{{ asset('storage/uploads/data/'.$d->health_id."/".$d->data)}}" class="img-fluid" alt="">
                    <div class="gallery-links d-flex align-items-center justify-content-center">
                      <a href="{{asset('storage/uploads/data/'.$d->health_id."/".$d->data)}}" title="Report 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                    </div>
                  </div>
                </div><!-- End Gallery Item -->

                @endforeach

              </div>
            </div>
        </section>
        {{-- <section id="gallery" class="gallery">
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
          </section><!-- End Gallery Section --> --}}
        </form>
    </div>

    </section>
    {{-- </div>
</section> --}}

<script src="{{url('admin/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script>
    const glightbox = GLightbox({
    selector: '.glightbox'
    });
</script>
</main>

@endsection
