/*=========================================================================================*/
/*affichage dynamic des images*/
jQuery.fn.center = function (adresseImage) {
	this.css("position","absolute");
	//var myImg = new Image();
	//myImg.src = adresseImage;
	// var Ycenter =  ( $(window).height() - $(this).height() ) / 2;
	this.css("top",0 + "px");
	this.css("left",0 + "px");
	return this;
}



$(document).ready(function() {        
	$(".unePhoto img").click(function(e){
		$("#background").css({"opacity" : "0.7"})
						.fadeIn("slow");
		$("#large").html("<img src='"+$(this).parent().attr("href")+"' alt='"+$(this).attr("alt")+"' />");
		var adresseImage = $(this).parent().attr("href");
		$("#large").center(adresseImage);//on passe en parametre l'adresse de l'image pour pouvoir la centrer en connaissant ses dimensions
		$("#large").fadeIn("slow");
		return false;
	});
		
	$(document).keypress(function(e){
		if(e.keyCode==27){
			$("#background").fadeOut("slow");
			$("#large").fadeOut("slow");
		}
	});
	
	$("#background").click(function(){
		$("#background").fadeOut("slow");
		$("#large").fadeOut("slow");
	});
	
	$("#large").click(function(){
		$("#background").fadeOut("slow");
		$("#large").fadeOut("slow");
	});
	
});