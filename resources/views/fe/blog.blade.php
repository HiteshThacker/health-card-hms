@extends('fe.layouts.main')

@section('main-container')
<!-- blog section starts  -->
<section></section>
<section class="blogs mt-5" id="blogs">
        <!-- posts -->
        <h1 class="heading"> our <span>blog</span> </h1>

        <div class="swiper box-container">
    <div class="box text-lg-center">
        <div style="overflow:hidden;text-align:center; ">
            <img src="{{ asset('storage/uploads/blogs/'.$b->photo)}}" alt="" style="width:50%;border-radius:1rem;">
        </div>
        <div class="content" >
            <div style="text-align: center;">
            <div class="icon" style="display: inline-grid;">
                <a href=""> <i class="fas fa-calendar"></i> {{$b->date}} </a>
                <a href=""> <i class="fas fa-user"></i> {{$b->by}}  </a>
            </div>
            </div>
            <h3>{{$b->title}}</h3>
            <div class="px-5" style="text-align: justify;">
                {!!   $b->description !!}
            </div>
            <br>
            <a href="{{url('/about#blogs')}}" class="btn " > back <span class="fas fa-chevron-right"></span> </a>
        </div>
    </div>
        </div>

</section>
@endsection



