<div class="home-slider-wrapper">
    <div class="home-slider-main">
        <ul class="home-slider">
            <li><a href="#">
                <img class="image-responsive middle-block" src="{{media url=wysiwyg/slider/Apple-iPhone-13-Pro-Smartphones-491997737-i-2-1200Wx1200H.jpeg}}" alt="" style="height:500px;"/></a></li>
            <li style="display: none;"><a href="#">
                <img class="image-responsive middle-block" src="{{media url=&quot;wysiwyg/slider/iphone-12-pro.jpg&quot;}}" style="height:500px;" alt="iPhone" /></a></li>
            <li style="display: none;"><a href="#">
                <img class="image-responsive middle-block" src="{{media url=wysiwyg/slider/Apple-iPhone-13-Pro-Smartphones-491997737-i-2-1200Wx1200H.jpeg}}" alt="" style="height:500px;"/></a></li>
        </ul>
    </div>
    <script type="text/javascript" xml="space">
        require(['jquery', 'bentrizowlcarousel'], function() {
            jQuery(document).ready(function() {
                jQuery(".home-slider").owlCarousel({
                    items: 1,
                    itemsDesktop: [1198, 1],
                    itemsDesktopSmall: [1023, 1],
                    itemsTablet: [768, 1],
                    itemsTabletSmall: [767, 1],
                    itemsMobile: [479, 1],
                    pagination: true,
                    navigationText: ["<div class='left-arrow'><i class='fa fa-angle-left'></i></div>", "<div class='right-arrow'><i class='fa fa-angle-right'></div>"],
                    navigation: true,
                });
                jQuery(".home-slider li").show();
            });
        });

    </script>