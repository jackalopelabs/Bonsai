<header class="banner fixed-top py-3" id="nav" style="background: rgba(255, 255, 255, 0.98); box-shadow: 0 15px 35px rgba(50, 50, 93, 0.025), 0 5px 15px rgba(0, 0, 0, 0.025);">
  <div class="mx-5 flex-s-b-c">
    <a class="brand" href="{{ home_url('/') }}">
      @include('svg.logo')
    </a>

    <div class="">
      <div class="menu flex-c-c">
        <div class="nav-md row">
          <ul id="menu-primary-nav" class="nav hidden-xs-flex">
            <li class="pt-0"><a href="/courses">Courses</a></li>
            <li class="pt-0"><a href="/docs">Docs</a></li>
            <li class="pt-0"><a href="/podcast">Podcast</a></li>
          </ul>
          {{-- <a href="" class="btn btn-sm btn-success px-3 ml-3 text-white" style="padding-top: 10px !important;" data-toggle="modal" data-target="#remindModal">
            Download<i class="fas fa-download ml-2"></i>
          </a> --}}
          <div class="dropdown menu-item menu-studies ml-3 show">
            <a class="nav-link clickable btn btn-sm btn-success text-white hidden-xs" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              Download
              <i class="fas fa-download ml-2"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
              <a class="dropdown-item" href="#">project-bonsai.zip</a>
              <a class="dropdown-item" href="#">bonsai-theme.zip</a>
              <a class="dropdown-item" href="#">leaf.zip</a>
            </div>
          </div>
          <button class="mobile-menu flex-col-c p-3 ml-2 show-xs" data-toggle="modal" data-target="#navModal">•••</button>
        </div>
      </div>
    </div>
  </div>
</header>

<div id="navCornerCta" class="mt-5 fixed-bottom mr-4 hidden-xs" style="left: inherit;">
  <div class="mb-5 ml-5">
    <div class="text-center card active ml-5 pt-2 pb-1" id="timer" style="">
        <div id="days"></div>
        <div id="hours"></div>
        <div id="minutes"></div>
        <div id="seconds"></div>
    </div>
    <div class="mt-2">
      <small class="badge badge-light uppercase text-muted float-right" style="">Ends June 30th </small>
    </div>
    <a href="" class="btn btn-sm btn-success px-4 py-2 mt-2" data-toggle="modal" data-target="#enrollModal">
      Enroll for Free
      <i class="fas fa-arrow-right ml-1"></i>
    </a>
  </div>
</div>
