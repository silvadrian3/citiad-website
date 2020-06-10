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
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.19/angular.min.js" type="text/javascript"></script>
    <script src="http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.10.0.js" type="text/javascript"></script>
    
    <style>
        .list-products { padding: 20px 20px; border: solid 1px transparent; height: 340px;}
        .list-products:hover { border: solid 1px #eee; cursor: pointer; }
        .product_name {margin-bottom: 0 !important;}
        .active_category, .active_range { background-color: #f5f5f5; }
        .clear_filter:hover { color:#ff0000; cursor: pointer; }
    </style>
    <!--
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
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
</head>

<body id="page-top" class="index">
	
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

    <div id="divproducts" style="display:none">
    <section style="margin-top:50px;" ng-app="myApp">
        <div class="container">
            
            <div class="row" ng-controller="PageCtrl">
                <div class="col-lg-12">
                    <form method="post" class="form-horizontal">
                        
                        <div class="col-lg-10 col-lg-offset-1" id="divShowProducts">
                            
                            
                            <div class="page-load" id="product-page-load" style="display:none">
                                <span class="fa fa-spinner fa-spin fa-3x fa-fw"></span> <br><br>Loading... Please wait. 
                            </div>
                            
                            <section class="row">
                                <div class="col-lg-12" style="padding-bottom:50px">
                                    <div class="col-lg-4">
                                        <img src="<?php print(ASSET_URL); ?>/assets/his-statements.png" class="img-responsive" />
                                    </div>
                                    <div class="col-lg-7 col-lg-offset-1">
                                        <p style="font-size:32px;">HIS STATEMENTS</p>
                                        <p style="font-size:18px;">An innovative way of approaching quality Christian merchandise with a purpose.</p>
                                        <p style="font-size:18px;">Using premium items, inspired designs and custom printing.</p>
                                        <br />
                                        <p style="font-size:22px;">SHARE JESUS NOW!</p>
                                    </div>
                                </div>
                            </section>
                            
                            <hr/>
                            <section class="row">
                                <div class="col-lg-12">
                                    <div class="col-lg-4 list-products" ng-repeat="product in filtered = items | filter:search | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit" ng-click="redirect(product.product_id)">
                                        <!-- <img ng-src="{{item.img_url + item.img_location  + item.img_filename}}" class="center-block img-responsive" alt="item.name" /> -->
                                        <img ng-src="{{product.loc_url + product.loc_base_dir + product.loc_src_dir + product.img_filename}}" class="center-block img-responsive" alt="{{item.name}}" />

                                        <div class="portfolio-caption" style="padding:10px">
                                            <p class="product_name">{{ product.name }}</p>
                                            <!--<small class="text-muted">{{ item.description }}</small>-->
                                            <!--<p style="display:block; color:#ff9919">{{ item.selling_price | currency : "P " }}</p>-->
                                        </div>
                                    </div>
                                </div>
                            </section>

                            
                        </div>
                        
                        <div id="paganation" class="text-right col-lg-12" style="padding:50px">
                            <pagination page="currentPage" max-size="noOfPages" total-items="totalItems" items-per-page="entryLimit"></pagination>
                        </div>
                        
                        <div class="col-lg-12">
                            <br/><br/><br/><br/>
                        </div>
                    </form>
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
    </div>

    <!-- jQuery -->
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script>
        var app = angular.module('myApp', ['ui.bootstrap']);

        app.filter('startFrom', function () {
            return function (input, start) {
                if (input) {
                    start = +start;
                    return input.slice(start);
                }
                return [];
            };
        });

        app.controller('PageCtrl', ['$scope', '$http', 'filterFilter', function ($scope, $http, filterFilter) {
            
            angular.element(document).ready(function () {
                $("#product-page-load").css("display", "block");
    
                //var products_url = "api/v1/products.php?k=5fea10f9b07309ead88909855cfff695&client_id=" + btoa(3) + "&category_id=16";
                var products_url = 'model/his-statements-products.json';
                
                $http.get(products_url).success(function (response) {
                    if(response.result){
                        $scope.items = response.data;
                        $scope.totalresult = response.data.length;

                        // create empty search model (object) to trigger $watch on update
                        $scope.search = {};

                        var pattern = /[?&]c=/,
                            URL = location.search;

                        //if(GetQueryStringParams("c")!="" && pattern.test(URL)){

                            var category_id = 16;
                                $scope.search = {category_id: category_id};
                                $scope.filter_category(category_id);
                        //}

                        // pagination controls
                        $scope.currentPage = 1;
                        $scope.totalItems = $scope.items.length;
                        $scope.entryLimit = 12; // items per page
                        $scope.noOfPages = Math.ceil($scope.totalItems / $scope.entryLimit);

                        // $watch search to update pagination
                        $scope.$watch('search', function (newVal, oldVal) {
                        document.getElementById('product-page-load').style.display = 'block';
                        document.getElementById('divShowProducts').style.display = 'none';
                            
                        $scope.filtered = filterFilter($scope.items, newVal);
                        $scope.totalItems = $scope.filtered.length;
                        $scope.noOfPages = Math.ceil($scope.totalItems / $scope.entryLimit);
                        $scope.currentPage = 1;

                        if($scope.totalItems == $scope.totalresult){
                            $scope.show_all = false;
                        } else {
                            $scope.show_all = true;
                        }

                        if($scope.totalItems > 0){
                            $scope.itemResult = true;

                            if($scope.totalItems > 12){
                                document.getElementById('paganation').style.display = 'block';    
                            } else {
                                document.getElementById('paganation').style.display = 'none';
                            }

                        } else {
                            $scope.itemResult = false;
                            document.getElementById('paganation').style.display = 'none';
                        }

                        document.getElementById('product-page-load').style.display = 'none';
                        $("#divShowProducts").css("display", "block");
                        
                    }, true);

                    }
                $("#divproducts").css("display", "block");
                $("#divShowProducts").css("display", "block");    
                $("#product-page-load").css("display", "none");
                
                });

            });
            
            
            
            $scope.resetFilters = function () {
                    // needs to be a function or it won't trigger a $watch
                    $scope.search = {};
                    $scope.clearf('all');
                };
            
                $scope.filter_category = function(id){
                    $scope.selectCategory = true;
                    $scope.selected_Category = $("#category_" + id).text();

                    $(".categories").css("background-color", "");
                    $(".categories").removeClass("active_category");
                    if(!$("#category_" + id).hasClass("active_category")) {
                        $("#category_" + id).addClass("active_category");
                    } else {
                        $("#category_" + id).removeClass("active_category");
                        $("#category_" + id).css("background-color", "#ffffff");
                    }
                }
            
            $scope.filter_range = function(id){
                    $scope.selectRange = true;
                    $scope.selected_Range = $("#range_" + id).text();
                
                $(".pricerange").css("background-color", "");
                $(".pricerange").removeClass("active_range");
                
                if(!$("#range_" + id).hasClass("active_range")) {
                    $("#range_" + id).addClass("active_range");
                } else {
                    $("#range_" + id).removeClass("active_range");
                    $("#range_" + id).css("background-color", "#ffffff");
                }
            }
            
            $scope.clearf = function(type){
                
                if(type == 'category'){
                    $(".categories").css("background-color", "#ffffff");
                    $(".categories").removeClass("active_range");
                    
                    $scope.selectCategory = false;
                    $scope.selected_Category = "";
                    delete $scope.search.category_id;
                    
                } else if(type == 'range'){
                    $(".pricerange").css("background-color", "#ffffff");
                    $(".pricerange").removeClass("active_range");
                    
                    $scope.selectRange = false;
                    $scope.selected_Range = "";
                    delete $scope.search.price_range_id;
                } else {
                    $(".categories").css("background-color", "#ffffff");
                    $(".pricerange").css("background-color", "#ffffff");
                    $(".categories").removeClass("active_range");
                    $(".pricerange").removeClass("active_range");
                    
                    $scope.selectRange = false;
                    $scope.selectCategory = false;
                    
                    $scope.selected_Range = "";
                    $scope.selected_Category = "";
                    
                    delete $scope.search.price_range_id;
                    delete $scope.search.category_id;
                }
                
            }
            
            $scope.redirect = function(id){
                window.location = "view-product.php?p=" + btoa(id);
            }

            
        }]);

        //get QueryString Parameters 
        function GetQueryStringParams(e) {
            "use strict";
            var t = window.location.search.substring(1),
                n = t.split("&"),
                r,
                i;

            for (r = 0; r < n.length; r++) {
                i = n[r].split("=");
                if (i[0] === e) {
                    return i[1];
                }
            }
        }
    </script>
	
</body>

</html>
