<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
  <link href="images/favicon.png" rel="icon" />

  <title>@yield('title','aamarApp - One App,One Solution by aamarPay')</title>
  <meta name="description"
    content="aamarApp - Recharge & Bill Payment,Movie Ticket,DTH,Broadband,Utility Payment,Air Ticket,Hotel Booking">
  <meta name="author" content="http://aamarapp.xyz/">

  <!-- Web Fonts
============================================= -->
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900'
    type='text/css'>
  <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/fontawesome.min.css'
    type='text/css'> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/fontawesome.min.js"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  <!-- Stylesheet
============================================= -->
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/font-awesome/css/all.min.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/owl.carousel/assets/owl.carousel.min.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/owl.carousel/assets/owl.theme.default.min.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/stylesheet.css')}}" />

</head>

<body>
  <!-- Preloader -->
  
 <!--  <div id="preloader">
    <div data-loader="dual-ring"></div>
  </div>  -->

  <!-- Preloader End -->

  <!-- Document Wrapper   
============================================= -->
  <div id="main-wrapper">

    <!-- Header
  ============================================= -->
    <header id="header">

     @include('frontend.partial.mainheader')

    </header>
    <!-- Header end -->

    <!-- Content
  ============================================= -->
    <div id="content">

      <!-- Secondary Navigation
    ============================================= -->
      <div class="bg-secondary">
        <div class="container">
          <ul class="nav secondary-nav">
              <li class="nav-item mrbtn"> <a class="nav-link" href="#"><span><i class="fas fa-mobile-alt"></i></span>Mobile</a> </li>
              <li class="nav-item dthbtn"> <a class="nav-link" href="#"><span><i class="fas fa-satellite-dish"></i></span>DTH</a> </li>
              <li class="nav-item movie_ticketbtn"> <a class="nav-link" href="#"><span><i class="fas fa-ticket-alt"></i></span>Movies</a> </li>
              <li class="nav-item toursbtn"> <a class="nav-link" href="#"><span><i class="fas fa-suitcase-rolling"></i></span>Tours</a> </li>
              <li class="nav-item hotelsbtn"> <a class="nav-link" href="#"><span><i class="fas fa-hotel"></i></span>Hotels</a> </li>
              <li class="nav-item busbtn"> <a class="nav-link" href="#"><span><i class="fas fa-bus"></i></span>Bus</a> </li>
              <li class="nav-item trainsbtn"> <a class="nav-link" href="#"><span><i class="fas fa-subway"></i></span>Train</a> </li>
              <li class="nav-item flightsbtn"> <a class="nav-link" href="#"><span><i class="fas fa-plane"></i></span>Flights</a> </li>
              <li class="nav-item broadbandbtn"> <a class="nav-link" href="#"><span><i class="fas fa-wifi"></i></span>Broadband</a> </li>
              <li class="nav-item electricitybtn"> <a class="nav-link" href="#"><span><i class="fas fa-lightbulb"></i></span>Electricity</a> </li>
              <li class="nav-item gasbtn"> <a class="nav-link" href="#"><span><i class="fas fa-burn"></i></span>Gas</a> </li>
              <li class="nav-item waterbtn"> <a class="nav-link" href="#"><span><i class="fas fa-tint"></i></span>Water</a> </li>
           
          </ul>
        </div>
      </div><!-- Secondary Navigation end -->
 
      <!-- Mobile Recharge Section Starts-->

      @include('frontend.partial.bill.mobile_recharge')


      <!-- Mobile Recharge Section End-->

<!-- DTH Recharge Section Starts-->
 @include('frontend.partial.bill.dth')
<!-- DTH Recharge Section Ends-->

      <!-- Movie Ticket Starts -->
@include('frontend.partial.bill.movie')
          <!-- Movie Ticket Ends -->

          <!-- Tours & Travels Starts -->
 @include('frontend.partial.bill.tour_travels')        
        <!-- Tours & Travels Ends -->

        <!-- Hotel Booking Starts -->

         @include('frontend.partial.bill.hotel')     

      
      <!-- Hotel Booking Ends -->

     <!-- Bus Booking Starts -->  

     @include('frontend.partial.bill.bus')    

      
             <!-- Bus Booking Ends -->

           <!-- Train Booking Starts -->  

            @include('frontend.partial.bill.train')  
             
           <!-- Train Booking Ends -->

           <!-- Flights Booking Starts -->

            @include('frontend.partial.bill.flight')  

           <!-- Flight Booking Ends -->

           <!-- Broadband Billing Starts -->
         
        @include('frontend.partial.bill.bband')  
           <!-- Broadband Billing Ends -->

           <!-- Electricity Billing Starts -->

             @include('frontend.partial.bill.electricity') 
     
       <!-- Electricity Billing Ends -->

       <!-- Gas Billing Starts -->
      @include('frontend.partial.bill.gas') 
       <!-- Gas Billing Ends -->

       <!-- Water Billing Starts -->
       @include('frontend.partial.bill.water') 
       <!-- Water Billing Ends -->

      <!-- Mobile App
    ============================================= -->
     @include('frontend.partial.bill.mobile_app') 
      

      <!-- Mobile App end -->


    </div><!-- Content end -->
    

    <!-- Footer
  ============================================= -->
   
     @include('frontend.partial.fotter') 
  </div><!-- Document Wrapper end -->

  <!-- Back to Top
============================================= -->
  <a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i
      class="fa fa-chevron-up"></i></a>

  <!-- Modal Dialog - View Plans
============================================= -->
  <div id="view-plans" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Browse Plans</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form-row mb-4 mb-sm-2" method="post">
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="form-group">
                <select class="custom-select" required="">
                  <option value="">Select Your Operator</option>
                  <option>GrameenPhone</option>
                  <option>Robi</option>
                  <option>Banglalink</option>
                  <option>Airtel</option>
                  <option>Teletalk</option>
                </select>
              </div>
            </div>
           
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="form-group">
                <select class="custom-select" required="">
                  <option value="">All Plans</option>
                  <option>Topup</option>
                  <option>Full Talktime</option>
                  <option>Validity Recharge</option>
                  <option>SMS</option>
                  <option>Data</option>
                  <option>Unlimited Talktime</option>
                  <option>STD</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
              <button class="btn btn-primary btn-block" type="submit">View Plans</button>
            </div>
          </form>
          <div class="plans">
            <div class="table-responsive-md">
              <table class="table table-hover border">
                <tbody>
                  <tr>
                    <td class="text-5 text-primary text-center align-middle">10 Tk <span
                        class="text-1 text-muted d-block">Amount</span></td>
                    <td class="text-3 text-center align-middle">8 <span
                        class="text-1 text-muted d-block">Talktime</span></td>
                    <td class="text-3 text-center align-middle">7 Days <span
                        class="text-1 text-muted d-block">Validity</span></td>
                    <td class="text-1 text-muted align-middle">Talktime 8 Tk & 2 Local & National SMS & Free SMS valid
                      for 2 day(s)</td>
                    <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap"
                        type="submit">Recharge Now</button></td>
                  </tr>
                  <tr>
                    <td class="text-5 text-primary text-center align-middle">15 Tk <span
                        class="text-1 text-muted d-block">Amount</span></td>
                    <td class="text-3 text-center align-middle">13 <span
                        class="text-1 text-muted d-block">Talktime</span></td>
                    <td class="text-3 text-center align-middle">15 Days <span
                        class="text-1 text-muted d-block">Validity</span></td>
                    <td class="text-1 text-muted align-middle">Regular Talktime</td>
                    <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap"
                        type="submit">Recharge Now</button></td>
                  </tr>
                  <tr>
                    <td class="text-5 text-primary text-center align-middle">50 Tk <span
                        class="text-1 text-muted d-block">Amount</span></td>
                    <td class="text-3 text-center align-middle">47 <span
                        class="text-1 text-muted d-block">Talktime</span></td>
                    <td class="text-3 text-center align-middle">28 Days <span
                        class="text-1 text-muted d-block">Validity</span></td>
                    <td class="text-1 text-muted align-middle">47 min free </td>
                    <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap"
                        type="submit">Recharge Now</button></td>
                  </tr>
                  <tr>
                    <td class="text-5 text-primary text-center align-middle">100 Tk <span
                        class="text-1 text-muted d-block">Amount</span></td>
                    <td class="text-3 text-center align-middle">92 <span
                        class="text-1 text-muted d-block">Talktime</span></td>
                    <td class="text-3 text-center align-middle">28 Days <span
                        class="text-1 text-muted d-block">Validity</span></td>
                    <td class="text-1 text-muted align-middle">Local min 92 & 10 Local & National SMS & Free SMS valid
                      for
                      7 day(s).</td>
                    <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap"
                        type="submit">Recharge Now</button></td>
                  </tr>
                  <tr>
                    <td class="text-5 text-primary text-center align-middle">150 Tk <span
                        class="text-1 text-muted d-block">Amount</span></td>
                    <td class="text-3 text-center align-middle">143 <span
                        class="text-1 text-muted d-block">Talktime</span></td>
                    <td class="text-3 text-center align-middle">60 Days <span
                        class="text-1 text-muted d-block">Validity</span></td>
                    <td class="text-1 text-muted align-middle">Talktime 143 Tk & 50 Local & National SMS & Free SMS
                      valid for
                      15 day(s).</td>
                    <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap"
                        type="submit">Recharge Now</button></td>
                  </tr>
                  <tr>
                    <td class="text-5 text-primary text-center align-middle">220 Tk <span
                        class="text-1 text-muted d-block">Amount</span></td>
                    <td class="text-3 text-center align-middle">220 <span
                        class="text-1 text-muted d-block">Talktime</span></td>
                    <td class="text-3 text-center align-middle">28 Days <span
                        class="text-1 text-muted d-block">Validity</span></td>
                    <td class="text-1 text-muted align-middle">Full Talktime</td>
                    <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap"
                        type="submit">Recharge Now</button></td>
                  </tr>
                  <tr>
                    <td class="text-5 text-primary text-center align-middle">250 Tk <span
                        class="text-1 text-muted d-block">Amount</span></td>
                    <td class="text-3 text-center align-middle">250 <span
                        class="text-1 text-muted d-block">Talktime</span></td>
                    <td class="text-3 text-center align-middle">28 Days <span
                        class="text-1 text-muted d-block">Validity</span></td>
                    <td class="text-1 text-muted align-middle">Full Talktime + 50 SMS per day for 7 days.</td>
                    <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap"
                        type="submit">Recharge Now</button></td>
                  </tr>
                  <tr>
                    <td class="text-5 text-primary text-center align-middle">300 Tk <span
                        class="text-1 text-muted d-block">Amount</span></td>
                    <td class="text-3 text-center align-middle">301 <span
                        class="text-1 text-muted d-block">Talktime</span></td>
                    <td class="text-3 text-center align-middle">64 Days <span
                        class="text-1 text-muted d-block">Validity</span></td>
                    <td class="text-1 text-muted align-middle">Full Talktime</td>
                    <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap"
                        type="submit">Recharge Now</button></td>
                  </tr>
                  <tr>
                    <td class="text-5 text-primary text-center align-middle">410 Tk <span
                        class="text-1 text-muted d-block">Amount</span></td>
                    <td class="text-3 text-center align-middle">0 <span
                        class="text-1 text-muted d-block">Talktime</span></td>
                    <td class="text-3 text-center align-middle">28 Days <span
                        class="text-1 text-muted d-block">Validity</span></td>
                    <td class="text-1 text-muted align-middle">Unlimited Local,STD & Roaming calls</td>
                    <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap"
                        type="submit">Recharge Now</button></td>
                  </tr>
                  <tr>
                    <td class="text-5 text-primary text-center align-middle">501 Tk <span
                        class="text-1 text-muted d-block">Amount</span></td>
                    <td class="text-3 text-center align-middle">510 <span
                        class="text-1 text-muted d-block">Talktime</span></td>
                    <td class="text-3 text-center align-middle">180 Days <span
                        class="text-1 text-muted d-block">Validity</span></td>
                    <td class="text-1 text-muted align-middle">Full Talktime + 100 SMS per day for 28 days.</td>
                    <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap"
                        type="submit">Recharge Now</button></td>
                  </tr>
                  <tr>
                    <td class="text-5 text-primary text-center align-middle">799 Tk <span
                        class="text-1 text-muted d-block">Amount</span></td>
                    <td class="text-3 text-center align-middle">820 <span
                        class="text-1 text-muted d-block">Talktime</span></td>
                    <td class="text-3 text-center align-middle">250 Days <span
                        class="text-1 text-muted d-block">Validity</span></td>
                    <td class="text-1 text-muted align-middle">Full Talktime + 100 SMS per day for 84 days.</td>
                    <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap"
                        type="submit">Recharge Now</button></td>
                  </tr>
                  <tr>
                    <td class="text-5 text-primary text-center align-middle">999 Tk <span
                        class="text-1 text-muted d-block">Amount</span></td>
                    <td class="text-3 text-center align-middle">1099 <span
                        class="text-1 text-muted d-block">Talktime</span></td>
                    <td class="text-3 text-center align-middle">356 Days <span
                        class="text-1 text-muted d-block">Validity</span></td>
                    <td class="text-1 text-muted align-middle">Full Talktime + 100 SMS per day for 90 days.</td>
                    <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap"
                        type="submit">Recharge Now</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- Modal Dialog - View Plans end -->

  <!-- Modal Dialog - Login/Signup
============================================= -->
  <div id="login-signup" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content p-sm-3">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
              aria-hidden="true">&times;</span> </button>
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"> <a id="login-tab" class="nav-link active text-4" data-toggle="tab" href="#login"
                role="tab" aria-controls="login" aria-selected="true">Login</a> </li>
            <li class="nav-item"> <a id="signup-tab" class="nav-link text-4" data-toggle="tab" href="#signup" role="tab"
                aria-controls="signup" aria-selected="false">Sign Up</a> </li>
          </ul>
          <div class="tab-content pt-4">
            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
              <form id="loginForm" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" id="loginMobile" required placeholder="Mobile or Email ID">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="loginPassword" required placeholder="Password">
                </div>
                <div class="row mb-4">
                  <div class="col-sm">
                    <div class="form-check custom-control custom-checkbox">
                      <input id="remember-me" name="remember" class="custom-control-input" type="checkbox">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>
                  <div class="col-sm text-right"> <a class="justify-content-end" href="#">Forgot Password ?</a> </div>
                </div>
                <button class="btn btn-primary btn-block" type="submit">Login</button>
              </form>
            </div>
            <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
              <form id="signupForm" method="post">
                <div class="form-group">
                  <input type="text" class="form-control" data-bv-field="number" id="signupEmail" required
                    placeholder="Email ID">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="signupMobile" required placeholder="Mobile Number">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="signuploginPassword" required placeholder="Password">
                </div>
                <button class="btn btn-primary btn-block" type="submit">Signup</button>
              </form>
            </div>
            <div class="d-flex align-items-center my-4">
              <hr class="flex-grow-1">
              <span class="mx-2">OR</span>
              <hr class="flex-grow-1">
            </div>
            <div class="row">
              <div class="col-12 mb-3">
                <button type="button" class="btn btn-block btn-outline-primary">Login with Facebook</button>
              </div>
              <div class="col-12">
                <button type="button" class="btn btn-block btn-outline-danger">Login with Google</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- Modal Dialog - Login/Signup end -->
  

  <!-- Script -->
  <script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend/js/theme.js')}}"></script>

<script type="text/javascript">
  $(".dthbtn").click(function(){
    $("#dth").css("display","");
    $("#mr").css("display","none");
    $("#movie_ticket").css("display","none");
    $("#tours").css("display","none");
    $("#hotels").css("display","none");
    $("#bus").css("display","none");
    $("#trains").css("display","none");
    $("#flights").css("display","none");
    $("#broadband").css("display","none");
    $("#electricity").css("display","none");
    $("#gas").css("display","none");
    $("#water").css("display","none");
    $("#dthbtn").css("background-color","#fe9900");
  });
  $(".mrbtn").click(function(){
    $("#dth").css("display","none");
    $("#mr").css("display","");
    $("#movie_ticket").css("display","none");
    $("#tours").css("display","none");
    $("#hotels").css("display","none");
    $("#bus").css("display","none");
    $("#trains").css("display","none");
    $("#flights").css("display","none");
    $("#broadband").css("display","none");
    $("#electricity").css("display","none");
    $("#gas").css("display","none");
    $("#water").css("display","none");
    $("#mrbtn").css("background-color","#fe9900");
  });
  $(".movie_ticketbtn").click(function(){
    $("#dth").css("display","none");
    $("#mr").css("display","none");
    $("#movie_ticket").css("display","");
    $("#tours").css("display","none");
    $("#hotels").css("display","none");
    $("#bus").css("display","none");
    $("#trains").css("display","none");
    $("#flights").css("display","none");
    $("#broadband").css("display","none");
    $("#electricity").css("display","none");
    $("#gas").css("display","none");
    $("#water").css("display","none");
    $("#movie_ticketbtn").css("background-color","#fe9900");
  });
  $(".toursbtn").click(function(){
    $("#dth").css("display","none");
    $("#mr").css("display","none");
    $("#tours").css("display","");
    $("#movie_ticket").css("display","none");
    $("#hotels").css("display","none");
    $("#bus").css("display","none");
    $("#trains").css("display","none");
    $("#flights").css("display","none");
    $("#broadband").css("display","none");
    $("#electricity").css("display","none");
    $("#gas").css("display","none");
    $("#water").css("display","none");
    $("#toursbtn").css("background-color","#fe9900");
  });
  $(".hotelsbtn").click(function(){
    $("#dth").css("display","none");
    $("#mr").css("display","none");
    $("#tours").css("display","none");
    $("#movie_ticket").css("display","none");
    $("#hotels").css("display","");
    $("#bus").css("display","none");
    $("#trains").css("display","none");
    $("#flights").css("display","none");
    $("#broadband").css("display","none");
    $("#electricity").css("display","none");
    $("#gas").css("display","none");
    $("#water").css("display","none");
    $("#hotelsbtn").css("background-color","#fe9900");
  });
  $(".busbtn").click(function(){
    $("#dth").css("display","none");
    $("#mr").css("display","none");
    $("#tours").css("display","none");
    $("#movie_ticket").css("display","none");
    $("#hotels").css("display","none");
    $("#bus").css("display","");
    $("#trains").css("display","none");
    $("#flights").css("display","none");
    $("#broadband").css("display","none");
    $("#electricity").css("display","none");
    $("#gas").css("display","none");
    $("#water").css("display","none");
    $("#busbtn").css("background-color","#fe9900");
  });
  $(".trainsbtn").click(function(){
    $("#dth").css("display","none");
    $("#mr").css("display","none");
    $("#tours").css("display","none");
    $("#movie_ticket").css("display","none");
    $("#hotels").css("display","none");
    $("#bus").css("display","none");
    $("#trains").css("display","");
    $("#flights").css("display","none");
    $("#broadband").css("display","none");
    $("#electricity").css("display","none");
    $("#gas").css("display","none");
    $("#water").css("display","none");
    $("#trainsbtn").css("background-color","#fe9900");
  });
  $(".flightsbtn").click(function(){
    $("#dth").css("display","none");
    $("#mr").css("display","none");
    $("#tours").css("display","none");
    $("#movie_ticket").css("display","none");
    $("#hotels").css("display","none");
    $("#bus").css("display","none");
    $("#trains").css("display","none");
    $("#flights").css("display","");
    $("#broadband").css("display","none");
    $("#electricity").css("display","none");
    $("#gas").css("display","none");
    $("#water").css("display","none");
    $("#flightsbtn").css("background-color","#fe9900");
  });
  $(".broadbandbtn").click(function(){
    $("#dth").css("display","none");
    $("#mr").css("display","none");
    $("#tours").css("display","none");
    $("#movie_ticket").css("display","none");
    $("#hotels").css("display","none");
    $("#bus").css("display","none");
    $("#trains").css("display","none");
    $("#flights").css("display","none");
    $("#broadband").css("display","");
    $("#electricity").css("display","none");
    $("#gas").css("display","none");
    $("#water").css("display","none");
    $("#broadbandbtn").css("background-color","#fe9900");
  });
  $(".electricitybtn").click(function(){
    $("#dth").css("display","none");
    $("#mr").css("display","none");
    $("#tours").css("display","none");
    $("#movie_ticket").css("display","none");
    $("#hotels").css("display","none");
    $("#bus").css("display","none");
    $("#trains").css("display","none");
    $("#flights").css("display","none");
    $("#broadband").css("display","none");
    $("#electricity").css("display","");
    $("#gas").css("display","none");
    $("#water").css("display","none");
    $("#electricitybtn").css("background-color","#fe9900");
  });
  $(".gasbtn").click(function(){
    $("#dth").css("display","none");
    $("#mr").css("display","none");
    $("#tours").css("display","none");
    $("#movie_ticket").css("display","none");
    $("#hotels").css("display","none");
    $("#bus").css("display","none");
    $("#trains").css("display","none");
    $("#flights").css("display","none");
    $("#broadband").css("display","none");
    $("#electricity").css("display","none");
    $("#gas").css("display","");
    $("#water").css("display","none");
    $("#gasbtn").css("background-color","#fe9900");
  });
  $(".waterbtn").click(function(){
    $("#dth").css("display","none");
    $("#mr").css("display","none");
    $("#tours").css("display","none");
    $("#movie_ticket").css("display","none");
    $("#hotels").css("display","none");
    $("#bus").css("display","none");
    $("#trains").css("display","none");
    $("#flights").css("display","none");
    $("#broadband").css("display","none");
    $("#electricity").css("display","none");
    $("#gas").css("display","none");
    $("#water").css("display","");
    $("#waterbtn").css("background-color","#fe9900");
  });
</script>
</body>

</html>