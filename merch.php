<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div id="merch-top">
        <div id="merch-top-text">
            <div class="merch-top-text-content">                
				<h1>shop <span class="bl"></span>our new <span class="bl"></span>merch</h1>
                <a href="http://bit.ly/NolderStoreMerchBatch1"><button class="merch-top-banner-btn">shop now</button></a>
            </div>
        </div>
        <div id="merch-top-image">
            <div id="decor-merch-top">
                <img src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/09/Star-1.png" alt="decor">
            </div>
            <div id="image-banner-merch-bg">
                <div id="image-banner-merch">
                    <img src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/09/Group-320.png" alt="merch">
                </div>
            </div>
        </div>
    </div>
    <div id="merch-gap">
        <?php
        for($i = 0; $i < 20; $i++){
            ?> 
            <div id="merch-gap-element">
                <img src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/09/Star-2.png" alt="star-decor">
                <p>nolder.store</p>
            </div>
            <?php
        }
        ?>
    </div>
    <div id="batch1">
        <div class="head">
            <h2>batch 1</h2>
        </div>
        <div id="product">
            <ul>
                <li>
                    <div class="product-best">
                        <div id="box-best">
                            <h3>paket <br>simple</h3>
                            <div id="box-best-img">
                                <div id="bg-img-product"></div>
                                <img src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/09/Group-323.png" alt="best-deal">
                            </div>
                            <p class="price">Rp 135.000</p>
                            <a class="block-content" href=""><button style="background-color: grey" class="btn-buy">closed</button></a>
                        </div>
                        <div id="decor-best">
                            <img src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/09/Group-322.png" alt="best-deal">
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product">
                        <div id="box">
                            <h3>tote bag</h3>
                            <div id="box-img">
                                <div id="bg-img-product"></div>
                                <img src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/09/IMG_7828.png" alt="product">
                            </div>
                            <p class="price">Rp 65.000</p>
                            <a class="block-content" href=""><button style="background-color: grey" class="btn-buy">closed</button></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product">
                        <div id="box">
                            <h3>t-shirt</h3>
                            <div id="box-img">
                                <div id="bg-img-product"></div>
                                <img src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/09/Group-324.png" alt="product">
                            </div>
                            <p class="price">Rp 85.000</p>
                            <a class="block-content" href=""><button style="background-color: grey" class="btn-buy">closed</button></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>