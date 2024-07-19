<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Mentor Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('accueil/img/mali.png') }}" rel="icon">
  <link href="{{ asset('accueil/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('accueil/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('accueil/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('accueil/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('accueil/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('accueil/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- Main CSS File -->
  <link href="{{ asset('accueil/css/main.css') }}" rel="stylesheet">
</head>

<body>

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="#" class=" d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('accueil/img/logo1.png') }}" style="width: 25%"   alt="">
        {{--<h1 class="">Concurify</h1>--}}
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#" class="active">Accueil</a></li>
          <li><a href="#features">A propos</a></li>
          <li><a href="#footer">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      @if (Route::has('login'))
      <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
          @auth
              <a href="{{ route('admin.dashboard') }}" class="btn-getstarted">Home</a>
          @else
              <a href="{{ route('candidatAuth.login') }}" class="btn-getstarted">Se connecter</a>

              @if (Route::has('candidat.inscription'))
                  <a href="{{ route('candidat.inscription') }}" class="btn-getstarted">Inscription</a>
              @endif
          @endauth
      </div>
  @endif
    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="{{ asset('accueil/img/background.jpg') }}" alt="" data-aos="fade-in">

      <div class="container">
        <h2 data-aos="fade-up" data-aos-delay="100" class="">MaliConcours<br>Votre porte d'entrée dans la fonction publique au Mali.</h2>
        <p data-aos="fade-up" data-aos-delay="200">Bienvenue sur MaliConcours, votre plateforme dédiée à simplifier et optimiser votre parcours vers la fonction publique au Mali. Découvrez nos services pour réussir vos concours avec succès !</p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
          <a href="{{ route('candidat.inscription') }}" class="btn-get-started">S'inscrire</a>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('accueil/img/Republique.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
            <h3>Missions</h3>
            <p class="fst-italic">
                Au Mali, le recrutement s’effectue par voie de concours conformément aux dispositions de l’article 29 et suivant de la loi N*02-053 du 16 décembre 2002 portant Statut général des fonctionnaires.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Le recrutement a pour objet de pourvoir à la vacance des emplois permanents de l’Administration. La limitation du nombre d’emplois à pourvoir a pour conséquence les recours au concours comme moyen de sélection des candidats au recrutement.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Le concours permet de donner une égale chance à tous les candidats en application du principe de l’égalité devant les emplois publics et de choisir autant que possible les meilleurs en vue de relever le niveau qualitatif du personnel de l’Administration.</span></li>
            </ul>
            <a href="{{ route('candidat.inscription') }}" class="read-more"><span>S'inscrire</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Counts Section -->
    <section id="counts" class="section counts">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="{{ $candidat }}" data-purecounter-duration="1" class="purecounter"></span>
              <p class="">Candidats</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="{{ $cadre }}" data-purecounter-duration="1" class="purecounter"></span>
              <p class="">Cadre</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="{{ $corp }}" data-purecounter-duration="1" class="purecounter"></span>
              <p class="">Corps</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="{{ $specialite }}" data-purecounter-duration="1" class="purecounter"></span>
              <p class="">Specialite</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Counts Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="section why-us">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Mots du Directeur</h3>
              <p>
                  Devenir fonctionnaire est souvent une vocation. Les avantages de la fonction publique sont nombreux : nombreuses possibilités d’évolution, carrières diversifiées là où le secteur privé tend à la spécialisation.

                  Au Centre National des Concours de la Fonction Publique, nous organisons les concours directs d’entrée dans la fonction publique d’Etat de façon transparente et sur la base du mérite.

                  Nous encourageons fortement la participation féminine lors des différents concours.

                  Il bon de savoir que, la fonction publique d’Etat offre des possibilités de concours professionnels d’avancement de catégories (C => B1, B1 => B2). Le Centre organise aussi le recrutement de contractuels pour combler les besoins en personnel d’appui dans les structures de l’Etat.
              </p>
              <div class="text-center">
                <a href="{{ route('candidat.inscription') }}" class="more-btn"><span>S'inscrire</span> <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

              <div class="col-xl-4">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>Corporis voluptates officia eiusmod</h4>
                  <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>Ullamco laboris ladore pan</h4>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>Labore consequatur incidid dolore</h4>
                  <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Why Us Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="features-item">
              <i class="bi bi-eye" style="color: #ffbb2c;"></i>
              <h3><a href="" class="stretched-link">Lorem Ipsum</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="features-item">
              <i class="bi bi-infinity" style="color: #5578ff;"></i>
              <h3><a href="" class="stretched-link">Dolor Sitema</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="features-item">
              <i class="bi bi-mortarboard" style="color: #e80368;"></i>
              <h3><a href="" class="stretched-link">Sed perspiciatis</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="features-item">
              <i class="bi bi-nut" style="color: #e361ff;"></i>
              <h3><a href="" class="stretched-link">Magni Dolores</a></h3>
            </div>
          </div><!-- End Feature Item -->
        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- Courses Section -->
    <section id="courses" class="courses section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Courses</h2>
        <p class="">Organigramme</p>
      </div><!-- End Section Title -->


      <div class="container">
          <img src="{{ asset('accueil/img/organigramme.png') }}" alt="" data-aos="fade-in">

      </div>

    </section><!-- /Courses Section -->

    <!-- Trainers Index Section -->
    <section id="trainers-index" class="section trainers-index">

      <div class="container">

          <img src="{{ asset('accueil/img/monument.jpg') }}" class="d-flex align-items-center me-auto" alt="" data-aos="fade-in" >

      </div>

    </section><!-- /Trainers Index Section -->

  </main>

  <footer id="footer" class="footer position-relative">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="#" class="logo d-flex align-items-center">
            <span class="">MlConcours</span>
          </a>
          <div class="social-links d-flex mt-4">
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="https://www.facebook.com/p/Centre-National-des-Concours-de-la-Fonction-Publique-CNCFP-du-MALI-100063493567416/?locale=fr_FR"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Liens utiles</h4>
          <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">À propos de nous</a></li>
            <li><a href="#">Services</a></li>
          </ul>
        </div>

       {{--  <div class="col-lg-4 col-md-12 footer-newsletter">
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Votre demande d'abonnement a été envoyée. Merci!</div>
          </form>
        </div> --}}

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1">MaliConcours</strong> <span>By FDEV93 & MDEV91</span></p>
      <div class="credits">

      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('accueil/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('accueil/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('accueil/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('accueil/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('accueil/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('accueil/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('accueil/js/main.js') }}"></script>

</body>

</html>
