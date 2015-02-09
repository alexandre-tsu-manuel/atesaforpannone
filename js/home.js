function update()
{
	$("#photoAccueil").hide();
	var h = $(document).height();
	$("#photoAccueil").show();
	$("#photoAccueil").css("height", h * 0.95 - $("#VDLA").height() * 2);
	$("section").css("margin-left", ($(document).width() - $("#photoAccueil").width() + $("nav").width()) / 2);
}

$(window).load(function(){update()});
$(window).resize(function(){update()});