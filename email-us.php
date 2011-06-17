<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="index,follow" name="robots" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link href="pics/homescreen.gif" rel="apple-touch-icon" />
<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" />
<link href="css/style.css" rel="stylesheet" media="screen" type="text/css" />
<script src="javascript/functions.js" type="text/javascript"></script>
<title>Howard County Library System</title>
<meta content="iPod,iPhone,Webkit,iWebkit,Website,Create,mobile,Tutorial,free" name="keywords" />
<meta content="now completly styles thanks to css these form elements are lighter and easier to use than ever before." name="description" />
</head>

<body>

<div id="topbar">
	<div id="title">Email us</div>
	<div id="leftnav">
		<a href="index.php"><img alt="home" src="images/home.png" /></a>
		</div>
</div>
<div id="content">
	<form method="post" action="">
		<fieldset>
		<ul class="pageitem">
			<li class="smallfield">
			<span class="hclsname">Name*</span>
				<input placeholder="name" type="tel"/>
			</li>
			<li class="smallfield">
			<span class="name">Phone number</span>
			<input placeholder="phone" type="tel" />
			</li>
				<li class="smallfield">
				<span class="name">Email*</span>
				<input placeholder="email" type="tel"/>
			</li>
			<li class="smallfield">
			<span class="name">Subject*</span>
			<input placeholder="subject" type="text"/>
			</li>
			<li class="textbox">
			<span class="hclsheader">Message:</span><textarea id="hclstextarea" name="TextArea" rows="4"></textarea></li>
			<li class="center">
			<input id="hclssend" name="Submit input" type="submit" value="Send" />
			<input id="hclssend" name="reset" type="submit" value="Reset"/>
			</li>
		</ul>
		</fieldset></form>
</div>
<div id="footer">
	&copy; <?php echo date("Y");?> Howard County Library System<br />
	<a href="http://iwebkit.net">Powered by iWebKit</a>
</div>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-5510266-5']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>

</html>
