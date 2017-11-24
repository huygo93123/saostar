@extends("layouts.master")
@section("title")
    Trang chủ
@endsection
@section("content")
<section class="sw-top-featured clearfix">
    <div class="swf-left fl">
        <article class="swfl-top1">
            <a href="#" class="swflt1-thumb">
                <img src="{{ asset('layouts') }}/images/top1.jpg" alt="">
            </a>

            <div class="swflt1-info">
                <span class="swflt1i-tag">Cặp đôi hoàn hảo 2017</span>

                <h1 class="swflt1i-title">
                    <a href="#">Hòa Minzy bất ngờ lao lên sân khấu tỏ tình ‘Em thương anh’ với hotboy Bolero</a>
                </h1>
            </div>
        </article>

        <section class="swfl-list">
            <article class="swfl-item">
                <a href="#" class="swfli-thumb">
                    <img src="{{ asset('layouts') }}/images/top-list-01.jpg" alt="">
                </a>

                <h3 class="swfli-title">
                    <a href="#">Lý Thu Thảo quyết cùng Mai Tiến Dũng ‘hóa tiên’ mặc cố vấn Quang Linh ‘ngăn cấm’</a>
                </h3>
            </article>

            <article class="swfl-item">
                <a href="#" class="swfli-thumb">
                    <img src="{{ asset('layouts') }}/images/top-list-2.jpg" alt="">
                </a>

                <h3 class="swfli-title">
                    <a href="#">Hoài Ngọc - Ngọc Ánh ‘bứt phá’ vượt thử thách mới, Đình Tâm ‘ma mị’ với Trên…</a>
                </h3>
            </article>

            <article class="swfl-item">
                <a href="#" class="swfli-thumb">
                    <img src="{{ asset('layouts') }}/images/top-list-3.jpg" alt="">
                </a>

                <h3 class="swfli-title">
                    <a href="#">Những cái tên khiến rating show giải trí Kpop… tăng chóng mặt?</a>
                </h3>
            </article>
        </section>
    </div>

    <div class="swf-right fr">
        <article class="swfr-post">
            <a href="#" class="swfrp-thumb">
                <img src="{{ asset('layouts') }}/images/top2.jpg" alt="">
            </a>

            <div class="swfrp-info">
                <h2 class="swfrpi-title">
                    <a href="#">Cay cú vì bị quỵt tiền, Neymar muốn loại Barcelona khỏi Champions League</a>
                </h2>

                <h4 class="swfrpi-sapo">Ngôi sao Brazil đâm đơn kiện Barcelona và muốn đội bóng cũ phải nhận án phạt cao nhất, đó là bị loại khỏi Champions</h4>
            </div>
        </article>
    </div>
</section>

<section class="sw-hot">
    <h4 class="sw-title">
        <a href="#"><i class="fa fa-star-o"></i>Tin hot nhất</a>
    </h4>

    <section class="swh-main clearfix">
        <div class="thn owl-carousel owl-theme">
            <article class="swhm-item" style="margin-right: 15px;">
                <a href="#" class="swhmi-thumb fl">
                    <img src="{{ asset('layouts') }}/images/hot-1.jpg" alt="">

                    <span class="swhmi-stt">1</span>
                </a>

                <div class="swhmi-info">
                    <div class="swhmii-top">
                        <h3 class="swhmi-title">
                            <a href="#">Loạt khoảnh khắc ‘ngọt ngào đến tan chảy’ của hoa hậu Đặng Thu Thảo bên ông xã điển trai</a>
                        </h3>

                        <span class="swhmi-date">Ngày 20/8/2017</span>
                    </div>

                    <div class="swhmii-bottom">
                                    <span class="swhmi-view">
                                        <i class="fa fa-eye"></i>48k
                                    </span>
                        <span class="swhmi-like">
                                        <i class="fa fa-thumbs-up"></i>36.4k
                                    </span>
                        <span class="swhmi-share">
                                        <i class="fa fa-share-alt "></i>6.7k
                                    </span>
                    </div>
                </div>
            </article>
            <article class="swhm-item" style="">
                <a href="#" class="swhmi-thumb fl">
                    <img src="{{ asset('layouts') }}/images/hot-1.jpg" alt="">

                    <span class="swhmi-stt">1</span>
                </a>

                <div class="swhmi-info">
                    <div class="swhmii-top">
                        <h3 class="swhmi-title">
                            <a href="#">Loạt khoảnh khắc ‘ngọt ngào đến tan chảy’ của hoa hậu Đặng Thu Thảo bên ông xã điển trai</a>
                        </h3>

                        <span class="swhmi-date">Ngày 20/8/2017</span>
                    </div>

                    <div class="swhmii-bottom">
                                    <span class="swhmi-view">
                                        <i class="fa fa-eye"></i>48k
                                    </span>
                        <span class="swhmi-like">
                                        <i class="fa fa-thumbs-up"></i>36.4k
                                    </span>
                        <span class="swhmi-share">
                                        <i class="fa fa-share-alt "></i>6.7k
                                    </span>
                    </div>
                </div>
            </article>
            <article class="swhm-item" style="">
                <a href="#" class="swhmi-thumb fl">
                    <img src="{{ asset('layouts') }}/images/hot-1.jpg" alt="">

                    <span class="swhmi-stt">1</span>
                </a>

                <div class="swhmi-info">
                    <div class="swhmii-top">
                        <h3 class="swhmi-title">
                            <a href="#">Loạt khoảnh khắc ‘ngọt ngào đến tan chảy’ của hoa hậu Đặng Thu Thảo bên ông xã điển trai</a>
                        </h3>

                        <span class="swhmi-date">Ngày 20/8/2017</span>
                    </div>

                    <div class="swhmii-bottom">
                                    <span class="swhmi-view">
                                        <i class="fa fa-eye"></i>48k
                                    </span>
                        <span class="swhmi-like">
                                        <i class="fa fa-thumbs-up"></i>36.4k
                                    </span>
                        <span class="swhmi-share">
                                        <i class="fa fa-share-alt "></i>6.7k
                                    </span>
                    </div>
                </div>
            </article>
            <article class="swhm-item" style="">
                <a href="#" class="swhmi-thumb fl">
                    <img src="{{ asset('layouts') }}/images/hot-1.jpg" alt="">

                    <span class="swhmi-stt">1</span>
                </a>

                <div class="swhmi-info">
                    <div class="swhmii-top">
                        <h3 class="swhmi-title">
                            <a href="#">Loạt khoảnh khắc ‘ngọt ngào đến tan chảy’ của hoa hậu Đặng Thu Thảo bên ông xã điển trai</a>
                        </h3>

                        <span class="swhmi-date">Ngày 20/8/2017</span>
                    </div>

                    <div class="swhmii-bottom">
                                    <span class="swhmi-view">
                                        <i class="fa fa-eye"></i>48k
                                    </span>
                        <span class="swhmi-like">
                                        <i class="fa fa-thumbs-up"></i>36.4k
                                    </span>
                        <span class="swhmi-share">
                                        <i class="fa fa-share-alt "></i>6.7k
                                    </span>
                    </div>
                </div>
            </article>
        </div>


        <span class="swhm-arrow-left"></span>
        <span class="swhm-arrow-right"></span>
    </section>
</section>

<section class="sw-bodybanner">
    <img src="{{ asset('layouts') }}/images/body-banner.jpg" alt="">
</section>

<section class="sw-stream">
    <img src="{{ asset('layouts') }}/images/dong-su-kien.png" alt="">
</section>

<section class="sw-featured clearfix">
    <div class="w660 fl">
        <article class="swf-top-item clearfix">
            <a href="#" class="swft-thumb fl">
                <img src="{{ asset('layouts') }}/images/item-1.jpg" alt="">
            </a>

            <h3 class="swfi-title">
                <a href="#">Cả bầu trời thanh xuân ùa về với loạt tái hợp của những ‘cặp đôi vàng’</a>
            </h3>

            <p class="swfi-info"><a href="#" class="swfii-category">Âm nhạc</a><span class="swfii-dot"></span><span class="swfii-time">3 giờ trước</span></p>

            <h4 class="swfi-sapo">Bạn có tin được không? Đã chục năm rồi bạn mới được nhìn thấy những cặp đôi này trên sân khấu một lần nữa.</h4>
        </article>

        <article class="swf-item clearfix">
            <a href="#" class="swfi-thumb fl">
                <img src="{{ asset('layouts') }}/images/item-2.jpg" alt="">
            </a>

            <h3 class="swfi-title">
                <a href="#">Nữ Bí thư phường lên tiếng về hình ảnh mặc váy, đứng trên bè dân kéo khi đi thị sát mưa lũ</a>
            </h3>

            <p class="swfi-info"><a href="#" class="swfii-category">Tin nóng</a><span class="swfii-dot"></span><span class="swfii-time">5 giờ trước</span></p>
        </article>

        <article class="swf-item clearfix">
            <a href="#" class="swfi-thumb fl">
                <img src="{{ asset('layouts') }}/images/item-3.jpg" alt="">
            </a>

            <h3 class="swfi-title">
                <a href="#">Steven Gerrard tiết lộ tình cảm dành cho Roy Keane</a>
            </h3>

            <p class="swfi-info"><a href="#" class="swfii-category">Bóng đá</a><span class="swfii-dot"></span><span class="swfii-time">5 giờ trước</span></p>
        </article>

        <article class="swf-item clearfix">
            <a href="#" class="swfi-thumb fl">
                <img src="{{ asset('layouts') }}/images/item-4.jpg" alt="">
            </a>

            <h3 class="swfi-title">
                <a href="#">Fan rần rần vì DJ ‘huyền thoại của các huyền thoại’ Tiësto đến Việt Nam vào tháng 12 này</a>
            </h3>

            <p class="swfi-info"><a href="#" class="swfii-category">Âm nhạc</a><span class="swfii-dot"></span><span class="swfii-time">3 giờ trước</span></p>
        </article>

        <article class="swf-item clearfix">
            <a href="#" class="swfi-thumb fl">
                <img src="{{ asset('layouts') }}/images/item-5.jpg" alt="">
            </a>

            <h3 class="swfi-title">
                <a href="#">Không chỉ nóng bỏng với bikini, Hà Thu còn khiến ‘hoa ghen, liễu hờn’ khi diện áo dài Việt</a>
            </h3>

            <p class="swfi-info"><a href="#" class="swfii-category">Hậu trường</a><span class="swfii-dot"></span><span class="swfii-time">4 giờ trước</span></p>
        </article>

        <section class="sw-mustwatch">
            <h4 class="sw-title">
                <a href="#"><span class="swtmt-icon"></span>Bạn phải xem</a>
            </h4>

            <section class="swm-main">
                <video
                        id="my-player"
                        class="video-js vjs-big-play-centered vjs-16-9"
                        muted
                        controls
                        preload=""
                        data-setup='{}'
                >
                    <source src="video/videoplayback.mp4" type="video/mp4"></source>
                    <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a
                        web browser that
                        <a href="http://videojs.com/html5-video-support/" target="_blank">
                            supports HTML5 video
                        </a>
                    </p>
                </video>
                <div class="swmm-info">
                    <h4 class="swmmi-title">
                        <a href="#">Quốc Tuấn - "Ông bố quốc dân" đi tìm hạnh phúc cho con trai độc nhất cuối đường hầm</a>
                    </h4>

                    <div class="swmmi-icon">
                        <a href="#" class="swmmii-link"><i class="fa fa-link"></i></a>
                        <a href="#" class="swmmii-fb"><i class="fa fa-facebook"></i></a>
                    </div>
                </div>
            </section>
        </section>

        <article class="swf-top-item clearfix">
            <a href="#" class="swft-thumb fl">
                <img src="{{ asset('layouts') }}/images/item-1.jpg" alt="">

                <span class="swfi-tag">Miss World 2017</span>
            </a>

            <h3 class="swfi-title">
                <a href="#">Cả bầu trời thanh xuân ùa về với loạt tái hợp của những ‘cặp đôi vàng’</a>
            </h3>

            <p class="swfi-info"><a href="#" class="swfii-category">Âm nhạc</a><span class="swfii-dot"></span><span class="swfii-time">3 giờ trước</span></p>

            <h4 class="swfi-sapo">Bạn có tin được không? Đã chục năm rồi bạn mới được nhìn thấy những cặp đôi này trên sân khấu một lần nữa.</h4>
        </article>

        <article class="swf-item clearfix">
            <a href="#" class="swfi-thumb fl">
                <img src="{{ asset('layouts') }}/images/item-2.jpg" alt="">

                <span class="swfi-tag">AVENGERS 4</span>
            </a>

            <h3 class="swfi-title">
                <a href="#">Nữ Bí thư phường lên tiếng về hình ảnh mặc váy, đứng trên bè dân kéo khi đi thị sát mưa lũ</a>
            </h3>

            <p class="swfi-info"><a href="#" class="swfii-category">Tin nóng</a><span class="swfii-dot"></span><span class="swfii-time">5 giờ trước</span></p>
        </article>

        <article class="swf-item clearfix">
            <a href="#" class="swfi-thumb fl">
                <img src="{{ asset('layouts') }}/images/item-3.jpg" alt="">
            </a>

            <h3 class="swfi-title">
                <a href="#">Steven Gerrard tiết lộ tình cảm dành cho Roy Keane</a>
            </h3>

            <p class="swfi-info"><a href="#" class="swfii-category">Bóng đá</a><span class="swfii-dot"></span><span class="swfii-time">5 giờ trước</span></p>
        </article>

        <article class="swf-item clearfix">
            <a href="#" class="swfi-thumb fl">
                <img src="{{ asset('layouts') }}/images/item-4.jpg" alt="">
            </a>

            <h3 class="swfi-title">
                <a href="#">Fan rần rần vì DJ ‘huyền thoại của các huyền thoại’ Tiësto đến Việt Nam vào tháng 12 này</a>
            </h3>

            <p class="swfi-info"><a href="#" class="swfii-category">Âm nhạc</a><span class="swfii-dot"></span><span class="swfii-time">3 giờ trước</span></p>
        </article>

        <article class="swf-item clearfix">
            <a href="#" class="swfi-thumb fl">
                <img src="{{ asset('layouts') }}/images/item-5.jpg" alt="">
            </a>

            <h3 class="swfi-title">
                <a href="#">Không chỉ nóng bỏng với bikini, Hà Thu còn khiến ‘hoa ghen, liễu hờn’ khi diện áo dài Việt</a>
            </h3>

            <p class="swfi-info"><a href="#" class="swfii-category">Hậu trường</a><span class="swfii-dot"></span><span class="swfii-time">4 giờ trước</span></p>
        </article>
    </div>

    <div class="w300 fr">
        <div class="swf-banner">
            <img src="{{ asset('layouts') }}/images/banner-300x250.jpg" alt="">
        </div>

        <div class="swf-banner">
            <img src="{{ asset('layouts') }}/images/banner-300-250.jpg" alt="">
        </div>

        <section class="swf-suggest">
            <h4 class="swfs-heading"><span><i class="fa fa-bell swfsh-icon"></i>Bạn cần biết</span></h4>

            <article class="swfs-item clearfix">
                <a href="#" class="swfsi-thumb fl">
                    <img src="{{ asset('layouts') }}/images/suggest-1.jpg" alt="">
                </a>

                <h3 class="swfsi-title">
                    <a href="#">3 chiêu giúp bạn cool ngầu đúng chuẩn khi đội mũ bảo hiểm</a>
                </h3>
            </article>

            <article class="swfs-item clearfix">
                <a href="#" class="swfsi-thumb fl">
                    <img src="{{ asset('layouts') }}/images/suggest-2.jpg" alt="">
                </a>

                <h3 class="swfsi-title">
                    <a href="#">Hàng chục cô dâu, chú rể nhảy flashmob khiến phố đi bộ Nguyễn Huệ ‘tắc nghẽn’</a>
                </h3>
            </article>

            <article class="swfs-item clearfix">
                <a href="#" class="swfsi-thumb fl">
                    <img src="{{ asset('layouts') }}/images/suggest-3.jpg" alt="">
                </a>

                <h3 class="swfsi-title">
                    <a href="#">Thu Trang quyết cạnh tranh ‘tiến sĩ văn học’ với Hoàng Thùy</a>
                </h3>
            </article>

            <article class="swfs-item clearfix">
                <a href="#" class="swfsi-thumb fl">
                    <img src="{{ asset('layouts') }}/images/suggest-4.jpg" alt="">
                </a>

                <h3 class="swfsi-title">
                    <a href="#">Cận cảnh ‘bể bơi vô cực dát vàng 24K’ lớn nhất thế giới ở Đà Nẵng</a>
                </h3>
            </article>

            <article class="swfs-item clearfix">
                <a href="#" class="swfsi-thumb fl">
                    <img src="{{ asset('layouts') }}/images/suggest-5.jpg" alt="">
                </a>

                <h3 class="swfsi-title">
                    <a href="#">Bánh Trung thu với hình thù ngộ nghĩnh khiến nhiều người mê tít</a>
                </h3>
            </article>

            <article class="swfs-item clearfix">
                <a href="#" class="swfsi-thumb fl">
                    <img src="{{ asset('layouts') }}/images/suggest-6.jpg" alt="">
                </a>

                <h3 class="swfsi-title">
                    <a href="#">Thực tập là chạy việc không công? Hãy quên ý nghĩ đó đi!</a>
                </h3>
            </article>

            <article class="swfs-item clearfix">
                <a href="#" class="swfsi-thumb fl">
                    <img src="{{ asset('layouts') }}/images/suggest-7.jpg" alt="">
                </a>

                <h3 class="swfsi-title">
                    <a href="#">Dàn mẫu Tây hoá công chúa dạo bước trong show diễn cổ tích của NTK Anh Thư</a>
                </h3>
            </article>

            <article class="swfs-item clearfix">
                <a href="#" class="swfsi-thumb fl">
                    <img src="{{ asset('layouts') }}/images/suggest-1.jpg" alt="">
                </a>

                <h3 class="swfsi-title">
                    <a href="#">3 chiêu giúp bạn cool ngầu đúng chuẩn khi đội mũ bảo hiểm</a>
                </h3>
            </article>
        </section>

        <div class="swf-banner">
            <img src="{{ asset('layouts') }}/images/banner-300.jpg" alt="">
        </div>
    </div>
</section>

<section class="sw-special">
    <h4 class="sws-heading">
        <a href="#" class="swsh-title">
            <img src="{{ asset('layouts') }}/images/special.png" alt="">
        </a>

        <a href="#" class="swsh-viewmore">Xem thêm<i class="fa fa-angle-right"></i></a>
    </h4>

    <section class="sws-main clearfix">
        <section class="swsm-content fl">
            <article class="swsmc-top-item">
                <a href="#" class="swsmct-thumb fl">
                    <img src="{{ asset('layouts') }}/images/special-1.jpg" alt="">
                </a>

                <h4 class="swsmctt-title">
                    <a href="#">Tôi kể bạn nghe Vũ Cát Tường tuổi 25: ‘Đứa trẻ cô độc’ không phe cánh, cũng chẳng có đại gia</a>
                </h4>

                <span class="swsmctt-time">Ngày 20/8/2017</span>
            </article>

            <article class="swsmc-item">
                <a href="#" class="swsmci-thumb">

                </a>
            </article>
        </section>

        <div class="swsm-sponsored fr">
            <span class="swsms-heading">Sponsored</span>

            <img src="{{ asset('layouts') }}/images/sponsored.jpg" alt="">
        </div>
    </section>
</section>

<section class="sw-featured clearfix">
    <div class="w660 fl">
        <article class="swf-top-item clearfix">
            <a href="#" class="swft-thumb fl">
                <img src="{{ asset('layouts') }}/images/item-1.jpg" alt="">
            </a>

            <h3 class="swfi-title">
                <a href="#">Cả bầu trời thanh xuân ùa về với loạt tái hợp của những ‘cặp đôi vàng’</a>
            </h3>

            <p class="swfi-info"><a href="#" class="swfii-category">Âm nhạc</a><span class="swfii-dot"></span><span class="swfii-time">3 giờ trước</span></p>

            <h4 class="swfi-sapo">Bạn có tin được không? Đã chục năm rồi bạn mới được nhìn thấy những cặp đôi này trên sân khấu một lần nữa.</h4>
        </article>

        <article class="swf-item clearfix">
            <a href="#" class="swfi-thumb fl">
                <img src="{{ asset('layouts') }}/images/item-2.jpg" alt="">
            </a>

            <h3 class="swfi-title">
                <a href="#">Nữ Bí thư phường lên tiếng về hình ảnh mặc váy, đứng trên bè dân kéo khi đi thị sát mưa lũ</a>
            </h3>

            <p class="swfi-info"><a href="#" class="swfii-category">Tin nóng</a><span class="swfii-dot"></span><span class="swfii-time">5 giờ trước</span></p>
        </article>

        <article class="swf-item clearfix">
            <a href="#" class="swfi-thumb fl">
                <img src="{{ asset('layouts') }}/images/item-3.jpg" alt="">
            </a>

            <h3 class="swfi-title">
                <a href="#">Steven Gerrard tiết lộ tình cảm dành cho Roy Keane</a>
            </h3>

            <p class="swfi-info"><a href="#" class="swfii-category">Bóng đá</a><span class="swfii-dot"></span><span class="swfii-time">5 giờ trước</span></p>
        </article>

        <article class="swf-item clearfix">
            <a href="#" class="swfi-thumb fl">
                <img src="{{ asset('layouts') }}/images/item-4.jpg" alt="">
            </a>

            <h3 class="swfi-title">
                <a href="#">Fan rần rần vì DJ ‘huyền thoại của các huyền thoại’ Tiësto đến Việt Nam vào tháng 12 này</a>
            </h3>

            <p class="swfi-info"><a href="#" class="swfii-category">Âm nhạc</a><span class="swfii-dot"></span><span class="swfii-time">3 giờ trước</span></p>
        </article>

        <article class="swf-item clearfix">
            <a href="#" class="swfi-thumb fl">
                <img src="{{ asset('layouts') }}/images/item-5.jpg" alt="">
            </a>

            <h3 class="swfi-title">
                <a href="#">Không chỉ nóng bỏng với bikini, Hà Thu còn khiến ‘hoa ghen, liễu hờn’ khi diện áo dài Việt</a>
            </h3>

            <p class="swfi-info"><a href="#" class="swfii-category">Hậu trường</a><span class="swfii-dot"></span><span class="swfii-time">4 giờ trước</span></p>
        </article>
    </div>

    <div class="w300 fr">
        <section class="swf-trending">
            <h4 class="swft-heading"><span>Hot Trend</span></h4>

            <ul class="swft-list">
                <li class="swftl-item">
                    <a href="#">#Hoa hậu Hoàn Vũ Việt Nam 2017</a>
                </li>
                <li class="swftl-item">
                    <a href="#">#MAMA 2017</a>
                </li>
                <li class="swftl-item">
                    <a href="#">#The Look 2017</a>
                </li>
                <li class="swftl-item">
                    <a href="#">#Cặp đôi hoàn hảo 2017</a>
                </li>
                <li class="swftl-item">
                    <a href="#">#Huyền My</a>
                </li>
                <li class="swftl-item">
                    <a href="#">#Em gái mưa</a>
                </li>
                <li class="swftl-item">
                    <a href="#">#Hương Tràm</a>
                </li>
            </ul>
        </section>

        <div class="swf-banner">
            <img src="{{ asset('layouts') }}/images/banner-300x250.jpg" alt="">
        </div>

        <div class="swf-banner">
            <img src="{{ asset('layouts') }}/images/banner-300-250.jpg" alt="">
        </div>
    </div>
</section>

<section class="sw-quagiang">
    <img src="{{ asset('layouts') }}/images/quagiang.jpg" alt="">
</section>

<section class="sw-cate-list">
    <section class="swc-item clearfix">
        <h4 class="swci-heading"><a href="#">GIẢI TRÍ</a></h4>

        <article class="swci-top-post">
            <a href="#" class="swcit-thumb">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcit-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>

        <article class="swci-post">
            <a href="#" class="swcip-thumb fl">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcip-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>

        <article class="swci-post">
            <a href="#" class="swcip-thumb fl">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcip-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>
    </section>

    <section class="swc-item clearfix">
        <h4 class="swci-heading"><a href="#">Âm nhạc</a></h4>

        <article class="swci-top-post">
            <a href="#" class="swcit-thumb">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcit-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>

        <article class="swci-post">
            <a href="#" class="swcip-thumb fl">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcip-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>

        <article class="swci-post">
            <a href="#" class="swcip-thumb fl">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcip-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>
    </section>

    <section class="swc-item clearfix">
        <h4 class="swci-heading"><a href="#">Phim ảnh</a></h4>

        <article class="swci-top-post">
            <a href="#" class="swcit-thumb">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcit-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>

        <article class="swci-post">
            <a href="#" class="swcip-thumb fl">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcip-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>

        <article class="swci-post">
            <a href="#" class="swcip-thumb fl">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcip-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>
    </section>
</section>

<section class="sw-cate-list">
    <section class="swc-item clearfix">
        <h4 class="swci-heading"><a href="#">Xã hội</a></h4>

        <article class="swci-top-post">
            <a href="#" class="swcit-thumb">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcit-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>

        <article class="swci-post">
            <a href="#" class="swcip-thumb fl">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcip-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>

        <article class="swci-post">
            <a href="#" class="swcip-thumb fl">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcip-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>
    </section>

    <section class="swc-item clearfix">
        <h4 class="swci-heading"><a href="#">Đời sống</a></h4>

        <article class="swci-top-post">
            <a href="#" class="swcit-thumb">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcit-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>

        <article class="swci-post">
            <a href="#" class="swcip-thumb fl">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcip-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>

        <article class="swci-post">
            <a href="#" class="swcip-thumb fl">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcip-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>
    </section>

    <section class="swc-item clearfix">
        <h4 class="swci-heading"><a href="#">Thế giới</a></h4>

        <article class="swci-top-post">
            <a href="#" class="swcit-thumb">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcit-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>

        <article class="swci-post">
            <a href="#" class="swcip-thumb fl">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcip-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>

        <article class="swci-post">
            <a href="#" class="swcip-thumb fl">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcip-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>
    </section>
</section>

<section class="sw-xemlacuoi">
    <img src="{{ asset('layouts') }}/images/xem-la-cuoi.jpg" alt="">
</section>

<section class="sw-cate-list">
    <section class="swc-item clearfix">
        <h4 class="swci-heading"><a href="#">Thời trang</a></h4>

        <article class="swci-top-post">
            <a href="#" class="swcit-thumb">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcit-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>

        <article class="swci-post">
            <a href="#" class="swcip-thumb fl">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcip-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>

        <article class="swci-post">
            <a href="#" class="swcip-thumb fl">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcip-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>
    </section>

    <section class="swc-item clearfix">
        <h4 class="swci-heading"><a href="#">Đẹp 360</a></h4>

        <article class="swci-top-post">
            <a href="#" class="swcit-thumb">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcit-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>

        <article class="swci-post">
            <a href="#" class="swcip-thumb fl">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcip-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>

        <article class="swci-post">
            <a href="#" class="swcip-thumb fl">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcip-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>
    </section>

    <section class="swc-item clearfix">
        <h4 class="swci-heading"><a href="#">Gia đình sao</a></h4>

        <article class="swci-top-post">
            <a href="#" class="swcit-thumb">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcit-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>

        <article class="swci-post">
            <a href="#" class="swcip-thumb fl">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcip-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>

        <article class="swci-post">
            <a href="#" class="swcip-thumb fl">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcip-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>
    </section>
</section>

<section class="sw-cate-list">
    <section class="swc-item clearfix">
        <h4 class="swci-heading"><a href="#">Sinh viên TV</a></h4>

        <article class="swci-top-post">
            <a href="#" class="swcit-thumb">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcit-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>

        <article class="swci-post">
            <a href="#" class="swcip-thumb fl">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcip-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>

        <article class="swci-post">
            <a href="#" class="swcip-thumb fl">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcip-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>
    </section>

    <section class="swc-item clearfix">
        <h4 class="swci-heading"><a href="#">Thể thao</a></h4>

        <article class="swci-top-post">
            <a href="#" class="swcit-thumb">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcit-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>

        <article class="swci-post">
            <a href="#" class="swcip-thumb fl">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcip-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>

        <article class="swci-post">
            <a href="#" class="swcip-thumb fl">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcip-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>
    </section>

    <section class="swc-item clearfix">
        <h4 class="swci-heading"><a href="#">Công nghệ - Xe</a></h4>

        <article class="swci-top-post">
            <a href="#" class="swcit-thumb">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcit-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>

        <article class="swci-post">
            <a href="#" class="swcip-thumb fl">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcip-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>

        <article class="swci-post">
            <a href="#" class="swcip-thumb fl">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcip-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>
    </section>
</section>

<section class="sw-cate-list">
    <section class="swc-item clearfix">
        <h4 class="swci-heading"><a href="#">Du lịch</a></h4>

        <article class="swci-top-post">
            <a href="#" class="swcit-thumb">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcit-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>

        <article class="swci-post">
            <a href="#" class="swcip-thumb fl">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcip-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>

        <article class="swci-post">
            <a href="#" class="swcip-thumb fl">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcip-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>
    </section>

    <section class="swc-item clearfix">
        <h4 class="swci-heading"><a href="#">Ẩm thực</a></h4>

        <article class="swci-top-post">
            <a href="#" class="swcit-thumb">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcit-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>

        <article class="swci-post">
            <a href="#" class="swcip-thumb fl">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcip-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>

        <article class="swci-post">
            <a href="#" class="swcip-thumb fl">
                <img src="{{ asset('layouts') }}/images/thumb-1.jpg" alt="">
            </a>

            <h4 class="swcip-title">
                <a href="#">Đập tan tin đồn ly hôn, Dương Mịch ngọt ngào chúc mừng sinh nhật ông xã Lưu Khải Uy</a>
            </h4>
        </article>
    </section>

    <section class="swc-item clearfix">
        <img src="{{ asset('layouts') }}/images/sinh-nhat-sao.jpg" alt="">
    </section>
</section>
@endsection