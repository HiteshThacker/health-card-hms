@extends('admin.layouts.main')

@section('main-container')

<main id="main" class="main" >

    <div class="pagetitle">
      <h1>Data</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/official')}}">Official</a></li>
          <li class="breadcrumb-item active">Add Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->



<section class="section contact mt-4">

    <div class="row gy-4">

      <div class="col-xl-7 m-auto ">
          <div class="card p-4 shadow">

              <h5 class="card-title m-auto mb-4"> Add Data </h5>
              <form action="{{ url('/official/data') }}/uploads" method="POST" enctype="multipart/form-data" class="php-email-form">
                @csrf
                <div class="row gy-4">
                <div class="col-md-12">
                    <input type="text" name="h_id" class="form-control p-2" placeholder="Health Id" required />
                </div>
                <span class="text-danger " style="font-size: 1rem">
                    {{session()->get('error')}}
                </span>

              <div class="col-md-12">
                <label for="photo" class="form-control border-0 p-2 text-center" style="font-size:2.5rem;" >
                    Upload Report Photo
                </label>
                <input type="file" id="photo" name="photo" class="form-control my-3" style="" required />
                </div>
                <span class="text-danger" style="font-size: 1.5rem">
                    @error('photo')
                        {{$message}}
                    @enderror
                </span>

              {{-- <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
              </div> --}}

              <div class="col-md-12 text-center">
                    <input class="btn" type="submit" value="Submit" name="insert" >
              </div>

            </div>
          </form>
        </div>

      </div>

    </div>

  </section>
</main>

@endsection

