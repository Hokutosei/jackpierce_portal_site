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

    <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
    <div class="second front-widgets">
        <?php dynamic_sidebar( 'sidebar-3' ); ?>
    </div><!-- .second -->
    <?php endif; ?>
</div><!-- #secondary -->


