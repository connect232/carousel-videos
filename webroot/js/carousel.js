$(function() {
    $.fn.carousel.Constructor.prototype.cycle = function (event) {

        if (!event) {
            this._isPaused = false;
          }

          if (this._interval) {
            clearInterval(this._interval)
            this._interval = null;
          }

          if (this._config.interval && !this._isPaused) {

            var $ele = $(this._element).find('.carousel-item-next');
            var newInterval = $ele.data('interval') || this._config.interval;
            this._interval = setInterval(
              (document.visibilityState ? this.nextWhenVisible : this.next).bind(this),
              newInterval
            );
          }
    };

    if ($('#carousel').length > 0) {
        $('#carousel').find('.carousel-item.active video').get(0).play();

        $('#carousel').bind('slide.bs.carousel', function (e) {
            var $this = $(this);

            $this.find('.carousel-item').not('.active').each(function() {
                $(this).find('video').get(0).currentTime = 0;
            });

            setTimeout(function() {
                $this.find('.carousel-item.active video').get(0).play();
            }, 800);
        });
    }
});
