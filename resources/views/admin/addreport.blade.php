@extends('admin.layouts.main')

@section('main-container')

<main id="main" class="main" >

    <div class="pagetitle">
      <h1>Doctors</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/official')}}">Official</a></li>
          <li class="breadcrumb-item active">Add Doctor</li>
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
                        <h5 class="card-title"> Add Report </h5>
                        <form action="{{ url('/official/report') }}/add" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="md-4 my-3">
                        <input type="text" name="health_id" class="form-control" placeholder="Health Id (If Have)" required />
                        </div>
                        <div class="md-4 my-3">
                            <input type="text" name="hospital_id" class="form-control" placeholder="Hospital Id" required />
                        </div>
                        <div class="md-4 my-3">
                            <input type="text" name="hospital" class="form-control" placeholder="Hospital Name" required />
                        </div>


                        <div class="md-4 my-3">
                            <label class="mb-3 fs-4" for="chk_date">Check Date</label>
                        <input type="date" name="chk_date" class="form-control" placeholder="Date of Birth" max="{{Date("Y-m-d")}}" required />
                        </div>

                        <div class="md-4 my-3">
                        <input type="text" name="doctor" class="form-control" placeholder="Doctor Name" required />
                        </div>

                        <div class="md-4 my-3">
                        <input type="text" name="chk_time" class="form-control" placeholder="Chack Time" required />
                        </div>

                        <div class="md-4 my-3">
                            <label class="mb-3 fs-4" for="des">Notes</label>
                            <textarea name="notes" id="des" class="form-control" rows="3"  required>
                            </textarea>

                        </div>

                        </div>
                        <div class="md-4 my-3 mx-3">
                        <label for="photo" class="form-control border-0" style="font-size:2.5rem" >
                            Upload Note
                        </label>
                        <input type="file" id="photo" name="photo" class="form-control my-3" style="" required />
                        </div>




                        <div class="col-12 my-3">
                            <input class="btn"  type="submit" value="Submit" name="insert" >
                        </div>

                        {{-- <a href="{{ url('/login') }}" class="n-link" id="tmp">Already have an account ?</a> --}}
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

