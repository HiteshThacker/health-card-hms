@extends('fe.layouts.main')

@section('main-container')
<!-- booking section starts   -->


<section class="book" id="book">

    <div class="container mt-5 pt-5">
        <h1 class="heading"> <span>verify</span> now </h1>
        <h3 style="text-align: center;-webkit-text-stroke-width: 1px;
        -webkit-text-stroke-color:var(--black);"> First you have to verify the email </h3>

        <div class="row">
            <div class="col-12 col-sm-7 col-md-6 m-auto">
                <div class="card border-0 shadow">
                    <div class="card-body">
                {{-- <div class="image">
                    <img src="{{url('fe/image/check.gif')}}" alt="">
                </div> --}}

                <form action="{{ url('/') }}/verify" method="POST">
                    @csrf
                    <div class="md-4">

                        <input type="email" id="mail" name="email" class="box" pattern="*@*" placeholder="E-mail" value="{{$email}}" required readonly />
                     </div>
                     <div class="md-4">

                        <input type="number" class="box" id="otpin" placeholder="OTP" name="otp" required  />

                        <span class="text-danger" style="font-size:15px">{{session()->get('error')}}</span>

                      </div>
                      <div class="col-12">
                        <input class="btn btn-lg" id="btnotp" type="submit" value="Continue" name="cont" >

                        {{-- <a href="{{ hgyyugyguyguy }}" class="n-link"  id="resend" style="" onclick="timer()" >Resend</a> --}}

                        <input class="n-link" style="background:none;margin:auto;margin-top:1rem;" id="resend" type="submit" value="Resend" name="resend" >

                        <p id="notice" style="margin-top: 10px;font-size:20px" ></p><!-- otp page -->
                    </div>

                    <a href="{{ url('/signin') }}" class="n-link" id="tmp">change email ?</a>

                </form>
            </div>
        </div>
     </div>
    </div>
    </div>
    {{--  @php session(['otp' => rand(1111,9999)]); @endphp --}}
    <script>

window.onload=function(){
            timer();
        }

            ///////////////////////////////////////////

            function timer()
            {
                m=1;
                s=5;
                document.getElementById('resend').style.display='none';

                iid=setInterval(re_time,1000);

                //clearInterval(iid);
                function re_time()
                {

                    //notice.setAttribute('text','777');
                    if (s>=0 && s<10) {
                        document.getElementById('notice').innerHTML=' 0'+m +' :  0'+ s;
                    }
                    else
                    {
                        document.getElementById('notice').innerHTML= '0'+m +' : '+ s;
                    }

                    if (s==0 && m!=0) { m--; s=6}
                    if (s==0 && m==0) {
                        clearInterval(iid);
                        document.getElementById('notice').innerHTML='';
                        document.getElementById('resend').style.display='';

                    }
                    s--;
                }

                // hii={{session()->get('otp')}};
                // alert(hii);

            }

            </script>

</section>

            <!-- booking section ends -->


@endsection

