@extends('admin.layouts.main')

@section('main-container')

<main id="main" class="main" >

    <div class="pagetitle">
      <h1>Doctors</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/official')}}">Official</a></li>
          <li class="breadcrumb-item active">Add Doctor</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<section class="section" style="text-align: center">

    <div class="container mt-5 pt-5">
        {{-- <h1 class="heading"> <span>signup</span> now </h1> --}}

        <div class="row">
            <div class="col-12 col-sm-7 col-md-6 m-auto">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <h5 class="card-title"> {{$title}} </h5>
                        <form action="{{$url}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="md-4 my-3">

                        <input type="email" id="mail" name="email" class="form-control" pattern="*@*" placeholder="E-mail" value={{$d->email ?? session()->get('email')}}  required />
                        </div>

                        <div class="md-4 my-3">
                        <input type="text" name="name" class="form-control" placeholder="Full Name" value="{{$d->name ?? old('name')}}" required />
                        </div>
                        <span class="text-danger" style="font-size: 1rem">
                            @error('name')
                                {{$message}}
                            @enderror
                        </span>


                        <div class=" my-3">
                            <div class="fs-4" >
                                Gender
                            </div>
                            <div style="word-spacing: 10px;">
                            <input class="" type="radio"  id="male" name="gender" value="male" {{$d->gender == "male" ? "checked" : ""}}>
                            <label class="" for="male">
                              male
                            </label>
                            <input class="" type="radio"  id="female" name="gender" value="female" {{$d->gender == "female" ? "checked" : ""}}>
                            <label class="" for="female">
                              female
                            </label>
                            <input class=""  type="radio"  id="other" name="gender" value="other" {{$d->gender == "other" ? "checked" : ""}}>
                            <label class="" for="other">
                            other
                            </label>
                            </div>
                        </div>
                        <span class="text-danger" style="font-size: 1rem">
                            @error('gender')
                                {{$message}}
                            @enderror
                        </span>


                        <div class="md-4 my-3">
                            <label class="mb-3 fs-4" for="dob">Date of Birth</label>
                        <input type="date" name="Date_of_Birth" class="form-control" placeholder="Date of Birth" max="{{Date("Y-m-d")}}"  value="{{$d->dob ?? old('Date_of_Birth')}}" required />
                        </div>
                        <span class="text-danger" style="font-size: 1rem">
                            @error('Date_of_Birth')
                                {{$message}}
                            @enderror
                        </span>


                        <div class="md-4 my-3">
                        <input type="text" name="address" class="form-control" placeholder="Address" value="{{$d->address ?? old('address')}}" required />
                        </div>
                        <span class="text-danger" style="font-size: 1rem">
                            @error('address')
                                {{$message}}
                            @enderror
                        </span>

                        <div class="md-4 my-3">
                        <input type="text" name="ho_id" class="form-control" placeholder="hospital id" required value="{{$d->hospital_id ?? old('ho_id')}}" />
                        </div>
                        <span class="text-danger" style="font-size: 1rem">
                            @error('ho_id')
                                {{$message}}
                            @enderror
                        </span>

                        <div class="md-4 my-3">
                        <input type="number" name="number" class="form-control" placeholder="Mo.no." required value="{{$d->number ?? old('number')}}"/>
                        </div>
                        <span class="text-danger" style="font-size: 1rem">
                            @error('number')
                                {{$message}}
                            @enderror
                        </span>


                        <div class="md-4 my-3">
                        <input type="text" name="department" class="form-control" placeholder="Department" value="{{$d->department ?? old('department')}}"/>
                        </div>
                        <span class="text-danger" style="font-size: 1rem">
                            @error('department')
                                {{$message}}
                            @enderror
                        </span>
                        <div class="md-4 my-3">
                        <input type="text" name="education" class="form-control" placeholder="Education" value="{{$d->education ?? old('education')}}"/>
                        </div>
                        <span class="text-danger" style="font-size: 1rem">
                            @error('education')
                                {{$message}}
                            @enderror
                        </span>
                        <div class="md-4 my-3">
                        <input type="text" name="since" class="form-control" placeholder="since" value="{{$d->since ?? old('since')}}"/>
                        </div>
                        <span class="text-danger" style="font-size: 1rem">
                            @error('since')
                            {{$message}}
                            @enderror
                        </span>
                        <div class="md-4 my-3">
                            <textarea name="about" class="form-control" placeholder="about">{{$d->about ?? old('about')}}</textarea>
                        </div>
                    @if ($title=="Update Doctors")

                        <div class="md-4 my-3">
                            <label for="photo" class="form-control border-0" style="font-size:2.5rem" >
                                Upload Profile Photo
                        </label>

                        @if ($d->photo=="")
                        <input type="file" id="photo" name="photo" class="form-control my-3" title="{{$d->photo ?? old('photo')}}">

                        @else
                        <div class="input-group has-validation pa-ss my-3" style="cursor: pointer;">
                            <span class="input-group-text" id="cf" style="margin-right: -.2rem;" onclick="document.querySelector('#img').setAttribute('type', 'file');this.style.display='none';">
                                Choose File
                            </span>
                            <input type="text" class="form-control " value="{{$d->photo}}" onclick="this.setAttribute('type', 'file');document.querySelector('#cf').style.display='none';"   readonly id="img" name="img" />
                            {{-- <i class=" my-2 bi-eye-slash" id="togglePassword"></i> --}}
                        </div>
                        @endif
                    </div>
                    @endif


                    @if ($title!="Update Doctors")
                    <div class="input-group has-validation pa-ss my-3">
                            <input type="password" name="password" id="password" class="form-control " placeholder="Password" autocomplete="off"  required  />
                            {{-- <i class=" my-2 bi-eye-slash" id="togglePassword"></i> --}}
                            <span class="eye input-group-text">
                                <i class="bi-eye " id="e1" style="font-size:1rem;display:;"></i>
                                <i class="bi-eye-slash " id="e2" style="font-size:1rem;display:none;"></i>
                            </span>
                        </div>
                        <div class="pa-ss my-3" >
                            <input type="password" name="pass" id="pass" class="form-control" placeholder="Conform Password" autocomplete="off" required />
                        </div>
                        {{-- <div class="md-4 my-3"> --}}
                            {{-- <div class="pa-ss input-group has-validation" >
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" autocomplete="off" required />

                            </div> --}}


                        <div class="form-check my-2">
                            <input type="checkbox" value="" id="invalidCheck"  required >
                            <label for="invalidCheck" >
                                Agree terms and conditions
                            </label>
                        </div>

                        <span class="text-danger" style="font-size: 1.5rem">
                            @error('password')
                                {{$message}}
                            @enderror
                        </span>
                        @endif
                        <div class="col-12 my-3">
                            <input class="btn" id="btnotp" type="submit" value="Submit" name="insert" >
                        </div>

                        {{-- <a href="{{ url('/login') }}" class="n-link" id="tmp">Already have an account ?</a> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const e1 = document.querySelector('#e1');
        const e2 = document.querySelector('#e2');


        const password = document.querySelector('#password');
        const pass = document.querySelector('#pass');

        e1.addEventListener('click', () => {


            const type = password.getAttribute('type') === 'password' ?'text' : 'password';

            password.setAttribute('type', type);
            pass.setAttribute('type', type);

            e1.style.display="none";
            e2.style.display="";



        });
        e2.addEventListener('click', () => {

            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';

            password.setAttribute('type', type);
            pass.setAttribute('type', type);

            e1.style.display="";
            e2.style.display="none";
            });


    </script>
    </div>

</section>

</main>

@endsection

