<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>CFP Cursos Online</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= url("assets/img/favicon.png")?>" rel="icon">
    <link href="<?= url("assets/img/apple-touch-icon.png")?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= url("assets/vendor/bootstrap/css/bootstrap.min.css")?>" rel="stylesheet">
    <link href="<?= url("assets/vendor/icofont/icofont.min.css")?>" rel="stylesheet">
    <link href="<?= url("assets/vendor/boxicons/css/boxicons.min.css")?>" rel="stylesheet">
    <link href="<?= url("assets/vendor/animate.css/animate.min.css")?>" rel="stylesheet">
    <link href="<?= url("assets/vendor/venobox/venobox.css")?>" rel="stylesheet">
    <link href="<?= url("assets/vendor/aos/aos.css")?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= url("assets/css/style.css")?>" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>


<body>



<!-- ======= Header ======= -->
<header id="header">
    <div class="container">

        <div class="logo float-left">

            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html"><img src="<?= url("assets/img/logo.png")?>" alt="" class="img-fluid"></a>
        </div>

        <nav class="nav-menu float-right d-none d-lg-block">
            <ul>
                <li class="active"><a href="<?= url()?>">Início</a></li>
                <li><a href="/sobre">Sobre</a></li>
                <li><a href="<?= url()?>/cursos">Cursos</a></li>
                <li><a href="<?= url()?>/ebooks">Cursos em E-books</a></li>
                <li><a href="<?= url()?>/depoimentos">Depoimentos</a></li>
                <li><a href="<?= url()?>/cadastrar">Cadastre-se</a></li>
                <li><a href="#contact">Fale Conosco</a></li>
                <li><a href="<?= url()?>/login">Área do Aluno</a></li>
            </ul>
        </nav>
        <!-- .nav-menu -->

    </div>
</header>
<!-- End Header -->
<?= $this->section("content") ?>
<!-- ======= Footer ======= -->
<footer id="footer">


    <div class="footer-top" id="contact">
        <div class="container">

            <center>
                <h3>Fale Conosco</h3>
            </center><br>
            <div class="row">

                <div class="col-lg-3 footer-info">

                    <p>

                        <strong>Telefone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>
                    <div class="social-links mt-3">
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    </div>

                    <br>
                    <div>

                        <img src="assets/img/selo-de-garantia.png" width="100px;" height="120px;" alt="">
                        <br> <img src="assets/img/Selo-de-qualidade.png" width="100px;" height="100px;" alt="">
                    </div>
                </div>
                <div class="col-lg-9 footer-info">


                    <div class="form">

                        <div id="errormessage"></div>
                        <form method="POST" action="index.php" role="form" class="contactForm" onsubmit="return validaCampo(); return false;">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome" required="true" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required="true" />
                                    <div class="validation"></div>
                                </div>

                                <div class="form-group col-md-6">
                                    <input type="whatsapp" class="form-control" name="whatsapp" id="whatsapp" placeholder="WhatsApp" required="true" />
                                    <div class="validation"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" name="txtmsg" rows="5" id="mensagem" placeholder="Mensagem" required="true"></textarea>
                                <div class="validation"></div>
                            </div>
                            <div class="text-center"><button type="submit" class="btn btn-primary">Enviar</button></div>
                        </form>
                    </div>

                </div>
            </div>







        </div>
    </div>
    </div>


    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>CFP Cursos Online</span></strong>. Todos os direitos reservados
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/ -->
            Desenvolvido por <a href="https://bootstrapmade.com/">Vitrinize</a>
        </div>
    </div>
</footer>
<!-- End Footer -->


<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="<?= url("assets/vendor/jquery/jquery.min.js")?>"></script>
<script src="<?= url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")?>"></script>
<script src="<?= url("assets/vendor/jquery.easing/jquery.easing.min.js")?>"></script>
<script src="<?= url("assets/vendor/php-email-form/validate.js")?>"></script>
<script src="<?= url("assets/vendor/jquery-sticky/jquery.sticky.js")?>"></script>
<script src="<?= url("assets/vendor/venobox/venobox.min.js")?>"></script>
<script src="<?= url("assets/vendor/waypoints/jquery.waypoints.min.js")?>"></script>
<script src="<?= url("assets/vendor/counterup/counterup.min.js")?>"></script>
<script src="<?= url("assets/vendor/isotope-layout/isotope.pkgd.min.js")?>"></script>
<script src="<?= url("assets/vendor/aos/aos.js")?>"></script>

<!-- Template Main JS File -->
<script src="<?= url("assets/js/main.js")?>"></script>

</body>

</html>
