  <div class="hotels" id="hotels" style="display:none;">
            <section class="container">
              <div class="bg-light shadow-md rounded p-4">
                <div class="row">
                  <div class="col-lg-5 mb-4 mb-lg-0">
                    <h2 class="text-4 mb-3">Book Domestic and International Hotels</h2>
                    <form id="bookingHotels" method="post">
                      <div class="form-row">
                        <div class="col-lg-12 form-group">
                          <input type="text" class="form-control" id="hotelsFrom" required
                            placeholder="Enter Locality, Landmark, City or Hotel">
                          <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span> </div>
                      </div>
                      <div class="form-row">
                        <div class="col-lg-6 form-group">
                          <input id="hotelsCheckIn" type="text" class="form-control" required placeholder="Check In">
                          <span class="icon-inside"><i class="far fa-calendar-alt"></i></span> </div>
                        <div class="col-lg-6 form-group">
                          <input id="hotelsCheckOut" type="text" class="form-control" required placeholder="Check Out">
                          <span class="icon-inside"><i class="far fa-calendar-alt"></i></span> </div>
                      </div>
                      <div class="travellers-class form-group">
                        <input type="text" id="hotelsTravellersClass" class="travellers-class-input form-control"
                          name="hotels-travellers-class" placeholder="Rooms / People" required onKeyPress="return false;">
                        <span class="icon-inside"><i class="fas fa-caret-down"></i></span>
                        <div class="travellers-dropdown">
                          <div class="row align-items-center">
                            <div class="col-sm-7">
                              <p class="mb-sm-0">Rooms</p>
                            </div>
                            <div class="col-sm-5">
                              <div class="qty input-group">
                                <div class="input-group-prepend">
                                  <button type="button" class="btn bg-light-4" data-value="decrease"
                                    data-target="#hotels-rooms" data-toggle="spinner">-</button>
                                </div>
                                <input type="text" data-ride="spinner" id="hotels-rooms" class="qty-spinner form-control"
                                  value="1" readonly>
                                <div class="input-group-append">
                                  <button type="button" class="btn bg-light-4" data-value="increase"
                                    data-target="#hotels-rooms" data-toggle="spinner">+</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <hr class="mt-2 mb-4">
                          <div class="row align-items-center">
                            <div class="col-sm-7">
                              <p class="mb-sm-0">Adults <small class="text-muted">(12+ yrs)</small></p>
                            </div>
                            <div class="col-sm-5">
                              <div class="qty input-group">
                                <div class="input-group-prepend">
                                  <button type="button" class="btn bg-light-4" data-value="decrease"
                                    data-target="#adult-travellers" data-toggle="spinner">-</button>
                                </div>
                                <input type="text" data-ride="spinner" id="adult-travellers" class="qty-spinner form-control"
                                  value="1" readonly>
                                <div class="input-group-append">
                                  <button type="button" class="btn bg-light-4" data-value="increase"
                                    data-target="#adult-travellers" data-toggle="spinner">+</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <hr class="my-2">
                          <div class="row align-items-center">
                            <div class="col-sm-7">
                              <p class="mb-sm-0">Children <small class="text-muted">(1-12 yrs)</small></p>
                            </div>
                            <div class="col-sm-5">
                              <div class="qty input-group">
                                <div class="input-group-prepend">
                                  <button type="button" class="btn bg-light-4" data-value="decrease"
                                    data-target="#children-travellers" data-toggle="spinner">-</button>
                                </div>
                                <input type="text" data-ride="spinner" id="children-travellers"
                                  class="qty-spinner form-control" value="0" readonly>
                                <div class="input-group-append">
                                  <button type="button" class="btn bg-light-4" data-value="increase"
                                    data-target="#children-travellers" data-toggle="spinner">+</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <button class="btn btn-primary btn-block submit-done mt-3" type="button">Done</button>
                        </div>
                      </div>
                      <button class="btn btn-primary btn-block" type="submit">Search Hotels</button>
                    </form>
                  </div>
                  <!-- Slideshow
                ============================================= -->
                  <div class="col-lg-7">
                    <div class="owl-carousel owl-theme slideshow single-slider">
                      <div class="item"><a href="#"><img class="img-fluid" src="{{asset('frontend/images/slider/booking-banner-7.jpg')}}"
                            alt="banner 7" /></a></div>
                      <div class="item"><a href="#"><img class="img-fluid" src="{{asset('frontend/images/slider/booking-banner-8.jpg')}}"
                            alt="banner 8" /></a></div>
                    </div>
                  </div><!-- Slideshow end -->
                </div>
              </div>
            </section>
      
            <!-- Banner
          ============================================= -->
            <section class="section">
              <div class="container">
                <h2 class="text-9 font-weight-500 text-center">Popular Destinations</h2>
                <p class="lead text-center mb-4">World's leading Hotel Booking website, Over 40,000 Hotel rooms worldwide.</p>
                <div class="row banner">
                  <div class="col-md-8">
                    <div class="item rounded align-middle"> <a href="#">
                        <div class="caption text-center">
                          <h2 class="text-7">Cox's Bazar</h2>
                          <p>Starting Hotels from 4500 Tk</p>
                        </div>
                        <div class="banner-mask"></div>
                        <img class="img-fluid" src="{{asset('frontend/images/brands/hotels/coxsbazar.jpg')}}" alt="hotels">
                      </a> </div>
                  </div>
                  <div class="col-md-4">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="item rounded"> <a href="#">
                            <div class="caption text-center">
                              <h2>Rangamati</h2>
                              <p>Starting Hotels from 1500 Tk</p>
                            </div>
                            <div class="banner-mask"></div>
                            <img class="img-fluid" src="{{asset('frontend/images/brands/hotels/rangamati.jpg')}}" alt="hotels">
                          </a> </div>
                      </div>
                      <div class="col-md-12 mt-4">
                        <div class="item rounded"> <a href="#">
                            <div class="caption text-center">
                              <h2>Kaptai</h2>
                              <p>Starting Hotels from 1000 Tk</p>
                            </div>
                            <div class="banner-mask"></div>
                            <img class="img-fluid" src="{{asset('frontend/images/brands/hotels/kaptai.jpg')}}" alt="hotels">
                          </a> </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row banner mt-4 mb-2">
                  <div class="col-md-4">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="item rounded"> <a href="#">
                            <div class="caption text-center">
                              <h2>Sajek Valley, Khagrachori</h2>
                              <p>Starting Hotels from 2500 Tk</p>
                            </div>
                            <div class="banner-mask"></div>
                            <img class="img-fluid" src="{{asset('frontend/images/brands/hotels/sajek.jpg')}}" alt="sajekvalley">
                          </a> </div>
                      </div>
                      <div class="col-md-12 mt-4">
                        <div class="item rounded"> <a href="#">
                            <div class="caption text-center">
                              <h2>Nilachal, Bandarban</h2>
                              <p>Starting Hotels from 2000 Tk</p>
                            </div>
                            <div class="banner-mask"></div>
                            <img class="img-fluid" src="{{asset('frontend/images/brands/hotels/bandarban.jpg')}}" alt="Bandarban">
                          </a> </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="item rounded align-middle"> <a href="#">
                        <div class="caption text-center">
                          <h2 class="text-7">Bichanakandi,Sylhet</h2>
                          <p>Starting Hotels from 2500 Tk</p>
                        </div>
                        <div class="banner-mask"></div>
                        <img class="img-fluid" src="{{asset('frontend/images/brands/hotels/Sylhet2.jpg')}}" alt="Bichanakandi, Sylhet">
                      </a> </div>
                  </div>
                </div>
                <div class="text-center pt-4"> <a href="#" class="btn btn-outline-primary btn-block shadow-none">More
                    Destinations</a> </div>
              </div>
            </section><!-- Banner end -->
      
            <!-- Why Choose Us
          ============================================= -->
            <div class="container">
              <section class="section bg-light shadow-md rounded px-5">
                <h2 class="text-9 font-weight-600 text-center">Why Choose Us</h2>
                <p class="lead mb-5 text-center">Book Hotels Online. Save Time and Money!</p>
                <div class="row">
                  <div class="col-md-4">
                    <div class="featured-box style-4">
                      <div class="featured-box-icon bg-light-4 text-primary rounded-circle"> <i class="fas fa-users"></i>
                      </div>
                      <h3>Over 10M+ Happy Customers</h3>
                      <p>Book with one of most trusted travel portals in the world</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="featured-box style-4">
                      <div class="featured-box-icon bg-light-4 text-primary rounded-circle"> <i
                          class="fas fa-dollar-sign"></i> </div>
                      <h3>Lowest Price Guarnteee</h3>
                      <p>Always get lowest price with the best in the industry.</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="featured-box style-4">
                      <div class="featured-box-icon bg-light-4 text-primary rounded-circle"> <i class="far fa-life-ring"></i>
                      </div>
                      <h3>24X7 Customer Support</h3>
                      <p>We're here to help. Round the clock support for all your hotel needs</p>
                    </div>
                  </div>
                </div>
              </section>
            </div><!-- Why Choose Us end -->
      </div>