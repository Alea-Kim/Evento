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
                $Cols: 4,
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
                    refSize = Math.min(refSize, 810);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", $Jssor$.$WindowResizeFilter(window, ScaleSlider));
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        };
    </script>
    <style>
        .jssora02l, .jssora02r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url('img/a02.png') no-repeat;
            overflow: hidden;
        }
        .jssora02l { background-position: -3px -33px; }
        .jssora02r { background-position: -63px -33px; }
        .jssora02l:hover { background-position: -123px -33px; }
        .jssora02r:hover { background-position: -183px -33px; }
        .jssora02l.jssora02ldn { background-position: -3px -33px; }
        .jssora02r.jssora02rdn { background-position: -63px -33px; }
				.jssort11 .p { position: absolute; top: 0; left: 0; width: 200px; height: 69px; background: #181818;}
        .jssort11 .tp { position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none;}
        .jssort11 .i, .jssort11 .pav:hover .i { position: absolute; top: 3px; left: 3px; width: 60px; height: 30px; border: white 1px dashed;}
        * html .jssort11 .i { width /**/: 62px; height /**/: 32px;}
        .jssort11 .pav .i { border: white 1px solid;}
        .jssort11 .t, .jssort11 .pav:hover .t { position: absolute; top: 3px; left: 68px; width: 129px; height: 32px; line-height: 32px; text-align: center; color: #fc9835; font-size: 13px; font-weight: 700;}
        .jssort11 .pav .t, .jssort11 .p:hover .t { color: #fff;}
        .jssort11 .c, .jssort11 .pav:hover .c { position: absolute; top: 38px; left: 3px; width: 197px; height: 31px; line-height: 31px; color: #fff; font-size: 11px; font-weight: 400; overflow: hidden;}
        .jssort11 .pav .c, .jssort11 .p:hover .c { color: #fc9835;}
        .jssort11 .t, .jssort11 .c { transition: color 2s; -moz-transition: color 2s; -webkit-transition: color 2s; -o-transition: color 2s;}
        .jssort11 .p:hover .t, .jssort11 .pav:hover .t, .jssort11 .p:hover .c, .jssort11 .pav:hover .c { transition: none; -moz-transition: none; -webkit-transition: none; -o-transition: none;}
        .jssort11 .p:hover, .jssort11 .pav:hover { background: #333;}
        .jssort11 .pav, .jssort11 .p.pdn { background: #462300;}
    </style>
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
		<div id="jssor_1">
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; left: 20%; width: 300px; height: 400px; overflow: hidden;">
            <div data-p="112.50" style="display: none;">
                <img data-u="image" width="150px" height="480px" src="image1.jpg" />
                <div data-u="thumb">
                    <img class="i" src="img/thumb-002.jpg" />
                    <div class="t">Banner Rotator</div>
                    <div class="c">360+ touch swipe slideshow effects</div>
                </div>
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" width="150px" height="480px" src="image2.jpg" />
                <div data-u="thumb">
                    <img class="i" src="img/thumb-003.jpg" />
                    <div class="t">Image Gallery</div>
                    <div class="c">Image gallery with thumbnail navigation</div>
                </div>
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" width="150px" height="480px" src="image1.jpg" />
                <div data-u="thumb">
                    <img class="i" src="img/thumb-004.jpg" />
                    <div class="t">Carousel</div>
                    <div class="c">Touch swipe, mobile device optimized</div>
                </div>
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" width="150px" height="480px" src="image2.jpg" />
                <div data-u="thumb">
                    <img class="i" src="img/thumb-005.jpg" />
                    <div class="t">Themes</div>
                    <div class="c">30+ professional themems + growing</div>
                </div>
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" width="150px" height="480px" src="image1.jpg" />
                <div data-u="thumb">
                    <img class="i" src="img/thumb-006.jpg" />
                    <div class="t">Tab Slider</div>
                    <div class="c">Tab slider with auto play options</div>
                </div>
            </div>
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort11" style="position:absolute;right:5px;top:0px;font-family:Arial, Helvetica, sans-serif;-moz-user-select:none;-webkit-user-select:none;-ms-user-select:none;user-select:none;width:200px;height:300px;" data-autocenter="2">
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div data-u="thumbnailtemplate" class="tp"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Arrow Navigator -->
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
