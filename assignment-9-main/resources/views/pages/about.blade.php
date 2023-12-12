@extends('index')
@section('content')
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        
        @include('partials.nav')

        <section id="about" class="about">
          <div class="container">
    
            <div class="section-title">
              <h2>About</h2>
            </div>
    
            <div class="row">
              <div class="col-lg-4" data-aos="fade-right">
                <img src="{{ asset('/assets/img/me.png') }}" class="img-fluid" alt="">
              </div>
              <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3>Web Designer &amp; Web Developer.</h3>
                <p class="fst-italic">
                  "I'm a passionate developer with expertise in [Laravel, VueJs, PHP, JavaScript, Bootstrap, TailwindCss, HTML5 & CSS3]. I thrive on solving complex problems and creating innovative solutions to enhance user experiences."
                </p>
                <div class="row">
                  <div class="col-lg-6">
                    <ul>
                      <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>24 Feb 1997</span></li>
                      <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>https://arakib.com/</span></li>
                      <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+880 1767 270051</span></li>
                      <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Dhaka, Bangladesh</span></li>
                    </ul>
                  </div>
                  <div class="col-lg-6">
                    <ul>
                      <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>26</span></li>
                      <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Diploma</span></li>
                      <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>abrakib.cse@gmail.com</span></li>
                      <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
    
          </div>
        </section>

        <section id="resume" class="resume">
          <div class="container">
      
            <div class="section-title">
              <h2>Resume</h2>
              <p>"I am a results-oriented professional with a proven track record in [web developer expertise, e.g., software development, Error Handing]. My comprehensive skills, demonstrated through successful projects, highlight my ability to contribute effectively in dynamic and challenging environments. Adept at [web designer & developer], I bring a commitment to excellence and a passion for innovation to every endeavor."</p>
            </div>
      
            <div class="row">
              <div class="col-lg-6" data-aos="fade-up">
                <h3 class="resume-title">Sumary</h3>
                <div class="resume-item pb-0">
                  <h4>Abdur Rakib</h4>
                  <p><em>I'm a passionate developer with expertise in [Laravel, VueJs, PHP, JavaScript, Bootstrap, TailwindCss, HTML5 & CSS3]. I thrive on solving complex problems and creating innovative solutions to enhance user experiences.</em></p>
                  <ul>
                    <li>Haji Ashraf Ali Super Market, East Shewrapara, Dhaka</li>
                    <li>+880 17 67 270051</li>
                    <li>abrakib.cse@gmail.com</li>
                  </ul>
                </div>
      
                <h3 class="resume-title">Education</h3>
                <div class="resume-item">
                  <h4>Diploma in Computer Technology</h4>
                  <h5>2014 - 2018</h5>
                  <p><em>Rajshahi Polytechnic Institute, Rajshahi</em></p>
                  <p>I hold a Diploma in Computer Science and Engineering, equipping me with a solid foundation in programming, software development, and problem-solving. My education has provided me with the skills to contribute effectively to the field of technology.</p>
                </div>
                <div class="resume-item">
                  <h4>Secondary School Certificate</h4>
                  <h5>2012 - 2014</h5>
                  <p><em>Manda S.C Pilot High School, Naogaon</em></p>
                  <p>I completed my Secondary School Certificate with a strong academic record, demonstrating proficiency in various subjects. This foundation has equipped me with a solid educational background and a commitment to excellence in my academic pursuits</p>
                </div>
              </div>
              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <h3 class="resume-title">Professional Experience</h3>
                <div class="resume-item">
                  <h4>Junior PHP Developer(Laravel)</h4>
                  <h5>1 Nov 2023 - Present</h5>
                  <p><em>Nirvik Technology <br> Haji Ashraf Ali Super Market, East Shewrapara, Dhaka</em></p>
                  <ul>
                    <li>Coding and Development</li>
                    <li>Feature Implementation</li>
                    <li>Bug Fixing and Debugging</li>
                    <li>Collaboration with Team members</li>
                    <li>Database Management</li>
                    <li>Testing</li>
                  </ul>
                </div>
                <div class="resume-item">
                  <h4>PHP & Laravel Developer(Internship)</h4>
                  <h5>1 Aug 2023 - 30 Oct 2023</h5>
                  <p><em>SATT Academy <br> Tikapara, Boaliya, Rajshahi</em></p>
                  <ul>
                    <li>Coding and Development</li>
                    <li>Feature Implementation</li>
                    <li>Learn about Laravel new features</li>
                  </ul>
                </div>
              </div>
            </div>
      
          </div>
        </section>
      </div>
    </div>
@endsection
