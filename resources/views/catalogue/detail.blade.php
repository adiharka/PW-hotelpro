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
            <h3>List Booking</h3>
  <table class="table table-hover mt-3 text-center">
      <thead>
          <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Check In</th>
              <th>Check Out</th>
              <th>Kartu Kredit</th>
              <th>Nomor Kartu Kredit</th>
              <th>Kadaluarsa Kartu Kredit</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              @foreach ($bookings as $booking)
              <td>{{ $booking->id }}</td>
              <td>{{ $booking->name }}</td>
              <td>{{ $booking->checkin }}</td>
              <td>{{ $booking->checkout }}</td>
              <td>{{ $booking->cardName }}</td>
              <td>{{ $booking->cardNumber }}</td>
              <td>{{ $booking->cardExp }}</td>
              @endforeach
          </tr>
      </tbody>
  </table>
</div c>

{{-- <div id="menu" class="w3-padding-top-64">
  <h1 class="w3-center">Our Room Type</h1>
  <div class="w3-row">

  <div class="w3-col l6 m6 w3-padding-large">


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
</div> --}}
@endsection
