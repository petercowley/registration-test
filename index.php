<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
  <meta charset="utf-8"></meta>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"></meta>

  <title>Test Registration Page - Mar 2014</title>
	
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
	
	
<div id="container">
	
	<div id="logo">
		<img class="small" src="Teradata-Logo.png">
	</div>
	
	<div id="title">
	
	<?php
		$error = $_GET["error"];
		if ($error == '1')
			echo "Error: please try again. pin = 999999";
		else
			echo "This is the registration page. pin = 999999";
	?>

	</div>
	
	<div id="form-area">

		<!-- <form action="index-stream.php" method="post" onSubmit="_gaq.push(['_trackEvent', 'Submit', 'Clicked Submit on index.php']);"> -->
		<form action="index-stream.php" method="post" onSubmit="ga('send', 'event', 'Submit', 'Clicked Submit on index.php');">
			<label for="name">Name: </label> <input type="text" name="name" class="input" />
			<br>
			<label for="email">Email: </label> <input type="text" name="mail" class="input" />
			<br>
			<label for="code">Pin: </label> <input type="password" name="code" class="input" />
			<br>
			<label>&nbsp; </label> <input type="submit" value="submit" class="button"/>
		</form>
		
	</div>
</div> 

</body>
</html>
