<!-- Modal -->
<div id="enrollNow">
  <div class="modal fade mt-5" id="enrollModal" tabindex="-1" role="dialog" aria-labelledby="enrollModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header mx-auto">
          <h5 class="modal-title" id="exampleModalLabel">Enroll Now <i class="mdi mdi-arrow-right mute ml-2"></i></h5>
        </div>
        <div class="modal-body text-center">
          {{-- Video --}}
          <div class="wistia_embed wistia_async_y669pp4nw1" style="height:262px;position:relative;width:466px">
            <div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;">
              <img src="https://fast.wistia.com/embed/medias/y669pp4nw1/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" />
            </div>
          </div>
          {{-- /Video --}}
          @php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); @endphp
          {{-- @yield('content') --}}
          <a class="text-center text-dark d-block mx-auto" rel="nofollow" href="https://github.com/jackalopeio/bonsai/archive/master.zip">
            <i class="fas fa-download mr-1"></i>
            Download Bonsai
          </a>

        </div>
        <a ahref="#" class="pointer text-center mb-3" data-dismiss="modal" aria-label="Close">
          <span class="uppercase mute smaller" aria-hidden="true">No thanks</span>
        </a>
      </div>
    </div>
  </div>
</div>
