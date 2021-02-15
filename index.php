<?php
require 'admin/function.php';

if (isset($_POST["kirim"])) {

    if (pesan($_POST) > 0) {
        echo "
            <script>
              alert('Data berhasil disimpan');
            </script>
            ";
    } else {
        echo "
            <script>
              alert('Data gagal disimpan.');
            </script>
            ";
    }
}

$penghuni = count(addBranch("SELECT kamar FROM penghuni GROUP BY kamar"));
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KOS OSHIN</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
    <link href="css/agency.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


</head>

<body id="page-top">
    <input type="hidden" id="kamarterisi" name="kamarterisi" value="<?= $penghuni; ?>">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" style="color: tomato;" href="#page-top">KOS OSHIN</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" style="color: tomato;" href="#services"><strong>SERVICES</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" style="color: tomato;" href="#portfolio"><strong>GALERI</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" style="color: tomato;" href="#about"><strong>ABOUT</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" style="color: tomato;" href="#team"><strong>CONTACT</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" style="color: tomato;" href="login.php"><strong>LOGIN</strong></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <div class="intro-text">

                <div class="intro-lead-in">Welcome To Oshin Kost!</div>
            </div>
        </div>
    </header>

    <!-- Services -->
    <section class="page-section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x" style="color: tomato;"></i>
                        <i class="fas fa-wifi fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Free-WiFi</h4>
                    <p class="text-muted">Dapatkan akses Free WiFi tanpa batas dengan kecepatan akses internet yang cepat.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x " style="color: tomato;"></i>
                        <i class="fas fa-search-location fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Akses Mudah</h4>
                    <p class="text-muted">Lokasi Kost yang mudah diakses dengan kendaraan dikarenakan lokasi yang berada dekat sekolah, kampus, dan tempat ibadat.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x" style="color: tomato;"></i>
                        <i class="fas fa-dollar-sign fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Harga Terjangkau</h4>
                    <p class="text-muted">Dapatkan harga yang mudah dan terjangkau oleh seluruh kalangan.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12 text-center">
                    <a onclick="cekkamar();" data-toggle="modal" data-target="#amorAddModal" data-whatever="@mdo" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger">Pesan Kamar Sekarang</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-success page-section" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">GALERI</h2>

                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/fotokos/kamarkost1.jpg" alt="" width="100%" height="300">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/fotokos/kamarkost2.jpg" alt="" width="100%" height="300">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/fotokos/kamarkost3.jpg" alt="" width="100%" height="300">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/fotokos/kmr4.jpg" alt="" width="100%" height="300">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/fotokos/kmr5.jpg" alt="" width="100%" height="300">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/fotokos/gambar2.jpeg" alt="" width="100%" height="300">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="page-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <hr>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-6 justify-content-end">
                    <strong class="text-center">Sejarah Dan Alamat</strong>
                </div>
                <div class="col-6 justify-content-end">
                    <strong>Detail Kost</strong>
                </div>
            </div>
            <div class="row">
                <div class="col-6 justify-content-end p-3">
                    <p>Kost Oshin merupakan usaha jasa yang menyediakan
                        penyewaan kamar kost. Kost Oshin memiliki 10 unit kamar kost. Kost Oshin dibangun pada
                        maret 2014 dan selesai pada bulan juli 2015.</p>
                    <p>Kost Oshin berlokasi di jln. Profesor Doctor
                        Herman Yohanes, RT.009 / RW.002, Desa Penfui Timur, Kecamatan Kupang Tengah.</p>
                </div>
                <div class="col-6 justify-content-end">
                    <br>
                    Jumlah Kamar : 10. <br>
                    Luas Kamar : 3 x 4. <br>
                    Harga Sewa : Rp.500.000 / orang. <br>
                    Fasilitas : Air, Listrik, Free-WiFi Ditanggung Pemilik. <br>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section class="bg-success page-section" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">DATA PEMILIK KOST</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-member text-center">
                        <img class="mx-auto rounded-circle" src="img/fotokos/profil.jpg" alt="">
                        <h4 class="text-white">Bpk. Kosmas Kare</h4>

                        <div class="row text-center text-light">

                            <div class="col-md-3">
                                <span class="fa-stack fa-4x">
                                    <i class="fab fa-facebook"></i>
                                </span>
                                <h4 class="service-heading">Yohan</h4>
                            </div>
                            <div class="col-md-3">
                                <span class="fa-stack fa-4x">
                                    <i class="fab fa-whatsapp"></i>
                                </span>
                                <h4 class="service-heading">081246427539</h4>
                            </div>
                            <div class="col-md-3">
                                <span class="fa-stack fa-4x">
                                    <i class="fab fa-instagram"></i>
                                </span>
                                <h4 class="service-heading">yohanmasa</h4>
                            </div>
                            <div class="col-md-3">
                                <span class="fa-stack fa-4x">
                                    <i class="fab fa-youtube"></i>
                                </span>
                                <h4 class="service-heading">Yohan Masa</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <span class="copyright"><strong>Copyright &copy; OshinKost 2021</strong></span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <?php
    require 'daftar.php';
    ?>

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <div class="modal-body">
                                <img width="100%" height="400" src="img/fotokos/kamarkost1.jpg" alt="">
                            </div>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times"></i>
                                Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="col-md-10 mx-auto">
                        <div class="modal-body">
                            <img width="100%" height="400" src="img/fotokos/kamarkost2.jpg" alt="">
                        </div>
                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                            <i class="fas fa-times"></i>
                            Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <div class="modal-body">
                                <img width="100%" height="400" src="img/fotokos/kamarkost3.jpg" alt="">
                            </div>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times"></i>
                                Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <div class="modal-body">
                                <img width="100%" height="400" src="img/fotokos/kmr4.jpg" alt="">
                            </div>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times"></i>
                                Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <div class="modal-body">
                                <img width="100%" height="400" src="img/fotokos/kmr5.jpg" alt="">
                            </div>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times"></i>
                                Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <div class="modal-body">
                                <img width="100%" height="400" src="img/fotokos/gambar2.jpeg" alt="">
                            </div>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times"></i>
                                Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

    <script>
        function cekjumlahorang() {
            var jumlah = document.getElementById('jumlah').value;
            console.log(jumlah);
            if (jumlah == 1 || jumlah == 2) {
                document.getElementById('errorjumlah').innerHTML = "Jumlah Penghuni Kost Diijinkan";
                document.getElementById('errorjumlah').setAttribute('style', "color:green; margin-bottom:0;");
            } else {
                document.getElementById('errorjumlah').innerHTML = "Jumlah Penghuni Kost Tidak Boleh Lebih Dari 2 Orang.";
                document.getElementById('errorjumlah').setAttribute('style', "color:red; margin-bottom:0;");
                document.getElementById('jumlah').value = "";

            }
        }

        function cekkamar() {
            var kamarterisi = document.getElementById('kamarterisi').value;
            console.log(kamarterisi);
        }
    </script>

</body>

</html>