<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<div class="row-fluid category_items_content">
    <div class="row-fluid cit_cont_head">
        <div class="jp_article_header span12">
            <blockquote class="jp_article_heade_title">
                <a href="<?php echo get_permalink(); ?>" title="<?php the_title()?>"><?php the_title(); ?> </a>
            </blockquote>
        </div>

    </div>
    <article id="post-<?php the_ID(); ?>" >
        <div class="span3">
            <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
            <div class="featured-post">
                <?php _e( 'Featured post', 'twentytwelve' ); ?>
            </div>
            <?php endif; ?>

            <?php the_post_thumbnail(); ?>
        </div>
        <div class="span9">
            <div class="post_content">
                <div class="jp_inner_article">
                    <?php if ( is_search() ) : // Only display Excerpts for Search ?>
                    <div class="entry-summary">
                        <?php the_excerpt(); ?>
                    </div><!-- .entry-summary -->
                    <?php else : ?>
                    <div class="entry-content">
                        <?php
                        //the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) );
                        echo preg_replace("/\[caption .+?\[\/caption\]|\< *[img][^\>]*[.]*\>/i","",get_the_content(),10);
                        ?>
                        <?php //wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
                    </div><!-- .entry-content -->
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="view_more">
            <a href="<?php the_permalink();?>" title="<?php esc_attr(sprintf(__('Permalink to %s', 'twentytwelve'),
                the_title_attribute('echo=0'))); ?>" rel="bookmark" class="btn btn-mini pull-right jp_view_more">
                もっと見る
            </a>

        </div>
    </article><!-- #post -->
</div>