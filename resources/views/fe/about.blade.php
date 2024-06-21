@extends('fe.layouts.main')

@section('main-container')
<!-- about section starts  -->

<section class="about mt" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="{{url('fe/image/h3.svg')}}" alt="">
        </div>

        <div class="content">
            <h3>we take care of your healthy life</h3>
            <p>Community Outreach Programs Are An Important Vehicle For Reducing The Discovery-Delivery Disconnect By Bringing Health Education And Health Screening Services Directly To Community Members. Such Programs Are Consistent With The Priority Areas Of Trinity Care Foundation Initiatives For Reducing Health Disparities. Outreach Programs Are Important Tools For Bringing Health Education And Screening Services Directly To Community Members And Serve To Contribute To Reducing Health Disparities. They Assist Communities And Hospitals To Reach Mutually Beneficial Goals That Would Otherwise Not Be Achievable For Promoting Accessible And Equitable Care.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus vero ipsam laborum porro voluptates voluptatibus a nihil temporibus deserunt vel?</p>
            <a href="#about more" class="btn"> Raed More{{--url()->current()--}} <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->




<!-- blogs section starts  -->

@if(session()->get('h_id')!='')


<section class="blogs" id="blogs">
    <!-- posts -->
    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="swiper box-container">
        @foreach ($blg as $b)

        <div class="box">
            <div class="image">
                <img src="{{ asset('storage/uploads/blogs/'.$b->photo)}}" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> {{$b->date}} </a>
                    <a href="#"> <i class="fas fa-user"></i> {{$b->by}}  </a>
                </div>
                <h3>{{$b->title}}</h3>
                {!! Str::limit( $b->description,100) !!}
                <br>
                <a href="{{url('/blog')}}/{{$b->blog_id}}" class="btn" > learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        @endforeach
        {{-- <div class="box">
            <div class="image">
                <img src="{{url('fe/image/blog-2.jpg')}}" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>blog title goes here</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div> --}}

    </div>

</section>
@endif

<!-- blogs section ends -->

<section>
<div style="text-align:center;">
<iframe class="if_img" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.3574915785684!2d72.55941511478564!3d23.04735178494056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848f2c522659%3A0xb79b41785fd88cd4!2sLife%20Care%20Multispeciality%20Hospital!5e0!3m2!1sen!2sin!4v1676029730208!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</section>

<section class="about" id="about more">

    <h4 class="heading" style="font-size: 3rem;"> <span>Life Care </span> Institute of Medical Sciences & Research </h4>
    <div class="row">
    <div class="content">
    <p>Life Care Institute of Medical Sciences & Research is one of the best super multi-speciality hospitals which is located in Sardar Patel Statue Corner, Stadium Road in Ahmedabad, right at the center of the medical tourism hub of Gujarat. At Life Care hospital all major medical and surgical services are available 24-hours a day and 365 days a year. Life Care hospital as center of excellence is well equipped with state of the art laboratory and medical equipment. Our medical team comprises highly qualified consultants, physicians, surgeons, anesthetists, medical technicians and well-trained nursing staff.</p>

    <p>We at Life Care Hospital provide a complete range of latest diagnostic, medical and surgical facilities for the care of its patients. Our dedicated team of healthcare professionals are committed to give each patient the best care.</p>
    </div></div>

</section>
@endsection

