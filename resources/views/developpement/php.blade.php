@extends('layouts.template')
@section('content')
     <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner"> 
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!-- Include the above in your HEAD tag-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aladin">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">

<body>
    <header data-aos="slide-up" data-aos-duration="3000" data-aos-once="true">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-offset-1 text-bg" data-aos="fade-up" data-aos-duration="2800" data-aos-once="true">
                    <h1>{{$categorie->nom}}</h1></div>
                <div class="col-md-12 col-md-offset-1">
                    <p>Rejoindre nous sur nos réseaux sociaux</p>
                </div>
                <div class="col-md-2 col-md-offset-4 hidden-xs">
                    <button class="btn btn-default btn-block scroll-link" type="button" data-id="demo">Voir plus</button>
                </div>
                <div class="col-xs-3 col-xs-offset-4 hidden-sm hidden-md hidden-lg">
                    <button class="btn btn-default scroll-link" type="button" data-id="demo">Voir plus</button>
                </div>
            </div>
            <div class="row hidden-xs no-space">
                <div class="col-md-12">
                    <p ><i class="fa fa-instagram" data-bs-hover-animate="rubberBand"  style="padding-right:5px;"></i><i class="fa fa-facebook-official" data-bs-hover-animate="rubberBand" style="padding-right:5px;"></i><i class="fa fa-twitter-square" data-bs-hover-animate="rubberBand"></i></p>
                </div>
            </div>
        </div>
    </header>
    <section id="demo">
<div class="services-section">
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-5">
          <div class="row">
        
            <div class="col-md-12 col-sm-12" >
                <div class="service-box">
                   <div class="service-icon">
                      <i class="fa fa-diamond fa-3x social"></i>
                  </div>
                  <div class="service-content" >
                       <h3>Apprendre {{$categorie->nom}}</h3>
                       <p>
                          Il peut être difficile de savoir par où commencer à apprendre. Les parcours combinent des cours et des outils spécifiques en une seule expérience pour vous enseigner une compétence donnée du début à la fin. Les chemins sont alignés sur le niveau de connaissance d'un individu, pour vous aider, vous et votre équipe, à développer les bonnes compétences dans le bon ordre.
                        </p>
                   </div>
               </div> 
           </div>
        </div>
    </div>
        <div class="col-md-4 col-sm-12">
                    <img src="/imgg/imagepc.jpg" class="img-responsive" alt="">
                </div>
    </div>
</div>
</div>
<style type="text/css">
.services-section {padding-top:60px; padding-bottom:60px;background:#e2e2e2;}
.service-box h3 {
    color: #59626b;
    font-size: 20px;
    font-weight: normal;
    text-transform: capitalize;
    line-height: 36px;
    letter-spacing:1px;
    margin: 0;
}
.service-content p {margin-top:5px;margin-bottom: 20px;}
.service-icon{width: 50px;
    height: 50px;
    border: 1px solid #e4e4e4;
    text-align: center;
    line-height: 50px;
    font-size: 30px;
    float:left;
    display: table;
    color:#1A2226;
    opacity: 0.2;
    transform: rotate(-45deg);}
.service-content{ margin-top: 40px; margin-left:120px;}



</style>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>


    <style type="text/css">
        header {
  background-image:url("{{asset('/uploads/images/'.$categorie->image)}}");
  background-size:cover;
  background-position:center center;
  background-attachment:fixed;
}



header .row {
  
}

@media (max-width:767px) {
  header .row {
    
  }
}

header h1 {
  background-color:rgba(255,255,255,0.11);*/
  padding:10px;
  text-align:center;
  border:5px solid rgba(108,111,119,0.19);
  /*box-shadow:0px 0px 1px #333;*/
}

header h1 {
  font-family:'Aladin';
  font-size:71px;
  color:#fff;
  text-shadow:1px 1px 1px #333;
}

@media (max-width:767px) {
  header h1 {
    font-size:41px;
  }
}

header p {
  text-align:center;
  padding-top:20px;
  font-size:26px;
  font-weight:600;
  font-family:'Source Sans Pro';
  /*letter-spacing:2px;*/
  color:#f5f5f5;
  text-shadow:1px 1px 1px #111;
  padding-bottom:20px;
}

@media (max-width:767px) {
  header p {
    font-size:17px;
  }
}

header .row.no-space p {
  text-align:right;
}

header .row.no-space {
  margin-top:initial;
  bottom:0px;
  position:fixed;
  right:20px;
}

header .fa {
  color:#fff;
  text-shadow:1px 1px 1px #333;

}

header .btn.btn-default {
  background:transparent;
  color:#fff;
  text-shadow:1px 1px 1px #333;
  box-shadow:1px 1px 6px #333;
}

#demo {

  background-color:#f5f5f5;
}

@media (max-width:767px) {
  #demo {
   
  }
}

    </style>
    <script type="text/javascript">
        // Animation, to disable animation for mobile please write the *mobile* in *sr* on line 3
$(document).ready(function(){
    AOS.init({ disable: 'sr' });
    $('[data-bs-hover-animate]')
        .mouseenter( function(){ var elem = $(this); elem.addClass('animated ' + elem.attr('data-bs-hover-animate')) })
        .mouseleave( function(){ var elem = $(this); elem.removeClass('animated ' + elem.attr('data-bs-hover-animate')) });
});


// Scroll effect
$(document).ready(function() {
    // navigation click actions 
    $('.scroll-link').on('click', function(event){
        event.preventDefault();
        var sectionID = $(this).attr("data-id");
        scrollToID('#' + sectionID, 750);
    });
    // scroll to top action
    $('.scroll-top').on('click', function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop:0}, 'slow');         
    });

});
// scroll function
function scrollToID(id, speed){
    var offSet = 50;
    var targetOffset = $(id).offset().top - offSet;
    var mainNav = $('#main-nav');
    $('html,body').animate({scrollTop:targetOffset}, speed);
    if (mainNav.hasClass("open")) {
        mainNav.css("height", "1px").removeClass("in").addClass("collapse");
        mainNav.removeClass("open");
    }
}
if (typeof console === "undefined") {
    console = {
        log: function() { }
    };
}
    </script>


    </section>
    <!--=========== END COURSE BANNER SECTION ================-->   
    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="courseArchive">
      
          <!-- start course content -->
          <div class="text-center"> <strong><H3>Liste des cours en {{$categorie->nom}}</H3></strong></div>



               
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!--Include the above in your HEAD tag -->
<style type="text/css">
  /**** BASE ****/

a {
    color: #03a1d1;
    text-decoration: none!important;
}

/**** LAYOUT ****/
.list-inline>li {
    padding: 0 10px 0 0;
}
.container-pad {
    padding: 30px 15px;
}


/**** MODULE ****/
.bgc-fff {
   
}
.box-shad {
    -webkit-box-shadow: 1px 1px 0 rgba(0,0,0,.2);
    box-shadow: 1px 1px 0 rgba(0,0,0,.2);
}
.brdr {
    border: 1px solid #ededed;
}

/* Font changes */
.fnt-smaller {
    font-size: .9em;
}
.fnt-lighter {
    color: #bbb;
}

/* Padding - Margins */
.pad-10 {
    padding: 10px!important;
}
.mrg-0 {
    margin: 0!important;
}
.btm-mrg-10 {
    margin-bottom: 10px!important;
}
.btm-mrg-20 {
    margin-bottom: 20px!important;
}

/* Color  */
.clr-535353 {
    color: #535353;
}




/**** MEDIA QUERIES ****/
@media only screen and (max-width: 991px) {
    #property-listings .property-listing {
        padding: 5px!important;
    }
    #property-listings .property-listing a {
        margin: 0;
    }
    #property-listings .property-listing .media-body {
        padding: 10px;
    }
}

@media only screen and (min-width: 992px) {
    #property-listings .property-listing img {
        max-width: 180px;
    }
}

</style> 
        <div class="container container-pad" id="property-listings" >                  
                <div class="col-sm-8 col-lg-8"> 
                    <!-- Begin Listing: 609 W GRAVERS LN-->
                    @foreach($categorie->cours as $cour)
                    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing" style="background-color:rgb(199, 198, 199,0.2);margin-right: 20px;border-radius: 10px;margin: 8px;box-shadow: 2px 1.3px 0.9px #B5C9C9;">
                        <div class="media">
                            <a class="pull-left" href="#" target="_parent">
                            <img alt="image" class="img-responsive" src="{{asset('/uploads/images/'.$cour->image)}}"  style="height: 100px; width: 170px;"></a>
                            <div class="clearfix visible-sm"></div>
                            <div class="media-body fnt-smaller">
                                <a href="#" target="_parent"></a>
                                <h4 class="media-heading">
                                  <a href="#" target="_parent">{{$cour->titre}} <small class="pull-right">{{$cour->user->name}}</small><br>{{$cour->prix}}</a></h4>
                                <p class="hidden-xs">{{$cour->description}}</p><span class="fnt-smaller fnt-lighter fnt-arial">{{$cour->created_at->format('d/M/Y')}}</span><span>
                                  @php
                                  $A=$categorie->cours->count();
                                  $B=$cour->paye;
                                  $c=($A*$B)/100;
                                  
                                  @endphp

                                  @if($c< 0.2)
              <div class="review-block-rate">
                <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>

              </div>
                                  @endif

                                  @if($c>=0.2 && $c< 0.4)
                                                <div class="review-block-rate">
                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>

              </div>
                                  @endif

                                  @if($c>=0.4 && $c< 0.6)
                                                <div class="review-block-rate">
                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>

              </div>
                                  @endif

                                  @if($c>=0.6 && $c< 0.8)
                                                <div class="review-block-rate">
                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>

              </div>
                                  @endif


                                   @if($c>0.8)
              <div class="review-block-rate">
                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>

              </div>
                                  @endif

          

                                <span style="float: right;" class="btn btn-default disabled fa fa-eye">&nbsp;{{$cour->paye}}</span></span> 
                            </div>
                            <button type="button" class="btn btn-md btn-info " href="page8"> <a href="{{route('payementCour',['id'=>$cour->id])}}" style="color: white;"> Voir cours </a></button>
                        </div>
                    </div><!-- End Listing-->
                    @endforeach
            </div><!-- End row -->
        </div><!-- End container -->
    <!--=========== END COURSE BANNER SECTION ================-->
@endsection

