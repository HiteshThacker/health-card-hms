@extends('admin.layouts.main')

@section('main-container')

<main id="main" class="main" >

    <div class="pagetitle">
      <h1>Hospital</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/official')}}">Official</a></li>
          <li class="breadcrumb-item active">Add Hospital</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->



<section class="section contact mt-4">

    <div class="row gy-4">

      <div class="col-xl-7 m-auto ">
          <div class="card p-4 shadow">

              <h5 class="card-title m-auto mb-4">{{$title}}</h5>
              <form action="{{$url}}" method="POST" enctype="multipart/form-data" class="php-email-form">
                @csrf
                <div class="row gy-4">
                <div class="col-md-12">
                    <input type="text" name="name" class="form-control p-2" placeholder="Name" value="{{$hospital->name}}" required />
                </div>
                <div class="col-md-12">
                    <textarea class="form-control" name="address" placeholder="Address" required>{{$hospital->address}}</textarea>
                  </div>
                <div class="col-md-12">
                    <input type="email" name="email" class="form-control p-2" placeholder="E-mail" value="{{$hospital->email}}" required />
                </div>
                <div class="col-md-6">
                    <input type="number" name="no" class="form-control p-2" placeholder="Number" value="{{$hospital->number}}"  required />
                </div>
                <div class="col-md-6">
                    <input type="text" name="doctors" class="form-control p-2" placeholder="No.of Doctors" required value="{{$hospital->doctors}}"  />
                </div>
                <div class="col-md-6">
                    <input type="text" name="department" class="form-control p-2" placeholder="No. of Department" required value="{{$hospital->name}}" />

                </div>
                <div class="col-md-6">
                    <input type="text" name="room" class="form-control p-2" placeholder="No. of room " value="{{$hospital->room}}"  required />
                </div>


              <div class="col-md-12 text-center">
                    <input class="btn" id="btnotp" type="submit" value="Submit" name="insert" >
              </div>

            </div>
          </form>
        </div>

      </div>

    </div>

  </section>
</main>

@endsection

