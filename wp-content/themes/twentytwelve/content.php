<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>


<div class="row-fluid category_items_content">
    <article id="post-<?php the_ID(); ?>" >
        <div class="span3">
            <div class="jp_article_header">
                <blockquote class="jp_article_heade_title">
                    <?php the_title(); ?>
                </blockquote>
            </div>
            <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
            <div class="featured-post">
                <?php _e( 'Featured post', 'twentytwelve' ); ?>
            </div>
            <?php endif; ?>

            <?php the_post_thumbnail(); ?>
        </div>

        <div class="span5">
            <div class="post_content">

                <header class="entry-header">
                    <?php if ( is_single() ) : ?>
                    <h1 class="entry-title"><?php //the_title(); ?></h1>
                    <?php else : ?>
                    <h1 class="entry-title">
                        <a href="<?php the_permalink(); ?>"
                           title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentytwelve' ),
                               the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
                            <?php the_title(); ?>
                        </a>
                    </h1>
                    <?php endif; // is_single() ?>
                </header><!-- .entry-header -->
                <div class="jp_inner_article">
                    <?php if ( is_search() ) : // Only display Excerpts for Search ?>
                    <div class="entry-summary">
                        <?php the_excerpt(); ?>
                    </div><!-- .entry-summary -->
                    <?php else : ?>
                    <div class="entry-content">
                        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
                        <?php //wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
                    </div><!-- .entry-content -->
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </article><!-- #post -->
</div>





