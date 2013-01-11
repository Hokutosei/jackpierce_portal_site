<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>


    <div class="news_wrapper">
        <div class="span8 pull-left index_content">
            <div class="box_1">
                <?php
                echo do_shortcode(
                    "[catlist name=news catlink=yes date=no date_tag=span comments=no
                    date_class=lcp_date numberposts=10 class=lcp_catlist morelink=\"もっと見る\"
                    morelink_class=morelink_class]
                    ")
                ?>
                <br class="clearfloat"/>
                <p class="scrollamount">test</p>
                <p class="mc_pos">t</p>
            </div>
            <div class="box_1">
                <div class="gallery_wrapper">
                    <?php
                    echo do_shortcode("
                    [catlist name=jp_item_1_cat catlink=yes class=jp_post_list

                    thumbnail=yes thumbnail_class=jp_thumb_class content=no numberposts=6 morelink=\"もっと見る\"
                    morelink_class=morelink_class]
                    ")
                    ?>
                    <br class="clearfloat"/>
                </div>
                <p class="scrollamount">test</p>
                <p class="mc_pos"></p>
            </div>


            <div class="box_1">
                <div class="gallery_wrapper">
                    <?php
                    echo do_shortcode("
                    [catlist name=jp_item_2_cat catlink=yes class=jp_post_list

                    thumbnail=yes thumbnail_class=jp_thumb_class content=no numberposts=6 morelink=\"もっと見る\"
                    morelink_class=morelink_class]
                    ")
                    ?>
                    <br class="clearfloat"/>
                </div>

            </div>
            <br class="clearfloat"/>

            <div class="box_1">
                <div class="gallery_wrapper">
                    <div class="jp_post_list">
                        <div class="cat_title">売れ筋ランキング</div>
                        <?php if (function_exists('get_highest_rated')): ?>
                            <ul>
                                <?php get_highest_rated(); ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
        <div class="pull-left this_main_sidebar">
                <?php get_sidebar(); ?>
        </div>
    </div>
    <?php get_footer(); ?>