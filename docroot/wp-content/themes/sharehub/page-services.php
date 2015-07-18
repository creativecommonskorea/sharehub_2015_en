<?php get_header(); ?>
    <div id="page-header" class="have_tabs">
        <div class="content_width">
            <h1 class="org">Service List</h1>

            <div class="see_service_list">
                <a href="/services-infographics">SEE INFOGRAPHICS</a>
           </div>
            
            <ul class="tabs">
            <?php
                foreach($services as $key => $org) {
                    $title = str_replace('/', '<br />', $key);
                    $title = str_replace('_', ' ', $title);
            ?>
                <li>
                    <a href="#<?php echo str_replace(array('/'),array('-'),$key);?>" class="scroll_anchor_in_page"><?php echo $title;?></a>
                </li>
            <?php
                }
            ?>
            </ul>
            
            <div class="clear"></div>
        </div>
    </div>

    <div id="page" class="site-page" role="main">
       <div class="content_width">
        <div id="organization_wrap">
       <?php
            foreach($services as $key => $org) {
                $title = str_replace('/', '<br />', $key);
                $title = str_replace('_', ' ', $title);
       ?>
                <div id="<?php echo str_replace(array('/'),array('-'),$key);?>" class="organization_wrap">
                    <div class="organization_category"><?php echo $title;?></div>
                    <div class="organization_data">
                        <ul>
                        <?php foreach($org as $org_data) { ?>
                            <li>
                                <div class="organization_thumbnail"><?php if(!empty($org_data['logo'])) {?><img src="<?php echo get_template_directory_uri(); ?>/images/logos/<?php echo $org_data['logo'];?>" alt="logo" /><?php } ?></div>
                                <div class="organization_content">
                                    <h3><?php echo $org_data['title'];?></h3>
                                    <p><?php echo nl2br($org_data['description']);?></p>
                                    
                                    <a href="<?php echo $org_data['homepage'];?>" class="website">Website</a>
                                </div>
                            </li>
                        <?php } ?>
                        </ul>
                    </div>
                </div>
        <?php
            }
        ?>
          </div>
        </div>
        
    </div><!-- #content -->

    <a class="goto_top" href="#" onclick="gotoTop(); return false;">gotoTop</a>
    
    <div id="sponsor_wrap">
        <div class="content_width">
		    <ul>
		            <li class="seoul_mg"><a href="http://english.seoul.go.kr/" target="_blank">Seoul Metropolitan Goverment</a></li>
		            <li class="bloter"><a href="http://bloter.net" target="_blank">Bloter.net</a></li>
		            <li class="colcons"><a href="http://www.collaborativeconsumption.com/" target="_blank">Colcons</a></li>
		            <li class="shareable"><a href="http://www.shareable.net/" target="_blank">shareable</a></li>
		    </ul>
        </div>
    </div>
    
    <script type="text/javascript">
    	var $window = $(window);
    	
    	function gotoTop() {
            $('html,body').animate({scrollTop: 0},'slow');
    	}
		
		function scrollToAnchor(oid){
		    var oTag = $(oid);
		    var gotoTop = oTag.offset().top;
		    
		   	if($('body').hasClass('admin-bar')) {
		   		gotoTop -= 32;
		   	}
		   	
		   	gotoTop -= 50; // header
		   	gotoTop -= 30; // margin

		    
		    $('html,body').animate({scrollTop: gotoTop},'slow');
		}
		
		$window.ready(function() {
			if(typeof(location.hash) != 'undefined' && location.hash) {
				var target = location.hash;
				target = target.replace('/','');
				
				scrollToAnchor(target);
			}
			
			$("a.scroll_anchor_in_page").click(function(event) {
				event.preventDefault();

				var target = $(this).attr('href');
				target = target.replace('/','');
				
				scrollToAnchor(target);
				
			//	location.hash = target;

				return false;
			});
		});
    </script>
    
<?php get_footer();
