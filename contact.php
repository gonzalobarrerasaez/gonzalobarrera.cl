<!DOCTYPE html>
<html lang="es">

<head>
<?php $title = 'Contacto'; ?>
    <?php include_once 'includes/meta.php'; ?>
</head>


<body id="contact-body" style="overflow-x: hidden;">
    <div>
        <?php include_once 'includes/nav-desk.php'; ?>

        <div class="animated fadeIn row" style="width:100vw;animation-duration: 1.5s;">
            <div class="col-md-6" id="left-hero">
                <h1 class="hero-tag contact-hero animated fadeInLeft">Charlemos un café!.</h1>
                <form class="input-container" id="frmContact">
                    <p class="hero-des contact-des animated fadeIn delay-1s">Quieres discutir sobre
                        un proyecto, una idea o una oportunidad? Tan solo llena este formulario!
                        o envíame un email <a target="_blank" href="mailto:gbarrerasaez@proton.me"><i class="fas fa-envelope"></i></a>
                    </p>
                    <div class="form-group"><label for="name">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control" required="">
                    </div>
                    <div class="form-group"><label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required="">
                    </div>
                    <div class="form-group"><label for="message">Mensaje</label>
                        <textarea rows="3" id="message" name="message" class="form-control" required=""></textarea>
                    </div>
                    <button type="button" class="submit animated bounce delay-4s learn-btn" id="btnContact">
                        Enviar!
                    </button>
                </form>
                <div style="display:none;" id="thankyou_message">
                    <h2>
                        <em>Gracias</em> por contactarte!
                        Te responderé a la brevedad!
                    </h2>
                </div>
                <br>
            </div>

            <div class="col-md-6" id="hero-right">
                <img class="animated fadeInRight" id="hero-img" src="assets/img/contact.svg" alt="Gonzalo Barrera | Software Engineer">
            </div>

        </div>
        <?php include_once 'includes/rrss.php'; ?>
    </div>
    <?php include_once 'includes/nav-mobile.php'; ?>
</body>

</html>