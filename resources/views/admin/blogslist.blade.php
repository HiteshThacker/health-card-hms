@extends('admin.layouts.main')

@section('main-container')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Blogs</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Official</a></li>
          <li class="breadcrumb-item active">Blog List</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<section class="section">
    <div class="row">


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
                    <h5 class="card-title">Blog <span>| List</span></h5>

                    <table class="table table-borderless datatable" id="table1">
                      <thead>
                        <tr>
                          <th scope="col">Blog Id</th>
                          <th scope="col">By</th>
                          <th scope="col">Date</th>
                          <th scope="col">Title</th>
                          <th scope="col">Image</th>
                          <th scope="col">Description</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($blog as $b)
                        <tr>
                            <th scope="row">{{$b->blog_id}}</th>
                            <td>{{$b->by}}</td>
                            <td>{{$b->date}}</td>
                            <td>{{$b->title}}</td>
                            <td><img src="{{ asset('storage/uploads/blogs/'.$b->photo)}}" height="100" width="100"></td>
                            <td>{{ Str::limit($b->description)}}</td>

                            <td style="font-size: 1.5rem;display :inline-flex;"><a href="{{url('/official/blogs/update/')}}/{{$b->blog_id}}" class="bi bi-pencil-square" style="margin-right: 15px;" ></a><a href="{{url('/official/blogs/delete/')}}/{{$b->blog_id}}" class="bi bi-trash link-danger" style="margin-right: 10px;"></a></td>
                        </tr>
                        @endforeach

                      </tbody>
                    </table>

                  </div>

                </div>
              </div><!--  -->

        </div>

</section>


</main>

@endsection

