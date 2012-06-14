/***********************
 * Howard County Library System
 * @author Anshul Meena <anshul.meena@hclibrary.org>
 * @category HCLS Mobile Javascript 
 **********************/
/*
 *hide address bar (URL) in any browser 
 */
var androidweb = navigator.userAgent.match(/android|avantgo|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|iphone|ipod|iris|kindle|lge|maemo|midp|mmp|opera/i);
if(!androidweb || androidweb[0] == "null"){
	window.scrollTo(0,1);
	}else{
		window.scrollTo(0,1);
	}
/*
 *email varification for forgotbarcode.php page 
 */
function checkemailadd(form99,email)
{ 
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var emailaddress = document.forms["form99"].elements["email"].value;
	var errordiv = document.getElementById("error-panel");
	
	if(reg.test(emailaddress) == false) {
	      errordiv.style.display = 'block';
	      errordiv.innerHTML = "Invalid email addess. Please try <a href=\"https://hclibrary.org/mobile/forgotbarcode.php\">again</a>";
	      return false;
	   }else{
		   return true;
	   }
}