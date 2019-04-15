<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- META-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- TITILE -->
  <title>Jeanne T.</title>
  <!-- FONT-->
  <link href="https://fonts.googleapis.com/css?family=Cardo|Open+Sans+Condensed:300" rel="stylesheet">
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


</head>

<body>
  <!-- NAVIGATION -->

  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a class="menu pb-5" href="#">Accueil</a>
  <a class="menu pb-5" href="#">Projets</a>
  <a class="menu pb-5" href="#">À propos</a>
  <a class="menu pb-5" href="#">Contact</a>
  

</div>







 
  <!-- BACKGROUND HEADER -->
  <header id="header">
   
  
 
    <?php include("background.php"); ?>
    
  </header>

  <!-- PROJECT-->
  <section class="container">
    <div class="container-fluid pt-3 d-flex flex-column justify-content-center align-items-center">
      <div>
        <h2 class="text-center project title">Projets</h2>
        <hr class="text-center">
        <p class="text-center project content">Mes projets professionnel crée au cours de ma formation
          au sein de l'Access Code School à Vesoul du 12/09/2018 au 17/05/2019</p>
      </div>
      <div class="row pb-3">

        <div class=" col-12 col-sm-12 col-md-12 col-lg-12 pt-3" style="float:none;">
          <a class="portfolio-link" data-toggle="modal" href="#Modal1">
            <div class="wow zoomIn opacity">
              <img class="img-fluid " src="../media/access_movie.jpg" alt="lalaallala">
            </div>
          </a>
        </div>

        <div class=" col-12 col-sm-12 col-md-12 col-lg-12 pt-3" style="float:none;">
          <a class="portfolio-link" data-toggle="modal" href="#Modal2">
            <div class="wow zoomIn opacity">
              <img class="img-fluid " src="../media/avatar.jpg" alt="lalaallala">
            </div>
          </a>
        </div>

        <div class=" col-12 col-sm-12 col-md-12 col-lg-12 pt-3" style="float:none;">
          <a class="portfolio-link" data-toggle="modal" href="#Modal3">
            <div class="wow zoomIn opacity">
              <img class="img-fluid " src="../media/puissance4.jpg" alt="lalaallala">
            </div>
          </a>
        </div>

        <div class=" col-12 col-sm-12 col-md-12 col-lg-12 pt-3" style="float:none;">
          <a class="portfolio-link" data-toggle="modal" href="#Modal4">
            <div class="wow zoomIn opacity">
              <img class="img-fluid " src="../media/explorateur.jpg" alt="lalaallala">
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
          <div class="d-flex pt-3 pb-3 ">
            <h2 class="title_modal">Annuaire de film "Access Movie"</h2>
            <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                <div class="rl"></div>
              </div>
            </div>
          </div>
          <div>
            <p class="description_modal">Création d'un annuaire de film , trié par réalisateurs, acteurs et année de
              sortie </p>
            <div class="row">
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 pb-5">
                <img class="img-fluid " src="../media/access_movie_960.jpg" alt="lalaallala" width="500px">
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 pb-5">
                <ul class="langage_modal">
                  <p class="description_langage_modal">Langages et technologies utilisés dans ce projet :</p>
                  <li><i class="devicon-html5-plain-wordmark pr-2"></i>HTML</li>
                  <li><i class="devicon-css3-plain-wordmark pr-2"></i>CSS</li>
                  <li><i class="devicon-sass-original pr-2"></i>SASS</li>
                  <li><i class="devicon-php-plain pr-2"></i>PHP</li>
                  <li><i class="devicon-javascript-plain pr-2"></i>JAVASCRIPT</li>
                  <li><i class="devicon-github-plain-wordmark pr-2"></i>GITHUB</li>
                  <li><i class="devicon-bootstrap-plain-wordmark pr-2"></i>BOOTSTRAP</li>
                  <li>Architecture MVC "Model View Controller"</li>
                </ul>
              </div>
            </div>
            <div class="d-flex justify-content-around pb-5">
              <a href="#" class="path_modal">Voir en ligne</a>
              <a href="#" class="path_modal">GitHub</a>
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
          <div class="d-flex pt-3 pb-3 ">
            <h2 class="title_modal">Avatar avec formulaire de contact "The Villa Of Eden"</h2>
            <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                <div class="rl"></div>
              </div>
            </div>
          </div>
          <div>
            <p class="description_modal">Création d'un site fictif avec formulaire de contact </p>
            <div class="row">
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 pb-5">
                <img class="img-fluid " src="../media/avatar_960.jpg" alt="lalaallala" width="500px">
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 pb-5">
                <ul class="langage_modal">
                  <p class="description_langage_modal">Langages et technologies utilisés dans ce projet :</p>
                  <li><i class="devicon-html5-plain-wordmark pr-2"></i>HTML</li>
                  <li><i class="devicon-css3-plain-wordmark pr-2"></i>CSS</li>
                  <li><i class="devicon-sass-original pr-2"></i>SASS</li>
                  <li><i class="devicon-php-plain pr-2"></i>PHP</li>
                  <li><i class="devicon-javascript-plain pr-2"></i>JAVASCRIPT</li>
                  <li><i class="devicon-github-plain-wordmark pr-2"></i>GITHUB</li>
                  <li><i class="devicon-bootstrap-plain-wordmark pr-2"></i>BOOTSTRAP</li>
                </ul>
              </div>
            </div>
            <div class="d-flex justify-content-around pb-5">
              <a href="#" class="path_modal">Voir en ligne</a>
              <a href="#" class="path_modal">GitHub</a>
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
          <div class="d-flex pt-3 pb-3 ">
            <h2 class="title_modal">Jeu du Puissance4</h2>
            <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                <div class="rl"></div>
              </div>
            </div>
          </div>
          <div>
            <p class="description_modal">Création du jeu du Puissance4 avec différents mode de jeu : "Joueur1 vs
              Joueur2" / "Joueur vs Ordinateur" / "Joueur vs IA" </p>
            <div class="row">
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 pb-5">
                <img class="img-fluid " src="../media/puissance4_960.jpg" alt="lalaallala" width="500px">
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 pb-5">
                <ul class="langage_modal">
                  <p class="description_langage_modal">Langages et technologies utilisés dans ce projet :</p>
                  <li><i class="devicon-html5-plain-wordmark pr-2"></i>HTML</li>
                  <li><i class="devicon-css3-plain-wordmark pr-2"></i>CSS</li>
                  <li><i class="devicon-javascript-plain pr-2"></i>JAVASCRIPT</li>
                  <li><i class="devicon-github-plain-wordmark pr-2"></i>GITHUB</li>
                  <li><i class="devicon-bootstrap-plain-wordmark pr-2"></i>BOOTSTRAP</li>
                </ul>
              </div>
            </div>
            <div class="d-flex justify-content-around pb-5">
              <a href="#" class="path_modal">Voir en ligne</a>
              <a href="#" class="path_modal">GitHub</a>
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
          <div class="d-flex pt-3 pb-3 ">
            <h2 class="title_modal">Explorateur de fichier</h2>
            <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                <div class="rl"></div>
              </div>
            </div>
          </div>
          <div>
            <p class="description_modal">Création d'un explorateur de fichier , permettant de voir les différents
              fichiers et dossiers du projet</p>
            <div class="row">
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 pb-5">
                <img class="img-fluid " src="../media/explorateur_960.jpg" alt="lalaallala" width="500px">
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 pb-5">
                <ul class="langage_modal">
                  <p class="description_langage_modal">Langages et technologies utilisés dans ce projet :</p>
                  <li><i class="devicon-html5-plain-wordmark pr-2"></i>HTML</li>
                  <li><i class="devicon-css3-plain-wordmark pr-2"></i>CSS</li>
                  <li><i class="devicon-javascript-plain pr-2"></i>JAVASCRIPT</li>
                  <li><i class="devicon-github-plain-wordmark pr-2"></i>GITHUB</li>
                  <li><i class="devicon-bootstrap-plain-wordmark pr-2"></i>BOOTSTRAP</li>
                </ul>
              </div>
            </div>
            <div class="d-flex justify-content-around pb-5">
              <a href="#" class="path_modal">Voir en ligne</a>
              <a href="#" class="path_modal">GitHub</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ABOUT -->

  <div class="wow fadeInRight section-about d-flex flex-column justify-content-center align-items-center">
    <div>
      <h2 class="text-center title">À propos</h2>
      <hr class="text-center">
      <p class="text-center">Jeanne Thibert</p>
    </div>
    <div>
      <div class="row">
        <div
          class=" pt-5 mb-5 col-12 col-sm-12 col-md-12 col-lg-6 d-flex flex-column justify-content-start align-items-center">
          <img class="img-fluid" src="media/jeanne.png" width="500px">
          <p class="">Passioné par l'informatique depuis mon enfance, grâce à une expérience j'ai pu découvrir ma
            passion folle pour le
            développement web . Suite à ça j'ai effectué une formation à l'Access Code School de Vesoul. Actuellement en
            stage afin de valider mon titre professionnel de niveau 3 .
            Je recherche ensuite un emploi afin d'effectuer ma passion au quotidien.
          </p>
        </div>
        <div class="pt-5 col-12 col-sm-12 col-md-12 col-lg-6 d-flex flex-column ">
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
            <p class="start"><i class="devicon-php-plain pr-2"></i>PHP</p>  <script src="node_modules/vivus/src/vivus.js"></script>
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
        <div class="container">
          <div class="container-fluid">
            <div class="d-flex justify-content-around ">
              <a href="https://github.com/JeanneThibert" target="_blank" class="path_modal"><i
                  class="devicon-github-plain-wordmark pr-2"></i>GitHub</a>
              <a href="#" target="_blank" class="path_modal"><i class="far fa-file pr-2"></i>Curriculum Vitae</a>
              <a href="https://www.linkedin.com/in/jeanne-thibert" target="_blank" class="path_modal"><i
                  class="fab fa-linkedin pr-2"></i>Linkedin</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--CONTACT-->
  <div class="section-contact d-flex flex-column justify-content-around align-items-center">
    <div>
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
        <!--personal information-->
        <div
          class="col-12 col-sm-12 col-md-6 col-lg-6 pb-5 d-flex flex-column justify-content-start align-items-center">
          <div class="contact">
          <ul>
            <li class="size-contact"><i class="fas fa-mobile "></i><a class="phone_path" href="tel:+33769853855"> 07.69.85.38.55</a></li>
            <li class="size-contact"><i class="far fa-paper-plane "></i><a class="email_path"
                href="mailto:jeannedevelop25@gmail.com">jeannedevelop25@gmail.com</a></li>
          </ul>
          </div>
        </div> <script src="node_modules/vivus/src/vivus.js"></script>
        <script src="js/anim.js"></script>

        <!--CONTACT FORM-->
        <div
          class=" container col-12 col-sm-12 col-md-6 col-lg-6 pb-5 d-flex flex-column justify-content-start align-items-center">
          <form>
            <input class="contact_form" placeholder="Nom" type="text" value="" required>
            <input class="contact_form" placeholder="Prénom" type="text" value="" required>
            <input class="contact_form" placeholder="Email address" type="email" onblur="this.setAttribute('value', this.value);" value=""
              required>
            <span class="validation-text">Merci d'entrer une adresse email valide</span>
            <div class="flex">
              <textarea placeholder="Message" rows="1" required></textarea>
            </div>
            <button>Envoyer</button>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!--FOOTER-->

  <footer class="footer-basic-centered">

<p class="footer-company-motto"><img class="img-fluid logo_blanc" src="../media/logo_blanc.png" width="200px"></p>
<div class="container">
<div class=" d-flex justify-content-around pt-5">
  
<a href="https://github.com/JeanneThibert" target="_blank" class="path_modal"><i class="devicon-github-plain-wordmark pr-2"></i>GitHub</a>
<a href="#" target="_blank" class="path_modal"><i class="far fa-file pr-2"></i>Curriculum Vitae</a>
<a href="https://www.linkedin.com/in/jeanne-thibert" target="_blank" class="path_modal"><i class="fab fa-linkedin pr-2"></i>Linkedin</a>
</div>
</div>



<p class="footer-company-name pt-5">Jeanne Thibert &copy; 2019 Tous droits réservés </p>

</footer>

<!-- SCRIPT WOO.JS & BOOTSTRAP -->
<script src="js/menu.js"></script>
<script src="node_modules/vivus/dist/vivus.js"></script>
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