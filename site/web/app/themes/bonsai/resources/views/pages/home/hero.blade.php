<div class="hero hero-homepage container flex-col-c flex-c-c mt-5 pt-5">
  {{-- <img class="img-fluid pb-3 mb-md-0 hero-img" src="@asset('images/hero.png')" alt=""> --}}
  <div class="text-c-sm">
    <h6 class="uppercase mute text-spaced pt-5">Project <span class="text-success">Bonsai</span></h6>
    <h1 class="hero-header">Simplified <span class="text-muted">Wordpress Development</span></h1>
    <p class="lead mute">Create this <span class="text-muted">exact website</span> <code class="badge badge-light" style="font-size: 24px;">with one command</code></p>
  </div>
  {{-- <p class="lead mb-0"><small class="uppercase smaller mute"><strong>Join Us</strong> for a Real Time Project this March</small></p> --}}

  {{-- Video Play Button --}}
  <a class="" href="#" data-toggle="modal" data-target="#enrollModal">
    <h1 style="font-size: 4.5rem;">
      <button class="btn btn-sm btn-round" type="button" name="button">
        <i class="fas fa-play mr-2"></i>
        Quick Setup
      </button>
    </h1>
  </a>
  {{-- / Video Play Button --}}

  {{-- <form class="flex-col-c mx-auto">
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control mx-auto" style="max-width:340px;" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
  </form> --}}


  {{-- <div class="mt-4">
    <label class="mute mt-2" for="chart">We've raised <span class="text-success">$19,480</span> of <span class="text-muted">$14,000</span> goal</label>
    <div class="progress" height="40">
      <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
      <div class="progress-bar success-info" role="progressbar" style="width: 12.5%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
      <div class="progress-bar active-stroke" role="progressbar" style="width: 12.5%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
      <div class="progress-bar bg-light-purple" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
      <div class="progress-bar bg-cool-gradient" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <p class="mt-3"><small class="uppercase mute smaller">Funding Goals</small></p>
    <div class="flex-c-c">
      <h6 class="mx-2"><span class="badge bg-success p-2">Tier I: <span class="text-light">$14k</span></span></h6>
      <h6 class="mx-2"><span class="badge active-stroke p-2">Tier II: <span class="text-muted">$24k</span></span></h6>
      <h6 class="mx-2"><span class="badge bg-light-purple p-2">Stretch I: <span class="text-light">$42k</span></span></h6>
      <h6 class="mx-2"><span class="badge bg-cool-gradient p-2">Stretch II: <span class="text-light">$82k</span></span></h6>
    </div>
  </div> --}}

  {{-- <div class="text-center">
    <div class="mb-3">
      <button class="btn btn-lg btn-secondary text-white btn-md btn-round px-5" data-toggle="modal" data-target="#enrollModal">
        Enroll in Masterclass Now
        <small class="badge badge-light ml-2">$250</small>
      </button>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
  </div> --}}

  @include('pages.home.tools')
  {{-- @include('partials.components.alerts.earlybird') --}}
</div>
