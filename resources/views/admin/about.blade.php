@extends('admin.layouts.main')

@section('main-container')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>About</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">About</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
<section class="section contact ">

    <div class="row mx-auto gy-4 mt-5 text-center">

      {{-- <div class="col-xl-6"> --}}

        <div class="row ">
          <div class="col-lg-5">
            <div class="info-box card">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <p>Sardar Patel Statue Corner,<br>Stadium Road ,Ahmedabad</p>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="info-box card">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p>079 - 4020 4020 <br>079 - 2646 4343</p>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="info-box card">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p><a  class="__cf_email__" >[info@lifecare.Co.in&#160;]</a>
                 <br><br>
                 {{--<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="aac9c5c4decbc9deeacfd2cbc7dac6cf84c9c5c7">[email&#160;protected]</a> --}}
            </p>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="info-box card">
              <i class="bi bi-clock"></i>
              <h3>Open Hours</h3>
              <p>24 Hours</p><br>
            </div>
          </div>
        </div>

      </div>

      {{-- <div class="col-xl-6">
        <div class="card p-4">
          <form action="forms/contact.php" method="post" class="php-email-form">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Send Message</button>
              </div>

            </div>
          </form>
        </div>

      </div> --}}

    </div>

  </section>
</main>

@endsection
