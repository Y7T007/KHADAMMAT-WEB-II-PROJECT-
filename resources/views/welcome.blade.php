<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Services à Domicile</title>
  <link rel="shortcut icon" href="favicon.ico" type="Page_Principale/image/x-icon" />
  <link rel="apple-touch-icon" href="Page_Principale/favicon.png" />
  <link rel="stylesheet" href="Page_Principale/css/10_swiper-bundle.min.css" />
  <link rel="stylesheet" href="Page_Principale/css/styles.min.css" />
  <link rel="shortcut icon" href="signIn_signup/images/logo.jpeg" type="image/x-icon">
</head>

<body>
  <div id="preloader"></div>
  <div class="wrapper">


  
    @include('header')


    <main class="page">
      

        @include('landing')



      <section class="page__professionals professionals" id="about">
        <div class="professionals__container">
          <div class="professionals__content content-professionals">
            <h2 data-animate-slide-to-right class="content-professionals__title section-title">
              <span>Professionnels pour vos services à domicile</span>
            </h2>
            <div class="content-professionals__text">
              <p>
                Vous avez besoin d'aide pour l'entretien de la maison ? Nous sommes des professionnels de l'entretien
                domiciliaire axés sur la région des États-Unis. Nous fournissons plusieurs services qui soutiennent les
                services à domicile.
              </p>
            </div>
            <ul class="content-professionals__list">
              <li class="content-professionals__item">
                Réparation et Installation
              </li>
              <li class="content-professionals__item">Plomberie</li>
              <li class="content-professionals__item">Maintenance</li>
              <li class="content-professionals__item">Abordable</li>
              <li class="content-professionals__item">
                Services de Sécurité à Domicile
              </li>
              <li class="content-professionals__item">
                Solutions Respectueuses de l'Environnement
              </li>
            </ul>

          </div>
          <div class="professionals__image">
            <img src="Page_Principale/images/professionals/image.jpg" alt="image" />
          </div>
        </div>
      </section>



      <section class="page__services services" id="services">
        <div class="services__container">
          <h2 data-animate-slide-to-right class="services__title section-title section-title--centered">
            <span>Nos Services</span>
          </h2>
          <div class="services__text">
            <p>
              Vous avez des problèmes de fuites de tuyaux, de tuiles cassées, de clés perdues ou vous voulez tailler les
              arbres autour de vous, bien sûr, vous avez besoin de notre aide !
            </p>
          </div>
          <div data-animate-to-left-top class="services__list">
            <article class="services__item item-services">
              <div class="item-services__icon">
                <img src="Page_Principale/images/services/water-supply_9830757.png" alt="icone Plomberie" />
              </div>
              <h3 class="item-services__service">Services de Plomberie</h3>
              <div class="item-services__description">
                <p>Fuite de tuyau, tuyau bouché, remplacement de la conduite</p>
              </div>
            </article>
            <article class="services__item item-services">
              <div class="item-services__icon">
                <img src="Page_Principale/images/services/construction_8076339.png" alt="icone Toiture" />
              </div>
              <h3 class="item-services__service">Réparation de Toiture</h3>
              <div class="item-services__description">
                <p>
                  Fuites de toit, remplacement de tuiles, nettoyage et entretien de la toiture
                </p>
              </div>
            </article>
            <article class="services__item item-services">
              <div class="item-services__icon">
                <img src="Page_Principale/images/services/petri-dish_4136055.png" alt="icone Enlèvement de la Moisissure" />
              </div>
              <h3 class="item-services__service">Enlèvement de la Moisissure</h3>
              <div class="item-services__description">
                <p>
                  Élimination et nettoyage de la moisissure, Restauration et Prévention
                </p>
              </div>
            </article>
            <article class="services__item item-services">
              <div class="item-services__icon">
                <img src="Page_Principale/images/services/trimming_5313572.png" alt="icone Taille des Arbres" />
              </div>
              <h3 class="item-services__service">Taille des Arbres</h3>
              <div class="item-services__description">
                <p>Élagage et nettoyage, Enlèvement du bois mort, Mise en forme des arbres</p>
              </div>
            </article>
            <article class="services__item item-services">
              <div class="item-services__icon">
                <img src="Page_Principale/images/services/household_2304261.png" alt="icone Réparation d'Appareils" />
              </div>
              <h3 class="item-services__service">Réparation d'Appareils</h3>
              <div class="item-services__description">
                <p>
                  Réparation de machines à laver, réfrigérateurs, climatiseurs, etc.
                </p>
              </div>
            </article>
            <article class="services__item item-services">
              <div class="item-services__icon">
                <img src="Page_Principale/images/services/bathroom_7909852.png" alt="icone Rénovation de Salle de Bain" />
              </div>
              <h3 class="item-services__service">Rénovation de Salle de Bain</h3>
              <div class="item-services__description">
                <p>
                  Conception et Consultation, installation, Réparation, réparation de carrelage
                </p>
              </div>
            </article>
            <article class="services__item item-services">
              <div class="item-services__icon">
                <img src="Page_Principale/images/services/locksmith_4634933.png" alt="icone Serrurier" />
              </div>
              <h3 class="item-services__service">Serrurier</h3>
              <div class="item-services__description">
                <p>
                  Installation et Réparation de Serrures, Duplication, Remplacement de Serrures
                </p>
              </div>
            </article>


          </div>
        </div>
      </section>





      <section class="page__experts experts" id="experts">
        <div class="blog__container">
          <h2 data-animate-slide-to-right class="blog__title section-title section-title--centered">
            <span>Nos Domaines d'Expertise</span>
          </h2>
          <div class="blog__text">
            <p>
              Trouvez de nombreuses idées et informations sur notre blog. Explorez, apprenez et inspirez-vous dès
              aujourd'hui.
            </p>
          </div>
          <div class="blog__cards">
            <article data-animate-to-left-top class="blog__card card-blog">
              <a href="#" class="card-blog__image-ibg">
                <img src="Page_Principale/images/blog/part-male-construction-worker.jpg" alt="image" />
              </a>

              <h4 class="card-blog__title">
                <a href="#" class="card-blog__link-title">Bricolage</a>
              </h4>
              <div class="card-blog__text">
                <p>
                  Découvrez le guide ultime pour résoudre les problèmes courants de la maison intelligente dans notre
                  dernier article de blog. Des problèmes de connectivité aux dysfonctionnements des appareils, nous
                  fournissons des solutions étape par étape pour vous aider à restaurer la fonctionnalité transparente
                  de votre système domotique. Obtenez des informations d'experts, des astuces pratiques et des conseils
                  d'initiés pour maintenir le bon fonctionnement de votre automatisation résidentielle. Ne laissez pas
                  les problèmes techniques entraver votre expérience de maison intelligente - armez-vous des
                  connaissances nécessaires pour résoudre les problèmes et profiter de la commodité de votre maison
                  connectée. Visitez notre blog dès maintenant et devenez un expert en dépannage !
                </p>
              </div>

            </article>
            <article data-animate-to-left-top class="blog__card card-blog">
              <a href="#" class="card-blog__image-ibg">
                <img src="Page_Principale/images/blog/incognito-man-cutting-overgrown-bushes.jpg" alt="image" />
              </a>

              <h4 class="card-blog__title">
                <a href="#" class="card-blog__link-title">Jardinage</a>
              </h4>
              <div class="card-blog__text">
                <p>
                  Découvrez le guide ultime pour résoudre les problèmes courants de la maison intelligente dans notre
                  dernier article de blog. Des problèmes de connectivité aux dysfonctionnements des appareils, nous
                  fournissons des solutions étape par étape pour vous aider à restaurer la fonctionnalité transparente
                  de votre système domotique. Obtenez des informations d'experts, des astuces pratiques et des conseils
                  d'initiés pour maintenir le bon fonctionnement de votre automatisation résidentielle. Ne laissez pas
                  les problèmes techniques entraver votre expérience de maison intelligente - armez-vous des
                  connaissances nécessaires pour résoudre les problèmes et profiter de la commodité de votre maison
                  connectée. Visitez notre blog dès maintenant et devenez un expert en dépannage !
                </p>
              </div>

            </article>
            <article data-animate-to-left-top class="blog__card card-blog">
              <a href="#" class="card-blog__image-ibg">
                <img src="Page_Principale/images/blog/person-taking-care-office-cleaning.jpg" alt="image" />
              </a>

              <h4 class="card-blog__title">
                <a href="#" class="card-blog__link-title">Nettoyage</a>
              </h4>
              <div class="card-blog__text">
                <p>
                  Découvrez le guide ultime pour résoudre les problèmes courants de la maison intelligente dans notre
                  dernier article de blog. Des problèmes de connectivité aux dysfonctionnements des appareils, nous
                  fournissons des solutions étape par étape pour vous aider à restaurer la fonctionnalité transparente
                  de votre système domotique. Obtenez des informations d'experts, des astuces pratiques et des conseils
                  d'initiés pour maintenir le bon fonctionnement de votre automatisation résidentielle. Ne laissez pas
                  les problèmes techniques entraver votre expérience de maison intelligente - armez-vous des
                  connaissances nécessaires pour résoudre les problèmes et profiter de la commodité de votre maison
                  connectée. Visitez notre blog dès maintenant et devenez un expert en dépannage !
                </p>
              </div>

            </article>
          </div>
          <a href="#" class="blog__button-more u-hover u-hover--blue">Voir plus</a>
        </div>
      </section>





      <section style="margin-top: 140px;" class="page__experts experts" id="experts">
        <div class="blog__container">
          <h2 data-animate-slide-to-right class="blog__title section-title section-title--centered">
            <span>Rencontrez Nos Experts</span>
          </h2>
          <div class="blog__text">
            <p>
              Trouvez de nombreuses idées et informations sur notre blog. Explorez, apprenez et inspirez-vous dès
              aujourd'hui.
            </p>
          </div>
          <div class="blog__cards">
            <article data-animate-to-left-top class="blog__card card-blog">
              <a href="#" class="card-blog__image-ibg">
                <img src="Page_Principale/images/blog/image1.jpg" alt="image" />
              </a>
              <div class="slide-reviews__rating">
                <img src="Page_Principale/images/reviews/star-gold.svg" alt="yellow star" />
                <img src="Page_Principale/images/reviews/star-gold.svg" alt="yellow star" />
                <img src="Page_Principale/images/reviews/star-gold.svg" alt="yellow star" />
                <img src="Page_Principale/images/reviews/star-gold.svg" alt="yellow star" />
                <img src="Page_Principale/images/reviews/star-grey.svg" alt="gray star" />
              </div>
              <h4 class="card-blog__title">
                <a href="#" class="card-blog__link-title">Mohamed Yassin</a>
              </h4>
              <div class="card-blog__text">
                <p>
                  Découvrez le guide ultime pour résoudre les problèmes courants de la maison intelligente dans notre
                  dernier article de blog. Des problèmes de connectivité aux dysfonctionnements des appareils, nous
                  fournissons des solutions étape par étape pour vous aider à restaurer la fonctionnalité transparente
                  de votre système domotique. Obtenez des informations d'experts, des astuces pratiques et des conseils
                  d'initiés pour maintenir le bon fonctionnement de votre automatisation résidentielle. Ne laissez pas
                  les problèmes techniques entraver votre expérience de maison intelligente - armez-vous des
                  connaissances nécessaires pour résoudre les problèmes et profiter de la commodité de votre maison
                  connectée. Visitez notre blog dès maintenant et devenez un expert en dépannage !
                </p>
              </div>
              <div class="card-blog__tags">
                <a href="#" class="card-blog__tag">Bricolage </a>

              </div>
            </article>
            <article data-animate-to-left-top class="blog__card card-blog">
              <a href="#" class="card-blog__image-ibg">
                <img src="Page_Principale/images/blog/jardinier-dans-tablier-guy-africain-dans-serre-fleurs-dans-pot_1157-47088.avif"
                  alt="image" />
              </a>
              <div class="slide-reviews__rating">
                <img src="Page_Principale/images/reviews/star-gold.svg" alt="yellow star" />
                <img src="Page_Principale/images/reviews/star-gold.svg" alt="yellow star" />
                <img src="Page_Principale/images/reviews/star-gold.svg" alt="yellow star" />
                <img src="Page_Principale/images/reviews/star-grey.svg" alt="gray star" />
                <img src="Page_Principale/images/reviews/star-grey.svg" alt="gray star" />
              </div>
              <h4 class="card-blog__title">
                <a href="#" class="card-blog__link-title">Ayoub Zaektouni</a>
              </h4>
              <div class="card-blog__text">
                <p>
                  Découvrez le guide ultime pour résoudre les problèmes courants de la maison intelligente dans notre
                  dernier article de blog. Des problèmes de connectivité aux dysfonctionnements des appareils, nous
                  fournissons des solutions étape par étape pour vous aider à restaurer la fonctionnalité transparente
                  de votre système domotique. Obtenez des informations d'experts, des astuces pratiques et des conseils
                  d'initiés pour maintenir le bon fonctionnement de votre automatisation résidentielle. Ne laissez pas
                  les problèmes techniques entraver votre expérience de maison intelligente - armez-vous des
                  connaissances nécessaires pour résoudre les problèmes et profiter de la commodité de votre maison
                  connectée. Visitez notre blog dès maintenant et devenez un expert en dépannage !
                </p>
              </div>
              <div class="card-blog__tags">
                <a href="#" class="card-blog__tag">Jardinage </a>

              </div>
            </article>
            <article data-animate-to-left-top class="blog__card card-blog">
              <a href="#" class="card-blog__image-ibg">
                <img
                  src="Page_Principale/images/blog/young-man-casual-clothes-cap-holding-bucket-with-cleaning-tools-pointing-with-index-finger-it-smiling-confident-standing-green-wall_141793-60961.avif"
                  alt="image" />
              </a>
              <div class="slide-reviews__rating">
                <img src="Page_Principale/images/reviews/star-gold.svg" alt="yellow star" />
                <img src="Page_Principale/images/reviews/star-gold.svg" alt="yellow star" />
                <img src="Page_Principale/images/reviews/star-gold.svg" alt="yellow star" />
                <img src="Page_Principale/images/reviews/star-gold.svg" alt="yellow star" />
                <img src="Page_Principale/images/reviews/star-gold.svg" alt="gray star" />
              </div>
              <h4 class="card-blog__title">
                <a href="#" class="card-blog__link-title">Younnes Allami</a>
              </h4>
              <div class="card-blog__text">
                <p>
                  Découvrez le guide ultime pour résoudre les problèmes courants de la maison intelligente dans notre
                  dernier article de blog. Des problèmes de connectivité aux dysfonctionnements des appareils, nous
                  fournissons des solutions étape par étape pour vous aider à restaurer la fonctionnalité transparente
                  de votre système domotique. Obtenez des informations d'experts, des astuces pratiques et des conseils
                  d'initiés pour maintenir le bon fonctionnement de votre automatisation résidentielle. Ne laissez pas
                  les problèmes techniques entraver votre expérience de maison intelligente - armez-vous des
                  connaissances nécessaires pour résoudre les problèmes et profiter de la commodité de votre maison
                  connectée. Visitez notre blog dès maintenant et devenez un expert en dépannage !
                </p>
              </div>
              <div class="card-blog__tags">
                <a href="#" class="card-blog__tag">Nettoyage </a>

              </div>
            </article>
          </div>
          <a href="#" class="blog__button-more u-hover u-hover--blue">Voir plus</a>
        </div>
      </section>





      <section class="page__how how">
        <div class="how__container">
          <div class="how__image">
            <img src="Page_Principale/images/how/image.jpg" alt="image du travailleur" />
          </div>
          <div class="how__content content-how">
            <h2 data-animate-slide-to-right class="content-how__title section-title">
              <span>Comment fonctionne Khadamat?</span>
            </h2>
            <ol data-animate-to-left-top class="content-how__list list-how">
              <li class="list-how__item">
                <h4 class="list-how__title">Appelez-nous à tout moment 24/7</h4>
                <div class="list-how__text">
                  Vous pouvez nous contacter directement, nous vous mettrons rapidement en contact avec nos
                  professionnels de l'entretien à domicile qui sont prêts à tout moment
                </div>
              </li>
              <li class="list-how__item">
                <h4 class="list-how__title">Planifiez le service</h4>
                <div class="list-how__text">
                  Après avoir pris votre appel, nos experts en entretien à domicile répondront à vos questions et vous
                  proposeront des horaires de rendez-vous flexibles
                </div>
              </li>
              <li class="list-how__item">
                <h4 class="list-how__title">Votre demande est complétée</h4>
                <div class="list-how__text">
                  Une fois que votre technicien arrive, il diagnostiquera le problème et fournira un devis. Si vous
                  décidez de continuer, le technicien se mettra au travail
                </div>
              </li>
            </ol>
          </div>
        </div>
      </section>






      <section class="page__reviews reviews">
        <div class="reviews__container">
          <h2 data-animate-slide-to-right class="reviews__title section-title section-title--centered">
            <span>Avis de plateforme de confiance</span>
          </h2>

          <div data-animate-to-left-top class="reviews__slider swiper">
            <div class="swiper-wrapper">
              <div class="reviews__slide slide-reviews swiper-slide">
                <div class="slide-reviews__heading">
                  <img src="Page_Principale/images/reviews/reviews_5804890.png" alt=" logo de l'en-tête" />
                </div>
                <div class="slide-reviews__text">
                  <p>
                    Les réparations de toiture peuvent être un vrai casse-tête, mais Khadamat les rend faciles ! Leur
                    équipe de couvreurs a transformé mon toit qui fuyait en une forteresse. Avec leur savoir-faire et
                    les meilleurs matériaux, ma maison est maintenant prête à affronter n'importe quelle tempête.
                  </p>
                </div>
                <div class="slide-reviews__author">
                  <a class="slide-reviews__avatar" href="#">
                    <img src="Page_Principale/images/reviews/man1.jpeg" alt="avatar" />
                  </a>
                  <div class="slide-reviews__label">
                    <div class="slide-reviews__name">
                      <a href="#">Omar Abarra</a>
                    </div>
                    <div class="slide-reviews__rating">
                      <img src="Page_Principale/images/reviews/star-gold.svg" alt="étoile jaune" />
                      <img src="Page_Principale/images/reviews/star-gold.svg" alt="étoile jaune" />
                      <img src="Page_Principale/images/reviews/star-gold.svg" alt="étoile jaune" />
                      <img src="Page_Principale/images/reviews/star-gold.svg" alt="étoile jaune" />
                      <img src="Page_Principale/images/reviews/star-grey.svg" alt="étoile grise" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="reviews__slide slide-reviews swiper-slide">
                <div class="slide-reviews__heading">
                  <img src="Page_Principale/images/reviews/reviews_5804890.png" alt=" logo de l'en-tête" />
                </div>
                <div class="slide-reviews__text">
                  <p>
                    Les réparations de toiture peuvent être un vrai casse-tête, mais Khadamat les rend faciles ! Leur
                    équipe de couvreurs a transformé mon toit qui fuyait en une forteresse. Avec leur savoir-faire et
                    les meilleurs matériaux, ma maison est maintenant prête à affronter n'importe quelle tempête. Les
                    réparations de toiture peuvent être un vrai casse-tête, mais Khadamat les rend faciles !
                  </p>
                </div>
                <div class="slide-reviews__author">
                  <a class="slide-reviews__avatar" href="#">
                    <img src="Page_Principale/images/reviews/women2.jpeg" alt="avatar" />
                  </a>
                  <div class="slide-reviews__label">
                    <div class="slide-reviews__name">
                      <a href="#">Ikram Jamail</a>
                    </div>
                    <div class="slide-reviews__rating">
                      <img src="Page_Principale/images/reviews/star-gold.svg" alt="étoile jaune" />
                      <img src="Page_Principale/images/reviews/star-gold.svg" alt="étoile jaune" />
                      <img src="Page_Principale/images/reviews/star-gold.svg" alt="étoile jaune" />
                      <img src="Page_Principale/images/reviews/star-gold.svg" alt="étoile jaune" />
                      <img src="Page_Principale/images/reviews/star-gold.svg" alt="étoile jaune" />
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="reviews__pagination custom-pagination swiper-pagination"></div>
            <button class="reviews__arrow-prev swiper-button-prev" type="button"></button>
            <button class="reviews__arrow-next swiper-button-next" type="button"></button>
          </div>
        </div>
      </section>






      <section class="page__talk talk" id="contact">
        <div class="talk__inner">
          <div class="talk__content">
            <div class="talk__container">
              <div class="talk__body body-talk">
                <h2 data-animate-slide-to-right
                  class="body-talk__title section-title section-title--large section-title--light">
                  <span style="color: rgb(0, 162, 255);">Prêt à améliorer ou réparer votre maison ? Parlons-en !</span>
                </h2>
                <ul class="body-talk__benefits">
                  <li class="body-talk__benefit">Devis gratuits</li>
                  <li class="body-talk__benefit">Engagement à 100%</li>
                </ul>
                <div data-animate-to-left-top class="body-talk__button-wrapper">
                  <a href="#" class="body-talk__button button"><span>Appelez-nous maintenant</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="talk__image-ibg">
            <img src="Page_Principale/images/talk/Component.jpeg" alt="image" />
          </div>
        </div>
      </section>





      @include('footer')

      
  </div>
  <script src="Page_Principale/js/10_swiper-bundle.min.js"></script>
  <script src="Page_Principale/js/script.js"></script>
</body>

</html>