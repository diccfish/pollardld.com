// Add a script element as a child of the body
 function downloadJSAtOnload() {
 	// Button Click
	$('#submit-button').on('click', function() {
		$(this).addClass('progress');
	});

	// Counter
	var s1 = 92872189;

	function pad (val) { 
	  return val > 9 ? val : val; 
	}

	setInterval( function() {
	    $('#set1').html( pad(++s1%99999999) );
	}, 1000);

	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-36735760-1', 'pollardld.com');
	ga('send', 'pageview');
 }

 // Check for browser support of event handling capability
 if (window.addEventListener)
 window.addEventListener("load", downloadJSAtOnload, false);
 else if (window.attachEvent)
 window.attachEvent("onload", downloadJSAtOnload);
 else window.onload = downloadJSAtOnload;