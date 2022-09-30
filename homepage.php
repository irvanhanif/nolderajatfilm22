<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<?php icon(); ?>
    <title>Home</title>
<style>
<?php 
	global $wpdb;
	$C_Film = $wpdb->get_results("SELECT * FROM db_film WHERE display = true");
    for($i = 1; $i<= count($C_Film); $i++){
        if($i == count($C_Film)){ echo "#trailer-".$i;
        }else echo "#trailer-".$i.", "; } ?>
    {
        display: none;
    }
    <?php 
    for($i = 1; $i<= count($C_Film); $i++){
        if($i == count($C_Film)){ echo "#trailer-".$i.".active";
        }else echo "#trailer-".$i .".active, "; } ?>
    {
        display: flex;
        width: 100%;
    }
    .swiper-button-next{
        width: 40px;
        height: 40px;
        border-radius: 5px;
        border-bottom: #7F578A 5px solid;
        border-right: #7F578A 5px solid;
        transform: rotate(-45deg);
        transition: .5s;
    }
    .swiper-button-prev{
        width: 40px;
        height: 40px;
        border-radius: 5px;
        border-bottom: #7F578A 5px solid;
        border-left: #7F578A 5px solid;
        transform: rotate(45deg);
        transition: .5s;
    }
	@media only screen and (max-width: 500px){
        .swiper-button-next{
            width: 30px;
            height: 30px;
            border-bottom: #7F578A 5px solid;
            border-right: #7F578A 5px solid;
        }
        .swiper-button-prev{
            width: 30px;
            height: 30px;
            border-bottom: #7F578A 5px solid;
            border-left: #7F578A 5px solid;
        }
	}
</style>
</head>
<body>
<?php loading() ?>
	<header>
        <nav id="bar">
            <div onclick="location.href = ''" id="bar-logo">
                <img src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/02/logonol2.png" alt="logo-nolder">
                <h2 id="title-bar">Nol Derajat Film</h2>
            </div>
            <ul id="menu-home">
                <li id="menu-title"><p id="text-menu-title" onclick="location.href = '#'">Home</p></li>
                <li id="menu-title">
                    <div id="menu-drop">
                        <p id="text-menu-title" onclick="location.href = '#identitas'">Profile</p>
                        <i onclick="submenu(1)" id="menu-drop-1" class="fa-solid fa-angle-right"></i>
                    </div>
                    <ul id="profil-menu-1" class="profil-menu">
                        <li onclick="location.href = '#pengurus'"><p id="submenu-title">NARAWADRA</p></li>
                        <li onclick="location.href = 'http://nolderajatfilm.ub.ac.id/ketua-umum-dan-wakil-ketua-umum/'"><p id="submenu-title">Inti</p></li>
                        <li onclick="location.href = 'http://nolderajatfilm.ub.ac.id/sekretaris-bendahara-sekbend/'"><p id="submenu-title">SekBend</p></li>
                        <li onclick="location.href = 'http://nolderajatfilm.ub.ac.id/pengembangan-sumber-daya-internal-psdi/'"><p id="submenu-title">PSDI</p></li>
                        <li onclick="location.href = 'http://nolderajatfilm.ub.ac.id/pengembangan-sumber-daya-manusia-psdm/'"><p id="submenu-title">PSDM</p></li>
                        <li onclick="location.href = 'http://nolderajatfilm.ub.ac.id/distribusi-eksibisi-dan-apresiasi-dea/'"><p id="submenu-title">DEA</p></li>
                        <li onclick="location.href = 'http://nolderajatfilm.ub.ac.id/produksi-2/'"><p id="submenu-title">Produksi</p></li>
                        <li onclick="location.href = 'http://nolderajatfilm.ub.ac.id/hubungan-masyarakat-dan-media-informatika-humi/'"><p id="submenu-title">HUMI</p></li>
                    </ul>
                </li>
                <li id="menu-title"><p id="text-menu-title" onclick="location.href = '#berita'">News</p></li>
                <li id="menu-title">
					<div id="menu-drop">
						<p id="text-menu-title" onclick="location.href = 'http://nolderajatfilm.ub.ac.id#film'">Movie</p>
                        <i onclick="submenu(2)" id="menu-drop-2" class="fa-solid fa-angle-right"></i>
                    </div>
                    <ul id="profil-menu-2" class="profil-menu">
                        <li onclick="location.href = 'http://nolderajatfilm.ub.ac.id/film/'"><p id="submenu-title">Our Movies</p></li>
                    </ul>
				</li>
                <li id="menu-title"><p id="text-menu-title" onclick="location.href = '#konten'">Content</p></li>
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
                <li id="menu-title"><p id="text-menu-title" onclick="location.href = '#kontak'">Contact</p></li>
                <li id="menu-title"><p id="text-menu-title" onclick="location.href = 'born-7-0/'">BORN 7.0</p></li>
                <li id="btn-close" onclick="bar()"><i class="fa-solid fa-xmark"></i></li>
            </ul>
            <div id="short-nav" onclick="bar()">
                <i class="fas fa-bars"></i>
            </div>
        </nav>
    </header>
    <section>
        <div id="banner">
            <div id="bg"></div>
            <img id="banner-photo" src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/04/WhatsApp-Image-2022-04-05-at-16.09.15.jpeg" alt="">
            <img id="border-bg" src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/04/shape-cover-homepage.png" alt="border">
            <div id="title-banner">
                <h1>Nol Derajat Film</h1>
                <h4>Stop Dreaming <span>Start Action</span></h4>
            </div>
        </div>
        <div id="content">
            <div id="identitas">
                <div id="box-logo">
                    <div id="logo-border">
                        <img id="logo-ndf" src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2018/07/cropped-Logo-NDF-White-4.jpg" alt="logo-ndf">
                    </div>
                </div>
                <div id="description">
                    <p>
                        Nol Derajat Film adalah Unit Kegiatan Mahasiswa Universitas Brawijaya Malang yang bergerak pada bidang sinematografi. Nol Derajat Film merupakan wadah untuk bersama-sama berproses dan berkarya dalam berbagai aspek perfilman.<br><br>
                        Didirikan Pada Tanggal 19 September 2011 Oleh Beberapa Mahasiswa Yang Memiliki Minat Yang Sama Pada Film, Kini Nol Derajat Film Terus Berkembang Dan Bergerak Menghasilkan Berbagai Karya.
                    </p>
                </div>
            </div>
            <div id="vmp">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div id="visi">
                                <img id="letter" src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/04/visi.png" alt="letter">
                                <h3>Visi</h3>
                                <div id="content-vmp">
                                    <p>Menjadikan Nol Derajat Film sebagai ruang dimana setiap anggotanya dapat menuangkan kreativitas serta mengembangkan potensi minat dan bakat khususnya dalam bidang perfilman dengan lingkungan yang nyaman untuk setiap anggotanya.</p>
                                </div>
                            </div>
                        </div>
                    <div class="carousel-item">
                        <div id="misi">
                            <img id="letter" src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/04/visi.png" alt="letter">
                            <h3>Misi</h3>
                            <div id="content-vmp">
                                <ol>
                                    <li><p>Menciptakan program kerja yang unggul, inovatif, dan adaptif dengan melibatkan seluruh anggota Nol Derajat Film agar saling bersinergis.</p></li>
                                    <li><p>Mendorong setiap anggota Nol Derajat Film untuk dapat berekspresi dan berprestasi sesuai minat dan bakat sebagai upaya untuk meningkatkan kualitas sumber daya manusia khususnya dalam bidang perfilman.</p></li>
                                    <li><p>Menjalin relasi yang kuat baik internal maupun eksternal Nol Derajat Film guna menciptakan suasana kerja yang nyaman.</p></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div id="prestasi">
                            <img id="letter" src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/04/visi.png" alt="letter">
                            <h3>Prestasi</h3>
                            <div id="content-vmp">
                                <ol>
                                    <li><p>HAKUNA MATATA - FINALIS<br>FESTIVAL DOKUMENTER BUDI LUHUR (2017)</p></li>
                                    <li><p>MANUSIA-MANUSIA BIASA DALAM KANDANG PENGUASA - OFFICIAL SELECTION<br>MALANG FILM FESTIVAL (2018)</p></li>
                                    <li><p>YTH. - JUARA 3<br>VITAL VOICES FESTIVAL, PERUM PRODUKSI FILM NEGARA (2020)</p></li>
                                    <li><p>YTH. - NOMINEE BEST SHORT MOVIE<br>COMMUNICATION SHORT FILM COMPETITION (2021)</p></li>
                                    <li><p>YTH., DELUSIVE, KAWAN ASTRAL - OFFICIAL SELECTION<br>CUT FILM FESTIVAL (2021)</p></li>
                                    <li><p>WRONG LITTLE STEPS - OFFICIAL SELECTION<br>9TH PSYCHOLOGY FILM FESTIVAL (2021)</p></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <div style="margin-top: 7.5em;height: 2em; width: 2em; border: 1px solid; border-radius: 100%; background-color: blueviolet; text-align: center; display: flex; justify-content: center; align-items: center;">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      </div>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <div style="margin-top: 7.5em;height: 2em; width: 2em; border: 1px solid; border-radius: 100%; background-color: blueviolet; text-align: center; display: flex; justify-content: center; align-items: center;">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      </div>
                      <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div id="berita">
                <div id="box-decor-news">
                    <img src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/04/megaphone.png" alt="megaphone" id="megaphone">
                </div>
                <div id="title-news">
                    <h3>Whats New ?</h3>
                </div>
                <ul>
                    <?php 
                    $jumlah = 0;
                        if(have_posts()) :
                            while ($jumlah < 3) : the_post();
                            $jumlah++;
                    ?>
                    <li>
                        <div id="new">
                        <?php 
                            if (has_post_thumbnail()) {
                                echo the_post_thumbnail('on-post-thumbnail');
                            } else {
                            ?>
                            <img src="http://nolderajatfilm.ub.ac.id/wp-content/themes/NolDerajat/images/plan.jpg" width="290" height="290" alt="berita">
                            <?php } ?>
                            <button onclick="window.open('<?php the_permalink(); ?>', '_blank')">see more</button>
                        </div>
                    </li>
                    <?php 
                            endwhile;
                        endif;
                    ?>
                    <!-- <li>
                        <div id="new">
                            <img src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/04/logo.png" width="290" height="290" alt="berita">
                            <button onclick="window.open('https://www.instagram.com/brawijayafilmfestival/', '_blank')">see more</button>
                        </div>
                    </li> -->
                </ul>
            </div>
            <div id="film">
                <div id="trailer">
                    <?php  
                    global $wpdb;
                    $trailer = $wpdb->get_results("SELECT link_trailer FROM db_film WHERE display = true ORDER BY id_film");
                    for ($i=0; $i < count($trailer); $i++) { 
                    ?>
                    <div id="trailer-<?php echo $i+1 ?>">
                        <div id="trailer-movie">
                            <iframe src="<?php echo $trailer[$i]->link_trailer ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <span onclick="Trailer(<?php echo $i+1 ?>)">&times;</span>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div id="title-cinema">
                    <img src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/04/cinema.png" alt="cinema" id="cinema">
                    <h1>Cinema</h1>
                </div>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <?php 
                        global $wpdb;
                        $film = $wpdb->get_results("SELECT * FROM db_film WHERE display = true ORDER BY id_film");
                        for ($i=0; $i < count($film); $i++) { 
                        ?>
                        <div class="swiper-slide" id="movie">
                            <div id="boxmovie">
                                <div id="movie-left">
                                    <img src="<?php echo $film[$i]->link_foto ?>" alt="poster">
                                </div>
                                <div id="movie-right">
                                    <div id="title-movie">
                                        <div id="title-movie-content">
                                            <h3><?php echo $film[$i]->nama ?></h3>
                                            <span><?php echo $film[$i]->tahun ?> &bull; dir. <?php echo $film[$i]->director ?></span>
                                        </div>
                                    </div>
                                    <div id="sinopsisbox">
                                        <h5><?php echo $film[$i]->sinopsis ?></h5>
                                        <div id="btn-watch-box">
                                            <button id="btn-watch" onclick="Trailer(<?php echo $i+1 ?>)"><i class="fa-solid fa-circle-play"></i>Watch Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <div id="page-film">
                    <a href="http://nolderajatfilm.ub.ac.id/film/"><button>view more</button></a>
                </div>
            </div>
            <div id="konten">
                <img id="mic" src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/04/table_microphone.png" alt="mic">
                <div id="clip">
                    <div id="btnslideclip">
                        <label for="WOTW" id="wotw" onclick="clearDotKonten(); indexKonten = 0;"></label>
                        <label for="WUS" id="wus" onclick="clearDotKonten(); indexKonten = 1;"></label>
                        <label for="Motion" id="motion" onclick="clearDotKonten(); indexKonten = 2;"></label>
                        <label for="Podcast" id="podcast" onclick="clearDotKonten(); indexKonten = 3;"></label>
                        <label for="Review" id="review" onclick="clearDotKonten(); indexKonten = 4;"></label>
                    </div>
                    <input type="radio" name="radioclip" id="WOTW">
                    <input type="radio" name="radioclip" id="WUS">
                    <input type="radio" name="radioclip" id="Motion">
                    <input type="radio" name="radioclip" id="Podcast">
                    <input type="radio" name="radioclip" id="Review">
                    <ul id="clipbox" class="click">
                        <li><img src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/04/Group-8.png" alt="WOTW"></li>
                        <li><img src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/04/Group-6.png" alt="WUS"></li>
                        <li><img src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/04/Group-10.png" alt="Motion"></li>
                        <li><img src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/04/Group-11.png" alt="Podcast"></li>
                        <li><img src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/04/Group-7.png" alt="Review Film"></li>
                    </ul>
                </div>
                <ul id="kontenbox">
                    <li>
                        <div style="background-color: #7F578A;" class="color-konten"></div>
                        <div id="konten-item">
                            <h2>WOTW</h2>
                            <h4>(Whats On This Week)</h4>
                        </div>
                        <div id="lanjut">
                            <button onclick="window.open('https://www.instagram.com/explore/tags/wotwndf2022/', '_blank')">view more</button>
                        </div>
                    </li>
                    <li>
                        <div style="background-color: #32524E;" class="color-konten"></div>
                        <div id="konten-item">
                            <h2>WUS</h2>
                            <h4>(Whats Up Sineas)</h4>
                        </div>
                        <div id="lanjut">
                            <button onclick="window.open('https://www.instagram.com/explore/tags/wusndf2022/', '_blank')">view more</button>
                        </div>
                    </li>
                    <li>
                        <div style="background-color: #F3BB2C;" class="color-konten"></div>
                        <div id="konten-item">
                            <h2>Motion</h2>
                            <h4>(Movie Education)</h4>
                        </div>
                        <div id="lanjut">
                            <button onclick="window.open('https://www.instagram.com/explore/tags/motionndf2022/', '_blank')">view more</button>
                        </div>
                    </li>
                    <li>
                        <div style="background-color: #7F578A;" class="color-konten"></div>
                        <div id="konten-item">
                            <h2>Podcast</h2>
                            <h4>(Tongkrongan Anak Film)</h4>
                        </div>
                        <div id="lanjut">
                            <button onclick="window.open('https://open.spotify.com/show/2UliwnxtqJbnVDTVCujoqK?si=vDxrLGgNTWuN6ScPAHr93w&nd=1', '_blank')">view more</button>
                        </div>
                    </li>
                    <li>
                        <div style="background-color: #32524E;" class="color-konten"></div>
                        <div id="konten-item">
                            <h2>Review Film</h2>
                        </div>
                        <div id="lanjut">
                            <button onclick="window.open('https://www.instagram.com/nolderajatfilm/', '_blank')">view more</button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div id="pengurus">
            <img id="rocket" src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/04/Rocket.png" alt="rocket" height="400px">
            <div id="title-pengurus">
                <h1>NARAWADRA</h1>
                <h4>Nol Derajat Film With a Dream and Action</h4>
            </div>
            <div id="bph">
                <div id="desc-bidang">
                    <ul>
                        <li>
                            <div class="desc-dec">
                                <h5>Pengurus Inti</h5>
                                <p>Bertanggung jawab dalam mengoordinasikan kegiatan dan pengembangan Nol Derajat Film dalam bentuk pelaksanaan program kerja bersama dengan seluruh jajaran pengurus.</p>
                            </div>
                        </li>
                        <li>
                            <div class="desc-dec">
                                <h5>Sekretaris Bendahara</h5>
                                <p>Berperan dalam mengurus segala sesuatu yang berkaitan dengan kesekretariatan (termasuk administratif) dan perbendaharaan.</p>
                            </div>
                        </li>
                        <li>
                            <div class="desc-dec">
                                <h5>Pengembangan Sumber Daya Internal</h5>
                                <p>Berperan dalam pengawasan dan pengembangan kerekatan hubungan internal Nol Derajat Film.</p>
                            </div>
                        </li>
                        <li>
                            <div class="desc-dec">
                                <h5>Pengembangan Sumber Daya Mahasiswa</h5>
                                <p>Berperan dalam pemeliharaan dan pengembangan minat dan bakat sumber daya manusia yang ada serta mengurus perekrutan anggota baru.</p>
                            </div>
                        </li>
                        <li>
                            <div class="desc-dec">
                                <h5>Distribusi Eksbihisi Apresiasi</h5>
                                <p>Merancang dan melaksanakan segala kegiatan yang berhubungan dengan distribusi, ekshibisi, dan apresiasi film-film hasil karya Nol Derajat Film.</p>
                            </div>
                        </li>
                        <li>
                            <div class="desc-dec">
                                <h5>Produksi</h5>
                                <p>Merancang dan melaksanakan segala kegiatan yang berkaitan dengan produksi film karya Nol Derajat Film.</p>
                            </div>
                        </li>
                        <li>
                            <div class="desc-dec">
                                <h5>Hubungan Masyarakat dan Informatika</h5>
                                <p>Berperan sebagai media penghubung dan informasi antara pihak internal dan eksternal terkait apapun yang berhubungan dengan Nol Derajat Film dan edukasi sinematografi serta pengembangan website.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="foto-BPH">
                    <ul class="inti">
                        <li>
                            <div id="item-foto-bph">
                                <img class="" src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/04/KETUM-WA.png" alt="Inti">
                                <div id="deskripsi-bid">
                                    <h5>Pengurus Inti</h5>
                                    <p>Bertanggung jawab dalam mengoordinasikan kegiatan dan pengembangan Nol Derajat Film dalam bentuk pelaksanaan program kerja bersama dengan seluruh jajaran pengurus.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="item-foto-bph">
                                <img class="inactive" src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/04/SEKBEND.png" alt="SekBend">
                                <div id="deskripsi-bid">
                                    <h5>Sekretaris Bendahara</h5>
                                    <p>Berperan dalam mengurus segala sesuatu yang berkaitan dengan kesekretariatan (termasuk administratif) dan perbendaharaan.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="item-foto-bph">
                                <img class="inactive" src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/04/PSDI.png" alt="PSDI">
                                <div id="deskripsi-bid">
                                    <h5>Pengembangan Sumber Daya Internal</h5>
                                    <p>Berperan dalam pengawasan dan pengembangan kerekatan hubungan internal Nol Derajat Film.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="item-foto-bph">
                                <img class="inactive" src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/04/PSDM.png" alt="PSDM">
                                <div id="deskripsi-bid">
                                    <h5>Pengembangan Sumber Daya Mahasiswa</h5>
                                    <p>Berperan dalam pemeliharaan dan pengembangan minat dan bakat sumber daya manusia yang ada serta mengurus perekrutan anggota baru.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="item-foto-bph">
                                <img class="inactive" src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/04/DEA.png" alt="DEA">
                                <div id="deskripsi-bid">
                                    <h5>Distribusi Eksbihisi Apresiasi</h5>
                                    <p>Merancang dan melaksanakan segala kegiatan yang berhubungan dengan distribusi, ekshibisi, dan apresiasi film-film hasil karya Nol Derajat Film.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="item-foto-bph">
                                <img class="inactive" src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/04/PRODUKSI.png" alt="Produksi">
                                <div id="deskripsi-bid">
                                    <h5>Produksi</h5>
                                    <p>Merancang dan melaksanakan segala kegiatan yang berkaitan dengan produksi film karya Nol Derajat Film.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="item-foto-bph">
                                <img class="inactive" src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/04/HUMI.png" alt="HUMI">
                                <div id="deskripsi-bid">
                                    <h5>Hubungan Masyarakat dan Informatika</h5>
                                <p>Berperan sebagai media penghubung dan informasi antara pihak internal dan eksternal terkait apapun yang berhubungan dengan Nol Derajat Film dan edukasi sinematografi serta pengembangan website.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="desc-bidang-short">
                    <ul>
                        <li>
                            <div class="desc-dec">
                                <h5>Pengurus Inti</h5>
                                <p>Bertanggung jawab dalam mengoordinasikan kegiatan dan pengembangan Nol Derajat Film dalam bentuk pelaksanaan program kerja bersama dengan seluruh jajaran pengurus.</p>
                            </div>
                        </li>
                        <li>
                            <div class="desc-dec">
                                <h5>Sekretaris Bendahara</h5>
                                <p>Berperan dalam mengurus segala sesuatu yang berkaitan dengan kesekretariatan (termasuk administratif) dan perbendaharaan.</p>
                            </div>
                        </li>
                        <li>
                            <div class="desc-dec">
                                <h5>Pengembangan Sumber Daya Internal</h5>
                                <p>Berperan dalam pengawasan dan pengembangan kerekatan hubungan internal Nol Derajat Film.</p>
                            </div>
                        </li>
                        <li>
                            <div class="desc-dec">
                                <h5>Pengembangan Sumber Daya Mahasiswa</h5>
                                <p>Berperan dalam pemeliharaan dan pengembangan minat dan bakat sumber daya manusia yang ada serta mengurus perekrutan anggota baru.</p>
                            </div>
                        </li>
                        <li>
                            <div class="desc-dec">
                                <h5>Distribusi Eksbihisi Apresiasi</h5>
                                <p>Merancang dan melaksanakan segala kegiatan yang berhubungan dengan distribusi, ekshibisi, dan apresiasi film-film hasil karya Nol Derajat Film.</p>
                            </div>
                        </li>
                        <li>
                            <div class="desc-dec">
                                <h5>Produksi</h5>
                                <p>Merancang dan melaksanakan segala kegiatan yang berkaitan dengan produksi film karya Nol Derajat Film.</p>
                            </div>
                        </li>
                        <li>
                            <div class="desc-dec">
                                <h5>Hubungan Masyarakat dan Informatika</h5>
                                <p>Berperan sebagai media penghubung dan informasi antara pihak internal dan eksternal terkait apapun yang berhubungan dengan Nol Derajat Film dan edukasi sinematografi serta pengembangan website.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="list-bidang">
                    <ul>
                        <li><h4 onclick="inti()">Inti</h4></li>
                        <li><h4 onclick="sekbend()">SekBend</h4></li>
                        <li><h4 onclick="psdi()">PSDI</h4></li>
                        <li><h4 onclick="psdm()">PSDM</h4></li>
                        <li><h4 onclick="dea()">DEA</h4></li>
                        <li><h4 onclick="produksi()">Produksi</h4></li>
                        <li><h4 onclick="humi()">HUMI</h4></li>
                        <div id="dot-bidang" class="inti">&bull;</div>
                    </ul>
                </div>
            </div>
        </div>
        <div id="kontak">
            <img src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/04/gameboy.png" alt="game" id="game" width="500px">
            <h1 id="title-contact">Contact Us!</h1>
            <?php
                $send;
                if(isset($_POST["send"])){
                  wp_mail("irhan8803@gmail.com", $_POST["subject"], $_POST["message"]);
                    if(wp_mail("ukmnolderajatfilm@gmail.com", $_POST["subject"], $_POST["message"], "From: " . $_POST["nama"] . " <" . $_POST["email"] . ">\r\nReply-To:" . $_POST["email"])){
                        unset($_POST["subject"]);
                        unset($_POST["message"]);
                        unset($_POST["nama"]);
                        unset($_POST["email"]);
                        unset($_POST["send"]);
                        $send = true;
                    }else{
                        $send = false;
                    }
                }
            ?>
            <form action="" method="post">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="Nama" name="nama" <?php if(isset($_POST["nama"])){$nama = $_POST["nama"]; echo "value='$nama'";} ?> required>
                    <label for="floatingName">Name</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingEmail" placeholder="Email" name="email" <?php if(isset($_POST["email"])){$email = $_POST["email"]; echo "value='$email'";} ?> required>
                    <label for="floatingEmail">Email</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingSubject" placeholder="Subject" name="subject" <?php if(isset($_POST["subject"])){$subject = $_POST["subject"]; echo "value='$subject'";} ?> required>
                    <label for="floatingSubject">Subject</label>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a message here" id="floatingMessage" style="height: 150px" name="message" <?php if(isset($_POST["message"])){$message = $_POST["message"]; echo "value='$message'";} ?> required></textarea>
                    <label for="floatingMessage">Leave a message here</label>
                </div>
                <span><?php if(isset($send)) {if($send == true) echo "Success to submit form"; else echo "Error when submit form"; unset($send);} ?></span>
                <div id="contact-submit" class="col-auto">
                    <button type="submit" id="btn-submit" class="btn btn-primary" name="send">Submit</button>
                </div>
            </form>
            <div id="smalldec"></div>
            <div id="bigdec"></div>
        </div>
    </section>
    <footer>
        <div id="foot">
            <img src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/04/keyboard1.png" alt="keyboard" id="keyboard" height="300px">
            <div id="lfoot">
                <div id="alamat">
                    <i onclick="window.open('https://goo.gl/maps/t8RLoH8HAQZnuGDQ6', '_blank')" class="fa-solid fa-location-dot"></i>
                    <p>Gedung Rusunawa B Lt. 1 Universitas Brawijaya</p>
                </div>
                <div id="cp">
                    <ul>
                        <li>
                            <i onclick="window.open('https://wa.me/6287839549438', '_blank')" class="fa-brands fa-whatsapp"></i>
                            <p>+62 878-3954-9438 (Hanin)</p>
                        </li><br>
                        <li>
                            <i  onclick="window.open('https://wa.me/6285336349464', '_blank')" class="fa-brands fa-whatsapp"></i>
                            <p>+62 853-3634-9464 (Fio)</p>
                        </li><br>
                        <li>
                            <i onclick="window.open('https://mail.google.com/mail/u/0/?fs=1&tf=cm&to=ukmnolderajatfilm@gmail.com', '_blank')" class="fa-solid fa-envelope"></i>
                            <p>ukmnolderajatfilm@gmail.com</p>
                        </li>
                    </ul>
                </div>
                <div id="subscribe">
                    <p>Subscribe to our newsletter!</p>
                    <form id="form-subs" action="" method="post">
                        <div id="email">
                            <input id="inemail" type="email" name="email" placeholder="Your Email" required>
                            <input id="insubmit" type="submit" name="submit" value="Subscribe">
                        </div>
                        <div id="centang">
                            <input class="form-check-input shadow-none" id="check" type="checkbox" required> 
                            <p onclick = "document.getElementById('check').checked = true" >By submitting my personal information, i understand and agree that Nol Derajat Film may collect, process, and retain my data</p>
                        </div>
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
                <div id="sosmed">
                    <ul>
                        <li onclick="window.open('https://www.youtube.com/c/NolDerajatFilm', '_blank')" id="youtube">
                            <i class="fa-brands fa-youtube"></i>
                        </li>
                        <li onclick="window.open('https://www.instagram.com/nolderajatfilm/', '_blank')" id="instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </li>
                        <li onclick="window.open('https://twitter.com/nol_derajat', '_blank')" id="twitter">
                            <i class="fa-brands fa-twitter"></i>
                        </li>
                        <li onclick="window.open('https://vt.tiktok.com/ZSepCRFpX/', '_blank')" id="tiktok">
                            <i class="fa-brands fa-tiktok"></i>
                        </li>
                        <li onclick="window.open('https://liff.line.me/1645278921-kWRPP32q?accountId=lnp4721a&openerPlatform=native&openerKey=home%3Arecommend', '_blank')" id="line">
                            <i class="fa-brands fa-line"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="rfoot">
                <div id="maps">
                    <div id="content-maps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d987.862755273429!2d112.61604744658526!3d-7.952255508708844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7882777ecb55eb%3A0xac4676caf0049153!2sRusunawa%20UB!5e0!3m2!1sid!2sid!4v1649001527739!5m2!1sid!2sid" width="450" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div id="copyright">
            <p>Copyright &copy; 2022 IT-NolDerajatFilm</p>
        </div>
    </footer> 

    <div id="ngalorngidul">
        <div id="hideAd">
            <div id="hideAd-content">
                <h2 onclick="document.getElementById('blok-yt').classList.toggle('hide');
                document.getElementById('hideAd-content').classList.toggle('hide')">></h2>
            </div>
        </div>
        <div id="blok-yt">
            <iframe src="https://www.youtube-nocookie.com/embed/EyZsGDr0kAI?controls=0&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    <script type="text/javascript" src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=ABQIAAAAa24xicak8_ghHX58i7La7hRFh9iM79SNC94rOejOtdMRvQmJiBS6Uv5F_1BNSh9ZuSzFXyekHISgew">    </script>
    <script type="text/javascript" src="/js/maps.js"></script>

    <script>
        setInterval(function(){
            document.getElementsByClassName("swiper-button-next")[0].click();
        }, 7500);
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 1,
          spaceBetween: 30,
          loop: true,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
		/*
        $(window).on('load', function(){
            setTimeout(removeLoader, 0); 
            function removeLoader(){
                $( "#bgload" ).fadeOut();
            }
        });*/
		load();
		function load(){
            setTimeout(removeLoader, 500); 
            function removeLoader(){
                $( "#bgload" ).fadeOut();
            }
        }
      </script>

    <script>
        window.onscroll = function(){header();}; 
        header();       
        const konten = ["WOTW", "WUS", "Motion", "Podcast", "Review"];
        const labelKonten = ["wotw", "wus", "motion", "podcast", "review"];
        let indexKonten = 0;
        document.getElementById(konten[0]).checked = true;
        colorLabel(indexKonten);
        indexKonten++;
        setInterval(function(){
            if(indexKonten > 0) document.getElementById(labelKonten[indexKonten - 1]).classList.remove("cekKonten");
            if(indexKonten > 3) indexKonten = 0;
            colorLabel(indexKonten);
            document.getElementById(konten[indexKonten]).checked = true;
            indexKonten++;
        }, 5000);

        function colorLabel(idKonten){
            document.getElementById(labelKonten[idKonten]).classList.toggle("cekKonten");
        }

        function inti(){
            document.getElementById("desc-bidang").getElementsByTagName("ul")[0].className = "inti";
            document.getElementById("dot-bidang").className = "inti";
            document.getElementById("foto-BPH").getElementsByTagName("ul")[0].className = "inti";
            for(let i = 0; i < document.getElementById("foto-BPH").getElementsByTagName("ul")[0].getElementsByTagName("li").length; i++){
                document.getElementById("foto-BPH").getElementsByTagName("ul")[0].getElementsByTagName("li")[i].getElementsByTagName("img")[0].className = "inactive";
            }
            document.getElementById("foto-BPH").getElementsByTagName("ul")[0].getElementsByTagName("li")[0].getElementsByTagName("img")[0].className = "";
        }
        function sekbend(){
            document.getElementById("desc-bidang").getElementsByTagName("ul")[0].className = "sekbend";
            document.getElementById("dot-bidang").className = "sekbend";
            document.getElementById("foto-BPH").getElementsByTagName("ul")[0].className = "sekbend";
            for(let i = 0; i < document.getElementById("foto-BPH").getElementsByTagName("ul")[0].getElementsByTagName("li").length; i++){
                document.getElementById("foto-BPH").getElementsByTagName("ul")[0].getElementsByTagName("li")[i].getElementsByTagName("img")[0].className = "inactive";
            }
            document.getElementById("foto-BPH").getElementsByTagName("ul")[0].getElementsByTagName("li")[1].getElementsByTagName("img")[0].className = "";
        }
        function psdi(){
            document.getElementById("desc-bidang").getElementsByTagName("ul")[0].className = "PSDI";
            document.getElementById("dot-bidang").className = "PSDI";
            document.getElementById("foto-BPH").getElementsByTagName("ul")[0].className = "PSDI";
            for(let i = 0; i < document.getElementById("foto-BPH").getElementsByTagName("ul")[0].getElementsByTagName("li").length; i++){
                document.getElementById("foto-BPH").getElementsByTagName("ul")[0].getElementsByTagName("li")[i].getElementsByTagName("img")[0].className = "inactive";
            }
            document.getElementById("foto-BPH").getElementsByTagName("ul")[0].getElementsByTagName("li")[2].getElementsByTagName("img")[0].className = "";
        }
        function psdm(){
            document.getElementById("desc-bidang").getElementsByTagName("ul")[0].className = "PSDM";
            document.getElementById("dot-bidang").className = "PSDM";
            document.getElementById("foto-BPH").getElementsByTagName("ul")[0].className = "PSDM";
            for(let i = 0; i < document.getElementById("foto-BPH").getElementsByTagName("ul")[0].getElementsByTagName("li").length; i++){
                document.getElementById("foto-BPH").getElementsByTagName("ul")[0].getElementsByTagName("li")[i].getElementsByTagName("img")[0].className = "inactive";
            }
            document.getElementById("foto-BPH").getElementsByTagName("ul")[0].getElementsByTagName("li")[3].getElementsByTagName("img")[0].className = "";
        }
        function dea(){
            document.getElementById("desc-bidang").getElementsByTagName("ul")[0].className = "DEA";
            document.getElementById("dot-bidang").className = "DEA";
            document.getElementById("foto-BPH").getElementsByTagName("ul")[0].className = "DEA";
            for(let i = 0; i < document.getElementById("foto-BPH").getElementsByTagName("ul")[0].getElementsByTagName("li").length; i++){
                document.getElementById("foto-BPH").getElementsByTagName("ul")[0].getElementsByTagName("li")[i].getElementsByTagName("img")[0].className = "inactive";
            }
            document.getElementById("foto-BPH").getElementsByTagName("ul")[0].getElementsByTagName("li")[4].getElementsByTagName("img")[0].className = "";
        }
        function produksi(){
            document.getElementById("desc-bidang").getElementsByTagName("ul")[0].className = "produksi";
            document.getElementById("dot-bidang").className = "produksi";
            document.getElementById("foto-BPH").getElementsByTagName("ul")[0].className = "produksi";
            for(let i = 0; i < document.getElementById("foto-BPH").getElementsByTagName("ul")[0].getElementsByTagName("li").length; i++){
                document.getElementById("foto-BPH").getElementsByTagName("ul")[0].getElementsByTagName("li")[i].getElementsByTagName("img")[0].className = "inactive";
            }
            document.getElementById("foto-BPH").getElementsByTagName("ul")[0].getElementsByTagName("li")[5].getElementsByTagName("img")[0].className = "";
        }
        function humi(){
            document.getElementById("desc-bidang").getElementsByTagName("ul")[0].className = "HUMI";
            document.getElementById("dot-bidang").className = "HUMI";
            document.getElementById("foto-BPH").getElementsByTagName("ul")[0].className = "HUMI";
            for(let i = 0; i < document.getElementById("foto-BPH").getElementsByTagName("ul")[0].getElementsByTagName("li").length; i++){
                document.getElementById("foto-BPH").getElementsByTagName("ul")[0].getElementsByTagName("li")[i].getElementsByTagName("img")[0].className = "inactive";
            }
            document.getElementById("foto-BPH").getElementsByTagName("ul")[0].getElementsByTagName("li")[6].getElementsByTagName("img")[0].className = "";
        }
        function clearDotKonten(){
            for(let i = 0; i < labelKonten.length; i++){
                if(i != indexKonten) document.getElementById(labelKonten[i]).classList.remove("cekKonten");
            }
        }
        function header(){
            const heightBody = 300;
            if (document.body.scrollTop > heightBody || document.documentElement.scrollTop > heightBody) {
                document.getElementById("bar").className = "timbul";
            } else {
                document.getElementById("bar").className = "";
            }
        }
        function bar(){
            document.getElementById("menu-home").classList.toggle("muncul");
        }
        function Trailer(idTrailer){
            document.getElementsByTagName("body")[0].classList.toggle('noscroll');
            document.getElementById('trailer').classList.toggle('active');
            document.getElementById('trailer-'+idTrailer).classList.toggle('active');
        }
        function submenu(idLi){
            document.getElementById(`menu-drop-${idLi}`).classList.toggle("show");
        document.getElementById(`profil-menu-${idLi}`).classList.toggle("show");
        }
    </script>   
</body>
</html>