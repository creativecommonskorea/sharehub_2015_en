<?php get_header(); ?>
	
	<div id="information" class="full_height checking_scroll_top" data-target="#nav_information">
		<div class="title_wrap">
			<div class="main_title">Sharing is the way of life<br />for sustainable tomorrow</div>
			<div class="sub_title">
				Share Hub is a project that curates various sharing culture information,<br />and connects individuals and groups interested in better sharing.<br />
				Share Hub is powered by Creative Commons Korea,<br />and supported by Seoul City according to “Seoul Metropolitan Government Act for Promoting Sharing.”
			</div>
		</div>
		
		<!--<div id="button_tabs">
			<ul>
				<li class="button_tab_1"><a href="#">Looking for a sharing service?</a></li>
				<li class="button_tab_2"><a href="#">Do you want to know Seoul Metropolitan Government Act for Promoting Sharing?</a></li>
				<li class="button_tab_3"><a href="#">We appreciate your suggestions to make Share Hub better together Please contact us.</a></li>
			</ul>
		</div>-->
		
		<div id="news_area">
			<div class="content_width">
				<h2>Recent News</h2>
				
				<div class="page_nav">
					<!--<a href="#" class="arrow arrow_left">Left</a>
					<a href="#" class="arrow arrow_right">Right</a>-->
					<a href="/?cat=1" class="more">MORE</a>
				</div>
				
				<div class="page_news">
					 <!-- News -->
					 <?php
					 	$left = true;
					 	$query = new WP_Query(array('cat'=>'0', 'posts_per_page'=>2)); ?>
					 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
					 <?php
						if($left) {
					 ?>
						<div class="news_wrap">
					 <?php		
						}
				     ?>
							<div class="news_data <?php echo $left ? 'news_data_left' : 'news_data_right';?>">
								<div class="thumbnail"<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?> style="background-image:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>);"<?php endif; ?>></div>
								<div class="information">
									<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
									<span class="extra"><?php the_time('F d, Y'); ?></span>
									<p>
										<?php echo mb_substr(get_the_excerpt(), 0, 100);?>
									</p>
								</div>
							</div>
					 <?php
					 	if(!$left) {
					 ?>
							<div class="clear"></div>
						</div>
					 <?php		
					 	}
					 ?>
					 <?php 
					 	$left = !$left;
					 	endwhile;
						
						if($left) {
							
					 ?>
					 		<div class="clear"></div>
					 	</div>
					 <?php
						} 
						
					  	wp_reset_postdata();
					  else: ?>
					 <p>Sorry, no posts matched your criteria.</p>
					 <?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	
	<div id="about_share_hub" class="full_height checking_scroll_top" data-target="#nav_about_share_hub">
			<div class="content_width">
				<div class="about_article">
					<div class="about_article_content">
						<h4>WHY<br />SHARING?</h4>
						<p>
						    Why is sharing attracting so much attention? Because sharing is a reasonable and sustainable way of living. Rationally thinking, this way of life--the vicious circle of buying and dumping should stop, especially for our future. We now have the network, the Internet. We can find people who would use the unused of ours usefully. We can be happy with what we already have when we share. Sharing makes more sense. More affordable, green, and people-loving.
                            We will see sharing in our daily lives more and more in near future. Many people are seeing the economic, environmental, and problem-solving possibility of sharing. Come and see where this movement will take you to. That is why Share Hub wants to talk about sharing with hope and enthusiasm.
                        </p>
					</div>
				</div>
				<div class="about_article about_article_right">
					<div class="about_article_content">
						<h4>WHAT’S<br />SHARE HUB?</h4>
						<p>
						    Share Hub is a project powered by Creative Commons Korea. Share Hub brings news and information related to sharing activities in Korea on ShareHub.kr. Share Hub also provides a directory of various sharing services and projects happening in Korea like a phone book for easy browsing on Korean sharing movement. Finally, Share Hub runs on and off line campaigns and seminars in order to raise awareness and engage general public participation on sharing.
                            Especially, Share Hub is sponsored by Seoul City under “Seoul Metropolitan Government Act for Promoting Sharing.” This Act includes opening City Goverment data and contents, sharing municipally owned idle spaces, and supporting sharing economy services. You can reach Share Hub at <a href="mailto:creative@cckorea.org">creative@cckorea.org</a>.
                        </p>
					</div>
					<p>&nbsp;</p>
					<p><a class="btn btn-annual center-block" target="_blank" href="//sharehub.kr/2014/en">2014 ShareHub Annual Report</a></p>
		
				</div>
				<div class="clear"></div>
			</div>
	</div>
	
	<div id="sharing_city_seoul" class="full_height checking_scroll_top" data-target="#nav_sharing_city_seoul">
		
		<ul id="sharing_tabs">
			<li id="sharing_tabs_1" class="selected">
				<a href="#" onclick="onSelectSharingCity(1); return false;">
					<span class="title">WHAT'S</span>
					<span class="description">SHARING SEOUL CITY ?</span>
				</a>
			</li>
			<li id="sharing_tabs_2" >
				<a href="#" onclick="onSelectSharingCity(2); return false;">
					<span class="title">WHY</span>
					<span class="description">DID SEOUL<br />DECIDE TO ENFORCE<br />SHARING CITY POLICY</span>
				</a>
			</li>
			<li id="sharing_tabs_3" >
				<a href="#" onclick="onSelectSharingCity(3); return false;">
					<span class="title">HOW</span>
					<span class="description">CAN SHARING ALLEVIATE<br />THE URBAN PROBLEMS</span>
				</a>
			</li>
			<li id="sharing_tabs_4" >
				<a href="#" onclick="onSelectSharingCity(4); return false;">
					<span class="title">WHAT KIND</span>
					<span class="description">OF PROJECTS HAVE BEEN?</span>
				</a>
			</li>
		</ul> 
		
		<div id="sharing_content">
			<div class="content_width">
				<div id="sharing_content_1" class="description viewed">					
					<div class="share_seoul_logo"></div>
				
					Seoul declared itself to be the Sharing City, meaning a city that 'sharing' is actively happening. Sharing is significant in ways that idle resources can be effectively utilized, local economy can be vitalized, neighborhood can tie up, and environment can be preserved. You can share any resources: time, space, talents, goods, information, etc.				
				
				</div>
				
				<div id="sharing_content_2" class="description">			
					<div class="share_seoul_logo_2"></div>
				
					Social demand on welfare, environment, and jobs is highly increasing, but hardship exist because of limited budget and resources. Drastic urbanization made people lose the sense of community spirit, and the excessive consumption caused resource depletion and pollution. Seoul would like to solve the economical, social, and environmental problems with the new way, "sharing."				
				</div>
				
				<div id="sharing_content_3" class="description">			
					<div class="share_seoul_logo_3"></div>
				
					First, sharing allows us to gain more benefits with fewer or less resources since it enhances the usefulness of resources. Second, when the sharing economy becomes reinvigorated, it can create new jobs and added values. Third, sharing can contribute to the recovery of the disappearing sense of community since sharing promotes a trust-based, reciprocal economy. Fourth, sharing contributes to resolving environmental problems caused by excessive consumption.				
				</div>
				
				<div id="sharing_content_4" class="description">			
					<div class="share_seoul_logo_4"></div>
				
					Development of “Sharing City” infrastructure
					• Support for sharing organizations or businesses
					• Campaigns for engaging citizens’ participation
					• Incubation of Sharing City Seoul projects
					• Improvement on existing statutes and institutions
					to be more sharing-friendly
				</div>

				<div class="report-downloads">
					<div class="bt_download_report bt_summary_download_report year_2015">
						<a href="/wp-content/uploads/reports/executive_summary_report_2015.pdf" class="text"><span class="long">DOWNLOAD EXECUTIVE SUMMARY REPORT (2015)</span><span class="short">SUMMARY REPORT (2015)</span></a>
						<a href="/wp-content/uploads/reports/executive_summary_report_2015.pdf" class="icon"><span>DOWNLOAD EXECUTIVE SUMMARY REPORT (2015)</span></a>
					</div>
					<div class="bt_download_report bt_summary_download_report year_2014">
						<a href="/wp-content/uploads/reports/executive_summary_report_2014.pdf" class="text"><span class="long">DOWNLOAD EXECUTIVE SUMMARY REPORT (2014)</span><span class="short">SUMMARY REPORT (2014)</span></a>
						<a href="/wp-content/uploads/reports/executive_summary_report_2014.pdf" class="icon"><span>DOWNLOAD EXECUTIVE SUMMARY REPORT (2014)</span></a>
					</div>
					<div class="bt_download_report">
						<a href="/wp-content/uploads/reports/full_report_2014.pdf" class="text"><span>DOWNLOAD FULL REPORT (2014)</span></a>
						<a href="/wp-content/uploads/reports/full_report_2014.pdf" class="icon"><span>DOWNLOAD FULL REPORT (2014)</span></a>
					</div>	
				</div>

				<p><a class="btn btn-annual btn-info2 center-block" target="_blank" href="/infographics2">2015 Sharing City Seoul Infographic</a></p>

			</div>
		</div>
	</div>
	
	<div id="sharing_service" class="checking_scroll_top" data-target="#nav_sharing_service">
		<h3>Looking for a sharing service?</h3>
		<p>This list features the companies, organizations that make Seoul a shareable city.</p>
		<!--<div class="page_nav">
			<div class="content_width">
				<div class="page_nav_data">
					<a href="#" class="arrow arrow_left">Left</a>
					<a href="#" class="arrow arrow_right">Right</a>
					<a href="/services" class="more">SEE DETAILS</a>
				</div>
			</div>
		</div>-->
		
		<?php
			/**
			 * 공유기업 카테고리 없이 임의 순서로 정렬한 전체 목록 배열 준비
			 */
			$orgs = array();
			foreach($services as $org) {
			  $orgs = array_merge($orgs, $org);
			}
			shuffle($orgs);
        ?>

		  <div id="sharing_service_wrap">
		  	  <div class="arrow_wrap">
		      	<a class="arrow_left disabled" href="#" onclick="sliceServiceList(1); return false;">left</a>
 		      	<a class="arrow_right" href="#" onclick="sliceServiceList(-1); return false;">right</a>
		      </div>
		      	
		      <div class="sharing_service_data" data-index="1">
	    <?php
	       $index = 0;
		   $index_count = 0;
	       foreach($orgs as $org) {
	           if($index == 0) {
	            echo '<div class="sharing_service_list" style="left:' . ($index_count * 100) . '%;"><ul>';
               }
	    ?>
				<li><a href="<?php echo $org['homepage'];?>" target="_blank" title="<?php echo $org['title'];?>"><?php if(!empty($org['logo'])) { ?><img src="<?php echo get_template_directory_uri(); ?>/images/logos/<?php echo $org['logo'];?>" alt="" /><?php } else { ?><?php echo $org['title'];?><?php } ?></a></li>
	     <?php
               $index ++;
               
	           if($index == 5) {
	               echo '</ul></div>';
	               $index = 0;
				   $index_count ++;
               }
               
           }
           
           if($index <= 5) {
            echo '</ul></div>';
           }
          ?>
               </div>
           </div>
       
       <div class="see_service_list">
            <a href="/services">SEE SERVICE LIST</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="/services-infographics">SEE INFOGRAPHICS</a>
       </div>
		
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
	</div>

	<script type="text/javascript">
		var $window = $(window);
		var $header = $("#header");   
		var $nav = $("#nav");
		
		var $information = $("#information");
			
		var last_view_object = null;
		
		function fitInformationWrap() {
            var windowWidth = $window.width();
			var windowHeight = $window.height();
		
			var new_height = windowHeight;
			if(new_height < 500) new_height = 500;
			
			if($('body').hasClass('admin-bar')) {
				new_height -= $("#wpadminbar").height();
			}
			
			if(windowWidth >= 670) {
                $('.full_height').css('height', new_height + 'px');
			} else {
			    $('.full_height').css('height', 'auto');
			    
			    new_height = $information.outerHeight();
			}
			
			var headerHeight = $header.outerHeight();
			var fit_height = new_height - $information.find('#news_area').outerHeight() - headerHeight;
			var height = $information.find('.title_wrap').height();					
				
			var marginTop = headerHeight + (fit_height - height)/2;
			
			if(marginTop < headerHeight) marginTop = headerHeight;
			
			$information.find('.main_title').css('margin-top', marginTop);
            
            var $organization_business_list = $("#organization_business_wrap .organization_business_list");
            
            $organization_business_list.each(function(index, data) {
             $(data).width(windowWidth);
            });
		}
		
		function onSelectSharingCity(index) {
			$("#sharing_tabs li.selected").removeClass('selected');
			$("#sharing_tabs_" + index).addClass('selected');
			
			$("#sharing_content .viewed").removeClass('viewed');
			$("#sharing_content_" + index).addClass('viewed');
		}
		
		function scrollToAnchor(oid){
		    var oTag = $(oid);
		    var gotoTop = oTag.offset().top;
		    
		   	if($('body').hasClass('admin-bar')) {
		   		gotoTop -= $("#wpadminbar").height();
		   	}
		   	
		   	gotoTop -= 50; // header

		    
		    $('html,body').animate({scrollTop: gotoTop},'slow');
		}
		
		function sliceServiceList(left) {
			var $sharing_service_data = $(".sharing_service_data");
			var max_index = $(".sharing_service_list").length;
			var now_index = $sharing_service_data.attr('data-index');
			var now_left = 0;
			
			if(left > 0) {
				if(now_index == 1) {
					return false;
				} else {
					now_index --;
					now_left = (now_index-1) * -100;
				}
			} else {
				if(now_index >= max_index) {
					return false;
				} else {
					now_index ++;
					now_left = (now_index-1) * -100;
				}
			}
			
			var $arrow_left = $("#sharing_service_wrap .arrow_left");
			var $arrow_right = $("#sharing_service_wrap .arrow_right");
			
			$arrow_left.removeClass('disabled');
			$arrow_right.removeClass('disabled');
			
			if(now_index == 1) {
				$arrow_left.addClass('disabled');
			} else if(now_index >= max_index) {
				$arrow_right.addClass('disabled');
			}
			
			$sharing_service_data.css('left', now_left + '%');
			
			$sharing_service_data.attr('data-index', now_index);
		}
		
		$window.resize(function() {
			fitInformationWrap();
		});
		
		$window.ready(function() {
			fitInformationWrap();
			
			if(typeof(location.hash) != 'undefined' && location.hash) {
				var target = location.hash;
				target = target.replace('/','');
				
				scrollToAnchor(target);
			}
			
			$("a.scroll_anchor").click(function(event) {
				event.preventDefault();

				var target = $(this).attr('href');
				target = target.replace('/','');
				
				scrollToAnchor(target);
				
			//	location.hash = target;

				return false;
			});
		});
		
		$window.scroll(function() {
			var scrollTop = $window.scrollTop();
			var windowHeight = $window.height();
			
			var view_height = 0;
			var $view_object = null;

			$(".checking_scroll_top").each(function(index, obj) {
				var $obj = $(obj);
				var top = $obj.offset().top;
				var bottom = $obj.offset().top + $obj.height();
				
				if(top < scrollTop) top = scrollTop;
				else if(top > scrollTop + windowHeight) top = scrollTop + windowHeight;
				
				if(bottom < scrollTop) bottom = scrollTop;
				else if(bottom > scrollTop + windowHeight) bottom = scrollTop + windowHeight;
				
				var objHeight = bottom - top;
				
				if(objHeight > view_height) {
					view_height = objHeight;
					$view_object = $obj;
				}
			});
								
			if(view_height > 0) {
				if(last_view_object != $view_object.get(0)) {
					last_view_object = $view_object.get(0);
					
					$("#nav ul li").removeClass('selected');
					var target = $(last_view_object).attr('data-target');
					$(target).addClass('selected');
				}
			}
		})
	</script>
    
    <script type="text/javascript">
        $window = typeof($window) == 'undefined' ? $(window) : $window;
        $nav = typeof($nav) == 'undefined' ? $("#nav") : $nav;
        
        $window.scroll(function() {
            var scrollTop = $window.scrollTop();
            var windowHeight = $window.height();
            var check_top = 50;
            var plus_top = 5;
        
            if($("body").hasClass('admin-bar')) plus_top += $("#wpadminbar").height();

            if(scrollTop >= check_top) {
                $nav.parent().addClass('fixed');//.css('position','fixed');.css('top', (plus_top - $nav.height()) + 'px');      
            } else {
                $nav.parent().removeClass('fixed');//.css('position','absolute').css('top', '20px');
            }
       });
    </script>

<?php get_footer();