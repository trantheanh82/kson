"use strict";
! function(t) {
  t.fn.scrollAnimate = function(e) {
    var n = t.extend({
        startAnimation: "animated"
      }, e),
      i = this,
      s = {
        elements: [],
        _between: function(t, e, n) {
          return t >= e && n >= t
        },
        onScroll: function(e) {
          for (var i = this.elements.length, s = parseInt(t(window).height()), o = parseInt(t(window).scrollTop()), a = s + o, l = 0; i > l; l++) {
            var r = this.elements[l].elem;
            if (this._between(this.elements[l].offset, o, a) && !r.hasClass(n.startAnimation)) {
              var h = this.elements[l].animation;
              r.removeClass().addClass(h + " " + n.startAnimation)
            }
          }
        },
        initialize: function() {
          for (var e = t(i).size(), n = 0; e > n; n++) {
            var s = t(i).eq(n),
              o = (s.height(), s.offset().top),
              a = {
                elem: s,
                offset: o,
                animation: s.attr("data-animate")
              };
            this.elements.push(a)
          }
          this.onScroll(), this.initScroll()
        },
        initScroll: function() {
          t(document).on("scroll", this.onScroll.bind(this))
        }
      };
    s.initialize()
  }
}(jQuery);
