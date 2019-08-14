@extends('layouts.template')
@section('content')


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-xs-12">
          <h3></h3>
            <!-- tabs --> 
            <div class="tabbable tabs-right">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#home" data-toggle="tab">Toute les examens</a></li>
                     <li><a href="#Développement" data-toggle="tab">Développement</a></li>
                    <li><a href="#Community" data-toggle="tab">Community Manager</a></li>
                     <li><a href="#Social" data-toggle="tab">Social Media</a></li>
                    <li><a href="#Cloud" data-toggle="tab">Cloud Computing</a></li>
                     <li><a href="#Coaching" data-toggle="tab">Coaching</a></li>
                    <li><a href="#Sécurité" data-toggle="tab">Sécurité</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="home">                
                        <div class="">
                                 <div class="row" style="margin-top: 50px;">
                                 </div>
                            <div class="container">
                                 <div class="row">
                                        <div class="[ col-xs-12 col-sm-offset-0 col-sm-8 ]">
                                            <ul class="event-list">
                                             @foreach(App\Examen::where ('publier','1')->orderBy('created_at','desc')->get() as $examen)
                                                <li>
                                                    <time datetime="2014-07-20" style=" background-color: <?php printf( "#%06X\n", mt_rand( 0, 0x222222 )); ?>">
                                                         <span class="day">{{ $examen->created_at->format('d')}}</span>
                                                         <span class="month">{{ $examen->created_at->format('M')}}</span>
                                                         <span class="year">{{ $examen->created_at->format('Y')}}</span>
                                                         <span class="time">ALL DAY</span>
                                                     </time>
                                                    <img alt="Independence Day" src="{{asset('/avatar/'.App\User::find($examen->user_id)->avatar)}}" />
                                                    <div class="info">
                                                         <h2 class="title"> <a href ="{{route('payementExamen',['id'=>$examen->id])}}">{{ $examen->titre }}</a></h2>
                                                        <div class="panel-heading">
                                                            <small style="float: right;"> réalisé par : {{App\User::find($examen->user_id)->name}}</small> 
                                                        </div>
                                                        <p class="desc"> {{$examen->categorie->nom}}</p>
                                                    </div>
                                                    <div class="social">
                                                        <ul>
                                                            <li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                                                            <li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                                                            <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                </div>
                             </div>

                        
                            <style type="text/css">
                            @import url("http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic");
                        @import url("//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css");
                      
                        
                        .event-list {
                            list-style: none;
                            font-family: 'Lato', sans-serif;
                            margin: 0px;
                            padding: 0px;
                        }
                        .event-list > li {
                            background-color: rgb(255, 255, 255);
                            box-shadow: 0px 0px 5px rgb(51, 51, 51);
                            box-shadow: 0px 0px 5px rgba(51, 51, 51, 0.7);
                            padding: 0px;
                            margin: 0px 0px 20px;
                        }
                        .event-list > li > time {
                            display: inline-block;
                            width: 100%;
                            color: rgb(255, 255, 255);
                            background-color: rgb(197, 44, 102);
                            padding: 5px;
                            text-align: center;
                            text-transform: uppercase;
                        }
                        .event-list > li:nth-child(even) > time {
                            background-color: rgb(165, 82, 167);
                        }
                        .event-list > li > time > span {
                            display: none;
                        }
                        .event-list > li > time > .day {
                            display: block;
                            font-size: 56pt;
                            font-weight: 100;
                            line-height: 1;
                        }
                        .event-list > li time > .month {
                            display: block;
                            font-size: 24pt;
                            font-weight: 900;
                            line-height: 1;
                        }
                        .event-list > li > img {
                            width: 100%;
                        }
                        .event-list > li > .info {
                            padding-top: 5px;
                            text-align: center;
                        }
                        .event-list > li > .info > .title {
                            font-size: 17pt;
                            font-weight: 700;
                            margin: 0px;
                        }
                        .event-list > li > .info > .desc {
                            font-size: 13pt;
                            font-weight: 300;
                            margin: 0px;
                        }
                        .event-list > li > .info > ul,
                        .event-list > li > .social > ul {
                            display: table;
                            list-style: none;
                            margin: 10px 0px 0px;
                            padding: 0px;
                            width: 100%;
                            text-align: center;
                        }
                        .event-list > li > .social > ul {
                            margin: 0px;
                        }
                        .event-list > li > .info > ul > li,
                        .event-list > li > .social > ul > li {
                            display: table-cell;
                            cursor: pointer;
                            color: rgb(30, 30, 30);
                            font-size: 11pt;
                            font-weight: 300;
                            padding: 3px 0px;
                        }
                        .event-list > li > .info > ul > li > a {
                            display: block;
                            width: 100%;
                            color: rgb(30, 30, 30);
                            text-decoration: none;
                        } 
                        .event-list > li > .social > ul > li {    
                            padding: 0px;
                        }
                        .event-list > li > .social > ul > li > a {
                            padding: 3px 0px;
                        } 
                        .event-list > li > .info > ul > li:hover,
                        .event-list > li > .social > ul > li:hover {
                            color: rgb(30, 30, 30);
                            background-color: rgb(200, 200, 200);
                        }
                        .facebook a,
                        .twitter a,
                        .google-plus a {
                            display: block;
                            width: 100%;
                            color: rgb(75, 110, 168) !important;
                        }
                        .twitter a {
                            color: rgb(79, 213, 248) !important;
                        }
                        .google-plus a {
                            color: rgb(221, 75, 57) !important;
                        }
                        .facebook:hover a {
                            color: rgb(255, 255, 255) !important;
                            background-color: rgb(75, 110, 168) !important;
                        }
                        .twitter:hover a {
                            color: rgb(255, 255, 255) !important;
                            background-color: rgb(79, 213, 248) !important;
                        }
                        .google-plus:hover a {
                            color: rgb(255, 255, 255) !important;
                            background-color: rgb(221, 75, 57) !important;
                        }

                        @media (min-width: 768px) {
                            .event-list > li {
                                position: relative;
                                display: block;
                                width: 100%;
                                height: 120px;
                                padding: 0px;
                            }
                            .event-list > li > time,
                            .event-list > li > img  {
                                display: inline-block;
                            }
                            .event-list > li > time,
                            .event-list > li > img {
                                width: 120px;
                                float: left;
                            }
                            .event-list > li > .info {
                                background-color: rgb(245, 245, 245);
                                overflow: hidden;
                            }
                            .event-list > li > time,
                            .event-list > li > img {
                                width: 120px;
                                height: 120px;
                                padding: 0px;
                                margin: 0px;
                            }
                            .event-list > li > .info {
                                position: relative;
                                height: 120px;
                                text-align: left;
                                padding-right: 40px;
                            }   
                            .event-list > li > .info > .title, 
                            .event-list > li > .info > .desc {
                                padding: 0px 10px;
                            }
                            .event-list > li > .info > ul {
                                position: absolute;
                                left: 0px;
                                bottom: 0px;
                            }
                            .event-list > li > .social {
                                position: absolute;
                                top: 0px;
                                right: 0px;
                                display: block;
                                width: 40px;
                            }
                            .event-list > li > .social > ul {
                                border-left: 1px solid rgb(230, 230, 230);
                            }
                            .event-list > li > .social > ul > li {          
                                display: block;
                                padding: 0px;
                            }
                            .event-list > li > .social > ul > li > a {
                                display: block;
                                width: 40px;
                                padding: 10px 0px 9px;
                            }
                        }
                        </style>   





         
                    </div>
                </div> 
            
                
                            
                    <div class="tab-pane " id="Développement">                
                        
                                 <div class="row" style="margin-top: 50px;">
                                 </div>
                            <div class="container">
                                 <div class="row">
                                        <div class="[ col-xs-12 col-sm-offset-0 col-sm-8 ]">
                                            <ul class="event-list">
                                             @foreach(App\Examen::where ('publier','1')->orderBy('created_at','desc')->get() as $examen)
                                             @if($examen->categorie->theme->id==1)
                                                <li>
                                                    <time datetime="2014-07-20" style=" background-color: <?php printf( "#%06X\n", mt_rand( 0, 0x222222 )); ?>">
                                                         <span class="day">{{ $examen->created_at->format('d')}}</span>
                                                         <span class="month">{{ $examen->created_at->format('M')}}</span>
                                                         <span class="year">{{ $examen->created_at->format('Y')}}</span>
                                                         <span class="time">ALL DAY</span>
                                                     </time>
                                                    <img alt="Independence Day" src="{{asset('/avatar/'.App\User::find($examen->user_id)->avatar)}}" />
                                                    <div class="info">
                                                         <h2 class="title"> <a href ="{{route('payementExamen',['id'=>$examen->id])}}">{{ $examen->titre }}</a></h2>
                                                        <div class="panel-heading">
                                                            <small style="float: right;"> réalisé par :<a href="#"> {{App\User::find($examen->user_id)->name}}</a></small> 
                                                        </div>
                                                        <p class="desc"> {{$examen->categorie->nom}}</p>
                                                    </div>
                                                    <div class="social">
                                                        <ul>
                                                            <li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                                                            <li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                                                            <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                </div>
                             
         
                    </div>
                </div> 
                    <div class="tab-pane active" id="Community">                
                        
                                 <div class="row" style="margin-top: 50px;">
                                 </div>
                            <div class="container">
                                 <div class="row">
                                        <div class="[ col-xs-12 col-sm-offset-0 col-sm-8 ]">
                                            <ul class="event-list">
                                             @foreach(App\Examen::where ('publier','1')->orderBy('created_at','desc')->get() as $examen)
                                             @if($examen->categorie->theme->id==2)
                                                <li>
                                                    <time datetime="2014-07-20" style=" background-color: <?php printf( "#%06X\n", mt_rand( 0, 0x222222 )); ?>">
                                                         <span class="day">{{ $examen->created_at->format('d')}}</span>
                                                         <span class="month">{{ $examen->created_at->format('M')}}</span>
                                                         <span class="year">{{ $examen->created_at->format('Y')}}</span>
                                                         <span class="time">ALL DAY</span>
                                                     </time>
                                                    <img alt="Independence Day" src="{{asset('/avatar/'.App\User::find($examen->user_id)->avatar)}}" />
                                                    <div class="info">
                                                         <h2 class="title"> <a href ="{{route('payementExamen',['id'=>$examen->id])}}">{{ $examen->titre }}</a></h2>
                                                        <div class="panel-heading">
                                                            <small style="float: right;"> réalisé par :<a href="#"> {{App\User::find($examen->user_id)->name}}</a></small> 
                                                        </div>
                                                        <p class="desc"> {{$examen->categorie->nom}}</p>
                                                    </div>
                                                    <div class="social">
                                                        <ul>
                                                            <li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                                                            <li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                                                            <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                </div>
                             
         
                    </div>
                </div> 
                                    <div class="tab-pane active" id="Social">                
                                 <div class="row" style="margin-top: 50px;">
                                 </div>
                            <div class="container">
                                 <div class="row">
                                        <div class="[ col-xs-12 col-sm-offset-0 col-sm-8 ]">
                                            <ul class="event-list">
                                             @foreach(App\Examen::where ('publier','1')->orderBy('created_at','desc')->get() as $examen)
                                             @if($examen->categorie->theme->id==3)
                                                <li>
                                                    <time datetime="2014-07-20" style=" background-color: <?php printf( "#%06X\n", mt_rand( 0, 0x222222 )); ?>">
                                                         <span class="day">{{ $examen->created_at->format('d')}}</span>
                                                         <span class="month">{{ $examen->created_at->format('M')}}</span>
                                                         <span class="year">{{ $examen->created_at->format('Y')}}</span>
                                                         <span class="time">ALL DAY</span>
                                                     </time>
                                                    <img alt="Independence Day" src="{{asset('/avatar/'.App\User::find($examen->user_id)->avatar)}}" />
                                                    <div class="info">
                                                         <h2 class="title"> <a href ="{{route('payementExamen',['id'=>$examen->id])}}">{{ $examen->titre }}</a></h2>
                                                        <div class="panel-heading">
                                                            <small style="float: right;"> réalisé par :<a href="#"> {{App\User::find($examen->user_id)->name}}</a></small> 
                                                        </div>
                                                        <p class="desc"> {{$examen->categorie->nom}}</p>
                                                    </div>
                                                    <div class="social">
                                                        <ul>
                                                            <li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                                                            <li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                                                            <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                </div>
                             
         
                    </div>
                </div> 



                                    <div class="tab-pane active" id="Cloud">                
                        
                                 <div class="row" style="margin-top: 50px;">
                                 </div>
                            <div class="container">
                                 <div class="row">
                                        <div class="[ col-xs-12 col-sm-offset-0 col-sm-8 ]">
                                            <ul class="event-list">
                                             @foreach(App\Examen::where ('publier','1')->orderBy('created_at','desc')->get() as $examen)
                                             @if($examen->categorie->theme->id==4)
                                                <li>
                                                    <time datetime="2014-07-20" style=" background-color: <?php printf( "#%06X\n", mt_rand( 0, 0x222222 )); ?>">
                                                         <span class="day">{{ $examen->created_at->format('d')}}</span>
                                                         <span class="month">{{ $examen->created_at->format('M')}}</span>
                                                         <span class="year">{{ $examen->created_at->format('Y')}}</span>
                                                         <span class="time">ALL DAY</span>
                                                     </time>
                                                    <img alt="Independence Day" src="{{asset('/avatar/'.App\User::find($examen->user_id)->avatar)}}" />
                                                    <div class="info">
                                                         <h2 class="title"> <a href ="{{route('payementExamen',['id'=>$examen->id])}}">{{ $examen->titre }}</a></h2>
                                                        <div class="panel-heading">
                                                            <small style="float: right;"> réalisé par :<a href="#"> {{App\User::find($examen->user_id)->name}}</a></small> 
                                                        </div>
                                                        <p class="desc"> {{$examen->categorie->nom}}</p>
                                                    </div>
                                                    <div class="social">
                                                        <ul>
                                                            <li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                                                            <li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                                                            <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                </div>
                             
         
                    </div>
                </div> 
                
                                    <div class="tab-pane active" id="Coaching">                
                        
                                 <div class="row" style="margin-top: 50px;">
                                 </div>
                            <div class="container">
                                 <div class="row">
                                        <div class="[ col-xs-12 col-sm-offset-0 col-sm-8 ]">
                                            <ul class="event-list">
                                             @foreach(App\Examen::where ('publier','1')->orderBy('created_at','desc')->get() as $examen)
                                             @if($examen->categorie->theme->id==5)
                                                <li>
                                                    <time datetime="2014-07-20" style=" background-color: <?php printf( "#%06X\n", mt_rand( 0, 0x222222 )); ?>">
                                                         <span class="day">{{ $examen->created_at->format('d')}}</span>
                                                         <span class="month">{{ $examen->created_at->format('M')}}</span>
                                                         <span class="year">{{ $examen->created_at->format('Y')}}</span>
                                                         <span class="time">ALL DAY</span>
                                                     </time>
                                                    <img alt="Independence Day" src="{{asset('/avatar/'.App\User::find($examen->user_id)->avatar)}}" />
                                                    <div class="info">
                                                         <h2 class="title"> <a href ="{{route('payementExamen',['id'=>$examen->id])}}">{{ $examen->titre }}</a></h2>
                                                        <div class="panel-heading">
                                                            <small style="float: right;"> réalisé par :<a href="#"> {{App\User::find($examen->user_id)->name}}</a></small> 
                                                        </div>
                                                        <p class="desc"> {{$examen->categorie->nom}}</p>
                                                    </div>
                                                    <div class="social">
                                                        <ul>
                                                            <li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                                                            <li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                                                            <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                </div>
                             
         
                    </div>
                </div> 
                                 <div class="tab-pane active" id="Sécurité">                
                        <div class="">
                                 <div class="row" style="margin-top: 50px;">
                                 </div>
                            <div class="container">
                                 <div class="row">
                                        <div class="[ col-xs-12 col-sm-offset-0 col-sm-8 ]">
                                            <ul class="event-list">
                                             @foreach(App\Examen::where ('publier','1')->orderBy('created_at','desc')->get() as $examen)
                                             @if($examen->categorie->theme->id==7)
                                                <li>
                                                    <time datetime="2014-07-20" style=" background-color: <?php printf( "#%06X\n", mt_rand( 0, 0x222222 )); ?>">
                                                         <span class="day">{{ $examen->created_at->format('d')}}</span>
                                                         <span class="month">{{ $examen->created_at->format('M')}}</span>
                                                         <span class="year">{{ $examen->created_at->format('Y')}}</span>
                                                         <span class="time">ALL DAY</span>
                                                     </time>
                                                    <img alt="Independence Day" src="{{asset('/avatar/'.App\User::find($examen->user_id)->avatar)}}" />
                                                    <div class="info">
                                                         <h2 class="title"> <a href ="{{route('payementExamen',['id'=>$examen->id])}}">{{ $examen->titre }}</a></h2>
                                                        <div class="panel-heading">
                                                            <small style="float: right;"> réalisé par :<a href="#"> {{App\User::find($examen->user_id)->name}}</a></small> 
                                                        </div>
                                                        <p class="desc"> {{$examen->categorie->nom}}</p>
                                                    </div>
                                                    <div class="social">
                                                        <ul>
                                                            <li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                                                            <li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                                                            <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                </div>
                             </div>
         
                    </div>
                </div> 


            </div>
        </div>
    </div>
  </div>
</div>

@endsection