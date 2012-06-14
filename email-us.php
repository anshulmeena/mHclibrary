<?php require_once 'header.php';?>
<div id="topbar">
	<div id="title">Email us</div>
	<div id="leftnav"><a href="index.php"><img alt="home" src="images/home.png" /></a></div>
</div>
<div id="content">
	<form method="post" action="">
		<fieldset>
		<ul class="pageitem">
			<li class="smallfield"><span class="hclsname">Name*</span><input placeholder="name" type="tel" /></li>
			<li class="smallfield"><span class="name">Phone number</span><input placeholder="phone" type="tel" /></li>
			<li class="smallfield"><span class="name">Email*</span><input placeholder="email" type="tel" /></li>
			<li class="smallfield"><span class="name">Subject*</span><input placeholder="subject" type="text" /></li>
			<li class="textbox"><span class="hclsheader">Message:</span><textarea id="hclstextarea" name="TextArea" rows="4"></textarea></li>
			<li class="center"><input name="Submit input" type="submit" value="Send" /><input name="reset" type="submit" value="Reset" /></li>
		</ul>
		</fieldset>
	</form>
</div>
<?php require_once 'footer.php';?>
</html>
