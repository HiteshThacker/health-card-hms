@extends('admin.layouts.main')

@section('main-container')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Report</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Official</a></li>
          <li class="breadcrumb-item active">Report List</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<section class="section">
    <div class="row">
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                  <div class="card-body">
                    <h5 class="card-title">Report</h5>
                    <div style="text-align:right;"><a href="{{url('official/report/add')}}" class="btn">Add Report</a></div>
                    <table class="table table-borderless datatable" id="table1">
                      <thead>
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Health Id</th>
                          <th scope="col">Hospital Id</th>
                          <th scope="col">Hospital Name</th>
                          <th scope="col">Doctor Name</th>
                          <th scope="col">Date</th>
                          <th scope="col">Time</th>
                          <th scope="col">Notes</th>
                          <th scope="col">Notes Image</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($report as $r)
                        <tr>
                            <th scope="row">{{$r->report_id}}</th>
                            <th scope="row">{{$r->health_id}}</th>
                            <th scope="row">{{$r->hospital_id}}</th>
                            <td>{{$r->hospital_name}}</td>
                            <td>{{$r->doctor}}</td>

                            <td>{{$r->check_date}}</td>
                            <td>{{$r->chk_time}}</td>
                            <td>{{$r->notes}}</td>
                            <td><img src="{{ asset('storage/uploads/reports/'.$r->notes_img)}}" height="100" width="100"></td>
                            <td style="font-size: 1.5rem;display :inline-flex;"><a href="{{url('/official/report/delete/')}}/{{$r->report_id}}" class="bi bi-trash link-danger" style="margin-right: 10px;"></a></td>

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

