@extends('layouts.templete')
@section('title')
    <title>CMT SIPI</title>
@endsection
@section('content')
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image:url(images/cmtbg1.jpg);">
        <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
        <div class="col-md-6 ftco-animate">
          <h1 class="mb-4">Welcome <br> Shyamoli Ideal Polytechnic Institute </h1>
          <p>Discover more at Shyamoli Ideal Polytechnic Institute, Dhaka's top polytechnic hub.</p>
          <p><a href="{{url('cont')}}" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
        </div>
      </div>
      </div>
    </div>

    <div class="slider-item" style="background-image:url(images/cmtbg2.jpeg);">
        <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
        <div class="col-md-6 ftco-animate">
          <h1 class="mb-4">OUR Computer Lab</h1>
          <p></p>
          <p><a href="{{url('cont')}}" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
        </div>
      </div>
      </div>
    </div>
  </section>

  <section class="ftco-services ftco-no-pb">
          <div class="container-wrap">
              <div class="row no-gutters">
        <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
          <div class="media block-6 d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center">
                  <span class="flaticon-teacher"></span>
            </div>
            <div class="media-body p-2 mt-3">
                <h3 class="heading">Certified Teachers</h3>
                <p>Our teachers are experts in each subject. All of them are highly educated. All the teachers teach us very sincerely.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-reading"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Special Education</h3>
                <p>All our teachers are highly educated and they provide good education to students in all subjects.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-books"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Book &amp; Library</h3>
                <p>We have our own library in our campus. All the students can take the books they need there.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-kids"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Sport Clubs</h3>
                <p>The institute has a sports club. Various sports are organized every year including annual events.</p>
              </div>
            </div>
          </div>
        </div>
            </div>
        </section>

        <section class="ftco-section ftco-no-pt ftc-no-pb">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
                        <div class="img" style="background-image: url(images/about.jpg); border"></div>
                    </div>
                    <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
              <h2 class="mb-4">What We Offer</h2>
                        <p>We are providing Diploma in Engineering education program to all the students in modern education. We are active in establishing a developed country in the future.</p>
                        <div class="row mt-5">
                            <div class="col-lg-6">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
                                    <div class="text pl-3">
                                        <h3>Safety First</h3>
                                        <p>All precautions are taken for the safety of all our students .</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
                                    <div class="text pl-3">
                                        <h3>Regular Classes</h3>
                                        <p>Every day all lesson activities are going on as per our schedule.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
                                    <div class="text pl-3">
                                        <h3>Certified Teachers</h3>
                                        <p>Our teachers are experts in each subject. All of them are highly educated. All the teachers teach us very sincerely.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
                                    <div class="text pl-3">
                                        <h3>Sufficient Classrooms</h3>
                                        <p>Our class rooms are very nice. The rooms are kept clean all the time. There are separate rooms for all subjects and all parts are available in our lab room.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
                                    <div class="text pl-3">
                                        <h3>Creative Lessons</h3>
                                        <p>Our teachers are experts in each subject. All the teachers teach us very sincerely.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
                                    <div class="text pl-3">
                                        <h3>Sports Facilities</h3>
                                        <p>All equipment for sports are available in our sports club</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>


      <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/cmtsipi3.jpeg);" data-stellar-background-ratio="0.5">
      <div class="container">
          <div class="row justify-content-center mb-5 pb-2 d-flex">
              <div class="col-md-6 align-items-stretch d-flex">
                  <div class="img img-video d-flex align-items-center" style="background-image: url(images/clg.jpg);">
                      <div class="video justify-content-center">
                              <a href="https://www.youtube.com/watch?v=a1yfUIvTv3Y" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                                  <span class="ion-ios-play"></span>
                            </a>
                          </div>
                  </div>
              </div>
        <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
          <h2 class="mb-4">Shyamoli Ideal Polytechnic Institute</h2>
          <p><strong> Ideal Polytechnic Institute</strong> To create an enlightened nation Shyamoli Ideal Polytechnic Institute was established in 1979 which has a glorious tradition. Principal M. A. Sattar is the founder of this reputed technical institution. With its journey it has been able to create its own permanent position in the heart of the people of Bangladesh.To meet the needs of technical hands in home and abroad</p>
          <p> Shyamoli Ideal Polytechnic Institute (SIPI) operates Diploma in Engineering program under Bangladesh Technical Education Board. was 1979 M. A. Sattar started the journey of the institution with some students. Which is currently known as the most reputed private polytechnic institute in Bangladesh. Where today thousands of students are doing diploma courses. At present, the institute has 4 campuses in 4 districts..</p>
        </div>
      </div>
          <div class="row d-md-flex align-items-center justify-content-center">
              <div class="col-lg-12">
                  <div class="row d-md-flex align-items-center">
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                      <div class="icon"><span class="flaticon-doctor"></span></div>
                    <div class="text">
                      <strong class="number" data-number="18">0</strong>
                      <span>Certified Teachers</span>
                    </div>
                  </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                      <div class="icon"><span class="flaticon-doctor"></span></div>
                    <div class="text">
                      <strong class="number" data-number="401">0</strong>
                      <span>Students</span>
                    </div>
                  </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                      <div class="icon"><span class="flaticon-doctor"></span></div>
                    <div class="text">
                      <strong class="number" data-number="11">0</strong>
                      <span>Courses</span>
                    </div>
                  </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                      <div class="icon"><span class="flaticon-doctor"></span></div>
                    <div class="text">
                      <strong class="number" data-number="50">0</strong>
                      <span>Awards Won</span>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
      </div>
  </section>


      <section class="ftco-section">
          <div class="container-fluid px-4">
              <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <h2 class="mb-4">Our Courses</h2>
          <p>Our institution provides 11 courses. Among them, our computer department has 2 courses. <br> They are...</p>
        </div>
      </div>
            <div class="d-flex justify-content-center"
              <div class="row">
                  <div class="col-md-5 course ftco-animate">
                      <div class="img" style="background-image: url(images/CE.jpg);"></div>
                      <div class="text pt-4">
                          <p class="meta d-flex">
                              <span><i class="icon-user mr-2"></i>Mr. Khan</span>
                              <span><i class="icon-table mr-2"></i>10 seats</span>
                              <span><i class="icon-calendar mr-2"></i>4 Years</span>
                          </p>
                          <h3><a href="#">Diploma In Computer Engineering</a></h3>
                          <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                          <p><a href="#" class="btn btn-primary">Read More</a></p>
                      </div>
                  </div>
                  <div class="col-md-5 course ftco-animate">
                      <div class="img" style="background-image: url(images/gpdg.jpg);"></div>
                      <div class="text pt-4">
                          <p class="meta d-flex">
                              <span><i class="icon-user mr-2"></i>Mr. Khan</span>
                              <span><i class="icon-table mr-2"></i>10 seats</span>
                              <span><i class="icon-calendar mr-2"></i>4 Years</span>
                          </p>
                          <h3><a href="#">Graphic design</a></h3>
                          <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                          <p><a href="#" class="btn btn-primary">Read More</a></p>
                      </div>
                  </div>
                  </div>
              </div>
            </div>
          </div>
      </section>

      <section class="ftco-section bg-light">
          <div class="container-fluid px-4">
              <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <h2 class="mb-4">Certified Teachers</h2>
          <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
        </div>
      </div>
              <div class="row">
                  <div class="col-md-6 col-lg-3 ftco-animate">
                      <div class="staff">
                          <div class="img-wrap d-flex align-items-stretch">
                              <div class="img align-self-stretch" style="background-image: url(images/teacher-1.jpg);"></div>
                          </div>
                          <div class="text pt-3 text-center">
                              <h3>Bianca Wilson</h3>
                              <span class="position mb-2">Teacher</span>
                              <div class="faded">
                                  <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                  <ul class="ftco-social text-center">
                      <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 ftco-animate">
                      <div class="staff">
                          <div class="img-wrap d-flex align-items-stretch">
                              <div class="img align-self-stretch" style="background-image: url(images/teacher-2.jpg);"></div>
                          </div>
                          <div class="text pt-3 text-center">
                              <h3>Mitch Parker</h3>
                              <span class="position mb-2">English Teacher</span>
                              <div class="faded">
                                  <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                  <ul class="ftco-social text-center">
                      <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 ftco-animate">
                      <div class="staff">
                          <div class="img-wrap d-flex align-items-stretch">
                              <div class="img align-self-stretch" style="background-image: url(images/teacher-3.jpg);"></div>
                          </div>
                          <div class="text pt-3 text-center">
                              <h3>Stella Smith</h3>
                              <span class="position mb-2">Art Teacher</span>
                              <div class="faded">
                                  <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                  <ul class="ftco-social text-center">
                      <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 ftco-animate">
                      <div class="staff">
                          <div class="img-wrap d-flex align-items-stretch">
                              <div class="img align-self-stretch" style="background-image: url(images/teacher-4.jpg);"></div>
                          </div>
                          <div class="text pt-3 text-center">
                              <h3>Monshe Henderson</h3>
                              <span class="position mb-2">Science Teacher</span>
                              <div class="faded">
                                  <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                  <ul class="ftco-social text-center">
                      <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
{{-- mmm --}}

  <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/bg_5.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
          <div class="row justify-content-end">
              <div class="col-md-6 py-5 px-md-5">
                  <div class="py-md-5">
                <div class="heading-section heading-section-white ftco-animate mb-5">
                  <h2 class="mb-4">Request A Quote</h2>
                  <p>You are need admission in any kind of course then you can apply from below. We will inform you all the information. <br> you</p>
                </div>


                    <form action="{{url ('/requestquote') }}" method="POST" class="appointment-form ftco-animate">
                        @csrf
                          <div class="d-md-flex">
                              <div class="form-group">
                                  <input type="text" class="form-control" placeholder="First Name" name="first_name">
                              </div>
                              <div class="form-group ml-md-4">
                                  <input type="text" class="form-control" placeholder="Last Name" name="last_name">
                              </div>
                          </div>
                          <div class="d-md-flex">
                              <div class="form-group">
                                  <div class="form-field">
                                  <div class="select-wrap">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select  class="form-control" required name="course_name">
                              <option value="" style="color: rgb(0, 255, 64);">Select Your Course</option>
                              <option value="" style="color: rgb(0, 0, 0);">Art Lesson</option>
                              <option value="" style="color: rgb(0, 0, 0);" >Language Lesson</option>
                              <option value="" style="color: rgb(0, 0, 0);">Music Lesson</option>
                              <option value="" style="color: rgb(0, 0, 0);">Sports</option>
                              <option value="" style="color: rgb(0, 0, 0);">Other Services</option>
                          </select>
                        </div>
                        </div>
                              </div>
                              <div class="form-group ml-md-4">
                                  <input type="text" class="form-control" placeholder="Phone" required name="phone">
                              </div>
                          </div>
                          <div class="d-md-flex">
                      <div class="form-group ml-md-4">
                        <input type="submit" value="Request A Quote" class="btn btn-primary py-3 px-4">
                      </div>
                          </div>
                      </form>
                  </div>
              </div>
      </div>
      </div>
  </section>

      <section class="ftco-section bg-light">
          <div class="container">
              <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <h2 class="mb-4"><span>Recent</span> Blog</h2>
          <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
        </div>
      </div>
              <div class="row">
        <div class="col-md-6 col-lg-4 ftco-animate">
          <div class="blog-entry">
            <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_1.jpg');">
                              <div class="meta-date text-center p-2">
                <span class="day">26</span>
                <span class="mos">June</span>
                <span class="yr">2019</span>
              </div>
            </a>
            <div class="text bg-white p-4">
              <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <div class="d-flex align-items-center mt-4">
                  <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                  <p class="ml-auto mb-0">
                      <a href="#" class="mr-2">Admin</a>
                      <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                  </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 ftco-animate">
          <div class="blog-entry">
            <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_2.jpg');">
                              <div class="meta-date text-center p-2">
                <span class="day">26</span>
                <span class="mos">June</span>
                <span class="yr">2019</span>
              </div>
            </a>
            <div class="text bg-white p-4">
              <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <div class="d-flex align-items-center mt-4">
                  <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                  <p class="ml-auto mb-0">
                      <a href="#" class="mr-2">Admin</a>
                      <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                  </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 ftco-animate">
          <div class="blog-entry">
            <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_3.jpg');">
                              <div class="meta-date text-center p-2">
                <span class="day">26</span>
                <span class="mos">June</span>
                <span class="yr">2019</span>
              </div>
            </a>
            <div class="text bg-white p-4">
              <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <div class="d-flex align-items-center mt-4">
                  <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                  <p class="ml-auto mb-0">
                      <a href="#" class="mr-2">Admin</a>
                      <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                  </p>
              </div>
            </div>
          </div>
        </div>
      </div>
          </div>
      </section>

      <section class="ftco-section testimony-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <h2 class="mb-4">Student Says About Us</h2>
          <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
        </div>
      </div>
      <div class="row ftco-animate justify-content-center">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel">
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url(images/teacher-1.jpg)">
                </div>
                <div class="text ml-2">
                    <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Racky Henderson</p>
                  <span class="position">Father</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url(images/teacher-2.jpg)">
                </div>
                <div class="text ml-2">
                    <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Henry Dee</p>
                  <span class="position">Mother</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url(images/teacher-3.jpg)">
                </div>
                <div class="text ml-2">
                    <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Mark Huff</p>
                  <span class="position">Mother</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url(images/teacher-4.jpg)">
                </div>
                <div class="text ml-2">
                    <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Rodel Golez</p>
                  <span class="position">Mother</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url(images/teacher-1.jpg)">
                </div>
                <div class="text ml-2">
                    <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Ken Bosh</p>
                  <span class="position">Mother</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

      <section class="ftco-gallery">
      <div class="container-wrap">
          <div class="row no-gutters">
                  <div class="col-md-3 ftco-animate">
                      <a href="images/image_1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/course-1.jpg);">
                          <div class="icon mb-4 d-flex align-items-center justify-content-center">
                          <span class="icon-instagram"></span>
                      </div>
                      </a>
                  </div>
                  <div class="col-md-3 ftco-animate">
                      <a href="images/image_2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_2.jpg);">
                          <div class="icon mb-4 d-flex align-items-center justify-content-center">
                          <span class="icon-instagram"></span>
                      </div>
                      </a>
                  </div>
                  <div class="col-md-3 ftco-animate">
                      <a href="images/image_3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_3.jpg);">
                          <div class="icon mb-4 d-flex align-items-center justify-content-center">
                          <span class="icon-instagram"></span>
                      </div>
                      </a>
                  </div>
                  <div class="col-md-3 ftco-animate">
                      <a href="images/image_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_4.jpg);">
                          <div class="icon mb-4 d-flex align-items-center justify-content-center">
                          <span class="icon-instagram"></span>
                      </div>
                      </a>
                  </div>
      </div>
      </div>
  </section>
@endsection
