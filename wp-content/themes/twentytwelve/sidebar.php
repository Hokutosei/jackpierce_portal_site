<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<div class="main_sidebar">
    <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
    <div class="first front-widgets">
        <?php dynamic_sidebar( 'sidebar-2' ); ?>
    </div><!-- .first -->
    <?php endif; ?>
    <div class="box_1">
        <div class="gallery_wrapper">
            <?php
            echo do_shortcode("
                    [catlist name=hall-of-fame catlink=yes class=hall_of_fame

                    thumbnail=yes thumbnail_class=jp_thumb_class content=no numberposts=9 morelink=\"もっと見る\"
                    morelink_class=morelink_class]
                    ")
            ?>
            <br class="clearfloat"/>
        </div>
        <br class="clearfloat"/>

    </div>

    <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
    <div class="second front-widgets">
        <?php dynamic_sidebar( 'sidebar-3' ); ?>
    </div><!-- .second -->
    <?php endif; ?>



</div><!-- #secondary -->


