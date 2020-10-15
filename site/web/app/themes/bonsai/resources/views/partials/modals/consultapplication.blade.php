<!-- Modal -->
<div id="enrollNow">
  <div class="modal fade mt-5" id="consultApplicationModal" tabindex="-1" role="dialog" aria-labelledby="consultApplicationModalLabel" aria-hidden="true">
    <div class="modal-dialog pb-5" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Apply to be a Consultant <i class="mdi mdi-arrow-right mute ml-2"></i></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
          <div class="alert alert-info text-left">Please select your top 3-5 skills below.</div>
          @php echo do_shortcode('[gravityform id="6" title="false" description="false"]'); @endphp
          {{-- @yield('content') --}}
        </div>

        <a ahref="#" class="pointer text-center mb-2" data-dismiss="modal" aria-label="Close">
          <span class="uppercase mute smaller" aria-hidden="true">No thanks</span>
        </a>

      </div>
    </div>
  </div>
</div>
