<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
        #berita{
          padding: 50px 0px;
        }
			#berita ul li{
                margin-top: 50px;
            }
        @media only screen and (max-width: 1175px) {
            #berita ul li #new{
                height: 250px;
                width: 200px;
            }
            #berita ul li #new button{
                font-size: 14px;
            }
          	#berita ul li #new button.exc {
                font-size: 12px;
            }
        }
        @media only screen and (max-width: 925px) {
            #berita ul li{
                width: 100%;
            }
            #berita ul{
                display: block;
            }
            #berita ul li #new{
                margin: auto;
                height: 300px;
                width: 250px;
            }
        }
		@media only screen and (max-width: 725px) {
            #berita #megaphone{
                display: none;
            }
        }
        #title-contact, #konten{
          margin: auto;
        }
        #title-contact{
          text-align: center;
          margin-top: 100px;
        }
        #konten{
          padding-top: 25px;
        }
        #konten #kontenbox li{
            background-color: rgba(240, 208, 128, .45);
        }
        #konten #kontenbox li #konten-item{
            position: relative;
        }
        #konten #kontenbox li #konten-item h2{
            position: absolute;
            top: 50%;
            transform: translateY(-62.5%);
        }

        .logo-born{
          display: block;
          margin: auto;
        }
        #title-news{
          margin: 25px 0px;
        }
        #title-news h3{
          font-family: 'Philosopher';
          font-weight: 700;
        }
		@media only screen and (max-width: 1050px){
            #konten #kontenbox li #konten-item h2{
                font-size: 25px;
            }
        }
		@media only screen and (max-width: 880px){
            #konten #kontenbox li #konten-item h2{
                font-size: 20px;
            }
            #konten #kontenbox li #lanjut button{
                right: 0%;
                font-size: 14px;
            }
        }
		@media only screen and (max-width: 560px){
            #konten #kontenbox li #konten-item h2{
                font-size: 16px;
            }
        }
	</style>
</head>
<body>
        <div id="berita">
            <div id="box-decor-news">
                <img src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/04/megaphone.png" alt="megaphone" id="megaphone">
            </div>
            <img src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/09/LogobaruBanget12.png" width="290" height="290" alt="logo-born-7" class="logo-born">
            <div id="title-news">
                <h3>BORN 7.0</h3>
            </div>
            <ul>
                <li>
                    <div id="new">
                        <img src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/09/IMG_4989.jpg" width="290" height="290" alt="berita">
                        <a style="text-decoration: none" href="https://bit.ly/FormPendaftaranBORN7"><button>Pendaftaran</button></a>
                    </div>
                </li>
                <li>
                    <div id="new">
                        <img src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/09/IMG_4991.jpg" width="290" height="290" alt="berita">
                        <a style="text-decoration: none" href="https://bit.ly/MekanismePendaftaranBorn7"><button class="exc">Alur dan Mekanisme</button></a>
                    </div>
                </li>
                <li>
                    <div id="new">
                        <img src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/09/IMG_4990.jpg" width="290" height="290" alt="berita">
                        <a style="text-decoration: none" href="#kolom-news"><button>Penugasan</button></a>
                    </div>
                </li>
            </ul>
        </div>
		<div id="kolom-news">
		<h1 id="title-contact">Penugasan</h1>
		<div id="konten">
            <ul id="kontenbox">
                <li>
                    <div style="background-color: #7F578A;" class="color-konten"></div>
                        <div id="konten-item">
                            <h2>Penugasan Open Recruitment</h2>
                        </div>
                    <div id="lanjut">
                        <a style="text-decoration: none" href="https://bit.ly/PENUGASANOPRECBORN7"><button>view more</button></a>
                    </div>
                </li>
                <li>
                    <div style="background-color: #32524E;" class="color-konten"></div>
                    <div id="konten-item">
                        <h2>Pengumpulan Penugasan Open Recruitment</h2>
                    </div>
                    <div id="lanjut">
                        <a style="text-decoration: none" href="https://bit.ly/PengumpulanPenugasanBORN7"><button>view more</button></a>
                    </div>
                </li>
                <li>
                    <div style="background-color: #F3BB2C;" class="color-konten"></div>
                    <div id="konten-item">
                        <h2>Coming Soon!</h2>
                    </div>
                    <div id="lanjut">
                        <a style="text-decoration: none" class="block-content" href=""><button>view more</button></a>
                    </div>
                </li>
               
                
            </ul>
        </div>
        </div>
<script>
	document.getElementById('title-post').style.display = 'none';
</script>
</body>
</html>