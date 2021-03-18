<!-- Modal -->
<div id="courseModal">
  <div class="modal fade mt-5" id="fullScreenModal" tabindex="-1" role="dialog" aria-labelledby="fullScreenModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3>Instagram</h3>
          <p><span class="badge badge-secondary mr-2">23 videos</span> <small class="text-muted">4 hours</small></p>
        </div>
        <div class="modal-body">
          <div class="" id="accordion">
            <div class="card" style="min-width: 420px;">
              <div class="nav-bar flex-s-b">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tab1-fs" role="tab">
                      <i class="fas fa-book fa-xs mr-2" aria-hidden="true"></i>
                      <small class="hidden-md-down text-muted">Topics</small>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab2-fs" role="tab">
                      <i class="fas fa-graduation-cap fa-xs mr-2" aria-hidden="true"></i>
                      <small class="hidden-md-down text-muted">Virtual Space</small>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab3-fs" role="tab">
                      <i class="fas fa-shopping-bag fa-xs mr-2" aria-hidden="true"></i>
                      <small class="hidden-md-down text-muted">Resources</small>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab4-fs" role="tab">
                      <i class="fas fa-shopping-bag fa-xs mr-2" aria-hidden="true"></i>
                      <small class="hidden-md-down text-muted">Events</small>
                    </a>
                  </li>
                </ul>
              </div>

              <!-- Tab panes -->
              <div class="tab-content p-4-lg">

                <!--   Tab1 -->
                <div class="tab-pane active" id="tab1-fs" role="tabpanel">
                  @include('partials.groups.instagram.tab1')
                </div>
                <!--   Tab1 -->

                <!--   Tab2 -->
                <div class="tab-pane" id="tab2-fs" role="tabpanel">
                  @include('partials.groups.instagram.tab2')
                </div>
                <!--   Tab2 -->

                <!--   Tab3 -->
                <div class="tab-pane" id="tab3-fs" role="tabpanel">
                  @include('partials.groups.instagram.tab3')
                </div>
                <!--   Tab3 -->

                {{-- Tab4 --}}
                <div class="tab-pane" id="tab4-fs" role="tabpanel">
                  @include('partials.groups.instagram.tab4')
                </div>
                {{-- /Tab4 --}}

              </div>
            </div>
          </div>
        </div>

        <a ahref="#" class="pointer text-center mb-3" data-dismiss="modal" aria-label="Close">
          <span class="uppercase mute smaller" aria-hidden="true">Back</span>
        </a>
      </div>
    </div>

  </div>
</div>
