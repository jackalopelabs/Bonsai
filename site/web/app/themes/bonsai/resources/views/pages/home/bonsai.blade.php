<span class="anchor mt-5" id="freebies"></span>

<div class="container mt-5 pt-5" style="z-index: 100;">
  <div class="flex-s-b mt-5 pt-5">
    <div class="card card-trans active">
      <div class="card-body">
        <h3><small><i class="mdi mdi-download mr-2"></i> Free Resources</small></h3>
      </div>
    </div>
    <div class="card card-trans active pointer" data-toggle="modal" data-target="#freecourseModal">
      <div class="card-body">
        <h3><small><i class="mdi mdi-play mr-2"></i> Free Videos</small></h3>
      </div>
    </div>
  </div>
  <div class="flex-s-b mt-5">
    <div class="card card-trans">
      <div class="card-body">
        <h5>App Prototype</h5>
        <ul class="pl-4 mt-3 mb-0">
          <li>Sketch File</li>
          <li>Invision Prototype</li>
          <li>Xcode Project</li>
        </ul>
      </div>
    </div>
    <div class="">
      <div class="card card-trans pointer" data-toggle="modal" data-target="#freecourseModal">
        <div class="card-body">
          <i class="mdi mdi-play mr-2"></i><small class="mute">Day 1.1: Sprint</small>
        </div>
      </div>
      <div class="card card-trans mt-2 pointer" data-toggle="modal" data-target="#freecourseModal">
        <div class="card-body">
          <i class="mdi mdi-play mr-2"></i><small class="mute">Day 1.2: Sprint</small>
        </div>
      </div>
    </div>
  </div>
  <div class="flex-s-b mt-5">
    <div class="card card-trans">
      <div class="card-body">
        <h5><bold>Prerequisite</bold></h5>
        <ul class="pl-4 mt-3 mb-0">
          <li>Solo Design Sprint</li>
          <li>Research Decks</li>
          <li>Video Walkthrough</li>
        </ul>
      </div>
    </div>
    <div class="">
      <div class="card card-trans pointer" data-toggle="modal" data-target="#freecourseModal">
        <div class="card-body">
          <i class="mdi mdi-play mr-2"></i><small class="mute">Day 2.1: Sprint</small>
        </div>
      </div>
      <div class="card card-trans mt-2 pointer" data-toggle="modal" data-target="#freecourseModal">
        <div class="card-body">
          <i class="mdi mdi-play mr-2"></i><small class="mute">Day 2.2: Sprint</small>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="text-center" id="bonsai" style="margin-top: -440px;">
  @include('svg.bonsai.bonsai')
  {{-- Video Play Button --}}
  <div class="text-success mx-auto" id="bonsai-cta" data-toggle="modal" data-target="#enrollModal">
    <h1 style="font-size: 4.5rem;">
      <i class="mdi mdi-play flex-c-c my-4"></i>
    </h1>
  </div>
  <a class="btn btn-lg btn-primary btn-md btn-round px-5" href="#" data-toggle="modal" data-target="#enrollModal">Get Full Access Now</a>
  <div class="mt-2">
    <a href="#" data-toggle="modal" data-target="#remindModal">
      <span class="text-muted uppercase">
        <i class="mdi mdi-bell-ring mr-2" style="vertical-align: baseline;"></i>
        Remind Me
      </span>
    </a>
  </div>
  {{-- / Video Play Button --}}
</div>
