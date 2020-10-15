<span class="anchor mt-5" id="pricing"></span>
<div class="container mt-5" id="pricing">
  <div class="text-center pt-4">
    <h2 class="my-1">Pricing</h2>
    <div class="flex-c-c">
      <div class="badge badge-light mb-4">30 Day Money Back Guarantee</div>
    </div>
  </div>

  @include('partials.components.alerts.earlybird')

  <!-- Pricing Boxes -->
  <div class="row pt-4">
    <div class="col-sm-12 col-md card my-4 pt-3 text-center" style="margin-right: -4px;">
      @include('partials.components.pricing.col-1')
      <button class="btn btn-outline-info mb-4" data-toggle="modal" data-target="#subscribeModal">Enroll Now</button>
    </div>

    <div class="col-sm-12 col-md active card mb-3 pt-3 text-center mt-3" style="z-index: 1;">
      @include('partials.components.pricing.col-2')
      <button class="btn btn-success mt-2" data-toggle="modal" data-target="#enrollModal">Enroll Now</button>
    </div>

    <div class="col-sm-12 col-md card my-4 pt-3 text-center" style="margin-left: -4px;">
      @include('partials.components.pricing.col-3')
      <button class="btn btn-dark mb-4" data-toggle="modal" data-target="#subscribeModal"><i class="fas fa-bell mr-2"></i> Remind Me</button>
    </div>
  </div>

  {{-- <div class="flex-col-c text-center mt-4 mb-5 pb-5">
    <h3 class="mt-0">Want a payment plan?</h3>
    <p class="mute text-center">4 payments of $500</p>
    <button class="btn btn-outline-info mx-auto d-block" data-toggle="modal" data-target="#enrollModal"><i class="mdi mdi-credit-card mr-2"></i> Get the Payment Plan</button>
  </div> --}}

  {{-- <h5 class="text-center text-muted mt-5 mb-4">Pay What You Want Items</h5> --}}
  {{-- <div class="row">
    <div class="col-lg-3 col-md-12 pl-md-0">
      <div class="card text-white bg-success mb-3">
        <div class="card-body">
          <h6 class="badge badge-light px-2 pt-1 uppercase">Pay $0 <span class="text-muted">or more</span></h6>
          <p class="lead pl-2 pt-2">Bonsai: Pro WP Theme</p>
          <p class="mb-0 pl-1"><span>Over 6 hours of Edited Design Sprint footage with a real company.</span></p>
          <a href="#" data-toggle="modal" data-target="#enrollModal" class="btn btn-outline-light mt-3 flex-c-c"><i class="mdi mdi-shopping mr-2"></i> Checkout</a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-12">
      <div class="card active mb-3">
        <div class="card-body">
          <h6 class="badge badge-light px-2 pt-1 uppercase">Pay $0 <span class="text-muted">or more</span></h6>
          <p class="lead text-muted pl-2 pt-2">Leef Design System</p>
          <p class="mb-0 pl-1"><span>Sprint Sample Course, the Sprint the book, and a Special Edition Project Bonsai t-shirt.</span></p>
          <a href="#" data-toggle="modal" data-target="#enrollModal" class="btn btn-primary mt-3 flex-c-c"><i class="mdi mdi-shopping mr-2"></i> Checkout</a>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-12">
      <div class="row bg-cool-gradient" style="border-radius: 4px;">
        <div class="col-lg-6 col-md-12">
          <div class="card text-white bg-dark my-3">
            <div class="card-body">
              <h6 class="badge badge-light px-2 pt-1 uppercase">Pay $0 <span class="text-muted">or more</span></h6>
              <p class="lead pl-2 pt-2">Live Stream Access</p>
              <p class="mb-0 pl-1"><span>Live streaming access to the Real Time Project, which will occur in March 2020.</span></p>
              <a href="#" data-toggle="modal" data-target="#enrollModal" class="btn btn-outline-primary mt-3 flex-c-c"><i class="mdi mdi-shopping mr-2"></i> Checkout</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 pr-md-0">
          <div class="text-white mb-4">
            <div class="card-body">
              <h6 class="badge badge-light px-2 pt-1 uppercase">Pay $0 <span class="text-muted">or more</span></h6>
              <p class="lead text-white pl-2 pt-2">Raw Recordings</p>
              <p class="mb-2 pl-1"><span>Access to the raw full recordings of the Real Time Project.</span></p>
              <p class="mb-0 pl-1"><span>Sprint Sample Course. Sprint Bundle. Live streaming access to the Real Time Project, which will occur in March (Unlimited Seats).</span></p>
              <a href="#" data-toggle="modal" data-target="#enrollModal" class="btn btn-outline-light mt-3 flex-c-c"><i class="mdi mdi-shopping mr-2"></i> Checkout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  {{-- <div class="testimonial mx-auto p-3 mt-3">
    <div class="row">
      <div class="col-4 col-sm-3 col-md-4">
        <img class="rounded mx-2 img-fluid mt-2" src="@asset('images/testimonials/JacobSeltz-min.jpg')" alt="">
      </div>
      <div class="col-8 col-sm-9 col-md-8 mt-1">
        <p class="mb-2"><small>If you're not using AMZtracker - that's on you.</small></p>
        <p class="mb-2"><small>As a competitor of yours, I guess I'm not upset about it.. but for your sake, you're not optimizing your business.</small></p>
        <p class="dark-color mb-0">-Jacob Seltz</p>
        <small class="mute">Standard Modern</small>
      </div>
    </div>
  </div> --}}

</div>
<!-- end pricing -->
