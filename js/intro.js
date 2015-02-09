function intro()
{
	$('#intro').hide(700);
	$('#other').show();
}
var introElement = document.documentElement;
if(introElement.addEventListener)
	introElement.addEventListener('click', intro, false);
else
	introElement.attachEvent('onclick',intro);