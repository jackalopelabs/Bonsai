<div class="" id="accordion">

  <small class="badge badge-light">2 Courses</small><small class="badge badge-light ml-3">9 Lessons</small><small class="mute ml-3">More Coming Soon</small>

  <ul class="accordion mb-0">
    <li>
      <a class="toggle card" href="javascript:void(0);">
        <small class="mute uppercase">Quick Start:</small>
        <span class="mr-4">Speed Run</span>
        <div class="float-right d-flex">
          <span class="badge badge-success mr-2 hidden-xs">Free</span>
          <span class="badge badge-light hidden-xs">10:23</span>
        </div>
      </a>
      @include('content.courses.speedrun.main')
    </li>

    <li>
      <a class="toggle card show" href="javascript:void(0);">
        <small class="mute uppercase">Masterclass:</small>
        {{-- <span class="xs-hidden">Full-Stack </span> --}}
        <span class="mr-3">Development</span>
        <div class="float-right d-flex">
          {{-- <span class="badge badge-light mr-3 hidden-xs">$3+</span> --}}
          <span class="badge badge-light hidden-xs">27:45</span>
        </div>
      </a>
      @include('content.courses.masterclass.main')
    </li>

  </ul>
</div>
