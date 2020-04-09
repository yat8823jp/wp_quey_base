<?php
    //$argsのプロパティを変更することでカスタマイズ
    $args = array(
        'post_type'      => 'post', 
        'posts_per_page' => -1,
        'no_found_rows'  => true,  //ページャー利用時はfalseに。
    );

    $wp_query = new WP_Query( $args );
    if ( $wp_query -> have_posts() ) :
        while ( $wp_query -> have_posts() ) : $wp_query -> the_post();
            
        /* ループ内の記述 */

        endwhile;
    endif;
    wp_reset_postdata();
?>
