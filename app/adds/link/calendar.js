document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'timeGridWeek',
      events: [
        {
          title: "Montly business club meeting",
          start: '2023-04-24T09:00:00',
          end: '2023-04-24T15:00:00',
          color: 'red'
        }, {
          title: "Conference 'All things investment'",
          start: '2023-04-24',
          end: '2023-04-28',
          color: 'blue'
        }, {
          title: "Talk business with Elon Musk",
          start: '2023-04-25T10:00:00',
          end: '2023-04-25T13:00:00',
          color: 'cyan'
        }, {
          title: "Oil market prospects with Haitham al-Ghais, OPEC Chief Secretery",
          start: '2023-04-25T14:00:00',
          end: '2023-04-25T17:00:00',
          color: 'indigo'
        }, {
          title: "Revolutionary methods of investment",
          start: '2023-04-26T09:00:00',
          end: '2023-04-26T12:00:00',
          color: 'blue'
        }, {
          title: "Time management ≠ success, with John Cena",
          start: '2023-04-26T15:00:00',
          end: '2023-04-26T18:00:00',
          color: 'skyblue'
        }, {
          title: "New industy tendencies, The Zucc CEO of Meta",
          start: '2023-04-27T13:00:00',
          end: '2023-04-27T18:00:00',
          color: 'black'
        }, {
          title: "Interview with industry giants - Amazon, Google, Microsoft, Apple",
          start: '2023-04-28T10:00:00',
          end: '2023-04-28T18:30:00',
          color: '#321562'
        }, {
          title: "Meeting STEM 'Current trends'",
          start: '2023-04-30T09:30:00',
          end: '2023-04-30T18:30:00',
          color: 'gray'
        }, {
          title: "Club's cafeteria pizza friday",
          start: '2023-05-02T08:30:00',
          end: '2023-05-02T18:00:00',
          color: 'rainbow'
        }
      ]},
    );
    calendar.render();
  });