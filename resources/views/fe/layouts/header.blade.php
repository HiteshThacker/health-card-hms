<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> hospital website  </title>

    {{-- <a href="https://storyset.com/work">Work illustrations by Storyset</a> --}}

    <!-- Bootstrap CSS v5.2.1 -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> --}}

    {{-- error occur in bs-5 ,custom css not work --}}


    <!-- import "@fortawesome/fontawesome-free/css/all.min.css"; -->


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" >
    {{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"> --}}


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />


    {{-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" /> --}}

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{url('fe/css/style.css')}}" >



</head>
<body>

<!-- header section starts  -->

<header class="header">


    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> health card </a>


    <nav class="_navbar navbar navbar-expand-lg ">

        <a href="{{url('/')}}">home</a>

        <a href="{{url('/services')}}">services</a>

        <a href="{{url('/about')}}">about</a>

        <a href="{{url('/doctors')}}">doctors</a>
        @if (session()->get('h_id')!='')
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="width:40%;">

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                help
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item w-auto"  href="{{url('/booking')}}">book appoinment</a></li>
                  <li><a class="dropdown-item w-auto" href="{{url('/help')}}">Quick treatment</a></li>


              </ul>
            </li>

          </ul>
          {{-- <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="width:40%;">

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                profile
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item w-auto"  href="{{url('/card')}}">print/show card</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item w-auto" href="{{url('/up_profile')}}">update profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item w-auto" href="{{url('/change_pass')}}">change password</a></li>


            </ul>
            </li>

          </ul> --}}



            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
              <img src="{{asset('storage/uploads/patients/'.session()->get('url'))}}" alt="" class="rounded-circle" height="30" width="30">
              {{-- <span class="d-none d-md-block dropdown-toggle ps-2"></span> --}}
            </a><!-- End Profile Iamge Icon json_encode() -->



            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header text-center ">
              <h3>
                {{ session()->get('name')}}
              </h3>

              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item w-auto" href="{{url('/card')}}"><i class="bi bi-eye" ></i><span class="mx-3">Print/show card</span></a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item w-auto" href="{{url('/up_profile')}}"><i class="bi bi-person"></i><span class="mx-3">Update profile</span></a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item w-auto" href="{{url('/change_pass')}}"><i class="bi bi-wrench"></i><span class="mx-3">Password</span> </a></li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center w-auto" href="{{url('/logout')}}">
                  <i class="bi bi-box-arrow-right"></i>
                  <span class="mx-3">logout</span>
                </a>
              </li>

            </ul><!-- End Profile Dropdown Items -->

         @else
            <a href="{{url('/login')}}">log in</a>
        @endif





            {{-- <a href="{{url('/booking')}}">book</a>{{-- help dropdown --}}
            {{-- <a href="{{url('/help')}}">Quick treatment</a> --}}
            {{-- help dropdown --}}

            {{-- <a href="{{url('/logout')}}">print/show card</a> --}}
            {{-- profile --}}
            {{-- <a href="{{url('/logout')}}">change name</a>
            <a href="{{url('/logout')}}">change photo</a>
            <a href="{{url('/logout')}}">change birth-date</a> --}}





    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>


<!-- header section ends -->
