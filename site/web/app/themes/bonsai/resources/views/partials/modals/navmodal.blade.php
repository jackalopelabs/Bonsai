<!-- NavModal -->
<!-- Modal -->
<div class="modal fade" id="navModal" tabindex="-1" role="dialog" aria-labelledby="navModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header flex-s-b">
        <a href="/login"><small class="uppercase mute"><i class="mdi mdi-account"></i> Login</small></a>
        <button type="button" class="close float-right" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </div>
    </div>
  </div>
</div>
