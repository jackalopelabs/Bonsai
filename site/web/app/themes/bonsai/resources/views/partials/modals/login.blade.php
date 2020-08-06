<!-- Modal -->
<div id="login">
  <div class="modal fade mt-5" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="subscribeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-sign-in-alt mute mr-2"></i> Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="text-muted">Login to your Bonsai account to access VIP courses and lessons.</p>
          @php dynamic_sidebar('sidebar-footer') @endphp
          <a class="" href="#" data-toggle="modal" data-target="#enrollModal" data-dismiss="modal" aria-label="Close">
            Create an Account
          </a>
        </div>
        <a ahref="#" class="pointer text-center mb-3" data-dismiss="modal" aria-label="Close">
          <span class="uppercase mute smaller" aria-hidden="true">No thanks</span>
        </a>
      </div>
    </div>
  </div>
</div>
