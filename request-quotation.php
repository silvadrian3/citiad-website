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

    <div id="divservices" style="display:none">
        
    <form method="post">
    <section ng-app="myApp">
        <div class="container">
            
            <div class="row" ng-controller="PageCtrl">
                
                
                <div class="clearfix"></div>
                
                    <div class="col-lg-12" style="margin-top:50px; margin-bottom:50px">
                        
                        <div class="col-lg-12 form-group"><h2>Request a Qoute. It's Free and will always be.<br/><br/></h2></div>
                        
                        <div class="col-lg-12">
                            <label style="font-size:20px; color:#ff9919">{{service.name}}</label>
                        </div>
                        <div class="col-lg-6">
                        
                            <div class="col-lg-12 row">
                                <!-- <img ng-src="{{service.image.url + service.image.location + service.image.filename}}" class="thumbnail center-block img-responsive col-lg-12" /> -->
                                <img ng-src="{{service.image.loc_url + service.image.loc_base_dir + service.image.loc_src_dir + service.image.filename}}" class="thumbnail center-block img-responsive col-lg-12" alt="{{service.name}}" />
                                <p class="text-muted">{{service.description}}</p>
                            </div>
                            
                        </div>
                        
                        <div class="col-lg-5 col-lg-offset-1">
                            
                            <p class="text-left">Get your free qoute by filling up and submitting the form. We assure you that the information you provided will not be shared with any 3rd parties under any circumstances.<br/><br/></p>

                            
                                <div class="row">
                                    <input type="text" style="display:none" value="{{servicename}}" name="servicename">
                                    <div class="form-group col-lg-6">
                                        <input type="text" name="firstname" id="firstname" class="form-control" style="height:40px" placeholder="First Name *" required />
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <input type="text" name="lastname" id="lastname" class="form-control" style="height:40px" placeholder="Last Name *" required />
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <input type="email" name="email" id="email" class="form-control" style="height:40px" placeholder="Email Address *" required />
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <input type="tel" name="contactno" id="contactno" class="form-control" style="height:40px" placeholder="Contact No." />
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <textarea name="message" id="message" class="form-control" rows="5" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-lg-12 text-right">
                                        <button type="submit" name="submit" class="btn btn-warning" onclick="return request_quote()">Request a Quote Now!</button>
                                    </div>
                                </div>

                            
                        </div>
                    </div>
                
                
                <div class="clearfix"></div>
                
                <div class="row"><br/><br/></div>
                
            </div>
        </div>
    </section>
    </form>

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
        var app = angular.module('myApp', []),
            service_id = GetQueryStringParams('s');;

        app.controller('PageCtrl', ['$scope', '$http', '$filter', function ($scope, $http, $filter) {
            
            angular.element(document).ready(function () {
                $http.get('model/services.json').success(function (response) {                    
                    if(typeof service_id !== undefined && service_id != ''){
                        $scope.service = $filter('filter')(response.services, {id: atob(service_id)})[0];
                        $scope.servicename = $scope.service.name;
                        $("#divservices").css("display", "block");
                    }
                    
                });
            });
        }]);
        
        
        /** Validation */
        
        $("#firstname").blur(function(){
            if($("#firstname").val() != ""){
                $("#firstname").removeClass("alert-danger");
            } else {
                $("#firstname").addClass("alert-danger");
            }
        });

        $("#lastname").blur(function(){
            if($("#lastname").val() != ""){
                $("#lastname").removeClass("alert-danger");
            } else {
                $("#lastname").addClass("alert-danger");
            }
        });

        $("#email").blur(function(){
            if($("#email").val() != ""){
                $("#email").removeClass("alert-danger");
            } else {
                $("#email").addClass("alert-danger");
            }
        });
        
                
        function request_quote(){
            var firstname = $("#firstname"),
                lastname = $("#lastname"),
                email = $("#email"),
                contactno = $("#contactno"),
                message = $("#message");

            if(firstname.val() === "" || firstname.val() === undefined){
                alert("First Name is required");
                firstname.focus();
                firstname.addClass("alert-danger");
                return false;
            } else if(lastname.val() === "" || lastname.val() === undefined){
                alert("Last Name is required");
                lastname.focus();
                lastname.addClass("alert-danger");
                return false;
            } else if(email.val() === "" || email.val() === undefined){
                alert("Email Address is required");
                email.focus();
                email.addClass("alert-danger");
                return false;
            } else {
                return true;
            }
        }
        
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
    
<?php
$result = "";

if(isset($_POST['submit'])){
    
    $firstname = trim($_POST["firstname"]);
    $lastname = trim($_POST["lastname"]);
    $email_address = trim($_POST["email"]);
    $contactno = trim($_POST["contactno"]);
    $message = trim($_POST["message"]);
    $servicename = trim($_POST["servicename"]);

    if($message != ""){
        $message = nl2br($message);
    } else {
        $message = 'N/A';
    }

    if($contactno == ""){
        $contactno = 'N/A';
    }

    $body = '<html><body style="font-family:calibri, arial;">';
    $body .= '<p><i>Please do not reply. This is an automated email.</i></p><br/>';
    $body .= '<p>Dear Sales Team,</p><br/>';
    $body .= '<p>'. $firstname . ' ' . $lastname .' is requesting a quotation for the services we offer. Please see below details:<br/></p>';
    $body .= '<p>Service Name: <b>' . $servicename . '</b></p>';
    $body .= '<p>Email Address: <b>' . $email_address . '</b></p>';
    $body .= '<p>Contact Number: <b>' . $contactno . '</b></p>';
    $body .= '<p>Message: <br/><b>' . $message . '</b></p><br/>';
    $body .= "<p>Please send a copy of the Quotation on the given contact details.<br/></p>";
    $body .= "<p>If you need additional help, feel free to contact our support team.</p>";
    $body .= "<p>Sincerely,<br/>Citiad - Support</p>";
    $body .= "</body></html>";
    
    $from_name = null;
    $from_email = "no-reply@citiad.co";
    $subject = "Request for Quotation";
    $to_name = null;
    //$to_email = "sales@citiad.co";
    $to_email = "silvadrian3@gmail.com";
    $content_type = "text/html";
    $content_body = $body;
    $bcc1_name = null;
    $bcc1_email = "adrianquijanosilva@gmail.com";
    $success_msg = "Request for Quotation successfully submitted. Our sales team will contact you shortly.";
    
    include "mail/sender.php";
}

?>
</body>

</html>
