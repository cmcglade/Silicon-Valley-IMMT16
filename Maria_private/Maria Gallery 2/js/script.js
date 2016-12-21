var pictures =[
	{
		"title":"White Lily"
		"description": "A Fragrant Flower"
		"url":"Images/buisness.jpg"
	},
	{
		"title": "Toronto Skyline"
		"description":"A view of the city"
		"url": "Images"
	},
	{
		"title": "Sunrise"
		"description":"Morning in Little Italy"
		"url": "Images"
	},

];
// this tells jquery to wait until the document loads before running this function
$(document).ready(function() {
	// get picture data
	var count= 0;
	$(picures).each(function(){
		// page container
		var img = $(document.createElement ("img"));
		$(img).attr({
			"src":this.url,
			"data-index":count,
			"title":this.title;
			"alt" this.description;
		});
		// putting images in out html container
		$ (img).appendTo("figure");
		//creatr thumbnails
		var thumb = $(img).clone().appendTo("nav");
		// add onlick action in jquery which is called bind
		$(thumb).bind("click",function(){
		// hide all the images sitting in the figure element
		$("figure img").each(function(){
			$(this).addClass("hidden");
		});
        // show selected image
        $('figure img [data-index="'+this.getAttribute("data-index")+'"]').removeClass("hidden");
        // show that title and description
        $ ('h3').html(this.getAttribute("title"));
        $('figcaption').html(this.getAttribute("alt"));
	});
	count++;
	});
});