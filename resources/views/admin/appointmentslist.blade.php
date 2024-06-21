@extends('admin.layouts.main')

@section('main-container')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Appointment</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Official</a></li>
          <li class="breadcrumb-item active">Appointment List</li>
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
                    <h5 class="card-title">Appointment<span>| List</span></h5>

                    <table class="table table-borderless datatable" id="table1">
                      <thead>
                        <tr>
                            <th scope="col">App Id</th>
                            <th scope="col">Health Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Number</th>
                            <th scope="col">Email</th>
                            <th scope="col">Plan</th>
                            <th scope="col">Age</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Status</th>


                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($app as $a)

                        <tr>
                            <th scope="row">{{$a->app_id}}</th>
                            <th>{{$a->health_id}}</th>
                            <td>{{$a->name}}</td>
                            <td>{{$a->no}}</td>
                            <td>{{$a->email}}</td>
                            <td>{{$a->disease}}</td>
                            <td>{{$a->age}}</td>
                            <td>{{$a->app_date}}</td>
                            <td>{{$a->time}}</td>
                            <td><span class="badge bg-success">{{$a->status}}</span></td>
                        </tr>
                        @endforeach
                        {{-- <tr>
                          <th scope="row"><a href="#">#2147</a></th>
                          <td>Bridie Kessler</td>
                          <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                          <td>$47</td>
                          <td><span class="badge bg-warning">Pending</span></td>
                        </tr>
                        
                        <tr>
                          <th scope="row"><a href="#">#2644</a></th>
                          <td>Raheem Lehner</td>
                          <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                          <td>$165</td>
                          <td><span class="badge bg-success">Approved</span></td>
                        </tr> --}}
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

