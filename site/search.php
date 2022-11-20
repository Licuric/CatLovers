<!DOCTYPE html>
<html lang="en">
<head>
<title>Rezultatul cautarii: </title>
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
<link rel="stylesheet" href="fonts/font-awesome.css">
<!--JS-->
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="search/search.js"></script>
<script src="js/jquery.mobilemenu.js"></script> 
<script src="js/jquery.ui.totop.js"></script>
<script src="js/jquery.equalheights.js"></script> 
</head>
<body>
<!--header-->
<header>
    <div class="container">
        <div class="row">
            <article class="col-lg-12 col-md-12 col-sm-12">
                <div class="srch-box">
                    <form id="search" class="search" action="search.php" method="GET" accept-charset="utf-8">
                         <input type="text" name="s" value="" onfocus="if (this.value == '') {this.value=''}" onblur="if (this.value == '') {this.value=''}">
                         <a href="#" onClick="document.getElementById('search').submit()"><img src="img/magnify.png" alt=""></a>
                    </form>
                </div>
            </article>
        </div>
    </div>
    <div id="stuck_container">
        <section class="menuBox">
            <div class="container">
                <div class="row">
                    <article class="col-lg-12 col-md-12 col-sm-12">
                        <h1 class="navbar-brand navbar-brand_"><a href="index.html"><img src="img/logo.png" alt=""></a></h1>
                        <nav class="navbar navbar-default navbar-static-top tm_navbar clearfix" role="navigation">
                        	<ul class="nav sf-menu clearfix">
                        		<li><a href="index.html">Acasa</a></li>
                        		<li class="sub-menu"><a href="index-1.html">Despre noi<span></span></a>
                                    <ul class="submenu">
                        				<li><a href="#">Echipa</a></li>
                        				<li><a href="#">FAQs</a></li>
                        			</ul>
                                </li>
                        		<li><a href="index-2.html">Servicii</a></li>
                        		<li><a href="index-3.html">Blog</a></li>
                                <li><a href="index-4.html">Contacte</a></li>
                        	</ul>
                        </nav>
                    </article>
                </div>
            </div>
        </section>
    </div>
</header>
<div class="global indent">
    <!--content-->
    <div class="container">
        <div class="row">
            <section class="searchBox clearfix">
                <article class="col-lg-12 col-md-12 col-sm-12">
                    <h2 class="indent">Rezultatul cautarii:</h2>
                    <div id="search-results"></div>
                </article>
            </section>
        </div>
    </div>
</div>
<!--footer-->
<footer>
    <div class="container">
        <div class="row">
            <article class="col-lg-12 box4">
                <p class="priv"><img src="img/foo_logo.png" alt=""> <span>&copy; <em id="copyright-year"></em> <a href="index-5.html">Privacy policy</a></span></p>
                <ul class="follow_icon">
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-google-plus"></a></li>
                </ul>
            </article>
        </div>
    </div>
</footer>
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
</body>
</html>