<!DOCTYPE html>
<html lang="en">
  <head>
    <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Wecode</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="/utilisateur/img/logo.png"/>

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="/utilisateur/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="/utilisateur/css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="/utilisateur/css/superslides.css">
    <!-- Slick slider css file -->
    <link href="/utilisateur/css/slick.css" rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="/utilisateur/css/animate.css"> 
    <!-- preloader -->
    <link rel="stylesheet" href="/utilisateur/css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="/utilisateur/css/jquery.tosrus.all.css" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="/utilisateur/css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="/utilisateur/style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
  </head>
   <body>    
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" >  <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->
              <!-- TEXT BASED LOGO 
              <a class="navbar-brand" href="index.html">We <span>Code</span></a>              
              <!-- IMG BASED LOGO  -->
                <a class="navbar-brand" href="/"><img src="{{ url('/') }}/utilisateur/img/logo.png" alt="logo" class="logo" style="width: 150px;"></a>       
                     
            </div> 
         <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li class="active"><a href="/">Accueil</a></li>
                <li><a href="{{ route('apropos') }}">A propos</a></li>
                <li><a href="/forums">Forum</a></li>                         
                @if(Auth::user())
                <li><a  href="/home">Profil</a></li> 
                
                @else
                <li><a  href="{{ route('login') }}">Connexion</a></li> 
                @endif 
               
              </ul>           
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================--> 


 <!--=========== BEGIN SLIDER SECTION ================-->
    <section id="slider">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="slider_area">
            <!-- Start super slider -->
            <div id="slides">
              <ul class="slides-container">                          
                <li>
                  <img src="/utilisateur/img/slider/coach.jpg" alt="img">
                   <div class="slider_caption">
                    <h2 id="1">WECODE LAND</h2>
                    <p style="font-size: 20px;">
                      Dans un monde ouvert, où l’emploi migre en fonction de la disponibilité des talents, il est vital pour un pays de former ses jeunes aux métiers d’avenir.
                      Sans aucun doute possible, ces métiers sont en grande partie les métiers 
                      du numérique. WeCode Land est une école à la carte et mise sur l’économie numérique pour aider les jeunes économiquement inactifs de 18 à 35 ans à rejoindre le marché du travail en accédant à des emplois numériques ou en lançant leur propre entreprise numérique
                    </p>           
                  </div>
                  </li></ul></div></div></div></div></section>
   <!--=========== BEGIN COURSE BANNER SECTION ================-->
    
      <section id="courseArchive">
      <div class="container">
        <div class="row">
          <!-- start course content -->
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="courseArchive_content">
              <!-- start blog archive  -->
              <div class="row">
                <!-- start single blog -->
                <div class="col-lg-12 col-12 col-sm-12">
                  <div class="single_blog">
                    <!-- End events slider -->
                    <h2 class="blog_title"><a href="blog-single.html"> À PROPOS DE NOUS</a></h2>
                 <blockquote>
                      <span class="fa fa-quote-left"></span>
                      Chez Wecode, nous croyons que tout le monde peut apprendre et que tout le monde a quelque chose à partager
                    </blockquote> 
              <p><br>Nous donnons la possibilité à tout le monde d'apprendre via des  vidéos sans dépenser autant d'argent. Nous laissons les enseignants télécharger leurs leçons et commencer à gagner de l'argent à partir de ce qu'ils savent. Nous encourageons les étudiants à nous dire ce qu'ils veulent savoir en créant une demande et gagner de l'argent pour cela.</p>
                    
                   

                

                    
                    
                  </div>
                  <!-- single blog nex & prev button -->
                 
                </div>
                <!-- End single blog -->            
              </div>
              <!-- end blog archive  -->
              <div class="related_post">
                <h2>Bénéfiques</h2>
              </div>
              <ul>
                      <li><span class="fa fa-angle-double-right"></span>Enregistre l'argent des étudiants</li>
                      <li><span class="fa fa-angle-double-right"></span>Vous pouvez enseigner ce que vous savez et gagner de l'argent partout dans le monde</li>
                      <li><span class="fa fa-angle-double-right"></span> Vous pouvez créer une demande et gagner de l'argent</li>
                      <li><span class="fa fa-angle-double-right"></span>
                          Vous apprenez à connaître des gens de partout</li>
                    

  
 


          
          <!-- End course content -->
              <!-- start related post -->
              <div class="related_post">
                <h2>Plus</h2>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="single_blog_archive wow fadeInUp">
                      <div class="blogimg_container">
                        <a class="blog_img" href="/register">
                           <img src="/utilisateur/img/apprenant.png" style="width: 50%;height: 20%;margin-left: 90px;" alt="img">
                        </a>
                      </div>
                      <h2 class="blog_title"><a href="/register">Apprenant</a></h2>
                      <div class="blog_commentbox">
                        <p><i class="fa fa-graduation-cap"></i>C'est le temps d'apprendre</p>
                                            
                      </div>
                      <p class="blog_summary">Nous vous fournissons tout ce que vous voulez apprendre et si nous ne le faisons pas, vous pouvez nous dire ce que vous voulez apprendre et vous pouvez gagner de l'argent avec cela.</p>
                                        </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="single_blog_archive wow fadeInUp">
                      <div class="blogimg_container">
                        <a class="blog_img" href="/registerF">
                          <img src="/utilisateur/img/formateur.png" style="width: 50%;height: 20%;margin-left: 100px;" alt="img">
                        </a>
                      </div>
                      <h2 class="blog_title"><a href="/registerF">Formateur</a></h2>
                      <div class="blog_commentbox">
                        <p><i class="fa fa-user-md"></i>être famous être dans wecode</p>
                        </div>
                      <p class="blog_summary">Téléchargez un didactéciels vidéo sur ce que vous pouvez enseigner aux autres, enseigner dans le monde entier et commencer à gagner de l'argent.</p>
                      
                    </div>
                  </div>
                </div> 
              </div> 
              <!-- start related post -->           
            </div>
          </div>
          <!-- End course content -->

          <!-- start course archive sidebar -->
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="courseArchive_sidebar">
              
              <!-- start single sidebar -->
              <div class="single_sidebar">
                <h2>Thèmes<span class="fa fa-angle-double-right"></span></h2>
                <ul>
                  @foreach(App\theme::all() as $Theme)
                  <div class="singCourse_content">
                    <span class="fa fa-graduation-cap"></span><span>{{$Theme->nom}}</span>
                    
                    </div>
                  @endforeach
                </ul>
              </div>
              <!-- End single sidebar -->
              <!-- start single sidebar -->
              
              <!-- End single sidebar -->
              </div>
          </div>
          <!-- start course archive sidebar -->
        </div>
      
   
    <!--=========== END CONTACT SECTION ================-->
     <div class="related_post">
                <h2>Images</h2>
              </div>
   <section id="gallery">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div id="gallerySLide" class="gallery_area">

                <a href="/utilisateur/img/image.png">
                  <img class="gallery_img" src="/utilisateur/img/image.png" alt="img" />
                <span class="view_btn">Voir</span>
                </a>
                <a href="/utilisateur/img/D.jpg">
                  <img class="gallery_img" src="/utilisateur/img/D.jpg" alt="img" />
                  <span class="view_btn">Voir</span>
                </a>
                <a href="/utilisateur/img/C.jpg">
                  <img class="gallery_img"  src="/utilisateur/img/C.jpg" alt="img" />
                  <span class="view_btn">Voir</span>
                </a>
                <a href="/utilisateur/img/A.jpg">
                  <img class="gallery_img" src="/utilisateur/img/A.jpg" alt="img" />
                  <span class="view_btn">Voir</span>
                </a>
                <a href="/utilisateur/img/B.jpg">
                  <img class="gallery_img" src="/utilisateur/img/B.jpg" alt="img" />
                <span class="view_btn">Voir</span>
                </a>
                <a href="/utilisateur/img/kk.jpg">
                  <img class="gallery_img" src="/utilisateur/img/kk.jpg" alt="img" />
                  <span class="view_btn">Voir</span>
                </a>
                <a href="/utilisateur/img/coachmoti.jpg">
                  <img class="gallery_img"  src="/utilisateur/img/coachmoti.jpg" alt="img" />
                  <span class="view_btn">Voir</span>
                </a>
                <a href="/utilisateur/img/antivirus.jpg">
                  <img class="gallery_img" src="/utilisateur/img/antivirus.jpg" alt="img" />
                  <span class="view_btn">Voir</span>
                </a>
               </div>
          </div>
        </div>
      </div>
    </section>

     </section>
      <div class="related_post">
                <h2>Localisation</h2>
              </div>
    <!--=========== BEGIN GOOGLE MAP SECTION ================-->
    <section id="googleMap">
      <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src=https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12779.119939810173!2d10.1799006!3d36.7998252!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd9757eb7cb9f933b!2sWeCode+Land!5e0!3m2!1sfr!2stn!4v1521814294633" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></iframe>
    </section>
    <!--=========== END GOOGLE MAP SECTION ================-->
    




<footer id="footer">
      <!-- Start footer top area -->
      <div class="footer_top">
        <div class="container">
          <div class="row">
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Qui sommes nous</h3>
                <p> WeCode ENTREPRISE est en mesure d'élaborer et de réaliser des formations sur mesure, adaptées aux besoins de l’entreprise et en étroite collaboration avec ses représentants. 
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>COMMUNAUTÉ</h3>
                <ul class="footer_widget_nav" style="font-family:sylfaen; ">
                  <li><a href="/forums">Forum</a></li>
                  <li><a href="/acceuil">Théme</a></li>
                  <li><a href="/login">Events</a></li>
                  <li><a href="/login">Examens</a></li>
                  
                </ul>
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Contact</h3>
                <ul class="footer_widget_nav">
                  <li><div class="contact_address wow fadeInRight" style="color: white;">
               <div class="address_group">
               <p>Addresse: Avenue Habib Bourguiba, Tunis</p>
               <p>Phone: 71 353 077</p>
               <p>Email:contact@wecode.com</p>
             </div></li>
                </ul>
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Social Links</h3>
                <ul class="footer_social">
                  <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="https://www.facebook.com/wecode.land/"><i class="fa fa-facebook"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip"  href="https://twitter.com/wecodeland"><i class="fa fa-twitter"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip"  href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Linkedin" class="soc_tooltip"  href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Youtube" class="soc_tooltip"  href="https://www.youtube.com/channel/UCFgbstJNkZqqF4lIk7vXNKQ"><i class="fa fa-youtube"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer top area -->

      <!-- Start footer bottom area -->
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomLeft">
                <p> Copyright &copy; Tous les droits sont protégés</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomRight">
                <p>par <a href="www.wecode.land" rel="nofollow">Wecodeland.com</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer bottom area -->
    </footer>
    <!--=========== END FOOTER SECTION ================--> 

  

    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Preloader js file -->
    <script src="/utilisateur/js/queryloader2.min.js" type="text/javascript"></script>
    <!-- For smooth animatin  -->
    <script src="/utilisateur/js/wow.min.js"></script>  
    <!-- Bootstrap js -->
    <script src="/utilisateur/js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="/utilisateur/js/slick.min.js"></script>
    <!-- superslides slider -->
    <script src="/utilisateur/js/jquery.easing.1.3.js"></script>
    <script src="/utilisateur/js/jquery.animate-enhanced.min.js"></script>
    <script src="/utilisateur/js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>   
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="/utilisateur/js/jquery.tosrus.min.all.js"></script>   
   
    <!-- Custom js-->
    <script src="/utilisateur/js/custom.js"></script>
    <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->










  </body>
</html>
