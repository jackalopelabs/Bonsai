<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  @php wp_head() @endphp
  <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.5.1/main.min.css' rel='stylesheet' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.5.1/main.min.js'></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          initialDate: '2021-03-07',
          headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
          },
          events: [
            {
              title: 'All Day Event',
              start: '2021-03-01'
            },
            {
              title: 'Long Event',
              start: '2021-03-07',
              end: '2021-03-10'
            },
            {
              groupId: '999',
              title: 'Repeating Event',
              start: '2021-03-09T16:00:00'
            },
            {
              groupId: '999',
              title: 'Repeating Event',
              start: '2021-03-16T16:00:00'
            },
            {
              title: 'Conference',
              start: '2021-03-11',
              end: '2021-03-13'
            },
            {
              title: 'Meeting',
              start: '2021-03-12T10:30:00',
              end: '2021-03-12T12:30:00'
            },
            {
              title: 'Lunch',
              start: '2021-03-12T12:00:00'
            },
            {
              title: 'Meeting',
              start: '2021-03-12T14:30:00'
            },
            {
              title: 'Birthday Party',
              start: '2021-03-13T07:00:00'
            },
            {
              title: 'Click for Google',
              url: 'http://google.com/',
              start: '2021-03-28'
            }
          ]
        });
        calendar.render();
      });

    </script>
  <!-- Hotjar Tracking Code for http://bonsai.jackalope.io -->
  <script>
      (function(h,o,t,j,a,r){
          h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
          h._hjSettings={hjid:1853666,hjsv:6};
          a=o.getElementsByTagName('head')[0];
          r=o.createElement('script');r.async=1;
          r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
          a.appendChild(r);
      })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
  </script>

  <script>
      (function (w,d,s,o,f,js,fjs) {
          w['circleWidget']=o;w[o] = w[o] || function () { (w[o].q = w[o].q || []).push(arguments) };
          js = d.createElement(s), fjs = d.getElementsByTagName(s)[0];
          js.id = o; js.src = f; js.async = 1; fjs.parentNode.insertBefore(js, fjs);
      }(window, document, 'script', 'mw', 'https://jackalopemedia.circle.so/external/widget.js'));

      mw('init', {
        community_public_uid: '064e1b4e',
        brand_color: '#506CF0'
      });

      // Optional: pass in a default space slug and/or post slug
      // mw('setDefaults', {
      //   space_slug: '',
      //   post_slug: ''
      // });
  </script>


</head>
