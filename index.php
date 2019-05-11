<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- META-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="Portfolio , developpeur web , front , design , ui , ux " />
  <meta name="description" content="Je m'appelle Jeanne Thibert , je viens de terminer ma formation de developpeur web à l'Access Code School à Vesoul " />
  <!-- TITILE -->
  <title>Jeanne T.</title>
  <!-- FONT-->
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <!-- ICON -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet"
    href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
  <!-- FRAMEWORK -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css ">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- STYLE -->
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- ICONE -->
  <link rel="icon" href="jeanne.ico">


</head>

<body>
  <!-- NAVIGATION -->

  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a class="menu pb-5" href="#header" onclick="closeNav()">Accueil</a>
    <a class="menu pb-5" href="#project" onclick="closeNav()">Projets</a>
    <a class="menu pb-5" href="#about" onclick="closeNav()">À propos</a>
    <a class="menu pb-5" href="#contact" onclick="closeNav()">Contact</a>


  </div>


  <div class="reseaux d-flex flex-column justify-content-center align-items-center">
               
                
                <a href="https://www.linkedin.com/in/jeanne-thibert" target="blank" data-aos="fade-left" data-aos-duration="500"> <i class="fab fa-linkedin icon"></i></a>
                <a href="https://github.com/JeanneThibert" target="blank" data-aos="fade-left" data-aos-duration="700"> <i class="fab fa-github icon "></i></a>
                <a href="https://jeannet.promo-23.codeur.online/media/jeanne.pdf" target="blank" data-aos="fade-left" data-aos-duration="700"> <i class="fab far fa-file icon"></i></a>
                
            </div>








  <!-- BACKGROUND HEADER -->
  <header id="header">



    <?php include("background.php"); ?>

  </header>

  <!-- PROJECT-->
  <section id="project" class="container">
    <div class="container-fluid pt-3 d-flex flex-column justify-content-center align-items-center">
      <div>
        <h2 class="text-center project title">Projets</h2>
        <hr class="text-center project_space content ">

      </div>
      <div class="row pb-3">

        <div class=" col-12 col-sm-12 col-md-12 col-lg-12 pt-3" style="float:none;">
          <a class="portfolio-link" data-toggle="modal" href="#Modal1">
            <div class="wow zoomIn opacity">
              <img class="img-fluid " src="../media/access_movie.jpg" alt="projet access movie">
            </div>
          </a>
        </div>

        <div class=" col-12 col-sm-12 col-md-12 col-lg-12 pt-3" style="float:none;">
          <a class="portfolio-link" data-toggle="modal" href="#Modal2">
            <div class="wow zoomIn opacity">
              <img class="img-fluid " src="../media/avatar.jpg" alt="projet avatar ">
            </div>
          </a>
        </div>

        <div class=" col-12 col-sm-12 col-md-12 col-lg-12 pt-3" style="float:none;">
          <a class="portfolio-link" data-toggle="modal" href="#Modal3">
            <div class="wow zoomIn opacity">
              <img class="img-fluid  " src="../media/puissance4.jpg" alt="projet puissance 4">
            </div>
          </a>
        </div>

        <div class=" col-12 col-sm-12 col-md-12 col-lg-12 pt-3" style="float:none;">
          <a class="portfolio-link" data-toggle="modal" href="#Modal4">
            <div class="wow zoomIn opacity">
              <img class="img-fluid  " src="../media/explorateur.jpg" alt="projet explorateur de fichier">
            </div>
          </a>
        </div>
        <div class=" col-12 col-sm-12 col-md-12 col-lg-12 pt-3" style="float:none;">
          <a class="portfolio-link" data-toggle="modal" href="#Modal5">
            <div class="wow zoomIn opacity">
              <img class="img-fluid  " src="../media/jeux_plus_ou_moin.jpg" alt="projet jeux plus ou moin ">
            </div>
          </a>
        </div>
        <div class=" col-12 col-sm-12 col-md-12 col-lg-12 pt-3" style="float:none;">
          <a class="portfolio-link" data-toggle="modal" href="#Modal6">
            <div class="wow zoomIn opacity">
              <img class="img-fluid  " src="../media/wetransfer.jpg" alt="push_your_files ">
            </div>
          </a>
        </div>
        <div class=" col-12 col-sm-12 col-md-12 col-lg-12 pt-3" style="float:none;">
          <a class="portfolio-link" data-toggle="modal" href="#Modal7">
            <div class="wow zoomIn opacity">
              <img class="img-fluid  " src="../media/fastcat.jpg" alt="fastcat">
            </div>
          </a>
        </div>
        <div class=" col-12 col-sm-12 col-md-12 col-lg-12 pt-3" style="float:none;">
          <a class="portfolio-link" data-toggle="modal" href="#Modal8">
            <div class="wow zoomIn opacity">
              <img class="img-fluid " src="../media/blog.jpg" alt="blog_promo">
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- PORTFOLIO MODALS -->

  <!-- Modal 1 -->
  <div class="portfolio-modal modal fade" id="Modal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      </div>
    </div>
    <div class="container background_modal">
      <div class="row">
        <div class="col-lg-12 mx-auto">
          <div class="d-flex pt-3 ">
            <h2 class="title_modal">Annuaire de film "Access Movie"</h2>
            <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                <div class="rl"></div>
              </div>
            </div>
          </div>
          <div>
            <p class="description_modal">Lors de ce projet j'ai dû créer un annuaire de film, trié par réalisateurs,
              acteurs et année de
              sortie à partir de film sur "allocine". </p>
            <p class="realisation">Réalisation du 26/11/2018 au 07/12/2018</p>
            <div class="row">
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 pb-5 size_media">
                <img class="portfolio_media img-fluid " src="../media/access_movie_960.jpg" alt="projet access movie "
                  width="500px">
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 pb-5  size_language">
                <ul class="langage_modal">
                  <p class="description_langage_modal">Langages et technologies utilisés dans ce projet :</p>
                  <li><i class="devicon-html5-plain-wordmark pr-2"></i>HTML</li>
                  <li><i class="devicon-css3-plain-wordmark pr-2"></i>CSS</li>
                  <li><i class="devicon-sass-original pr-2"></i>SASS</li>
                  <li><i class="devicon-bootstrap-plain-wordmark pr-2"></i>BOOTSTRAP</li>
                  <li><i class="devicon-php-plain pr-2"></i>PHP</li>
                  <li><i class="devicon-javascript-plain pr-2"></i>JAVASCRIPT</li>
                  <li><i class="devicon-mysql-plain-wordmark pr-2"></i>SQL</li>
                  <li><i class="devicon-github-plain-wordmark pr-2"></i>GITHUB</li>
                  <li>Architecture MVC "Model View Controller"</li>
                </ul>
              </div>
            </div>
            <div class="d-flex justify-content-around pb-5 size_language">
              <a href="access_movie/" target="_blank" class="path_modal">Voir en ligne</a>
              <a href="https://github.com/JeanneThibert/access_movie" target="_blank" class="path_modal">GitHub</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Modal 2 -->
  <div class="portfolio-modal modal fade" id="Modal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      </div>
    </div>
    <div class="container background_modal">
      <div class="row">
        <div class="col-lg-12 mx-auto">
          <div class="d-flex pt-3 ">
            <h2 class="title_modal">Avatar avec formulaire de contact "The Villa Of Eden"</h2>
            <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                <div class="rl"></div>
              </div>
            </div>
          </div>
          <div>
            <p class="description_modal">Lors de ce projet j'ai dû créer un site fictif complet et responsive, avec la
              création d'un formualaire </p>
            <p class="realisation">Réalisation du 25/10/2018 au 24/11/2018</p>
            <div class="row">
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 pb-5 size_media">
                <img class="portfolio_media img-fluid " src="../media/avatar_960.jpg" alt="projet avatar avec formulaire de contact" width="500px">
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 pb-5 size_language">
                <ul class="langage_modal">
                  <p class="description_langage_modal">Langages et technologies utilisés dans ce projet :</p>
                  <li><i class="devicon-html5-plain-wordmark pr-2"></i>HTML</li>
                  <li><i class="devicon-css3-plain-wordmark pr-2"></i>CSS</li>
                  <li><i class="devicon-sass-original pr-2"></i>SASS</li>
                  <li><i class="devicon-bootstrap-plain-wordmark pr-2"></i>BOOTSTRAP</li>
                  <li><i class="devicon-php-plain pr-2"></i>PHP</li>
                  <li><i class="devicon-javascript-plain pr-2"></i>JAVASCRIPT</li>
                  <li><i class="devicon-github-plain-wordmark pr-2"></i>GITHUB</li>

                </ul>
              </div>
            </div>
            <div class="d-flex justify-content-around pb-5 size_language">
              <a href="avatar_contact/" target="_blank" class="path_modal">Voir en ligne</a>
              <a href="https://github.com/JeanneThibert/avatar" class="path_modal">GitHub</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Modal 3 -->
  <div class="portfolio-modal modal fade" id="Modal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      </div>
    </div>
    <div class="container background_modal">
      <div class="row">
        <div class="col-lg-12 mx-auto">
          <div class="d-flex pt-3 ">
            <h2 class="title_modal">Jeu du Puissance4</h2>
            <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                <div class="rl"></div>
              </div>
            </div>
          </div>
          <div>
            <p class="description_modal">Lors de ce projet j'ai dû créer un jeu du Puissance4 avec différents mode de
              jeu : "Joueur1 vs
              Joueur2" / "Joueur vs Ordinateur" / "Joueur vs IA" </p>
            <p class="realisation">Réalisation du 15/10/2018 au 24/10/2018</p>
            <div class="row">
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 pb-5 size_media">
                <img class="portfolio_media img-fluid " src="../media/puissance4_960.jpg" alt="projet puissance4"
                  width="500px">
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 pb-5 size_language">
                <ul class="langage_modal">
                  <p class="description_langage_modal">Langages et technologies utilisés dans ce projet :</p>
                  <li><i class="devicon-html5-plain-wordmark pr-2"></i>HTML</li>
                  <li><i class="devicon-css3-plain-wordmark pr-2"></i>CSS</li>
                  <li><i class="devicon-bootstrap-plain-wordmark pr-2"></i>BOOTSTRAP</li>
                  <li><i class="devicon-javascript-plain pr-2"></i>JAVASCRIPT</li>
                  <li><i class="devicon-github-plain-wordmark pr-2"></i>GITHUB</li>

                </ul>
              </div>
            </div>
            <div class="d-flex justify-content-around pb-5 size_language">
              <a href="puissance-4/" target="_blank" class="path_modal">Voir en ligne</a>
              <a href="https://github.com/JeanneThibert/puissance-4" class="path_modal">GitHub</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Modal 4 -->
  <div class="portfolio-modal modal fade" id="Modal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      </div>
    </div>
    <div class="container background_modal">
      <div class="row">
        <div class="col-lg-12 mx-auto">
          <div class="d-flex pt-3 ">
            <h2 class="title_modal">Explorateur de fichier</h2>
            <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                <div class="rl"></div>
              </div>
            </div>
          </div>
          <div>
            <p class="description_modal"> Lors de ce projet j'ai dû créer un explorateur de fichier , permettant de voir
              les différents
              fichiers et dossiers du projet</p>
            <p class="realisation">Réalisation du 07/01/2019 au 01/02/2019</p>
            <div class="row">
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 pb-5 size_media">
                <img class="portfolio_media img-fluid " src="../media/explorateur_960.jpg" alt="projet explorateur de fichier"
                  width="500px">
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 pb-5 size_language ">
                <ul class="langage_modal">
                  <p class="description_langage_modal">Langages et technologies utilisés dans ce projet :</p>
                  <li><i class="devicon-html5-plain-wordmark pr-2"></i>HTML</li>
                  <li><i class="devicon-css3-plain-wordmark pr-2"></i>CSS</li>
                  <li><i class="devicon-bootstrap-plain-wordmark pr-2"></i>BOOTSTRAP</li>
                  <li><i class="devicon-javascript-plain pr-2"></i>JAVASCRIPT</li>
                  <li><i class="devicon-github-plain-wordmark pr-2"></i>GITHUB</li>

                </ul>
              </div>
            </div>
            <div class="d-flex justify-content-around pb-5 size_language">
              <a href="/explorateur" target="_blank" class="path_modal">Voir en ligne</a>
              <a href="https://github.com/JeanneThibert/explorateur/" class="path_modal">GitHub</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 5 -->
  <div class="portfolio-modal modal fade" id="Modal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      </div>
    </div>
    <div class="container background_modal">
      <div class="row">
        <div class="col-lg-12 mx-auto">
          <div class="d-flex pt-3 ">
            <h2 class="title_modal">Jeux plus ou moin</h2>
            <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                <div class="rl"></div>
              </div>
            </div>
          </div>
          <div>
            <p class="description_modal"> Lors de ce projet j'ai dû créer un jeux plus ou moin , vous devez découvrir un
              chiffre aléatoire entre 0 et 100</p>
            <p class="realisation">Réalisation du 22/12/2018 au 07/01/2019</p>
            <div class="row">
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 pb-5 size_media">
                <img class="portfolio_media img-fluid " src="../media/jeux_plus_ou_moin_960.jpg" alt=" projet jeux plus ou moin "
                  width="500px">
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 pb-5 size_language ">
                <ul class="langage_modal">
                  <p class="description_langage_modal">Langages et technologies utilisés dans ce projet :</p>
                  <li><i class="devicon-html5-plain-wordmark pr-2"></i>HTML</li>
                  <li><i class="devicon-css3-plain-wordmark pr-2"></i>CSS</li>
                  <li><i class="devicon-bootstrap-plain-wordmark pr-2"></i>BOOTSTRAP</li>
                  <li><i class="devicon-javascript-plain pr-2"></i>JAVASCRIPT</li>
                  <li><i class="devicon-github-plain-wordmark pr-2"></i>GITHUB</li>

                </ul>
              </div>
            </div>
            <div class="d-flex justify-content-around pb-5 size_language">
              <a href="/jeux_plus_ou_moins" target="_blank" class="path_modal">Voir en ligne</a>
              <a href="https://github.com/JeanneThibert/jeux_plus_ou_moins" target="_blank"
                class="path_modal">GitHub</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal 6 -->
  <div class="portfolio-modal modal fade" id="Modal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      </div>
    </div>
    <div class="container background_modal">
      <div class="row">
        <div class="col-lg-12 mx-auto">
          <div class="d-flex pt-3 ">
            <h2 class="title_modal">Push Your Files </h2>
            <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                <div class="rl"></div>
              </div>
            </div>
          </div>
          <div>
            <p class="description_modal"> Lors de ce projet j'ai dû créer un site permettant d'envoyer des fichiers
              d'une personne à une autre.</p>
            <p class="realisation">Réalisation du 10/12/2018 au 21/12/2018</p>
            <div class="row">
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 pb-5 size_media">
                <img class="portfolio_media img-fluid " src="../media/wetransfer_960.jpg" alt="push_your_files "
                  width="500px">
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 pb-5 size_language ">
                <ul class="langage_modal">
                  <p class="description_langage_modal">Langages et technologies utilisés dans ce projet :</p>
                  <li><i class="devicon-html5-plain-wordmark pr-2"></i>HTML</li>
                  <li><i class="devicon-css3-plain-wordmark pr-2"></i>CSS</li>
                  <li><i class="devicon-sass-original pr-2"></i>SASS</li>
                  <li><i class="devicon-bootstrap-plain-wordmark pr-2"></i>BOOTSTRAP</li>
                  <li><i class="devicon-javascript-plain pr-2"></i>JAVASCRIPT</li>
                  <li><i class="devicon-php-plain pr-2"></i>PHP / TWIG</li>
                  <li><i class="devicon-mysql-plain-wordmark pr-2"></i>SQL</li>
                  <li><i class="devicon-github-plain-wordmark pr-2"></i>GITHUB</li>

                </ul>
              </div>
            </div>
            <div class="d-flex justify-content-around pb-5 size_language">
              <a href="/wetransfer_like" target="_blank" class="path_modal">Voir en ligne</a>
              <a href="https://github.com/JeanneThibert/wetransfer_like" target="_blank" class="path_modal">GitHub</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 7 -->
  <div class="portfolio-modal modal fade" id="Modal7" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      </div>
    </div>
    <div class="container background_modal">
      <div class="row">
        <div class="col-lg-12 mx-auto">
          <div class="d-flex pt-3 ">
            <h2 class="title_modal">FastCat</h2>
            <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                <div class="rl"></div>
              </div>
            </div>
          </div>
          <div>
            <p class="description_modal">Lors de ce projet j'ai dû créer un site d’information pour la course sur leurre
              ouverte à toutes les races</p>
            <p class="realisation">Réalisation du 05/03/2018 au 30/04/2018</p>
            <div class="row">
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 pb-5 size_media">
                <img class="portfolio_media img-fluid " src="../media/fastcat_960.jpg" alt="fastcat" width="500px">
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 pb-5 size_language ">
                <ul class="langage_modal">
                  <p class="description_langage_modal">Langages et technologies utilisés dans ce projet :</p>
                  <li><i class="devicon-wordpress-plain-wordmark pr-2"></i>WORDPRESS</li>
                  <li><i class="devicon-css3-plain-wordmark pr-2"></i>CSS</li>
                  <li><i class="devicon-jquery-plain-wordmark pr-2"></i>JQUERY</li>
                  <li><i class="devicon-javascript-plain pr-2"></i>JAVASCRIPT</li>
                  <li><i class="devicon-php-plain pr-2"></i>PHP</li>

                </ul>
              </div>
            </div>
            <div class="d-flex justify-content-around pb-5 size_language">
              <a href="https://fastcat.info/" target="_blank" class="path_modal">Voir en ligne</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

   <!-- Modal 8 -->
   <div class="portfolio-modal modal fade" id="Modal8" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      </div>
    </div>
    <div class="container background_modal">
      <div class="row">
        <div class="col-lg-12 mx-auto">
          <div class="d-flex pt-3 ">
            <h2 class="title_modal">FastCat</h2>
            <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                <div class="rl"></div>
              </div>
            </div>
          </div>
          <div>
            <p class="description_modal">Lors de ce projet j'ai dû créer le blog de la promotion de ma formation , en ajoutant tout les articles que nous avons pu créer sous WordPress au cours de la formation , mais également les membres de la formation ainsi que des projets créer lors de la formation  </p>
            <p class="realisation">Réalisation du 03/02/2018 au 01/03/2018</p>
            <div class="row">
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 pb-5 size_media">
                <img class="portfolio_media img-fluid " src="../media/blog_960.jpg" alt="blog_promo" width="500px">
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 pb-5 size_language ">
                <ul class="langage_modal">
                  <p class="description_langage_modal">Langages et technologies utilisés dans ce projet :</p>
                  <li><i class="devicon-wordpress-plain-wordmark pr-2"></i>WORDPRESS</li>
                  <li><i class="devicon-css3-plain-wordmark pr-2"></i>CSS</li>
                  <li><i class="devicon-jquery-plain-wordmark pr-2"></i>JQUERY</li>
                  <li><i class="devicon-javascript-plain pr-2"></i>JAVASCRIPT</li>
                  <li><i class="devicon-php-plain pr-2"></i>PHP</li>
                  <li><i class="devicon-mysql-plain-wordmark pr-2"></i>SQL</li>
                  <li><i class="devicon-github-plain-wordmark pr-2"></i>GITHUB</li>

                </ul>
              </div>
            </div>
            <div class="d-flex justify-content-around pb-5 size_language">
              <a href="https://promo-23.codeur.online/blog/" target="_blank" class="path_modal">Voir en ligne</a>
              <a href="https://github.com/JeanneThibert/blog-promo-inpulsa" target="_blank" class="path_modal">GitHub</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ABOUT -->

  <div id="about" class="wow fadeInRight section-about d-flex flex-column justify-content-center align-items-center">
    <div class="about_size">
      <h2 class="text-center title">À propos</h2>
      <hr class="text-center">
      <p class="text-center jeanne">Jeanne Thibert</p>
    </div>
    <div>
      <div class="row">
        <div
          class=" pt-5 mb-5 col-12 col-sm-12 col-md-12 col-lg-6 d-flex flex-column justify-content-start align-items-center">
          <img class="img-fluid " src="media/jeanne.png" width="500px" alt="photo de profil">
          <p class="description_about">Passioné par l'informatique depuis mon enfance, grâce à une expérience j'ai pu
            découvrir ma
            passion folle pour le
            développement web . Suite à ça j'ai effectué une formation à l'Access Code School de Vesoul. Actuellement en
            stage afin de valider mon titre professionnel de niveau 3 .
            Je recherche ensuite un emploi afin d'effectuer ma passion au quotidien.
          </p>
        </div>
        <div class="pt-5 col-12 col-sm-12 col-md-12 col-lg-6 d-flex flex-column techno_space ">
          <div class="d-flex justify-content-between techno">
            <p class="start"><i class="devicon-html5-plain pr-2"></i>HTML</p>
            <div class="progress">
              <div class="progress-bar progress-bar-striped " role="progressbar" aria-valuenow="100" aria-valuemin="0"
                aria-valuemax="100" style="width: 100%">100%</div>
            </div>
          </div>
          <div class="d-flex justify-content-between techno">
            <p class="start"><i class="devicon-css3-plain pr-2"></i>CSS</p>
            <div class="progress">
              <div class="progress-bar progress-bar-striped " role="progressbar" aria-valuenow="100" aria-valuemin="0"
                aria-valuemax="100" style="width: 100%">100%</div>
            </div>
          </div>
          <div class="d-flex justify-content-between techno">
            <p class="start"><i class="devicon-sass-original pr-2"></i>SASS</p>
            <div class="progress">
              <div class="progress-bar progress-bar-striped " role="progressbar" aria-valuenow="100" aria-valuemin="0"
                aria-valuemax="100" style="width: 100%">100%</div>
            </div>
          </div>
          <div class="d-flex justify-content-between techno">
            <p class="start"><i class="devicon-bootstrap-plain pr-2"></i>BOOTSTRAP</p>
            <div class="progress">
              <div class="progress-bar progress-bar-striped " role="progressbar" aria-valuenow="100" aria-valuemin="0"
                aria-valuemax="100" style="width: 100%">100%</div>
            </div>
          </div>
          <div class="d-flex justify-content-between techno">
            <p class="start"><i class="devicon-git-plain pr-2"></i>GITHUB</p>
            <div class="progress">
              <div class="progress-bar progress-bar-striped " role="progressbar" aria-valuenow="100" aria-valuemin="0"
                aria-valuemax="100" style="width: 100%">100%</div>
            </div>
          </div>
          <div class="d-flex justify-content-between techno">
            <p class="start"><i class="devicon-photoshop-line pr-2"></i>PHOTOSHOP</p>
            <div class="progress">
              <div class="progress-bar progress-bar-striped " role="progressbar" aria-valuenow="80" aria-valuemin="0"
                aria-valuemax="100" style="width: 80%">80%</div>
            </div>
          </div>
          <div class="d-flex justify-content-between techno">
            <p class="start"><i class="devicon-illustrator-line pr-2"></i>ILLUSTRATOR</p>
            <div class="progress">
              <div class="progress-bar progress-bar-striped " role="progressbar" aria-valuenow="80" aria-valuemin="0"
                aria-valuemax="100" style="width: 80%">80%</div>
            </div>
          </div>
          <div class="d-flex justify-content-between techno">
            <p class="start"><i class="devicon-php-plain pr-2"></i>PHP</p>
            <script src="node_modules/vivus/src/vivus.js"></script>
            <script src="js/anim.js"></script>
            <div class="progress">
              <div class="progress-bar progress-bar-striped " role="progressbar" aria-valuenow="70" aria-valuemin="0"
                aria-valuemax="100" style="width: 70%">70%</div>
            </div>
          </div>
          <div class="d-flex justify-content-between techno">
            <p class="start"><i class="devicon-javascript-plain pr-2"></i>JS</p>
            <div class="progress">
              <div class="progress-bar progress-bar-striped " role="progressbar" aria-valuenow="70" aria-valuemin="0"
                aria-valuemax="100" style="width: 70%">70%</div>
            </div>
          </div>
          <div class="d-flex justify-content-between techno">
            <p class="start"><i class="devicon-symfony-original pr-2"></i>SYMFONY</p>
            <div class="progress">
              <div class="progress-bar progress-bar-striped " role="progressbar" aria-valuenow="45" aria-valuemin="0"
                aria-valuemax="100" style="width: 45%">45%</div>
            </div>
          </div>
          <div class="d-flex justify-content-between techno">
            <p class="start"><i class="devicon-vuejs-plain pr-2"></i>VUE.JS</p>
            <div class="progress">
              <div class="progress-bar progress-bar-striped " role="progressbar" aria-valuenow="40" aria-valuemin="0"
                aria-valuemax="100" style="width: 40%">40%</div>
            </div>
          </div>
        </div>
        <div class="container path_pro">
          <div class="container-fluid">
            <div class="d-flex justify-content-around ">
              <a href="https://github.com/JeanneThibert" target="_blank" class="path_modal_about"><i
                  class="devicon-github-plain-wordmark pr-2"></i>GitHub</a>
              <a href="media/jeanne.pdf" target="_blank" class="path_modal_about"><i
                  class="far fa-file pr-2"></i>Curriculum Vitae</a>
              <a href="https://www.linkedin.com/in/jeanne-thibert" target="_blank" class="path_modal_about"><i
                  class="fab fa-linkedin pr-2"></i>Linkedin</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--CONTACT-->
  <div id="contact" class="section-contact d-flex flex-column justify-content-around align-items-center">
    <div class="title_contact">
      <h2 class="text-center title">Contact</h2>
      <hr class="text-center">
    </div>
    <div class="container">
      <div id="content">
        <iframe class="img-fluid"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d43370.246744554395!2d5.969232162569642!3d47.20405011483447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478d649a9c018d39%3A0x409ce34b313ed10!2sBeure!5e0!3m2!1sfr!2sfr!4v1553860349843!5m2!1sfr!2sfr"
          width="1050" height="1050" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

 

      <div class="row">
        <div class="col-lg-8  pt-5 mx-auto">
          <form class="pb-5" action="<?php if ($_SERVER['REQUEST_METHOD']=='POST') ?>" method="post">
            <div class="form-group">
              <label for="nom">Nom</label>
              <input type="text" class="form-control" id="nom" name="nom">
            </div>
            <div class="form-group">
              <label for="mail">Email</label>
              <input type="email" class="form-control" id="mail" name="mail">
            </div>
            <div class="form-group">
              <label for="sujet">Sujet</label>
              <input type="text" class="form-control" id="sujet" name="sujet">
            </div>
            <div class="form-group pb-5">
              <label for="message">Message</label>
              <textarea class="form-control" id="message" name="message" rows="3"></textarea>
            </div>
            <button class="learn-more" type="submit" name="submit"  >
              <div class="circle">
                <span class="icon arrow"></span>
              </div>
              <p class="button-text">Envoyer</p>
            </button>
          </form>
         
        </div>
      </div>

      <?php
// S'il y des données de postées
if ($_SERVER['REQUEST_METHOD']=='POST') {
   
  // Code PHP pour traiter l'envoi de l'email
  
  $nombreErreur = 0; // Variable qui compte le nombre d'erreur
  
  // Définit toutes les erreurs possibles
  if (!isset($_POST['mail'])) { // Si la variable "email" du formulaire n'existe pas (il y a un problème)
    $nombreErreur++; // On incrémente la variable qui compte les erreurs
    $erreur1 = '<p>Il y a un problème avec votre email.</p>';
  } else { // Sinon, cela signifie que la variable existe (c'est normal)
    if (empty($_POST['mail'])) { // Si la variable est vide
      $nombreErreur++; // On incrémente la variable qui compte les erreurs
      $erreur2 = '<p>Vous avez oublié de donner votre email.</p>';
    } else {
      if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        $nombreErreur++; // On incrémente la variable qui compte les erreurs
        $erreur3 = '<p>Cet email ne ressemble pas un email.</p>';
      }
    }
  }
  
  if (!isset($_POST['message'])) {
    $nombreErreur++;
    $erreur4 = '<p>Il y a un problème avec votre message.</p>';
  } else {
    if (empty($_POST['message'])) {
      $nombreErreur++;
      $erreur5 = '<p>Vous avez oublié de donner un message.</p>';
    }
  }
  
  
  
  if ($nombreErreur==0) { // S'il n'y a pas d'erreur
    // Récupération des variables et sécurisation des données
    $nom = htmlentities($_POST['nom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
    $mail = htmlentities($_POST['mail']);
    $sujet = htmlentities($_POST['sujet']);
    $message = htmlentities($_POST['message']);
    
    // Variables concernant l'email
    $destinataire = 'jeanne.t@codeur.online'; // Adresse email du webmaster
    $sujet = 'Titre du message'; // Titre de l'email
    $contenu = '<html><head><title>Titre du message</title></head><body>';
    $contenu .= '<p>Bonjour, vous avez reçu un message à partir de votre site web.</p>';
    $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
    $contenu .= '<p><strong>Email</strong>: '.$mail.'</p>';
    $contenu .= '<p><strong>Sujet</strong>: '.$sujet.'</p>';
    $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
    $contenu .= '</body></html>'; // Contenu du message de l'email
    
    // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
    
    @mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
    
    echo '<div class="row">';
    echo '<div class="mx-auto pb-5">';
    echo '<div class="alert alert-success" role="alert">';
    echo 'Votre message a été envoyé avec succès!';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    
 
   // Afficher un message pour indiquer que le message a été envoyé
  } else { // S'il y a un moins une erreur
   
    echo '<div class="row">';
    echo '<div class="mx-auto pb-5">';
    echo '<div class="alert alert-warning" role="alert">';
    echo '<p style="color:#ff0000;">Désolé, il y a eu '.$nombreErreur.' erreur(s). Voici le détail des erreurs:</p>';
    if (isset($erreur1)) echo '<p>'.$erreur1.'</p>';
    if (isset($erreur2)) echo '<p>'.$erreur2.'</p>';
    if (isset($erreur3)) echo '<p>'.$erreur3.'</p>';
    if (isset($erreur4)) echo '<p>'.$erreur4.'</p>';
    if (isset($erreur5)) echo '<p>'.$erreur5.'</p>';

    echo '</div>';
    echo '</div>';
    echo '</div>';
   
    
  }
}
?>
    </div>
  </div>
  

  <!--FOOTER-->

  <footer class="footer-basic-centered">

    <p class="footer-company-motto"><img class="img-fluid logo_blanc" src="../media/logo_blanc.png" width="200px" alt="logo blanc"></p>
    



    <p class="footer-company-name pt-5">Jeanne Thibert &copy; 2019 Tous droits réservés </p>
    <a href="mention.php" class="footer-company-name pt-5">Mentions Légales </a>

  </footer>

  <!-- SCRIPT WOO.JS & BOOTSTRAP -->
  <script src="js/menu.js"></script>
  <script src="node_modules/vivus/dist/vivus.js"></script>
  <script src="node_modules/vivus/src/pathformer.js"></script>
  <script src="js/anim.js"></script>
  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>