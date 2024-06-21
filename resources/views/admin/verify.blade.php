@extends('admin.layouts.main')

@section('main-container')

<main id="main" class="main" >

    <div class="pagetitle">
      <h1> {{$title}}</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/official')}}">Official</a></li>
          <li class="breadcrumb-item active">Add  {{$title}}</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<section class="section" style="text-align: center">

    <div class="container mt-5 pt-5">
        {{-- <h1 class="heading"> <span>signup</span> now </h1> --}}

        <div class="row">
            <div class="col-12 col-sm-7 col-md-6 m-auto">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <h2 class="card-title">Verify {{$title}}</h2>
                        <form action="{{$url}}" method="POST">
                        @csrf
                        <div class="md-4 my-3">
                            {{-- <span class=" text-danger text-center">
                                {{session()->get('otp')}}
                            </span> --}}

                        <input type="email" id="mail" name="email" class="form-control" pattern="*@*" placeholder="E-mail" value="{{session()->get('email')}}" required  />
                        </div>
                        @if (session()->get('showotp')!="")
                        <input type="text" name="otp" class="form-control" placeholder="OTP" />

                        @endif
                        <span class=" text-danger text-center">
                            {{session()->get('error')}}
                        </span>
                        <div class="md-4 my-3">
                        <input class="btn" id="btnotp" type="submit" value="{{$val}}" name="btnotp">


                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

</section>

</main>

@endsection

