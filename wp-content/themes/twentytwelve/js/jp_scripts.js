jQuery(function($){
    $('.entry-title').addClass('entry_title_bg');

    $('.this_article').addClass('my_article');
    $('.entry-header h1').addClass('entry_header_jp')
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

    $('.carousel-inner').css('height', '340px');
    $('.carousel').carousel();
    //$('#menu-navbar-inner').addClass('pull-right');


//    alert($('.home').height())
    $(window).ready(function() {
        removeLeftCol();
    });
    $(window).resize(function(){
        removeMidBanner();
    });
    function removeLeftCol() {
        var m = $('.main_content').height()
        $('.jp_left_col, .center_nav_col, .main_content').css('min-height', $('.jp_wrapper').height());
    }
    $('span.lcp_date').addClass("span2 pull-right");
    $('.news_wrapper').find('strong');
    function removeMidBanner() {
        var w = $(window).width(), m = $('.mid_banner'), ma = $('.main_sidebar'), i = $('.index_content');
        if(w < 1000) {
            m.hide(), ma.hide(), i.removeClass('span8').addClass('span7');
        } else {
            m.show(), ma.show(), i.removeClass('span7').addClass('span8');
        }
    }

/*
    $(window).scroll($.debounce( 400, true, function(){
        //$('.debug_window').html('SCROLLING!');
        $('span.lcp_date').addClass("pull-right").show();
    }));
    $(window).scroll($.debounce( 3000, function(){
        //$('.debug_window').html('DONE!');
        $('span.lcp_date').hide()
    }));
*/

    /* NEW STYLING */
    $('.widget_recent_entries ul li').find('a').addClass('main_sidebar_links');

    $('li.menu-item > a').addClass('inline-link-3');

    $('.jp_post_list > li > .this_title').hide();
    //$('a.jp_thumb_class').show();

    $('.morelink_class').addClass('btn btn-small');

/*    var view_more = $('blockquote.jp_article_heade_title > a.jp_view_more')
    view_more.hide();
    $('.index_content').hover(function(){
        $(view_more).show();
    }, function(){
        $(view_more).hide();
    });
*/
});
