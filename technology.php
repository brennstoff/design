<?php
$requesturi = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
date_default_timezone_set("Asia/Kolkata");
$pos = strpos($requesturi, "bluebirdwaterpurifiers");
$pageTitle = 'Bluebird Water Purifiers :: Technology';
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
    <div class="wrap">
        <div class="banner techonologBanner lazy">
            
        </div>
        <section class="mainContent row">
            <h1>Technology</h1>
            <div id="product1-accordion">
                <h3>Bio-Green Technology</h3>
                <div>
                    <p>
                        All Natural mineral ceramic balls and anti-bacterial ceramic balls, keeping it clean and natural.
                    </p>
                    
                </div>
                <h3>Ice-Tray</h3>
                <div>
                    <p>
                        An Extra Ice-tray for the water storage tank to easily add ice to a room temperature stored water. 
                    </p>
                    
                </div>
                <h3>Removes all Impurities</h3>
                <div>
                    <p>
                        Removes all Impurities in water including harmful elements like lead, arsenic, pesticides and fluorides etc.
                    </p>
                </div>
                <h3>Drink pure, healthy and Tasty Water!</h3>
                <div>
                    <p>
                        Ask our service guy to make the purified output water according to your taste preference! 
                    </p>
                </div>
                <h3>Auto-Flushing System</h3>
                <div>
                    <p>
                        Flushing out all the filters once, after the purification system has automatically stopped. Giving longer life for all filters. 
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
    <style>
        .techonologBanner{  height: 320px; background:url('./img/banner1.jpg'); min-height: 322px; background-position: center center; }
    </style>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="_/js/vendor/jquery-ui-1-11-3.min.js" type="text/javascript"></script>
    <script>
        $(function () {
            var icons = {
                header: "ui-icon-plus",
                activeHeader: "ui-icon-minus"
            };
            $("#product1-accordion").accordion({
                icons: icons, heightStyle: "content"
            });
        });
    </script>
</body>
</html>
