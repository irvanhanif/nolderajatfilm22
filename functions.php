<?php 

    add_theme_support('menus');
    add_theme_support('post-thumbnails');

    function load_stylesheet()
    {

        wp_register_style('bootstrap', get_template_directory_uri() . "/css/bootstrap.min.css", [], 0, 'all');
        wp_enqueue_style('bootstrap');

        wp_register_style('style', get_template_directory_uri() . '/style.css', [], 0, 'all');
        wp_enqueue_style('style');

        wp_register_style('stylecs', get_template_directory_uri() . '/style-cs.css', [], 0, 'all');
        wp_enqueue_style('stylecs');
      	
        wp_register_style('stylehp', get_template_directory_uri() . '/style-hp.css', [], 0, 'all');
        wp_enqueue_style('stylehp');
      
      	wp_register_style('stylefilm', get_template_directory_uri() . '/style-film.css', [], 0, 'all');
        wp_enqueue_style('stylefilm');
      
        wp_register_style('stylemerch', get_template_directory_uri() . '/style-merch.css', [], 0, 'all');
        wp_enqueue_style('stylemerch');

        wp_register_style('icon-1', 'https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css', [], 0, 'all');
        wp_enqueue_style('icon-1');

        wp_register_style('icon-2', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', [], 0, 'all');
        wp_enqueue_style('icon-2');

        wp_register_style('karla', 'https://fonts.googleapis.com/css?family=Karla:400,700&display=swap', [], 0, 'all');
        wp_enqueue_style('karla');

        wp_register_style('fade', 'https://unpkg.com/aos@2.3.1/dist/aos.css', [], 0, 'all');
        wp_enqueue_style('fade');

        wp_register_style('dtjq', 'https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css');
        wp_enqueue_style('dtjq');

        wp_register_style('btnjq', 'https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css');
        wp_enqueue_style('btnjq');

        wp_register_style('dataTables', 'https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css');
        wp_enqueue_style('dataTables');

      	wp_register_style('material-icon', 'https://fonts.googleapis.com/icon?family=Material+Icons');
        wp_enqueue_style('material-icon');

        wp_register_style('pagecss', 'https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.4/pagination.css');
        wp_enqueue_style('pagecss');
    }
    
    add_action('wp_enqueue_scripts', 'load_stylesheet');

    function load_javascript()
    {

        wp_register_script('aos', "https://unpkg.com/aos@2.3.1/dist/aos.js", '', 1, 1);
        wp_enqueue_script('aos');

        wp_register_script('customjs', get_template_directory_uri() . "/js/custom.js", '', 1, 1);
        wp_enqueue_script('customjs');

        wp_register_script('bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js", '', 1, 1);
        wp_enqueue_script('bootstrap');
        
      	wp_register_script('page', "https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.4/pagination.min.js", '', 1, 1);
        wp_enqueue_script('page');
    }

    add_action('wp_enqueue_scripts', 'load_javascript');

    /*function email_members($post_ID) {

        global $wpdb;
        $users = $wpdb->get_results("SELECT email FROM subscribe_email");
        $email_subject = "New post has been published";
        $message = "New post has been published: " . get_post($post_ID)->post_title .
                    " You can preview it here: " . get_permalink($post_ID);

        foreach($users as $user) {
            wp_mail($user->email, $email_subject, $message);
        }
        return $post_ID;

    }

    add_action('publish_post', 'email_members');*/

    function email_members($post_ID) {

        global $wpdb;
        $user = "irhan8803@gmail.com";
        $email_subject = "New post has been published";
        $message = "New post has been published: " . get_post($post_ID)->post_title .
                    " You can preview it here: " . get_permalink($post_ID);

        wp_mail($user, $email_subject, $message);
        return $post_ID;

    }

    add_action('publish_post', 'email_members');

    function launching() {
        require("weblaunch.php");
    }
    add_action('launch', 'launching');
    do_action('launch');

    function pageform() {
        include("form-page.php");
    }

    add_shortcode('form', 'pageform');

    function icon() {
        echo '<link rel="icon" href="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2018/07/cropped-Logo-NDF-Black-Transparent-S.png" type="image/icon type">';
        
    }

	function loading() {
		echo
          '<div id="bgload" class="bg-loader">',
              '<div class="loader">',
                  '<h4 style="margin-bottom: 30px">EST. 2011</h4>',
                  '<img id="img-load" src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/02/Logo-NDFdrytfghbkjn.jpg"',
      			  'style="width: 300px; height: 337px; object-fit: cover; object-position: 0 -40%;">',
                  '<h3 style="margin-top: 20px">UKM Sinematografi</h3>',
                  '<h1>NOL DERAJAT FILM</h1>',
                  '<h1>UNIVERSITAS BRAWIJAYA</h1>',
             '</div>',
          '</div>';
	}

    function export($attr) {
        require("tabel.php");
    }
	function sql() {
        require_once("sqlHandler.php");
    }
	function film() {
        require("film.php");
    }
	function born() {
        require("born.theme.php");
    }
    function merch() {
        require("merch.php");
    }
	function pengurus($attr) {
        if($attr){
            if(array_values($attr)[0] == "psdm"){
                require("psdm.pengurus.php");
            }else if(array_values($attr)[0] == "psdi"){
                require("psdi.pengurus.php");
            }else if(array_values($attr)[0] == "dea"){
                require("dea.pengurus.php");
            }else if(array_values($attr)[0] == "produksi"){
                require("produksi.pengurus.php");
            }else if(array_values($attr)[0] == "humi"){
                require("humi.pengurus.php");
            }else if(array_values($attr)[0] == "sekbend"){
                require("sekbend.pengurus.php");
            }
        }else{
            require("inti.pengurus.php");
        }
    }

    add_shortcode('export', 'export');
    add_shortcode('sql', 'sql');
    add_shortcode('film', 'film');
    add_shortcode('born7', 'born');
    add_shortcode('merch', 'merch');
    add_shortcode('pengurus', 'pengurus');

    add_filter('wp_mail_content_type', function( $content_type ) {
        return 'text/html';
    });

?>