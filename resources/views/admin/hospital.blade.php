@extends('admin.layouts.main')

@section('main-container')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Hospital</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Official</a></li>
          <li class="breadcrumb-item active">Hospital List</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<section class="section">
    <div class="row">
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                  <div class="card-body">
                    <h5 class="card-title">Hospital</h5>
                    <div style="text-align:right;"><a href="{{url('official/hospital/add')}}" class="btn">Add Hospital</a></div>
                    <table class="table table-borderless datatable" id="table1">
                      <thead>
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Name</th>
                          <th scope="col">Address</th>
                          <th scope="col">Number</th>
                          <th scope="col">E-mail</th>
                          <th scope="col">Department</th>
                          <th scope="col">Room</th>
                          <th scope="col">Doctors</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($hospital as $h)
                        <tr>
                            <th scope="row">{{$h->hospital_id}}</th>
                            <th scope="row">{{$h->name}}</th>
                            <th scope="row">{{$h->address}}</th>
                            <td>{{$h->number}}</td>
                            <td>{{$h->email}}</td>

                            <td>{{$h->department}}</td>
                            <td>{{$h->room}}</td>
                            <td>{{$h->doctors}}</td>
                            <td style="font-size: 1.5rem;display :inline-flex;" ><a href="{{url('/official/hospital/update')}}/{{$h->hospital_id}}" class="bi bi-pencil-square" style="margin-right: 15px;" ></a><a href="{{url('/official/hospital/delete')}}/{{$h->hospital_id}}" class="bi bi-trash link-danger" style="margin-right: 10px;"></a></td>


                        </tr>
                        @endforeach

                      </tbody>
                    </table>

                  </div>

                </div>
              </div>

        </div>
      {{-- </div>
    </div> --}}
</section>

</main>

@endsection

