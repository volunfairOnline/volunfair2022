// --- Crea una animación en los números con id counterStats, que se incrementan de cero hasta su valor final en 7 segundos (el valor de duration)
// --- Tomado de https://bootsnipp.com/snippets/o1V0y

var a = 0;
$(window).scroll(function() {

  var oTop = $('#counterStats').offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() > oTop) {
    $('.counter-value').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },

        {

          duration: 7000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            //alert('finished');
          }

        });
    });
    a = 1;
  }

});