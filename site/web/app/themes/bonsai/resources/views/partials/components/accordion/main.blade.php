<div class="container py-5">
  {{-- <h1><i class="mdi mdi-chart-gantt flex-c-c"></i></h1> --}}
  <h3 class="mt-3 text-center">Courses</h3>
  <p class="text-muted text-center mb-5-lg">Follow along while we create this exact website</p>
  <div class="row">
    <div class="col-lg mt-5 pt-5-lg hidden-xs">
      <div class="img-fluid text-center d-none d-lg-block d-xl-block px-5">
        @include('svg.flowchart-v02')
      </div>
    </div>
    <div class="col-lg pt-5-lg">
      @include('partials.components.accordion.accordion')
      <div class="mt-5">
        <h4 href="javascript:void(0);"><span class="text-muted">Early Birds</span> Get Pro Access</h4>
        <p class="mb-0">In coming months, more courses and products will be added. Some will go behind a pay wall.</p>
        <p class="mute">Enroll now to lock in legacy pricing.</p>
        <div class="row mt-4">
          <div class="col-md-12 col-sm-6 col-lg-6">
            <div class="card text-center mb-3">
              <div class="card-body">
                <h2>2</h2>
                <h6 class="uppercase"><small>Courses</small></h6>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-sm-6 col-lg-6">
            <div class="card text-center bg-dark">
              <div class="card-body text-white ">
                <h2>9</h2>
                <h6 class="uppercase"><small>Lessons</small></h6>
              </div>
            </div>
          </div>
        </div>
        {{-- <p class="mute text-right"><small><i>Project files in: Sketch, XD, Github, etc.</i></small></p> --}}
        <button class="btn btn-lg btn-primary text-white px-5" data-toggle="modal" data-target="#enrollModal">
          Enroll now
          <i class="fas fa-arrow-right ml-2"></i>
        </button>
        <small class="mute ml-2" data-toggle="tooltip" data-placement="right" title="$3-5/m to help support.">So.. <span class="underline">what's the catch?</span></small>
      </div>
    </div>
  </div>
</div>
