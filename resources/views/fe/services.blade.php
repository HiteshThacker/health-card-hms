@extends('fe.layouts.main')

@section('main-container')
<!-- services section starts  -->

<section class="services mt" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <!-- <i class="fas fa-notes-medical"></i> -->
            <i class="fas fa-stethoscope"></i>
            <h3>free checkups</h3>
            <p>Patients who are financially weak or poor will be offered free treatment for any disease.</p>
            <a href="{{url('/services/1')}}" class="btn"> Read more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 ambulance</h3>
            <p>Our hospital provide 24/7 ambulance service .</p>
            <a href="{{url('/services/2')}}" class="btn"> Read more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            <p>All Healthspring Doctors come with a wealth of experience in their respective domains.</p>
            <a href="{{url('/services/3')}}" class="btn"> Read more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>medicines</h3>
            <p>Medicines can treat diseases and improve your health.</p>
            <a href="{{url('/services/4')}}" class="btn"> Read more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>bed facility</h3>
            <p>There are various types of hospital beds, depending on the functions and features available, among other factors</p>
            <a href="{{url('/services/5')}}" class="btn"> Read more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>total care</h3>
            <p>We are a specialized palliative care centre. </p>
            <a href="{{url('/services/6')}}" class="btn"> Read more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- services section ends -->



<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="{{url('fe/image/pic-1.png')}}" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p class="text">We Are A Specialized Palliative Care Centre. Our Exceptional Palliative Care Team Is Ready To Assist You With Your Delicate Care Needs The Practice Of Palliative Care If Commonly Referred To In Parallel With Hospice Care. Unlike Hospice Care However, The Practice Of Palliative Care Is Not Limited To The Management Of Patients Inflicted With Cancer. Palliative Care Focuses On Improving The Quality Of Life And Providing Comfort To Patients Afflicted With All Forms Of Debilitating And Life-Threatening Medical Conditions. THE STAFF WAS VERY CONCERNED AND HELPFUL. It Was A Comfortable Stay. The Staff Was Very Concerned And Helpful. Overall A Great Experience. Keep Up The Good Work</p>
        </div>

        <div class="box">
            <img src="{{url('fe/image/pic-2.png')}}" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>

            </div>
            <p class="text">Wonderful Experience With LIFECARE HOSPITAL. Dr.DEEPAK N. VORA Was A Wonderful Surgeon, And The Staff Was Always Helpful And Kind. They Ensured I Had A Smooth Prep, Surgery, And Follow-Up. I Am So Glad I Chose LIFECARE HOSPITAL And Would Highly Recommend To Anyone.</p>
        </div>

        <div class="box">
            <img src="{{url('fe/image/pic-3.png')}}" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Great Medical Office, Wonderful And Warm Experience From Start To Finish. Appreciate Dr. babul jha Taking Time To Go Over The Diagnosis Clearly And Treatment Options. Was Referred Over By My General Doctor And Can See Why. Highly Recommended</p>
        </div>



    </div>

</section>

<!-- review section ends -->
@endsection

