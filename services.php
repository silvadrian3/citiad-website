<?php include "api/ctrl/config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php print(TITLE); ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
    <!--
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    -->
</head>

<body id="page-top" class="index">
	
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
        <div class="container" style="width:98%">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="./">
                    <span class="hidden hd-home"><?php print(TITLE); ?></span>
                    <img class="sh-logo" src="<?php print(ASSET_URL); ?>/assets/citiad_logo_240x90.png" />
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
                    <li><a class="hd-home" href="./">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                    <li><a href="his-statements.php">His Statements</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <section id="about" style="margin:30px 0 80px 0">
        <div class="container">
            
            <div class="row">
                
                <div class="clearfix"></div>
                
                <div class="col-lg-12" style="padding: 75px 0 0 0">
                    <div class="col-lg-5">
                        <img src="<?php print(ASSET_URL); ?>/services/large-format-printing.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="col-lg-offset-1 col-lg-6">
                        <div class="portfolio-caption">
                            <p class="text-muted" style="text-align:justify">We can output your design at incredible width and unlimited length. With our state of the art printers, outputting unparalled details, the image will explode off the surface in vibrant color, delivering your message every time.</p>
                            <div class="col-lg-3" style="color:#ff9919">
                                <p>Tarpaulins</p>
                                <p>Stickers</p>
                                <p>Panaflex</p>
                            </div>
                            <div class="col-lg-3" style="color:#ff9919">
                                <p>Banner Cloth</p>
                                <p>Duratrans</p>
                            </div>
                        </div>
                        
                        <div class="col-lg-12 row">
                            <button class="btn btn-warning" style="margin-top:30px" onclick="window.location='request-quotation.php?s='+btoa(1)">Request Quotation</button>
                        </div>
                    </div>
                </div>
                
                <div class="clearfix"></div>
                
                <div class="col-lg-12" style="padding: 75px 0 0 0">
                    <div class="col-lg-5">
                        <img src="<?php print(ASSET_URL); ?>/services/corporate-give-aways.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="col-lg-offset-1 col-lg-6">
                        <div class="portfolio-caption">
                            <p class="text-muted" style="text-align:justify">The best corporate gifts and give-aways to help communicate your brand's message. It's a proven tactic for word of mouth marketing.Name it and we will source it out for you.</p>
                            <div class="col-lg-3" style="color:#ff9919">
                                <p>T-Shirt</p>
                                <p>Jackets</p>
                                <p>Bags</p>
                            </div>
                            <div class="col-lg-3" style="color:#ff9919">
                                <p>Umbrella</p>
                                <p>Tumblers</p>
                                <p>Pens</p>
                            </div>
                            <div class="col-lg-3" style="color:#ff9919">
                                <p>Mousepads</p>
                                <p>Fans</p>
                                <p>Flash Drives</p>
                            </div>
                            <div class="col-lg-3" style="color:#ff9919">
                                <!--<p>Coinbanks</p>-->
                                <p>Mugs</p>
                                <p>Clocks</p>
                                <p>Keychains</p>
                            </div>
                        </div>
                        
                        <div class="col-lg-12 row">
                            <button class="btn btn-warning" style="margin-top:30px" onclick="window.location='request-quotation.php?s='+btoa(2)">Request Quotation</button>
                        </div>
                    </div> 
                </div>
                
                <div class="clearfix"></div>
                
                <div class="col-lg-12" style="padding: 75px 0 0 0">
                    <div class="col-lg-5">
                        <img src="<?php print(ASSET_URL); ?>/services/digital_offset-printing.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="col-lg-offset-1 col-lg-6">
                        <div class="portfolio-caption">
                            <p class="text-muted" style="text-align:justify">Citiad can provide you great results on your short run project with our "print on demand" scheme, using digital process or your volume needs using offset procedures. We can help you with your designs or concepts put into reality.</p>
                            <div class="col-lg-3" style="color:#ff9919">
                                <p>ID's</p>
                                <p>Calendars</p>
                                <p>Posters</p>
                            </div>
                            <div class="col-lg-3" style="color:#ff9919">
                                <p>Flyers</p>
                                <p>Brochures</p>
                                <p>Office Forms</p>
                            </div>
                            <div class="col-lg-3" style="color:#ff9919">
                                <p>Year Book</p>
                                <p>Magazines</p>
                            </div>
                            
                        </div>
                        
                        <div class="col-lg-12 row">
                            <button class="btn btn-warning" style="margin-top:30px" onclick="window.location='request-quotation.php?s='+btoa(3)">Request Quotation</button>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
            
                <div class="col-lg-12" style="padding: 75px 0 0 0">
                    <div class="col-lg-5">
                        <img src="<?php print(ASSET_URL); ?>/services/display-systems.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="col-lg-offset-1 col-lg-6">
                        <div class="portfolio-caption">
                            <p class="text-muted" style="text-align:justify">Be noticed. We offer every imaginable component for your exhibit  display.</p>
                            <div class="col-lg-3" style="color:#ff9919">
                                <p>Pop-Up Exhibits</p>
                                <p>Table Top Displays</p>
                                <p>Banner Stands</p>
                            </div>
                            <div class="col-lg-3" style="color:#ff9919">
                                <p>Customs Modular</p>
                                <p>Booth Dressed-up</p>
                            </div>
                        </div>
                        
                        <div class="col-lg-12 row">
                            <button class="btn btn-warning" style="margin-top:30px" onclick="window.location='request-quotation.php?s='+btoa(4)">Request Quotation</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                    <span class="copyright">&copy; <?php echo date('Y'); ?> Citiad Promo &amp; Prints Co. <!-- Powered by <a href="http://www.quisi.net">quisi.net</a>--> </span>
                </div>
                
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>
