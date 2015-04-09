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
            <!--
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
            -->
            <div id="product1-accordion">   
                <h3>
                    Post-Treatment Of Water
                </h3>
                <div>
                    Even though after the RO process, there are no impurities left in the water. But this also means that there are no minerals left in the water. So we add two very important purification stages at this point:
                    <ul style="list-style: url;">
                        <li>
                            Re-addition of Bio-minerals: as mentioned above.
                        </li>
                        <li>
                            Re-addition of taste, or taste enhancement: Using a very special type of a carbon filter and taste enhancing balls to improve the taste of water. Since RO purification can make the water very bland in taste or in some cases even bitter. 
                        </li>
                    </ul>
                </div>
                <h3>
                    Ultra-Filteration (UF)
                </h3>
                <div>
                    UF Membrane: are increasingly employed for removal of bacteria and other microorganisms, particulate material, and natural organic material, which can impart color, tastes, and odors to the water and react with disinfectants to form disinfection byproducts (DBP).
                </div>
                <h3>
                    Pre-Treatment of Water
                </h3>
                <div>
                    <ul style="list-style: url;">
                        <li>
                            Pre-Filteration: Removes all suspended solids like turbidity, sediments and dust.
                        </li>
                        <li>
                            Sediment Filter : 5Micron PP made filter, ensuring proper removal of all suspended solids.
                        </li>
                        <li>
                            High fineness Silver Activated Carbon: Highly Adsorptive form of Carbon. Removes colour, bad odour, bad taste and some organic particles due to its high degree of porosity.
                        </li>
                    </ul>
                </div>
                <h3>
                    Reverse-Osmosis (RO)
                </h3>
                <div>
                    Reverse osmosis (RO) is a water purification technology that uses a semipermeable membrane to remove larger particles from drinking water. In reverse osmosis, an applied pressure is used to overcome osmotic pressure, a colligative property, that is driven by chemical potential, a thermodynamic parameter.
                    <img class="img-responsive" src="img/features/reverse-osmosis.jpg" alt=""/>
                </div>
                <h3>
                    Low-Pressure Switch
                </h3>
                <div>
                    An electronic device calculating each time if the power and pressure generated in the RO system is enough for optimum levels of purification
                </div>
                
                <h3>
                     Auto-Flushing System
                </h3>
                <div>
                    It’s a unique way to clean out the filters of the RO system, including the RO membrane. Every time, just before the system starts, it automatically sends an air-pressure to all the filters, gushing out all the impurities away from the filters and membranes. Cleaning them each time and then the purification process commences. This increases the life of all filters!
                </div>
                <h3>
                    FIR Mineral Ceramic Ball: Ceramics known to generate Far Infrared Rays (FIR).
                </h3>
                <div>
                    FIR ceramics have the effect of reducing water cluster size. This means that water that has been pressurised and treated so that the water molecules stick together in large clusters will naturally separate into micro-clusters, which is the natural state of water. This FIR activated water increases the ability of the water to act. Smaller water molecules are more easily absorbed by the skin, which helps to moisturise the skin and maintain body heat for longer.   In addition to being absorbed by the skin, micro-clustered water is more easily absorbed by the body when drunk, hydrating the body more effectively.
  3. Anti-Bacterial Ceramic Ball:  It has germicidal and antibacterial effects lasting long,and harmless to the human body,it is a safe and non-toxic product. 
                </div>
                <h3>Bio-Green Technology</h3>
                <div>
                    All natural mineral ceramic balls and anti-bacterial balls, keeping it clean and natural.
Water that is slightly alkaline in nature is much more healthier for drinking than acidic water. Additions of our bio-minerals ensures that. When most RO purifiers clean out all the necessary minerals alongside all the impurities, our systems re-add those essential components! 

          1. Natural Tourmaline Minerals Ceramic Ball:  have the function of purifying by releasing mineral microelements in to the water.
                </div>
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
        .techonologBanner{  background:url('./img/banner1.jpg'); min-height: 322px; background-position: center center; }
        .wrap .mainContent{padding: 15px; }
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
