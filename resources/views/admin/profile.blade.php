@extends('admin.layouts.main')

@section('main-container')

<main id="main" class="main" >

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/official')}}">Official</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
          <div class="col-xl-4">

            <div class="card">
              <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                <img src="{{asset('storage/uploads/doctors/'.session()->get('url'))}}" alt="Profile" class="rounded-circle">


                <h2>{{session()->get('name')}}</h2>
                <h3>{{session()->get('role')}}</h3>
              </div>
            </div>

          </div>

          <div class="col-xl-8">

            <div class="card">
              <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">

                  <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                  </li>

                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                  </li>


                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                  </li>

                </ul>
                <div class="tab-content pt-2">

                  <div class="tab-pane fade show active profile-overview" id="profile-overview">
                    <h5 class="card-title">About</h5>
                    <p class="small fst-italic">{{$user->about}}</p>

                    <h5 class="card-title">Profile Details</h5>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label ">Full Name</div>
                      <div class="col-lg-9 col-md-8">{{$user->name}}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Email</div>
                        <div class="col-lg-9 col-md-8">{{$user->email}}</div>
                      </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Department</div>
                      <div class="col-lg-9 col-md-8">{{ session()->get('role')=="Visionary" ? "Visionary" : $user->department}}</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Education</div>
                      <div class="col-lg-9 col-md-8">{{$user->education}}</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Phone</div>
                      <div class="col-lg-9 col-md-8">{{$user->number}}</div>
                    </div>

                    {!! session()->get('role')!="Visionary" ?
                    "<div class='row'>
                      <div class='col-lg-3 col-md-4 label'>Address</div>
                      <div class='col-lg-9 col-md-8'>".$user->address."</div>
                    </div>


                    <div class='row'>
                        <div class='col-lg-3 col-md-4 label'>Since</div>
                        <div class='col-lg-9 col-md-8'>From ".$user->since." Untill now</div>
                      </div>"  : " " !!}


                  </div>

                  <div class="tab-pane fade profile-edit pt-3 contact" id="profile-edit">

                    <!-- Profile Edit Form -->
                    <form class="php-email-form mt-3" action="{{url('/official/profile/update')}}/{{$user->doctor_id ?? $user->id}}" method="POST">
                    @csrf
                      <div class="row mb-3">
                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                        <div class="col-md-8 col-lg-9">
                          {{-- <img src="{{asset('storage/uploads/doctors/'.session()->get('url'))}}" alt="Profile"> --}}
                          <div class="pt-2">
                            <a href="#" class="fs-4 mx-3 " title="Upload new profile image">   <label for="update" class="bi bi-upload link-primary"></label></a>
                            <a href="#" class="link-danger fs-4 mx-1" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                            <input  name="photo" type="file" class=" form-control" id="update" hidden >
                          </div>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="name" type="text" class="form-control" id="fullName" value="{{$user->name}}">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                        <div class="col-md-8 col-lg-9">
                          <textarea name="about" class="form-control" id="about" style="height: 100px">{{$user->about}}.</textarea>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="company" class="col-md-4 col-lg-3 col-form-label">Email</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="email" type="email" class="form-control" id="company" value="{{$user->email}}">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Department</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="department" type="text" class="form-control" id="Job" value="{{$user->department}}">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Country" class="col-md-4 col-lg-3 col-form-label">Education</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="education" type="text" class="form-control" id="Country" value="{{$user->education}}">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="address" type="text" class="form-control" id="Address" value="{{$user->address}}">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="number" type="text" class="form-control" id="Phone" value="{{$user->number}}">
                        </div>
                      </div>




                      {{-- <div class="row mb-3">
                        <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                        </div>
                      </div> --}}



                      <div class="text-center">
                        <button type="submit" class="btn ">Save Changes</button>
                      </div>
                    </form><!-- End Profile Edit Form -->

                  </div>


                  <div class="tab-pane fade pt-3 contact" id="profile-change-password">
                    <!-- Change Password Form -->
                    <form class="php-email-form mt-3">
                        <div class="row gy-4">
                      <div class="row mb-3">
                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="password" type="password" class="form-control" id="currentPassword">
                        </div>

                      </div>

                      <div class="row mb-3">
                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="newpassword" type="password" class="form-control" id="newPassword">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                        </div>
                      </div>

                      <div class="text-center">
                        <button type="submit" class="btn ">Change Password</button>
                      </div>
                    </div>
                    </form><!-- End Change Password Form -->

                  </div>

                </div><!-- End Bordered Tabs -->

              </div>
            </div>

          </div>
        </div>
      </section>

    </main><!-- End #main -->


</main>

@endsection

