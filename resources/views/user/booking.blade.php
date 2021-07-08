<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Hotel</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family:"Times New Roman", serif}
h1,h2,h3,h4,h5,h6 {font-family:serif; letter-spacing:5px}
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: fixed;
  background-color: #f1f1f1;
  min-width: 100px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: ;}


  .row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    margin: 0 -16px;
  }

  .col-25 {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
  }

  .col-50 {
    -ms-flex: 50%; /* IE10 */
    flex: 50%;
  }

  .col-75 {
    -ms-flex: 75%; /* IE10 */
    flex: 75%;
  }

  .col-25,
  .col-50,
  .col-75 {
    padding: 0 16px;
  }

  .container {
    background-color: #f2f2f2;
    padding: 5px 20px 15px 20px;
    border: 1px solid lightgrey;
    border-radius: 3px;
  }

  input[type=text] {
    width: 100%;
    margin-bottom: 20px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }

  label {
    margin-bottom: 10px;
    display: block;
  }

  .icon-container {
    margin-bottom: 20px;
    padding: 7px 0;
    font-size: 24px;
  }

  .btn {
    background-color: grey;
    color: white;
    padding: 12px;
    margin: 10px 0;
    border: none;
    width: 100%;
    border-radius: 3px;
    cursor: pointer;
    font-size: 17px;
  }

  .btn:hover {
    background-color: #45a049;
  }

  a {
    color: #2196F3;
  }

  hr {
    border: 1px solid lightgrey;
  }

  span.price {
    float: right;
    color: grey;
  }

  /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
  @media (max-width: 800px) {
    .row {
      flex-direction: column-reverse;
    }
    .col-25 {
      margin-bottom: 20px;
    }
  }
</style>
<body>

<!-- Navigation (Sits on top) -->
<div class="w3-top w3-bar w3-white w3-padding w3-card w3-wide">
<a href="index.html" class="w3-bar-item w3-button">Hotel Sederhana</a>

<!-- Right-sided navbar links. Hide them on small screens -->
<div class="w3-right w3-hide-small">
    <a href="about.html" class="w3-bar-item w3-button">About</a>

    <a href="rsvp.html" class="w3-bar-item w3-button">RSVP</a>

    <div class="dropdown">
        <div class="w3-bar-item w3-button">Sign Up</a>
        <div class="dropdown-content">
          <a href="signup.html">Sign Up</a>
          <a href="login.html">Log In</a>
        </div>
        </div>
    </div>

</div>

<!-- Start Content -->
<div id="home" class="w3-wide" >

</div>
</div>
{{-- Alert --}}
@if(session('errors'))
<div>
    <div id='alert' class='normal'>
        <div class="task-group" style="padding-bottom: 1rem; overflow:hidden">
            <p style="margin: 0; text-align: center">Terjadi Error:</p>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button id='tutup' type="button" class="close" color='remove' style="max-width: unset">
                <span aria-hidden="true">Oke</span>
            </button>
        </div>
    </div>
</div>
<div class="garis" style="margin-bottom: 1.5rem; height:unset"></div>
@endif
@if(session('success'))
<div>
    <div id='alert' class='normal'>
        <div class="task-group" style="padding-bottom: 1rem; overflow:hidden">
            <ul style="margin-top:0">
                <li>{{session('success')}}</li>
            </ul>
            <button id='tutup' type="button" class="close" color='info' style="max-width: unset">
                <span aria-hidden="true">Oke</span>
            </button>
        </div>
    </div>
</div>
@endif
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="{{ route('katalog.store') }}" method="POST">
          @csrf

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <h3>Booking Info</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="name" placeholder="ruben">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="alifia@example.com">


            <div class="row">
              <div class="col-50">
                <label for="state">Booked Date</label>
                <input type="date" id="state" name="checkin" placeholder="10/05/21">
              </div>
              <div class="col-50">
                <label for="zip">Out Date</label>
                <input type="date" id="zip" name="checkout" placeholder="15/05/21">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>

            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardName" placeholder="Alifia Ruben">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardNumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="cardExp" placeholder="December">
          </div>

        </div>
        <input type="submit" value="Continue to booking" class="btn">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">room suite</a> <span class="price">IDR 15.000.000</span></p>
      <p><a href="#">room 2</a> <span class="price">IDR 5.000.000</span></p>
      <p><a href="#">room 3</a> <span class="price">IDR 8.000.000</span></p>
      <p><a href="#">room n</a> <span class="price">IDR 2.000.000</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>IDR 30.000.000</b></span></p>
    </div>
  </div>
</body>
</html>
