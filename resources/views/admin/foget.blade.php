<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!--  Main CSS File -->
  <link href="{{url('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('admin/css/style.css')}}" rel="stylesheet">


</head>

<body class="toggle-sidebar">

  <main id="main" class="main">

    <section class="section contact mt-4">

        <div class="row gy-4">

          <div class="col-xl-5 m-auto ">
              <div class="card p-4 shadow">

                  <h5 class="card-title m-auto ">Forget Password</h5>

                  <div class="tab-content pt-2">
                        <div class="tab-pane fade show active" id="profile-edit">

                        </div>
                        <div class="tab-pane fade " id="profile-settings">

                        </div>
                        {{-- <input type="hidden" value="{{$role}}" name="role"> --}}
                  </div>

                  <form action="{{ url('/official') }}/forget" method="POST"  class="php-email-form">
                    @csrf
                    <div class="row gy-4">
                    <div class="col-md-12">
                        <input type="email" name="email" class="form-control p-2" placeholder="E-mail" required />
                    </div>


                  <div class="col-md-12 text-center">
                        <input class="btn" id="btn" type="submit" value="Submit"  >
                  </div>

                </div>
              </form>
            </div>

          </div>

        </div>

      </section>

</main><!-- End #main -->

<footer id="footer" class="footer text-center">
  <div class="copyright text-center" >
    &copy; Copyright <strong><span>Life care</span></strong>. All Rights Reserved
  </div>

</footer><!-- End Footer -->
<!-- ======= Footer ======= -->


<!-- Main JS File -->
<script src="{{url('admin/js/main.js')}}"></script>
<script src="{{url('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
