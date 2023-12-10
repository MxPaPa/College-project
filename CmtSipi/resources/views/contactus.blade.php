@extends('layouts.templete')
@section('title')
    <title>CMT SIPI Contact</title>
@endsection
@section('content')
<section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex contact-info">
        <div class="col-md-3 d-flex">
            <div class="bg-light align-self-stretch box p-4 text-center">
                <h3 class="mb-4">Address</h3>
              <p>16/C-D,Bashbari Road, Mohammadpur, Dhaka-1207</p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="bg-light align-self-stretch box p-4 text-center">
                <h3 class="mb-4">Contact Number</h3>
              <p><a href="tel://+8801712634870">+8801712634870</a></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="bg-light align-self-stretch box p-4 text-center">
                <h3 class="mb-4">Email Address</h3>
              <p><a href="mailto:info@yoursite.com">info@sipi.edu.bd</a></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="bg-light align-self-stretch box p-4 text-center">
                <h3 class="mb-4">Website</h3>
              <p><a href="https://www.sipi.edu.bd/">SIPI</a></p>
            </div>
        </div>
      </div>
    </div>
  </section>

      <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
          <div class="container">
              <div class="row d-flex align-items-stretch no-gutters">
                  <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
                      <form action="#">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>
                  </div>
                  <div class="col-md-6 d-flex align-items-stretch">
                      <div id="map"></div>
                  </div>
              </div>
          </div>
      </section>
@endsection
