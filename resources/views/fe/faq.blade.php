<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FAQ</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" >

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{url('fe/css/style.css')}}" >


    <style type="text/css">
      body{
        /* background: #eee; */
        padding-top: 20px;
        font-size: 1.5rem;
        width: 80%;
        margin: auto;
      }
      @media (max-width:800px){
            body{
                width: 90%;
            }
            .mt{
                margin-top: 8rem;
            }

        }
      ._header{
        border-radius: 20px 20px 0px 0px;
        padding: 10px 0px;
        background: #05C3DD;
        color: #fff;
        width: 100%;
        display: flex;
        align-content: center;
        justify-content: center;
      }
    .accordion-button{
        border-color: none !important;
        font-weight: bold;
        background: none !important;
        /* border: none !important; */
      }
      .accordion-button:focus{
        color: black;
      box-shadow: none !important;

      }
      .accordion-body{
        /* border: 1px solid gray; */
      }


    </style>
  </head>

  <body>

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> health card </a>

    <nav class="_navbar navbar navbar-expand-lg">

        <a href="{{url('/')}}">home</a>

        <a href="{{url('/services')}}">services</a>

        <a href="{{url('/about')}}">about</a>

        <a href="{{url('/doctors')}}">doctors</a>
        @if (session()->get('h_id')!='')
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="width:40%;">

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                help
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item w-auto"  href="{{url('/booking')}}">book appoinment</a></li>
                  <li><a class="dropdown-item w-auto" href="{{url('/help')}}">Quick treatment</a></li>

              </ul>
            </li>

          </ul>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="width:40%;">

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                profile
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item w-auto"  href="{{url('/card')}}">print/show card</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item w-auto" href="{{url('/up_profile')}}">update profile</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item w-auto" href="{{url('/change_pass')}}">change password</a></li>


              </ul>
            </li>

          </ul>
          <a href="{{url('/logout')}}">logout</a>


         @else
            <a href="{{url('/login')}}">log in</a>
        @endif


    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>
<div class="mt p-md-5 ">

    <div class="_header">
        <h1>FAQs</h1>
      </div>
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h1 class="accordion-heade" id="headingOne" >
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOn" style="font-size: 2rem ;">
              What is Health Card ?
            </button>

          </h1>
          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              The <strong>Health</strong> aims to develop the backbone necessary to support the integrated digital health infrastructure of the country. It aims to bridge the existing gap amongst different stakeholders of healthcare ecosystem through digital highways.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-heade" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-size: 2rem ;">
              What is Health Id Number ?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
               Anyone who wishes to participate in Health Card and have their health records available digitally must start by creating Health Id number . Health Id number is a randomly generated 12 digit number used for the purposes of uniquely identifying persons, authenticating them, and threading their health records (only with their informed consent) across multiple systems and stakeholders.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size: 2rem ;">
              how do I get health Id Number ?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" >
            <div class="accordion-body">
              You can get Health Id number by self-registration on the ABHA number web portal or by downloading ABDM Health Records application from the Google Playstore. You can register here ABDM Health Id number or download the Mobile application here Health Records You may also request for creation of your Health Id  number at a participating health facility, which may include public/private hospitals, community health centre, health and wellness centres across India.
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="font-size: 2rem ;">
                Is my health Id Number is unique?
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Your ABHA number is created by using your basic details in addition to your Mobile Number or Aadhaar Number. Your ABHA number will be unique to you, and you will have the option to link all your health records to the ABHA number . You can also choose to create multiple IDs to link different sets of health records with different ABHA number s, however, it is recommended that you create only one Health Id number .
              </div>
            </div>
          </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="font-size: 2rem ;">
                  Do I have submit any physical documents ?
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  As part of the existing process, you are not required to submit any physical documents anywhere. Enrolment of Health Id number is paperless and hassle free. ABDM will soon be rolling out a feature to support Health Id number creation in low resource settings in a paper based manner. However, the scope of the said process may be restricted only to delivery of government health benefit schemes.

                </div>
              </div>
            </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" style="font-size: 2rem ;">
                    how do I get health Id Number ?
                  </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    ABDM does not store any of your health records. Your health records are stored with healthcare information providers as per their retention policies, and are shared over the ABDM network with encryption mechanisms only after your express consent.
                  </div>
                </div>
              </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" style="font-size: 2rem ;">
                      what do if i forget password ?
                    </button>
                  </h2>
                  <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      You may login to your Health Id number through Email OTP as applicable, and set a new password.

                    </div>

              </div>
      </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>


</html>
