<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    @php(do_action('get_header'))
    @include('pages.home.nav')
    <div class="wrap container mb-5 pb-5" role="document">
      @include('pages.home.hero')
      {{-- @include('partials.components.alerts.components') --}}
      @include('pages.home.accordion.accordion')
      {{-- <div class="coming-soon">
        @include('pages.home.team')
        @include('pages.home.cta')
        @include('pages.home.pricing')
        @include('pages.home.cards')
        @include('pages.home.bonsai')
        @include('pages.home.faq')
      </div> --}}
      @include('pages.home.faq-form')
    </div>

    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())

    @include('pages.home.modals')
  </body>
  <script src="https://fast.wistia.com/embed/medias/rgav9axm4z.jsonp" async></script>
  <script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
</html>
