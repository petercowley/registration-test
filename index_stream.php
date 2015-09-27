<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
    
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
  <meta charset="utf-8"></meta>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"></meta>

  <title>Test Registration - Streaming Page - Mar 2014</title>
	
	<link rel="stylesheet" href="boilerplate.css">
	<link rel="stylesheet" href="stylesheet.css">

	<meta name="description" content="stufff"></meta>
	<meta name="viewport" content="width=device-width"></meta>

<!-- new analytics.js -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49970482-1', 'spirit-hosting.co.uk');
  ga('send', 'pageview');

</script>

<!-- by Peter Cowley -->

<!-- old ga.js
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-49970482-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
-->



</head>

<body>
	
	<?php

		$name = $_POST["name"];
		$email = $_POST["mail"];
		$code = $_POST["code"];
		
		if ($code != '999999') {
			echo "<script> ga('send', 'event', 'Error', '999999 Error on index-stream.php');</script>";
			echo "<script> window.location.href = 'index.php?error=1'; </script>;";
		}
		else {
			$fp = fopen("registration-database.txt", "a");
				if ($fp) {
					$time = time();
					$datestring = date("d/m/y, G:i:s", $time);
					fwrite ($fp, $name.", ".$email.", ".$datestring."\n");
					fclose($fp);
					// echo "<script>_gaq.push(['_trackEvent', 'Data Save', 'Saved data on index-stream.php']);</script>"; old tracking code
					echo "<script> ga('send', 'event', 'Data Save', 'Saved data on index-stream.php');</script>";
			}
		}
	?>
	
<div id="container-stream">
	
	<div id="logo">
		<img class="small" src="Teradata-Logo.png">
	</div>
	
	<div id="title">			
		This is the streaming page (new title will be here)
	</div>
	
	
	<iframe style="display: block;margin-left: auto; margin-right: auto;" src="https://play.showcaster.com/embed.jsp?SEID=135863&type=custom&render=video" scrolling="no" frameborder="0" allowtransparency="yes" width="800" height="486"></iframe>

</div>

</body>
</html>
