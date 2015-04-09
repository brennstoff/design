<?php
    $requesturi = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    date_default_timezone_set("Asia/Kolkata");
    $pos = strpos($requesturi, "bluebirdwaterpurifiers");
    $pageTitle = 'Bluebird Water Purifiers :: Products';
    if ($pos) {
        define('DP_ROOT', '');
        define('FP_ROOT', '');
    } else {
        define('DP_ROOT', '');
        define('FP_ROOT', '');
    }
    include_once FP_ROOT . 'includes/header.php';
?>
<body>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    <div class="productBanner visible-md visible-lg" id="rainCanvas">
        <img id="background" alt="background" data-original="" />
    </div>
    <div class="wrap productsContent">
        <div class="row productAnimation visible-md visible-lg">
            <div class="col-md-3 dt1">
                <a href="product-ufn.php">
                    <img class="img-responsive desaturate product1 lazy" src="./img/native-products/p1-png.png" alt=""/>
                    <div class="absolute" style="min-height:auto;">
                        <span class="readMorePlus btn btn-primary">
                            <i class="glyphicon glyphicon-plus"></i> Read More
                        </span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 dt2">
                <a href="product-bluemoon.php">
                    <img class="img-responsive desaturate product2 lazy" src="./img/native-products/p2-png.png" alt=""/>
                    <div class="absolute" style="min-height:auto;">
                        <span class="readMorePlus btn btn-primary">
                            <i class="glyphicon glyphicon-plus"></i> Read More
                        </span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 dt3">
                <a href="product-bluebird.php">
                    <img class="img-responsive desaturate product3 lazy" src="./img/native-products/p3-png.png" alt=""/>
                    <div class="absolute" style="min-height:auto;">
                        <span class="readMorePlus btn btn-primary">
                            <i class="glyphicon glyphicon-plus"></i> Read More
                        </span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 dt4">
                <a href="product-ice-crystal.php">
                    <img class="img-responsive desaturate product4 lazy" src="./img/native-products/p4-png.png" alt=""/>
                    <div class="absolute" style="min-height:auto;">
                        <span class="readMorePlus btn btn-primary">
                            <i class="glyphicon glyphicon-plus"></i> Read More
                        </span>
                    </div>
                </a>
            </div>
        </div>
        <section class="mainContent row" data-role="content" style="margin-bottom:100px">
			<h1 class="hidden-md hidden-lg ">Our Products</h1>
			<div class="col-xs-12 col-sm-12 hidden-md hidden-lg mobileProduct">
				<a href="product-ufn.php">
					<img class="img-responsive desaturate product1 lazy" src="./img/native-products/p1-png.png" alt=""/>
					<h3>BANNER-BLUEBIRD-ufn</h3>
					<span class="btn btn-primary btn-block">
                        <i class="glyphicon glyphicon-plus"></i> Read More
                    </span>
				</a>
			</div>
			<div class="col-xs-12 col-sm-12 hidden-md hidden-lg mobileProduct">
                            <a href="product-bluemoon.php">
					<img class="img-responsive desaturate product1 lazy" src="./img/native-products/p2-png.png" alt=""/>
					<h3>BANNER-BLUEBIRD-BLUEMOON</h3>
					<span class="btn btn-primary btn-block">
                        <i class="glyphicon glyphicon-plus"></i> Read More
                    </span>
				</a>
			</div>
			<div class="col-xs-12 col-sm-12 hidden-md hidden-lg mobileProduct">
                            <a href="product-bluebird.php">
					<img class="img-responsive desaturate product1 lazy" src="./img/native-products/p3-png.png" alt=""/>
					<h3>BANNER-BLUEBIRD</h3>
					<span class="btn btn-primary btn-block">
                        <i class="glyphicon glyphicon-plus"></i> Read More
                    </span>
				</a>
			</div>
			<div class="col-xs-12 col-sm-12 hidden-md hidden-lg mobileProduct">
                            <a href="product-ice-crystal.php">
					<img class="img-responsive desaturate product1 lazy" src="./img/native-products/p4-png.png" alt=""/>
					<h3>BANNER-BLUEBIRD-ICE-CRYSTAL</h3>
					<span class="btn btn-primary btn-block">
                        <i class="glyphicon glyphicon-plus"></i> Read More
                    </span>
				</a>
			</div>
            <h3>Bluebird Advantages</h3>
            <div id="advantages">
                <h3>Heritage</h3>
                <div>
                    <p>
                        Bluebird is a reputed leading Brand of Automatic Voltage Stabilizers,Servo Voltage Stabilizers, Constant Voltage Transformers & Control/Isolation Transformers for more than past Three Decades. Our products are well appreciated and have received much recognition for their quality.
                    </p>
                </div>
                <h3>Availability</h3>
                <div>
                    <p>
                        With Over 600 dealers in 3 states, bluebird water purifiers has a large channel and service network. We are dedicated to serve you as best we can, and as satisfied as you can be. All customer support needed is fulfilled within 24hrs.
                    </p>
                </div>
                <h3>Quality</h3>
                <div>
                    <p>
                        Our stringent quality norms ensure 0% failure ratio for any Bluebird water purifier. Clean, tasty and pure water ensured from every system. Our long term relationships with our clients is based on their satisfaction and our consistent performance.
                    </p>
                </div>
                <h3>Affordability</h3>
                <div>
                    <p>
                        All bluebird water purifiers come at affordable prices and best quality for everyone. All our products are designed and manufactured to favour our customer’s needs. All products are also priced at a very competitive rate, to ensure the customer gets more than what they pay for.
                    </p>
                </div>
                <h3>Trust</h3>
                <div>
                    <p>
                        Being such an old company, our growth has been with the back bone of trust with our dealers and customers. All bluebird water purifiers deliver the quality that is promised.
                    </p>
                </div>
            </div>
        </section>
    </div><!-- wraper ends here -->
    
    <!-- Navigation -->
    <?php
        include_once FP_ROOT . 'includes/nav-home.php';
    ?>                
    <?php
        include_once FP_ROOT . 'includes/fp-afterContent.php';
        include_once FP_ROOT . 'includes/fp-footerLinks.php';
        include_once FP_ROOT . 'includes/foot-script.php';
        include_once FP_ROOT . 'includes/fp-innerScript.php';
    ?>
    <script src="_/js/vendor/rainyday.min.js"></script>
    <script>
        (function () {
            function run() {
                var image = document.getElementById('background');
                var productBanner = document.getElementById('rainCanvas');

                image.onload = function () {
                    var engine = new RainyDay({
                        image: this,
                        blur: 20,
                        parentElement: productBanner,
                        gravityAngle: Math.PI / 9
                    });
                    engine.trail = engine.TRAIL_SMUDGE;
                    engine.rain([[1, 0, 600], [4, 4, 7]], 100);
                };
                image.crossOrigin = 'anonymous';
                image.src = 'http://i.imgur.com/VuX2Nf0.jpg';
            }
            ;
            run();
        })();
    </script>

    <style>
        /*
        .readMorePlus{ width:40px !important; height: 40px !important; background-size: 600px 600px !important; background-position: 0px -480px !important; }
        */
        .productAnimation .absolute{ bottom:10px; right: 10px;  }
        .productBanner{width:100%; max-height:350px; overflow: hidden; position: absolute; margin-top: 140px; }
        .productBanner img{width:100%; }
        .productBanner canvas{opacity: 0.5;}
        .productAnimation > div{ min-height: 350px; overflow: visible;}
        .productAnimation > div > img:hover{
            -webkit-transform: scale(1.10);
            -moz-transform: scale(1.10);
            -o-transform: scale(1.10);
            -ms-transform: scale(1.10);
            transform: scale(1.10); cursor: pointer;
        }
        @keyframes product1 {
            0%   {  top:-350px;}
            25%  {  top:50px;}
            50%  {  top:0px;}
            75%  {  top:25px;}
            100% {  top:25px; }
        }
        @-webkit-keyframes product1 {
            0%   {  top:-350px;}
            25%  {  top:50px;}
            50%  {  top:0px;}
            75%  {  top:25px;}
            100% {  top:25px; }
        }
        .productAnimation > div > img.product1{ 
            animation-name: product1; animation-duration: 6s;animation-delay: 0s;
            -webkit-animation-name: product1; -webkit-animation-duration: 6s; -webkit-animation-delay: 0s;
            -moz-animation-name: product1; -moz-animation-duration: 6s; -moz-animation-delay: 0s;
            -ms-animation-name: product1; -ms-animation-duration: 6s; -ms-animation-delay: 0s;
            -o-animation-name: product1; -o-animation-duration: 6s; -o-animation-delay: 0s;
            position: absolute;top:25px;
        }
        @keyframes product2 {
            0%   {  top:-350px;}
            25%  {  top:50px;}
            50%  {  top:0px;}
            75%  {  top:25px;}
            100% {  top:25px; }
        }
        @-webkit-keyframes product2 {
            0%   {  top:-350px;}
            25%  {  top:50px;}
            50%  {  top:0px;}
            75%  {  top:25px;}
            100% {  top:25px; }
        }
        .productAnimation > div > img.product2{ 
            animation-name: product2; animation-duration: 6s;animation-delay: 0s;
            -webkit-animation-name: product2; -webkit-animation-duration: 6s; -webkit-animation-delay: 0s;
            -moz-animation-name: product2; -moz-animation-duration: 6s; -moz-animation-delay: 0s;
            -ms-animation-name: product2; animation-duration: 6s; -ms-animation-delay: 0s;
            -o-animation-name: product2; -o-animation-duration: 6s; -o-animation-delay: 0s;
            position: absolute;top:25px;
        }
        @keyframes product3 {
            0%   {  top:-350px;}
            25%  {  top:50px;}
            50%  {  top:0px;}
            75%  {  top:25px;}
            100% {  top:25px; }
        }
        @-webkit-keyframes product3 {
            0%   {  top:-350px;}
            25%  {  top:50px;}
            50%  {  top:0px;}
            75%  {  top:25px;}
            100% {  top:25px; }
        }
        .productAnimation > div > img.product3{ 
            animation-name: product3; animation-duration: 6s;animation-delay: 0s;
            -webkit-animation-name: product3; -webkit-animation-duration: 6s; -webkit-animation-delay: 0s;
            -moz-animation-name: product3; -moz-animation-duration: 6s; -moz-animation-delay: 0s;
            -ms-animation-name: product3; -ms-animation-duration: 6s; -ms-animation-delay: 0s;
            -o-animation-name: product3; -o-animation-duration: 6s; -o-animation-delay: 0s;
            position: absolute;top:25px;
        }
        @keyframes product4 {
            0%   {  top:-350px;}
            25%  {  top:50px;}
            50%  {  top:0px;}
            75%  {  top:25px;}
            100% {  top:25px; }
        }
        @-webkit-keyframes product4 {
            0%   {  top:-350px;}
            25%  {  top:50px;}
            50%  {  top:0px;}
            75%  {  top:25px;}
            100% {  top:25px; }
        }
        .productAnimation > div > img.product4{ 
            animation-name: product4; animation-duration: 6s;animation-delay: 0s;
            -webkit-animation-name: product4; -webkit-animation-duration: 6s; -webkit-animation-delay: 0s;
            -moz-animation-name: product4; -moz-animation-duration: 6s; -moz-animation-delay: 0s;
            -ms-animation-name: product4; -ms-animation-duration: 6s; -ms-animation-delay: 0s;
            -o-animation-name: product4; -o-animation-duration: 6s; -o-animation-delay: 0s;
            position: absolute;top:25px;
        }        
        .productsContent{ }
    </style>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="_/js/vendor/jquery-ui-1-11-3.min.js" type="text/javascript"></script>
    <script>
        (function () {
            var browserWidth = $(window).width();
            if (browserWidth > 1200) {
                browserWidth = 1100;
            }
            
        })();
    </script>
    <script>
        $(function () {
            var icons = {
                header: "ui-icon-plus",
                activeHeader: "ui-icon-minus"
            };
            $("#product1-accordion").accordion({
                icons: icons, heightStyle: "content"
            });
            $("#product2-accordion").accordion({
                icons: icons, heightStyle: "content"
            });
            $("#product3-accordion").accordion({
                icons: icons, heightStyle: "content"
            });
            $("#product4Accordion").accordion({
                icons: icons, heightStyle: "content"
            });
            $("#advantages").accordion({
                icons: icons, heightStyle: "content"
            });
        });
    </script>
</body>
</html>
