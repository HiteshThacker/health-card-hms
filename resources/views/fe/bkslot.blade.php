@extends('fe.layouts.main')

@section('main-container')

<section class="book mt" id="book">
    <h1 class="heading"> <span>check </span> slot </h1>
    <div class="row" style="max-width:500px;margin:auto">


    <form action="{{ url('/') }}/bkslot" method="post" style="text-align:left;">
        @csrf

            <label class='box border-0' style='font-size:2rem;' >Name</label>
            <input type="text" placeholder="your name" class="box" name="name" value="{{$request['name']}}"  readonly>
            <label class='box border-0' style='font-size:2rem' >Number</label>
            <input type="number" placeholder="your number" class="box" name="no"  value="{{$request['no']}}" readonly>
            <label class='box border-0' style='font-size:2rem' >Email</label>
            <input type="email" placeholder="your email" class="box" name="email"  value="{{$request['email']}}" readonly>


        {{-- <select class="box" name="changee" id="plan" style="font-size: 2rem;margin-bottom:3rem;" required readonly aria-selected="{{$request['changee']}}">
        <option selected disabled value="">Select Health Check Up Plan ?</option>
        <option value="Basic Health">Basic Health Check Up Plan</option>
        <option value="Basic Cardiac">Basic Cardiac Health Check Up Plan</option>
        <option value="Cardio Diabetic">Cardio Diabetic Check Up Plan</option>
        <option value="Comprehensive">Comprehensive Check Up Plan</option>
        <option value="Whole Body">Whole Body Check Up Plan</option>
        <span class="text-danger" style="font-size: 1.5rem">
            @error('changee')
                {{$message}}
            @enderror
        </span>

        </select> --}}
        <label class='box border-0' style='font-size:2rem' >Health Checkup Plan</label>
        <input type="text" placeholder="Plan" id="disease" class="box" name="disease" required readonly value="{{$request['changee']}}">
        <label class='box border-0' style='font-size:2rem' >Date</label>
            <input type="date" class="box" id="dt" name="dt" min="{{Date("Y-m-d")}}" required value="{{$request['dt']}}" readonly>

            <table class='table time' id='time' style='text-transform:lowercase'>
                        <thead><tr><th colspan="2">
                            <label class='box border-0' style='font-size:2.2rem' >Time</label>
                        </tr></th></thead>
                        <tbody>
                    <tr><td class='text-lowercase'>08:00 am - 01:00 pm </td><td>
                        <input type='radio'  id='t1' name='time' value='1'>
                    <label class='border-0 text-lowercase' for='t1'>
                        {{$request['s1']}}
                    </label>
                    </td></tr>
                    <tr><td class='text-lowercase'>03:00 am - 8:00 pm </td><td><input  type='radio'  id='t2' name='time' value='2'>
                        <label class='border-0' for='t2'>
                            {{$request['s2']}}
                        </label>


                </tbody>
                </table>




            {{-- <select class="time" name="change" id="chng">
                <option selected>00</option>
                @for ($i=1;$i<10;$i++)
                    <option value="{{$i}}">{{'0'.$i}}</option>
                @endfor
                @for ($i=10;$i<60;$i++)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor

            </select> --}}
            {{-- <select class="time" name="change" id="chng" >
                <option selected value="am">am</option>
                <option value="pm">pm</option>

            </select> --}}


            <input type="submit" value="Book Now" class="btn m-auto" style="display:block; margin-top: 10px !important;">
        </form>
    </div>
    <script>
        document.addEventListener('contextmenu',(e)=>e.preventDefault());

        function ctrlShiftKey(e,keyCode){
            return e.ctrlKey && e.shiftKey && e.keyCode === keyCode.charCodeAt(0);
        }

        document.onkeydown=(e)=>{
            if(
                event.keyCode===123 ||
                ctrlShiftKey(e,'I') ||
                ctrlShiftKey(e,'J') ||
                ctrlShiftKey(e,'C') ||
                (e.ctrlKey && e.keyCode === 'U'.charCodeAt(0))

            )
            return false;
        }
    </script>
</section>



@endsection
