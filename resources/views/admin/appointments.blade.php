@extends('admin.layouts.main')

@section('main-container')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Appointment</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Official</a></li>
          <li class="breadcrumb-item active">Appointment Pending List</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<section class="section ">
    <div class="row">
        {{-- <div class="col-lg-8"> --}}
            {{-- <div class="row"> --}}

            <div class="col-12">
                <div class="card recent-sales overflow-auto">

                  {{-- <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                      </li>

                      <li><a class="dropdown-item" href="#">Today</a></li>
                      <li><a class="dropdown-item" href="#">This Month</a></li>
                      <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                  </div> --}}

                  <div class="card-body">
                    <h5 class="card-title">Appointment Pending <span>| List</span></h5>

                    <table class="table table-borderless datatable" id="table1">
                      <thead>
                        <tr>
                          <th scope="col">App Id</th>
                          <th scope="col">Health Id</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Plan</th>
                          <th scope="col">Date</th>
                          <th scope="col">Time</th>
                          <th scope="col">Status</th>
                          <th scope="col" >Action</th>

                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($app as $a)

                        <tr>
                            <th scope="row">{{$a->app_id}}</th>
                            <th>{{$a->health_id}}</th>
                            <td>{{$a->name}}</td>
                            <td>{{$a->email}}</td>
                            <td>{{$a->disease}}</td>
                            <td>{{$a->app_date}}</td>
                            <td>{{$a->time}}</td>
                            <td><span class="badge bg-warning">{{$a->status}}</span></td>
                            <td style="font-size: 1.5rem;">
                                <a href="{{url('/official/appointments/approve/')}}/{{$a->app_id}}" class="btn" style="margin-right: 15px;">Approve</a>
                            </td>
                        </tr>
                        @endforeach

                      </tbody>
                    </table>

                  </div>

                </div>
              </div><!-- End Recent Sales -->

        {{-- </div>
      </div> --}}
    </div>
</section>

</main>


@endsection

