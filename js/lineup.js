//started w https://stackoverflow.com/questions/4446244/how-to-check-if-any-arabic-character-exists-in-the-string-javascript

jQuery( document ).ready(function() {
	var arabic = /[\u0600-\u06FF]/;
	var hebrew = /[\u0590-\u05FF]/;

	var p = document.querySelectorAll('p,h1,h2,h3,h4,h5,h6,a,li');

	for (i = 0; i < p.length; ++i) {
	 if(arabic.test(p[i].innerHTML) || hebrew.test(p[i].innerHTML)){
	    p[i].style.direction = 'rtl';
	    p[i].style.textAlign = 'right';
	  }
	}


var area = document.querySelector('#comment');
if (area.addEventListener) {
  area.addEventListener('input', function() {
    if(arabic.test(area.value) || hebrew.test(area.value)){
	    area.style.direction = 'rtl';
	    area.style.textAlign = 'right';
	  }
  }, false);
} else if (area.attachEvent) {
  area.attachEvent('onpropertychange', function() {
    if(arabic.test(area.value) || hebrew.test(area.value)){
	    area.style.direction = 'rtl';
	    area.style.textAlign = 'right';
	  }
  });
}
})


