@extends('fe.layouts.main')

@section('main-container')
<!-- booking section starts   -->

<section class="book" id="book">

    <div class="container mt-5 pt-5">
        <h1 class="heading"> <span>login</span> now </h1>
    <div class="row">
    <div class="col-12 col-sm-7 col-md-6 m-auto">
        <div class="card border-0 shadow">
            <div class="card-body">

                {{-- <div class="image">
                    <img src="{{url('fe/image/check.gif')}}" alt="">
                </div> --}}

                <form action="{{ url('/') }}/login" method="POST">
                    @csrf
                    <svg class="mx-auto my-3" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg>
                    {{-- <h3>book appointment</h3> --}}
                    <input type="number" placeholder="Health Id" name="h_id" class="box" required/>
                    <span class="text-danger" style="font-size: 1.5rem">
                        @error('h_id')
                            {{"health id must be require"}}
                        @enderror
                    </span>

                    <div class="pa-ss" >
                        <input type="password" name="password" id="password" class="" placeholder="Password" autocomplete="off" required />
                        <span class="eye">
                        <i class="bi-eye" id="e1" style="font-size:2rem;display:;"></i>
                        <i class="bi-eye-slash" id="e2" style="font-size:2rem;display:none;"></i>
                        </span>
                    </div>
                    <span class="text-danger" style="font-size: 1.5rem">
                        @error('password')
                            {{$message}}
                        @enderror
                    </span>
                    <br>
                    <input type="submit" value="login" class="btn">
                    
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

        e1.addEventListener('click', () => {


            const type = password.getAttribute('type') === 'password' ?'text' : 'password';

            password.setAttribute('type', type);

            // Toggle the eye and bi-eye icon
            // togglePassword.classList.toggle('bi-eye-slash');
            // e2.setAttribute('style','font-size:2rem;display:;');

            e1.style.display="none";
            e2.style.display="";

        });
        e2.addEventListener('click', () => {

            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';

            password.setAttribute('type', type);

            e1.style.display="";
            e2.style.display="none";
            });

    </script>

</section>

<!-- booking section ends -->


@endsection
