<h4 class="text-primary mb-3">Quick Start</h4>
<ul>
  <li>Download Bonsai</li>
  <li>Create Local Wordpress Site</li>
  <li>Create Staging Website</li>
  <li>Customize Theme</li>
  <li>Deploy to Production</li>
  <li>Learn to create a Smart Site</li>
</ul>

<div class="container py-5" id="accordion">
  <h1><i class="mdi mdi-chart-gantt flex-c-c mt-5"></i></h1>
  <h3 class="mt-3 text-center">The Ultimate Recipe</h3>
  <p class="text-muted text-center mb-5">Follow along while we create a mobile application for The Futur community.</p>
  <div class="row">
    <div class="col-lg mt-3">
      <div class="img-fluid text-center d-none d-lg-block d-xl-block px-5">
        @include('svg.flowchart-v02')
      </div>
    </div>
    <div class="col-lg mt-3">
      <div class="card">
        <div class="nav-bar flex-s-b">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#recipe" role="tab">
                <i class="mdi mdi-playlist-check" aria-hidden="true"></i>
                <span class="hidden-md-down">Recipe</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#resources" role="tab">
                <i class="mdi mdi-briefcase" aria-hidden="true"></i>
                <span class="hidden-md-down">Resources</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#price" role="tab">
                <i class="mdi mdi-credit-card" aria-hidden="true"></i>
                <span class="hidden-md-down">Pricing</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#faq" role="tab">
                <i class="mdi mdi-shovel" aria-hidden="true"></i>
                <span class="hidden-md-down">FAQ</span>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#templates" role="tab">
                <i class="mdi mdi-download" aria-hidden="true"></i>
                <span class="hidden-md-down">Downloads</span>
              </a>
            </li> --}}
          </ul>
        </div>

        <!-- Tab panes -->
        <div class="tab-content p-5">

          <!--   products -->
          <div class="tab-pane active" id="recipe" role="tabpanel">
            @include('partials.components.accordion.recipe')
          </div>
          <!--   products -->

          <!--   keyword ranking -->
          <div class="tab-pane" id="resources" role="tabpanel">
            @include('partials.components.accordion.resources')
          </div>
          <!--   keyword ranking -->

          <!--   process -->
          <div class="tab-pane" id="price" role="tabpanel">
            @include('partials.components.accordion.price')
          </div>
          <!--   process -->

          <!--   tasks -->
          <div class="tab-pane" id="faq" role="tabpanel">
            @include('partials.components.accordion.faq')
          </div>
          <!--   /tasks -->

          <!--   Prices -->
          {{-- <div class="tab-pane" id="downloads" role="tabpanel">
            @include('partials.bonsai.accordion.downloads')
          </div> --}}
          <!--   /Prices -->
        </div>
      </div>
      <div class="mt-5">
        <h4 href="javascript:void(0);">Get Free Access Now</h4>
        <p class="mb-0">Learn the design sprint process from top pros.</p>
        <p class="mute">Get instant access to the sprint workshop we ran with Toi.io</p>
        <div class="row mt-4">
          <div class="col-md-12 col-sm-6 col-lg-6">
            <div class="card text-center mb-3">
              <div class="card-body">
                <h2>6+</h2>
                <h6 class="uppercase"><small>Hours of Video</small></h6>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-sm-6 col-lg-6">
            <div class="card text-white text-center bg-dark">
              <div class="card-body">
                <h2>6</h2>
                <h6 class="uppercase"><small>Project Files</small></h6>
              </div>
            </div>
          </div>
        </div>
        <p class="mute text-right"><small><i>Project files in: Sketch, Photoshop, Github, etc.</i></small></p>
        <button class="btn btn-lg btn-primary text-white px-5" data-toggle="modal" data-target="#myModal">
          <i class="mdi mdi-play mr-2"></i>
          Get Access Now
        </button>
        <small class="mute ml-2" data-toggle="tooltip" data-placement="right" title="Just an email. No spam. Rare future offers.">So.. <span class="underline">what's the catch?</span></small>
        {{-- @include('partials.modals.apply') --}}
      </div>
    </div>
  </div>
</div>
