<?php include_once '404.php'; ?>
<?php die(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php $title = 'Trabajos'; ?>
    <?php include_once 'includes/meta.php'; ?>
</head>
<?php include_once 'includes/analitycs.php'; ?>

<body id="contact-body" style="overflow-x: hidden;">
    <div>
        <?php include_once 'includes/nav-desk.php'; ?>
        <div class=" fadeIn row" style="width:100vw;height:auto;animation-duration: 1.5s;">
            <div class="col-md-12" id="left-hero">
            <h1 id="legal-hero" class="hero-tag contact-hero copyright animated fadeInLeft">Trabajos</h1>
                <p class="hero-des contact-des  fadeIn delay-1s">
                    Acá puedes revisar algunos de mis proyectos realizados.
                </p>
            </div>
        </div>
        <!--Content-->
        <div class="animated delay-1s">
            <div class="row" id="work-row">
                <div class="col-md-6 col-sm-12  bounceInLeft delay-2s">
                    <center>
                        <div class="work-hero">
                            <img class="work-hero-img" src="assets/img/work/hotspoter/hotspoter-hero.png">
                        </div>
                    </center>
                </div>
                <div class="col-md-6 col-sm-12">

                    <div class="work-des">
                        <h1>Jope!</h1>
                        <p>Hotspoter is special software that allows users to transform their computer into a wireless
                            router. This is ideal for people who are looking for a way to use their existing internet
                            connection to surf on their Smartphone, while the connection can also be shared with a large
                            number of different people at the same time without weakening the signal strength.</p>
                        <div class="technologies">
                            <h2>Technologies Used</h2>
                            <span class="tech-stack">
                                PHP
                            </span>
                            <span class="tech-stack">
                                Javascript
                            </span>
                            <span class="tech-stack">
                                MySql
                            </span>

                        </div>
                    </div>
                </div>
            </div>
            
            
            <?php include_once 'includes/rrss.php'; ?>
        </div>

        <?php include_once 'includes/nav-mobile.php'; ?>
</body>

</html>