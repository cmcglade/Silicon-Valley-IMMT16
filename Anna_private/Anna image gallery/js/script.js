//Anna's Javascript
var pictures = [

{ 
	"title":"Sunset",
	"description":"Sunset in Florida",
	"url":"img/sunset.jpg"
},
{
	"title":"Palm trees",
	"description":"Palm trees",
	"url":"img/palm trees.jpg"
},
{
	"title":"Flower",
	"description":"Flower tree in bloom",
	"url":"img/flower.jpg"
},
{
	"title":"Bike",
	"description":"Biking on the beach",
	"url":"img/bike.jpg"
}

];

$(document).ready(function(){
	var count = 0;
	$(pictures).each(function(){
		var img = $(document.createElement("img"));
		$(img).attr({
			"src":this.url,
			"data-index":count,
			"title":this.title,
			"alt":this.description
		});
		$(img).appendTo("figure");
		var thumb = $(img).clone().appendTo("nav");
		$(thumb).bind("click",function(){
			$("figure img").each(function(){
				$(this).addClass("hidden");
			});
			$('figure img[data-index="'+this.getAttribute("data-index")+'"]').removeClass("hidden");
			$('h3').html(this.getAttribute("title"));
			$('figcaption').html(this.getAttribute("alt"));
		});
	count++;
	});
});






