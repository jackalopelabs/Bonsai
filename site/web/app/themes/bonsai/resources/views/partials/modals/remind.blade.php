<!-- Modal -->

<div id="remindMe">
  <div class="modal fade mt-5" id="remindModal" tabindex="-1" role="dialog" aria-labelledby="remindModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <div class="mx-auto">
            <h5 class="modal-title" id="exampleModalLabel"><i class="mdi mdi-bell-ring mute mr-2"></i> Get Weekly Reminders</h5>
          </div>
        </div>
        <div class="modal-body">
          @php echo do_shortcode('[gravityform id="13" title="false" description="false"]'); @endphp
        </div>
        <a ahref="#" class="text-center pointer mb-3" data-dismiss="modal" aria-label="Close">
          <span class="uppercase mute smaller" aria-hidden="true">No thanks</span>
        </a>
      </div>
    </div>
  </div>
</div>
