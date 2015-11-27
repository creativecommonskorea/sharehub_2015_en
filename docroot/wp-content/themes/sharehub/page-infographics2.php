<?php get_header(); ?>

<style type="text/css">
	.entry-page-content { padding-top:20px; margin-top:40px;  margin-bottom: 60px;}
		.entry-page-content h3 { font-size:20px; font-weight:bold; }
		.entry-page-content ul { list-style:none; margin:0; padding:0; margin-bottom:40px; }
		.entry-page-content ul li { margin-bottom:10px; }
		.entry-page-content a { font-size:15px; }
	.item img { max-width: 100%; }
</style>

<div id="entry" class="hfeed">

	<div id="page-header" class="have_tabs">
        <div class="content_width">
<!-- 
        	<div class="see_service_list">
                <a href="/services">SEE SERVICE LIST</a>
           	</div>
-->
            <h1 class="org">2015 Sharing City Seoul Infographic</h1>
            <div class="clear"></div>
        </div>
    </div>

	<div class="content_width">
		<div class="page-single post_box">
	            
	            <div class="entry-wrap">
					
					<div class="entry-page-content">

						<div id="owl-demo" class="owl-carousel owl-theme">
						 
							  <div class="item">
							  	<img src="<?php echo IMG_DIR ?>infographics2/1.png" width="600" alt="seoul-share-companies1">
							  </div>

							  <div class="item">
							  	<img src="<?php echo IMG_DIR ?>infographics2/2.png" width="600" alt="seoul-share-companies1">
							  </div>

							  <div class="item">
							  	<img src="<?php echo IMG_DIR ?>infographics2/3.png" width="600" alt="seoul-share-companies1">
							  </div>

							  <div class="item">
							  	<img src="<?php echo IMG_DIR ?>infographics2/4.png" width="600" alt="seoul-share-companies1">
							  </div>

							  <div class="item">
							  	<img src="<?php echo IMG_DIR ?>infographics2/5.png" width="600" alt="seoul-share-companies1">
							  </div>

							  <div class="item">
							  	<img src="<?php echo IMG_DIR ?>infographics2/6.png" width="600" alt="seoul-share-companies1">
							  </div>

						</div>	
						<div class="clear"></div>

					</div>
					
				</div>
	   </div>
	</div>
</div><!--#content-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
<style>
	.item {
		text-align: center;
	}

.wrapper-with-margin{
  margin:0px 50px;
}

 
.owl-theme .owl-controls .owl-buttons div {
  position: absolute;
}
 
.owl-theme .owl-controls .owl-buttons .owl-prev{
  left: 10%;
  top: 45%; 
}
 
.owl-theme .owl-controls .owl-buttons .owl-next{
  right: 10%;
  top: 45%;
}

.owl-theme .owl-controls .owl-buttons div { zoom: 2; padding: 6px 10px;}

@media screen and (max-width:900px) {
	.owl-theme .owl-controls .owl-buttons .owl-prev,
	.owl-theme .owl-controls .owl-buttons .owl-next {
		top: 97%;
	}
}

</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script src="https://raw.githubusercontent.com/stowball/jQuery-rwdImageMaps/master/jquery.rwdImageMaps.min.js"></script>
<script>
	jQuery(document).ready(function() {
	 
	  jQuery("#owl-demo").owlCarousel({
	  	navigation : true, // Show next and prev buttons
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem:true,
	    navigationText: [
	      "<",
	      ">"
	      ],
	  });

	  jQuery('img[usemap]').rwdImageMaps();
	 
	});
</script>

<?php get_footer(); ?>
