<?php
    /*
        Template Name: RSS page
    */
    get_header();
?>
<div class="news_wrapper">
    <div class="span8 pull-left index_content rss_post_list">
        <div class="row post_cat_id">
        </div>

        <?php // Get RSS Feed(s)
            include_once(ABSPATH . WPINC . '/feed.php');
            // Get a SimplePie feed object from the specified feed source.
            $site_url = get_site_url();
            $rss = fetch_feed("http://localhost:8888/wordpress/?feed=rss");
            $jp_rss2 = fetch_feed("http://www.facebook.com/feeds/page.php?format=atom10&id=201834806505882");
            if (!is_wp_error( $rss ) ) :
                $maxitems = $jp_rss2->get_item_quantity(10);
                $rss_items = $jp_rss2->get_items(0, $maxitems);

//                $max_local_items = $rss->get_item_quantity(10)
//                $local_rss = $rss->get_items(0, $max_local_items)
                //FB RSS CODE 201834806505882
            endif;
            //echo count($rss_items);
            //echo count($local_rss)
        ?>


        <div class="row-fluid post_header">
            <div class="jp_article_content_head span12">
                <blockquote class="jp_content_title">
                    <h4> <?php _e('[ JackPierce ] Station Facebook RSS など一覧'); ?> </h4>
                </blockquote>
            </div>
        </div>
        <ul class="rss_post">
            <?php
                if ($maxitems == 0) echo '<li>No items.</li>';
                else
                foreach ( $rss_items as $item ) : ?>
                    <li class="rss_post_item">
                        <a href='<?php echo esc_url( $item->get_permalink() ); ?>'
                           title='<?php echo 'Posted '.$item->get_date('j F Y | g:i a'); ?>' class="rss_item_link">
                            <?php echo esc_html( $item->get_title() ); ?></a>
                    </li>
            <?php endforeach; ?>
        </ul>

        <div class="row-fluid post_header">
            <div class="jp_article_content_head span12">
                <blockquote class="jp_content_title">
                    <h4> <?php _e('[ JackPierce ] Station Facebook RSS など一覧'); ?> </h4>
                </blockquote>
            </div>
        </div>


    </div>
    <div class="pull-left this_main_sidebar">
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>