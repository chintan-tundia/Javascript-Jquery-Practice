// JavaScript Document
$('#toggle_message').click(function(){
	var value=$('#toggle_message').attr('value');
	$('#para').toggle('fast');
	if(value=='Hide')
	{
		$('#toggle_message').attr('value','Show');
		$('#para').hide();
	}
	else
	{
		$('#toggle_message').attr('value','Hide');
		$('#para').show();
	}

});
$('#para').mouseenter(function(e) {
    $('#para').attr('color','yellow');
});

$('#para').mouseleave(function(e) {
    $('#para').attr('color','black');
});