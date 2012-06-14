<?php 
//$xml = "http://host.evanced.info/hclibrary/lib/eventsxml.asp?lib=all&alltime=1&dm=exml&nd=14&startdate=06/10/2012";
function getEvancedXML($lib, $alltime, $dm="exml",$nd, $et, $start_date){
	$xml = "http://host.evanced.info/hclibrary/lib/eventsxml.asp?";
	$xml .= "lib=".$lib;
	$xml .= "&alltime=".$alltime;
	$xml .= "&dm=".$dm;
	$xml .= "&nd=".$nd;
	$xml .= "&et=".$et;
	$xml .= "&startdate=".$start_date;
	return $xml;
}



