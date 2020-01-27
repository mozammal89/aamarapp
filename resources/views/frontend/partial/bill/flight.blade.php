           <div class="flights" id="flights"  style="display:none;">
              <section class="container">
                <div class="bg-light shadow-md rounded p-4">
                  <div class="row">
                    <div class="col-lg-5 mb-4 mb-lg-0">
                      <h2 class="text-4 mb-3">Book Domestic and International Flights</h2>
                      <form id="bookingFlight" method="post">
                        <div class="mb-3">
                          <div class="custom-control custom-radio custom-control-inline">
                            <input id="oneway" name="flight-trip" class="custom-control-input" checked="" required type="radio">
                            <label class="custom-control-label" for="oneway">One Way</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input id="roundtrip" name="flight-trip" class="custom-control-input" required type="radio">
                            <label class="custom-control-label" for="roundtrip">Round Trip</label>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="col-lg-6 form-group">
                            <input type="text" class="form-control" id="flightFrom" required placeholder="From">
                            <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span> </div>
                          <div class="col-lg-6 form-group">
                            <input type="text" class="form-control" id="flightTo" required placeholder="To">
                            <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span> </div>
                        </div>
                        <div class="form-row">
                          <div class="col-lg-6 form-group">
                            <input id="flightDepart" type="text" class="form-control" required placeholder="Depart Date">
                            <span class="icon-inside"><i class="far fa-calendar-alt"></i></span> </div>
                          <div class="col-lg-6 form-group">
                            <input id="flightReturn" type="text" class="form-control" required placeholder="Return Date">
                            <span class="icon-inside"><i class="far fa-calendar-alt"></i></span> </div>
                        </div>
                        <div class="travellers-class form-group">
                          <input type="text" id="flightTravellersClass" class="travellers-class-input form-control"
                            name="flight-travellers-class" placeholder="Travellers, Class" readonly required
                            onkeypress="return false;">
                          <span class="icon-inside"><i class="fas fa-caret-down"></i></span>
                          <div class="travellers-dropdown">
                            <div class="row align-items-center">
                              <div class="col-sm-7">
                                <p class="mb-sm-0">Adults <small class="text-muted">(12+ yrs)</small></p>
                              </div>
                              <div class="col-sm-5">
                                <div class="qty input-group">
                                  <div class="input-group-prepend">
                                    <button type="button" class="btn bg-light-4" data-value="decrease"
                                      data-target="#flightAdult-travellers" data-toggle="spinner">-</button>
                                  </div>
                                  <input type="text" data-ride="spinner" id="flightAdult-travellers"
                                    class="qty-spinner form-control" value="1" readonly>
                                  <div class="input-group-append">
                                    <button type="button" class="btn bg-light-4" data-value="increase"
                                      data-target="#flightAdult-travellers" data-toggle="spinner">+</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <hr class="my-2">
                            <div class="row align-items-center">
                              <div class="col-sm-7">
                                <p class="mb-sm-0">Children <small class="text-muted">(2-12 yrs)</small></p>
                              </div>
                              <div class="col-sm-5">
                                <div class="qty input-group">
                                  <div class="input-group-prepend">
                                    <button type="button" class="btn bg-light-4" data-value="decrease"
                                      data-target="#flightChildren-travellers" data-toggle="spinner">-</button>
                                  </div>
                                  <input type="text" data-ride="spinner" id="flightChildren-travellers"
                                    class="qty-spinner form-control" value="0" readonly>
                                  <div class="input-group-append">
                                    <button type="button" class="btn bg-light-4" data-value="increase"
                                      data-target="#flightChildren-travellers" data-toggle="spinner">+</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <hr class="my-2">
                            <div class="row align-items-center">
                              <div class="col-sm-7">
                                <p class="mb-sm-0">Infants <small class="text-muted">(Below 2 yrs)</small></p>
                              </div>
                              <div class="col-sm-5">
                                <div class="qty input-group">
                                  <div class="input-group-prepend">
                                    <button type="button" class="btn bg-light-4" data-value="decrease"
                                      data-target="#flightInfants-travellers" data-toggle="spinner">-</button>
                                  </div>
                                  <input type="text" data-ride="spinner" id="flightInfants-travellers"
                                    class="qty-spinner form-control" value="0" readonly>
                                  <div class="input-group-append">
                                    <button type="button" class="btn bg-light-4" data-value="increase"
                                      data-target="#flightInfants-travellers" data-toggle="spinner">+</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <hr class="mt-2">
                            <div class="mb-3">
                              <div class="custom-control custom-radio">
                                <input id="flightClassEconomic" name="flight-class" class="flight-class custom-control-input"
                                  value="0" checked="" required type="radio">
                                <label class="custom-control-label" for="flightClassEconomic">Economic</label>
                              </div>
                              <div class="custom-control custom-radio">
                                <input id="flightClassPremiumEconomic" name="flight-class"
                                  class="flight-class custom-control-input" value="1" required type="radio">
                                <label class="custom-control-label" for="flightClassPremiumEconomic">Premium Economic</label>
                              </div>
                              <div class="custom-control custom-radio">
                                <input id="flightClassBusiness" name="flight-class" class="flight-class custom-control-input"
                                  value="2" required type="radio">
                                <label class="custom-control-label" for="flightClassBusiness">Business</label>
                              </div>
                              <div class="custom-control custom-radio">
                                <input id="flightClassFirstClass" name="flight-class" class="flight-class custom-control-input"
                                  value="3" required type="radio">
                                <label class="custom-control-label" for="flightClassFirstClass">First Class</label>
                              </div>
                            </div>
                            <button class="btn btn-primary btn-block submit-done" type="button">Done</button>
                          </div>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Search Flights</button>
                      </form>
                    </div>
                    <div class="col-lg-7"><img class="img-fluid rounded" src="{{asset('frontend/images/slider/booking-banner-1.jpg')}}"
                        alt="aamarApp" /></div>
                  </div>
                </div>
              </section>
              <div class="container">
                <section class="section px-3 px-md-5 pb-2">
                  <h2 class="text-9 font-weight-600 text-center">Why Book Flight with aamarApp</h2>
                  <p class="lead mb-5 text-center">Book Flight Tickets Online. Save Time and Money!</p>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="featured-box text-center style-4">
                        <div class="featured-box-icon bg-light-4 text-primary rounded-circle"> <i class="fas fa-dollar-sign"></i> </div>
                        <h3>No Booking Charges</h3>
                        <p>No hidden charges, no payment fees, and free customer service. So you get the best deal every time!
                        </p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="featured-box text-center style-4">
                        <div class="featured-box-icon bg-light-4 text-primary rounded-circle"> <i class="fas fa-percentage"></i> </div>
                        <h3>Cheapest Price</h3>
                        <p>Always get cheapest price with the best in the industry. So you get the best deal every time.</p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="featured-box text-center style-4">
                        <div class="featured-box-icon bg-light-4 text-primary rounded-circle"> <i class="far fa-times-circle"></i> </div>
                        <h3>Easy Cancellation &amp; Refunds</h3>
                        <p>Get instant refund and get any booking fees waived off!</p>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <section class="container mt-4">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="bg-light shadow-md rounded p-4">
                      <h3 class="text-6 mb-4">Popular Domestic Routes</h3>
                      <p class="d-flex align-items-center">Dhaka to Chittagong Flights <a href="#"
                          class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i
                            class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Search
                            Flights</span></a></p>
                      <hr>
                      <p class="d-flex align-items-center">Dhaka to Cox's Bazar Flights<a href="#"
                          class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i
                            class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Search
                            Flights</span></a></p>
                      <hr>
                      <p class="d-flex align-items-center">Dhaka to Sylhet Flights <a href="#"
                          class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i
                            class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Search
                            Flights</span></a></p>
                      <hr>
                      <p class="d-flex align-items-center">Dhaka to Jashore Flights <a href="#"
                          class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i
                            class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Search
                            Flights</span></a></p>
                      <hr>
                      <p class="d-flex align-items-center">Dhaka to Rajshahi Flights <a href="#"
                          class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i
                            class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Search
                            Flights</span></a></p>
                      <hr>
                      <p class="text-center mb-0"><a href="#" class="d-inline-block">View All</a></p>
                    </div>
                  </div>
                  <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="bg-light shadow-md rounded p-4">
                      <h3 class="text-6 mb-4">Popular International Routes</h3>
                      <p class="d-flex align-items-center">Dhaka to Dubai Flights <a href="#"
                          class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i
                            class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Search
                            Flights</span></a></p>
                      <hr>
                      <p class="d-flex align-items-center">Dhaka to Toronto Flights <a href="#"
                          class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i
                            class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Search
                            Flights</span></a></p>
                      <hr>
                      <p class="d-flex align-items-center">Dhaka to Singapore Flights <a href="#"
                          class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i
                            class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Search
                            Flights</span></a></p>
                      <hr>
                      <p class="d-flex align-items-center">Dhaka to London Flights <a href="#"
                          class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i
                            class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Search
                            Flights</span></a></p>
                      <hr>
                      <p class="d-flex align-items-center">Dhaka to Bangkok Flights <a href="#"
                          class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i
                            class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Search
                            Flights</span></a></p>
                      <hr>
                      <p class="text-center mb-0"><a href="#" class="d-inline-block">View All</a></p>
                    </div>
                  </div>
                </div>
              </section>
              <div class="section py-4">
                <div class="container">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab"
                        aria-controls="first" aria-selected="true">Book Flights</a> </li>
                    <li class="nav-item"> <a class="nav-link" id="second-tab" data-toggle="tab" href="#second" role="tab"
                        aria-controls="second" aria-selected="false">Why aamarApp?</a> </li>
                  </ul>
                  <div class="tab-content my-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                      <p>Online Book Domestic and International flights Iisque persius interesset his et, in quot quidam
                        persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu
                        nec magna imperdiet. Mediocrem qualisque in has. Enim utroque perfecto id mei, ad eam tritani labores
                        facilisis, ullum sensibus no cum. Eius eleifend in quo. At mei alia iriure propriae.</p>
                      <p>Partiendo voluptatibus ex cum, sed erat fuisset ne, cum ex meis volumus mentitum. Alienum pertinacia
                        maiestatis ne eum, verear persequeris et vim. Mea cu dicit voluptua efficiantur, nullam labitur veritus
                        sit cu. Eum denique omittantur te, in justo epicurei his, eu mei aeque populo. Cu pro facer sententiae,
                        ne brute graece scripta duo. No placerat quaerendum nec, pri alia ceteros adipiscing ut. Quo in nobis
                        nostrum intellegebat. Ius hinc decore erroribus eu, in case prima exerci pri. Id eum prima adipisci. Ius
                        cu minim theophrastus, legendos pertinacia an nam.</p>
                    </div>
                    <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
                      <p>Partiendo voluptatibus ex cum, sed erat fuisset ne, cum ex meis volumus mentitum. Alienum pertinacia
                        maiestatis ne eum, verear persequeris et vim. Mea cu dicit voluptua efficiantur, nullam labitur veritus
                        sit cu. Eum denique omittantur te, in justo epicurei his, eu mei aeque populo. Cu pro facer sententiae,
                        ne brute graece scripta duo. No placerat quaerendum nec, pri alia ceteros adipiscing ut. Quo in nobis
                        nostrum intellegebat. Ius hinc decore erroribus eu, in case prima exerci pri. Id eum prima adipisci. Ius
                        cu minim theophrastus, legendos pertinacia an nam.</p>
                      <p>Instant Iisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.
                        Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet. Mediocrem qualisque in has.
                        Enim utroque perfecto id mei, ad eam tritani labores facilisis, ullum sensibus no cum. Eius eleifend in
                        quo. At mei alia iriure propriae.</p>
                    </div>
                  </div>
                </div>
              </div>
              <section class="container">
                <div class="bg-light shadow-md rounded p-4">
                  <h3 class="text-6 mb-4">Our Airlines Partner</h3>
                  <div class="brands-grid separator-border">
                    <div class="row align-items-center">
                      <div class="col-6 col-sm-3 col-lg-2 text-center"><a href=""><img class="img-fluid"
                            src="{{asset('frontend/images/brands/flights/biman-bangladesh-airlines-logo.png')}}" alt="Brands"></a></div>
                      <div class="col-6 col-sm-3 col-lg-2 text-center"><a href=""><img class="img-fluid"
                            src="{{asset('frontend/images/brands/flights/NOVOAIRLOGO.png')}}" alt="Brands"></a></div>
                      <div class="col-6 col-sm-3 col-lg-2 text-center"><a href=""><img class="img-fluid"
                            src="{{asset('frontend/images/brands/flights/us-bangla.png')}}" alt="Brands"></a></div>
                      <div class="col-6 col-sm-3 col-lg-2 text-center"><a href=""><img class="img-fluid"
                            src="{{asset('frontend/images/brands/flights/regent-airlines.png')}}" alt="Brands"></a></div>
                      <div class="col-6 col-sm-3 col-lg-2 text-center"><a href=""><img class="img-fluid"
                            src="{{asset('frontend/images/brands/flights/Qatar-Airways-Information_contenu_standard_ban.png')}}" alt="Brands"></a></div>
                      <div class="col-6 col-sm-3 col-lg-2 text-center"><a href=""><img class="img-fluid"
                            src="{{asset('frontend/images/brands/flights/Emirates-logo-and-Wordmark-1024x768.png')}}" alt="Brands"></a></div>
                      <div class="col-6 col-sm-3 col-lg-2 text-center"><a href=""><img class="img-fluid"
                            src="{{asset('frontend/images/brands/flights/EtihadAirways_2014.png')}}" alt="Brands"></a></div>
                      <div class="col-6 col-sm-3 col-lg-2 text-center"><a href=""><img class="img-fluid"
                            src="{{asset('frontend/images/brands/flights/british-airways-01-logo-png-transparent.png')}}" alt="Brands"></a></div>
                      <div class="col-6 col-sm-3 col-lg-2 text-center"><a href=""><img class="img-fluid"
                            src="{{asset('frontend/images/brands/flights/Gulf_Air_logo.png')}}" alt="Brands"></a></div>
                      <div class="col-6 col-sm-3 col-lg-2 text-center"><a href=""><img class="img-fluid"
                            src="{{asset('frontend/images/brands/flights/Turkish_Airlines_logo_(large).png')}}" alt="Brands"></a></div>
                      <div class="col-6 col-sm-3 col-lg-2 text-center"><a href=""><img class="img-fluid"
                            src="{{asset('frontend/images/brands/flights/Jet_Airways_logo_logotype_symbol.png')}}" alt="Brands"></a></div>
                      <div class="col-6 col-sm-3 col-lg-2 text-center"><a href=""><img class="img-fluid"
                            src="{{asset('frontend/images/brands/flights/Malaysia-Airlines-Logo.png')}}" alt="Brands"></a></div>
                    </div>
                  </div>
                </div>
              </div>