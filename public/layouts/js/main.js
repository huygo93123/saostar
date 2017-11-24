$(document).ready(function() {
    // Count Date Time
    var dt = new Date();
    var day = dt.getDay(), date = dt.getDate(), month = dt.getMonth(), year = dt.getFullYear();
    switch(day) {
        case 0:
            day = 'Chủ nhật';
            break;
        case 1:
            day = 'Thứ hai';
            break;
        case 2:
            day = 'Thứ ba';
            break;
        case 3:
            day = 'Thứ tư';
            break;
        case 4:
            day = 'Thứ năm';
            break;
        case 5:
            day = 'Thứ sáu';
            break;
        case 6:
            day = 'Thứ bảy';
            break;
    }
    $('.swhld-day').text(day);
    $('.swhld-date').text(date);
    $('.swhld-month').text(month);
    $('.swhld-year').text(year);

    // Toggle Menu
    $('.swhnll-toggle').click(function() {
       $('.swh-menu').fadeToggle();
    });

    // Fixed Navigator
    var fixed = $('.swh-navigator').offset().top;
    $(window).scroll(function() {
       if($(window).scrollTop() >= fixed) {
           $('.swh-navigator').addClass('fixed');
           $('.sw-header').css('padding-bottom', '50px');
       } else {
           $('.swh-navigator').removeClass('fixed');
           $('.sw-header').css('padding-bottom', '0');
       }
    });
});