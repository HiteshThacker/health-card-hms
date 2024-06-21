@extends('fe.layouts.main')

@section('main-container')
    <section class="book" id="book">
        <div class="container mt-5 pt-5">
            <h1 class="heading"> <span>update</span> now </h1>

            <div class="row">
                <div class="col-12 col-sm-7 col-md-6 m-auto">
                    <div class="card border-0 shadow">
                        <div class="card-body">

                            <form action="{{ url('/') }}/update" method="POST">
                            @csrf
                            <div class="md-4 " id="photo" style="">
                                <label for="_photo" class="box border-0" style="font-size:2.5rem" >
                                    Upload Profile Photo
                                </label>
                                <input type="file" id="_photo" name="photo" class="box" style="border: none;
                                " />
                            </div>
                            <span class="text-danger" style="font-size: 1.5rem">
                                @error('photo')
                                    {{$message}}
                                @enderror
                            </span>

                            <div class="md-4" id="pname" style="">
                                <input type="text" name="fname" class="box" placeholder="First Name" autocomplete="off"/>
                                <span class="text-danger" style="font-size: 1.5rem">
                                    @error('fname')
                                        {{$message}}
                                    @enderror
                                </span>
                                <input type="text" name="mname" class="box" placeholder="Middle Name" autocomplete="off" />
                                <span class="text-danger" style="font-size: 1.5rem">
                                    @error('mname')
                                        {{$message}}
                                    @enderror
                                </span>
                                <input type="text" name="lname" class="box" placeholder="Last Name" autocomplete="off" />
                                <span class="text-danger" style="font-size: 1.5rem">
                                    @error('lname')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>

                            <label for="dob" class="box border-0" style="font-size:2.5rem" >
                                Date of Birth
                            </label>

                            <input type="date" name="dob" id="dob" class="box" placeholder="Date of Birth" />
                            <span class="text-danger" style="font-size: 1.5rem">
                                @error('dob')
                                    {{$message}}
                                @enderror
                            </span>

                            <div class="md-4 " id="proof" style="">
                                <label for="_proof" class="box border-0" style="font-size:2.5rem" >
                                    Upload ID Proof
                                </label>
                                {{"(Aadharcard,pancard,License,etc)"}}
                                <input type="file" id="_proof" name="proof" class="box" style="border: none;
                                " required />
                            </div>


                            {{-- <div class="md-4"> --}}
                            {{-- <span class="text-danger" style="font-size: 1.5rem">
                                @error('password')
                                    {{$message}}
                                @enderror
                            </span> --}}
                            <div class="md-4">

                                <input class="btn btn-lg" type="submit" value="Submit" name="update" >

                            </div>

                            <a href="{{ url('/') }}" class="n-link" id="tmp">cancel ?</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if (!is_null($pu))

         {{-- <img src="data:image/jpg;base64,.{{base64_encode($pu->photo)}}." > --}}
        {{-- {{ $pu->field }} --}}
        @endif




        <script>
            change=document.querySelector('#chng');
            dob=document.querySelector('#dob');
            photo=document.querySelector('#photo');
            pname=document.querySelector('#pname');
            proof=document.querySelector('#proof')
            change.addEventListener('change', () => {
                proof.style.display="";
                if(change.value=="dob")
                {
                    pname.style.display="none";
                    photo.style.display="none";
                    dob.setAttribute('type', 'date');

                }
                else if(change.value=="photo")
                {
                    dob.setAttribute('type', 'hidden');
                    photo.style.display="";
                    pname.style.display="none";
                }
                else if(change.value=="pname")
                {
                    pname.style.display="";
                    dob.setAttribute('type', 'hidden');
                    photo.style.display="none";
                }



            });
        </script>
    </section>
@endsection
