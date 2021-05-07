<?php

$requestURL = $_SERVER['REQUEST_URI'];
$serverName = $_SERVER['SERVER_NAME'];

$baseURL = "../";
if(stristr($serverName, 'rjlweb.com')) {
    if ($requestURL == '/brigitflex/') { // are we at root?
        $baseURL = ""; //on testing server, it is not at the root
    }
} else { //not on my server
    if ($requestURL == '/') { // are we at root?
        $baseURL = "";
    }
}

$theKeywords = $pageKeywords . ', circuit board, Printed Circuits, Flexible, Rigid Flex, Rigid, Multilayer lamination, custom-made and specialty materials, collaborative engineering';

$isMobile = (bool)preg_match('#\b(ip(hone|od)|android\b.+\bmobile|opera m(ob|in)i|windows (phone|ce)|blackberry'.
                    '|s(ymbian|eries60|amsung)|p(alm|rofile/midp|laystation portable)|nokia|fennec|htc[\-_]'.
                    '|up\.browser|[1-4][0-9]{2}x[1-4][0-9]{2})\b#i', $_SERVER['HTTP_USER_AGENT'] );

?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title><?php echo $pageTitle ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <meta name="description" content="<?php echo $pageDescription ?>">
        <meta name="keywords" content="<?php echo $theKeywords ?>">
        <meta name="author" content="Brigitflex">

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel="stylesheet" href="<?php echo $baseURL ?>assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $baseURL ?>assets/prettyPhoto/css/prettyPhoto.css">
        <link rel="stylesheet" href="<?php echo $baseURL ?>assets/css/flexslider.css">
        <link rel="stylesheet" href="<?php echo $baseURL ?>assets/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo $baseURL ?>assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?php echo $baseURL ?>favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $baseURL ?>apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $baseURL ?>apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $baseURL ?>apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo $baseURL ?>apple-touch-icon-57-precomposed.png">

        <!-- Google Site Verification -->
        <meta name="google-site-verification" content="_oTd16OjIQVooi5Z5rciBMFVEMXBJRcRwUekjV1x2HY" />
    </head>

    <body>

        <!-- Header -->
        <div class="container">
            <div class="header row">
                <div class="span12">
                    <div class="navbar">
                        <div class="navbar-inner">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <h1>
                                <a class="brand" href="index.php">Brigitflex</a>
                            </h1>
                            <div class="nav-collapse collapse">
                                <ul class="nav pull-right">
                                    <li <?php if (empty($pageSubText)): ?> class="current-page" <?php endif ?>>
                                        <a href="<?php echo $baseURL ?>"><i class="icon-home"></i><br />Home</a>
                                    </li>
                                    <li <?php if(stristr($requestURL, 'capabilities')):?> class="current-page" <?php endif ?>>
                                        <a href="<?php echo $baseURL ?>capabilities/"><i class="icon-cog"></i><br />Capabilities</a>
                                    </li>
                                    <li <?php if(stristr($requestURL, 'process')):?> class="current-page" <?php endif ?>>
                                        <a href="<?php echo $baseURL ?>process/"><i class="icon-wrench"></i><br />Process</a>
                                    </li>
                                    <li <?php if(stristr($requestURL, 'markets')):?> class="current-page" <?php endif ?>>
                                        <a href="<?php echo $baseURL ?>markets/"><i class="icon-plane"></i><br />Markets</a>
                                    </li>
                                    <li <?php if(stristr($requestURL, 'articles')):?> class="current-page" <?php endif ?>>
                                        <a href="<?php echo $baseURL ?>articles/"><i class="icon-download-alt"></i><br />Articles</a>
                                    </li>
                                    <li <?php if(stristr($requestURL, 'about')):?> class="current-page" <?php endif ?>>
                                        <a href="<?php echo $baseURL ?>about/"><i class="icon-user"></i><br />About</a>
                                    </li>
                                    <li <?php if(stristr($requestURL, 'contact')):?> class="current-page" <?php endif ?>>
                                        <a href="<?php echo $baseURL ?>contact/"><i class="icon-envelope-alt"></i><br />Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php if (!empty($pageSubText)): ?>
            <!-- Page Sub Text -->
            <div class="page-title">
                <div class="container">
                    <div class="row">
                        <div class="span12">
                            <i class="icon-tasks page-title-icon"></i>
                            <h2><?php echo $pageTitle ?> /</h2>
                            <p><?php echo $pageSubText ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif ?>