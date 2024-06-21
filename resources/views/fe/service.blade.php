@extends('fe.layouts.main')

@section('main-container')

<section class="services mt" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">
        @if ($id==1)

        <div class="box" style="text-align:center;">
            <!-- <i class="fas fa-notes-medical"></i> -->
            <i class="fas fa-stethoscope"></i>
            <h3>free checkups</h3>
            <hr width="80%" style="margin:30px auto ;">
            <div style="width: 60%;margin:auto; text-align:left;">
            <p>Patients who are financially weak or poor will be offered free treatment for any disease. The patient who is having health card with them will be given discount for it
                Regular health checks can identify any early signs of health issues.</p>
            <p>When you have a health check, your doctor will talk with you about your medical history, your family’s history of disease and your lifestyle, including your diet, weight, physical activity, alcohol use and whether you smoke.</p>
                <p>Your doctor may include a general health check when you visit for another reason.
                Your doctor can tell you how often you need health checks.</p>
            </div>
            <a href="{{url('/services')}}" class="btn"> back <span class="fas fa-chevron-right"></span> </a>
        </div>

        @elseif ($id==2)
        <div class="box" style="text-align:center;">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 ambulance</h3>
            <hr width="80%" style="margin:30px auto ;">
            <div style="width: 60%;margin:auto; text-align:left;">
            <p>Our hospital provide 24/7 ambulance service .</p>
			<p> Rapid Care is trusted by millions of people where People find a Complete Medical healing touch near home or just like home.</p>

        <p>It connects people with everything they need to take good care of themselves and their family -, finding the Ambulances(Air, Road, &Train).</p>

        <p>We help millions of patients and thousands of doctors with a simpler
            , easier healthcare experience.</p>

            <p>Contact us on 079-26464343 for embulance service</p>
            </div>
            <a href="{{url('/services')}}" class="btn"> back <span class="fas fa-chevron-right"></span> </a>
        </div>

        @elseif ($id==3)

        <div class="box" style="text-align:center;">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            <hr width="80%" style="margin:30px auto ;">
            <div style="width: 60%;margin:auto; text-align:left;">
            <p>All Healthspring Doctors come with a wealth of experience in their respective domains. Each of them with years of clinical experience having worked at hospitals, corporates or as entrepreneurs.</p>

            <p>At Healthspring we follow the ICD10 protocols which are accepted worldwide so that we can deliver standardized care irrespective of location. As a standard practise, while the doctors are inducted to Healthspring, they are trained on these ICD10 protocols.</p>

            <p>Our Doctors spend as much time with you, as is necessary to understand all your health related problems, arrive at a proper diagnosis and recommend a line of treatment. You can ask as many questions to our Doctors and they will be happy to answer those.</p>

            <p>Healthspring members have access to a doctor 24x7, face-to-face and over a call, especially in case of a medical emergency, wherein our doctor reaches your place in the shortest time possible with an Ambulance and a fully-equipped medical emergency kit</p>
            </div>
                        <a href="{{url('/services')}}" class="btn"> back <span class="fas fa-chevron-right"></span> </a>
        </div>

        @elseif ($id==4)

        <div class="box" style="text-align:center;">
            <i class="fas fa-pills"></i>
            <h3>medicines</h3>
            <hr width="80%" style="margin:30px auto ;">
            <div style="width: 60%;margin:auto; text-align:left;">
            <p>Medicines can treat diseases and improve your health. If you are like most people, you need to take medicine at some point in your life. You may need to take medicine every day, or you may only need to take medicine once in a while. Either way, you want to make sure that your medicines are safe, and that they will help you get better. In the United States, the Food and Drug Administration is in charge of ensuring that your prescription and over-the-counter medicines are safe and effective.</p>

            <p>There are always risks to taking medicines. It is important to think about these risks before you take a medicine. Even safe medicines can cause unwanted side effects or interactions with food, alcohol, or other medicines you may be taking. Some medicines may not be safe during pregnancy. To reduce the risk of reactions and make sure that you get better, it is important for you to take your medicines correctly. You should also be careful when giving medicines to children, since they can be more vulnerable to the effects of medicines.</p>
            </div>
            <a href="{{url('/services')}}" class="btn"> back <span class="fas fa-chevron-right"></span> </a>
        </div>

        @elseif ($id==5)

        <div class="box" style="text-align:center;">
            <i class="fas fa-procedures"></i>
            <h3>bed facility</h3>
            <hr width="80%" style="margin:30px auto ;">
            <div style="width: 60%;margin:auto; text-align:left;">
            <p>Hospital beds and other similar types of beds such as nursing care beds are used not only in hospitals, but in other health care facilities and settings, such as nursing homes, assisted living facilities, outpatient clinics, and in home health care.</p>

            <p>While the term "hospital bed" can refer to the actual bed, the term "bed" is also used to describe the amount of space in a health care facility, as the capacity for the number of patients at the facility is measured in available "beds."</p>

            <p>There are various pros and cons for the different types of hospital beds, depending on the functions and features available, among other factors.</p>
            </div>
            <a href="{{url('/services')}}" class="btn"> back <span class="fas fa-chevron-right"></span> </a>
        </div>

        @elseif ($id==6)

        <div class="box" style="text-align:center;">
            <i class="fas fa-heartbeat"></i>
            <h3>total care</h3>
            <hr width="80%" style="margin:30px auto ;">
            <div style="width: 60%;margin:auto; text-align:left;">
            <p>We are a specialized palliative care centre. Our exceptional palliative care team is ready to assist you with your delicate care needs.</p>

			<p>The practice of palliative care if commonly referred to in parallel with hospice care. Unlike hospice care however, the practice of palliative care is not limited to the management of patients inflicted with cancer. Palliative care focuses on improving the quality of life and providing comfort to patients afflicted with all forms of debilitating and life-threatening medical conditions
            </p>
            </div>
                <a href="{{url('/services')}}" class="btn"> back <span class="fas fa-chevron-right"></span> </a>
        </div>



        @endif

    </div>

</section>



@endsection
