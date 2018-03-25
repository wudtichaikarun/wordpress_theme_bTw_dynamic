$(function() {
  // Cache the window object
  var $window = $(window)

  // Parallax background efffect
  $('section[data-type="background"]').each(function() {
    var $bgobj = $(this)

    $(window).scroll(function() {
      /* scroll the bg at var speed 
      the yPos is a negative value because we're scolling it UP */
      var yPos = -($window.scrollTop() / $bgobj.data('speed'))

      // Put together out final background position
      var coords = '50%' + yPos + 'px'

      // Move the background
      $bgobj.css({ backgroundPosition: coords })
    })
  })
})