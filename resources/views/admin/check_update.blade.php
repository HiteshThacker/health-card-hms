@extends('admin.layouts.main')

@section('main-container')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Patients</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Official</a></li>
          <li class="breadcrumb-item active">Pending Update</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<section class="section contact mt-5">
    <div class="row gy-4">
        <div class="col-xl-7 m-auto ">
            <div class="card p-4 shadow">

              <h3 class="card-title m-auto mb-4 fs-2"> Proof </h3>
                <img src="{{ asset('storage/uploads/pending_update/'.$update->proof)}}"  onerror="this.remove();">
              <h3 class="card-title m-auto mb-4 fs-2"> photo </h3>
                <img src="{{ asset('storage/uploads/pending_update/'.$update->photo)}}" alt="" onerror="this.remove();">
              <h3 class="card-title m-auto mb-4 fs-2"> Details </h3>

                <label class="my-2 fs-4">Health Id : {{$update->health_id}}</label>

                <label class="my-2 fs-4">Field :  {{$update->field}}</label>

                <label class="my-2 fs-4">Name : {{$update->name." ".$update->mname." ".$update->lname}}</label>
                <label class="my-2 fs-4">Date of Birth : {{$update->dob}}</label>
                <form action="{{url('/official/patients/pending_update/')}}/{{$update->pu_id}}">
                    <div class="col-md-12 text-center mt-3">
                    <a class="btn mx-2" href="{{url('official/patients/confirm_update/')}}/{{$update->pu_id}}" onclick="{{session()->flash('st','confirm')}}">confirm</a>
                    <a class="mx-2 btn _btn" href="{{url('official/patients/confirm_update/')}}/{{$update->pu_id}}" onclick="{{session()->flash('st','reject')}}">reject</a>
                    {{-- <input class="btn mx-2" type="submit" name="confirm" value="Confirm" >
                    <input class="mx-2 btn _btn" type="submit" name="reject" value="Reject" > --}}
                    </div>
                </form>



            </div>
        </div>
    </div>
</section>

</main>

@endsection

