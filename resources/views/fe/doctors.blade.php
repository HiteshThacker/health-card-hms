@extends('fe.layouts.main')

@section('main-container')
<!-- doctors section starts  -->

<section class="doctors mt" id="doctors">

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">

        @foreach ($doc as $d)
        <div class="box">
            {{--storage_path('app\public\uploads\doctors\\'.$d->doctor_id)--}}


            <img src="{{ asset('storage/uploads/doctors/'.$d->doctor_id.'.jpeg')}}" alt="">

            <h3> {{$d->name}}</h3>
            <span>{{$d->department}}</span>
            <div class="share" style="text-align:center;">


                {{-- <h2 class="accordion-header" id="heading{{$d->doctor_id}}" > --}}
                    <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$d->doctor_id}}" aria-expanded="false"  style="text-align:center;background:none;">

                        <a class="fas fa-plus" id="{{$d->doctor_id}}" onclick="this.classList.toggle('close')" ></a>
                        

                    </button>
                  {{-- </h2> --}}
                  <div id="collapse{{$d->doctor_id}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                        <h2><strong>Education / Qualification </strong>  </h2>
                        <h4>{{$d->education}}</h4>
                        <hr>
                        <h2><strong> Length of Work</strong> </h2>
                        <h4>Since {{$d->since}} untill now</h4>
                    </div>
                  </div>


            </div>
        </div>
        @endforeach

        {{-- <div class="box">
            <img src="{{url('fe/image/doc-2.jpg')}}" alt="">
            <h3> Dr. Darshan K. PATEL</h3>
            <span>M.D</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f" id="fb"></a>
                <a href="#" class="fab fa-twitter" id="tw"></a>
                <a href="#" class="fab fa-instagram" id="insta"></a>

            </div>
        </div>
         --}}
         <script>

         </script>
    </div>

</section>

<!-- doctors section ends -->
@endsection



