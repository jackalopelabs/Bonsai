<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap container pt-5" role="document">
      <div class="content row mt-5">
        <main class="main col-lg-8 pt-5">
          @yield('content')
        </main>
        <div class="col-lg-4 pt-5">
          @include('partials.components.accordion.accordion')
        </div>
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
