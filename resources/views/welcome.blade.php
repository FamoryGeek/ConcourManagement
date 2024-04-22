<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Mentor Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('accueil/img/favicon.png') }}" rel="icon">
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

      <a href="#" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="">Concurify</h1>
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
              <a href="{{ route('candidat.dashboard') }}" class="btn-getstarted">Home</a>
          @else
              <a href="{{ route('candidatAuth.login') }}" class="btn-getstarted">Se connecter</a>

              @if (Route::has('candidat.inscription'))
                  <a href="{{ route('candidat.inscription') }}" class="btn-getstarted">S'enregistrer</a>
              @endif
          @endauth
      </div>
  @endif
    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="{{ asset('accueil/img/hero-bg.jpg') }}" alt="" data-aos="fade-in">

      <div class="container">
        <h2 data-aos="fade-up" data-aos-delay="100" class="">Concurify<br>Votre porte d'entrée vers la fonction publique au Mali.</h2>
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
            <img src="{{ asset('accueil/img/about.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
            <h3>Voluptatem dignissimos provident quasi corporis</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
            </ul>
            <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
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
              <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
              <p class="">Candidats</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
              <p class="">Concours</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
              <p class="">Corps</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
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
              <h3>Why Choose Our Products?</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn"><span>Learn More</span> <i class="bi bi-chevron-right"></i></a>
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
        <p class="">Popular Courses</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="course-item">
                <img src="{{ asset('accueil/img/MK/mk.jpg') }}" class="img-fluid" alt="">
              {{-- <img src="{{ asset('img/images/mk.jpg') }}" class="img-fluid" alt="..."> --}}
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <p class="category">Developpement Web </p>
                  <p class="price"></p>
                </div>

                <h4><a href="course-details.html">Mata Kamory Keita</a></h4>
                <p class="description">Être content de son sort, voilà la plus grande richesse, car mouche du Roi est Roi.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bi bi-person user-icon"></i>&nbsp;91 18 30 83
                    &nbsp;&nbsp;
                    <i class="bi bi-envelope-open-fill"></i>&nbsp;matakeita642@gmail.com
                    <i class="fas fa-phone"></i>&nbsp;
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="course-item">
                <img src="{{ asset('accueil/img/MK/m.jpg') }}" class="img-fluid" alt="">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <p class="category">Beauter</p>
                  <p class="price"></p>
                </div>

                <h3><a href="course-details.html">Mata Kamory Keita</a></h3>
                <p class="description">Mk Keii</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bi bi-person user-icon"></i>&nbsp;91 18 30 83
                    &nbsp;&nbsp;
                    <i class="bi bi-eye-fill"></i>&nbsp;matakeita198
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="course-item">
                <img src="{{ asset('accueil/img/MK/belle.jpg') }}" class="img-fluid" alt="">
              {{-- <img src="{{ asset('img/images/mk.jpg') }}" class="img-fluid" alt="..."> --}}
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <p class="category">Contenu </p>
                  <p class="price"></p>
                </div>

                <h3><a href="course-details.html">Mata Kamory Keita</a></h3>
                <p class="description">On ne peut pas peindre du blanc sur du blanc, du noir sur du noir. Chacun a besoin de l'autre pour se révéler.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bi bi-person user-icon"></i>&nbsp;91 18 30 83
                    &nbsp;&nbsp;
                    <i class="bi bi-envelope-open-fill"></i>&nbsp;matakeita642@gmail.com
                    <i class="fas fa-phone"></i>&nbsp;
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>

    </section><!-- /Courses Section -->

    <!-- Trainers Index Section -->
    <section id="trainers-index" class="section trainers-index">

      <div class="container">

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="{{ asset('accueil/img/trainers/famory.jpg') }}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Famory Keïta</h4>
                <span>Développement web</span>
                <p>
                    Les grands d'où viennent tous et ils s'échappent et font de l'exercice. Je déteste ceux qui ont vu la vérité et qui cherchent soit ou soit
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="{{ asset('accueil/img/trainers/famory2.jpg') }}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Famory Keïta</h4>
                <span>Marketing</span>
                <p>
                    Les repoussés fuient pour atteindre personne qui connaît le plaisir d'être repoussé. Au temps de l'architecte des choses
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="{{ asset('accueil/img/trainers/famory3.jpg') }}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Famory Keïta</h4>
                <span>Contenu</span>
                <p>
                    Parce que le plaisir est aveuglé par les besoins. Le tout est réalisé par ceux qui continuent et donnent un brillant toro de travaux
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Trainers Index Section -->

  </main>

  <footer id="footer" class="footer position-relative">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="#" class="logo d-flex align-items-center">
            <span class="">Concurify</span>
          </a>
          <div class="footer-contact pt-3">
            <p>E122</p>
            <p>Bamako, Hamdalaye ACI 2000</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+223 93 01 88 09</span></p>
            <p class="mt-3"><span>+223 91 18 30 83</span></p>
            <p><strong>Email:</strong> <span>famorydev@outlook.fr</span></p>
            <p><span>matakeita642@gmail.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">À propos de nous</a></li>
            <li><a href="#">Services</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nos services</h4>
          <ul>
            <li><a href="#">Création de sites web</a></li>
            <li><a href="#">Développement web</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Votre demande d'abonnement a été envoyée. Merci!</div>
          </form>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1">ConCuriFy</strong> <span>By FDEV93 & MDEV91</span></p>
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
