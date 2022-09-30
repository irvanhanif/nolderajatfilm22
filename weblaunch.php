<?php 

    require "asset.php";
    global $wpdb;
    $endtime = str_replace("T", " ", $endtime);
    date_default_timezone_set('Asia/Jakarta');
    if(strtotime(date("Y-m-d H:i:s")) >= strtotime($endtime) && strtotime(date("Y-m-d H:i:s")) <= strtotime($endtime) +1){
        $users = $wpdb->get_results("SELECT email FROM subscribe_email");
        $email_subject = "Web is launch now";
        $message = "the website nolderajatfilm is launching now at : ". $endtime;

        foreach($users as $user) {
        wp_mail($user->email, $email_subject, $message);
    }
}

?>