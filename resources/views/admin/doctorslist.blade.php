@extends('admin.layouts.main')

@section('main-container')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Doctors</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Official</a></li>
          <li class="breadcrumb-item active">Doctor List</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<section class="section ">
    <div class="row">
        {{-- <div class="col-lg-8"> --}}
            {{-- <div class="row"> --}}

                @if (session()->get('error')!="")
                <span class="text-danger" style="font-size: 1.5rem">
                    {{session()->get('error')}}
                </span>
                @endif
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
                    <h5 class="card-title">Doctor <span>| List</span></h5>

                    <table class="table table-borderless datatable" id="table1">
                      <thead>
                        <tr>
                          <th scope="col">Doctor Id</th>
                          <th scope="col">Photo</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Address</th>
                          <th scope="col">Number</th>
                          <th scope="col">Department</th>
                          <th scope="col" >Action</th>

                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($doc as $d)

                        <tr>
                            <th scope="row">{{$d->doctor_id}}</th>
                            <td><img src="{{ asset('storage/uploads/doctors/'.$d->photo)}}" height="100" width="100"></td>
                            <th>{{$d->name}}</th>
                            <td>{{$d->email}}</td>
                            <td>{{$d->address}}</td>
                            <td>{{$d->number}}</td>

                            <td>{{$d->department}}</td>
                            <td style="font-size: 1.5rem;display :inline-flex;"><a href="{{url('/official/doctors/update')}}/{{$d->doctor_id}}" class="bi bi-pencil-square" style="margin-right: 15px;" ></a><a href="{{url('/official/doctors/delete/')}}/{{$d->doctor_id}}" class="bi bi-trash link-danger" style="margin-right: 10px;"></a></td>
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
                          <th scope="row"><a href="#">#2049</a></th>
                          <td>Ashleigh Langosh</td>
                          <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
                          <td>$147</td>
                          <td><span class="badge bg-success">Approved</span></td>
                        </tr>
                        <tr>
                          <th scope="row"><a href="#">#2644</a></th>
                          <td>Angus Grady</td>
                          <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                          <td>$67</td>
                          <td><span class="badge bg-danger">Rejected</span></td>
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

