/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

    // Use this variable to set up the common and page specific functions. If you
    // rename this variable, you will also need to rename the namespace below.
    var Castize = {
      // All pages
      'global': {
        init: function() {
          // JavaScript to be fired on all pages

          // toggles hamburger and nav open and closed states
          var removeClass = true;
          $(".hamburger").click(function () {
            $(".hamburger").toggleClass('is-active');
            $(".sideNav").toggleClass('sideNav-open');
            $(".sideNavBody").toggleClass('sideNavBody-push');
            removeClass = false;
          });

          $(".sideNav").click(function() {
            removeClass = false;
          });

          $("html").click(function () {
            if (removeClass) {
              $(".hamburger").removeClass('is-active');
              $(".sideNav").removeClass('sideNav-open');
              $(".sideNavBody").removeClass('sideNavBody-push');
            }
            removeClass = true;
          });

          // Scroll to top icon
          $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
              $('.scrollup').fadeIn();
            } else {
              $('.scrollup').fadeOut();
            }
          });

          // Scroll to top action
          $('.scrollup').click(function () {
            $("html, body").animate({
              scrollTop: 0
            }, 600);
            return false;
          });

        },
        finalize: function() {
          // JavaScript to be fired on all pages, after page specific JS is fired
        }
      }
    };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Castize;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire global init JS
      UTIL.fire('global');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire global finalize JS
      UTIL.fire('global', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
