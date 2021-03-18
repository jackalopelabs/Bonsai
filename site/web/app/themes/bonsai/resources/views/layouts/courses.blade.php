<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap container pt-5" role="document">
      <div class="content mt-5">
        <main class="main pt-5">
          @include('partials.components.courses.bundle')
          @include('partials.components.courses.grid')
          @include('partials.components.courses.instructors')
        </main>
      </div>
    </div>
    @include('layouts.modals')
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
  <script src="https://fast.wistia.com/embed/medias/y669pp4nw1.jsonp" defer></script>
  <script src="https://fast.wistia.com/assets/external/E-v1.js" defer></script>
</html>
