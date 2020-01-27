<div class="bus" id="bus" style="display:none;">
          <section class="container">
              <div class="bg-light shadow-md rounded p-4">
                <div class="row">
                  <div class="col-lg-5 mb-4 mb-lg-0">
                    <h2 class="text-4 mb-3">Book Bus Tickets</h2>
                    <form id="bookingBus" method="post">
                      <div class="form-row">
                        <div class="col-lg-6 form-group">
                          <input type="text" class="form-control" id="busFrom" required placeholder="From">
                          <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span> </div>
                        <div class="col-lg-6 form-group">
                          <input type="text" class="form-control" id="busTo" required placeholder="To">
                          <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span> </div>
                      </div>
                      <div class="form-row">
                        <div class="col form-group">
                          <input id="busDepart" type="text" class="form-control" required placeholder="Depart Date">
                          <span class="icon-inside"><i class="far fa-calendar-alt"></i></span> </div>
                      </div>
                      <div class="travellers-class form-group">
                        <input type="text" id="busTravellersClass"  class="travellers-class-input form-control" name="bus-travellers-class" placeholder="Seats" readonly required onkeypress="return false;">
                        <span class="icon-inside"><i class="fas fa-caret-down"></i></span>
                        <div class="travellers-dropdown">
                          <div class="row align-items-center mb-3">
                            <div class="col-sm-7">
                              <p class="mb-sm-0">Seats</p>
                            </div>
                            <div class="col-sm-5">
                              <div class="qty input-group">
                                <div class="input-group-prepend">
                                  <button type="button" class="btn bg-light-4" data-value="decrease" data-target="#adult-travellers" data-toggle="spinner">-</button>
                                </div>
                                <input type="text" data-ride="spinner" id="adult-travellers" class="qty-spinner form-control" value="1" readonly>
                                <div class="input-group-append">
                                  <button type="button" class="btn bg-light-4" data-value="increase" data-target="#adult-travellers" data-toggle="spinner">+</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <button class="btn btn-primary btn-block submit-done" type="button">Done</button>
                        </div>
                      </div>
                      <button class="btn btn-primary btn-block" type="submit">Search Bus</button>
                    </form>
                  </div>
                  <!-- Slideshow
                ============================================= -->
                <div class="col-lg-7">
                  <div class="owl-carousel owl-theme slideshow single-slider">
                    <div class="item"><a href="#"><img class="img-fluid" src="{{asset('frontend/images/slider/booking-banner-2.jpg')}}" alt="banner 2" /></a></div>
                    <div class="item"><a href="#"><img class="img-fluid" src="{{asset('frontend/images/slider/booking-banner-3.jpg')}}" alt="banner 3" /></a></div>
                  </div>
                </div><!-- Slideshow end -->
                </div>
              </div>
          </section>
          <div class="container">
            <section class="section pb-4">
              <h2 class="text-9 font-weight-600 text-center">Why Book Bus with aamarApp</h2>
              <p class="lead mb-5 text-center">Book Bus Tickets Online. Save Time and Money!</p>
              <div class="row">
                <div class="col-md-4">
                  <div class="featured-box style-1 mb-4">
                    <div class="featured-box-icon text-primary"> <i class="fas fa-dollar-sign"></i> </div>
                    <h3>No Booking Charges</h3>
                    <p>No hidden charges, no payment fees, and free customer service. So you get the best deal every time!</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="featured-box style-1 mb-4">
                    <div class="featured-box-icon text-primary"> <i class="fas fa-search"></i> </div>
                    <h3>Quick and Easy Search</h3>
                    <p>We'll find you the best deals available from top bus companies for you to choose from, combining quality and economy. </p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="featured-box style-1 mb-4">
                    <div class="featured-box-icon text-primary"> <i class="fas fa-percentage"></i> </div>
                    <h3>Cheapest Price</h3>
                    <p>Always get cheapest price with the best in the industry. So you get the best deal every time.</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="featured-box style-1 mb-4">
                    <div class="featured-box-icon text-primary"> <i class="fas fa-road"></i> </div>
                    <h3>2 Lakh+ Routes</h3>
                    <p>Make your road journeys easier across world with 10000+ Operators.</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="featured-box style-1 mb-4">
                    <div class="featured-box-icon text-primary"> <i class="far fa-times-circle"></i> </div>
                    <h3>Easy Cancellation & Refunds</h3>
                    <p>Get instant refund and get any booking fees waived off!</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="featured-box style-1 mb-4">
                    <div class="featured-box-icon text-primary"> <i class="fas fa-heart"></i> </div>
                    <h3>Every time, anywhere</h3>
                    <p>Because your trip doesn't end with a ticket, we’re here for you all the way</p>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="container">
            <div class="bg-light shadow-md rounded px-4 py-4">
              <h3 class="text-6 text-center mb-4">Top Bus Routes</h3>
              <div class="row">
                <div class="col-md-6">
                  <p class="d-flex align-items-center">Dhaka To Chittagong <a href="#" class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Book Now</span></a></p>
                  <hr>
                  <p class="d-flex align-items-center">Dhaka To Barishal <a href="#" class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Book Now</span></a></p>
                  <hr>
                  <p class="d-flex align-items-center">Dhaka to Rajshahi <a href="#" class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Book Now</span></a></p>
                  <hr>
                  <p class="d-flex align-items-center">Dhaka To Sylhet <a href="#" class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Book Now</span></a></p>
                  <hr>
                  <p class="d-flex align-items-center">Dhaka to Faridpur <a href="#" class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Book Now</span></a></p>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                  <p class="d-flex align-items-center">Dhaka To Cumilla <a href="#" class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Book Now</span></a></p>
                  <hr>
                  <p class="d-flex align-items-center">Dhaka To Khulna<a href="#" class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Book Now</span></a></p>
                  <hr>
                  <p class="d-flex align-items-center">Dhaka to Noakhali <a href="#" class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Book Now</span></a></p>
                  <hr>
                  <p class="d-flex align-items-center">Dhaka To Bandarban <a href="#" class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Book Now</span></a></p>
                  <hr>
                  <p class="d-flex align-items-center">Dhaka to Cox's Bazar <a href="#" class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Book Now</span></a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="section pb-0">
            <div class="container">
              <div class="bg-light shadow-md rounded px-4 py-4">
                <ul class="nav nav-pills justify-content-center" id="myTab" role="tablist">
                  <li class="nav-item"> <a class="nav-link active" id="mobile-recharge-tab" data-toggle="tab" href="#mobile-recharge" role="tab" aria-controls="mobile-recharge" aria-selected="true">Book Bus</a> </li>
                  <li class="nav-item"> <a class="nav-link" id="billpayment-tab" data-toggle="tab" href="#billpayment" role="tab" aria-controls="billpayment" aria-selected="false">Why aamarApp</a> </li>
                  <li class="nav-item"> <a class="nav-link" id="why-quickai-tab" data-toggle="tab" href="#why-quickai" role="tab" aria-controls="why-quickai" aria-selected="false">Cancellations</a> </li>
                </ul>
                <div class="tab-content my-3" id="myTabContent">
                  <div class="tab-pane fade show active" id="mobile-recharge" role="tabpanel" aria-labelledby="mobile-recharge-tab">
                    <p>Instant Online mobile recharge Iisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet. Mediocrem qualisque in has. Enim utroque perfecto id mei, ad eam tritani labores facilisis, ullum sensibus no cum. Eius eleifend in quo. At mei alia iriure propriae.</p>
                    <p>Partiendo voluptatibus ex cum, sed erat fuisset ne, cum ex meis volumus mentitum. Alienum pertinacia maiestatis ne eum, verear persequeris et vim. Mea cu dicit voluptua efficiantur, nullam labitur veritus sit cu. Eum denique omittantur te, in justo epicurei his, eu mei aeque populo. Cu pro facer sententiae, ne brute graece scripta duo. No placerat quaerendum nec, pri alia ceteros adipiscing ut. Quo in nobis nostrum intellegebat. Ius hinc decore erroribus eu, in case prima exerci pri. Id eum prima adipisci. Ius cu minim theophrastus, legendos pertinacia an nam.</p>
                  </div>
                  <div class="tab-pane fade" id="billpayment" role="tabpanel" aria-labelledby="billpayment-tab">
                    <p>Partiendo voluptatibus ex cum, sed erat fuisset ne, cum ex meis volumus mentitum. Alienum pertinacia maiestatis ne eum, verear persequeris et vim. Mea cu dicit voluptua efficiantur, nullam labitur veritus sit cu. Eum denique omittantur te, in justo epicurei his, eu mei aeque populo. Cu pro facer sententiae, ne brute graece scripta duo. No placerat quaerendum nec, pri alia ceteros adipiscing ut. Quo in nobis nostrum intellegebat. Ius hinc decore erroribus eu, in case prima exerci pri. Id eum prima adipisci. Ius cu minim theophrastus, legendos pertinacia an nam.</p>
                    <p>Instant Online mobile recharge Iisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet. Mediocrem qualisque in has. Enim utroque perfecto id mei, ad eam tritani labores facilisis, ullum sensibus no cum. Eius eleifend in quo. At mei alia iriure propriae.</p>
                  </div>
                  <div class="tab-pane fade" id="why-quickai" role="tabpanel" aria-labelledby="why-quickai-tab">
                    <p>Cu pro facer sententiae, ne brute graece scripta duo. No placerat quaerendum nec, pri alia ceteros adipiscing ut. Quo in nobis nostrum intellegebat. Ius hinc decore erroribus eu, in case prima exerci pri. Id eum prima adipisci. Ius cu minim theophrastus, legendos pertinacia an nam.</p>
                    <p>Partiendo voluptatibus ex cum, sed erat fuisset ne, cum ex meis volumus mentitum. Alienum pertinacia maiestatis ne eum, verear persequeris et vim. Mea cu dicit voluptua efficiantur, nullam labitur veritus sit cu. Eum denique omittantur te, in justo epicurei his, eu mei aeque populo.</p>
                    <p>Instant Online mobile recharge Iisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet. Mediocrem qualisque in has. Enim utroque perfecto id mei, ad eam tritani labores facilisis, ullum sensibus no cum. Eius eleifend in quo. At mei alia iriure propriae.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>