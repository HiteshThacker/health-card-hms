@extends('fe.layouts.main')

@section('main-container')

<section class="book" id="book">
<div class="container mt-5 pt-5">
    <h1 class="heading"> <span>signup</span> now </h1>

    <div class="row">
        <div class="col-12 col-sm-7 col-md-6 m-auto">
            <div class="card border-0 shadow">
                <div class="card-body">

                    <form action="{{ url('/') }}/insert" method="POST">
                    @csrf
                    <div class="md-4">

                    <input type="email" id="mail" name="email" class="box" pattern="*@*" placeholder="E-mail" value="{{session()->get('email')}}" required />
                    <input type="text" name="fname" class="box" placeholder="First Name" required />
                    <input type="text" name="mname" class="box" placeholder="Middle Name" required />
                    <input type="text" name="lname" class="box" placeholder="Last Name" required />

                    <div class="box border-0" >
                        <div style="font-size:2rem;"  >
                            gender
                        </div>
                        <div style="display: flex;">
                        <input class="" type="radio"  id="male" name="gender" >
                        <label class="box border-0" for="male">
                          male
                        </label>
                        <input class="" type="radio"  id="female" name="gender" >
                        <label class="box border-0" for="female">
                          female
                        </label>
                        <input class=""  type="radio"  id="other" name="gender">
                        <label class="box border-0" for="other">
                        other
                        </label>
                        </div>
                    </div>

                    <input type="text" name="address" class="box" placeholder="Address" required />
                    <input type="text" name="city" class="box" placeholder="City" required />
                    <input type="number" name="no" class="box" placeholder="Mo.no." required />
                    <input type="date" name="dob" class="box" placeholder="Date of Birth" max="{{Date("Y-m-d")}}" required />
                    {{-- <input type="number" name="age" class="box" placeholder="age" required /> --}}
                    <select class="box" name="bg" >
                        <option selected disabled>blood group</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                    <input type="text" name="ld" class="box" placeholder="Long Disease (if have)" />

                    </div>
                    <div class="md-4 ">
                    <label for="photo" class="box border-0" style="font-size:2.5rem" >
                        Upload Profile Photo
                    </label>
                    <input type="file" id="photo" name="photo" class="box" style="border: none;
                    " required />
                    <div class="md-4">
                        <div class="pa-ss" >
                            <input type="password" name="password" id="password" class="" placeholder="Password" autocomplete="off" required />
                            <span class="eye">
                            <i class="bi-eye " id="e1" style="font-size:2rem;display:;"></i>
                            <i class="bi-eye-slash " id="e2" style="font-size:2rem;display:none;"></i>
                            </span>
                        </div>
                        <div class="pa-ss" >
                            <input type="password" name="pass" id="pass" class="" placeholder="Conform Password" autocomplete="off" required />

                        </div>

                    <div class="box border-0">
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
                    <div class="col-12">

                        <input class="btn btn-lg" id="btnotp" type="submit" value="Submit" name="insert" >

                    </div>

                    <a href="{{ url('/login') }}" class="n-link" id="tmp">Already have an account ?</a>
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
        // Toggle the eye and bi-eye icon
        // togglePassword.classList.toggle('bi-eye-slash');
        // e2.setAttribute('style','font-size:2rem;display:;');


    });
    e2.addEventListener('click', () => {

        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';

        password.setAttribute('type', type);
        pass.setAttribute('type', type);

        e1.style.display="";
        e2.style.display="none";
        });


</script>
</section>





@endsection
