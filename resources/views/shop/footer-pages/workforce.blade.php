@extends('layouts.shop.main')

@section('content')

<div class="container" style="min-height: 75vh;">
    <!-- Header text -->
    <div class="row">
        <div class="col-12 offset-md-5 col-md-7">
            <h5><strong>We are looking for</strong></h5>
        </div>
    </div>

    <!-- Card Body -->
    <div class="row mt-2">
        <div class="col-md-4">
            <div class="card card-border-radius shadow" style="width: 100%; height:100%">
                <div class="card-body">
                  <div class="row">
                      <div class="col-md-12">
                          <h4 style="font-weight: 700;">Front-End Web Designer</h4>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                          <p style="color:#fbcc34">Roles & Responsibilities</p>
                          <ul>
                              <li>Very strong in HTML, CSS, JavaScript, Media queries, Bootstrap, Object Oriented JavaScript, Responsive Web Design. </li>
                              <li>Able to create web templates/themes using pure HTML, CSS and JavaScript from scratch based on mock-up designs from Graphic Designer team
                            </li>
                          </ul>
                          <p style="color:#fbcc34">Job Requirements</p>
                          <ul>
                              <li>
                                3 to 4 years of experience developing web front-end pages providing cutting-edge UI / UX experience to users.
                              </li>
                              <li>
                                Experience with Web 2.0 standards, HTML5, CSS3, JavaScript/JQuery.
                              </li>
                              <li>
                                Working knowledge on Laravel/PHP Web API and/or other HTTP Web Service frameworks.
                              </li>
                          </ul>
                      </div>
                  </div>
                </div>
              </div>
        </div>

        <div class="col-md-4">
            <div class="card card-border-radius shadow" style="width: 100%; height:100%">
                <div class="card-body">
                  <div class="row">
                      <div class="col-md-12">
                          <h4 style="font-weight: 700;">Google Flutter Mobile App Developer</h4>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                          <p style="color:#fbcc34">Roles & Responsibilities</p>
                          <ul>
                              <li>Hands-on developing new projects (iOS and Android) from bottom-up using latest Google Flutter and Dart.</li>
                              <li>Design and implement UI+UX based on the requirements.</li>
                              <li>Develop design flows and experiences that are incredibly simple and elegant.</li>
                              <li>Monitor the performance of the live apps and continuously improve them on both code and experience level.</li>
                          </ul>
                          <p style="color:#fbcc34">Job Requirements</p>
                          <ul>
                              <li>
                                Candidate must possess at least a Diploma, Advanced/Higher/Graduate Diploma, Computer Science/Information Technology or equivalent.
                              </li>
                              <li>
                                Experience in Flutter mobile development (projects, personal projects, self R&D).
                              </li>
                              <li>
                                Experience in Native or Hybrid mobile development.
                              </li>
                          </ul>
                      </div>
                  </div>
                </div>
              </div>
        </div>

        <div class="col-md-4">
            <div class="card card-border-radius shadow" style="width: 100%; height:100%">
                <div class="card-body">
                  <div class="row">
                      <div class="col-md-12">
                          <h4 style="font-weight: 700;">UI/UX Designer</h4>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                          <p style="color:#fbcc34">Roles & Responsibilities</p>
                          <ul>
                              <li>To envision how people experience our platform and bring that vision to life in a way that feels inspired and refined.  </li>
                              <li>Take on complex tasks and transform them into intuitive, accessible and easy-to-use solutions.</li>
                          </ul>
                          <p style="color:#fbcc34">Job Requirements</p>
                          <ul>
                              <li>
                                Candidate must possess at least a Diploma, Advanced/Higher/Graduate Diploma, Computer Science/Information Technology or equivalent.
                              </li>
                              <li>
                                Experience in designing web/ mobile products.
                              </li>
                              <li>
                                Highly proficient with industry standard design tools such as Adobe XD, Sketch & InVision, wire framing and prototyping techniques.
                              </li>
                          </ul>
                      </div>
                  </div>
                </div>
              </div>
        </div>
    </div>

    <div class="row mt-5 mb-3">
        <div class="offset-md-3 col-md-9">
            <h5>Please email your resume to <strong>career@delhubdigital.com</strong> if you are interested.</h5>     
        </div>
    </div>

</div>




<style>
    .card-border-radius{
        border-radius: 15px;
        border-bottom: 30px solid #fbcc34;
    }
</style>


@endsection