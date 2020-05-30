<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    @php(do_action('get_header'))
    @include('pages.home.nav')
    <div class="wrap container pb-5" role="document">
      @include('pages.home.hero')
    </div>
    <div class="wrap container mb-5 pb-5" role="document">
      {{-- @include('pages.home.team') --}}
      {{-- @include('pages.home.cta') --}}
      @include('pages.home.accordion.accordion')
      @include('pages.home.pricing')
      @include('pages.home.bonsai')
      @include('pages.home.faq')
      {{-- @include('pages.home.cards') --}}
      {{-- @include('pages.home.footer') --}}
    </div>
    {{-- @include('pages.home.contributors') --}}

    @php(do_action('get_footer'))
    @include('partials.footer-clean')
    @php(wp_footer())

    @include('partials.modals.home.freecourse')
    @include('partials.modals.home.enroll')
    @include('partials.modals.home.remind')
    @include('partials.modals.home.navmodal')
  </body>
  <script src="https://fast.wistia.com/embed/medias/rgav9axm4z.jsonp" async></script>
  <script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
</html>
