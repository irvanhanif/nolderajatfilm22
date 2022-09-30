<html>
<head>
    <style>
        #content-post{
            padding: 0;
            padding-top: 90px;
        }
        #title-post{
            display: none;
        }
    </style>
</head>
<body>
    <ul class="film">
    <?php 
        global $wpdb;
        $film = $wpdb->get_results("SELECT * FROM db_film");
        for ($i=0; $i < count($film); $i++) { 
    ?>
        <li id="filmbox">
            <a href="">
            <div id="filmbox-img">
                <img src="<?php echo $film[$i]->link_foto ?>" alt="imgfilm">
            </div>
                <div id="filmbox-desc">
                    <div id="descfilm">
                        <div id="descfilm-title"><?php echo $film[$i]->nama ?></div>
                        <div id="descfilm-dir">dir. <?php echo $film[$i]->director ?></div>
                    </div>
                </div>
            	<div id="filmbox-desc-2">
                  <div id="descfilm-2">
                      <div id="descfilm-title-2"><?php echo $film[$i]->nama ?></div>
                      <div id="descfilm-dir-2">dir. <?php echo $film[$i]->director ?></div>
                  </div>
              </div>
            </a>
        </li>
    <?php } ?>
    </ul>
</body>
</html>