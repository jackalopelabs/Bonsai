<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    @php(do_action('get_header'))
    @include('pages.dev.nav')
    <div class="wrap container pb-5" role="document">
      @include('pages.dev.hero')
    </div>
    <div class="wrap container mb-5 pb-5" role="document">
      {{-- @include('pages.dev.team') --}}
      @include('pages.dev.accordion.accordion')
      {{-- @include('pages.dev.pricing') --}}
      {{-- @include('pages.dev.bonsai') --}}
      @include('pages.dev.cta')
      @include('pages.dev.faq')
      {{-- @include('pages.dev.cards') --}}
    </div>
    {{-- @include('pages.dev.contributors') --}}

    @php(do_action('get_footer'))
    @include('partials.footer-clean')
    @php(wp_footer())

    @include('partials.modals.home.freecourse')
    @include('partials.modals.home.enroll')
    @include('partials.modals.home.remind')
    @include('partials.modals.home.navmodal')
  </body>
  {{-- <script src="https://fast.wistia.com/embed/medias/rgav9axm4z.jsonp" async></script>
  <script src="https://fast.wistia.com/assets/external/E-v1.js" async></script> --}}
</html>
