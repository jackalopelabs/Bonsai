<div class="" id="accordion">
  <div class="card" style="min-width: 420px;">
    <div class="nav-bar flex-s-b">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab">
            <i class="fas fa-graduation-cap fa-xs mr-2" aria-hidden="true"></i>
            <small class="hidden-md-down text-muted">Courses</small>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#tab2" role="tab">
            <i class="fas fa-book fa-xs mr-2" aria-hidden="true"></i>
            <small class="hidden-md-down text-muted">Docs</small>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#tab3" role="tab">
            <i class="fas fa-shopping-bag fa-xs mr-2" aria-hidden="true"></i>
            <small class="hidden-md-down text-muted">Buy</small>
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
    <div class="tab-content p-4-lg">

      <!--   Tab1 -->
      <div class="tab-pane active" id="tab1" role="tabpanel">
        @include('content.courses.main')
      </div>
      <!--   Tab1 -->

      <!--   Tab2 -->
      <div class="tab-pane" id="tab2" role="tabpanel">
        @include('partials.components.accordion.tab2')
      </div>
      <!--   Tab2 -->

      <!--   Tab3 -->
      <div class="tab-pane" id="tab3" role="tabpanel">
        @include('partials.components.accordion.tab3')
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
</div>
