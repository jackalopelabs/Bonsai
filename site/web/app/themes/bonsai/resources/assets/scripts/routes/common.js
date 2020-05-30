// import then needed Font Awesome functionality
import { library, dom } from '@fortawesome/fontawesome-svg-core';
import { fas } from '@fortawesome/free-solid-svg-icons'
import { far } from '@fortawesome/free-regular-svg-icons'
import { fab } from '@fortawesome/free-brands-svg-icons'
// Bonsai Pro will manually add each icon for a performance boost
// See: https://roots.io/guides/how-to-use-font-awesome-5-in-sage/

export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

    // add the imported icons to the library
    library.add(fas, far, fab);

    // tell FontAwesome to watch the DOM and add the SVGs when it detects icon markup
    dom.watch();

    // accordion
    $('.toggle').click(function(e) {
      e.preventDefault();

      var $this = $(this);

      if ($this.next().hasClass('show')) {
          $this.next().removeClass('show');
          $this.next().slideUp(350);
      } else {
          $this.parent().parent().find('li .inner').removeClass('show');
          $this.parent().parent().find('li .inner').slideUp(350);
          $this.next().toggleClass('show');
          $this.next().slideToggle(350);
      }
    });

    // Tooltips Enabled
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  },
};
