 <div class="trains" id="trains" style="display:none;">
                <section class="container">
                  <div class="bg-light shadow-md rounded p-4">
                    <div class="row">
                      <div class="col-lg-5 mb-4 mb-lg-0">
                        <h2 class="text-4 mb-3">Book Train Tickets</h2>
                        <form id="bookingTrain" method="post">
                          <div class="form-row">
                            <div class="col-lg-6 form-group">
                              <input type="text" class="form-control" id="trainFrom" required placeholder="From">
                              <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span> </div>
                            <div class="col-lg-6 form-group">
                              <input type="text" class="form-control" id="trainTo" required placeholder="To">
                              <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span> </div>
                          </div>
                          <div class="form-row">
                            <div class="col-lg-12 form-group">
                              <input id="trainDepart" type="text" class="form-control" required placeholder="Depart Date">
                              <span class="icon-inside"><i class="far fa-calendar-alt"></i></span> </div>
                          </div>
                          <div class="travellers-class form-group">
                            <input type="text" id="trainTravellersClass" class="travellers-class-input form-control"
                              name="train-travellers-class" placeholder="Travellers, Class" readonly required
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
                                        data-target="#trainAdult-travellers" data-toggle="spinner">-</button>
                                    </div>
                                    <input type="text" data-ride="spinner" id="trainAdult-travellers"
                                      class="qty-spinner form-control" value="1" readonly>
                                    <div class="input-group-append">
                                      <button type="button" class="btn bg-light-4" data-value="increase"
                                        data-target="#trainAdult-travellers" data-toggle="spinner">+</button>
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
                                        data-target="#trainChildren-travellers" data-toggle="spinner">-</button>
                                    </div>
                                    <input type="text" data-ride="spinner" id="trainChildren-travellers"
                                      class="qty-spinner form-control" value="0" readonly>
                                    <div class="input-group-append">
                                      <button type="button" class="btn bg-light-4" data-value="increase"
                                        data-target="#trainChildren-travellers" data-toggle="spinner">+</button>
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
                                        data-target="#trainInfants-travellers" data-toggle="spinner">-</button>
                                    </div>
                                    <input type="text" data-ride="spinner" id="trainInfants-travellers"
                                      class="qty-spinner form-control" value="0" readonly>
                                    <div class="input-group-append">
                                      <button type="button" class="btn bg-light-4" data-value="increase"
                                        data-target="#trainInfants-travellers" data-toggle="spinner">+</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group mt-3">
                                <select id="train-class" name="train-class" class="custom-select">
                                  <option value="0">All Class</option>
                                  <option value="1">First Class</option>
                                  <option value="2">Second Class</option>
                                  <option value="3">First Class Sleeper (SL)</option>
                                  <option value="4">Second Class Sleeper (SL)</option>
                                  <option value="5">Business</option>
                                </select>
                              </div>
                              <button class="btn btn-primary btn-block submit-done" type="button">Done</button>
                            </div>
                          </div>
                          <button class="btn btn-primary btn-block" type="submit">Search Trains</button>
                        </form>
                      </div>
                      <!-- Slideshow
                    ============================================= -->
                      <div class="col-lg-7">
                        <div class="owl-carousel owl-theme slideshow single-slider">
                          <div class="item"><a href="#"><img class="img-fluid" src="{{asset('frontend/images/slider/booking-banner-3.jpg')}}"
                                alt="banner 3" /></a></div>
                          <div class="item"><a href="#"><img class="img-fluid" src="{{asset('frontend/images/slider/booking-banner-2.jpg')}}"
                                alt="banner 2" /></a></div>
                        </div>
                      </div><!-- Slideshow end -->
                    </div>
                  </div>
                </section>
                <div class="container">
                  <section class="section px-3 px-md-5 pb-3">
                    <h2 class="text-9 font-weight-600 text-center">Why Book Trains with aamarApp</h2>
                    <p class="lead mb-5 text-center">Book Train Tickets Online. Save Time and Money!</p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="featured-box style-3 mb-5">
                          <div class="featured-box-icon bg-primary text-light rounded-circle"> <i class="fas fa-percentage"></i>
                          </div>
                          <h3>Cheapest Price</h3>
                          <p>Always get cheapest price with the best in the industry. So you get the best deal every time!</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="featured-box style-3 mb-5">
                          <div class="featured-box-icon bg-primary text-light rounded-circle"> <i class="fas fa-times"></i> </div>
                          <h3>Easy Cancellation & Refunds</h3>
                          <p>Get instant refund and get any booking fees waived off!</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="featured-box style-3 mb-5">
                          <div class="featured-box-icon bg-primary text-light rounded-circle"> <i class="fas fa-dollar-sign"></i>
                          </div>
                          <h3>No Booking Charges</h3>
                          <p>No hidden charges, no payment fees, and free customer service. So you get the best deal every time!
                          </p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="featured-box style-3 mb-5">
                          <div class="featured-box-icon bg-primary text-light rounded-circle"> <i class="fas fa-heart"></i> </div>
                          <h3>Every time, anywhere</h3>
                          <p>Because your trip doesn't end with a ticket, we’re here for you all the way</p>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
                <section class="container">
                  <div class="bg-light shadow-md rounded px-4 py-3">
                    <div class="row">
                      <div class="col-md-6">
                        <h3 class="text-6 mb-4">Top Train Routes</h3>
                        <p class="d-flex align-items-center">Chennai to Madurai <a href="#"
                            class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i
                              class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Find Tickets</span></a>
                        </p>
                        <hr>
                        <p class="d-flex align-items-center">London to Manchester<a href="#"
                            class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i
                              class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Find Tickets</span></a>
                        </p>
                        <hr>
                        <p class="d-flex align-items-center">Ahmedabad to Mumbai <a href="#"
                            class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i
                              class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Find Tickets</span></a>
                        </p>
                        <hr>
                        <p class="d-flex align-items-center">Liverpool to Manchester <a href="#"
                            class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i
                              class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Find Tickets</span></a>
                        </p>
                        <hr>
                        <p class="d-flex align-items-center">Bangalore to Chennai <a href="#"
                            class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i
                              class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Find Tickets</span></a>
                        </p>
                        <hr>
                        <p class="text-center mb-0"><a href="#" class="d-inline-block">View All Top Routes</a></p>
                      </div>
                      <div class="col-md-6 mt-4 mt-md-0">
                        <h3 class="text-6 mb-4">What is aamarApp?</h3>
                        <div class="accordion" id="accordionDefault">
                          <div class="card">
                            <div class="card-header" id="headingOne">
                              <h5 class="mb-0"> <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                  aria-controls="collapseOne">Why choose Us</a> </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                              data-parent="#accordionDefault">
                              <div class="card-body">
                                <p>Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.
                                  Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet.</p>
                                <p class="mb-0">Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                                  put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingTwo">
                              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                  aria-expanded="false" aria-controls="collapseTwo">Our Mission</a> </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionDefault">
                              <div class="card-body"> Iisque persius interesset his et, in quot quidam persequeris vim, ad mea
                                essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet.
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingThree">
                              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseThree"
                                  aria-expanded="false" aria-controls="collapseThree">Our Vision</a> </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                              data-parent="#accordionDefault">
                              <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer
                                labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>