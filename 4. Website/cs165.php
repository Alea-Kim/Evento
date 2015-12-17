<html>
	<head>
		<title>Event-O | Event Sharing Website</title>
		<link rel="stylesheet" type="text/css" href="cs165.css">
		<script type="text/javascript" src="js/jssor.slider.min.js"></script>
    <script>
        jssor_1_slider_init = function() {
            var jssor_1_options = {
              $AutoPlay: true,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 5,
                $SpacingX: 4,
                $SpacingY: 4,
                $Orientation: 2,
                $Align: 0
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 900);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 40);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", $Jssor$.$WindowResizeFilter(window, ScaleSlider));
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        };
    </script>
	</head>
	<body>
		<nav>
			<a id="logo" href="cs165.php"><img src="logo.png" width="150px" height="150px"></a>
			<a class="links" href="login.php">Login</a> |
			<a class="links" href="">Sign Up</a>
			<div class="search">
				<input type="text" name="search">
				<a href=""><img src="search.png" width="30px" height="30px"/></a>
			</div>
		</nav>
		<div class="banner" id="jssor_1">
        <div data-u="loading" style="position: absolute;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; width: 100%; height: 100%;"></div>
            <div style="display:block;background:url('img/loading.gif') no-repeat center center;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; left: 20%; width: 300px; height: 450px; overflow: hidden;">
            <div data-p="112.50" style="display: none;">
                <img data-u="image" width="150px" height="480px" src="image1.jpg" />
                <div data-u="thumb">
                    <img class="i" src="image1.jpg" />
                    <div class="t">Banner Rotator</div>
                    <div class="c">360+ touch swipe slideshow effects</div>
                </div>
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" width="150px" height="480px" src="image2.jpg" />
                <div data-u="thumb">
                    <img class="i" src="image2.jpg" />
                    <div class="t">Image Gallery</div>
                    <div class="c">Image gallery with thumbnail navigation</div>
                </div>
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" width="150px" height="480px" src="image1.jpg" />
                <div data-u="thumb">
                    <img class="i" src="image1.jpg" />
                    <div class="t">Carousel</div>
                    <div class="c">Touch swipe, mobile device optimized</div>
                </div>
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" width="150px" height="480px" src="image2.jpg" />
                <div data-u="thumb">
                    <img class="i" src="image2.jpg" />
                    <div class="t">Themes</div>
                    <div class="c">30+ professional themems + growing</div>
                </div>
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" width="150px" height="480px" src="image1.jpg" />
                <div data-u="thumb">
                    <img class="i" src="image1.jpg" />
                    <div class="t">Tab Slider</div>
                    <div class="c">Tab slider with auto play options</div>
                </div>
            </div>
        </div>
        <div data-u="thumbnavigator" class="jssort11" data-autocenter="2">
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div data-u="thumbnailtemplate" class="tp"></div>
                </div>
            </div>
        </div>
        <span data-u="arrowleft" class="jssora02l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora02r" style="top:0px;right:218px;width:55px;height:55px;" data-autocenter="2"></span>
        <a href="http://www.jssor.com" style="display:none">Bootstrap Carousel</a>
    </div>
    <script>
        jssor_1_slider_init();
    </script>
	</body>
	<footer>
		<b>TRICAMI.Copyright(c) 2015</b>
	</footer>
</html
