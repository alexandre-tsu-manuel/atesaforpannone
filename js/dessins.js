function update()
{
	var w = parseInt(($(document).width() - $("nav").width()) / 220);
	if (w > 1){
		w--;
	}
	for (var i = 1 ; i < 69 ; i++)
	{
		switch (i%w)
		{
			case 0:
				$("#"+i).css("transform-origin", "top right");
				$("#"+i).css("-webkit-transform-origin", "top right");
				$("#"+i).css("-o-transform-origin", "top right");
			break;
			case 1:
				$("#"+i).css("transform-origin", "top left");
				$("#"+i).css("-webkit-transform-origin", "top left");
				$("#"+i).css("-o-transform-origin", "top left");
			break;
			default:
				$("#"+i).css("transform-origin", "top center");
				$("#"+i).css("-webkit-transform-origin", "top center");
				$("#"+i).css("-o-transform-origin", "top center");
			break;
		}
	}
} update();

$(window).load(function(){update()});
$(window).resize(function(){update()});