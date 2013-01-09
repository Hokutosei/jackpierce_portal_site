jQuery(function($){
    $('.entry-title').addClass('entry_title_bg');

    $('.this_article').addClass('my_article');
    $('.entry-header h1').addClass('entry_header_jp');
    $('.entry-header h1 a').css('color', '#000').hover(function(){
        $(this).css('color', '#e9851b');
    }, function(){
        $(this).css('color', '#000');
    });

    // ADD BORDER STYLING TO IMAGES
    var border_style = '2px solid #e1e1e1'
    $('.gallery-item').find('img').css('border', border_style).hover(function(){
        $(this).css('border', '2px solid #00b1ef');
    }, function(){
        $(this).css('border', border_style);
    })

    $(window).ready(function() {
        removeLeftCol();
    });
    $(window).resize(function(){
        removeMidBanner();
    });
    function removeLeftCol() {
        var m = $('.main_content').height();
        $('.jp_left_col, .center_nav_col, .main_content').css('min-height', $('.jp_wrapper').height());
    }
    $('span.lcp_date').addClass("span2 pull-right");
    //$('.news_wrapper').find('strong');
    function removeMidBanner() {
        var w = $(window).width(), m = $('.mid_banner'), ma = $('.main_sidebar'), i = $('.index_content');
        if(w < 1000) {
            m.hide(), ma.hide(), i.removeClass('span8').addClass('span7');
        } else {
            m.show(), ma.show(), i.removeClass('span7').addClass('span8');
        }
    }

/*
*
*   NEW STYLING
*
*/
    $('.widget_recent_entries ul li').find('a').addClass('main_sidebar_links');

    $('li.menu-item > a').addClass('inline-link-3');

    //$('<br />').insertBefore('.this_title');
    //$('a.jp_thumb_class').show();

    $('.morelink_class').addClass('btn btn-small');

    // ALTERNATE CATEGORY TITLE BORDER LEFT HERE
    (function(){
       var s = $('.cat_title'), a = $('.cat_title:even');
        s.addClass('cat_title_border_left');
        a.addClass('cat_title_border_left_alt').addClass('cat_title_border_left_alt2');
    })();

    $('.jp_random_image').addClass('jp_random_image_style');

    $('.box_1').addClass('box_2_bordered');

    // trim long title from the index gallery page
    (function(){
        var l = 25, c = $('.gallery_wrapper > ul.jp_post_list > li > a.this_title'), ms = $('.main_sidebar_links');
        var ta = [c, ms]
        c.each(function(){
            if($(this).html().length > l) {
                $(this).html($(this).html().substring(0, l) + "   ...");
            }
        })
        ms.each(function(){
            if($(this).html().length > l) {
                $(this).html($(this).html().substring(0, 20) + "   ...");
            }
        })

    })();

    $(function(){
        var this_div = $('.main_nav_bar'), stickyTop = this_div.offset().top;
        $(window).scroll(function(){
            var windowTop = $(window).scrollTop();
            var ts = {position: 'fixed', width: '100%', top: 0,  left:0, 'border-radius': '0px', zIndex:300},
                ds = {position:'static', width: '95%'};
            if (stickyTop < windowTop) {
                this_div.css(ts);
            }else {
                this_div.css(ds);
            }
        })
    })
});


