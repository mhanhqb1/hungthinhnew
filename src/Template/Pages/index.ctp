<div class="sf_cols">
    <div class="sf_colsOut homewrapper">
        <div id="cprContent_T979D2F30002_Col00" class="sf_colsIn sf_1col_1in_100"><div class="sf_cols">
                <div class="sf_colsOut homeleft">
                    <div id="cprContent_T979D2F30003_Col00" class="sf_colsIn sf_2cols_1in_75"><div id="cprContent_T979D2F30004" class="homebanner">
                            <?= $this->Html->script('jssor.core.js') ?>
                            <?= $this->Html->script('jssor.utils.js') ?>
                            <?= $this->Html->script('jssor.slider.js') ?>
                            <script>
                                jQuery(document).ready(function ($) {
                                    var options = {
                                        $AutoPlay: true, //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                                        $AutoPlayInterval: 4000, //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                                        $SlideDuration: 500, //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                                        $DragOrientation: 1, //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                                        $ThumbnailNavigatorOptions: {
                                            $Class: $JssorThumbnailNavigator$, //[Required] Class to create thumbnail navigator instance
                                            $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always

                                            $Loop: false, //[Optional] Enable loop(circular) of carousel or not, default value is true
                                            $SpacingX: 3, //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                                            $SpacingY: 3, //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                                            $DisplayPieces: 6, //[Optional] Number of pieces to display, default value is 1
                                            $ParkingPosition: 204, //[Optional] The offset position to park thumbnail,

                                            $ArrowNavigatorOptions: {
                                                $Class: $JssorArrowNavigator$, //[Requried] Class to create arrow navigator instance
                                                $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always
                                                $AutoCenter: 2, //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                                                $Steps: 6                                       //[Optional] Steps to go for each navigation request, default value is 1
                                            }
                                        }
                                    };

                                    var banner_container = new $JssorSlider$("banner_container", options);

                                    //responsive code begin
                                    //you can remove responsive code if you don't want the slider scales while window resizes
                                    function ScaleSlider() {
                                        var parentWidth = banner_container.$Elmt.parentNode.clientWidth;
                                        var bodyWidth = document.body.clientWidth;
                                        var windowWidth = window.innerWidth;
                                        var width = bodyWidth;
                                        if (windowWidth)
                                            width = windowWidth;
                                        if (width)
                                            if (width < 1025)
                                                banner_container.$SetScaleWidth(Math.min(width, 1024));
                                            else
                                                banner_container.$SetScaleWidth(Math.min(width, 743));
                                        else
                                            window.setTimeout(ScaleSlider, 30);
                                    }

                                    ScaleSlider();

                                    //if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                                    $(window).bind('resize', ScaleSlider);
                                    //}
                                    //responsive code end
                                });
                            </script>

                            <div id="banner_container" style="position: relative; width: 743px; height: 590px; overflow: hidden;">
                                <!-- Loading Screen -->
                                <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
                                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                                    <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                                </div>
                                <div data-u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 743px; height: 473px;">
                                    <div>
                                        <img data-u="image" src="img/Homebanner-D1mension-HCMC.jpg">
                                        <img data-u="thumb" src="img/Homebanner-D1mension-HCMC.tmb-.jpg" >
                                    </div>
                                    <div>
                                        <img data-u="image" src="img/ong-chen-lian-pang-len-nhan-giai-thuong.jpg">
                                        <img data-u="thumb" src="img/ong-chen-lian-pang-len-nhan-giai-thuong.tmb-.jpg" >
                                    </div>
                                    <div>
                                        <img data-u="image" src="img/the-krista-homebanner-25-25.jpg">
                                        <img data-u="thumb" src="img/the-krista-homebanner-25-25.tmb-.jpg" >
                                    </div>
                                    <div>
                                        <img data-u="image" src="img/seasons-avenue-homebanner-vn-03-03.jpg">
                                        <img data-u="thumb" src="img/seasons-avenue-homebanner-vn-03-03.tmb-.jpg" >
                                    </div>
                                </div>
                                <!-- ThumbnailNavigator Skin Begin -->
                                <div data-u="thumbnavigator" class="slide_thumb" style="position: absolute; width: 743px; height: 90px; left:0px; bottom: 0px;">
                                    <!-- Thumbnail Item Skin Begin -->
                                    <div data-u="slides" style="cursor: move;">
                                        <div data-u="prototype" class="p">
                                            <div class="w">
                                                <div data-u="thumbnailtemplate" class="t"></div>
                                            </div>
                                            <div class="o"></div>
                                        </div>
                                    </div>
                                    <!-- Thumbnail Item Skin End -->
                                    <span data-u="arrowleft" class="jssora11l" style="width: 30px; height: 30px; left: 20px;"></span>
                                    <span data-u="arrowright" class="jssora11r" style="width: 30px; height: 30px; right: 20px;"></span>
                                </div>
                                <!-- ThumbnailNavigator Skin End -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sf_colsOut homeright">
                    <div id="cprContent_T979D2F30003_Col01" class="sf_colsIn sf_2cols_2in_25">
                        <div class="sfContentBlock social-container">
                            <h3>Dõi theo chúng tôi tại:</h3> 
                            <ul> 
                                <li>
                                    <a href="https://www.facebook.com/capitalandvietnamofficial/?pnref=story" target="_blank">
                                        <span data-sfref="[images|OpenAccessDataProvider]93d711d6-e855-6b4a-a72f-ff000008fdb8" class="sfImageWrapper">
                                            <img src="img/icon-facebook.png" alt="Facebook CapitaLand Vietnam" style="border-width: 0px; border-style: solid;" displaymode="Original" title="icon-facebook">
                                        </span>
                                    </a>
                                </li> 
                                <li>
                                    <a href="https://www.youtube.com/channel/UC_D9sg8ms0JojdebA-lDgMA" target="_blank">
                                        <span data-sfref="[images|OpenAccessDataProvider]6bda11d6-e855-6b4a-a72f-ff000008fdb8" class="sfImageWrapper">
                                            <img src="img/icon-youtube.png" alt="icon-YouTube" style="border-width: 0px; border-style: solid;" displaymode="Original" title="icon-YouTube">
                                        </span>
                                    </a>
                                </li> 
                                <li>
                                    <a href="https://twitter.com/CapitaLand" target="_blank">
                                        <span data-sfref="[images|OpenAccessDataProvider]79da11d6-e855-6b4a-a72f-ff000008fdb8" class="sfImageWrapper">
                                            <img src="img/icon-twitter.png" alt="icon-twitter" style="border-width: 0px; border-style: solid;" displaymode="Original" title="icon-twitter">
                                        </span>
                                    </a>
                                </li> 
                                <li>
                                    <span data-sfref="[images|OpenAccessDataProvider]98da11d6-e855-6b4a-a72f-ff000008fdb8" class="sfImageWrapper">
                                        <img src="img/icon-instagram8fda11d6e8556b4aa72fff000008fdb8.png" alt="icon-instagram" style="border-width: 0px; border-style: solid;" displaymode="Original" title="icon-instagram">
                                    </span>
                                </li> 
                                <li>
                                    <a href="https://www.linkedin.com/company/capitaland-limited" target="_blank">
                                        <span data-sfref="[images|OpenAccessDataProvider]a6da11d6-e855-6b4a-a72f-ff000008fdb8" class="sfImageWrapper">
                                            <img src="img/icon-linkedin.png" alt="icon-LinkedIn" style="border-width: 0px; border-style: solid;" displaymode="Original" title="icon-LinkedIn">
                                        </span>
                                    </a>
                                </li> 
                                <li>
                                    <a href="https://plus.google.com/104538760926725976914/posts" target="_blank">
                                        <span data-sfref="[images|OpenAccessDataProvider]b4da11d6-e855-6b4a-a72f-ff000008fdb8" class="sfImageWrapper">
                                            <img src="img/icon-googleplus.png" alt="google+" style="border-width: 0px; border-style: solid;" displaymode="Original" title="icon-googleplus">
                                        </span>
                                    </a>
                                </li> 
                                <li>
                                    <a href="http://www.pinterest.com/capitaland/" target="_blank">
                                        <span data-sfref="[images|OpenAccessDataProvider]cbda11d6-e855-6b4a-a72f-ff000008fdb8" class="sfImageWrapper">
                                            <img src="img/icon-pinterest.png" alt="icon-pinterest" style="border-width: 0px; border-style: solid;" displaymode="Original" title="icon-pinterest">
                                        </span>
                                    </a>
                                </li> 
                            </ul> 
                            <br>
                        </div>
                        <div id="cprContent_C009" class="sfContentBlock hm-panel-news-aside">
                            <div id="cprContent_C009_ctl00_ctl00_pnlNewsList">
                                <h3>TIN MỚI NHẤT</h3>
                                <!-- 2014.2.724.40 -->
                                <div id="corp_newsContainer">
                                    <div class="all">
                                        <div class="marginBottom">
                                            <a id="ctl00_cprContent_C009_ctl00_ctl00_lvwNewsList_ctrl0_hpkTitle" href="http://capitaland.com.vn/news/l%e1%bb%85-h%e1%bb%99i-t%e1%ba%bft-t%e1%ba%a1i-the-oxygen">Lễ hội Tết tại The Oxygen</a>
                                        </div>
                                        <div class="date">
                                            Thg1 09 2017
                                        </div>
                                    </div>
                                    <div class="line"></div>

                                    <div class="all">
                                        <div class="marginBottom">
                                            <a id="ctl00_cprContent_C009_ctl00_ctl00_lvwNewsList_ctrl1_hpkTitle" href="http://capitaland.com.vn/news/le-hoi-giang-sinh-tai-the-Oxygen">Lễ Hội Giáng Sinh tại The Oxygen</a>
                                        </div>
                                        <div class="date">
                                            Thg12 08 2016
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                </div>
                                <input id="ctl00_cprContent_C009_ctl00_ctl00_lvwNewsList_ClientState" name="ctl00_cprContent_C009_ctl00_ctl00_lvwNewsList_ClientState" type="hidden" autocomplete="off"><span id="ctl00_cprContent_C009_ctl00_ctl00_lvwNewsList" style="display:none;"></span>
                                <a id="cprContent_C009_ctl00_ctl00_hpkReadMore" class="more-news" href="http://capitaland.com.vn/news/">Xem thêm</a>
                            </div>
                        </div>
                        <div class="sfContentBlock e-newsletter">
                            <h3><span>Bản tin CapitaLand Việt Nam</span></h3> 
                            <a href="http://capitaland.com.vn/e-newsletter">
                                <img alt="Bản tin CapitaLand Việt Nam" title="Bản tin CapitaLand Việt Nam" src="img/newsletter-vietnam.png" style="border-width: 0px; border-style: solid;">
                            </a>
                        </div>
                        <div class="sfContentBlock e-newsletter">
                            <h3><span>Bản tin tập đoàn CapitaLand</span></h3> 
                            <a href="http://inside.capitaland.com/" target="_blank">
                                <img alt="Bản tin tập đoàn CapitaLand" title="Bản tin tập đoàn CapitaLand" src="img/newsletter-group.png" style="display: block; margin-left: auto; margin-right: auto; padding: 0px 10px 10px; border-width: 0px; border-style: solid;"> 
                            </a>
                        </div>            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="cprContent_T979D2F30005" class="sky-carousel sc-no-select" style="visibility: visible;">
    <script src="js/jquery.sky.carousel-1.0.2.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $('.sky-carousel').carousel({
                itemWidth: 200,
                itemHeight: 200,
                distance: 25, //d
                selectedItemDistance: 25,
                selectedItemZoomFactor: 1,
                unselectedItemZoomFactor: 0.73,
                unselectedItemAlpha: 0.9,
                motionStartDistance: 210,
                topMargin: 30,
                gradientStartPoint: 0.35,
                gradientOverlayColor: "#ebebeb",
                gradientOverlaySize: 190,
                selectByClick: true
            });
        });
    </script>
    <h3>
        <span class="backh">
            <span class="backh2 business">
                <span class="backh3">Dự án</span>
            </span>
        </span>
    </h3>
    <div class="sky-carousel-wrapper">
        <ul class="sky-carousel-container">
            <?php for ($i = 1; $i <= 20; $i++): ?>
            <li class="item-project">
                <a href="http://capitaland.com.vn/our-projects/hochiminh/du-an-kris-vue-quan-2" title="KRIS VUE">
                    <img src="img/kris-vue_bird-eyes-view-thumbnail.jpg" alt="KRIS VUE" title="KRIS VUE">
                </a>
                <div class="sc-content">
                    <h2><a href="http://capitaland.com.vn/our-projects/hochiminh/du-an-kris-vue-quan-2">KRIS VUE <?php echo $i; ?></a></h2>
                </div>
            </li>
            <?php endfor; ?>
        </ul>
    </div>
</div>
<div id="cprContent_T979D2F30006" class="latest-video">
    <?= $this->Html->css('prettyPhoto.css') ?>
    <?= $this->Html->script('jquery.prettyPhoto.js') ?>
    <script>
        $(document).ready(function () {
            $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({
                animation_speed: 'normal', 
                theme: 'light_square', 
                deeplinking: false, 
                slideshow: 3000, 
                autoplay_slideshow: false
            });
        });
    </script>
    <h3>
        <span class="backh">
            <span class="backh2 video">
                <span class="backh3">Video</span>
            </span>
        </span>
    </h3>
    <div id="avs_gallery" class="avs_gallery video avs_responsive">
        <div class="gallery ">
            <?php for ($i = 1; $i <= 5; $i++): ?>
            <div class="avs_thumb <?php echo ($i % 2 == 0) ? 'odd' : 'even'; ?>" style="width:150px;" title="Feliz en Vista - Dệt nên vẻ đẹp ngày mai">
                <a href="http://www.youtube.com/watch?v=DTQmoABMjKs" rel="prettyPhoto" title="Feliz en Vista - Dệt nên vẻ đẹp ngày mai">
                    <div class="avs_thumb_inner">
                        <div class="avs_img_container">
                            <img class="arrow" src="img/play.png" border="0"> 
                            <img class="image" src="img/default.jpg" style="width:150px; height:95px;" border="0">
                        </div> 
                        <span class="title">Feliz en Vista - Dệt nên vẻ đẹp...</span> 
                    </div>
                </a>
            </div>
            <?php endfor; ?>
        </div>
        <div style="clear:both"></div>
    </div>

</div>
<div class="latest-video viewall">
    <a href="https://www.youtube.com/user/CapitaLandinVietnam" target="_blank">Xem tất cả video</a>
</div>
