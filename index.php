<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Learn IT!</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/faviconlearnit.jpg" rel="icon">
    <link href="assets/img/learnit.ico" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

<header>
<?php include_once './inc/header.php'?>
</header>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h1>Maak Leren Weer LEUK!</h1>
                <h2>Wij van Learn IT® zijn gepasioneerde ITers die de nieuwste Tech naar school willen brengen</h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    <a href="#" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Bekijk onze Video</span></a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Cliens Section ======= -->
    <section id="cliens" class="cliens section-bg">
        <div class="container">

            <div class="row" data-aos="zoom-in">

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                </div>

            </div>

        </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Over Ons</h2>
            </div>
            <div class="row content">
                <div class="col-lg-12">
                    <p style="text-align: center">
                        Learn IT® is voortgekomen uit een schoolproject, dit product was zo innoverend dat we als schoolgroep samen het bedrijf Learn IT® zijn gestart.
                        <br>
                        Hiermee willen wij educatie revolutioneren.
                    </p>
                </div>
            </div>
        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                    <img src="assets/img/skills.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                    <h3>Waarom Wij?</h3>
                    <p class="fst-italic">
                        Uit de cijfers blijkt dat kinderen die extra hulp nodig hebben en ons product gebruiken het beter doen dan kinderen zonder ons product.
                        <br>
                        En zien creëert het ook een fijnere werkplek voor de docenten.
                    </p>

                    <div class="skills-content">

                        <div class="progress">
                            <span class="skill">Inzicht over de leerling + <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Concentratie + <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Rekenvaardigheid + <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Werkwijze Docent + <i class="val">55%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Skills Section -->

    <!-- ======= voordelen Section ======= -->
    <section id="voordelen" class="voordelen section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Voordelen</h2>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <h4><a href="">Bewezen strategie</a></h4>
                        <p>Onze educatie spellen hebben een bewezen positief effect op zowel de productiviteit als leersnelheid van een leerling die moeite heeft met het verwerken van informatie via het schoolbord of ouderwetse boeken. </p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <h4><a href="">Doelgericht</a></h4>
                        <p>De progressie van de leerling is ons succes. Constant zijn wij bezig met het verbeteren van onze applicaties, AI en software om consistent de beste oplossing te bieden voor onze doelgroep.</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <h4><a href="">Nieuwe werkwijze</a></h4>
                        <p>De focus ligt op het behalen van leerdoelen. De ene leerling zal sneller bij dit doel komen dan de ander. Je kunt op je eigen tempo de opdrachten maken, dit zodat we de leerling niet pushen of onder druk zetten.</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                    <div class="icon-box">
                        <h4><a href="">Progressieportaal</a></h4>
                        <p>De progressie van de leerling wordt tijdens de diagnostische toetsen getrackt. Deze data kan vervolgens door de docent/ouder/verzorger online worden ingezien om de ontwikkeling te zien. </p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End voordelen Section -->

    <!-- ======= Do IT Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="row">
                <div class="col-lg-12 text-center text-lg-start">
                    <h3>Do IT Samen!</h3>
                </div>
            </div>

        </div>
    </section><!-- End Do IT Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Team</h2>
                <p>Ons team bestaat uit 5 jonge studenten die educatie voor de basisschool willen revolutioneren met nieuwe producten uit de tech wereld.</p>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                        <div class="member-info">
                            <h4>Julian Janssen</h4>
                            <span>Software & Business</span>
                            <p>Julian is verantwoordelijk geweest voor de software achter het spel, het bedrijfsproces en datavisualisaties</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
                        <div class="member-info">
                            <h4>Joost van de Pas</h4>
                            <span>Business & Media</span>
                            <p>Joost is verantwoordelijk geweest voor de requirements, MVP en het ontwerp van het spel</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                        <div class="member-info">
                            <h4>Teddy Kuijs</h4>
                            <span>Business & Media</span>
                            <p>Teddy is verantwoordelijk geweest voor de onderzoek in ons product, de probleem en klantanalyse, het ontwerp van de hardware en van de mockups van de website</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
                        <div class="member-info">
                            <h4>Cas Esselink</h4>
                            <span>Technology & Software</span>
                            <p>Cas is verantwoordelijk geweest voor de connectie tussen de Technologie en Software kant, ook heeft Cas het design van Joost toegepast in het programma</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
                        <div class="member-info">
                            <h4>Myron Seelen</h4>
                            <span>Media & Infrastructure</span>
                            <p>Myron is verantwoordelijk geweest voor de doelgroep analyse, mockups van de website, het coderen van de website en de hosting van de webserver</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Veelgestelde vragen (FAQ)</h2>
                <p>We hopen uw vragen altijd te kunnen beantwoorden, zou het antwoord op uw vraag hier niet tussen staan neem dan gerust contact met ons op!</p>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Hoeveel kost LearnIT? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            <p>
                                De aanschafprijs per product is €250. Het portaal, service & updates zit bij het product inbegrepen, hier zijn geen extra kosten aan verbonden. Voor bulk-orders hanteren wij volumekorting, stuur hiervoor een bericht via het contactformulier.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Mijn rekenspel is kapot, wat nu? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Ons technisch team staat iedere werkdag paraat om je te helpen. Plan een afspraak in en het product wordt kosteloos vervangen of gerepareerd.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Het is toch niet wat ik verwachtte, kan ik het retourneren? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Wat vervelend om te horen dat je niet tevreden bent over ons product. Uiteraard is retourneren mogelijk, meld je retour aan binnen 30 dagen en stuur vervolgens het product inclusief toebehoren kosteloos terug.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Mocht je vragen of opmerkingen hebben kun je contact met ons opnemen via het formulier hieronder. Wij streven ernaar alle vragen binnen 2 werkdagen te beantwoorden.</p>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Locatie:</h4>
                            <p>Rachelsmolen R10, 5623 PE Eindhoven</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@example.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Telefoon:</h4>
                            <p>040-1234567</p>
                        </div>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1279.6246577738768!2d5.480423751975269!3d51.450950196505815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6d9bbf31bd8fb%3A0xbb209e5872fefac8!2sFontys%20R10!5e0!3m2!1snl!2snl!4v1618490174691!5m2!1snl!2snl" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Naam</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Onderwerp</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Bericht</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Laden</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Uw bericht is verzonden. We streven erna om binnen twee werkdagen te reargeren. Dank u!</div>
                        </div>
                        <div class="text-center"><button type="submit">Verstuur Bericht</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<footer>
<?php include_once './inc/footer.php'?>
</footer>

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
