<!-- Modal -->
<div id="enrollNow">
  <div class="modal fade mt-5" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="subscribeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-envelope mute mr-2"></i> Subscribe for Updates</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="text-muted">Get weekly and monthly updates about Project Bonsai</p>
          @php echo do_shortcode('[gravityform id="4" title="false" description="false"]'); @endphp
          {{-- Add @yield content if you need to use AJAX in a Gravity Form --}}
          {{-- @yield('content') --}}
        </div>
        <a ahref="#" class="pointer text-center mb-3" data-dismiss="modal" aria-label="Close">
          <span class="uppercase mute smaller" aria-hidden="true">No thanks</span>
        </a>
      </div>
    </div>
  </div>
</div>
