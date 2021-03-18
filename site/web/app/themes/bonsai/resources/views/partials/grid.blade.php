<div id="grid" class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-6">
      <div class="card mx-2 mt-5 pointer" data-toggle="modal" data-target="#signupmodal01">
        {{-- <img class="card-img-top" src="@asset('images/legal-kit.svg')" alt="" class=""> --}}
        <h1 class="text-center mt-5"><i class="fas fa-play text-secondary mr-2"></i></h1>
        <div class="mt-2 card-body">
          <h3>DIY Training</h3>
          <p><span class="badge badge-secondary mr-2">100+ hrs of video</span> <span class="badge badge-default">Open Source</span></p>
          {{-- <p><span class="badge badge-secondary mr-2">23 videos</span> <small class="text-muted">4 hours</small></p> --}}
          <p class="mute mt-3">Learn to develop a Bonsai application that will support:</p>
          <ul>
            <li class="text-secondary">Groups <a href="#groups"><small class="text-muted">What are groups?</small></a></li>
            <li>Subscriptions</li>
            <li>Memberships <span class="mute">(exclusive content)</span></li>
            <li>Products</li>
            <li>LMS</li>
          </ul>
        </div>
        <div class="card-footer p-3">
          <div class="flex-s-b">
            <div class="d-flex">
              <a href="#" class="btn btn-secondary">Join</a>
            </div>
            <p class="h4 mt-3 pl-2">$5<span class="text-muted">/m</span></p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="card mx-2 mt-5 pointer gradient-border" id="box" data-toggle="modal" data-target="#signupmodal02">
        {{-- <img class="card-img-top"src="@asset('images/pitch-kit.svg')" alt=""> --}}
        <h1 class="text-center mt-5"><i class="fas fa-house-user text-info mr-2"></i></h1>
        <div class="mt-2 card-body">
          <h3>Small Business</h3>
          <p><span class="badge badge-info mr-2">You keep 90% profit</span> <span class="badge badge-info">Coming 2022</span></p>
          <p class="">Perfect for those who might be starting out or don't have a big community yet. We will take 10% profit, but you only pay $50/m instead of $300.</p>
          <ul>
            <li class="text-info">Groups <a href="#groups"><small class="text-muted">What are groups?</small></a></li>
            <li>Subscriptions</li>
            <li>Memberships <span class="mute">(exclusive content)</span></li>
            <li>Products</li>
            <li>LMS</li>
          </ul>
        </div>
        <div class="card-footer p-3">
          <div class="flex-s-b">
            <div class="d-flex">
              <a href="#" class="btn btn-info">Join</a>
            </div>
            <p class="h4 mt-3 pl-2"> $50<span class="text-muted">/m</span></p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="card mx-2 mt-5 pointer" data-toggle="modal" data-target="#signupmodal03">
        {{-- <img class="card-img-top"src="@asset('images/brand-messaging-kit.svg')" alt=""> --}}
        <h1 class="text-center mt-5"><i class="fas fa-building text-success mr-2"></i></h1>
        <div class="mt-2 card-body">
          <h3>Enterprise</h3>
          <p><span class="badge badge-success mr-2">You keep 100% profit</span> <span class="badge badge-info">Coming Early 2021</span></p>
          <p class="mute">This package is ideal for those with pre-existing communities. If you make more than $3k/m it probably makes sense to go with this package.</p>
          <p class="text-muted"><small>Enterprise will be available sometime in 2021, the small business package won't be available until 2022.</small></p>
          <ul>
            <li class="text-primary">Groups <a href="#groups"><small class="text-muted">What are groups?</small></a></li>
            <li>Subscriptions</li>
            <li>Memberships <span class="mute">(exclusive content)</span></li>
            <li>Products</li>
            <li>LMS</li>
          </ul>
        </div>
        <div class="card-footer p-3">
          <div class="flex-s-b">
            <div class="d-flex">
              <a href="#" class="btn btn-success">Join</a>
            </div>
            <p class="h4 mt-3 pl-2"> $300<span class="text-muted">/m</span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@include('partials.modals.subscribe01')
@include('partials.modals.subscribe02')
@include('partials.modals.subscribe03')
