
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth', 
      events: [

        {
          title: 'Event 1',
          start: '2024-02-23'
        },
        {
          title: 'Event 2',
          start: '2024-02-24'
        }

      ]
    });

    calendar.render(); 
  });

  const hamBurger = document.querySelector("#toggle-btn");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});




