// $(window).on('load', function() {
//   $('.preloader').fadeOut().end().delay(400).fadeOut('slow');
// });


function preloader() {
  $(() => {
    setInterval(() => {
      let p = $('#preloader');

      p.css('opacity, 0');
      setInterval(
        () => p.remove(),
        parseInt(p.css('--duration')) * 1000
      );
    }, 1000);
  });
}

preloader ();




$(document).ready(function(){
    $('.sidenav').sidenav();
  });



  $(document).ready(function(){
    $('.parallax').parallax();
  });


  $(document).ready(function(){
    $('select').formSelect();
  });

  $('.datepicker').datepicker({ 
    firstDay: true, 
    format: 'd.mm.yyyy',
    i18n: {
        months: ["Января", "Февраля", "Марта", "Апреля", "Мая", "Июня", "Июля", "Августа", "Сентября", "Октябряь", "Ноября", "Декабря"],
        monthsShort: ["Янв", "Фев", "Мар", "Апр", "Май", "Июнь", "Июль", "Авг", "Сен", "Окт", "Ноя", "Дек"],
        weekdays: ["Воскресенье", "Понедельник","Вторник", "Среда", "Четверг", "Пятница", "Суббота"],
        weekdaysShort: ["Вос","Пон", "Вто", "Сре", "Чет", "Пяи", "Суб"],
        weekdaysAbbrev: ["Вс","Пн", "Вт", "Ср", "Чт", "Пн", "Сб"]
    }
});


$('.timepicker').timepicker({ 
  twelveHour: false, 
  }
);