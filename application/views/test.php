<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>The Robotics CLUB | SRM UNIVERSITY</title>

<?= link_tag(base_url().'css/style.css'); ?>
<?= link_tag(base_url().'blueprint/ie.css'); ?>
<?= link_tag(base_url().'blueprint/screen.css'); ?>
<link rel="shortcut icon" href="#" />

			
	<script type="text/javascript">//<![CDATA[
	// Google Analytics for WordPress by Yoast v4.06 | http://yoast.com/wordpress/google-analytics/
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount','UA-382389-1']);
	_gaq.push(['_trackPageview']);
	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	// End of Google Analytics for WordPress by Yoast v4.0
	//]]></script> 
<link rel='stylesheet' id='wp-pagenavi-css'  href='http://www.gomedia.us/wp-content/themes/gomedia_wp_v1.0/pagenavi-css.css?ver=2.70' type='text/css' media='all' /> 
<script type='text/javascript' src='http://www.gomedia.us/wp-includes/js/jquery/jquery.js?ver=1.4.2'></script> 
<script type='text/javascript' src='http://www.gomedia.us/wp-includes/js/jquery/ui.core.js?ver=1.7.3'></script> 
<script type='text/javascript' src='http://www.gomedia.us/wp-content/plugins/pods/ui/js/pods.ui.js?ver=3.0.4'></script> 
<script type='text/javascript' src='http://www.gomedia.us/wp-content/themes/gomedia_wp_v1.0/js/ui.accordion.js?ver=3.0.4'></script> 
<script type='text/javascript' src='http://www.gomedia.us/wp-content/themes/gomedia_wp_v1.0/js/thumbslide.js?ver=3.0.4'></script> 
<script type='text/javascript' src='http://www.gomedia.us/wp-content/themes/gomedia_wp_v1.0/js/jquery.dimensions.js?ver=3.0.4'></script> 
<script type='text/javascript' src='http://www.gomedia.us/wp-content/themes/gomedia_wp_v1.0/js/jquery.tooltip.js?ver=3.0.4'></script> 
<script type='text/javascript' src='http://www.gomedia.us/wp-content/themes/gomedia_wp_v1.0/js/jquery.bgiframe.js?ver=3.0.4'></script> 
<script type="text/javascript">

<!--

	jQuery(document).ready(function($) {

		$("#accordion").accordion({ header: "h2"});

	});

-->	

</script>

<script type="text/javascript">

// <![CDATA[

	jQuery(document).ready(function($) {

		//$("#accordion").accordion( 'activate' , 1 );

		

		// show/hide title	

		// note: animation queue issues on rapid enter/leave

		$('.thumb', this ).mouseenter(function() {

			$('.thumbProjectName', this).slideDown('fast');

		});

		

		$('.thumb', this ).mouseleave(function() {

			$('.thumbProjectName', this).slideUp('fast');

		});



		// make title clickable

		$('.thumbProjectName', this).click(function() {

      var url = $(this).find("a").attr('href');

      window.location = url; 			

		});

		

		$(function() {

			if($('#nextbackarrows')){

				$('#nextbackarrows li a').tooltip({

					track: true,

					delay: 0,

					showURL: false,

					extraClass: "right"

				});

			}

		});

		

	});

// ]]>

</script>

<style type="text/css"> 
body{background: #303030 no-repeat center top;
	color: #fff;
	font: normal normal normal 0.8em Arial, sans-serif;}
</style> 
</head>

	
	
	<div class="nav">

	<div class="navWrap">

			<div class="nav_logo"><img src=<?=base_url()."images/logo_nav.png"?>></div>

		
		<div id="mainNav">

			
			<div id="accordion">

				
				<li><a href=""><img src=<?=base_url()."images/home_n.png"?>></a></li>
				
					
				<li><a href="home/news" id="news"><img src=<?=base_url()."images/news_n.png"?>></a></h2></li>
				<script>$('#news').click(function(){('#newscontent').show();});</script>
				
  				<div><li><h2><a href="home/exhibitions"><img src=<?=base_url()."images/exhibitions_n.png"?>></a></h2>
				<ul>

						<li><a href="#"><h5><img src=<?=base_url()."images/pgallery_n.png"?>></a></li>
						<li><a href="#"><img src=<?=base_url()."images/videos_n.png"?>></a></li>

				</ul>
				</div>
				
				<div>
				<h2><li><a href="home/groundzero" ><img src=<?=base_url()."images/gzero_n.png"?>></a></li></h2>
				
				<ul>

				<li><a href="#"><h5><img src=<?=base_url()."images/constructa_n.png"?>><h5></a></li>
				<li><a href="#"><img src=<?=base_url()."images/econtraption_n.png"?>><h5></a></li>
										
				</ul>
				</div>

				<div>
				<li><a href="home/handson"><img src=<?=base_url()."images/handson_n.png"?>></a></li>
				</div>

				<div>
				<li><a href="home/myinnovation"><img src=<?=base_url()."images/myinno_n.png"?>></a></h2></li>
				</div>

				<div>
				<li><a href="home/quizmania"><img src=<?=base_url()."images/quizmania_n.png"?>></a></h2></li>
				</div>

				<div>
				<li><a href="home/aboutus"><img src=<?=base_url()."images/aboutus_n.png"?>></a></h2></li>
				</div>

				<div>
				<li><a href="home/contactus"><img src=<?=base_url()."images/contactus_n.png"?>></a></h2></li>
				</div>

				<div>
				<li><a href="home/faq"><img src=<?=base_url()."images/faq_n.png"?>></a></li>
				</div>

				

	</div>

</div>

</div>
</div>

<div class="container">


	<div id="header" class="span-24 last">
	<!--Header HERE-->
	</div>
	<div id="subheader" class="span-24 last">
		<p class="span-15 last"><h3>THE ROBOTICS CLUB | SRM UNIVERSITY</h3></p>
			</div><hr />

	<div class="span-17 colborder" id="content">
		<h3 class="loud prepend-10">CONTENT</h3>
		<p class="prepend-5">
									</p>

	</div>
		

	</div>

</div>


</body>

</html>
