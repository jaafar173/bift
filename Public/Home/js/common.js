function highlight_nav(url) {
    var nav = $('#header-navigation').find('a[href="'+url+'"]');
    nav.closest('li').addClass('active');
}