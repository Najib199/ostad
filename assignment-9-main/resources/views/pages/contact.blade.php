@extends('index')
@section('content')
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-9">

      @include('partials.nav')
      
      <section id="contact" class="contact">
        <div class="container">

          <div class="section-title">
            <h2>Contact</h2>
            <p>For inquiries and collaboration opportunities, feel free to reach out to me at [abrakib.cse@gmail.com]. I welcome discussions on potential projects, partnerships, or any technology-related conversations. Looking forward to connecting with like-minded individuals!</p>
          </div>

          <div class="row" data-aos="fade-in">

            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>Haji Ashraf Ali Super Market, East Shewrapara, Dhaka</p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>abrakib.cse@gmail.com</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+880 17 67 270051</p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.7850643273264!2d90.37335747429402!3d23.790666987231216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7351e079345%3A0xbdcfc79cf30e41e9!2sHaji%20Ashraf%20Ali%20Super%20Market!5e0!3m2!1sen!2sbd!4v1700983440691!5m2!1sen!2sbd" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
              </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                @csrf
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="name">Your Name</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="name">Your Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="name">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject" required>
                </div>
                <div class="form-group">
                  <label for="name">Message</label>
                  <textarea class="form-control" name="message" rows="10" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>

          </div>

        </div>
      </section>
    </div>
  </div>
  
@endsection
