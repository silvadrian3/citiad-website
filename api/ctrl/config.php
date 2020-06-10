<?php

DEFINE("TITLE", "Citiad Promo & Prints Co.");
DEFINE("ASSET_URL", asset_url());

function app_server(){
    if(strpos($_SERVER['HTTP_HOST'],'localhost') !== false)
        return 1;
    else //default 
        return 0;
}

function asset_url(){
    if(app_server() == 1)
        return "//localhost/citiad-assets/s3";
    
    else // s3
        return "https://s3-ap-southeast-1.amazonaws.com/quisi/citiad";
}

?>