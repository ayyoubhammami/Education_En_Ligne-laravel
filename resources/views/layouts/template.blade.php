<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WeCode</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link id="switcher" href="/utilisateur/css/themes/default-theme.css" rel="stylesheet">
  <!-- Main structure css file -->
  <link rel="shortcut icon" type="image/icon" href="/utilisateur/img/logo.png"/>
  <link href="/utilisateur/style.css" rel="stylesheet">
        <!-- end-->      
  <link rel="stylesheet" href="/admin/adminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/admin/adminLTE/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/admin/adminLTE/bower_components/Ionicons/css/ionicons.min.css">
 <!--tableau--> 
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/admin/adminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/admin/adminLTE/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/admin/adminLTE/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/admin/adminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/admin/adminLTE/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/admin/adminLTE/dist/css/skins/_all-skins.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/admin/adminLTE/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="/admin/adminLTE/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="/" class="logo" style="background-color:#3c8dbc!important">
        <span class="logo-mini"><b>W</b>C</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>We</b>Code</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" style="background-color:#3c8dbc!important" >
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" style="background-color:#3c8dbc!important">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
            <li ><a href="/" style="color: white;">ACCUEIl</a></li>
            <li ><a href="/forums" style="color: white;" >FORUM</a></li>
           <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: white;">
                    <i class="fa fa-envelope-o"></i>
                      <span class="label label-success">{{App\Message::where('reciever',Auth::user()->id)->get()->count()}}</span>
                 </a>
                <ul class="dropdown-menu">                    
                  <li class="header"> vous avez {{App\Message::where('reciever',Auth::user()->id)->get()->count()}} message</li>
                  <li>
                  <!-- inner menu: contains the actual data -->
                   <ul class="menu">
                   @foreach(App\Message::where('reciever',Auth::user()->id)->orderBy('created_at','desc')->get() as $message)
                      <li><!-- start message -->    
                        <a href="{{route('read',['id'=>$message->id])}}">
                          <div class="pull-left">
                            <img src="{{asset('/avatar/'.App\User::find($message->sender)->avatar)}}" class="img-circle" alt="User Image">
                          </div>
                          <h4 style="color: white;">
                            {{App\User::find($message->sender)->name}}
                            <small><i class="fa fa-clock-o"></i>{{\Carbon\Carbon::createFromTimeStamp(strtotime($message->created_at))->diffForHumans() }}</small>
                          </h4>
                          <p style="color: white;"><b>{{$message->subject}}</b></p>
                        </a>
                       </li>
                    @endforeach
                    </ul>
                  </li>
                <li class="footer"><a href="/inbox" style="color: white;">voir tous les message</a></li>
              </ul>
           </li>
          <!-- Notifications: style can be found in dropdown.less -->
        <li class="dropdown notifications-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: white;">
              <i class="fa fa-bell-o"></i>
                <span class="label label-warning">{{App\Events::get()->count()}}</span>
          </a>
          <ul class="dropdown-menu" >
            <li class="header" >vous avez {{App\Events::get()->count()}} notifiactions </li>
              <li>  <!-- inner menu: contains the actual data -->
                <ul class="menu">
                 @foreach(App\Events::orderBy('created_at','desc')->get() as $event)
                 <li>
                  <a href="{{route('readd',['id'=>$event->id])}}">
                    <div class="pull-left">
                      <img src="{{asset('/avatar/'.App\User::find($event->user_id)->avatar)}}" class="img-circle" alt="User Image" width="30">
                    </div>
                    <h4 style="color: white;">
                      {{App\User::find($event->user_id)->name}}
                      <small><i class="fa fa-clock-o"></i>{{\Carbon\Carbon::createFromTimeStamp(strtotime($event->created_at))->diffForHumans() }}</small>
                    </h4>
                    <p style="color: white;"><b>{{$event->titre}}</b></p>
                  </a>
                </li>
                @endforeach
              </ul>
            </li>
            <li class="footer"><a href="{{route('allevent')}}" style="color: white;">Voir tous</a></li>
          </ul>
        </li>
          <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu" style="background-color:#3c8dbc!important">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{asset('/avatar/'.Auth::user()->avatar)}}" width="19px" height="19px" class="img-circle">
            <span class="hidden-xs" style="color: white;">{{Auth::user()->name}}</span>
          </a>
          <ul class="dropdown-menu" style="background-color:#3c8dbc!important">
          <!-- User image -->
          <li class="user-header" style="background-color:#3783AE!important">
            <img src="{{asset('/avatar/'.Auth::user()->avatar)}}" class="img-circle" alt="User Image">
            <p style="color: white;">
              {{Auth::user()->name}} -{{Auth::user()->specialite}}
              <small style="color: white;">{{Auth::user()->date}}</small>
            </p>
          </li>
            <!-- Menu Footer-->
          <li class="user-footer" >
            <div class="pull-left">
              <a href="/home" class="btn btn-default btn-flat" >Profil</a>
            </div>
            <div class="pull-right">
              <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="btn btn-primary btn-flat">
                <i class="fa fa-sign-out fa-lg"></i>Déconnexion
             </a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
             </form>
            </div>
          </li>
        </ul>
        </li> <!-- Control Sidebar Toggle Button -->
      </ul>
    </div>
   </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style="background-color:#D7DFEA!important" >
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="background-color:#004157!important; ">

      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('/avatar/'.Auth::user()->avatar)}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
           <a href="{{ route('logout') }}" onclick="event.preventDefault(); 
              document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out fa-lg"></i>Déconnexion
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
        </div>
      </div>
      <!-- search form -->
      <form action="/search" method="get" class="sidebar-form" >
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Rechercher...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
          @canDo('liste_acceuil')
        <li class="">
          <a href="/acceuil">
            <i class="fa fa-home"></i> <span>Mur</span>
          </a>  
        </li>
         @endcanDo 
          @canDo('liste_profile')
        <li class="" >
              <a href="/home">
                <i class="fa fa-user"></i> <span>Profil</span>
              </a>
        </li>
         @endcanDo 
      @canDo('liste_cours')
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Thèmes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>       
          <ul class="treeview-menu">
             @foreach(App\theme::all() as $Theme)
                <li>
                  <a href="{{route('cours',['id'=>$Theme->id])}}"><i class="fa fa-circle-o"></i>{{$Theme->nom}} 
                  </a>             
                </li>
              @endforeach
          </ul>
        </li>
       @endcanDo
       @canDo('lise_roles')
            <li>
              <a href="{{route('permissions.index')}}">
                <i class="fa fa-user"></i> <span> Gestion des Permissions</span>
              </a>
            </li>
            <li>
              <a href="{{route('roles.index')}}">
                <i class="fa fa-user"></i> <span> Gestion des rôles</span> 
              </a>
            </li>
        @endcanDo 
        @canDo('liste_permission')
           
            <li>
              <a href="{{route('themes.index')}}">
                <i class="fa fa-user"></i> <span> Gestion des thèmes </span>
              </a>
            </li>
            <li>
              <a href="{{route('categories.index')}}">
                <i class="fa fa-user"></i> <span>Gestion des categories</span>
              </a>
            </li>
            
            <li>
              <a href="{{route('cours.index')}}">
                <i class="fa fa-user"></i> <span>Gestion des cours </span>
              </a>
            </li>
                        <li>
              <a href="{{route('Examens.index')}}">
                <i class="fa fa-user"></i> <span>Administrer des examens </span>
              </a>
            </li>
        @endcanDo 
        @canDo('liste_formateurs')
          <li class="treeview ">
            <a href="#">
            <i class="fa fa-edit"></i> <span>Gestion des utilisateurs</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
               <li>
                  <a href=" {{route('apprenants')}}">
                    <i class="fa fa-circle-o"></i> <span>liste des apprenants</span>
                  </a>
               </li>
               <li>
                  <a href="/enAttend">
                    <i class="fa fa-circle-o"></i>  <span>liste en attente </span>
                    @if(App\Formateur::all()->count() >0)
                    <span class="pull-right-container">
                      <small class="label pull-right bg-green">new</small>
                    </span>      
                    @endif
                  </a>
                </li>
                <li>
                  <a href=" {{route('formateurs')}}">
                    <i class="fa fa-circle-o"></i>  <span>liste des formateurs</span>  
                  </a>
                </li>
            </ul>
          </li>
          @endcanDo 
          @canDo('liste_formation')
            <li>
              <a href="{{route('MesCours')}}">
                <i class="fa fa-user"></i> <span>Mes cours</span>
              </a>
            </li>
        @endcanDo 
        @canDo('liste_payment')
        <li >
          <a href="/paymentf">
            <i class="fa fa-dollar"></i> <span>payement</span>
            <span class="pull-right-container">

            </span>
          </a>
        </li>
        @endcanDo 
        @canDo('ajouter_examen')
          <li>
            <a href="/Examens">
              <i class="fa fa-certificate"></i> <span>Créer un examen</span>
              <span class="pull-right-container">

              </span>
            </a>
          </li>

         @endcanDo
         @canDo('ajouter_event')
        <li >
          <a href="/Event">
            <i class="fa fa-calendar"></i> <span>Ajouter événement</span>
          </a>
        </li>
        @endcanDo 
        @canDo('passer_ex')
          <li>
              <a href="/choisirExam">
                <i class="fa fa-certificate"></i> <span>Passer examen</span>
                <span class="pull-right-container">

                </span>
              </a>
            </li>
            
        @endcanDo 
        @canDo('liste_event')

            <li>
              <a href="/eventtt">
                <i class="fa fa-calendar"></i> <span>Evénement</span>
              </a>
            </li>
        @endcanDo 
        @canDo('liste_mail')
       <li class="treeview " >
          <a href="">
            <i class="fa fa-envelope"></i> <span>Messages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li >
              <a href="/inbox">Boite de reception
                <span class="pull-right-container">
                  <span class="label label-primary pull-right">{{App\Message::where('reciever',Auth::user()->id)->get()->count()}}</span>
                </span>
              </a>
            </li>
            <li><a href="/compose">Créer</a></li>
          </ul>
        </li>
        @endcanDo 
    <!-- /.sidebar -->
    </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
        <div class="row">
          <div class="col-md-10  toppad  col-md-offset-1 " >
               @if(Auth::user()->role_id== 3&& Auth::user()->payed==0)
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container col-md-offset-6 " >
    <section id="timer">
        <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-4 countdown-wrapper text-center mb20">
                <div class="card">
                    <div class="card-header">
                       <h3>Le temps Restant pour le payement si non votre compte sera supprimé</h3>
                    </div>
                    <div class="card-block">
                      <div id="countdown">
                          <div class="well">
                              <span id="hour" class="timer bg-success"></span>
                              <span id="min" class="timer bg-info"></span>
                              <span id="sec" class="timer bg-primary"></span>
                          </div>
                      </div>
                    </div>
                    <div class="card-footer">
                        <a href="/paymentf" class="btn btn-success">payer</a>
                        
                       <!-- <a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Subscrib for upcomming</a> -->
                        
                    </div>
                </div>
          </div>
      </div>
    </section>
</div>

<!-- /Subscribe for upcomming event modal -->
<style type="text/css">
  @import url(http://fonts.googleapis.com/css?family=Lato:100,400);
.mb20{
    margin-bottom:10px;

}
section {
    padding: 40px 0;
}
#timer .countdown-wrapper {
    margin: 0 auto;
}
#timer #countdown {
    font-family: 'Lato', sans-serif;
    text-align: center;
    color: #eee;
    text-shadow: 1px 1px 5px black;
    padding: 40px 0;
}
#timer .countdown-wrapper #countdown .timer {
    margin: 10px;
    padding: 20px;
    font-size: 90px;
    border-radius: 50%;
    cursor: pointer;
}
#timer .col-md-4.countdown-wrapper #countdown .timer {
    margin: 10px;
    padding: 10px;
    font-size: 35px;
    border-radius: 50%;
    cursor: pointer;
}
#timer .countdown-wrapper #countdown #hour {
    -webkit-box-shadow: 0 0 0 5px rgba(92, 184, 92, .5);
    -moz-box-shadow: 0 0 0 5px rgba(92, 184, 92, .5);
    box-shadow: 0 0 0 5px rgba(92, 184, 92, .5);
}
#timer .countdown-wrapper #countdown #hour:hover {
    -webkit-box-shadow: 0px 0px 15px 1px rgba(92, 184, 92, 1);
    -moz-box-shadow: 0px 0px 15px 1px rgba(92, 184, 92, 1);
    box-shadow: 0px 0px 15px 1px rgba(92, 184, 92, 1);
}
#timer .countdown-wrapper #countdown #min {
    -webkit-box-shadow: 0 0 0 5px rgba(91, 192, 222, .5);
    -moz-box-shadow: 0 0 0 5px rgba(91, 192, 222, .5);
    box-shadow: 0 0 0 5px rgba(91, 192, 222, .5);
}
#timer .countdown-wrapper #countdown #min:hover {
    -webkit-box-shadow: 0px 0px 15px 1px rgb(91, 192, 222);
    -moz-box-shadow: 0px 0px 15px 1px rgb(91, 192, 222);
    box-shadow: 0px 0px 15px 1px rgb(91, 192, 222);
}
#timer .countdown-wrapper #countdown #sec {
    -webkit-box-shadow: 0 0 0 5px rgba(2, 117, 216, .5);
    -moz-box-shadow: 0 0 0 5px rgba(2, 117, 216, .5);
    box-shadow: 0 0 0 5px rgba(2, 117, 216, .5)
}
#timer .countdown-wrapper #countdown #sec:hover {
    -webkit-box-shadow: 0px 0px 15px 1px rgba(2, 117, 216, 1);
    -moz-box-shadow: 0px 0px 15px 1px rgba(2, 117, 216, 1);
    box-shadow: 0px 0px 15px 1px rgba(2, 117, 216, 1);
}
#timer .countdown-wrapper .card .card-footer .btn {
    margin: 2px 0;
}
@media (min-width: 992px) and (max-width: 1199px) {
    #timer .countdown-wrapper #countdown .timer {
        margin: 10px;
        padding: 20px;
        font-size: 65px;
        border-radius: 50%;
        cursor: pointer;
    }
}
@media (min-width: 768px) and (max-width: 991px) {
     #timer .countdown-wrapper #countdown .timer {
        margin: 10px;
        padding: 20px;
        font-size: 72px;
        border-radius: 50%;
        cursor: pointer;
    }
}
@media (max-width: 768px) {
    #timer .countdown-wrapper #countdown .timer {
        margin: 10px;
        padding: 20px;
        font-size: 73px;
        border-radius: 50%;
        cursor: pointer;
    }
}
@media (max-width: 767px) {
    #timer .countdown-wrapper #countdown #hour,
    #timer .countdown-wrapper #countdown #min,
    #timer .countdown-wrapper #countdown #sec {
        font-size: 60px;
        border-radius: 4%;
    }
}
@media (max-width: 576px){
    #timer .countdown-wrapper #countdown #hour,
    #timer .countdown-wrapper #countdown #min,
    #timer .countdown-wrapper #countdown #sec {
        font-size: 25px;
        border-radius: 4%;
    }
    #timer .countdown-wrapper #countdown .timer {
        padding: 13px;
    }
}
</style>
<script type="text/javascript">
  $( document ).ready(function() {
  setInterval(function time(){
  var d = new Date();
  var hours = 24 - d.getHours();
  var min = 60 - d.getMinutes();
  if((min + '').length == 1){
    min = '0' + min;
  }
  var sec = 60 - d.getSeconds();
  if((sec + '').length == 1){
        sec = '0' + sec;
  }
  jQuery('#countdown #hour').html(hours);
  jQuery('#countdown #min').html(min);
  jQuery('#countdown #sec').html(sec);
}, 1000); });
</script>
                @endif
            @yield('content')
         </div>
        </div>
     
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
            
    </div>
    <strong>Copyright &copy; wecode <a href="https://wecode.com">wecode land</a>.</strong> Tous les droits réservé.
  </footer>
  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="/admin/adminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/admin/adminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- FastClick -->
<script src="/admin/adminLTE/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/admin/adminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/admin/adminLTE/dist/js/demo.js"></script>
<script type="text/javascript">
@foreach(App\Comment::all() as $comment)
  $(document).ready(function () {
     // Attach Button click event listener       
    $('#edit{{$comment->id}}').click(function(){
    $('#editModal{{$comment->id}}').modal('show');
    }); 
});
 @endforeach
</script>
</body>
</html>
