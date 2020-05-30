<footer class="content-info mt-5">
  <div class="container">
    <div id="footer" class="container my-5 py-5">
      <div class="row">
        <div class="col-sm">
          {{-- @include('svg.logo') --}}
          @include('svg.bonsai.bonsai-logo-03')
          <span class="text-spaced"></span>
        </div>
         <div class="col-sm">
          <ul class="list-unstyled">
            <li><a href="/hydrofera-blue" id="4.2">Courses</a></li>
            <li><a href="clinical-studies">Case Studies</a></li>
            <li><a href="/why-blue/#testimonials">Services</a></li>
           </ul>
        </div>
        <div class="col-sm">
          <ul class="list-unstyled">
            <li><a href="/contact/">Docs</a></li>
            <li><a href="/about/">Blog</a></li>
            <li><a href="/citations/">About</a></li>
          </ul>
        </div>
        <div class="col-sm">
          <ul class="list-unstyled">
            <li><a href="/blue-notes/" class="">Podcast</a></li>
            <li><a href="" data-toggle="modal" data-target="#subscribeModal">Subscribe</a></li>
           </ul>
        </div>
        <div class="col-sm">
          <p class="mt-2 mb-0">Follow Us</p>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="https://youtube.com/jackalopemedia" target="_blank"><i class="fab fa-youtube mute"></i></a></li>
            <li class="list-inline-item"><a href="https://www.instagram.com/jackalopetv/" target="_blank"><i class="fab fa-instagram mute"></i></a></li>
            <li class="list-inline-item"><a href="https://github.com/jackalopeio" target="_blank"><i class="fab fa-github mute"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="text-center my-5">
      <p class="mute mb-0">
        <small>
          <a href="/privacy-policy">Privacy & Terms</a>
          © {{ get_bloginfo('name', 'display') }} | All rights reserved
          @php echo date("Y"); @endphp
        </small>
      </p>
      <small class="smaller text-center mute">* Digital Ocean & Gravity Forms paid products not included</small>
    </div>
  </div>
  <div class="flex-c-c my-5">
    @include('svg.logo')
  </div>
</footer>
