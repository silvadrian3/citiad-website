<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Citiad Promo & Prints Co.</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	<link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/owl.carousel.min.css" rel="stylesheet">
	<link href="css/owl.theme.default.css" rel="stylesheet">
	<link href="css/owl.theme.default.min.css" rel="stylesheet">
    <!--
	<link href="css/owl.theme.green.css" rel="stylesheet">
	<link href="css/owl.theme.green.min.css" rel="stylesheet">
    -->
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!--
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    --> 
    
    <style>
        .slider { width: 100%; height: 300px; position: relative; }
        .slide1, .slide2, .slide3 { position: absolute; width: 100%; height: 100%; }
        .slide1 { background: url(img/center-ad1.jpg)no-repeat center; background-size: cover; animation:fade 12s infinite; -webkit-animation:fade 12s infinite; } 
        .slide2 { background: url(img/center-ad2.png)no-repeat center; background-size: cover; animation:fade2 12s infinite; -webkit-animation:fade2 12s infinite; }
        .slide3 { background: url(img/center-ad3.png)no-repeat center; background-size: cover; animation:fade3 12s infinite; -webkit-animation:fade3 12s infinite; }
        @keyframes fade { 0% {opacity:1} 33.333% { opacity: 0} 66.666% { opacity: 0} 100% { opacity: 1} }
        @keyframes fade2 { 0% {opacity:0} 33.333% { opacity: 1} 66.666% { opacity: 0 } 100% { opacity: 0} }
        @keyframes fade3 { 0% {opacity:0} 33.333% { opacity: 0} 66.666% { opacity: 1} 100% { opacity: 0} }
        
    </style>
	
</head>

<body id="home" class="index">
    <nav class="navbar navbar-default navbar-fixed-top ">
        <div class="container" style="width:96%">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#home">
                    <span class="hidden hd-home">Citiad Promo & Prints Co.</span>
                    <img class="sh-logo" src="https://s3.ap-southeast-1.amazonaws.com/citiad.co/assets/citiad_logo_240x90.png" />
                </a>    
            </div>

            <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
                <div class="pull-right col-md-2 row search-field">
                    <div class="input-group">
                        <input type="text" class="form-control" id="searchByCategory" name="searchByCategory" placeholder="Search..." aria-describedby="search-addon" list="categorylist">
                        <span class="input-group-addon" id="search-addon" onclick="search()"><i class="fa fa-search"></i></span>
                    </div>
                </div>

                <datalist id="categorylist">
                    <option class="datalist-option" value="Writing Instruments">
                    <option class="datalist-option" value="Stationaries">
                    <option class="datalist-option" value="Drinkwares">
                    <option class="datalist-option" value="Electronics">
                    <option class="datalist-option" value="UV Prints">
                </datalist>

                <ul class="nav navbar-nav navbar-right">
                    <li><a class="hd-home" href="#home">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                    <li><a href="his-statements.php">His Statements</a></li>
                </ul>
                
            </div>
            
            
        </div>
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <!--
                <h1 class="intro-lead-in">Enjoy the quality, Admire the value!</h1><br/>
                <div class="intro-lead-in">Elegance is an attitude.</div><br/><br/><br/>
                -->
                <!--<div class="intro-heading"></div>-->   
            </div>
        </div>
    </header>

    <div ng-app="citiadApp" ng-controller="citiadCtrl">
        <section id="services">

            <div class="container">

                <section class="row firstrow">

                    <div class="col-md-3 portfolio-item">

                        <ul class="list-group pull-left" style="width:100%">

                            <li class="heading list-group-item">
                                <h5>Our Products</h5>
                            </li>

                            <li class="items list-group-item" onclick="javascript:window.location='products.php?c=' + btoa(14)">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span>Writing Instruments</span>
                                    </div>
                                </div>
                            </li>

                            <li class="items list-group-item" onclick="javascript:window.location='products.php?c=' + btoa(20)">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <span>Stationaries</span>
                                    </div>
                                </div>
                            </li>

                            <li class="items list-group-item" onclick="javascript:window.location='products.php?c=' + btoa(17)">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <span>Drinkwares</span>
                                    </div>
                                </div>
                            </li>

                            <li class="items list-group-item" onclick="javascript:window.location='products.php?c=' + btoa(18)">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <span>Electronics</span>
                                    </div>
                                </div>
                            </li>

                            <li class="items list-group-item" onclick="javascript:window.location='products.php?c=' + btoa(21)">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <span>UV Prints</span>
                                    </div>
                                </div>
                            </li>

                            <li class="items list-group-item" onclick="window.location='request-quotation.php?s='+btoa(4)">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <span>Display Systems</span>
                                    </div>
                                </div>
                            </li>

                            

                            <!--
                            <li class="items list-group-item" onclick="javascript:window.location='products.php?c=' + btoa(16)">
                                <div class="row">

                                    <div class="col-lg-1">
                                        <i class="fa fa-archive text-muted"></i>
                                    </div>

                                    <div class="col-lg-10">
                                        <span>His Statements</span>
                                        <small>Minima maxime quam architecto quo inventore harum</small>
                                    </div>
                                </div>
                            </li>
                            -->

                        </ul>

                    </div>

                    <div class="col-md-6 portfolio-item">
                        
                        <div class='slider'>
                            <div class='slide1'></div>
                            <div class='slide2'></div>
                            <div class='slide3'></div>
                        </div>
                        

                        <br/>

                        <div class="owl-carousel home-products-slide owl-theme">
                            <div ng-repeat="product in home_products | limitTo:12">
                                <span ng-click="redirect_product(product.product_id)">
                                    <!-- <img ng-src="{{product.img_url + product.img_location + product.img_filename}}" class="center-block img-responsive" alt="product.name" width="140px" height="140px"> -->
                                    <img ng-src="{{product.loc_url + product.loc_base_dir + product.loc_src_dir + product.img_filename}}" class="center-block img-responsive" alt="product.name" width="140px" height="140px">
                                    <p class="text-center">{{product.name}}</p>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 portfolio-item">
                        <img src="https://s3.ap-southeast-1.amazonaws.com/citiad.co/assets/ad4r_rush_shirt_printing_260x520.png" class="img-responsive" style="width:100%">
                    </div>

                </section>

                
                <div class="row" style="padding-top:30px">
                    <div class="col-lg-12">
                        <img src="https://s3.ap-southeast-1.amazonaws.com/citiad.co/assets/ad5b_1140x200.png" class="img-responsive" style="width:100%">
                    </div>
                </div>
                

            </div>
        </section>

        <section id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12 secondrow">
                            <div class="col-md-8 portfolio-item" style="padding-right: 2%;">

                                <div class="title">
                                    <h4>His Statements</h4>
                                    <small>
                                        An innovative way of approaching quality Christian merchandise with a purpose. 
                                        <!--Using premium items, inspired designs and custom printing.-->
                                    </small>
                                    <hr/>
                                </div>

                                <section id="best-selling-first-row">
                                    <div class="col-lg-4" ng-repeat="product in his_statements_products | limitTo:6">
                                        <span ng-click="redirect_product(product.product_id)">
                                            <!-- <img ng-src="{{product.img_url + product.img_location + product.img_filename}}" class="center-block img-responsive" alt="product.name" /> -->
                                            
                                            <img ng-src="{{product.loc_url + product.loc_base_dir + product.loc_src_dir + product.img_filename}}" class="center-block img-responsive" alt="{{product.name}}" />

                                            <div class="portfolio-caption">
                                                <h4>{{product.name}}</h4>
                                                <p class="text-muted">{{product.description}}</p>
                                            </div>
                                        </span>
                                    </div>
                                </section>
                                <!--
                                <section id="best-selling-first-row">
                                    <div class="col-lg-4">
                                        <span onclick="javascript:window.location='view-product.php?p=' + btoa(1)">
                                            <img src="https://s3.ap-southeast-1.amazonaws.com/citiad.co/products/tumbler/300x300/tumbler-CM-226-double-wall-ceramic-mug-silicon-cover.png" class="img-responsive" alt="">
                                            <div class="portfolio-caption">
                                                <h4>Product 10</h4>
                                                <p class="text-muted">Lorem ipsum</p>
                                            </div>
                                        </span>
                                    </div>

                                    <div class="col-lg-4">
                                        <span onclick="javascript:window.location='view-product.php?p=' + btoa(1)">
                                            <img src="https://s3.ap-southeast-1.amazonaws.com/citiad.co/products/ballpen/300x300/ballpen-BP-152.png" class="img-responsive" alt="">
                                            <div class="portfolio-caption">
                                                <h4>Product 11</h4>
                                                <p class="text-muted">Lorem ipsum</p>
                                            </div>
                                        </span>
                                    </div>

                                    <div class="col-lg-4">
                                        <span onclick="javascript:window.location='view-product.php?p=' + btoa(1)">
                                            <img src="https://s3.ap-southeast-1.amazonaws.com/citiad.co/products/tumbler/300x300/tumbler-CMIC-002.png" class="img-responsive" alt="">
                                            <div class="portfolio-caption">
                                                <h4>Product 12</h4>
                                                <p class="text-muted">Lorem ipsum</p>
                                            </div>
                                        </span>
                                    </div>
                                </section>

                                <div class="clearfix"></div>

                                <section id="best-selling-second-row">
                                <div class="col-lg-4">
                                    <span onclick="javascript:window.location='view-product.php?p=' + btoa(1)">
                                        <img src="https://s3.ap-southeast-1.amazonaws.com/citiad.co/products/ballpen/300x300/ballpen-BP-155.png" class="img-responsive" alt="">
                                        <div class="portfolio-caption">
                                            <h4>Product 13</h4>
                                            <p class="text-muted">Lorem ipsum</p>
                                        </div>
                                    </span>
                                </div>

                                <div class="col-lg-4">
                                    <span onclick="javascript:window.location='view-product.php?p=' + btoa(1)">
                                        <img src="https://s3.ap-southeast-1.amazonaws.com/citiad.co/products/tumbler/300x300/tumbler-CMM-003.png" class="img-responsive" alt="">
                                        <div class="portfolio-caption">
                                            <h4>Product 14</h4>
                                            <p class="text-muted">Lorem ipsum</p>
                                        </div>
                                    </span>
                                </div>

                                <div class="col-lg-4">
                                    <span onclick="javascript:window.location='view-product.php?p=' + btoa(1)">
                                        <img src="https://s3.ap-southeast-1.amazonaws.com/citiad.co/products/ballpen/300x300/ballpen-BP-2063-counter-pen.png" class="img-responsive" alt="">
                                        <div class="portfolio-caption">
                                            <h4>Product 15</h4>
                                            <p class="text-muted">Lorem ipsum</p>
                                        </div>
                                    </span>
                                </div>
                                
                                </section>
                                -->
                                
                                
                            </div>

                            <div class="col-md-4 portfolio-item div-products-onsale-container">
                                <div class="title">
                                    <h4>THE HEART OF OUR BUSINESS</h4>
                                    <small>A product for every promotion.</small>
                                    <hr/>
                                </div>
                                
                                <div class="home-services-slide">
                                    <ul>
                                        <li ng-repeat="product in home_services | limitTo:20" style="height:100px !important; margin:10px 0 !important;"  ng-click="redirect_service(product.category_id)">
                                            <div class="info">
                                                <div class="col-md-5">
                                                    <!-- <img ng-src="{{product.image.url + product.image.location  + product.image.filename}}" class="center-block img-responsive" alt="product.name"> -->

                                                    <img ng-src="{{product.image.loc_url + product.image.loc_base_dir + product.image.loc_src_dir + product.image.filename}}" class="center-block img-responsive" alt="{{product.name}}">

                                                </div>
                                                <div class="col-md-7 description">
                                                    <span>{{product.name}}</span>
                                                    <p class="text-muted"><br/>
                                                        <buton class="btn btn-sm btn-warning">Request Quotation</buton>
                                                    </p>
                                                    <!--<small></small>-->
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <hr class="bottom-hr" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 thirdrow">
                    <div class="col-lg-3 img-centered info">
                        <div class="col-md-3 text-icon">
                            <i class="fa fa-truck fa-3x"></i>
                        </div>
                        <div class="col-md-9">
                            <span>FREE SHIPPING</span>
                            <small>over than P150.00</small>
                        </div>
                    </div>

                    <div class="col-lg-3 img-centered info">
                        <div class="col-md-3 text-icon">
                            <i class="fa fa-refresh fa-3x"></i>
                        </div>
                        <div class="col-md-9">
                            <span>Money Back</span>
                            <small>100% guarantee</small>
                        </div>
                    </div>

                    <div class="col-lg-3 img-centered info">
                        <div class="col-md-3 text-icon">
                            <i class="fa fa-phone fa-3x"></i>
                        </div>
                        <div class="col-md-9">
                            <span>+63 927 9077 016</span>
                            <small>Mon to Fri, 9AM to 6PM</small>
                        </div>
                    </div>

                    <div class="col-lg-3 img-centered info">
                        <div class="col-md-3 text-icon">
                            <i class="fa fa-building fa-3x"></i>
                        </div>
                        <div class="col-md-9">
                            <span>4580 Lilac St., SSS Village</span>
                            <small>Concepcion 2, Marikina City</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id=servicesoffered>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12 forthrow">

                            <div class="col-md-12 title">
                                <hr class="bottom-hr" />
                                <h1>Services We Offer</h1>
                                <p class="text-muted">Our complete range of services aims to suit your every marketing need, with client satisfaction being our top priority.</p>
                                <hr/>
                            </div>

                            <div class="col-md-4 portfolio-item">
                                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                                    <div class="portfolio-hover" onclick="window.location='request-quotation.php?s='+btoa(1)">
                                        <div class="portfolio-hover-content">
                                            <i class="fa fa-file-text"></i> Request Quotation
                                        </div>
                                    </div>
                                    <img src="https://s3.ap-southeast-1.amazonaws.com/citiad.co/services/large-format-printing.jpg" class="img-responsive" alt="">
                                </a>
                                <div class="portfolio-caption">
                                    <!--<h4>Large Format printing</h4>-->
                                    <small class="text-muted" style="text-align:justify">We can output your design at incredible width and unlimited length. With our state of the art printers, outputting unparalled details, the image will explode off the surface in vibrant color, delivering your message every time.</small>
                                </div>
                            </div>

                            <div class="col-md-4 portfolio-item">
                                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                                    <div class="portfolio-hover" onclick="window.location='request-quotation.php?s='+btoa(3)">
                                        <div class="portfolio-hover-content">
                                            <i class="fa fa-file-text"></i> Request Quotation
                                        </div>
                                    </div>
                                    <img src="https://s3.ap-southeast-1.amazonaws.com/citiad.co/services/digital_offset-printing.jpg" class="img-responsive" alt="">
                                </a>
                                <div class="portfolio-caption">
                                    <!--<h4>Digital / Offset Printing</h4>-->
                                    <small class="text-muted" style="text-align:justify">Citiad can provide you great results on your short run project with our "print on demand" scheme, using digital process or your volume needs using offset procedures. We can help you with your designs or concepts put into reality.</small>
                                </div>
                            </div>

                            <div class="col-md-4 portfolio-item">
                                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                                    <div class="portfolio-hover" onclick="window.location='request-quotation.php?s='+btoa(2)">
                                        <div class="portfolio-hover-content">
                                            <i class="fa fa-file-text"></i> Request Quotation
                                        </div>
                                    </div>
                                    <img src="https://s3.ap-southeast-1.amazonaws.com/citiad.co/services/corporate-give-aways.jpg" class="img-responsive" alt="">
                                </a>
                                <div class="portfolio-caption">
                                    <!--<h4>Corporate Giveaways</h4>-->
                                    <small class="text-muted" style="text-align:justify">The best corporate gifts and give-aways to help communicate your brand’s message. It’s a proven tactic for word of mouth marketing.Name it and we will source it out for you.</small>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>

        <aside class="clients">
        <div class="container">  
            
            <div class="row">
                <div class="col-md-12 title">
                    <hr class="bottom-hr" />
                </div>
                <div class="col-md-2 col-sm-4">
                    <img src="https://s3.ap-southeast-1.amazonaws.com/citiad.co/clients/acquire.png" class="img-responsive img-centered" alt="">
                </div>
                <div class="col-md-2 col-sm-4">
                    <img src="https://s3.ap-southeast-1.amazonaws.com/citiad.co/clients/ccf-feliz.png" class="img-responsive img-centered" alt="">
                </div>    
                <div class="col-md-2 col-sm-4">
                    <img src="https://s3.ap-southeast-1.amazonaws.com/citiad.co/clients/cgi.png" class="img-responsive img-centered" alt="">
                </div>
                <div class="col-md-2 col-sm-4">
                    <img src="https://s3.ap-southeast-1.amazonaws.com/citiad.co/clients/exatech.png" class="img-responsive img-centered" alt="">
                </div>
                <div class="col-md-2 col-sm-4">
                    <img src="https://s3.ap-southeast-1.amazonaws.com/citiad.co/clients/uratex.png" class="img-responsive img-centered" alt="">
                </div>
                <div class="col-md-2 col-sm-4">
                    <img src="https://s3.ap-southeast-1.amazonaws.com/citiad.co/clients/samsung.png" class="img-responsive img-centered" alt="">
                </div>
                <div class="col-md-2 col-sm-4">
                    <img src="https://s3.ap-southeast-1.amazonaws.com/citiad.co/clients/shore-solutions.png" class="img-responsive img-centered" alt="">
                </div>
                <div class="col-md-2 col-sm-4">
                    <img src="https://s3.ap-southeast-1.amazonaws.com/citiad.co/clients/knowlegde-inspiration-training-events.png" class="img-responsive img-centered" alt="">
                </div>
                <div class="col-md-2 col-sm-4">
                    <img src="https://s3.ap-southeast-1.amazonaws.com/citiad.co/clients/largen-med.png" class="img-responsive img-centered" alt="">
                </div>
                <div class="col-md-2 col-sm-4">
                    <img src="https://s3.ap-southeast-1.amazonaws.com/citiad.co/clients/panasonic.png" class="img-responsive img-centered" alt="">
                </div>
                <div class="col-md-2 col-sm-4">
                    <img src="https://s3.ap-southeast-1.amazonaws.com/citiad.co/clients/timi.png" class="img-responsive img-centered" alt="">
                </div>
                <div class="col-md-2 col-sm-4">
                    <img src="https://s3.ap-southeast-1.amazonaws.com/citiad.co/clients/primeline-products-philippines.png" class="img-responsive img-centered" alt="">
                </div>
                <div class="col-md-2 col-sm-4">
                    <img src="https://s3.ap-southeast-1.amazonaws.com/citiad.co/clients/saf.png" class="img-responsive img-centered" alt="">
                </div>
                <div class="col-md-2 col-sm-4">
                    <img src="https://s3.ap-southeast-1.amazonaws.com/citiad.co/clients/tripaholic.png" class="img-responsive img-centered" alt="">
                </div>
                <div class="col-md-2 col-sm-4">
                    <img src="https://s3.ap-southeast-1.amazonaws.com/citiad.co/clients/natrapharm.png" class="img-responsive img-centered" alt="">
                </div>
                <div class="col-md-2 col-sm-4">
                    <img src="https://s3.ap-southeast-1.amazonaws.com/citiad.co/clients/variance-security-agency-corp.png" class="img-responsive img-centered" alt="">
                </div>
                <div class="col-md-2 col-sm-4">
                    <img src="https://s3.ap-southeast-1.amazonaws.com/citiad.co/clients/water-org.png" class="img-responsive img-centered" alt="">
                </div>
                <div class="col-md-2 col-sm-4">
                    <img src="https://s3.ap-southeast-1.amazonaws.com/citiad.co/clients/meyerf.png" class="img-responsive img-centered" alt="">
                </div>
            </div>
        
        </div>
    </aside>
    
    </div>
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <ul class="list-inline social-buttons">
                        <li><a href="#" onclick="javascript:window.open('https://www.twitter.com/citiadpromo')"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" onclick="javascript:window.open('https://www.facebook.com/citiadpromo')"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" onclick="javascript:window.open('https://www.instagram.com/citiadpromoandprintsco')"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-10 cp_footer">
                    <span class="copyright">&copy; <?php echo date('Y'); ?> Citiad Promo & Prints Co. <!-- Powered by <a href="http://www.quisi.net">quisi.net</a>--> </span>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/jcarousellite_1.0.1.pack.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    
    <!-- Contact Form JavaScript -->
    
	<script src="js/owl.carousel.js"></script>
	<script src="js/owl.carousel.min.js"></script>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.19/angular.min.js" type="text/javascript"></script>
    <!--<script src="http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.10.0.js" type="text/javascript"></script>-->
    
    <script>
        // angularJS
        
        var app = angular.module('citiadApp', []);

        app.controller('citiadCtrl', ['$scope', '$http', 'filterFilter', function ($scope, $http, filterFilter) {
            
            angular.element(document).ready(function () {
                $("#product-page-load").css("display", "block");
                
                $scope.home_products = [];
                $scope.home_services = [];
                $scope.his_statements_products = [];
                
                //var home_products_url = 'api/v1/products.php?k=5fea10f9b07309ead88909855cfff695&client_id=' + btoa(3) + '&category_id[]=14&category_id[]=15&category_id[]=17&limit=12&random=1';
                var home_products_url = 'model/home-products.json';
                
                
                $http.get(home_products_url).success(function (response) {

                    if(response.result){
                        $scope.home_products = response.data;
                        
                        setTimeout(function(){
                            $('.home-products-slide').owlCarousel({
                                autoplay: true,
                                autoplayTimeout: 4000,
                                navigation: false,
                                margin: 10,
                                loop:true,
                                smartSpeed:2000,
                                responsiveClass: true,
                                //autoplayHoverPause: true, // Stops autoplay
                                responsiveRefreshRate : 10,
                                dots: false
                            });
                        }, 0);
                        
                    }
                });
                
                
                //var home_services_url = 'api/v1/products.php?k=5fea10f9b07309ead88909855cfff695&client_id=' + btoa(3)  + '&category_id[]=' + 18 + '&category_id[]=' + 19 + '&category_id[]=' + 20 + '&category_id[]=' + 21 + '&limit=20&random=1';
                var home_services_url = 'model/home-services.json';
                
                $http.get(home_services_url).success(function (response) {
                    
                    if(response.result){
                        $scope.home_services = response.data;
                        
                            setTimeout(function(){
                            $(".home-services-slide").jCarouselLite({
                                vertical: true,
                                hoverPause:true,
                                visible: 5,
                                auto:2000,
                                speed:3000
                            });
                        }, 0);
                    }
                });
                
                
                //var his_statements_products_url = 'api/v1/products.php?k=5fea10f9b07309ead88909855cfff695&client_id=' + btoa(3) + '&category_id=16&limit=6';
                var his_statements_products_url = 'model/his-statements-products.json';
                
                $http.get(his_statements_products_url).success(function (response) {
                    if(response.result){
                        $scope.his_statements_products = response.data;
                        
                    }
                });
                
                //var categories_url = 'api/v1/categories.php?k=5fea10f9b07309ead88909855cfff695&client_id=' + btoa(3);
                var categories_url = 'model/categories.json';
                
                $http.get(categories_url).success(function (response) {
                    $scope.category = response.data;
                });
                
                
            });
            
            $scope.redirect_product = function(id){
                window.location = "view-product.php?p=" + btoa(id);
            }
            
            $scope.redirect_service = function(id){
                window.location = "request-quotation.php?s=" + btoa(id);
            }    
                                            
        }]);
            
        
        $(function() {
            $('a.page-scroll').bind('click', function(event) {
                var $anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top
                }, 1500, 'easeInOutExpo');
                event.preventDefault();
            });
        });

        // Highlight the top nav as scrolling occurs
        $('body').scrollspy({
            target: '.navbar-fixed-top'
        })

        // Closes the Responsive Menu on Menu Item Click
        $('.navbar-collapse ul li a').click(function() {
            $('.navbar-toggle:visible').click();
        });        
        
	</script>

</body>

</html>
