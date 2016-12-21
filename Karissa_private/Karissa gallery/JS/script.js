//Karissa Hurl's Javascript
var pictures = [

{
	"title":"Sunrise",
	"description":"Georgian Bay, Ontario",
	"url":"img/img1.jpg"
},
{
	"title":"Sunset",
	"description":"Koh Tao, Thailand",
	"url":"img/img2.jpg"
},
{
	"title":"Henry the Rooster",
	"description":"Orangeville, Ontario",
	"url":"img/img3.jpg"
},
{
	"title":"Pond",
	"description":"Orangeville, Ontario",
	"url":"img/img4.jpg"
}

];

//this tells jquery to wait until the document loads before running this function//
$(document).ready(function(){
	//get picture data
	var count = 0;
	$(pictures).each(function(){
		//page container
		var img = $(document.createElement("img"));
		$(img).attr({
			"src":this.url,
			"data-index":count,
			"title":this.title,
			"alt":this.description
		});
		//putting images in our html container
		$(img).appendTo("figure");
		//create thumbnails
		var thumb = $(img).clone().appendTo("nav");
		//add onlick action in jquery which is called bind
		$(thumb).bind("click",function(){
			//hide all images sitting in the figure element
			$("figure img").each(function(){
				$(this).addClass("hidden");
			});
			//show selected image by getting its index number and unhiding it
			$('figure img[data-index="'+this.getAttribute("data-index")+'"]').removeClass("hidden");
			//show title and description
			$('h3').html(this.getAttribute("title"));
			$('figcaption').html(this.getAttribute("alt"));
		});
	count++;
	//count++ means you equal yourself plus one
	});
});






