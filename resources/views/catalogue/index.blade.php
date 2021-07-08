@extends('layouts.appu')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="container">
  <h1> </h1>
  <h1> </h1>
  <h1>Hotel Aifila</h1>
  <small class="text-muted">Room Type</small>

  <div class="row mt-1">
      {{-- <div class="col-6"> --}}
          <a class= "btn btn-success float-right" href="{{ route('user.booking') }}">Booking Sekarang!</a>
          <a class= "btn btn-info float-right ml-2" href="{{ route('katalog.show', 'a') }}">Lihat Booking</a>
      {{-- </div> --}}
  </div>



  {{-- <table class="table table-hover mt-3 text-center">
      <thead>
          <tr>
              <th>#</th>
              <th>ID</th>
              <th>Name</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>a001</td>
              <td>Suite</td>
              <td>
                  <a class="btn btn-warning btn-sm" href="#">Info</a>
                  <a class="btn btn-danger btn-sm" href="#">Availability</a>
              </td>
          </tr>
          <tr>
          <td>2</td>
          <td>a002</td>
          <td>room2</td>
          <td>
              <a class="btn btn-warning btn-sm" href="#">Info</a>
              <a class="btn btn-danger btn-sm" href="#">Availability</a>
              </td>
          </tr>
      </tbody>
  </table>
</div c> --}}

<div id="menu" class="w3-padding-top-64">
  <h1 class="w3-center">Our Room Type</h1>
  <div class="w3-row">

  <div class="w3-col l6 m6 w3-padding-large">

  <h4>Suite</h4>
  <p class="w3-text-grey">
  info room suite bla bla bla bla lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices. bla bla bla bla lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices. bla bla bla bla lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices. bla bla bla bla lorem ipsum dolor sit amet. bla bla bla bla lorem ipsum dolor sit amet</p><br>

  <h4>room2</h4>
  <p class="w3-text-grey">
  info room 2 bla bla bla bla lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices. bla bla bla bla lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices. bla bla bla bla lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices. bla bla bla bla lorem ipsum dolor sit amet. bla bla bla bla lorem ipsum dolor sit amet</p><br>

  <h4>room 3</h4>
  <p class="w3-text-grey">
    info room 3 bla bla bla bla lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices. bla bla bla bla lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices. bla bla bla bla lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices. bla bla bla bla lorem ipsum dolor sit amet. bla bla bla bla lorem ipsum dolor sit amet</p><br>

  <h4>room n</h4>
  <p class="w3-text-grey">
    info room n bla bla bla bla lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices. bla bla bla bla lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices. bla bla bla bla lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices. bla bla bla bla lorem ipsum dolor sit amet. bla bla bla bla lorem ipsum dolor sit amet</p>


    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <div class="text">Caption Text</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <div class="text">Caption Three</div>
    </div>
  </div>




  <div class="w3-col l6 m6 w3-padding-large">
  <img src="282614.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:90%">
  </div>

  </div>

  <div class="w3-container w3-text-grey">
  <p>kata-kata yang meyakinkan untuk membeli</p>
  </div>

  <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
    </script>
  </div>
        </div>
    </div>
</div>
@endsection
