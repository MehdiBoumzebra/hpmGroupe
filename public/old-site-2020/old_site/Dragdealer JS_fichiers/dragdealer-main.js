window.onload = function()
{
	// Simple slider
	
	new Dragdealer('simple-slider');
	
	// Vertical
	
	var mask = document.getElementById('scroll-mask');
	var content = document.getElementById('scroll-content');
	
	new Dragdealer('scroll-bar',
	{
		horizontal: false,
		vertical: true,
		yPrecision: content.offsetHeight,
		animationCallback: function(x, y)
		{
			var margin = y * (content.offsetHeight - mask.offsetHeight);
			content.style.marginTop = String(-margin) + 'px';
		}
	});
	
	// Magnifier
	
	var text = document.getElementById('magnifying-text');
	
	new Dragdealer('magnifier',
	{
		steps: 6,
		snap: true,
		animationCallback: function(x, y)
		{
			text.style.fontSize = String(12 + x * 24) + 'px';
		}
	});
	
	// Slideshow
	
	var menuWrapper = document.getElementById('slideshow-menu-wrapper');
	var cursor = document.getElementById('slideshow-menu-cursor');
	
	var slideshow = new Dragdealer('slideshow',
	{
		steps: 4,
		loose: true,
		animationCallback: function(x, y)
		{
			var top = x * (menuWrapper.offsetHeight - cursor.offsetHeight);
			cursor.style.top = String(top) + 'px';
		}
	});
	
	document.getElementById('slideshow-photo-1').onclick = function()
	{
		slideshow.setStep(1);
		return false;
	}
	document.getElementById('slideshow-photo-2').onclick = function()
	{
		slideshow.setStep(2);
		return false;
	}
	document.getElementById('slideshow-photo-3').onclick = function()
	{
		slideshow.setStep(3);
		return false;
	}
	document.getElementById('slideshow-photo-4').onclick = function()
	{
		slideshow.setStep(4);
		return false;
	}
	
	// Map
	
	var canvasMask = new Dragdealer('canvas-mask', { vertical: true, steps: 2, loose: true });
	
	document.getElementById('canvas-slide-1').onclick = function()
	{
		canvasMask.setValue(0, 0);
		return false;
	}
	document.getElementById('canvas-slide-2').onclick = function()
	{
		canvasMask.setValue(1, 0);
		return false;
	}
	document.getElementById('canvas-slide-3').onclick = function()
	{
		canvasMask.setValue(0, 1);
		return false;
	}
	document.getElementById('canvas-slide-4').onclick = function()
	{
		canvasMask.setValue(1, 1);
		return false;
	}
}