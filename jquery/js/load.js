// JavaScript Document
$(window).load(function(){
	alert('Window loaded');
});
$(document).ready(function(e) {
	alert("Document Ready");
	
    
	
});
function al()
{
	alert("It works");
	return;
}
$('iframe').load(function(){al()});
