<!-- NavModal -->
<!-- Modal -->
<div class="modal fade" id="navModal" tabindex="-1" role="dialog" aria-labelledby="navModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header flex-s-b">
        {{-- <a href="/login"><small class="uppercase mute"><i class="mdi mdi-account"></i> Login</small></a> --}}
        <button type="button" class="close float-right" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul id="menu-primary-nav" class="list-unstyled text-right">
          <li class="pt-0"><a href="/courses">Courses</a></li>
          <li class="pt-0"><a href="/docs">Docs</a></li>
          <li class="pt-0"><a href="/podcast">Podcast</a></li>
          <li>
            <a class="nav-link clickable btn btn-sm btn-success text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              Download
              <i class="fas fa-download ml-2"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
