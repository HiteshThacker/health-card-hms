@extends('fe.layouts.main')

@section('main-container')
<!-- booking section starts   -->

<section class="book mt-5" id="book">
    <div class="container mt-5 pt-5">
    <h1 class="heading">  </h1>
    <div class="row">
        <div class="col-12 col-sm-7 col-md-6 m-auto">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="{{ url('/') }}/change_pass" method="post">
                        @csrf
                        <h3>change password</h3>


                        <span class="text-danger" style="font-size: 1.5rem">
                            @if (session()->get('error')!="")
                            {{session()->get('error')}}
                            @endif
                        </span>
                        <input type="password" placeholder="old password" class="box" name="opass">
                        <input type="password" placeholder="new password" class="box" name="pass">
                        <span class="text-danger" style="font-size: 1.5rem">
                            @error('pass')
                                {{$message}}
                            @enderror
                        </span>
                        <input type="password" placeholder="confirm password" class="box" name="password">
                        <span class="text-danger" style="font-size: 1.5rem">
                            @error('pass')
                                {{$message}}
                            @enderror
                        </span>

                        <a href="{{ url('/forget_pass') }}" class="n-link" id="tmp">Forget</a>
                        <input class="btn btn-lg" type="submit" value="Change" name="" >

                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection


