<?php
wp_head();
    require "asset.php";
    $endtime = str_replace("T", " ", $endtime);
    date_default_timezone_set('Asia/Jakarta');
    if($endtime < date("Y-m-d H:i:s")){
        require('homepage.php');
    }else{
        if( is_user_logged_in() ){
            require('homepage.php');
        } else {
            require('comingsoon.php');
        }
    }
?>