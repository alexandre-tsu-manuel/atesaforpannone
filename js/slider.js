var numPhoto = 1;
var currentPhotoID = "#one";
var sizeOfPhoto = $('#sizeOfPhotos').html();
$('#sizeOfPhotos').html("");
var numTotalPhoto = 0;
switch (sizeOfPhoto)
{
	case "80":
		numTotalPhoto = 6;
	break;
	case "100":
		numTotalPhoto = 3;
	break;
	case "120":
		numTotalPhoto = 4;
	break;
	default:
		numTotalPhoto = 5;
	break;
}

function slide()
{
	$('#one').hide();
	$('#two').hide();
	$('#three').hide();
	if (numTotalPhoto > 3)
		$('#four').hide();
	if (numTotalPhoto > 4)
		$('#five').hide();
	if (numTotalPhoto > 5)
		$('#six').hide();
	switch (numPhoto)
	{
		case 1:
			currentPhotoID = "#one";
		break;
		case 2:
			currentPhotoID = "#two";
		break;
		case 3:
			currentPhotoID = "#three";
		break;
		case 4:
			currentPhotoID = "#four";
		break;
		case 5:
			currentPhotoID = "#five";
		break;
		case 6:
			currentPhotoID = "#six";
		break;
		default:
			alert("error");
		break;
	}
	$(currentPhotoID).show();
	update();
}
function slideNext()
{
	if (++numPhoto > numTotalPhoto)
		numPhoto = 1;
	slide();
}
function slidePrev()
{
	if(--numPhoto < 1)
		numPhoto = numTotalPhoto;
	slide();
}
function update()
{
	$(currentPhotoID).hide();
	var h = $(document).height();
	$(currentPhotoID).show();
	$("#slider img").css("height", (h * 0.95) + "px");
	var w = ($(document).width() - $(currentPhotoID).width() + $("nav").width()) / 2;
	$("#slider").css("left", w);
	$("#arrowLeft").css("left", w - 55);
	$("#arrowRight").css("left", w + $(currentPhotoID).width());
	h = $(currentPhotoID).height();
	$("#arrowLeft, #arrowRight").css("height", h);
	$("#arrowLeft img, #arrowRight img").css("margin-top", (h - 80) / 2);
}

$("#arrowLeft").click(function(){slidePrev()});
$("#arrowRight, #slider").click(function(){slideNext()});

$(window).load(function(){update()});
$(window).resize(function(){update()});

update();
$("#slider").css("width", "auto");
$("#slider").css("height", "auto");
$("#slider").css("overflow", "visible");

var hoverSlider = 0;
var hoverArrowLeft = 0;
var hoverArrowRight = 0;

function updateArrows()
{
	if (hoverArrowLeft) {
		$("#arrowLeft img").css("opacity", "0.75");
		$("#arrowRight img").css("opacity", "0");
	}
	else if (hoverArrowRight) {
		$("#arrowLeft img").css("opacity", "0");
		$("#arrowRight img").css("opacity", "0.75");
	}
	else if (hoverSlider) {
		$("#arrowLeft img, #arrowRight img").css("opacity", "0.25");
	}
	else {
		$("#arrowLeft img, #arrowRight img").css("opacity", "0");
	}
}

$("#slider").mouseover(function(){hoverSlider = 1; updateArrows();});
$("#arrowLeft img").mouseover(function(){hoverArrowLeft = 1; updateArrows();});
$("#arrowRight img").mouseover(function(){hoverArrowRight = 1; updateArrows();});
$("#slider").mouseout(function(){hoverSlider = 0; updateArrows();});
$("#arrowLeft img").mouseout(function(){hoverArrowLeft = 0; updateArrows();});
$("#arrowRight img").mouseout(function(){hoverArrowRight = 0; updateArrows();});