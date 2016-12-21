var pictures = [ 
	{
		"title":"White lily",
		"description":"A fragrant flower.",
		"url":"img/img1.jpg"
	},
	{
		"title":"Toronto Skyline",
		"description":"Toronto from up high.",
		"url":"img/img2.jpg"
	},
	{
		"title":"Italy",
		"description":"Italian Sunset",
		"url":"img/img3.jpg"
	},
	{
		"title":"Thing3",
		"description":"This thing.",
		"url":"img/img4.jpg"
	},
	{
		"title":"Thing 5",
		"description":"Again.",
		"url":"img/img5.jpg"
	}
];

//This tells jquery to wait until the document loads before running this function
$(document).ready(function(){
	//get pitcutre data
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
		//add on click action in jquery which is called bind
		$(thumb).bind("click", function(){
			//hide all the images sitting in the figure element
			$("figure img").each(function(){
				$(this).addClass("hidden");
			});
			//Show selected image by getting its index number and unhiding it
			$('figure img[data-index="'+this.getAttribute("data-index")+'"]').removeClass("hidden");
			//show that title and description
			$('h3').html(this.getAttribute("title"));
			$('figcaption').html(this.getAttribute("alt"));
		});
		count++;
	});
});