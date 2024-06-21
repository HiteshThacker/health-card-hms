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

                  <h5 class="card-title m-auto "> Login</h5>
                  <ul class="nav nav-tabs nav-tabs-bordered my-4 m-auto">



                    <li class="nav-item">
                      <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Admin</button>
                    </li>

                    <li class="nav-item">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Doctor</button>
                    </li>


                  </ul>
                  <div class="tab-content pt-2">
                        <div class="tab-pane fade show active" id="profile-edit">

                        </div>
                        <div class="tab-pane fade " id="profile-settings">

                        </div>
                        {{-- <input type="hidden" value="{{$role}}" name="role"> --}}
                  </div>

                  <form action="{{ url('/official') }}/login" method="POST"  class="php-email-form">
                    @csrf
                    <div class="row gy-4">
                    <div class="col-md-12">
                        <input type="email" name="email" class="form-control p-2" placeholder="E-mail" required />
                    </div>

                  <div class="col-md-12">

                    <input type="password" name="pass" class="form-control " placeholder="Password"  required />
                    </div>
                    <span class="text-danger" style="font-size: 1.5rem">
                        @error('pass')
                            {{$message}}
                        @enderror
                    </span>
                    <span class="text-danger text-center" style="font-size: 1.5rem">

                            {{session()->get('error')}}

                    </span>

                  {{-- <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                  </div> --}}
                  <a class="mx-2 text-center" href="{{url('official/forget')}}">Forget</a>

                  <div class="col-md-12 text-center">
                        <input class="btn" id="btnotp" type="submit" value="Submit"  >
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
