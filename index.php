<?php
include_once 'src/components/header.php';
?>

<main>
    <section class="hero">
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto text-center">
                    <div class="hero__content">
                        <h1 class="hero__title">UNE AGENCE WEB ENGAGÉE,<br>QUI TIENT SES PROMESSES.</h1>
                        <p class="hero__subtitle">l'agence digitale specialiste des petites et moyennes entreprises</p>
                        <p class="hero__mission">Une seule mission : mettre en lumière votre activité sur le web et transformer vos visiteurs en <span class="hero__highlight">CLIENTS</span></p>
                        <a href="#decouvrir" class="hero__button">DÉCOUVRIR <span class="hero__button-arrow">&#8594;</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="decouvrir">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="about__image-placeholder">
                        <img src="https://img.freepik.com/free-vector/realistic-wavy-black-friday-background_52683-72377.jpg?t=st=1744275419~exp=1744279019~hmac=5706d67317c7ba9b562ce44fe01dceb7bdac0a20bcc16c8ab760e9aa43097b58&w=826" alt="poster image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about__content">
                        <div class="about__tag">- À PROPOS DE LA CASA DE COM</div>
                        <h2 class="about__title">METTEZ EN LUMIÈRE VOTRE EXPERTISE SUR INTERNET.</h2>

                        <p class="about__text">Chez La Casa de Com®, notre mission est simple : trouver plus de clients pour nos clients afin de dynamiser leur activité et booster leur chiffre d'affaires.</p>

                        <p class="about__text">Spécialistes de la communication et du marketing digital, nous accompagnons les PME et entrepreneurs dans leur quête de visibilité, de notoriété et d'engagement.</p>

                        <p class="about__text">Notre approche stratégique et transversale nous permet de révéler ce qui vous rend unique et de transformer votre présence en ligne en un véritable moteur de croissance.</p>

                        <a href="/contactez-nous" class="about__button">CONTACTEZ-NOUS ! <span class="about__button-arrow">&#8594;</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="expertise">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="expertise__content">
                        <div class="expertise__tag">- NOS EXPERTISES EN COMMUNICATION</div>
                        <h2 class="expertise__title">UNE COMMUNICATION BIEN PENSÉE<br>POUR AVANCER SANS DÉTOUR.</h2>

                        <p class="expertise__text">Votre entreprise atteint une étape décisive dans son développement ?</p>
                        <p class="expertise__text">Notre agence regroupe sous un même toit toutes les expertises de la communication et du marketing digital pour offrir des services parfaitement adaptés à vos besoins et vos défis.</p>
                        <p class="expertise__text">À l'écoute de vos attentes, nous élaborons des stratégies claires et sur mesure, gérons votre communication avec réactivité et pédagogie, et vous accompagnons pour prendre pleinement en main votre communication.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4 mb-4">
                    <div class="expertise__card">
                        <div class="expertise__card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 9h20v11H2z" />
                                <path d="M1 5h22v4H1z" />
                                <path d="M4 9v11" />
                                <path d="M20 9v11" />
                            </svg>
                        </div>
                        <h3 class="expertise__card-title">CRÉATION<br>DES SITES WEB</h3>
                        <p class="expertise__card-text">Un site unique et impactant pour attirer et convertir.</p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="expertise__card">
                        <div class="expertise__card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2v2" />
                                <path d="M12 8v2M12 14v2M12 20v2" />
                                <circle cx="12" cy="12" r="10" />
                                <circle cx="12" cy="12" r="4" />
                            </svg>
                        </div>
                        <h3 class="expertise__card-title">MARKETING<br>DIGITAL</h3>
                        <p class="expertise__card-text">Apportez la bonne parole à la bonne audience.</p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="expertise__card">
                        <div class="expertise__card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 1v22" />
                                <path d="M1 12h22" />
                                <path d="M6 12a6 6 0 0 0 12 0 6 6 0 0 0-12 0" />
                            </svg>
                        </div>
                        <h3 class="expertise__card-title">STRATÉGIE<br>DE COMMUNICATION</h3>
                        <p class="expertise__card-text">Une stratégie efficace pour cibler vos clients.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="mt-5">
    <div class="container">
        <p>&copy; <?php echo date("Y"); ?> La Casa De Com. Tous droits réservés.</p>
    </div>
</footer>
</body>

</html>