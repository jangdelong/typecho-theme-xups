/**
 * @author Jelon
 * @todo   网站主要js
 * @date   2015-03-03
 */

var JELON = function() {
	var _ = {
		name: 'JELON',
		version: '0.0.1',
		initDropNav: function() {
			var $btnNav = $('#' + this.name + '__btnDropNav'),
				$menu   = $('#' + this.name + '__menu');
			if ($btnNav.length) {
				$btnNav.on('click', function(event) {
					$menu.toggleClass('hidden');
					event.stopPropagation();
				});
			}
		},
		initBackToTop: function() {
			var _this = this;
			$(window).on('scroll resize', function() {
				if (document.documentElement.scrollTop + document.body.scrollTop > 0) {
					$('#' + _this.name + '__backToTop').show();
				} else {
					$('#' + _this.name + '__backToTop').hide();
				}
			});
			$('#' + _this.name + '__backToTop').on('click', function() {
				var Timer = setInterval(GoTop, 10);

				function GoTop() {
					if (document.documentElement.scrollTop + document.body.scrollTop < 1) {
						clearInterval(Timer)
					} else {
						document.documentElement.scrollTop /= 1.1;
						document.body.scrollTop /= 1.1
					}
				}
			});
		},
		init: function() {
			this.initDropNav();
			this.initBackToTop();
		}
	};

	return _;
}();

$(function() {
	JELON.init();
});