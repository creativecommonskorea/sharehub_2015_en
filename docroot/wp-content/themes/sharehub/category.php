<?php get_header(); ?>

<div id="page-header">
    <div class="content_width">
        <h1 class="news">News</h1>
    </div>
</div>

<div id="entry">
    <div class="content_width">

        <?php
            while ( have_posts() ) : the_post();
        ?>
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
                
                // Previous/next page navigation.
                sharehub_paging_nav();
        ?>
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
