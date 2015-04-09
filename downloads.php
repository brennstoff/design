<?php
$requesturi = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
date_default_timezone_set("Asia/Kolkata");
$pos = strpos($requesturi, "bluebirdwaterpurifiers");
$pageTitle = 'Bluebird Water Purifiers :: Downloads - Product Manuals';
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
        <div class="banner downloadsBanner lazy">  
        </div>
        <section class="mainContent row">
            <h1>Downloads - Product Manuals</h1>
            
            <div class="col-md-3">
                <a href="img/bluebird-manuals/PURE-DIAMOND-UF-MANNUAL/PURE-DIAMOND-UF-MANNUAL.pdf">
                    <img class="lazy img-responsive" data-original="img/bluebird-manuals/PURE-DIAMOND-UF-MANNUAL/PURE-DIAMOND-UF-MANNUAL.jpg" alt=""/>
                    Click to download product manual
                </a>
            </div>
            <div class="col-md-3">
                <a href="img/bluebird-manuals/BLUE-MOON-MANNUAL/BLUE-MOON-MANNUAL.pdf">
                    <img class="lazy img-responsive" data-original="img/bluebird-manuals/BLUE-MOON-MANNUAL/BLUE-MOON-MANNUAL.jpg" alt=""/>
                    Click to download product manual
                </a>
            </div>
            
            <div class="col-md-3">
                <a href="img/bluebird-manuals/PURE-DIAMOND-BIO-MANNUAL/PURE-DIAMOND-BIO-MANNUAL.pdf">
                    <img class="lazy img-responsive" data-original="img/bluebird-manuals/PURE-DIAMOND-BIO-MANNUAL/PURE-DIAMOND-BIO-MANNUAL.jpg" alt=""/>
                    Click to download product manual
                </a>
            </div>
            <div class="col-md-3">
                <a href="img/bluebird-manuals/ICE-CRYSTAL-MANNUAL/ICE-CRYSTAL-MANNUAL.pdf">
                    <img class="lazy img-responsive" data-original="img/bluebird-manuals/ICE-CRYSTAL-MANNUAL/ICE-CRYSTAL-MANNUAL.jpg" alt=""/>
                    Click to download product manual
                </a>
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
        .downloadsBanner{  background:url('./img/banner1.jpg'); min-height: 322px; background-position: center center; }
        .wrap .mainContent{padding: 15px; }
    </style>
</body>
</html>
