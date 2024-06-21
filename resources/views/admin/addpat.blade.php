@extends('admin.layouts.main')

@section('main-container')

<main id="main" class="main" >

    <div class="pagetitle">
      <h1>Patients</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/official')}}">Official</a></li>
          <li class="breadcrumb-item active">Add Patient</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<section class="section text-capitalize" style="text-align: center" >

    <div class="container mt-5 pt-5">
        {{-- <h1 class="heading"> <span>signup</span> now </h1> --}}

        <div class="row">
            <div class="col-12 col-sm-7 col-md-6 m-auto">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <h2 class="card-title"> {{$title}} </h2>
                        <form  method="POST" action="{{$url}}" enctype="multipart/form-data" class="php-email-form">
                            @csrf
                            {{-- @method('PUT') --}}

                        <input type="text" name="h_id" class="form-control"  value="{{$p->health_id}}" hidden/>
                        <div class="md-4 my-3">


                            {{-- @foreach ($pat as $p) --}}

                        <input type="email" id="mail" name="email" class="form-control" pattern="*@*" placeholder="E-mail" value="{{$p->email ?? session()->get('email')}}" readonly  />
                        </div>
                        <span class="text-danger" style="font-size: 1rem">
                            @error('email')
                                {{$message}}
                            @enderror
                        </span>

                        <div class="md-4 my-3">
                        <input type="text" name="First_Name" class="form-control" placeholder="First Name"  value="{{$p->name ?? old('First_Name')}}" />
                        </div>
                        <span class="text-danger" style="font-size: 1rem">
                            @error('First Name')
                                {{$message}}
                            @enderror
                        </span>

                        <div class="md-4 my-3">
                        <input type="text" name="Middle_Name" class="form-control" placeholder="Middle Name"  value="{{$p->m_name ?? old('Middle_Name')}}" />
                        </div>
                        <span class="text-danger" style="font-size: 1rem">
                            @error('Middle Name')
                                {{$message}}
                            @enderror
                        </span>

                        <div class="md-4 my-3">
                        <input type="text" name="Last_Name" class="form-control" placeholder="Last Name"  value="{{$p->l_name ?? old('Last_Name')}}" />
                        </div>
                        <div class=" my-3">
                            <div class="fs-4"  >
                                Gender
                            </div>
                            <div style="word-spacing: 10px;">

                                <input class="" type="radio"  id="male" name="gender" value="male" {{$p->gender == "male" ? "checked" : ""}} >
                                <label class="" for="male" >
                                    male
                                </label>
                                <input class="" type="radio"  id="female" name="gender" value="female"  {{$p->gender == "female" ? "checked" : ""}}>
                                <label class="" for="female">
                                    female
                                </label>
                                <input class=""  type="radio"  id="other" name="gender" value="other"  {{$p->gender == "other" ? "checked" : ""}}>
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
                        <input type="date" name="Date_of_Birth" class="form-control" placeholder="Date of Birth" max="{{Date("Y-m-d")}}"  value="{{$p->dob ?? old('Date_of_Birth')}}" />
                    </div>
                        <span class="text-danger" style="font-size: 1rem">
                            @error('Date of Birth')
                                {{$message}}
                            @enderror
                        </span>
                        <div class="md-4 my-3">
                        <input type="text" name="Address" class="form-control" placeholder="Address"  value="{{$p->address ?? old('Address')}}" />
                        </div>
                        <span class="text-danger" style="font-size: 1rem">
                            @error('Address')
                                {{$message}}
                            @enderror
                        </span>

                        <div class="md-4 my-3">
                        <input type="text" name="City" class="form-control" placeholder="City"  value="{{$p->city ?? old('City')}}"/>
                        </div>
                        <span class="text-danger" style="font-size: 1rem">
                            @error('City')
                                {{$message}}
                            @enderror
                        </span>

                        <div class="md-4 my-3">
                        <input type="number" name="Number" class="form-control" placeholder="Mo.no."  value="{{$p->number ?? old('Number')}}"/>
                        </div>
                        <span class="text-danger" style="font-size: 1rem">
                            @error('Number')
                                {{$message}}
                            @enderror
                        </span>


                        {{-- <input type="number" name="age" class="form-control" placeholder="age" /> --}}
                        <select class="form-control my-3" name="bg" >
                            @if ($p->bg!="" or old('bg')!="")
                            <option selected value="{{$p->bg ?? old('bg')}}" >{{$p->bg ?? old('bg')}}</option>
                            @else
                            <option selected disabled>blood group</option>
                            @endif
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                        <span class="text-danger" style="font-size: 1rem">
                            @error('bg')
                                {{$message}}
                            @enderror
                        </span>

                        {{-- <div class="md-4 my-3">
                        <input type="text" name="ld" class="form-control" placeholder="Long Disease (if have)"  value="{{$p->long_disease}}"/>
                        <span class="text-danger" style="font-size: 1rem">
                            @error('ld')
                                {{$message}}
                            @enderror
                        </span>

                        </div> --}}
                        <div class="md-4 my-3">
                        <label for="photo" class="form-control border-0" style="font-size:2.5rem" >
                            Upload Profile Photo
                        </label>
                        @if ($p->photo=="")
                        <input type="file" id="photo" name="photo" class="form-control my-3" title="{{$p->photo ?? old('photo')}}">

                        @else
                        <div class="input-group has-validation pa-ss my-3" style="cursor: pointer;">
                            <span class="input-group-text" id="cf" style="margin-right: -.2rem;" onclick="document.querySelector('#img').setAttribute('type', 'file');this.style.display='none';">
                                Choose File
                            </span>
                            <input type="text" class="form-control " value="{{$p->photo}}" onclick="this.setAttribute('type', 'file');document.querySelector('#cf').style.display='none';"   readonly id="img" name="img" />
                            {{-- <i class=" my-2 bi-eye-slash" id="togglePassword"></i> --}}
                        </div>
                        @endif
                        </div>
                        <span class="text-danger" style="font-size: 1rem">
                            @error('photo')
                                {{$message}}
                            @enderror
                        </span>

                        @if ($title!="Update Patients")


                        <div class="input-group has-validation pa-ss my-3">
                            <input type="password" name="password" id="password" class="form-control " placeholder="Password" autocomplete="off"   />
                            {{-- <i class=" my-2 bi-eye-slash" id="togglePassword"></i> --}}
                            <span class="eye input-group-text " style="margin-left: -.2rem;">
                                <i class="bi-eye" id="e1" style="font-size:1rem;display:;"></i>
                                <i class="bi-eye-slash " id="e2" style="font-size:1rem;display:none;"></i>
                            </span>
                        </div>
                        <div class="pa-ss my-3" >
                            <input type="password" name="pass" id="pass" class="form-control" placeholder="Conform Password" autocomplete="off" />
                        </div>


                            <span class="text-danger" style="font-size: 1rem">
                                @error('password')
                                {{$message}}
                                @enderror
                            </span>
                            <div class="my-2">
                                <input type="checkbox" class="form-check-input" id="invalidCheck" required >
                                <label for="invalidCheck" >
                                    Agree terms and conditions
                                </label>
                            </div>
                            @endif

                        <div class="col-12 my-3">


                            <input class="btn" id="btnotp" type="submit" value="Submit" name="add" >


                        </div>
                        {{-- @endforeach --}}

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

