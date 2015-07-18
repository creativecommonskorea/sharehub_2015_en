<?php

define('IMG_DIR', get_template_directory_uri() . '/images/' );

/**
 * Set post thumbnail size.
 */
if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 180, 180, true );
}

/**
 * Display navigation to next/previous set of posts when applicable.
 */
function sharehub_paging_nav() {
    // Don't print empty markup if there's only one page.
    if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
        return;
    }

    $paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
    $pagenum_link = html_entity_decode( get_pagenum_link() );
    $query_args   = array();
    $url_parts    = explode( '?', $pagenum_link );

    if ( isset( $url_parts[1] ) ) {
        wp_parse_str( $url_parts[1], $query_args );
    }

    $pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
    $pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

    $format  = $GLOBALS['wp_rewrite']->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
    $format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';

    // Set up paginated links.
    $links = paginate_links( array(
        'base'     => $pagenum_link,
        'format'   => $format,
        'total'    => $GLOBALS['wp_query']->max_num_pages,
        'current'  => $paged,
        'mid_size' => 1,
        'add_args' => array_map( 'urlencode', $query_args ),
        'prev_text' => false, //__( '&larr; Previous', 'twentyfourteen' ),
        'next_text' => false //__( 'Next &rarr;', 'twentyfourteen' ),
    ) );

    if ( $links ) :
    ?>
    <nav class="navigation paging-navigation">
        <div class="pagination loop-pagination">
            <?php echo $links; ?>
        </div><!-- .pagination -->
    </nav><!-- .navigation -->
    <?php
    endif;
}

/**
 * Remove wordpress version.
 */
function sharehub_remove_version() {
    return '';
}
add_filter('the_generator', 'sharehub_remove_version');


/**
 * display services page using _data/services.yml
 */
use Symfony\Component\Yaml\Yaml;
$services = Yaml::parse(file_get_contents(get_template_directory() . '/_data/services.yml'));    
