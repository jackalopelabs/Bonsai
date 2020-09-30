// import then needed Font Awesome functionality
import { library, dom } from '@fortawesome/fontawesome-svg-core';
// import { fas } from '@fortawesome/free-solid-svg-icons'
import { faArrowRight, faPlay, faList, faEnvelope, faGraduationCap, faBook, faShoppingBag, faBell, faDownload, faSignInAlt } from '@fortawesome/free-solid-svg-icons'
// import { far } from '@fortawesome/free-regular-svg-icons'
import { faCompass, faQuestionCircle } from '@fortawesome/free-regular-svg-icons'
// import { fab } from '@fortawesome/free-brands-svg-icons'
import { faGithub, faTrello, faSlack, faYoutube, faInstagram, faMedium } from '@fortawesome/free-brands-svg-icons';
// Bonsai Pro will manually add each icon for a performance boost
// See: https://roots.io/guides/how-to-use-font-awesome-5-in-sage/

export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

    // add the imported icons to the library
    // library.add(fas, far, fab);
    library.add(faArrowRight, faPlay, faList, faEnvelope, faGraduationCap, faBook, faShoppingBag, faBell, faDownload, faSignInAlt, faCompass, faQuestionCircle, faGithub, faTrello, faSlack, faYoutube, faInstagram, faMedium);

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

    // Countdown Timer
    function makeTimer() {
      var endTime = new Date('1 October 2020 12:00:00 GMT+06:00');
        endTime = (Date.parse(endTime) / 1000);

        var now = new Date();
        now = (Date.parse(now) / 1000);

        var timeLeft = endTime - now;

        var days = Math.floor(timeLeft / 86400);
        var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
        var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
        var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

        if (hours < '10') { hours = '0' + hours; }
        if (minutes < '10') { minutes = '0' + minutes; }
        if (seconds < '10') { seconds = '0' + seconds; }

        $('#days').html(days + '<span>Days</span>');
        $('#hours').html(hours + '<span>Hours</span>');
        $('#minutes').html(minutes + '<span>Minutes</span>');
        $('#seconds').html(seconds + '<span>Seconds</span>');
    }

      setInterval(function() { makeTimer(); }, 1000);
  },
};
