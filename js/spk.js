
(function(){

	'use strict';

	var slider = document.getElementById('slider');

	if (slider) {
		var Slideshow = {
			slider: slider,
			skiplinks: document.getElementById('skiplinks').getElementsByTagName('a'),

			init: function()
			{
				this.skiplinks[0].className = 'selected';

				if (document.addEventListener) {
					this.slider.addEventListener('click', this.slide, false);

					var h3 = this.slider.getElementsByTagName('h3')[0];
					h3.addEventListener('click', function(e){
						var stage = document.getElementById('stage');
						stage.className = stage.className === 'slider' ? 'teamshow' : 'slider';
					}, false);

				} else if (document.attachEvent) {
					this.slider.attachEvent('onclick', this.slide);
				}

				return this;
			},

			slide: function(event)
			{
				Slideshow.slider.scrollLeft = 0;

				// Fix target property, if necessary
				if (!event.target) { event.target = event.srcElement || document; }

				// check if target is a textnode (Safari)
				if (event.target.nodeType === 3) { event.target = event.target.parentNode; }

				// if preventDefault exists run it on the original event
				if (event.preventDefault) {
					event.preventDefault();
				// otherwise set the returnValue property of the original event to false (IE)
				} else {
					event.returnValue = false;
				}

				if (event.target.nodeName === 'A') {
					var a = event.target;
					var targetId = a.getAttribute('href').substr(1);
					var target = document.getElementById(targetId);

					Slideshow.slider.getElementsByTagName('ul')[0].style.left = (target.offsetLeft * -1) + 'px';

					a.blur();

					for (var i = Slideshow.skiplinks.length - 1; i >= 0; i--) {
						if (Slideshow.skiplinks[i].href === a.href) {
							Slideshow.skiplinks[i].className = 'selected';
						} else {
							Slideshow.skiplinks[i].removeAttribute('class');
						}
					};
				}
			}

		}.init();
	}

})();