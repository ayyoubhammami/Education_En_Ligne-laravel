@extends('layouts.template')
@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style type="text/css">
    /* font Awesome http://fontawesome.io*/
@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css);
/* Animation.css*/
@import url(https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css);

.col-item {
  border: 1px solid #E1E1E1;
  background: #FFF;
  margin-bottom:12px;
}
.col-item .options {
  position:absolute;
  top:6px;
  right:22px;
}
.col-item .photo {
  overflow: hidden;
}
.col-item .photo .options {
  display:none;
}
.col-item .photo img {
  margin: 0 auto;
  width: 100%;
}

.col-item .options-cart {
  position:absolute;
  left:22px;
  top:6px;
  display:none;
}
.col-item .photo:hover .options,
.col-item .photo:hover .options-cart {
  display:block;
  -webkit-animation: fadeIn .5s ease;
  -moz-animation: fadeIn .5s ease;
  -ms-animation: fadeIn .5s ease;
  -o-animation: fadeIn .5s ease;
  animation: fadeIn .5s ease;
}
.col-item .options-cart-round {
  position:absolute;
  left:42%;
  top:22%;
  display:none;
}
.col-item .options-cart-round button {
  border-radius: 50%;
  padding:14px 16px;
  
}
.col-item .options-cart-round button .fa {
  font-size:22px;
}
.col-item .photo:hover .options-cart-round {
  display:block;
  -webkit-animation: fadeInDown .5s ease;
  -moz-animation: fadeInDown .5s ease;
  -ms-animation: fadeInDown .5s ease;
  -o-animation: fadeInDown .5s ease;
  animation: fadeInDown .5s ease;
}
.col-item .info {
  padding: 10px;
  margin-top: 1px;
}
.col-item .price-details {
  width: 100%;
  margin-top: 5px;
}
.col-item .price-details h1 {
  font-size: 14px;
  line-height: 20px;
  margin: 0;
  float:left;
}
.col-item .price-details .details {
  margin-bottom: 0px;
  font-size:12px;
}
.col-item .price-details span {
  float:right;
}
.col-item .price-details .price-new {
  font-size:16px;
}
.col-item .price-details .price-old {
  font-size:18px;
  text-decoration:line-through;
}
.col-item .separator {
  border-top: 1px solid #E1E1E1;
}

.col-item .clear-left {
  clear: left;
}
.col-item .separator a {
  text-decoration:none;
}
.col-item .separator p {
  margin-bottom: 0;
  margin-top: 6px;
  text-align: center;
}

.col-item .separator p i {
  margin-right: 5px;
}
.col-item .btn-add {
  width: 60%;
  float: left;
}
.col-item .btn-add a {
  display:inline-block !important;
}
.col-item .btn-add {
  border-right: 1px solid #E1E1E1;
}
.col-item .btn-details {
  width: 40%;
  float: left;
  padding-left: 10px;
}
.col-item .btn-details a {
  display:inline-block !important;
}
.col-item .btn-details a:first-child {
  margin-right:12px;
}
</style>
<!--Include the above in your HEAD tag-->








<style type="text/css">
    .share-it{
    position:fixed;
    min-height:200px;
    width:40px;
    background:#fff;
    right:0;
    z-index:9;
    top:40%;
}   
.share-it i{
    font-size:16px;
}
    
a.multipage{background:#ee3046; border:2px #ee3046 solid; color:#fff;}  
a.multipage:hover{background:#fff; border:2px #fff solid; color:#333;}  
    
    
    .facebook{margin:0 auto; float:left; margin-right:4px;}
.facebook  a{
    color:#fff;
    padding:10px 16px;
    background-color:#527aba;
    display:inline-block;
    transition:0.5s ease;
}
.facebook  a:hover{
    color:#fff;
    padding:10px 20px;
    margin-left:-20px;
    background-color:#527aba;
    display:inline-block;
}

.twitter{margin:0 auto; float:left; margin-right:4px;}
.twitter  a{
    color:#fff;
    padding:10px 16px;
    background-color:#77cdf1;
    display:inline-block;
    text-align:center;
    transition:0.5s ease;
}
.twitter  a:hover{
    color:#fff;
    padding:10px 20px;
    margin-left:-20px;
    background-color:#77cdf1;
    display:inline-block;
    text-align:center;

}

.google{margin:0 auto; float:left; margin-right:4px;}
.google  a{
    color:#fff;
    padding:10px 16px;
    background-color:#4c4c4c;
    display:inline-block;
    transition:0.5s ease;
}
.google  a:hover{
    color:#fff;
    padding:10px 20px;
    margin-left:-20px;
    background-color:#4c4c4c;
    display:inline-block;
    
}

.rss{margin:0 auto; float:left; margin-right:4px;}
.rss a{
    color:#fff;
    padding:10px 16px;
    background-color:#fe8f19;
    display:inline-block;
    transition:0.5s ease;
}
.rss a:hover{
    color:#fff;
    padding:10px 20px;
    margin-left:-20px;
    background-color:#fe8f19;
    display:inline-block;
}

.linkedin{margin:0 auto; float:left; margin-right:4px;}
.linkedin a{
    color:#fff;
    padding:10px 16px;
    background-color:#157ecc;
    display:inline-block;
    transition:0.5s ease;
}
.linkedin a:hover{
    color:#fff;
    padding:10px 20px;
    margin-left:-20px;
    background-color:#157ecc;
    display:inline-block;
    
}

.youtube{margin:0 auto; float:left; margin-right:4px;}
.youtube a{
    color:#fff;
    padding:10px 16px;
    background-color:#fe322f;
    display:inline-block;
    transition:0.5s ease;
}
.youtube a:hover{
    color:#fff;
    padding:10px 20px;
    margin-left:-20px;
    background-color:#fe322f;
    display:inline-block;
    transition:0.3s ease;
}

</style>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
    <div class="share-it">
        <div class="facebook">
         <a href="#"><i class="fa fa-facebook"></i></a>
        </div>
        <div class="twitter">
         <a href="#"><i class="fa fa-twitter"></i></a>
        </div>
        <div class="google hidden-xs">
         <a href="#"><i class="fa fa-google-plus"></i></a>
        </div>
        <div class="rss">
         <a href="#"><i class="fa fa-rss"></i></a>
        </div>
        <div class="linkedin">
         <a href="#"><i class="fa fa-linkedin"></i></a>
        </div>
        <div class="youtube cboxElement">
         <a href="#"><i class="fa fa-youtube"></i></a>
        </div>
      </div>
    </div>
</div>



<form action="/search" method="POST" role="search" style="margin-top: 20px;">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Rechercher... "> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form>





<div class="container">
    @if(isset($details))
        <p style="margin-top: 10px;font-family: ROBOTO; font-size: 20px;"> 
Les résultats de la recherche pour votre requête <b style="color: #004157;"> {{ $query }} </b> sont :</p>
    <h2></h2>
      @foreach($details as $cour)






               
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!--Include the above in your HEAD tag -->
<style type="text/css">
  /**** BASE ****/
body {
    color: #888;   
}
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
    background-color: #fff!important;
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
@media only screen and (max-width: 800px) {
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

@media only screen and (min-width: 800px) {
    #property-listings .property-listing img {
        max-width: 180px;
    }
}

</style> 
        <div class="container col-sm-10 col-lg-10 colxs-10 container-pad" id="property-listings" style="background-color:rgb(199, 198, 199,0.1);margin-right: 20px;border-radius: 10px;margin: 8px;box-shadow: 2px 1.3px 0.9px #B5C9C9;" >                  
                <div class="col-sm-8 col-lg-8"> 
                    <!-- Begin Listing: 609 W GRAVERS LN-->
                        <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                        <div class="media">
                            <a class="pull-left" href="#" target="_parent">
                            <img alt="image" class="img-responsive" src="{{asset('/uploads/images/'.$cour->image)}}"></a>
                            <div class="clearfix visible-sm"></div>
                            <div class="media-body fnt-smaller">
                                <a href="#" target="_parent"></a>
                                <h4 class="media-heading">
                                  <a href="#" target="_parent">{{$cour->titre}} <small class="pull-right">{{$cour->user->name}}</small><br>{{$cour->prix}}</a></h4>
                                <p class="hidden-xs">{{$cour->description}}</p><span class="fnt-smaller fnt-lighter fnt-arial">{{$cour->created_at->format('d/M/Y')}}</span>
                            </div>
                            <button type="button" class="btn btn-md btn-info " href="page8"> <a href="{{route('payementCour',['id'=>$cour->id])}}" style="color: white;"> Voir cours </a></button>
                        </div>
                    </div><!-- End Listing--></div></div> @endforeach
   
    @elseif(isset($message))
    <h1 style="font-family: ROBOTO;color: #FE322F">{{$message}}</h1>
    @endif
</div>









@if(Auth::user()->role->name=="Admin")


      <div class="row" style="margin-top: 20px;">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{App\Cour::where('id','!=','0')->get()->count()}}</h3>

              <p>Nembre du cours</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="#" class="small-box-footer">plus <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              @php
              $A=App\Cour::where('id','!=','0')->get()->count();
              $B=App\Cour::where('paye','!=','0')->get()->sum('paye');
              $C=($B/$A);
              $D=round($C,2);
              @endphp
              <h3>{{$D}}<sup style="font-size: 20px">%</sup></h3>

              <p>Cours payé</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">plus <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">

            <div class="inner">
              <h3>{{App\User::where('role_id','=','2')->get()->count()}}</h3>

              <p>Apprenants</p>
            </div>
            <div class="icon">
              <i class=" fa fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">plus <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{App\User::where('role_id','=','3')->get()->count()}}</h3>

              <p>Formateurs</p>
            </div>
            <div class="icon">
              <i class=" fa fa-user-secret"></i>
            </div>
            <a href="#" class="small-box-footer">plus <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>


@endif





































<!--titre -->



<div class="container ">
  <div class="title text-center">Les Derniers Cours</div>
  
</div>
<script>
    
    
    $(document).ready(function(){
  var mouseX, mouseY;
  var ww = $( window ).width();
  var wh = $( window ).height();
  var traX, traY;
  $(document).mousemove(function(e){
    mouseX = e.pageX;
    mouseY = e.pageY;
    traX = ((4 * mouseX) / 570) + 40;
    traY = ((4 * mouseY) / 570) + 50;
    console.log(traX);
    $(".title").css({"background-position": traX + "%" + traY + "%"});
  });
});

</script>
<style type="text/css">
  @import url(https://fonts.googleapis.com/css?family=Raleway:400,,800,900);



.title {
  font-weight: 800;
  color: transparent;
  font-size: 80px;
  background: url("/utilisateur/img/BK.jpg") repeat;
  
  -webkit-background-clip: text;
  position: relative;
  text-align: center;
  line-height: 90px;
  letter-spacing: -6px;
  
  margin-left: -220px;
}

.subtitle {
  display: block;
  text-align: center;
  text-transform: uppercase;
  padding-top: 10px;
}

</style>




<!--slide derniers cours-->



<style type="text/css">
  


  .slider {
  width: 100%;
  height: 100vh;
}
.slider .items-group {
  width: 100%;
  height: 100%;
  position: relative;
}
.slider .items-group .item {
  top: 0px;
  left: 0px;
  opacity: 0;
  width: 100%;
  height: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  overflow: hidden;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  visibility: hidden;
  position: relative;
  padding: 50px 20px;
  position: absolute;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  box-sizing: border-box;
}
.slider .items-group .item:hover .bg {
  opacity: 0.2;
}
.slider .items-group .item:hover .block {
  box-shadow: 0px 0px 50px #333;
}
.slider .items-group .item.active {
  opacity: 1;
  visibility: visible;
}
.slider .items-group .item .bg {
  top: 0px;
  left: 0px;
  opacity: 1;
  z-index: 0;
  width: 100%;
  height: 100%;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  position: absolute;
  -webkit-transform: scale(1.03);
          transform: scale(1.03);
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
}
.slider .items-group .item .blur {
  top: 0px;
  left: 0px;
  z-index: 0;
  width: 100%;
  height: 100%;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  -webkit-filter: blur(5px);
          filter: blur(5px);
  position: absolute;
  -webkit-transform: scale(1.03);
          transform: scale(1.03);
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
}
.slider .items-group .item .block {
  width: 100%;
  height: 100%;
  padding: 20px;
  color: #ffffff;
  -webkit-transition: box-shadow 0.5s;
  transition: box-shadow 0.5s;
  max-width: 300px;
  overflow: hidden;
  max-height: 450px;
  border-radius: 10px;
  -webkit-transform: scale(1.03);
          transform: scale(1.03);
  box-sizing: border-box;
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  box-shadow: none;
}
.slider .items-group .item .block .circleLight {
  top: 0px;
  left: 0px;
  opacity: 0;
  content: '';
  width: 100%;
  height: 100%;
  display: block;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  position: absolute;
  border-radius: 10px;
  background: -webkit-radial-gradient(80px 40px, circle, #ffffff, rgba(0, 0, 0, 0));
  background: radial-gradient(circle at 80px 40px, #ffffff, rgba(0, 0, 0, 0));
}
.slider .items-group .item .block .text {
  width: 100%;
  height: 100%;
  display: -webkit-box;
  margin-left: -30px;

  display: -ms-flexbox;
  display: flex;
  text-align: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  background-position: center;
  background-attachment: fixed;
}
.slider .items-group .item .block h2 {
  font-family: 'Oswald', sans-serif;
  font-size: 80px;
  margin-bottom: 0px;
}
.slider .items-group .item .block p {
  font-family: 'Open Sans', sans-serif;
  font-size: 15px;
}
.slider .items-group .item .block:hover {
  box-shadow: 0px 0px 70px #111;
}
.slider .items-group .item .block:hover .circleLight {
  opacity: 0.4;
}
.slider .navigations {
  
  width: 100%;
  position: absolute;
}
.slider .navigations .dots {
  height: 20px;
  padding: 10px 0px;
  text-align: center;
}
.slider .navigations .dots li {
  width: 10px;
  height: 10px;
  cursor: pointer;
  -webkit-transition: 0.3s;
  transition: 0.3s;
  background: #fff;
  border-radius: 50%;
  display: inline-block;
  vertical-align: middle;
}
.slider .navigations .dots li + li {
  margin-left: 10px;
}
.slider .navigations .dots li:hover {
  -webkit-filter: blur(2px);
          filter: blur(2px);
}
.slider .navigations .dots li.active {
  width: 15px;
  height: 15px;
}
.slider .navigations .dots li.active:hover {
  -webkit-filter: blur(0px);
          filter: blur(0px);
}





</style>



















<div class="slider">

  <div class="items-group">
    <div class="item">
      @foreach(Auth::user()->sugg() as $cour)
      <div class="block" style="margin: 20px;">
        <span class="circleLight"></span>
        <div class="text">
          

<div class="container">
  <div class="row">
        
      

        <div class="col-sm-3 col-lg-3 col-md-3"  >

            <article class="col-item" style="margin-right: 20px;">
              <div class="photo">
              <div class="options-cart-round">
                <a class="btn btn-lg btn-info" href="{{route('payementCour',['id'=>$cour->id])}}" >
                  <span class="fa fa-shopping-cart">voir</span>
                </a>
              </div>
              <a href="#"> <img src="{{asset('/uploads/images/'.$cour->image)}}" height="130"  alt="Product Image" /> </a>
            </div>
            <div class="info">
              <div class="row">
                <div class="price-details col-md-3">
                  <p class="details">
                   
                    <span class="pull-right-container"><span class="price-new" style="color: black;float: left;margin-left: -160px;">Prix:{{$cour->prix}}</span>
                  <small class="label pull-right bg-red">nouveau</small>
                </span>
                  </p>
                
                 
                </div>
              </div>
            </div>
          </article>
            <p class="text-center">{{$cour->categorie->theme->nom}}
             {{$cour->description}}
  
                  <h3>{{$cour->user->name}}</h3>
                                      @php
                                  $A=$cour->count();
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
 </p>
        </div>
        

  </div>
  </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="item">
      <div class="block">
        <span class="circleLight"></span>
        <div class="text">
          <h2></h2>
          <p></p>

        </div>
      </div>
    </div>
    <div class="item">
      <div class="block">
        <span class="circleLight"></span>
        <div class="text">
          
        </div>
      </div>
    </div>
    <div class="item">
      <div class="block">
        <span class="circleLight"></span>
        <div class="text">
       
        </div>
      </div>
    </div>
  </div>

  <div class="navigations">
    <ul class="dots"></ul>
  </div>
</div>
<script>
    // Hy! You can really help me if you donate me leastways 1 dollor :)
// -_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-



var mouse = {
      X   : 0,
      Y   : 0,
      CX  : 0,
      CY  : 0
    },
    block = {
      X   : mouse.X,
      Y   : mouse.Y,
      CX  : mouse.CX,
      CY  : mouse.CY
    },
    imags = [
      '/utilisateur/img/BK.jpg',
      '/utilisateur/img/BK.jpg',
      '/utilisateur/img/BK.jpg',
      '/utilisateur/img/BK.jpg'
    ];

$('.block').on('mousemove', function(e) {
  mouse.X   = (e.pageX - $(this).offset().left) - $('.block').width() / 2;
  mouse.Y   = (e.pageY - $(this).offset().top) - $('.block').height() / 2;
})

$('.block').on('mouseleave', function(e) {
  mouse.X   = mouse.CX;
  mouse.Y   = mouse.CY;
})

setInterval(function(){

  block.CY   += (mouse.Y - block.CY) / 12;
  block.CX   += (mouse.X - block.CX) / 12;

  $('.block .circleLight').css('background', 'radial-gradient(circle at ' + mouse.X + 'px ' + mouse.Y + 'px, #fff, transparent)')
  $('.block').css({
    transform : 'scale(1.03) translate(' + (block.CX * 0.05) + 'px, ' + (block.CY * 0.05) + 'px) rotateX(' + (block.CY * 0.05) + 'deg) rotateY(' + (block.CX * 0.05) + 'deg)'
  })

}, 20);

$('.slider .item').each(function(i){
  
  if(i == 0){
    
    $(this).addClass('active');
    $(this).next().addClass('next');
    $(this).prev().addClass('prev');
  }
  
  $(this).attr('id', 'slide-'+i);
  
  $(this).prepend(
    $('<div>', {class: 'blur', style: 'background-image: url(' + imags[i] + ');'}),
    $('<div>', {class: 'bg', style: 'background-image: url(' + imags[i] + ');'})
  )
  
  $(this).find('.block').css('background-image', 'url(' + imags[i] + ')')
  
  $('.navigations .dots').append(
    $('<li>', {class: i == 0 ? 'active' : '', id: i}).on('click', function(){
    var cSlide = $('.slider #slide-'+$(this).attr('id'));
      
      $('.navigations .dots li').removeClass('active');
      $(this).addClass('active');
      
      $('.slider .item').removeClass('active prev next');
      cSlide.addClass('active');
      cSlide.next().addClass('next');
      cSlide.prev().addClass('prev');
    })
  )
})

</script>


















  <div class="col-lg-12 col-xs-6 col-md-6">
  <h2 class="col-lg-12 col-xs-12 col-md-6">Nos thèmes</h2>
  <div class="col-lg-3 col-xs-6 col-md-6">
          <!-- small box -->
      @foreach(App\Theme::orderBy('created_at','ASC')->limit(3)->get() as $theme)
          <div class="small-box" style="background-color:  {{$theme->color}}">
            <div class="inner">
              <h4>{{$theme->nom}}</h4>
            </div>
            <div class="icon">
              <i class="glyphicon glyphicon-education"></i>
            </div>
            <a href="{{route('cours',['id'=>$theme->id])}}" class="small-box-footer">
              Plus <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
    @endforeach
  </div>
  <div class="col-lg-3 col-xs-6 col-md-6">
      @foreach(App\Theme::orderBy('created_at','desc')->limit(3)->get() as $theme)

          <div class="small-box "  style="background-color:  {{$theme->color}}">
            <div class="inner">
              <h4>{{$theme->nom}}</h4>
            </div>
            <div class="icon">
              <i class="glyphicon glyphicon-education"></i>
            </div>
            <a href="{{route('cours',['id'=>$theme->id])}}" class="small-box-footer">
              Plus <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
@endforeach
        </div>
</div>
    <div class="row col-md-12 col-xs-12 col-lg-12 col-xs-offset-2 col-md-offset-7 col-lg-offset-7" style="margin-top: -310px;">
        
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-info">
             
              <h3 class="">Derniers événements</h3>
              
            </div>
            <div class="box-footer no-padding ">
              <ul class="nav nav-stacked">
         
         @foreach(Auth::user()->eventt() as $event)

                <li><a href="{{route('readd',['id'=>$event->id])}}">{{$event->titre}} </a></li>                
                
              @endforeach
              <li class="text-center info"><a href="/eventtt">voir tous</a></li>
              </ul>
          
            </div>
          </div>
          <!-- /.widget-user -->
</div>

</div>

<div class="row">
        <div class="col-md-10 col-lg-10 col-lg-offset-1">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Pourquoi adopter le e-learning ?</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        Quels sont les avantages des cours en ligne ?
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="box-body"><h4>
                     <b> principal avantage :</b> avec la formation en ligne vous pouvez vous former seul, quand vous voulez et d’où vous voulez.<br> Il suffit, grâce à un accès Internet, de vous connecter sur le site. Une récente estimation des universités révèle que c’est l’aspect pratique des formations en ligne qui séduit. Selon cette étude, la plupart des stagiaires ont choisi ce mode de formation pour gérer leur temps à leur convenance (60 % des réponses) mais aussi par contrainte professionnelle ou géographique (respectivement 58 % et 48 %).<br>

                      <b>Le e-learning formation</b> est intimement lié à Internet. C’est un programme de formation qui est accessible par Internet. La notion de e-formation s'insère dans le cadre des formations dites "à distance".<br>

                      La réalité à établi que les chiffres avancés par les principaux instituts de sondages dans le domaine de la formation en ligne tiennent leurs engagements, et le secteur en pleine expansion reste la seule méthode d’offrir des programmes et des modules de formation aux adultes en situation de mobilité (voyage, mutation…)</h4>

                    </div>
                  </div>
                </div>
                <div class="panel box box-danger">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                        À qui est réservé le cours e learning ? 
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                  <div class="box-body"><h4>
                      Habituellement tout public, mais aussi les salariés d'entreprise,
                      - Les personnes qui se déplacent et voyagent…<br>

                      <b>Pourquoi préférer une formation en ligne ?</b><br> 
                      - un emploi du temps saturé - refus de la formation traditionnelle - aucune solution de formation traditionnelle à proximité<br>

                      <b>Pour quels types de formation </b><br>
                      
                      - le secrétariat médical, la santé au naturel, la psychologie, l’entreprise, les métiers du social, la préparation aux concours, les métiers de la nature...<br>
                      <ul style="list-style-type: circle;margin-left: 10px;" >
                     <li> Les atouts du cours en ligne</li>
                      <li>grand choix de cours</li>
                      <li>flexibilité (vous travaillez à votre rythme)</li>
                      <li>la liberté (où l’on veut et quand on veut)</li>
                      <li>pas de déplacement</li>
                      <li>accroissement des connaissances</li>
                     <li> pédagogie interactive</li>
                      <li>formations personnalisées</li>
                      <li>la formation chez soi ou à son bureau</li>
                      <li>diminuer les temps de formation</li>
                      <li>meilleur apprentissage, mémoriser plus facilement le cours</li>
                      <li>échanger avec d’autres élèves (forum)</li>
                      <li>capacité d’évaluer ses connaissances en fin de formation</li>
                    </ul>
                      <b>Pourquoi une formation e learning ?</b><br>
                      - Mise à niveau des compétences<br>
                      - Organiser son évolution professionnelle<br>
                      - Se former pour un métier nouveau<br>

                      <b>Accompagnement au niveau de la formation</b><br>  
                      - Après votre inscription, le tuteur ou la tutrice vous assure un suivi personnalisé et vous assiste dans votre progression.</h4>


                    </div>
                  </div>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                        Pourquoi une formation e learning ?
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                    <div class="box-body">
                     <h4>                    
                    - Mise à niveau des compétences<br>
                    - Organiser son évolution professionnelle<br>
                    - Se former pour un métier nouveau<br>

                    <b>Accompagnement au niveau de la formation</b><br>  
                    - Après votre inscription, le tuteur ou la tutrice vous assure un suivi personnalisé et vous assiste dans votre progression.</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>




























<div id="firstPage" class="ha-bg-parallax main_banner " data-type="background" data-speed="10">
      <div class="ha-parallax-body">
    <div id="carousel-example-generic" class="carousel slide vertical text-right" data-ride="carousel"> 
          <!-- Indicators -->
          <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" style="margin-left: 500px;" data-slide-to="0" class="active"></li><br>
        <li data-target="#carousel-example-generic" style="margin-left: 500px;" data-slide-to="1"></li><br>
        
      </ol>
          
          <!-- Wrapper for slides -->
          <div class="container" style="background-color: #ABBADE; width: 800px;">
        <div class="carousel-inner " role="listbox">
            <div class="item active text-center">
            <h3 white data-wow-delay="0.2s"><B>WE</B>CODE</h3>
            <h1 white data-wow-delay="0.2s">LAND</h1>
          </div>
          <div class="item text-center">
            <h3  white data-wow-delay="0.2s">créer VOTRE Carrières</h3>
            <h1 white data-wow-delay="0.2s">Avec Nous</h1>
          </div>
            </div>
      </div>
        </div>
  </div>
    </div>
    <script type="text/javascript">
      $(document).ready(function(){
var header = $('.main_banner ');

var backgrounds = new Array(
    'url(/utilisateur/img/we1.jpg)'
  , 'url(/utilisateur/img/php.png)'
   , 'url(/utilisateur/img/wc3.jpg)'
  
  
);

var current = 0;

function nextBackground() {
    current++;
    current = current % backgrounds.length;
    header.css('background-image', backgrounds[current]);
}
setInterval(nextBackground, 4000);

header.css('background-image', backgrounds[0]);
});
    </script>
    <style type="text/css">
      

.ha-bg-parallax {
  background: url(/utilisateur/img/we1.jpg) 20% -0 no-repeat fixed;
  -moz-background-size: 90%;
  -o-background-size: 20%;
  -webkit-background-size: 90%;
  background-size: 90%;
  min-height: 60px;
  margin: 0 auto;
  width: 20%;
  display: table;
  vertical-align: middle;
  position: relative;
}
.ha-parallax-body {

}
.vertical .carousel-inner {
  height: 30%;
}
.carousel.vertical .item {
  -webkit-transition: 0.6s ease-in-out top;
  -moz-transition: 0.6s ease-in-out top;
  -ms-transition: 0.6s ease-in-out top;
  -o-transition: 0.6s ease-in-out top;
  transition: 0.6s ease-in-out top;
}
.carousel.vertical .active {
  top: 0;
}
.carousel.vertical .next {
  top: 100%;
}
.carousel.vertical .prev {
  top: -100%;
}
.carousel.vertical .next.left, .carousel.vertical .prev.right {
  top: 0;
}
.carousel.vertical .active.left {
  top: -100%;
}
.carousel.vertical .active.right {
  top: 100%;
}
.carousel.vertical .item {
  left: 0;
}

.carousel-indicators li {
  float: none;

}
#carousel-example-generic h3 {
  font: normal 50px poppinsregular;
  color: #FFFFFF;
    text-shadow: 0 0 10px #666;
}
#carousel-example-generic h1 {
  font: normal 80px/61px poppinssemibold;
  color: #FFFFFF;

  text-shadow: 0 0 10px #666;
}
    </style>









<div> <div><h2 style="font-family: ROBOTO;color: #1B1C17;"> Dernier cours acheté</h2></div>
@if(Auth::user()->id == App\paymentA::where('id','!=','0')->first()->user_id)
      @foreach(App\Cour::all() as $cour)
      @if(Auth::user()->paymentA()->orderBy('created_at','desc')->first()->cour_id ==$cour->id)


        <div class="col-sm-3 col-lg-3 col-md-3" style="margin-left: 50px;">

            <article class="col-item">
              <div class="photo">
              <div class="options-cart-round">
                <a class="btn btn-lg btn-info" href="{{route('video',['id'=>$cour->id])}}" >
                  <span class="fa fa-shopping-cart">voir</span>
                </a>
              </div>
              <a href="#"> <img src="{{asset('/uploads/images/'.$cour->image)}}" height="130"  alt="Product Image" /> </a>
            </div>
            <div class="info">
              <div class="row">
                <div class="price-details col-md-6">
                  <p class="details">
                    {{$cour->description}}
                    <span class="pull-right-container">
                  <small class="label pull-right bg-red">nouveau</small>
                </span>
                  </p>
                  
                  <h1>{{$cour->user->name}}</h1>
                  <span class="price-new">{{$cour->prix}}</span>
                </div>
              </div>
            </div>
          </article>
            <p class="text-center">{{$cour->categorie->theme->nom}}</p>
        </div>
      
      @endif
      @endforeach
       @else
      <div class="col-lg-6 col-lg-offset-2">
        <h3 style="color: #FE8F19;">Vous n'avez pas aucun cours payée</h3>
      </div>
      @endif
     
     
  </div>      <!-- /.col -->        
@endsection