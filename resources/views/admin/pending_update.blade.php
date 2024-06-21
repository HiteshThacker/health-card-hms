@extends('admin.layouts.main')

@section('main-container')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Patients</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Official</a></li>
          <li class="breadcrumb-item active">Pending Update List</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<section class="section">
    <div class="row">
            <div class="col-12">
                <div class="card recent-sales overflow-auto">


                     <div class="filter ">

                      <a class="icon"  href="#" data-bs-toggle="dropdown"><p class="bi bi-three-dots " align="right"> </p></a>

                      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                          <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="{{url('official/patients/pending_update')}}">pending</a></li>
                        <li><a class="dropdown-item" href="{{url('official/patients/all_update')}}">all</a></li>
                      </ul>
                    </div>
                  <div class="card-body">
                    <h5 class="card-title">Pending <span>| Update</span></h5>

                    <table class="table table-borderless datatable" id="table1">
                      <thead>
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Health Id</th>
                          <th scope="col">Field</th>
                          <th scope="col">Proof</th>
                          <th scope="col">photo</th>
                          <th scope="col">Name</th>
                          <th scope="col">Date of Birth</th>
                          <th scope="col">status</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($pending_update as $pu)
                        <tr>
                            <th scope="row">{{$pu->pu_id}}</th>
                            <th scope="row">{{$pu->health_id}}</th>
                            <td>{{$pu->field}}</td>
                            <td><img src="{{ asset('storage/uploads/pending_update/'.$pu->proof)}}" height="100" width="100" onerror="this.remove();"></td>
                            <td><img src="{{ asset('storage/uploads/pending_update/'.$pu->photo)}}" height="100" width="100" alt="" onerror="this.remove();"></td>
                            <td>{{$pu->name." ".$pu->mname." ".$pu->lname}}</td>

                            <td>{{$pu->dob}}</td>

                            @if ($pu->status=='pending')
                                <td><span class="badge bg-warning">{{$pu->status}}</span></td>
                                <td style="font-size: 1.5rem;display :inline-flex;"><a class="btn" style="margin-right: 15px;" href="{{url('/official/patients/pending_update/')}}/{{$pu->pu_id}}">Check</a></td>
                            @elseif ($pu->status=='confirm')
                                <td><span class="badge bg-success">{{$pu->status}}</span></td>
                            @else
                                <td><span class="badge bg-danger">{{$pu->status}}</span></td>

                            @endif

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

