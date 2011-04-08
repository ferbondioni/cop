		<div data-role="footer" id="footer" class="">
			<p>This site was <em><strong>specially</strong></em> designed for mobile.</p>
		</div> 
	</div>

  <!-- Javascript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
	<script src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
 	<script>!window.jQuery && document.write(unescape('%3Cscript src="js/libs/jquery-1.4.2.js"%3E%3C/script%3E'))</script>
  
	<script src="http://code.jquery.com/mobile/1.0a4/jquery.mobile-1.0a4.min.js"></script>
  
 	<!-- scripts concatenated and minified via ant build script-->
 	<script src="js/plugins.js"></script>
 	<script src="js/script.js"></script>
 	<!-- end concatenated and minified scripts-->
		<style type="text/css">
		#slider img { display: none }
		</style>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js">></script>
		<script type="text/javascript" src="http://malsup.github.com/chili-1.7.pack.js"></script>
		<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.2.72.js"></script>
		<script type="text/javascript">
		$(function() {
		    $('#slider img:first').fadeOut(1000, function() {
		        $('#slider').cycle();
		    });
		});
		</script>
	<script>
	// var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
	//   (function(d, t) {
	//    var g = d.createElement(t),
	//        s = d.getElementsByTagName(t)[0];
	//    g.async = true;
	//    g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	//    s.parentNode.insertBefore(g, s);
	//   })(document, 'script');
	//  
	</script>
  
</body>
</html>