<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Citiad Promo & Prints Co.</title>

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
    <section style="margin-top:50px;" ng-app="citiadProductsApp">
        <div class="container">
            
            <div class="row" ng-controller="citiadProductsCtrl">
                <div class="col-lg-12" style="padding: 50px 0">
                    <form method="post" class="form-horizontal">
                        
                        <div class="col-lg-3">
                            <input type="text" class="form-control" placeholder="Search Product" ng-model="search.name"><br/>
                            <div class="list-group">
                                <a href="javascript:void(0)" class="list-group-item" style="border:solid 1px #ff9919; background-color:#ff9919; color:#FFF">Categories</a>
                                
                                
                                
                                <a ng-repeat="cat in category" href="javascript:void(0)" id="category_{{cat.id}}" class="list-group-item categories" ng-click="search.category_id = cat.id; filter_category(cat.id)">{{cat.name}}</a>
                                
                                <!--
                                <a href="javascript:void(0)" id="category_15" class="list-group-item categories" ng-click="search.category_id = '15'; filter_category(15)">Category 2</a>
                                <a href="javascript:void(0)" id="category_16" class="list-group-item categories" ng-click="search.category_id = '16'; filter_category(16)">Category 3</a>
                                <a href="javascript:void(0)" id="category_17" class="list-group-item categories" ng-click="search.category_id = '17'; filter_category(17)">Category 4</a>
                                <a href="javascript:void(0)" id="category_18" class="list-group-item categories" ng-click="search.category_id = '18'; filter_category(18)">Category 5</a>
                                -->
                                
                                <p class="text-danger clear_filter" style="padding:5px" ng-click="clearf('category')"><small>Clear Filter</small></p>
                            </div>
                            
                            <br/>
                            <!--
                            <div class="list-group">
                                <a href="javascript:void(0)" class="list-group-item" style="border:solid 1px #ff9919; background-color:#ff9919; color:#FFF">Price Range</a>
                                <a href="javascript:void(0)" id="range_1" class="list-group-item pricerange" ng-click="search.price_range_id=1; filter_range(1)">Under P 100.00</a>
                                <a href="javascript:void(0)" id="range_2" class="list-group-item pricerange" ng-click="search.price_range_id=2; filter_range(2)">P 100.00 - P 500.00</a>
                                <a href="javascript:void(0)" id="range_3" class="list-group-item pricerange" ng-click="search.price_range_id=3; filter_range(3)">P 500.00 - P 1,000.00</a>
                                <a href="javascript:void(0)" id="range_4" class="list-group-item pricerange" ng-click="search.price_range_id=4; filter_range(4)">P 1,000.00 - P 2,500.00</a>
                                <a href="javascript:void(0)" id="range_5" class="list-group-item pricerange" ng-click="search.price_range_id=5; filter_range(4)">P 2,500.00 - P 5,000.00</a>
                                <p class="text-danger clear_filter" style="padding:5px" ng-click="clearf('range')"><small>Clear Filter</small></p>
                            </div>
                            -->
                        </div>
                        
                        <div class="col-lg-9" id="divShowProducts">
                            
                            
                            <div class="page-load" id="product-page-load" style="display:none">
                                <span class="fa fa-spinner fa-spin fa-3x fa-fw"></span> <br><br>Loading... Please wait. 
                            </div>
                            
                            
                            <span id="divResult" style="display:none">
                                <div class="col-lg-10">
                                    <p style="font-size:20px; margin-bottom:7px">
                                        <span ng-if="!itemResult">No Item Found</span>
                                        <span ng-if="itemResult">{{ totalItems }} Item<span ng-if="totalItems > 1">s</span> Found</span>
                                        <span ng-if="selectCategory" style="margin-left:10px">
                                            <small style="color:#ff9919; font-size:14px"> {{selected_Category}}  <sup ng-click="clearf('category')" class="fa fa-times text-danger clear_filter"></sup></small>
                                        </span>
                                        <span ng-if="selectRange" style="margin-left:10px">
                                            <small style="color:#ff9919; font-size:14px"> {{selected_Range}}  <sup ng-click="clearf('range')" class="fa fa-times text-danger clear_filter"></sup></small>
                                        </span>
                                    </p>
                                </div>

                                <div class="col-lg-2">
                                    <button class="btn btn-warning btn-block" ng-click="resetFilters()" ng-show="show_all"> SHOW ALL </button>
                                </div>
                                
                                <!--<div class="col-lg-12"><br/></div>-->
                            </span>
                            
                            
                            <div class="col-lg-4 list-products" ng-repeat="product in filtered = items | filter:search | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit" ng-click="redirect(product.product_id)">
                                <!-- <img ng-src="{{item.img_url + item.img_location  + item.img_filename}}" class="center-block img-responsive" alt="item.name" /> -->

                                <img ng-src="{{product.loc_url + product.loc_base_dir + product.loc_src_dir + product.img_filename}}" class="center-block img-responsive" alt="{{product.name}}" />
                                <div class="portfolio-caption" style="padding:10px">
                                    <p class="product_name">{{ product.name }}</p>
                                    <!--<small class="text-muted">{{ item.description }}</small>-->
                                    <!--<p style="display:block; color:#ff9919">{{ item.selling_price | currency : "P " }}</p>-->
                                </div>
                            </div>

                            
                        </div>
                        
                        <div id="paganation" class="text-right col-lg-12" style="padding-top:50px">
                            <pagination page="currentPage" max-size="noOfPages" total-items="totalItems" items-per-page="entryLimit"></pagination>
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
        var app = angular.module('citiadProductsApp', ['ui.bootstrap']);

        app.filter('startFrom', function () {
            return function (input, start) {
                if (input) {
                    start = +start;
                    return input.slice(start);
                }
                return [];
            };
        });

        app.controller('citiadProductsCtrl', ['$scope', '$http', 'filterFilter', function ($scope, $http, filterFilter) {
            
            angular.element(document).ready(function () {
                $("#product-page-load").css("display", "block");
                
                //var categories_url = 'api/v1/categories.php?k=5fea10f9b07309ead88909855cfff695&client_id=' + btoa(3);
                var categories_url = 'model/categories.json';
                
                $http.get(categories_url).success(function (response) {
                    $scope.category = response.data;
                });
                
                //var products_url = 'api/v1/products.php?k=5fea10f9b07309ead88909855cfff695&client_id=' + btoa(3);
                var products_url = 'model/products.json';
                
                $http.get(products_url).success(function (response) {

                    if(response.result){
                        $scope.items = response.data;
                        //console.log(JSON.stringify(response.data));
                        $scope.totalresult = response.data.length;

                        // create empty search model (object) to trigger $watch on update
                        $scope.search = {};

                        var pattern = /[?&]c=/,
                            URL = location.search;

                        if(GetQueryStringParams("c")!="" && pattern.test(URL)){

                            var cat_id = GetQueryStringParams("c"),
                                category_id = atob(cat_id);
                                $scope.search = {category_id: category_id};
                                $scope.filter_category(category_id);
                        }

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
                        document.getElementById('divResult').style.display = 'block';

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
