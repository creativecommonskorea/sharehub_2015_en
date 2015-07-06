<?php get_header(); ?>

<div id="entry" class="is_single">
    <div class="content_width">
        <?php
            $exclude_ids = array();
            
            while ( have_posts() ) : the_post();
            
            $exclude_ids[] = $post->ID;
        ?>
        	<div class="content-wrap">
    		    <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
                <span class="entry-extra"><?php the_time('F d, Y'); ?></span>
                <div class="entry-description"><?php the_content(); ?></div>        		
        	</div>
        <?php 
                endwhile;
                
                $query = new WP_Query( array( 'posts_per_page' => 3, 'post__not_in' => $exclude_ids ) );
        ?>
        <div id="entry-wrap-in-single">
        <?php while ($query->have_posts()) : $query->the_post(); ?>   
            <div class="entry-wrap">
                <?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
                <div class="entry-thumbnail" style="background-image:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>);">
                </div>
                <?php endif; ?>
                
                <div class="entry-content">
                    <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
                    <span class="entry-extra"><?php the_time('F d, Y'); ?></span>
                    <div class="entry-description"><?php the_excerpt(); ?></div>
                </div>
                
                <div class="clear"></div>
            </div>
        <?php 
                endwhile;
        ?>  
            <a class="articles" href="/category/all"><i></i> All articles</a>
        </div>
    </div>
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
    
<?php get_footer();
