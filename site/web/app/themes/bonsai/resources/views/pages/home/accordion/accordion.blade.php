<div class="container py-5" id="accordion">
  {{-- <h1><i class="mdi mdi-chart-gantt flex-c-c"></i></h1> --}}
  <h3 class="mt-3 text-center">Courses</h3>
  <p class="text-muted text-center mb-5">Follow along while we create this exact Website</p>
  <div class="row">
    <div class="col-lg mt-5 pt-4">
      <div class="img-fluid text-center d-none d-lg-block d-xl-block px-5">
        @include('svg.flowchart-v02')
      </div>
    </div>
    <div class="col-lg mt-3">
      <div class="card">
        <div class="nav-bar flex-s-b">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab">
                <i class="fas fa-play fa-xs mr-2" aria-hidden="true"></i>
                <small class="hidden-md-down text-muted">Watch</small>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab2" role="tab">
                <i class="fas fa-book fa-xs mr-2" aria-hidden="true"></i>
                <small class="hidden-md-down text-muted">Read</small>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab3" role="tab">
                <i class="fas fa-headphones-alt fa-xs mr-2" aria-hidden="true"></i>
                <small class="hidden-md-down text-muted">Listen</small>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab4" role="tab">
                <span class="hidden-md-down">FAQ</span>
              </a>
            </li> --}}
            {{-- <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab5" role="tab">
                <i class="mdi mdi-download" aria-hidden="true"></i>
                <span class="hidden-md-down">Downloads</span>
              </a>
            </li> --}}
          </ul>
        </div>

        <!-- Tab panes -->
        <div class="tab-content p-5">

          <!--   Tab1 -->
          <div class="tab-pane active" id="tab1" role="tabpanel">
            @include('pages.home.accordion.tab1')
          </div>
          <!--   Tab1 -->

          <!--   Tab2 -->
          <div class="tab-pane" id="tab2" role="tabpanel">
            @include('pages.home.accordion.tab2')
          </div>
          <!--   Tab2 -->

          <!--   Tab3 -->
          <div class="tab-pane" id="tab3" role="tabpanel">
            @include('pages.home.accordion.tab3')
          </div>
          <!--   Tab3 -->

          <!--   Tab4 -->
          {{-- <div class="tab-pane" id="tab4" role="tabpanel">
            @include('pages.home.accordion.tab4')
          </div> --}}
          <!--   /Tab4 -->

          <!--   Tab5 -->
          {{-- <div class="tab-pane" id="tab5" role="tabpanel">
            @include('pages.bonsai.accordion.tab5')
          </div> --}}
          <!--   /Tab5 -->
        </div>
      </div>
      <div class="mt-5">
        <h4 href="javascript:void(0);"><span class="text-muted">Early Birds</span> Get Free Access</h4>
        <p class="mb-0">In coming months, more courses and products will be added. Some will go behind a paywall.</p>
        <p class="mute">Sign up now for legacy access.</p>
        <div class="row mt-4">
          <div class="col-md-12 col-sm-6 col-lg-6">
            <div class="card text-center mb-3">
              <div class="card-body">
                <h2>2+</h2>
                <h6 class="uppercase"><small>Hours of Video</small></h6>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-sm-6 col-lg-6">
            <div class="card text-center bg-dark">
              <div class="card-body text-white ">
                <h2>6</h2>
                <h6 class="uppercase"><small>Project Files</small></h6>
              </div>
            </div>
          </div>
        </div>
        <p class="mute text-right"><small><i>Project files in: Sketch, Photoshop, Github, etc.</i></small></p>
        <button class="btn btn-lg btn-primary text-white px-5" data-toggle="modal" data-target="#myModal">
          <i class="mdi mdi-play mr-2"></i>
          Sign Up
        </button>
        <small class="mute ml-2" data-toggle="tooltip" data-placement="right" title="Just an email, and you get legacy benefits for life.">So.. <span class="underline">what's the catch?</span></small>
        @include('partials.modals.apply')
      </div>
    </div>
  </div>
</div>
