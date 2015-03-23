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
            <p>
                Pre-Filter : Spun polypropylene cartridge – Double O-Ring Housing 100% leak proof. High quality melt blown cartridge; removes dust, dirt particles in the water.
            </p>
            <p>
                Sediment Filters : 5 Micron 2.5”. Removes all suspended solids like turbidity, sediments and dust.
            </p>
            <p>
                Inline Pre-carbon : Silver activated carbon : Highly Adsorptive form of carbon. Removes color, bad odor, bad taste and some organic particles due to its high degree of porosity. Improves taste for drinking.
            </p>
            <p>
                RO : Reverse Osmosis Membrane, turns water into distilled water, with 0 particulate matter.
            </p>
            <p>
                U/V : High powered 11 Watt UV Lamp, ensures removal of 99.9% of all pathogens, viruses and molds.
            </p>
            <p>
                Inline post carbon : Silver Activated Carbon : Highly Adsorptive form of Carbon. Removes color, bad odor, bad taste and some organic particles due to its high degree of porosity.
            </p>
            <p>
                Bio-Green Technology Mineral Cartridge : Contains inorganic minerals ( Ca, K, Na, Mg ) for maintaining healthy body. Increase water of natural healing ability & immunity.
            </p>
            <p>
                Natural Tourmaline Minerals Ceramic ball, Silver Activated Carbon, FIR Mineral Ceramic ball, Anti-Bacterial ceramic Ball.
            </p>
            <p>
                Anti-scalant filter : Prevents scale and stops corrosion.
            </p>
            <p>
                Optional depending upon the source of water.                
            </p>
            <br />
            <div id="product1-accordion">
                <h3>Mineral RO</h3>
                <div>
                    <ul style="list-style: url;">
                        <li>
                            More stages of filtration unlike standard 5 stages in other brands.	
                        </li>
                        <li>
                            Adds essential minerals like K,Mg,Ca after they are also filtered by RO.	
                        </li>
                        <li>
                            Restores pH Value of the water, making it alkaline in nature. Since RO reduces the pH value, sometimes making the water even acidic in nature.	   
                        </li>
                        <li>
                            Very large Tank - 14ltr. Usually brands provide with 8ltr tank, 10ltr at max.								   
                        </li>
                        <li>
                            Auto-flushing system: ensuring longer system life by cleaning out system from inside after filteration.					 
                        </li>
                    </ul>
                </div>
                <h3>Ice-Tray RO</h3>
                <div>
                    <ul style="list-style: url;">
                        <li>
                            Available both as table-top and wall hanging.	
                        </li>
                        <li>
                            Usually, other brands have RO+UV in this range. We have RO+UV+UF.
                        </li>
                        <li>
                            Ice Tray for adding ice to the purified water.		
                        </li>
                        <li>
                            Acid Washed carbon filter, does not leave any black water after initial filtration also.									   
                        </li>
                        <li>
                            Auto-flushing system -> cleans out the machine after purification, ensuring longer system life					 
                        </li>
                    </ul>
                </div>
                <h3>Gravity Based (Minerals)</h3>
                <div>
                    <ul style="list-style: url;">
                        <li>
                            Large Tank 19.5Ltr. As compared to 14Ltr (max) tanks of other brands, in this price range.
                        </li>
                        <li>
                            Bio-mineral Cartridge: Adds essential elements needed like Ca,Mg,K	
                        </li>
                        <li>
                            Alkalinity of the water increases as a whole. Making the water healthier for drinking.	  	
                        </li>
                        <li>
                           Extra Tourmaline balls added which add extra minerals									   
                        </li>
                        <li>
                            Acid washed Carbon: ensures no blackish water even in initial run.					 
                        </li>
                        <li>
                            pH Value also slightly increased, making water alkaline		
                        </li>
                    </ul>
                </div>
                <h3>Gravity Based (UF):</h3>
                <div>
                    <ul style="list-style: url;">
                        <li>
                            Large Tank 19.5Ltr. As compared to 14Ltr (max) tanks of other brands, in this price range.
                        </li>
                        <li>
                            Extra Tourmaline balls added which add extra minerals.
                        </li>
                        <li>
                            Acid washed Carbon: ensures no blackish water even in initial run.
                        </li>
                        <li>
                           0.01 Micron UF Filters ensure residual bacteria and dust to be removed from the water.								   
                        </li>
                    </ul>
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
