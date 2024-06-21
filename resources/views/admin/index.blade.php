@extends('admin.layouts.main')

@section('main-container')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

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
                  <h5 class="card-title">Doctors </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$doctor}}+</h6>
                      {{-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

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
                  <h5 class="card-title">Patient</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                        {{-- regular patients --}}
                      <h6>{{$patient + 1000}}+</h6>
                      {{-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

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
                  <h5 class="card-title">bed</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <span class="material-symbols-sharp ">
                            bed
                            </span>
                    </div>
                    <div class="ps-3">
                      <h6>250+</h6>
                      {{-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> --}}

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            @if(session()->get('role')=='Visionary')

             {{-- Recent Sales --}}
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                {{-- <div class="filter">
                    <a class="icon" href="#" ><i class="bi bx-loader-circle"></i></a>
                </div> --}}

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
                  <h5 class="card-title">Doctor <span>| live</span></h5>

                  <table class="table table-borderless datatable" id="table1">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Department</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($online as $o)
                        @if ($o->status=="Online")

                        <tr>
                            <th scope="row">{{$o->doctor_id}}</th>
                            <td><img src="{{ asset('storage/uploads/doctors/'.$o->photo)}}" height="100" width="100"></td>
                            <td>{{$o->name}}</td>
                            <td>{{$o->email}}</td>
                            <td>{{$o->department}}</td>
                            <td><span class="badge bg-success">Online</span></td>
                        </tr>
                        @endif
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
            </div>
            @endif

          </div>

                <div class="card p-4 shadow contact">

                    <h5 class="card-title m-auto mb-4"> Add News & Update </h5>
                    <form action="{{ url('/official') }}/addnews" method="POST" enctype="multipart/form-data" class="php-email-form">
                      @csrf
                      <div class="row gy-4">
                      <div class="col-md-6">
                          <input type="text" name="title" class="form-control p-2" placeholder="Title" value="{{old('title')}}" required />
                      </div>
                      <div class="col-md-6">
                        <input type="file" name="photo" class="form-control p-2"  accept="image/png, image/gif, image/jpeg, image/jpg" required />
                    </div>

                    <span class="text-danger" style="font-size: 1.5rem">
                        @error('photo')
                            {{$message}}
                        @enderror
                    </span>
                    <div class="col-md-12">
                      <label for="des" class="form-control border-0 p-2 text-center" style="font-size:2.5rem;" >
                          Description
                      </label>
                      <textarea id="des" name="des"  class="form-control" rows="5" >
                        {{old('des')}}
                      </textarea>

                      </div>

                    {{-- <div class="col-md-12">
                      <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                    </div> --}}

                    <div class="col-md-12 text-center">
                          <input class="btn" type="submit" value="Submit" name="insert" >
                    </div>

                  </div>
                </form>
              </div>





        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">



          <!-- News & Updates Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">All</a></li>

              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

              <div class="news">

                @if (session()->get('news')!="")

                @foreach ($news as $n)
                <div class="post-item clearfix">
                    <img src="{{asset('storage/uploads/news/'.$n->photo)}}" alt="">
                    <h4><a href="#">{{$n->title}}</a></h4>
                    <p>{{$n->contant}}</p>
                </div>

                @endforeach

                @endif


                {{-- <div class="post-item clearfix">
                  <img src="admin/img/news-2.jpg" alt="">
                  <h4><a href="#">Quidem autem et impedit</a></h4>
                  <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="admin/img/news-3.jpg" alt="">
                  <h4><a href="#">Poor Sleep Can Make Vaccines Less Effective, Particularly for Men</a></h4>
                  <p>Researchers say poor sleep can greatly reduce your body’s immune reaction to vaccinations.
                    They say that’s because restful sleep helps the body to produce antibodies needed to ward off infections.Use limiting screen time at night.</p>
                </div> --}} 

               {{-- <div class="post-item clearfix">
                    <img src="admin/img/news-3.jpg" alt="">
                    <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                    <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                  </div>

                 <div class="post-item clearfix">
                  <img src="admin/img/news-4.jpg" alt="">
                  <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                  <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="admin/img/news-5.jpg" alt="">
                  <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                  <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                </div> --}}

              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>




  </main><!-- End #main -->

  {{-- <script>
    iid=setInterval(load,1000);
    function load()
    {
        document.getElementById("table1").innerHTML.reload();
        alert('hii');
        // location.reload();
    }
  </script> --}}
  @endsection

