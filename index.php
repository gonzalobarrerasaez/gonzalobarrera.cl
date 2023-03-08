<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once 'includes/meta.php'; ?>
</head>
<?php include_once 'includes/analitycs.php'; ?>

<body id="index-body" style="overflow: hidden;">
    <div>

        <?php include_once 'includes/nav-desk.php'; ?>

        <div class="animated fadeIn row" style="width:100vw;animation-duration: 1.5s;">
            <div class="col-md-6" id="left-hero">
                <h1 class="hero-tag"><span class="typer" id="main" data-words="Gonzalo Barrera" data-delay="100"
                        data-deleteDelay="1000" data-loop="1" style="color:blue!important;"></span>
                    &nbsp;</h1>
                <p class="hero-des">Ingeniero de Software, con más de <b>20 años de experiencia</b> 
                    en empresas nacionales, multinacionales en Chile y el extranjero. 
                    Desempeñándome en su mayoría en empresas <b>Software Factory y E-commerce</b>.
                </p>
                <script async src="https://unpkg.com/typer-dot-js@0.1.0/typer.js"></script>
                <a href="contact.php"><button class="contact-btn">
                        Contáctame
                    </button></a>
                <div class="social-icons">
                    <a target="_blank" href="mailto:gbarrerasaez@proton.me"><i class="fas fa-envelope"></i></a>
                    <a target="_blank" href="https://github.com/gonzalobarrerasaez"><i class="fab fa-github"></i></a>
                    <a target="_blank" href="https://linkedin.com/in/gbarreradevcl"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>

            <div class="col-md-6" id="hero-right">
                <img id="hero-img" src="assets/img/hero-img.svg" alt="Gonzalo Barrera | Software Engineer">
            </div>

        </div>
    </div>
    <?php include_once 'includes/nav-mobile.php'; ?>

    <?php include_once 'includes/footer.php'; ?>
</body>

</html>