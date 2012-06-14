<?php 
/// **************************************
// START OF DO NOT TOUCH!!!
	//if (!eregi("mobile/", $PHP_SELF)) {
		//die ("You can't access this file directly...");
    //}
// END OF DO NOT TOUCH
// ************************************** // Anything not labeled as do not touch is stuff that directly // pertains to onscreen representation
	require_once 'errorHeader.php';
?>
<body>
<div id="topbar">
<div id="title">Error</div>
<div id="leftnav">
<a href="../index.php"><img alt="home" src="../images/home.png" /></a></div>
<div id="rightnav">
<a href="http://pactrain.hclibrary.org/Mobile/MyAccount/Logon">MyAccount</a></div>
</div>

<div id="content">
<span class="graytitle">There was no account found using that e-mail address.</span>
<ul class="pageitem">
<li class="textbox">
	1. Try entering your e-mail again to insure that everything was typed correctly, <a href="/mobile/forgotbarcode.php">Forgot Username</a> <br /><br />
	2. It is possible that your e-mail address is not associated with your library account. Please <a href="/mobile/contact-us.php">contact us</a> in order to retrieve your login information.<br /><br />
	3. If you do not have a library card, or your card is not in the Howard County Library system, please apply for one by either visiting a <a href="/mobile/locations-hours.php">branch.
</li>
</ul>
</div>
<?php require_once 'errorFooter.php';?>
</html>
