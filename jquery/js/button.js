	// JavaScript Document
$(':button').mouseover(function(){
	$(this).css('color','#CCC');
	$(this).css('background-color','#999');
	
});	
$(':button').mouseout(function(){
	$(this).css('color','#999');
	$(this).css('background-color','#CCC');
	
});
$('#img1').mouseover(function(){
	$('#navigation').css('display','block');
})

$('#img1').mouseout(function(){
	$('#navigation').css('display','none');
})
var l=0
var t=0
$('#up').click(function(){
	if(t>0)
	{
		t=t-10
		$('#img1').css('background-position',l+"%"+t+"%");
	}
})
$('#down').click(function(){
	if(t<100)
	{
		t=t+10
		$('#img1').css('background-position',l+"%"+t+"%");
	}
})
$('#left').click(function(){
	if(l>0)
	{
		l=l-10;
		$('#img1').css('background-position',l+"%"+t+"%");
	}
	
})
$('#right').click(function(){
	if(l<100)
	{
		l=l+10;
		$('#img1').css('background-position',l+"%"+t+"%");
	}
})