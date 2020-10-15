<!-- Modal -->
<div id="enrollNow">
  <div class="modal fade mt-5" id="consultModal" tabindex="-1" role="dialog" aria-labelledby="consultModalLabel" aria-hidden="true">
    <div class="modal-dialog pb-5" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Consult Now <i class="mdi mdi-arrow-right mute ml-2"></i></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
          <small>Please select your consultant, and amount of the amount of time.</small>
          @php echo do_shortcode('[gravityform id="5" title="false" description="false"]'); @endphp
          {{-- @yield('content') --}}
        </div>

        <a ahref="#" class="pointer text-center mb-2" data-dismiss="modal" aria-label="Close">
          <span class="uppercase mute smaller" aria-hidden="true">No thanks</span>
        </a>

      </div>
    </div>
  </div>
</div>
