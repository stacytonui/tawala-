@extends('layouts.app')

@section('content')
    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Contacts us</span></p>
                    <h1 class="mb-0 bread">Contact Us</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section contact-section bg-light">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="w-100"></div>
                <div class="col-md-4 d-flex">
                    <div class="info bg-white p-4">
                        <p><span>Address:</span> Westlands</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="info bg-white p-4">
                        <p><span>Phone:</span> <a href="tel://1234567920">+254 725 636 266</a></p>
                    </div>
                </div>
              
                <div class="col-md-4 d-flex">
                    <div class="info bg-white p-4">
                        <p><span>Website</span> <a href="#">yoursite.com</a></p>
                    </div>
                </div>
            </div>
            <div class="row block-9">
                <div class="col-md-6 order-md-last d-flex">
                    <form action="#" class="bg-white p-5 contact-form">
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

                <div class="col-md-6 d-flex">
                    <div id="map" class="bg-white"></div>
                    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZWwdqcYwEo9DSaMhnSYCssm-VzWeJWyI&callback=initMap"
    async defer></script>

                </div>
            </div>
        </div>
    </section>

@endsection
