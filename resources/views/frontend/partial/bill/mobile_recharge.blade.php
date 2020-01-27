<div class="mr" id="mr">
      <section class="container">
        <div class="bg-light shadow-md rounded p-4">
          <div class="row">

            <!-- Mobile Recharge
          ============================================= -->
            <div class="col-lg-4 mb-4 mb-lg-0">
              <h2 class="text-4 mb-3">Mobile Recharge or Bill Payment</h2>
              <form id="recharge-bill" method="post" action="{{route('recharge.request')}}">

                @csrf
                <div class="mb-3">
                  <div class="custom-control custom-radio custom-control-inline">
                    <input id="prepaid" name="rechargeBillpayment" value="prepaid" class="custom-control-input" checked="" required
                      type="radio">
                    <label class="custom-control-label" for="prepaid">Prepaid</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input id="postpaid" name="rechargeBillpayment" value="postpaid" class="custom-control-input" required type="radio">
                    <label class="custom-control-label" for="postpaid">Postpaid</label>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" data-bv-field="number" id="mobileNumber" required
                    placeholder="Enter Mobile Number" name="mobile_number">
                </div>
                <div class="form-group">
                  <select class="custom-select" id="operator" name="op_time" required="">
                    <option value="">Select Your Operator</option>
                    <option>GrameenPhone</option>
                    <option>Robi</option>
                    <option>Banglalink</option>
                    <option>Airtel</option>
                    <option>Teletalk</option>

                  </select>
                </div>
                <div class="form-group input-group">
                  <div class="input-group-prepend"> <span class="input-group-text">Tk</span> </div>
                  <!-- <a href="#" data-target="#" data-toggle="modal" class="view-plans-link">View Plans</a> -->
                  <!-- <a href="#" data-target="#view-plans" data-toggle="modal" class="view-plans-link">View Plans</a> -->
                  <input class="form-control" id="amount" name="amount" placeholder="Enter Amount" required type="text">
                </div>
                <button class="btn btn-primary btn-block" type="submit">Continue to Recharge</button>
              </form>
            </div><!-- Mobile Recharge end -->

            <!-- Slideshow
          ============================================= -->
            <div class="col-lg-8">
              <div class="owl-carousel owl-theme slideshow single-slider">
                <div class="item"><a href="#"><img class="img-fluid" src="{{asset('frontend/images/slider/banner-1.jpg')}}"
                      alt="banner 1" /></a></div>
                <div class="item"><a href="#"><img class="img-fluid" src="{{asset('frontend/images/slider/banner-2.jpg')}}"
                      alt="banner 2" /></a></div>
              </div>
            </div><!-- Slideshow end -->

          </div>
        </div>
      </section>

      <!-- Tabs
    ============================================= -->
      <div class="section pt-4 pb-3">
        <div class="container">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item"> <a class="nav-link active" id="mobile-recharge-tab" data-toggle="tab"
                href="#mobile-recharge" role="tab" aria-controls="mobile-recharge" aria-selected="true">Mobile
                Recharge</a> </li>
            <li class="nav-item"> <a class="nav-link" id="billpayment-tab" data-toggle="tab" href="#billpayment"
                role="tab" aria-controls="billpayment" aria-selected="false">Bill Payment</a> </li>
            <li class="nav-item"> <a class="nav-link" id="why-quickai-tab" data-toggle="tab" href="#why-quickai"
                role="tab" aria-controls="why-quickai" aria-selected="false">Why aamarApp</a> </li>
          </ul>
          <div class="tab-content my-3" id="myTabContent">
            <div class="tab-pane fade show active" id="mobile-recharge" role="tabpanel"
              aria-labelledby="mobile-recharge-tab">
              <p>Instant Online mobile recharge Iisque persius interesset his et, in quot quidam persequeris vim, ad mea
                essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet.
                Mediocrem qualisque in has. Enim utroque perfecto id mei, ad eam tritani labores facilisis, ullum
                sensibus no cum. Eius eleifend in quo. At mei alia iriure propriae.</p>
              <p>Partiendo voluptatibus ex cum, sed erat fuisset ne, cum ex meis volumus mentitum. Alienum pertinacia
                maiestatis ne eum, verear persequeris et vim. Mea cu dicit voluptua efficiantur, nullam labitur veritus
                sit cu. Eum denique omittantur te, in justo epicurei his, eu mei aeque populo. Cu pro facer sententiae,
                ne brute graece scripta duo. No placerat quaerendum nec, pri alia ceteros adipiscing ut. Quo in nobis
                nostrum intellegebat. Ius hinc decore erroribus eu, in case prima exerci pri. Id eum prima adipisci. Ius
                cu minim theophrastus, legendos pertinacia an nam. <a href="#">Read Terms</a></p>
            </div>
            <div class="tab-pane fade" id="billpayment" role="tabpanel" aria-labelledby="billpayment-tab">
              <p>Partiendo voluptatibus ex cum, sed erat fuisset ne, cum ex meis volumus mentitum. Alienum pertinacia
                maiestatis ne eum, verear persequeris et vim. Mea cu dicit voluptua efficiantur, nullam labitur veritus
                sit cu. Eum denique omittantur te, in justo epicurei his, eu mei aeque populo. Cu pro facer sententiae,
                ne brute graece scripta duo. No placerat quaerendum nec, pri alia ceteros adipiscing ut. Quo in nobis
                nostrum intellegebat. Ius hinc decore erroribus eu, in case prima exerci pri. Id eum prima adipisci. Ius
                cu minim theophrastus, legendos pertinacia an nam.</p>
              <p>Instant Online mobile recharge Iisque persius interesset his et, in quot quidam persequeris vim, ad mea
                essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet.
                Mediocrem qualisque in has. Enim utroque perfecto id mei, ad eam tritani labores facilisis, ullum
                sensibus no cum. Eius eleifend in quo. At mei alia iriure propriae.</p>
            </div>
            <div class="tab-pane fade" id="why-quickai" role="tabpanel" aria-labelledby="why-quickai-tab">
              <p>Cu pro facer sententiae, ne brute graece scripta duo. No placerat quaerendum nec, pri alia ceteros
                adipiscing ut. Quo in nobis nostrum intellegebat. Ius hinc decore erroribus eu, in case prima exerci
                pri. Id eum prima adipisci. Ius cu minim theophrastus, legendos pertinacia an nam.</p>
              <p>Partiendo voluptatibus ex cum, sed erat fuisset ne, cum ex meis volumus mentitum. Alienum pertinacia
                maiestatis ne eum, verear persequeris et vim. Mea cu dicit voluptua efficiantur, nullam labitur veritus
                sit cu. Eum denique omittantur te, in justo epicurei his, eu mei aeque populo.</p>
              <p>Instant Online mobile recharge Iisque persius interesset his et, in quot quidam persequeris vim, ad mea
                essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet.
                Mediocrem qualisque in has. Enim utroque perfecto id mei, ad eam tritani labores facilisis, ullum
                sensibus no cum. Eius eleifend in quo. At mei alia iriure propriae.</p>
            </div>
          </div>
        </div>
      </div><!-- Tabs end -->
            <!-- Refer & Earn
    ============================================= -->
    <div class="container">
        <section class="section bg-light shadow-md rounded px-5">
          <h2 class="text-9 font-weight-600 text-center">Refer & Earn</h2>
          <p class="lead text-center mb-5">Refer your friends and earn up to Tk 200.</p>
          <div class="row">
            <div class="col-md-4">
              <div class="featured-box style-4">
                <div class="featured-box-icon bg-light-4 text-primary rounded-circle"> <i class="fas fa-bullhorn"></i>
                </div>
                <h3>You Refer Friends</h3>
                <p class="text-3">Share your referral link with friends. They get 50 Tk.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="featured-box style-4">
                <div class="featured-box-icon bg-light-4 text-primary rounded-circle"> <i
                    class="fas fa-sign-in-alt"></i> </div>
                <h3>Your Friends Register</h3>
                <p class="text-3">Your friends Register with using your referral link.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="featured-box style-4">
                <div class="featured-box-icon bg-light-4 text-primary rounded-circle"> <i
                    class="fas fa-dollar-sign"></i> </div>
                <h3>Earn You</h3>
                <p class="text-3">You get 100 Tk. You can use these credits to take recharge.</p>
              </div>
            </div>
          </div>
          <div class="text-center pt-4"> <a href="#" class="btn btn-primary">Get Started Earn</a> </div>
        </section>
      </div><!-- Refer & Earn end -->
</div>
<!-- Mobile Recharge Section Ends-->
