<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="Keywords" content="" />
    <meta name="Description" content="" />
    <meta property="og:title" content="<?php echo $title ?>" />
    <meta property="og:description" content="" />
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="/abroadplay/includes/pushMenu/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="/abroadplay/includes/pushMenu/css/icons.css" />
    <link rel="stylesheet" type="text/css" href="/abroadplay/includes/pushMenu/css/component.css" />
    <link rel="stylesheet" type="text/css" href="/abroadplay/includes/templtes/01/images/css/style.css" />
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>    
    <script type="text/javascript" src="/abroadplay/includes/pushMenu/js/modernizr.custom.js"></script>
    <script type="text/javascript" src="/abroadplay/includes/pushMenu/js/classie.js"></script>
    <script type="text/javascript" src="/abroadplay/includes/pushMenu/js/mlpushmenu.js"></script>
</head>
<body>
<div class="container">
        <!-- Push Wrapper -->
        <div class="mp-pusher" id="mp-pusher">
                <!-- mp-menu -->
                <nav id="mp-menu" class="mp-menu">
                        <div class="mp-level">
                                <h2 class="icon icon-world">All Categories</h2>
                                <ul>
                                        <li class="icon icon-arrow-left">
                                                <a class="icon icon-display" href="#">報告查詢</a>
                                                <div class="mp-level">
                                                    <h2 class="icon icon-display">Devices</h2>
                                                    <a class="mp-back" href="#">back</a>
                                                    <ul>
                                                        <li class="icon icon-arrow-left">
                                                            <a class="icon icon-phone" href="#">中央政府</a>
                                                            <div class="mp-level">
                                                                    <h2>Mobile Phones</h2>
                                                                    <a class="mp-back" href="#">back</a>
                                                                    <ul>
                                                                        <li><a href="/abroadplay/report/">清單</a></li>
                                                                    </ul>
                                                            </div>
                                                        </li>
                                                        <li class="icon icon-arrow-left">
                                                            <a class="icon icon-tv" href="#">地方政府</a>
                                                            <div class="mp-level">
                                                                    <h2>Televisions</h2>
                                                                    <a class="mp-back" href="#">back</a>
                                                                    <ul>
                                                                        <li><a href="#">清單</a></li>
                                                                    </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                        </li>
                                        <li class="icon icon-arrow-left">
                                                <a class="icon icon-shop" href="/abroadplay/report/">中央政府</a>                                            
                                        </li>
                                        <li><a class="icon icon-photo" href="#">地方政府</a></li>
                                         <li class="icon icon-arrow-left">
                                                <a class="icon icon-news" href="#">歷史統計</a>
                                                <div class="mp-level">
                                                        <h2 class="icon icon-news">Magazines</h2>
                                                        <a class="mp-back" href="#">back</a>
                                                        <ul>
                                                                <li><a href="#">National Geographic</a></li>
                                                                <li><a href="#">Scientific American</a></li>
                                                                <li><a href="#">The Spectator</a></li>
                                                                <li><a href="#">The Rambler</a></li>
                                                                <li><a href="#">Physics World</a></li>
                                                                <li><a href="#">The New Scientist</a></li>
                                                        </ul>
                                                </div>
                                        </li>                                       
                                        <li><a class="icon icon-wallet" href="#">地圖顯示</a></li>
                                </ul>
                                        
                        </div>
                </nav>
                <!-- /mp-menu -->

                <div class="scroller"><!-- this is for emulating position fixed of the nav -->
                        <div class="scroller-inner">
                                <!-- Top Navigation -->
                                <div class="codrops-top clearfix">
                                    <a href="#" id="trigger" title="Open/Close Menu"><span class="menu-trigger"></span>公務員出國考察追蹤網</a>
                                </div>
                                
                                <div class="content clearfix">