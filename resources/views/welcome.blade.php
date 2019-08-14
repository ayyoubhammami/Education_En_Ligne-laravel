
<!DOCTYPE html>
<html lang="en">
  <head>
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
                <span class="sr-only">Toggle navigation</span>
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
                <li class="active"><a href="/">ACCUEIl</a></li>
                                 
                <li><a href="/forums">Forum</a></li>
                <li><a href="{{ route('apropos') }}">A propos</a></li>
                                        
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
                  <img src="/utilisateur/img/slider/2.jpg" alt="img">
                   <div class="slider_caption">
                    <h2 id="1">WECODE LAND</h2>
                    <p style="font-size: 19px;">
                      Dans un monde ouvert, où l’emploi migre en fonction de la disponibilité des talents, il est vital pour un pays de former ses jeunes aux métiers d’avenir.
                      Sans aucun doute possible, ces métiers sont en grande partie les métiers 
                      du numérique. WeCode Land est une école à la carte et mise sur l’économie numérique pour aider les jeunes économiquement inactifs de 18 à 35 ans à rejoindre le marché du travail en accédant à des emplois numériques ou en lançant leur propre entreprise numérique
                    </p>           
                    
                  </div>
                  </li>
                <!-- Start single slider-->
                <li>
                  <img src="/utilisateur/img/slider/3.jpg" alt="img">
                   <div class="slider_caption slider_right_caption">
                    <p style="font-family: sylfaen,sans-serif;   font-size: 20px;
                        font-weight: 20;">
                      Integrer l'ecole WeCode Land et devenez un WeCoder. Que vous optez pour le cursus immersif à temps plein ou à temps partiel, l'univers du developpement web et mobile sera à votre portée.
                    </p>
                   
                  </div>
                </li>
                <!-- Start single slider-->
                <li>
                  <img src="/utilisateur/img/slider/4.jpg" alt="img">
                   <div class="slider_caption">
                    <h2 id="3" >NOTRE MISSION</h2>
                    <p style="font-family: sylfaen,sans-serif;   font-size: 20px;
                        font-weight: 20;">
                      La croissance économique future est précisément liée à la capacité d’innovation et de transformation digitale de nos entreprises.
                      Le manque de développeurs compétents retarde ces projets de transformation, eux-mêmes sources d’autres emplois.
                      Avec WeCode Land, nous voulons corriger cette injustice et aider la Tunisie et toute la région Mena à réaliser sa révolution numérique.</p>
                    
                  </div>
                </li>
              </ul>
              <nav class="slides-navigation">

                <a href="#" class="next"></a>
                <a href="#" class="prev"></a>
                
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END SLIDER SECTION ================-->

    <!--=========== BEGIN ABOUT US SECTION ================-->
    <section id="aboutUs">
      <div class="container">
        <div class="row">
        <!-- Start about us area -->
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="aboutus_area wow fadeInLeft">
            <h2 class="titile">WECODE ENTREPRISE</h2>
            <p>
              WeCode ENTREPRISE, créée en Janvier 2016 à l’attention des entreprises et de leurs ressources humaines, a pour principales missions d’assister les entreprises dans leurs fonctions et à développer les compétences de leurs ressources humaines afin d’être parmi les plus compétitives du marché. Selon la demande, WeCode ENTREPRISE est en mesure d'élaborer et de réaliser des formations sur mesure, adaptées aux besoins de l’entreprise et en étroite collaboration avec ses représentants, dans les domaines des TIC, du management et du business, de GRH et des langues.
            </p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="newsfeed_area wow fadeInRight">
            <ul class="nav nav-tabs feed_tabs" id="myTab2">
              <li class="active"><a href="#news" data-toggle="tab">Derniers cours</a></li>
              <li><a href="#notice" data-toggle="tab">Examens</a></li>
              <li><a href="#events" data-toggle="tab">Evènements</a></li>         
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <!-- Start news tab content -->
              <div class="tab-pane fade in active" id="news">                
                <ul class="news_tab">
      @foreach(App\Cour::orderBy('created_at','desc')->limit(3)->get() as $cour)
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="{{route('video',['id'=>$cour->id])}}">
                          <img class="media-object" src="{{asset('/uploads/images/'.$cour->image)}}" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="{{route('video',['id'=>$cour->id])}}">{{$cour->titre}}</a>
                       <span class="feed_date">{{$cour->created_at}}</span>
                      </div>
                    </div>                    
                  </li>
          @endforeach
                </ul>                
                <a class="see_all" href="/login">voir tous</a>
              </div>
              <!-- Start notice tab content -->  
              <div class="tab-pane fade " id="notice">
                <div class="single_notice_pane">
                  <ul class="news_tab">
             @foreach(App\Examen::where ('publier','1')->orderBy('created_at','desc')->limit(3)->get() as $examen)
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="{{route('payementExamen',['id'=>$examen->id])}}">
                            <img class="media-object" src="{{asset('/avatar/'.App\User::find($examen->user_id)->avatar)}}" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                        <a href="{{route('payementExamen',['id'=>$examen->id])}}">{{$examen->titre}}</a>
                         <span class="feed_date">{{$examen->created_at->format('d/M/Y')}}</span>
                        </div>
                      </div>                   
                    </li>
                @endforeach     
                                              
                  </ul>
                   <a class="see_all" href="/login"> Voir tous</a>
                </div>               
              </div>
              <!-- Start events tab content -->
              <div class="tab-pane fade " id="events">
                <ul class="news_tab">
    @foreach(App\Events::orderBy('created_at','desc')->limit(3)->get() as $event)
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="{{route('readd',['id'=>$event->id])}}">
                          <img class="media-object" src="{{ asset('/uploads/events/'.$event->image) }}" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="{{route('readd',['id'=>$event->id])}}">{{$event->titre}}</a>
                       <span class="feed_date">{{$event->date}}</span>
                      </div>
                    </div>
                  </li>
      @endforeach           
                </ul>
                <a class="see_all" href="/login"> Voir tous</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!--=========== END ABOUT US SECTION ================--> 

    <!--=========== BEGIN WHY US SECTION ================-->
    <section id="whyUs">
      <!-- Start why us top -->
      <div class="row">        
        <div class="col-lg-12 col-sm-12">
          <div class="whyus_top">
            <div class="container">
              <!-- Why us top titile -->
              <div class="row">
                <div class="col-lg-12 col-md-12"> 
                  <div class="title_area">
                    <h2 class="title_two">Pourquoi Nous</h2>
                    <span></span> 
                  </div>
                </div>
              </div>
              <!-- End Why us top titile -->
              <!-- Start Why us top content  -->
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-desktop"></span>
                    </div>
                    <h3>Technologie</h3>
                    <p>Des compétences prisées #developpement #web design #coaching #claud computing ..</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-users"></span>
                    </div>
                    <h3>Meilleurs formateurs</h3>
                    <p>Le leader tunisien de la formation en ligne avec 3 millions d’utilisateurs par mois</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-flask"></span>
                    </div>
                    <h3>Formation pratique</h3>
                    <p>L'expérience de l'apprentissage collaboratif l'accompagnement des mentors</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-support"></span>
                    </div>
                    <h3>Support</h3>
                    <p>Suivez et partagez l’évolution de vos salariés depuis votre tableau de bord</p>
                  </div>
                </div>
              </div>
              <!-- End Why us top content  -->
            </div>
          </div>
        </div>        
      </div>
      <!-- End why us top -->

      <!-- Start why us bottom -->
      <div class="row">        
        <div class="col-lg-12 col-sm-12">
          <div class="whyus_bottom">            
            <div class="slider_overlay"></div>
            <div class="container">               
              <div class="skills">                
                <!-- START SINGLE SKILL-->
                <div class="col-lg-3 col-md-3 col-sm-3">
                 <div class="single_skill wow fadeInUp">
                   <div id="myStat" data-dimension="150" data-text="" data-info="" data-width="10" data-fontsize="25" data-percent="35" data-fgcolor="#999" data-bgcolor="#fff"></div>
                    <h4>Cours en live</h4>                      
                  </div>
                </div>
                <!-- START SINGLE SKILL-->
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_skill wow fadeInUp">
                    <div id="myStathalf2" data-dimension="150" data-text="" data-info="" data-width="10" data-fontsize="25" data-percent="90" data-fgcolor="#999" data-bgcolor="#fff"></div>
                    <h4>Taux de réussite</h4>
                  </div>
                </div>
                <!-- START SINGLE SKILL-->
                <div class="col-lg-3 col-md-3 col-sm-3">                 
                  <div class="single_skill wow fadeInUp">
                    <div id="myStat2" data-dimension="150" data-text="" data-info="" data-width="10" data-fontsize="25" data-percent="100" data-fgcolor="#999" data-bgcolor="#fff"></div>
                    <h4>Engagement étudiant</h4>
                  </div>
                </div>
                <!-- START SINGLE SKILL-->
                <div class="col-lg-3 col-md-3 col-sm-3">                 
                  <div class="single_skill wow fadeInUp">
                    <div id="myStat3" data-dimension="150" data-text="" data-info="" data-width="10" data-fontsize="25" data-percent="65" data-fgcolor="#999" data-bgcolor="#fff"></div>
                    <h4>Cours certifier</h4>
                  </div>
                </div>
              </div>
            </div>            
          </div>
        </div>        
      </div>
      <!-- End why us bottom -->
    </section>
    <!--=========== END WHY US SECTION ================-->

    <!--=========== BEGIN OUR COURSES SECTION ================-->
    <section id="ourCourses">
      <div class="container">
       <!-- Our courses titile -->
        <div class="row">
          <div class="col-lg-12 col-md-12"> 
            <div class="title_area">
              <h2 class="title_two">Nos thèmes</h2>
              <span></span> 
            </div>
          </div>
        </div>
        <!-- End Our courses titile -->
        <!-- Start Our courses content -->
        
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="ourCourse_content">

              <ul class="course_nav">
                @foreach(App\theme::all() as $Theme)
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="{{asset('/uploads/themes/'.$Theme->image_th)}}" style="width: 100%;height: 150px;" />
                      <div class="mask">                         
                        <a href="/login" class="course_more">Voir cours</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <p class="singCourse_price"><span><a href="/register" style="color: #7DAAED;"> {{$Theme->nom}}</a></span></p>
                    <p>{{$Theme->slug}}</p>
                    </div>
                    <div class="singCourse_author">
                      <img src="{{ url('/') }}/utilisateur/img/suiv.png" alt="img">
                      <p><a href="/login">Voir cours</a></p>
                    </div>
                  </div>
                </li>  
                @endforeach
                       
              </ul>
            </div>
          </div>
        </div>
        <!-- End Our courses content -->
      </div>
    </section>
    <!--=========== END OUR COURSES SECTION ================-->  

    <!--=========== BEGIN OUR TUTORS SECTION ================-->
    <section id="ourTutors">
      <div class="container">
       <!-- Our courses titile -->
        <div class="row">
          <div class="col-lg-12 col-md-12"> 
            <div class="title_area">
              <h2 class="title_two">Nos Formatuers</h2>
              <span></span> 
            </div>
          </div>
        </div>
        <!-- End Our courses titile -->

        <!-- Start Our courses content -->
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="ourTutors_content">
              <!-- Start Tutors nav -->
              <ul class="tutors_nav">
            @foreach(App\User::where('role_id','=','3')->get() as $formateur)
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="{{asset('/avatar/'.$formateur->avatar)}}" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">{{$formateur->name}}</h3>
                      <span>{{$formateur->sepecialite}}</span>
                      <p>{{$formateur->email}}</p>
                    </div>
                    
                  </div>
                </li>
            @endforeach
                                           
              </ul>
            </div>
          </div>
        </div>
        <!-- End Our courses content -->
      </div>
    </section>
    <!--=========== END OUR TUTORS SECTION ================-->

    <!--=========== BEGIN STUDENTS TESTIMONIAL SECTION ================-->
    <section id="studentsTestimonial">
      <div class="container">
       <!-- Our courses titile -->
        <div class="row">
          <div class="col-lg-12 col-md-12"> 
            <div class="title_area">
              <h2 class="title_two">Ce que dit notre étudiant</h2>
              <span></span> 
            </div>
          </div>
        </div>
        <!-- End Our courses titile -->

        <!-- Start Our courses content -->
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="studentsTestimonial_content">              
              <div class="row">
                <!-- start single student testimonial -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_stsTestimonial wow fadeInUp">
                    <div class="stsTestimonial_msgbox">
                      <p>Des professeurs competents, qui savent être proches des éléves. Une bonne chronologie des notions a apprendre.</p>
                    </div>
                    <img class="stsTesti_img" src="/utilisateur/img/r.jpg" alt="img">
                    <div class="stsTestimonial_content">
                      <h3>Raouf Hammami</h3>                      
                      <span>Ex. Etudiant</span>
                      <p>Cloud Computing</p>
                    </div>
                  </div>
                </div>
                <!-- End single student testimonial -->
                <!-- start single student testimonial -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_stsTestimonial wow fadeInUp">
                    <div class="stsTestimonial_msgbox">
                      <p>C'est  génial ! Il faut être passionné d'informatique pour vouloir y aller et c'est quasiment un prérequis pour réussir ! Je la conseille fortement pour ceux qui comme moi sont passionnés de programmation et du monde du numérique en général</p>
                    </div>
                    <img class="stsTesti_img" src="/utilisateur/img/m.jpg" alt="img">
                    <div class="stsTestimonial_content">
                      <h3>Mounir Namouchi</h3>                      
                      <span>Ex. Etudiant</span>
                      <p>Sécurité</p>
                    </div>
                  </div>
                </div>
                <!-- End single student testimonial -->
                <!-- start single student testimonial -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_stsTestimonial wow fadeInUp">
                    <div class="stsTestimonial_msgbox">
                      <p>Une très bonne expérience dans l'ensemble, j'ai beaucoup appris</p>
                    </div>
                    <img class="stsTesti_img" src="/utilisateur/img/rr.jpg" alt="img">
                    <div class="stsTestimonial_content">
                      <h3>Rahma Ayari</h3>                      
                      <span>Ex. Etudiant</span>
                      <p>Développement</p>
                    </div>
                  </div>
                </div>
                <!-- End single student testimonial -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Our courses content -->
      </div>
    </section>
    <!--=========== END STUDENTS TESTIMONIAL SECTION ================-->   

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
<!-- ayçoub a changer -->
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
