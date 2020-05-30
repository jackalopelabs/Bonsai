<!-- Modal -->
<div id="enrollNow">
  <div class="modal fade mt-5" id="enrollModal" tabindex="-1" role="dialog" aria-labelledby="enrollModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header mx-auto">
          <h5 class="modal-title" id="exampleModalLabel">Enroll Now <i class="mdi mdi-arrow-right mute ml-2"></i></h5>
          <p></p><small>We'll do something</small>
        </div>
        <div class="modal-body">
          {{-- Video --}}
          <div class="wistia_responsive_padding mb-4" style="padding:56.25% 0 0 0;position:relative;">
            <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
              <div class="wistia_embed wistia_async_rgav9axm4z videoFoam=true" style="height:100%;position:relative;width:100%">
                <div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;">
                  <img src="https://fast.wistia.com/embed/medias/rgav9axm4z/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" />
                </div>
              </div>
            </div>
          </div>
          {{-- /Video --}}
          @php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); @endphp
          {{-- @yield('content') --}}

        </div>
        <a ahref="#" class="pointer text-center mb-3" data-dismiss="modal" aria-label="Close">
          <span class="uppercase mute smaller" aria-hidden="true">No thanks</span>
        </a>
      </div>
    </div>
  </div>
</div>
