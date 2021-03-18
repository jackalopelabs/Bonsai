<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    @php(do_action('get_header'))
    @include('partials.header')
    <div class="wrap container mb-5 pb-5" role="document">
      @include('partials.hero')
      @include('partials.grid')
      @include('partials.demo')
    </div>
    @include('layouts.modals')
    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())
  </body>
  <script src="https://fast.wistia.com/embed/medias/y669pp4nw1.jsonp" defer></script>
  <script src="https://fast.wistia.com/assets/external/E-v1.js" defer></script>
</html>
