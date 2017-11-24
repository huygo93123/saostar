$(document).ready(function() {
    /*auto play pause stop video when scroll*/
    var player = videojs('my-player');
    function checkMedia() {
        player.on('ended', function() {
            $(document).off('scroll', checkMedia);
        });

        if ($('video').visible(true)) {
            player.play();
        } else {
            player.pause();
        }
    }
    $('video').click(function () {
        $(document).off('scroll', checkMedia);
    })
    $(document).on('scroll', checkMedia);

    slideNewHot();
});

function slideNewHot() {
    var owl = $('.thn');
    owl.owlCarousel({
        // item :4,
        nav: true,
        loop: true,
        autoplay:true,
        autoplayTimeout:3000,
        autoWidth:true,
        autoplayHoverPause:false,
        navigationText: [
            "<i class='icon-chevron-left icon-white'><</i>",
            "<i class='icon-chevron-right icon-white'>></i>"
        ],
        navClass: ['owl-prev', 'owl-next']
    })
}
