<?
	require_once 'header.php';
?>
<link href="https://pactrain.hclibrary.org/Mobile/Content/Shared/Common.css" rel="stylesheet" type="text/css" />
<link href="https://pactrain.hclibrary.org/Mobile/Custom/Content/hcl_standerd/Theme.css" rel="stylesheet" type="text/css" />
<body>
	<div id="topbar">
		<div id="title">
			Forgot Barcode
		</div>
		<div id="leftnav">
			<a href="http://hclibrary.org/mobile/index.php">
			<img alt="Howard County Library System Mobile Home" src="https://hclibrary.org/mobile/images/home.png"/>
			</a>
		</div>
	</div>
    <div id="main"><span id="error-panel"></span>
     <form action="/components/forms/process.php" id="form99" name="form99" enctype="multipart/form-data" method="post" onsubmit="return checkemailadd(form99, email)">
     Please enter your e-mail address below and we will attempt to recover your barcode or username.
     		<input class="  " value="99" name="form_tools_form_id" type="hidden"> 
			<span style="display: none; visibility: hidden;"> 
			<label for="mail">Do not enter anything in this field!</label> 
			<input name="mail" id="mail" value="" type="text"> </span> 
			<input class="" value="mobile_forgot_username" name="form" type="hidden">
              <br /><br />
                <div class="">
                    Your E-mail Address<font color="#ff0000">*</font> :
                </div>
                <div class="">
                    <input id="email" name="email" type="text" size="35"/>
                </div>
                <div class="form-buttons">
                    <input value="E-mail My Barcode or Username" name="submit" type="submit">
                   <input onclick="history.go(-1);" value="Cancel" name="cancel" type="button"><br /><br />
                </div> 
            </form>
     </div>
     <br />
     <? require_once 'footer.php';?>
</html>