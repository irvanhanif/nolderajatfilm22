<?php include "asset.php"; ?>
<?php $time = $endtime;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <?php icon(); ?>
    <title>Coming Soon - Nol Derajat Film</title>
</head>
<body>
<?php loading() ?>
<div id="body-2" class="min-vh-100 d-flex flex-column">
    <main class="my-auto">
        <div class="container">
            <div class="row">
                <div class="col-md-6 section-left">
                    <h1 class="page-title">We are launching soon</h1>
                    <div id="timer" class="bd-cd-timer">
                        <div class="time-card">
                            <span class="time-count" id="days">0</span>
                            <span class="time-label">DAYS</span>
                        </div>
                        <div class="time-card">
                            <span class="time-count" id="hours">0</span>
                            <span class="time-label">HOURS</span>
                        </div>
                        <div class="time-card">
                            <span class="time-count" id="minutes">0</span>
                            <span class="time-label">MINUTES</span>
                        </div>
                        <div class="time-card">
                            <span class="time-count" id="seconds">0</span>
                            <span class="time-label">SECONDS</span>
                        </div>
                    </div>
                    <form class="form-subscribe" action="" method="POST">
                        <div class="form-group">
                            <label for="email" class="sr-only">email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="email address" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-subscribe">Notify Me</button>
                    </form>
                    <?php 
                        if(isset($_POST["submit"])){
                            $users = $wpdb->get_results("SELECT * FROM subscribe_email WHERE email = '" . $_POST["email"] . "'");
                            if($users) echo "<p id='respon'>Email Already Noted!</p>";
                            else{
                              $sql = $wpdb->prepare('INSERT INTO subscribe_email (email) VALUES ("'.$_POST["email"].'")');
                              $result = $wpdb->query($sql);
                              if($result) echo "<p id='respon'>Success submitted email..</p>";
                              else echo "<p id='respon'>Something Wrong!! Try Again!</p>";
                            }
                        }
                    ?>
                </div>
                <div class="col-md-6 d-none d-md-flex align-items-center">
                    <img src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/02/—Pngtree—hand-pink-pen-3d-abstract_6958096.png" width="450px" alt="coming soon" style="transform: translateX(30px);" class="img-fluid">
                </div>
            </div>
        </div>
    </main>
    <footer class="text-center">
        <div id="conner">
            <img src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/02/Vector-Smart-Object.png" id="cornerimg">
        </div>
        <nav class="footer-social-links">
            <a href="https://liff.line.me/1645278921-kWRPP32q?accountId=lnp4721a&openerPlatform=native&openerKey=home%3Arecommend" class="social-link-fa"><i class="fab fa-line"></i></a>
            <a href="https://www.instagram.com/nolderajatfilm/" target="_blank" class="social-link"><i class="mdi mdi-instagram"></i></a>
            <a href="https://twitter.com/nol_derajat" target="_blank" class="social-link"><i class="mdi mdi-twitter"></i></a>
            <a href="https://www.youtube.com/c/NolDerajatFilm" target="_blank" class="social-link"><i class="mdi mdi-youtube"></i></a>
            <a href="https://vt.tiktok.com/ZSepCRFpX/" target="_blank" class="social-link-fa"><i class="fab fa-tiktok"></i></a>
        </nav>
        <p class="footer-text mb-0">
            Copyright &copy; 2022  IT-NolDerajatFilm
        </p>
    </footer>
</div>

<script>
    
    var endDate = new Date("<?php echo $time ?>");

    var x = setInterval(function() {

    var now =  new Date().getTime();

    var timeRemaining = endDate - now;

    var daysRemaining = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
    var hoursRemaining = Math.floor((timeRemaining % (1000 * 60 * 60 * 24))/(1000 * 60 * 60));
    var minutesRemaining = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
    var secondsRemaining = Math.floor((timeRemaining % (1000 * 60)) / (1000));

    document.getElementById("days").innerHTML = daysRemaining;
    document.getElementById("hours").innerHTML = hoursRemaining;
    document.getElementById("minutes").innerHTML = minutesRemaining;
    document.getElementById("seconds").innerHTML = secondsRemaining; 

    if (timeRemaining < 0) { 
        clearInterval(x);
        document.getElementById("days").innerHTML ='0'; 
        document.getElementById("hours").innerHTML ='0'; 
        document.getElementById("minutes").innerHTML ='0' ; 
        document.getElementById("seconds").innerHTML = '0';
        location.reload();
    }

    },1000);
</script>
</body>
</html>
<?php wp_footer(); ?>