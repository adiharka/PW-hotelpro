@extends('layouts.appu')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <!-- Start Content -->
<div id="home" class="w3-wide" >
 
 </div>
 </div>
 
 <div class="row">
   <div class="col-75">
     <div class="container">
       <form action="rsvp.html">
       
         <div class="row">
           <div class="col-50">
             <h3>Billing Address</h3>
             <h3>Booking Info</h3>
             <label for="fname"><i class="fa fa-user"></i> Full Name</label>
             <input type="text" id="fname" name="firstname" placeholder="ruben">
             <label for="email"><i class="fa fa-envelope"></i> Email</label>
             <input type="text" id="email" name="email" placeholder="alifia@example.com">
       
 
             <div class="row">
               <div class="col-50">
                 <label for="state">Booked Date</label>
                 <input type="text" id="state" name="state" placeholder="10/05/21">
               </div>
               <div class="col-50">
                 <label for="zip">Out Date</label>
                 <input type="text" id="zip" name="zip" placeholder="15/05/21">
               </div>
             </div>
           </div>
 
           <div class="col-50">
             <h3>Payment</h3>
             <h3>Payment</h3>
             <label for="fname">Accepted Cards</label>
             
             <label for="cname">Name on Card</label>
             <input type="text" id="cname" name="cardname" placeholder="Alifia Ruben">
             <label for="ccnum">Credit card number</label>
             <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
             <label for="expmonth">Exp Month</label>
             <input type="text" id="expmonth" name="expmonth" placeholder="December">
            
           </div>
           
         </div>
         <label>
           <input type="checkbox" checked="checked" name="sameadr"> I am not robot
         </label>
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
        </div>        
    </div>
</div>
@endsection