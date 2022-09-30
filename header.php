<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
    <title><?php the_title(); ?></title>
    <?php icon(); ?>
</head>
<body>
<?php loading() ?>
	<header>
        <nav id="bar">
            <div onclick="location.href = 'http://nolderajatfilm.ub.ac.id/'" id="bar-logo">
                <img src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/02/logonol2.png" alt="logo-nolder">
                <h2 id="title-bar">Nol Derajat Film</h2>
            </div>
            <ul id="menu-home">
                <li id="menu-title"><p id="text-menu-title" onclick="location.href = 'http://nolderajatfilm.ub.ac.id/#'">Home</p></li>
                <li id="menu-title">
                    <div id="menu-drop">
                        <p id="text-menu-title" onclick="location.href = 'http://nolderajatfilm.ub.ac.id/#identitas'">Profile</p>
                        <i onclick="submenu(1)" id="menu-drop-1" class="fa-solid fa-angle-right"></i>
                    </div>
                    <ul id="profil-menu-1" class="profil-menu">
                        <li onclick="location.href = 'http://nolderajatfilm.ub.ac.id/#pengurus'"><p id="submenu-title">NARAWADRA</p></li>
                        <li onclick="location.href = 'http://nolderajatfilm.ub.ac.id/ketua-umum-dan-wakil-ketua-umum/'"><p id="submenu-title">Inti</p></li>
                        <li onclick="location.href = 'http://nolderajatfilm.ub.ac.id/sekretaris-bendahara-sekbend/'"><p id="submenu-title">SekBend</p></li>
                        <li onclick="location.href = 'http://nolderajatfilm.ub.ac.id/pengembangan-sumber-daya-internal-psdi/'"><p id="submenu-title">PSDI</p></li>
                        <li onclick="location.href = 'http://nolderajatfilm.ub.ac.id/pengembangan-sumber-daya-manusia-psdm/'"><p id="submenu-title">PSDM</p></li>
                        <li onclick="location.href = 'http://nolderajatfilm.ub.ac.id/distribusi-eksibisi-dan-apresiasi-dea/'"><p id="submenu-title">DEA</p></li>
                        <li onclick="location.href = 'http://nolderajatfilm.ub.ac.id/produksi-2/'"><p id="submenu-title">Produksi</p></li>
                        <li onclick="location.href = 'http://nolderajatfilm.ub.ac.id/hubungan-masyarakat-dan-media-informatika-humi/'"><p id="submenu-title">HUMI</p></li>
                    </ul>
                </li>
                <li id="menu-title"><p id="text-menu-title" onclick="location.href = 'http://nolderajatfilm.ub.ac.id#berita'">News</p></li>
                <li id="menu-title">
					<div id="menu-drop">
						<p id="text-menu-title" onclick="location.href = 'http://nolderajatfilm.ub.ac.id#film'">Movie</p>
                        <i onclick="submenu(2)" id="menu-drop-2" class="fa-solid fa-angle-right"></i>
                    </div>
                    <ul id="profil-menu-2" class="profil-menu">
                        <li onclick="location.href = 'http://nolderajatfilm.ub.ac.id/film/'"><p id="submenu-title">Our Movies</p></li>
                    </ul>
				</li>
                <li id="menu-title"><p id="text-menu-title" onclick="location.href = 'http://nolderajatfilm.ub.ac.id#konten'">Content</p></li>
                <li id="menu-title">
					<div id="menu-drop">
						<p id="text-menu-title">Our Store</p>
                        <i onclick="submenu(3)" id="menu-drop-3" class="fa-solid fa-angle-right"></i>
                    </div>
                    <ul id="profil-menu-3" class="profil-menu">
                        <li onclick="location.href = 'http://nolderajatfilm.ub.ac.id/merchandise/'"><p id="submenu-title">Merchandise</p></li>
                        <li onclick="location.href = 'http://nolderajatfilm.ub.ac.id/sop-penyewaan/'"><p id="submenu-title">Penyewaan Barang</p></li>                    
					</ul>
				</li>
                <li id="menu-title"><p id="text-menu-title" onclick="location.href = 'http://nolderajatfilm.ub.ac.id#kontak'">Contact</p></li>
                <li id="menu-title"><p id="text-menu-title" onclick="location.href = 'http://nolderajatfilm.ub.ac.id/born-7-0/'">Born 7.0</p></li>
                <li id="btn-close" onclick="bar()"><i class="fa-solid fa-xmark"></i></li>
            </ul>
            <div id="short-nav" onclick="bar()">
                <i class="fas fa-bars"></i>
            </div>
        </nav>
    </header>