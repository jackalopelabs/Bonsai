<!-- Modal -->
<div id="courseModal">
  <div class="modal fade mt-5" id="pitchKitModal" tabindex="-1" role="dialog" aria-labelledby="pitchKitModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        {{-- <div class="modal-header">
          <h3>Full Screen</h3>
          <p><span class="badge badge-secondary mr-2">23 videos</span> <small class="text-muted">4 hours</small></p>
        </div> --}}
        <div class="modal-body">
          <div class="" id="accordion">
            <div class="card" style="min-width: 420px;">
              <div class="nav-bar flex-s-b">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab">
                      <i class="fas fa-book fa-xs mr-2" aria-hidden="true"></i>
                      <small class="hidden-md-down text-muted">Dashboard</small>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab2" role="tab">
                      <i class="fas fa-vr-cardboard fa-xs mr-2" aria-hidden="true"></i>
                      <small class="hidden-md-down text-muted">Classroom</small>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab3" role="tab">
                      <i class="fas fa-comment-alt fa-xs mr-2" aria-hidden="true"></i>
                      <small class="hidden-md-down text-muted">Discussion</small>
                    </a>
                  </li>
                  {{-- <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab4" role="tab">
                      <i class="fas fa-shopping-bag fa-xs mr-2" aria-hidden="true"></i>
                      <small class="hidden-md-down text-muted">Events</small>
                    </a>
                  </li> --}}
                </ul>
                <div class="float-right flex-c-c">
                  {{-- <a class="flex-col-c ml-2 text-white btn" data-toggle="modal" data-target="#navModal" style="padding:4% 1rem 0;">•••</a> --}}
                  <h5><i class="fab fa-instagram text-muted mt-2 mr-2"></i></h5>
                </div>
              </div>

              <!-- Tab panes -->
              <div class="tab-content p-4-lg">

                <!--   Tab1 -->
                <div class="tab-pane active" id="tab1" role="tabpanel">
                  @include('partials.groups.instagram.tab1')
                </div>
                <!--   Tab1 -->

                <!--   Tab2 -->
                <div class="tab-pane" id="tab2" role="tabpanel">
                  @include('partials.groups.instagram.tab2')
                </div>
                <!--   Tab2 -->

                <!--   Tab3 -->
                <div class="tab-pane" id="tab3" role="tabpanel">
                  @include('partials.groups.instagram.tab3')
                </div>
                <!--   Tab3 -->

                {{-- Tab4 --}}
                {{-- <div class="tab-pane" id="tab4" role="tabpanel">
                  @include('partials.groups.instagram.tab4')
                </div> --}}
                {{-- /Tab4 --}}

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</div>
