<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

    <div class="news_wrapper">
        <div class="span8 pull-left index_content">
            <div class="post_body">
                <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', get_post_format() ); ?>
            </div>
            <?php // this should be styled out?>
            <!--
            <nav class="nav-single">
                <h3 class="assistive-text"><?php //_e( 'Post navigation', 'twentytwelve' ); ?></h3>
                <span class="nav-previous"><?php //previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
                <span class="nav-next"><?php //next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
            </nav><!-- .nav-single -->
                <?php if(function_exists('the_ratings')) { the_ratings(); } ?>

            <?php comments_template( '', true ); ?>

            <?php endwhile; // end of the loop. ?>
        </div>
        <div class="pull-left this_main_sidebar">
            <?php get_sidebar(); ?>
        </div>
    </div>



<?php get_footer(); ?>