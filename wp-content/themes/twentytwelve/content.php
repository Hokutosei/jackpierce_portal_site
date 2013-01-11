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
<!--    <p class="cat_list_p">記事のカテゴリーリスト : </p>
-->    <div class="btn-group cat_item_list">
        <?php
        $categories = get_the_category();
        $separator = ' | ';
        $output = '';
        if($categories){
            foreach($categories as $category) {
                $output .= '<button class="btn btn-small">'
                    .'<a href="'.get_category_link($category->term_id ).'"
                title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'
                    .$category->cat_name.'</a>'
                    .'</button>';
            }
            echo trim($output);
        }
        ?>
    </div>
    <div class="row-fluid">
        <div class="jp_article_content_head span12">
            <blockquote class="jp_content_title">
                    <?php the_title(); ?>
            </blockquote>
            <div class="article_info">
                ライター　：<?php the_author();?>
            </div>
        </div>

    </div>

    <article id="post-<?php the_ID(); ?>" >
        <div class="span12">
            <div class="post_content">

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





