<?php 
require_once '../mHclibrary/header.php';
$message = $_GET["message"];
if (!empty($message)){
	$htmlString = "<span id=\"error-panel\" style=\"display:block;\">$message</span>";	
}
?>
<div id="topbar">
  <div id="title">
  	Classes &#38; Events</div>
  <div id="leftnav">
    <a href="index.php">
    	<img alt="Howard County Library System mobile home" src="images/home.png"/>
    </a>
  </div>
  <div id="rightnav">
    <a href="choose-branch.php">Back</a>
  </div>
</div>

<div id="content">
	<span class="graytitle">Search an event</span>
	<ul class="pageitem">
		<li class="textbox">
			<?php echo$htmlString;?>
			<form action="search-show-events.html.php" id="search-events-from" name="search-events-from" enctype="multipart/form-data" method="get" onsubmit="">
				<input name="mail" id="mail" value="" type="hidden">
				<div class="">
					Title<font color="#ff0000">*</font> :
				</div>
				<div class="">
					<input id="" name="title" type="text" size="35" />
				</div>
				<div class="">
					Location<font color="#ff0000">*</font> :
				</div>
				<div class="">
					<select name="lib">
						<option value="">Select</option>
						<option value="Central">Central</option>
						<option value="East Columbia">East Columbia</option>
						<option value="Elkridge">Elkridge</option>
						<option value="Glenwood">Glenwood</option>
						<option value="Miller">Miller</option>
						<option value="Savage">Savage</option>
					</select>
				</div>
				<br />
				<div class="form-buttons">
					<input value="Search" name="submit" type="submit"> 
					<input value="Cancel" name="cancel" type="reset">
					<br /> <br />
				</div>
			</form>
		</li>
	</ul>
</div>
<?php require_once '../mHclibrary/footer.php';?>
</html>
