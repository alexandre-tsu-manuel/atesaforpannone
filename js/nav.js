var lang_showed = 0;
var format_showed = 0;
var bio_showed = 0;
var contact_showed = 0;

function lang()
{
	if (lang_showed)
	{
		$('#lang').hide("slow");
		lang_showed = 0;
	}
	else
	{
		$('#lang').show("slow");
		lang_showed = 1;
	}
}
function contact()
{
	if (contact_showed)
	{
		$('#contact').fadeTo(600, 0);
		$('#contact').hide(1);
		contact_showed = 0;
	}
	else
	{
		$('#contact').show();
		$('#contact').fadeTo(600, 1);
		contact_showed = 1;
	}
}
function bio()
{
	if (bio_showed)
	{
		$('#bio').hide("slow");
		bio_showed = 0;
	}
	else
	{
		$('#bio').show("slow");
		bio_showed = 1;
	}
}
function format()
{
	if (format_showed)
	{
		$('#format').hide("slow");
		format_showed = 0;
	}
	else
	{
		$('#format').show("slow");
		format_showed = 1;
	}
}

var langElement = document.getElementById('langLink');
var contactElement = document.getElementById('contactLink');
var bioElement = document.getElementById('bioLink');
var formatElement = document.getElementById('formatLink');

if(contactElement.addEventListener)
{
	langElement.addEventListener('click', lang, false);
	contactElement.addEventListener('click', contact, false);
	bioElement.addEventListener('click', bio, false);
	formatElement.addEventListener('click', format, false);
}
else
{
	langElement.attachEvent('onclick', lang);
	formatElement.attachEvent('onclick', format);
	bioElement.attachEvent('onclick', bio);
	contactElement.attachEvent('onclick', contact);
}