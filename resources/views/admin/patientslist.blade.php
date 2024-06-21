@extends('admin.layouts.main')

@section('main-container')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Patients</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Official</a></li>
          <li class="breadcrumb-item active">Patient List</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<section class="section">
    <div class="row" id="hi">
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
                    <h5 class="card-title">Patient <span>| List</span></h5>

                    <table class="table table-borderless datatable" id="table1">
                      <thead>
                        <tr>
                          <th scope="col">Health Id</th>
                          <th scope="col">Photo</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Address</th>
                          <th scope="col">Number</th>
                          <th scope="col">Date of Birth</th>

                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($pat as $p)
                        <tr>
                            <th scope="row">{{$p->health_id}}</th>
                            <td><img src="{{ asset('storage/uploads/patients/'.$p->photo)}}" height="100" width="100"></td>
                            <td>{{$p->name." ".$p->m_name." ".$p->l_name}}</td>
                            <td>{{$p->email}}</td>
                            <td>{{$p->address}}</td>
                            <td>{{$p->number}}</td>
                            <td>{{$p->dob}}</td>

                            <td style="font-size: 1.5rem;display :inline-flex;"><a href="{{url('/official/patients/update/')}}/{{$p->health_id}}" class="bi bi-pencil-square" style="margin-right: 15px;" ></a><a href="{{url('/official/patients/delete/')}}/{{$p->health_id}}" class="bi bi-trash link-danger" style="margin-right: 10px;"></a></td>
                        </tr>
                        @endforeach

                      </tbody>
                    </table>

                  </div>

                </div>
              </div><!-- End Recent Sales -->

        </div>
      {{-- </div>
    </div> --}}
</section>
<script>

    // let table1 = document.querySelector('#table1');
    // let dataTable = new simpleDatatables.DataTable(table1);
</script>

</main>

@endsection

