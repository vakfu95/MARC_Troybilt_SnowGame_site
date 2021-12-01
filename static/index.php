<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="IE=Edge">
    <title>Troybilt</title>
    <script>!function (e, t, a, n, g) { e[n] = e[n] || [], e[n].push({ "gtm.start": (new Date).getTime(), event: "gtm.js" }); var m = t.getElementsByTagName(a)[0], r = t.createElement(a); r.async = !0, r.src = "https://www.googletagmanager.com/gtm.js?id=GTM-KKGJ3FB", m.parentNode.insertBefore(r, m) }(window, document, "script", "dataLayer");</script>
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.fc543162.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.2ba94d24.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.cd7365ef.png">
    <link rel="manifest" href="social\site.webmanifest">
    <link rel="mask-icon" href="safari-pinned-tab.711ba8ce.svg" color="#ca0814">
    <meta name="msapplication-TileColor" content="#ca0814">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="src.e31bb0bc.css">


    <?php 
     $score = "";
     if ($_GET['score']) {
         $score = $_GET['score'];
     }

     $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
     $siteurl = $actual_link;

     $siteTitle = "Play the Troy-Bilt snow game."; 
     $shareTitle = "Play the Troy-Bilt snow game.";
     $shareDescriptionSite = "Clear snow with a Troy-Bilt and try for the highest score.";
     $shareDescriptionFacebook = "Clear snow with a Troy-Bilt and try for the highest score.";
     $shareDescriptionTwitter = "Clear snow with a Troy-Bilt and try for the highest score.";    
     $shareImageFacebook = "https://troysnowgame.com/scores/social-sharing_".$score.".jpg";
     $shareImageTwitter = "https://troysnowgame.com/scores/social-sharing_".$score.".jpg";

 ?>
    <meta property="fb:app_id" content="966242223397117" />
    <meta content="74201467" property="fb:admins">
    <meta content="30812690" property="fb:admins">

    <title>
        <?php echo $siteTitle; ?>
    </title>
    <meta name="description" content="<?php echo $shareDescriptionSite; ?>" />

    <link rel="canonical" href="<?php echo $siteurl; ?>" />

    <meta property="og:site_name" content="<?php echo $siteTitle; ?>" />
    <meta property="og:url" content="<?php echo $siteurl; ?>" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />

    <meta property="og:title" content="<?php echo $shareTitle; ?>" />
    <meta property="og:description" content="<?php echo $shareDescriptionFacebook; ?>" />
    <meta property="og:image" content="<?php echo $shareImageFacebook; ?>" />
    <meta property="og:image:width" content="1052" />
    <meta property="og:image:height" content="550" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo $shareTitle; ?>" />
    <meta name="twitter:description" content="<?php echo $shareDescriptionTwitter; ?>" />
    <meta name="twitter:image" content="<?php echo $shareImageTwitter; ?>">

    <!-- END SEO -->
</head>

<body>
    <div class="all">
        <div class="header">
            <div class="logo png-element"></div>
            <div class="shop">Shop Now<img class="shop-arrow" src="cta-alt-icon@2x.6dc703a7.png"></div>
        </div>
        <div class="banner-wrapper">
            <div class="banner stage">
                <div class="float footer">
                    <div class="logo png-element"></div>
                    <div class="button cta-button float">
                        <div class="cta png-element"></div>
                    </div>
                </div>
                <div class="float frame game-frame">
                    <div class="float road">
                        <div class="driveway middle-1 png-element"></div>
                        <div class="driveway middle-2 png-element"></div>
                        <div class="left left-1 left-snowdrift png-element"></div>
                        <div class="left left-2 left-snowdrift png-element"></div>
                        <div class="png-element right right-1 right-snowdrift"></div>
                        <div class="png-element right right-2 right-snowdrift"></div>
                    </div>
                    <div class="float gameElements"></div> <canvas width="600" height="1200"
                        class="drivewaymask float"></canvas> <canvas width="300" height="600"
                        class="float snow"></canvas>
                    <div class="arrows float">
                        <div class="arrows-desktop png-element"></div>
                        <div class="arrows-mobile png-element"></div>
                    </div>
                    <div class="float player">
                        <div class="float person">
                            <div class="float full-leg-left">
                                <div class="person-foot person-foot-left png-element"></div>
                                <div class="person-leg-left png-element"></div>
                            </div>
                            <div class="float full-leg-right">
                                <div class="person-foot person-foot-right png-element"></div>
                                <div class="person-leg-right png-element"></div>
                            </div>
                            <div class="person-body png-element"></div>
                            <div class="person-arm-left png-element"></div>
                            <div class="person-arm-right png-element"></div>
                            <div class="person-head png-element"></div>
                        </div>
                        <div class="float snow-blower">
                            <div class="png-element poof_1 snow_poof_1"></div>
                            <div class="png-element poof_2 snow_poof_1"></div>
                            <div class="png-element poof_3 snow_poof_1"></div>
                            <div class="blower-body png-element"></div>
                            <div class="float wheel-left">
                                <div class="blower-wheel png-element"></div>
                                <div class="blower-tread png-element"></div>
                            </div>
                            <div class="float wheel-right">
                                <div class="blower-wheel png-element"></div>
                                <div class="blower-tread png-element"></div>
                            </div>
                            <div class="blower-wheel-shadow png-element"></div>
                            <div class="blower-spout png-element"></div>
                        </div>
                    </div>
                    <div class="float score">
                        <div class="float score-text">0</div>
                    </div>
                    <div class="clock-container float">
                        <div class="float time-text">30</div>
                    </div>
                    <div class="float points-card">
                        <div class="png-element points"></div>
                        <div class="float points-text">0</div>
                    </div>
                </div>
                <div class="float frame mid-frame">
                    <div class="black-overlay float"></div>
                    <div class="float mid-box">
                        <div class="mid-text1 png-element"></div>
                        <div class="mid-text2 png-element"></div>
                        <div class="mid-text3 png-element"></div>
                        <div class="drift png-element"></div>
                        <div class="png-element snowflake"></div>
                        <div class="newspaper png-element"></div>
                        <div class="mitten png-element"></div>
                        <div class="button float mid-cta-button">
                            <div class="mid-cta png-element"></div>
                            <div class="mid-cta-rollover png-element"></div>
                        </div>
                    </div>
                </div>
                <div class="float frame start-frame">
                    <div class="jpg-element start-image"></div>
                    <div class="box box1 float start-box"></div>
                    <div class="box box2 float start-box"></div>
                    <div class="box box3 float start-box34"></div>
                    <div class="box box4 float start-box34"></div>
                    <div class="png-element start-text start-text1"></div>
                    <div class="png-element start-text start-text2"></div>
                    <div class="png-element start-text3 start-text34"></div>
                    <div class="png-element start-text34 start-text4"></div>
                    <div class="float intro-box">
                        <div class="intro-text png-element"></div>
                        <div class="button float glowButton intro-cta-button">
                            <div class="intro-cta png-element"></div>
                            <div class="intro-cta-rollover png-element"></div>
                        </div>
                    </div>
                </div>
                <div class="end-frame float frame">
                    <div class="end-score-container float">
                        <div class="end-text-try-again png-element"></div>
                        <div class="end-text-nice-work png-element"></div>
                        <div class="float play-again-points-text"></div>
                        <div class="button float glowButton play-again-button">
                            <div class="play-again png-element"></div>
                            <div class="play-again-rollover png-element"></div>
                        </div>
                    </div>
                    <div class="float share-score-container">
                        <div class="end-text-share-your-score png-element"></div>
                        <div class="button float share-button share-facebook">
                            <div class="icon-facebook png-element"></div>
                        </div>
                        <div class="button float share-button share-twitter">
                            <div class="icon-twitter png-element"></div>
                        </div>
                    </div>
                    <div class="end-products-container float">
                        <div class="float products-carousel"> </div>
                        <div class="float products-navigation"> </div>
                        <div class='png-element product-message'></div>
                        <div class='float cta2-button button'>
                            <div class='png-element cta2'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="foot">© 2021 Troy-Bilt LLC<span>|</span><a class="ppolicy"
                href="https://www.troybilt.com/en_US/privacy-policy.html" target="_blank">Privacy Policy</a></div>
    </div>
    <script type="text/javascript"
        src="https://s0.2mdn.net/ads/studio/cached_libs/createjs_2015.11.26_54e1c3722102182bb133912ad4442e19_min.js"></script>
    <script type="text/javascript"
        src="https://s0.2mdn.net/ads/studio/cached_libs/tweenmax_1.19.0_643d6911392a3398cb1607993edabfa7_min.js"></script>
    <script src="src.e31bb0bc.js"></script>
    <script src="animation.min.ca8e04d4.js"></script>
</body>

</html>