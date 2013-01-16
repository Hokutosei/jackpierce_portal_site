<?php
    /*
        Template Name: RSS page
    */
    get_header();
?>


<div class="news_wrapper">
    <div class="span8 pull-left index_content rss_post_list">
        <div class="row post_cat_id">
            <div class="pull-right">
                <div class="pull-right">
                    <i class="icon-chevron-right toggle_sidebar active_tog"></i>
                </div>
            </div>
        </div>

        <div class="row-fluid post_header">
            <div class="jp_article_content_head span12">
                <blockquote class="jp_content_title">
                    <h4> <?php _e('[ JackPierce ] Station RSS など一覧'); ?> </h4>
                </blockquote>
            </div>
        </div>
        <?php // Get RSS Feed(s)
            include_once(ABSPATH . WPINC . '/feed.php');

            // Get a SimplePie feed object from the specified feed source.
            $site_url = get_site_url();
            $s = '?feed=rss2';
            $fe = urlencode($s);
            $rss = fetch_feed("http://jpdevelopment.herokuapp.com/?feed=rss2");
            if (!is_wp_error( $rss ) ) : // Checks that the object is created correctly
                // Figure out how many total items there are, but limit it to 5.
                $maxitems = $rss->get_item_quantity(20);
                // Build an array of all the items, starting with element 0 (first element).
                $rss_items = $rss->get_items(0, $maxitems);
            endif;
        ?>
        <ul class="rss_post">
            <?php
                if ($maxitems == 0) echo '<li>No items.</li>';
                else
                // Loop through each feed item and display each item as a hyperlink.
                foreach ( $rss_items as $item ) : ?>
                    <li class="rss_post_item">
                        <a href='<?php echo esc_url( $item->get_permalink() ); ?>'
                           title='<?php echo 'Posted '.$item->get_date('j F Y | g:i a'); ?>'>
                            <?php echo esc_html( $item->get_title() ); ?></a>
                    </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="pull-left this_main_sidebar">
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>