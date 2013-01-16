jQuery(function($){
    $('.entry-title').addClass('entry_title_bg');

    $('.this_article').addClass('my_article');
    $('.entry-header h1').addClass('entry_header_jp');
    $('.entry-header h1 a').css('color', '#000').hover(function(){
        $(this).css('color', '#e9851b');
    }, function(){
        $(this).css('color', '#000');
    });
    // ADD BORDER STYLING TO IMAGES IN GALLERY FROM POSTS
    var border_style = '2px solid #fff';
    $('.gallery-item').find('img').css('border', border_style).hover(function(){
        $(this).css('border', '2px solid #00b1ef');
    }, function(){
        $(this).css('border', border_style);
    });

    $(window).ready(function() {
        $(function removeLeftCol() {
            $('.jp_left_col, .center_nav_col, .main_content').css('min-height', $('.jp_wrapper').height());
        });
    });
    $(window).resize(function(){
        $(function removeMidBanner() {
            var w = $(window).width(), m = $('.mid_banner'), ma = $('.main_sidebar'), i = $('.index_content');
            if(w < 1000) {
                m.hide(), ma.hide(), i.removeClass('span8').addClass('span7');
            } else {
                m.show(), ma.show(), i.removeClass('span7').addClass('span8');
            }
        });
    });
    $('span.lcp_date').addClass("span2 pull-right");


/*
*
*   NEW STYLING
*
*/
    $('.widget_recent_entries ul li').find('a').addClass('main_sidebar_links');

    $('li.menu-item > a').addClass('inline-link-3');

    $('.morelink_class').addClass('btn btn-small');

    // ALTERNATE CATEGORY TITLE BORDER LEFT HERE
    (function(){
       var s = $('.cat_title'), a = $('.cat_title:even');
        s.addClass('cat_title_border_left');
        a.addClass('cat_title_border_left_alt').addClass('cat_title_border_left_alt2');
    })();

    $('.jp_random_image').addClass('jp_random_image_style');

    $('.box_1').addClass('box_2_bordered');

    // trim long title from the index gallery page, REUSABLE FUNCTION
    // JUST ADD THE ELEMENT TO THE ARRAY
    $(function(){
        var l = 25, c = $('.gallery_wrapper > ul.jp_post_list > li > a.this_title'), ms = $('.main_sidebar_links');
        $.each([c, ms], function(a, b){
            b.each(function(){
                if($(this).html().length > l) {
                    $(this).html($(this).html().substring(0, 20) + "   ...");
                }
            })
        })
    });

    $(function(){
        var this_div = $('.main_nav_bar'), stickyTop = this_div.offset().top;
        //$ SIGN TO DISABLE/INABLE
        $(window).scroll(function(){
            var windowTop = $(window).scrollTop
            var ts = {width: '100%', margin: 0},
                ds = {width: '95%', margin: '0 auto', 'margin-right': '21px'};
            if (stickyTop < windowTop) {
                this_div.addClass('navbar-fixed-top').css(ts);
            } else {
                this_div.removeClass('navbar-fixed-top').css(ds);
            }
        })
    });

    $(function(){
        var mc = $('.main_content');
        //mc.css('top', -90);
        (window).scroll(function(){
            var x = parseInt($(document).scrollTop);
            var y = $('.main_content').position().top;
            $('.scrollamount').html($(document).scrollTop());
            $('.mc_pos').html(y);
            if(x >= 0 ) {
            //    mc.css('top', -1 * x - 40);
            }
        })
    });
    // INDEX CONTENT TOGGLE ANIMATION
    $('.toggle_sidebar').click(function(){
        var t = $(this), p = $('.this_main_sidebar'), i = $('.index_content'),
            speed = 450, at = 'active_tog';
        if(t.hasClass('active_tog')){
            i.animate({left: '-=20px'}, 300, function(){
                p.animate({height: "toggle"}, speed, function(){
                    i.animate({left: '+=20', width: '95%'}, speed)
                    t.removeClass('active_tog icon-chevron-right').addClass('icon-chevron-left');
                    i.removeClass('span8');
                })
            })
        } else {
            i.addClass('span8').animate({left: '+=23px'}, 300)
                .animate({left:'-=23px',width: '66%'}, speed, function(){
                p.animate({height: "toggle"}, speed)
                t.removeClass('.icon-chevron-left').addClass('active_tog icon-chevron-right')
            })
        }
    })



    $('li.comment').append('<br class="clearfloat" />');
});


