<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Restaurant</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Zen+Antique+Soft&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="home.css">
      </head>
    <body>
        <div class="container">

            <header class="header">
                <div class="tulisan">
                    <h2 class="heading">Restaurant</h2>
                    <p class="sub-heading">Makanan & Minuman</p>
                </div>
                <div class="features">
                    <h4 class="price">IDR 10k</h4>
                    <p class="item">Burger</p>
                </div>
                <div class="features-2">
                    <h4 class="price">IDR 5k</h4>
                    <p class="item">Coca-cola</p>
                </div>
            </header>

            <nav class="menu">
                <div class="menu-toggle">
                    <input type="checkbox">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="brand">
                    <h1>Restaurant</h1>
                </div>
                <ul class="menu-list">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </nav>

            <section class="services">
                <div class="service">
                    <div class="icon"><img class="icon" src="icon.png"></div>
                    <h3>Pemesanan Online</h3>
                    <p>
                        Kami menyediakan makanan dan minuman di Website ini. Anda
                        dapat memesan makanan dan minuman secara online tanpa keluar rumah
                    </p>
                </div>
                <div class="service">
                    <div class="icon"><img class="icon" src="icon.png"></div>
                    <h3>Keterangan</h3>
                    <p>
                        Website ini dibuat oleh kelompok kami dengan tujuan
                        untuk mempermudah orang - orang dalam memesan makanan
                        dan minuman secara online
                    </p>
                </div>
            </section>

            <section class="gallery">
                <h2>Gallery</h2>
                <img src="https://img.inews.co.id/media/822/files/inews_new/2021/05/18/mencicipi_makanan_khas_indonesia.jpg">
                <img src="https://cdns.klimg.com/merdeka.com/i/w/news/2020/06/13/1187155/540x270/7-makanan-terenak-di-dunia-yang-wajib-dicoba-salah-satunya-dari-indonesia.jpg">
                <img src="coca.jpg">
                <img src="makanan.jpg">
                <img src="https://media.suara.com/pictures/970x544/2020/09/26/41142-ilustrasi-rendang-jamur-pixabaysharonang.jpg">
                <img src="https://image-cdn.medkomtek.com/uLfpJuXmEaJ_IVyl9DUchyEB5F0=/640x480/smart/klikdokter-media-buckets/medias/2320285/original/068756000_1603085635-Kenali-Mitos-dan-Fakta-Seputar-Minuman-Bersoda-shutterstock_361921463.jpg">
                <img src="https://cdn.brilio.net/news/2019/10/10/172072/1109640-1000xauto-20-resep-minuman-segar.jpg">
            </section>
        </div>
        <script>
            const  menuToggle = document.querySelector('.menu-toggle');
            const nav = document.querySelector('nav ul');

            menuToggle.addEventListener('click',function(){
                nav.classList.toggle('slide');
            });
        </script>
    </body>
</html>