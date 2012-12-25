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
                    morelink_class=morelink_class]"
                )
                ?>
                <br class="clearfloat"/>

            </div>
            <div class="box_1">
                <div class="gallery_wrapper">
                    <?php
                    echo do_shortcode("
                    [catlist name=jp_item_1_cat catlink=yes class=jp_post_list

                    thumbnail=yes thumbnail_class=jp_thumb_class content=no numberposts=9 morelink=\"もっと見る\" morelink_class=morelink_class]
                ")
                    ?>
                    <br class="clearfloat"/>
                </div>
            </div>


            <div class="box_1">
                <div class="gallery_wrapper">
                    <?php
                    echo do_shortcode("
                    [catlist name=jp_item_2_cat catlink=yes class=jp_post_list

                    thumbnail=yes thumbnail_class=jp_thumb_class content=no numberposts=9 morelink=\"もっと見る\" morelink_class=morelink_class]
                ")
                    ?>
                    <br class="clearfloat"/>
                </div>
            </div>

            <div class="box_1">
                <div class="gallery_wrapper">
                    <?php
                        $args = array(
                          'name'    => 'jp_item_list1'
                        );
                        dynamic_sidebar($args);
                    ?>
                </div>
            </div>

            <br class="clearfloat"/>
        </div>
        <div class="span3 pull-left">
                <?php get_sidebar(); ?>
        </div>


    </div>
    <?php get_footer(); ?>