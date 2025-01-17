<!DOCTYPE html>
<html lang="en">
<head>
<title>search result</title>
<meta charset="utf-8">    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.css" >
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="fonts/font-awesome.css">
<!--JS-->
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="search/search.js"></script>
<script src="js/jquery.mobilemenu.js"></script> 
<script src="js/jquery.ui.totop.js"></script>
<script src="js/jquery.equalheights.js"></script> 

<!--[if (gt IE 9)|!(IE)]><!-->
<script src="js/wow/wow.js"></script>
<script src="js/wow/device.min.js"></script>
<script>
    $(document).ready(function () {       
      if ($('html').hasClass('desktop')) {
        new WOW().init();
      }   
    });
</script>
<!--<![endif]-->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

    <div id="ie6-alert" style="width: 100%; text-align:center;">
    <img src="http://beatie6.frontcube.com/images/ie6.jpg" alt="Upgrade IE 6" width="640" height="344" border="0" usemap="#Map" longdesc="http://die6.frontcube.com" />
      <map name="Map" id="Map"><area shape="rect" coords="496,201,604,329" href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank" alt="Download Interent Explorer" /><area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank" alt="Download Apple Safari" /><area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank" alt="Download Opera" /><area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank" alt="Download Firefox" />
        <area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank" alt="Download Google Chrome" />
      </map>
  </div>
  <![endif]-->
</head>
<body>
<header class="indent">
    <div class="follow-box">
        <div class="container"> 
            <ul class="address_icon">
                <li><img src="img/page1_icon1.png" alt=""> 9870 St Vincent Place, Glasgow, DC 45 Fr 45.</li>
                <li><img src="img/page1_icon2.png" alt=""> <a href="#">contact@demolink.org</a></li>
                <li><img src="img/page1_icon3.png" alt=""> +1 800 559 6580</li>
            </ul>
            <ul class="follow_icon">
                <li><a href="#"><img src="img/follow_icon1.png" alt=""></a></li>
                <li><a href="#"><img src="img/follow_icon2.png" alt=""></a></li>
                <li><a href="#"><img src="img/follow_icon3.png" alt=""></a></li>
                <li><a href="#"><img src="img/follow_icon4.png" alt=""></a></li>
                <li><a href="#"><img src="img/follow_icon5.png" alt=""></a></li>
            </ul>
        </div>
    </div> 
    <div class="container">  
        <h1 class="navbar-brand navbar-brand_ wow fadeInLeft"><a href="index.html"><img src="img/logo.png" alt="logo"></a></h1>     
        <form id="search" class="search" action="search.php" method="GET" accept-charset="utf-8">
            <input type="text" name="s" value="" onfocus="if (this.value == '') {this.value=''}" onblur="if (this.value == '') {this.value=''}">
            <a href="#" onClick="document.getElementById('search').submit()"><img src="img/magnify.png" alt=""></a>
        </form> 
        <nav class="navbar navbar-default navbar-static-top tm_navbar clearfix" role="navigation">
            <ul class="nav sf-menu clearfix">
                <li><a href="index.html">Home</a></li>
                <li class="sub-menu"><a href="index-1.html">About</a><span></span>
                    <ul class="submenu">
        				<li><a href="#">history</a></li>
        				<li><a href="#">news</a><span class="fa fa-angle-right"></span>
                            <ul class="submenu">
                                <li><a href="#">latest</a></li>
                                <li><a href="#">archive</a></li>
                              </ul> 
                        </li>
        				<li><a href="#">testimonials</a></li>
        			</ul>
                </li>
                <li><a href="index-2.html">Services</a></li>
                <li><a href="index-3.html">Projects</a></li>
                <li><a href="index-4.html">Contacts</a></li>
            </ul>
        </nav> 
    </div>
</header>
<div class="content indent">
    <!--content-->
    <div class="container">
        <h3>Search result:</h3>
        <div id="search-results"></div>
    </div>
</div>
<!--footer-->
<footer>
    <div class="container">
        <p class="title wow fadeInUp">HRconsulting</p>
        <p class="privacy wow fadeInUp">&copy; <em id="copyright-year"></em> <a href="index-5.html">Privacy Policy</a></p>
        <p class="wow fadeInUp">9870 St Vincent Place, Glasgow, DC 45 Fr 45.<br>Freephone:  +1 800 559 6580</p>
        <ul class="follow_icon_foo wow fadeInUp">
            <li><a href="#"><img src="img/follow_icon6.png" alt=""></a></li>
            <li><a href="#"><img src="img/follow_icon7.png" alt=""></a></li>
            <li><a href="#"><img src="img/follow_icon8.png" alt=""></a></li>
            <li><a href="#"><img src="img/follow_icon9.png" alt=""></a></li>
            <li><a href="#"><img src="img/follow_icon10.png" alt=""></a></li>
        </ul>
    </div>
</footer>
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
</body>
</html>