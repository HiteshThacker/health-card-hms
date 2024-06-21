@extends('fe.layouts.main')

@section('main-container')
<!-- booking section starts   -->

<section class="" style="margin-top: 13rem;background:none;" >
    <div class="contant" style="text-align:center">
    <h2 class="text-danger">{{session()->get('error')}}</h2>
    <h3 class="heading" style="font-size: 5rem;">Health Check Up</h3>
    <select class="box" name="change" id="plan" style="font-size: 2rem;margin-bottom:3rem;">
        <option selected disabled>View Health Check Up Plans.....</option>
        <option value="Basic Health">Basic Health Check Up Plan</option>
        <option value="Basic Cardiac">Basic Cardiac Health Check Up Plan</option>
        <option value="Cardio Diabetic">Cardio Diabetic Check Up Plan</option>
        <option value="Comprehensive">Comprehensive Check Up Plan</option>
        <option value="Whole Body">Whole Body Check Up Plan</option>

    </select>


    {{-- <div class="accordion" id="accordionExample">
        <div class="accordion-item border-0">

            <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOn" style="font-size: 2rem ;background:none;">

                <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')"><i class="fas fa-angle-right m-3"></i>Preliminary Test - (3 Test)</h4>
            </button>

          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                <li>CBC with ESR</li>
                <li>Blood Group</li>
                <li>Urine R/M</li>
            </div>
          </div>
        </div>
    </div> --}}

<div id="c1" style="display: none;">
    <h3 class="heading" style="font-size: 3rem;">Basic Health Check Up Plan</h3>
    <hr>
    <div class="accordion" id="">
        <div class="accordion-item border-0">

            <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" style="font-size: 2rem ;background:none;">

                <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                    <i class="fas fa-angle-right m-3"></i>Preliminary Test - (3 Test)
                </h4>
            </button>

          <div id="collapsesix" class="collapse" aria-labelledby="headingsix">
            <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;display:block;margin-left:auto;">
                <li>CBC with ESR</li>
                <li>Blood Group</li>
                <li>Urine R/M</li>
                <br>
            </div>
          </div>
        </div>
    </div>


    <div class="accordion" id="">
        <div class="accordion-item border-0">

            <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTw" aria-expanded="false"  style="font-size: 2rem ;background:none;">

                <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                    <i class="fas fa-angle-right m-3"></i>Diabetic Test - (1 Test)
                </h4>

            </button>

          <div id="collapseTw" class="collapse" aria-labelledby="headingTw" >
            <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                <li>Fasting Blood Sugar</li>
            </div>
          </div>
        </div>
    </div>

    <div class="accordion" id="">
        <div class="accordion-item border-0">

            <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size: 2rem ;background:none;">

                <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                    <i class="fas fa-angle-right m-3"></i>Kideny Function Profile - (1 Test)
                </h4>

            </button>

          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" >
            <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">

                <li>Creatinine</li>

            </div>
          </div>
        </div>
    </div>


    <div class="accordion" id="">
        <div class="accordion-item border-0">

            <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="font-size: 2rem ;background:none;">

                <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                    <i class="fas fa-angle-right m-3"></i>Cardiac Function Profile - (1 Test)
                </h4>

            </button>

          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" >
            <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">

                <li>ECG</li>

            </div>
          </div>
        </div>
    </div>


    <div class="accordion" id="accordionExample">
        <div class="accordion-item border-0">

            <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="font-size: 2rem ;background:none;">

                <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                    <i class="fas fa-angle-right m-3"></i>Specialist Consultations - (4 Consultations)
                </h4>

            </button>

          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" >
            <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                <li>Physician (Internal Medicine)</li>
                <li>Joint Replacement (Orthopedics)</li>
                <li>ENT</li>
                <li>Dietician</li>
            </div>
          </div>
        </div>
     </div>
    </div>{{-- condition end --}}

    <div id="c2" style="display: none;">
        <h3 class="heading" style="font-size: 3rem;">Basic Cardiac Health Check Up Plan</h3>
        <hr>
        <div class="accordion" id="">
            <div class="accordion-item border-0">

                <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" style="font-size: 2rem ;background:none;">

                    <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                        <i class="fas fa-angle-right m-3"></i>Preliminary Test - (3 Test)
                    </h4>
                </button>

              <div id="collapsesix" class="collapse" aria-labelledby="headingsix">
                <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;display:block;margin-left:auto;">
                    <li>CBC with ESR</li>
                    <li>Blood Group</li>
                    <li>Urine R/M</li>
                </div>
              </div>
            </div>
        </div>

        <div class="accordion" id="">
            <div class="accordion-item border-0">

                <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTw" aria-expanded="false"  style="font-size: 2rem ;background:none;">

                    <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                        <i class="fas fa-angle-right m-3"></i>Diabetic Profile - (1 Test)
                    </h4>

                </button>

              <div id="collapseTw" class="collapse" aria-labelledby="headingTw" >
                <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                    <li>Fasting Blood Sugar</li>
                </div>
              </div>
            </div>
        </div>

        <div class="accordion" id="">
            <div class="accordion-item border-0">

                <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size: 2rem ;background:none;">

                    <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                        <i class="fas fa-angle-right m-3"></i>Kideny Function Profile - (3 Test)
                    </h4>

                </button>

              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" >
                <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                    <li>Uric acid</li>
                    <li>Creatinine</li>
                    <li>Potassium</li>
                </div>
              </div>
            </div>
        </div>


        <div class="accordion" id="">
            <div class="accordion-item border-0">

                <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="font-size: 2rem ;background:none;">

                    <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                        <i class="fas fa-angle-right m-3"></i>Liver Function Profile - (1 Test)
                    </h4>

                </button>

              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" >
                <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                    <li>SGPT</li>
                </div>
              </div>
            </div>
        </div>


        <div class="accordion" id="accordionExample">
            <div class="accordion-item border-0">

                <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="font-size: 2rem ;background:none;">

                    <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                        <i class="fas fa-angle-right m-3"></i>Cardiac Function Profile - (3 Tests)
                    </h4>

                </button>

              <div id="collapseFive" class="collapse" aria-labelledby="headingFive" >
                <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                    <li>Lipid Profile</li>
                    <li>ECG</li>
                    <li>Echo screening</li>
                </div>
              </div>
            </div>
        </div>

        <div class="accordion" id="accordionExample">
            <div class="accordion-item border-0">

                <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"  style="font-size: 2rem ;background:none;">

                    <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                        <i class="fas fa-angle-right m-3"></i>Thyroid Function Profile- (1 Test)
                    </h4>

                </button>

              <div id="collapseSix" class="collapse" aria-labelledby="headingSix" >
                <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                    <li>TSH</li>
                </div>
              </div>
            </div>
        </div>

        <div class="accordion" id="accordionExample">
            <div class="accordion-item border-0">

                <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"  style="font-size: 2rem ;background:none;">

                    <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                        <i class="fas fa-angle-right m-3"></i>Radiological Investigation - (1 Test)
                    </h4>

                </button>

              <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" >
                <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                    <li>Chest x-ray</li>
                </div>
              </div>
            </div>
        </div>

        <div class="accordion" id="accordionExample">
            <div class="accordion-item border-0">

                <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false"  style="font-size: 2rem ;background:none;">

                    <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                        <i class="fas fa-angle-right m-3"></i>Specialist Consultations - (4 Consultations)
                    </h4>

                </button>

              <div id="collapseEight" class="collapse" aria-labelledby="headingEight" >
                <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                    <li>Physician (Internal Medicine)</li>
                    <li>Joint Replacement (Orthopedics)</li>
                    <li>ENT</li>
                    <li>Dietician</li>
                </div>
              </div>
            </div>
        </div>
        </div>{{-- condition end --}}


        <div id="c3" style="display: none;">
            <h3 class="heading" style="font-size: 3rem;">Cardio Diabetic Health Check Up Plan</h3>
            <hr>
            <div class="accordion" id="">
                <div class="accordion-item border-0">

                    <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" style="font-size: 2rem ;background:none;">

                        <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                            <i class="fas fa-angle-right m-3"></i>Preliminary Test - (4 Test)
                        </h4>
                    </button>

                  <div id="collapsesix" class="collapse" aria-labelledby="headingsix">
                    <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;display:block;margin-left:auto;">
                        <li>CBC with ESR</li>
                        <li>Blood Group</li>
                        <li>Urine R/M</li>
                        <li>Stool Rim</li>

                    </div>
                  </div>
                </div>
            </div>

            <div class="accordion" id="">
                <div class="accordion-item border-0">

                    <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTw" aria-expanded="false"  style="font-size: 2rem ;background:none;">

                        <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                            <i class="fas fa-angle-right m-3"></i>Diabetic Profile - (4 Test)
                        </h4>

                    </button>

                  <div id="collapseTw" class="collapse" aria-labelledby="headingTw" >
                    <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                        <li>Fasting Blood Sugar</li>
                        <li>Post Lunch Blood Sugar</li>
                        <li>HBA1C</li>
                        <li>Micro Albumin Urea</li>
                    </div>
                  </div>
                </div>
            </div>

            <div class="accordion" id="">
                <div class="accordion-item border-0">

                    <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size: 2rem ;background:none;">

                        <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                            <i class="fas fa-angle-right m-3"></i>Kideny Function Profile - (3 Test)
                        </h4>

                    </button>

                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" >
                    <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                        <li>Uric acid</li>
                        <li>Renal Profile</li>
                        <li>Creatinine</li>
                    </div>
                  </div>
                </div>
            </div>


            <div class="accordion" id="">
                <div class="accordion-item border-0">

                    <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine" style="font-size: 2rem ;background:none;">

                        <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                            <i class="fas fa-angle-right m-3"></i>Lungs Function Profile - (1 Test)
                        </h4>

                    </button>

                  <div id="collapsenine" class="collapse" aria-labelledby="headingnine" >
                    <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                        <li>PFT</li>
                    </div>
                  </div>
                </div>
            </div>


            <div class="accordion" id="">
                <div class="accordion-item border-0">

                    <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="font-size: 2rem ;background:none;">

                        <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                            <i class="fas fa-angle-right m-3"></i>Liver Function Profile - (1 Test)
                        </h4>

                    </button>

                  <div id="collapseFour" class="collapse" aria-labelledby="headingFour" >
                    <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                        <li>SGPT</li>
                    </div>
                  </div>
                </div>
            </div>


            <div class="accordion" id="accordionExample">
                <div class="accordion-item border-0">

                    <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="font-size: 2rem ;background:none;">

                        <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                            <i class="fas fa-angle-right m-3"></i>Cardiac Function Profile - (4 Tests)
                        </h4>

                    </button>

                  <div id="collapseFive" class="collapse" aria-labelledby="headingFive" >
                    <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                        <li>Lipid Profile</li>
                        <li>ECG</li>
                        <li>Echo screening</li>
                        <li>TMT</li>
                    </div>
                  </div>
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item border-0">

                    <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"  style="font-size: 2rem ;background:none;">

                        <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                            <i class="fas fa-angle-right m-3"></i>Thyroid Function Profile- (1 Test)
                        </h4>

                    </button>

                  <div id="collapseSix" class="collapse" aria-labelledby="headingSix" >
                    <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                        <li>TSH</li>
                    </div>
                  </div>
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item border-0">

                    <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"  style="font-size: 2rem ;background:none;">

                        <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                            <i class="fas fa-angle-right m-3"></i>Radiological Investigation - (2 Test)
                        </h4>

                    </button>

                  <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" >
                    <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                        <li>Chest x-ray</li>
                        <li>Sonography abdomen</li>
                    </div>
                  </div>
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item border-0">

                    <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false"  style="font-size: 2rem ;background:none;">

                        <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                            <i class="fas fa-angle-right m-3"></i>Specialist Consultations - (4 Consultations)
                        </h4>

                    </button>

                  <div id="collapseEight" class="collapse" aria-labelledby="headingEight" >
                    <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                        <li>Physician (Internal Medicine)</li>
                        <li>Joint Replacement (Orthopedics)</li>
                        <li>ENT</li>
                        <li>Dietician</li>
                    </div>
                  </div>
                </div>
            </div>
            </div>{{-- condition end --}}


            <div id="c4" style="display: none;">
                <h3 class="heading" style="font-size: 3rem;">Comprehensive Health Check Up Plan</h3>
                <hr>
                <div class="accordion" id="">
                    <div class="accordion-item border-0">

                        <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" style="font-size: 2rem ;background:none;">

                            <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                                <i class="fas fa-angle-right m-3"></i>Preliminary Test - (4 Test)
                            </h4>
                        </button>

                      <div id="collapsesix" class="collapse" aria-labelledby="headingsix">
                        <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;display:block;margin-left:auto;">
                            <li>CBC with ESR</li>
                            <li>Blood Group</li>
                            <li>Urine R/M</li>
                            <li>Stool Rim</li>

                        </div>
                      </div>
                    </div>
                </div>

                <div class="accordion" id="">
                    <div class="accordion-item border-0">

                        <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTw" aria-expanded="false"  style="font-size: 2rem ;background:none;">

                            <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                                <i class="fas fa-angle-right m-3"></i>Diabetic Profile - (4 Test)
                            </h4>

                        </button>

                      <div id="collapseTw" class="collapse" aria-labelledby="headingTw" >
                        <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                            <li>Fasting Blood Sugar</li>
                            <li>Post Lunch Blood Sugar</li>
                            <li>HBA1C</li>
                            <li>Micro Albumin Urea</li>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="accordion" id="">
                    <div class="accordion-item border-0">

                        <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size: 2rem ;background:none;">

                            <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                                <i class="fas fa-angle-right m-3"></i>Kideny Function Profile - (5 Test)
                            </h4>

                        </button>

                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" >
                        <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                            <li>Uric acid</li>
                            <li>Renal Profile</li>
                            <li>Calcium</li>
                            <li>Sodium</li>
                            <li>Creatinine</li>
                        </div>
                      </div>
                    </div>
                </div>


                <div class="accordion" id="">
                    <div class="accordion-item border-0">

                        <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine" style="font-size: 2rem ;background:none;">

                            <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                                <i class="fas fa-angle-right m-3"></i>Lungs Function Profile - (1 Test)
                            </h4>

                        </button>

                      <div id="collapsenine" class="collapse" aria-labelledby="headingnine" >
                        <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                            <li>PFT</li>
                        </div>
                      </div>
                    </div>
                </div>


                <div class="accordion" id="">
                    <div class="accordion-item border-0">

                        <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="font-size: 2rem ;background:none;">

                            <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                                <i class="fas fa-angle-right m-3"></i>Liver Function Profile - (1 Test)
                            </h4>

                        </button>

                      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" >
                        <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                            <li>SGPT</li>
                        </div>
                      </div>
                    </div>
                </div>


                <div class="accordion" id="accordionExample">
                    <div class="accordion-item border-0">

                        <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="font-size: 2rem ;background:none;">

                            <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                                <i class="fas fa-angle-right m-3"></i>Cardiac Function Profile - (4 Tests)
                            </h4>

                        </button>

                      <div id="collapseFive" class="collapse" aria-labelledby="headingFive" >
                        <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                            <li>Lipid Profile</li>
                            <li>ECG</li>
                            <li>Echo screening</li>
                            <li>TMT</li>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item border-0">

                        <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"  style="font-size: 2rem ;background:none;">

                            <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                                <i class="fas fa-angle-right m-3"></i>Thyroid Function Profile- (3 Test)
                            </h4>

                        </button>

                      <div id="collapseSix" class="collapse" aria-labelledby="headingSix" >
                        <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                            <li>T3</li>
                            <li>T4</li>
                            <li>TSH</li>
                        </div>
                      </div>
                    </div>
                </div>


                <div class="accordion" id="accordionExample">
                    <div class="accordion-item border-0">

                        <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseten" aria-expanded="false"  style="font-size: 2rem ;background:none;">

                            <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                                <i class="fas fa-angle-right m-3"></i>Specific Tests- (2 Test)
                            </h4>

                        </button>

                      <div id="collapseten" class="collapse" aria-labelledby="headingten" >
                        <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                            <li>PSA (for male)</li>
                            <li>Vitamin B12</li>
                        </div>
                      </div>
                    </div>
                </div>


                <div class="accordion" id="accordionExample">
                    <div class="accordion-item border-0">

                        <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"  style="font-size: 2rem ;background:none;">

                            <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                                <i class="fas fa-angle-right m-3"></i>Radiological Investigation - (2 Test)
                            </h4>

                        </button>

                      <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" >
                        <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                            <li>Chest x-ray</li>
                            <li>Sonography abdomen</li>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item border-0">

                        <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false"  style="font-size: 2rem ;background:none;">

                            <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                                <i class="fas fa-angle-right m-3"></i>Specialist Consultations - (4 Consultations)
                            </h4>

                        </button>

                      <div id="collapseEight" class="collapse" aria-labelledby="headingEight" >
                        <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                            <li>Physician (Internal Medicine)</li>
                            <li>Joint Replacement (Orthopedics)</li>
                            <li>ENT</li>
                            <li>Dietician</li>
                        </div>
                      </div>
                    </div>
                </div>
                </div>{{-- condition end --}}


                <div id="c5" style="display: none;">
                    <h3 class="heading" style="font-size: 3rem;">Whole Body Health Check Up Plan</h3>
                    <hr>
                    <div class="accordion" id="">
                        <div class="accordion-item border-0">

                            <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" style="font-size: 2rem ;background:none;">

                                <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                                    <i class="fas fa-angle-right m-3"></i>Preliminary Test - (4 Test)
                                </h4>
                            </button>

                          <div id="collapsesix" class="collapse" aria-labelledby="headingsix">
                            <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;display:block;margin-left:auto;">
                                <li>CBC with ESR</li>
                                <li>Blood Group</li>
                                <li>Urine R/M</li>
                                <li>Stool Rim</li>

                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="accordion" id="">
                        <div class="accordion-item border-0">

                            <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTw" aria-expanded="false"  style="font-size: 2rem ;background:none;">

                                <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                                    <i class="fas fa-angle-right m-3"></i>Diabetic Profile - (4 Test)
                                </h4>

                            </button>

                          <div id="collapseTw" class="collapse" aria-labelledby="headingTw" >
                            <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                                <li>Fasting Blood Sugar</li>
                                <li>Post Lunch Blood Sugar</li>
                                <li>HBA1C</li>
                                <li>Micro Albumin Urea</li>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="accordion" id="">
                        <div class="accordion-item border-0">

                            <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size: 2rem ;background:none;">

                                <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                                    <i class="fas fa-angle-right m-3"></i>Kideny Function Profile - (5 Test)
                                </h4>

                            </button>

                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" >
                            <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                                <li>Urea</li>
                                <li>Uric acid</li>
                                <li>Renal Profile</li>
                                <li>Calcium</li>
                                <li>Sodium</li>
                                <li>Creatinine</li>
                                <li>Potassium</li>
                            </div>
                          </div>
                        </div>
                    </div>


                    <div class="accordion" id="">
                        <div class="accordion-item border-0">

                            <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine" style="font-size: 2rem ;background:none;">

                                <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                                    <i class="fas fa-angle-right m-3"></i>Lungs Function Profile - (1 Test)
                                </h4>

                            </button>

                          <div id="collapsenine" class="collapse" aria-labelledby="headingnine" >
                            <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                                <li>PFT</li>
                            </div>
                          </div>
                        </div>
                    </div>


                    <div class="accordion" id="">
                        <div class="accordion-item border-0">

                            <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="font-size: 2rem ;background:none;">

                                <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                                    <i class="fas fa-angle-right m-3"></i>Liver Function Profile - (1 Test)
                                </h4>

                            </button>

                          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" >
                            <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                                <li>Live Profile</li>
                                <li>SGPT</li>
                            </div>
                          </div>
                        </div>
                    </div>


                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item border-0">

                            <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="font-size: 2rem ;background:none;">

                                <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                                    <i class="fas fa-angle-right m-3"></i>Cardiac Function Profile - (4 Tests)
                                </h4>

                            </button>

                          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" >
                            <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                                <li>Lipid Profile</li>
                                <li>ECG</li>
                                <li>Echo screening</li>
                                <li>TMT</li>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item border-0">

                            <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"  style="font-size: 2rem ;background:none;">

                                <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                                    <i class="fas fa-angle-right m-3"></i>Thyroid Function Profile- (3 Test)
                                </h4>

                            </button>

                          <div id="collapseSix" class="collapse" aria-labelledby="headingSix" >
                            <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                                <li>T3</li>
                                <li>T4</li>
                                <li>TSH</li>
                            </div>
                          </div>
                        </div>
                    </div>


                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item border-0">

                            <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseten" aria-expanded="false"  style="font-size: 2rem ;background:none;">

                                <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                                    <i class="fas fa-angle-right m-3"></i>Specific Tests- (2 Test)
                                </h4>

                            </button>

                          <div id="collapseten" class="collapse" aria-labelledby="headingten" >
                            <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                                <li>PSA (for male)</li>
                                <li>Vitamin D3 level</li>
                                <li>Vitamin B12</li>
                            </div>
                          </div>
                        </div>
                    </div>


                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item border-0">

                            <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"  style="font-size: 2rem ;background:none;">

                                <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                                    <i class="fas fa-angle-right m-3"></i>Radiological Investigation - (2 Test)
                                </h4>

                            </button>

                          <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" >
                            <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                                <li>Chest x-ray</li>
                                <li>Sonography abdomen</li>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item border-0">

                            <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false"  style="font-size: 2rem ;background:none;">

                                <h4  style="font-size: 2rem;"  onclick="this.classList.toggle('down')">
                                    <i class="fas fa-angle-right m-3"></i>Specialist Consultations - (4 Consultations)
                                </h4>

                            </button>

                          <div id="collapseEight" class="collapse" aria-labelledby="headingEight" >
                            <div class="accordion-body" style="font-size:1.5rem;margin-top:-1rem;">
                                <li>Physician (Internal Medicine)</li>
                                <li>Joint Replacement (Orthopedics)</li>
                                <li>ENT</li>
                                <li>Dietician</li>
                            </div>
                          </div>
                        </div>
                    </div>
                    </div>{{-- condition end --}}




</div>

</section>
<section class="book mt" id="book">

    <h1 class="heading"> <span>book</span> now </h1>

    <div class="row">

        <div class="image">
            <img src="{{url('fe/image/check.gif')}}" alt="">
        </div>

        <form action="{{ url('/') }}/booking" method="post">
        @csrf
            <h3>book appointment</h3>
            {{-- <div style="font-size: 2rem;" >
                <input type="radio" id="self" name="for" checked><label class="border-0" style="margin: auto 1rem;" for="self">for self</label>
                <input type="radio" id="rel" name="for"><label class="border-0" style="margin-left: 1rem;" for="rel">for relative</label>
            </div> --}}
            <div id="see" >
            <input type="text" placeholder="your name" class="box" name="name" value="{{old('name')}}" required>
            <span class="text-danger" style="font-size: 1.5rem">
                @error('name')
                    {{$message}}
                @enderror
            </span>
            <input type="number" placeholder="your number" class="box" name="no"  value="{{old('no')}}" required>
            <span class="text-danger" style="font-size: 1.5rem">
                @error('no')
                    {{$message}}
                @enderror
            </span>
            <input type="email" placeholder="your email" class="box" name="email"  value="{{old('email')}}" required>
            <span class="text-danger" style="font-size: 1.5rem">
                @error('email')
                    {{$message}}
                @enderror
            </span>



        </div>

        <select class="box" name="changee" id="plan" style="font-size: 2rem;margin-bottom:3rem;" required>
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

        </select>
        {{-- <input type="text" placeholder="Selected disease" id="disease" class="box" name="disease" required readonly > --}}
            <input type="date" class="box" id="dt" name="dt" min="{{Date("Y-m-d")}}" required value="{{old('dt')}}">
            <span class="text-danger" style="font-size: 1.5rem">
                @error('dt')
                    {{$message}}
                @enderror
                {{session()->get('error')}}
            </span>


            {{-- <table class='table time' style="display: none;" id='time' style='text-transform:lowercase'>
                        <thead><tr><th colspan="2">
                            <label class='box border-0' style='font-size:2.2rem' >Time</label>
                        </tr></th></thead>
                        <tbody>
                    <tr><td class='text-lowercase'>08:00 am - 01:00 pm </td><td>
                        <input type='radio'  id='t1' name='time' value='1' readonly>
                    <label class='border-0 text-lowercase' for='t1'>

                    </label>
                    </td></tr>
                    <tr><td class='text-lowercase'>03:00 am - 8:00 pm </td><td><input class=''  type='radio'  id='t2' name='time' value='2'>
                        <label class='border-0' for='t2'>




                </tbody>
                </table> --}}


            <input type="submit" value="Confirm" class="btn m-auto" style="display:block; margin-top: 10px !important;">
        </form>

    </div>

    <script>

            // s=document.querySelector('#self');
            // r=document.querySelector('#rel');
            // see=document.querySelector('#see');

            // s.addEventListener('click', () => {
            //     see.style.display="none";
            // });
            // r.addEventListener('click', () => {
            //     see.style.display="";
            // });


            // time=document.querySelector('#time');
            // dt=document.querySelector('#dt');
            // dt.addEventListener('change', () => {
            //     time.style.display="";
            // });

            document.querySelector('#plan').addEventListener('change', () => {
            if(document.getElementById('plan').value=="Basic Health")
            {
                document.querySelector('#c1').style.display="";
                document.querySelector('#c2').style.display="none";
                document.querySelector('#c3').style.display="none";
                document.querySelector('#c4').style.display="none";
                document.querySelector('#c5').style.display="none";
            }
            else if(document.getElementById('plan').value=="Basic Cardiac")
            {
                document.querySelector('#c2').style.display="";
                document.querySelector('#c1').style.display="none";
                document.querySelector('#c3').style.display="none";
                document.querySelector('#c4').style.display="none";
                document.querySelector('#c5').style.display="none";
            }
            else if(document.getElementById('plan').value=="Cardio Diabetic")
            {
                document.querySelector('#c3').style.display="";
                document.querySelector('#c1').style.display="none";
                document.querySelector('#c2').style.display="none";
                document.querySelector('#c4').style.display="none";
                document.querySelector('#c5').style.display="none";
            }
            else if(document.getElementById('plan').value=="Comprehensive")
            {
                document.querySelector('#c4').style.display="";
                document.querySelector('#c1').style.display="none";
                document.querySelector('#c2').style.display="none";
                document.querySelector('#c3').style.display="none";
                document.querySelector('#c5').style.display="none";

            }
            else if(document.getElementById('plan').value=="Whole Body")
            {
                document.querySelector('#c5').style.display="";
                document.querySelector('#c1').style.display="none";
                document.querySelector('#c2').style.display="none";
                document.querySelector('#c3').style.display="none";
                document.querySelector('#c4').style.display="none";

            }
            document.getElementById('disease').value=document.getElementById('plan').value+" Check Up";
        });

        // new Date(new Date().getFullYear(), 11, 31);
    //    console.log(new Date(new Date().getFullYear(),new Date().getMonth(),31));

    </script>

</section>

<!-- booking section ends -->
@endsection
