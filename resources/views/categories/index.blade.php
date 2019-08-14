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
  <aside class="main-sidebar" style="background-color:#D7DFEA" >
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="background-color:#004157; ">

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
                  <div class="row" style="margin-top: 50px;">
                      <div class="col-lg-12 margin-tb">
                          <div class="pull-left">
                              <h2>Liste des categories</h2>
                          </div>
                          <div class="pull-right">
                              <a class="btn btn-success" href="{{ route('categories.create') }}"> Créer Nouvelle categorie</a>
                          </div>
                      </div>
                  </div>
                  @if ($message = Session::get('success'))
                      <div class="alert alert-success">
                          <p>{{ $message }}</p>
                      </div>
                  @endif
                <div class="box">
                 <div class="box-header">
                </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-responsive table-striped">
                <thead>
                  <tr style="background-color: #DCE6EC;">
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Théme</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                <tbody>
                    @foreach ($categories as $key => $categorie)
                  <tr>
                    <td>{{ $categorie->id }}</td>
                    <td>{{ $categorie->nom }}</td> 
                    <td>{{ $categorie->theme->nom }}</td>
                    <td>
                        <a class="btn btn-warning" title="Modifier"  href="{{ route('categories.edit',$categorie->id) }}"><i class="fa fa-pencil"></i></a>
                        <a title="supprimer" type="button" class="btn btn-danger " data-toggle="modal" data-target="#edit{{ $categorie->id }}" id="edit{{ $categorie->id }}"><i class="fa fa-trash-o" ></i></a>

                    </td>
                  </tr>













                 <div class="modal fade" id="edit{{ $categorie->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Voulez vous supprimer cette categorie</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn  btn-default" data-dismiss="modal">Fermer</button>
         {!! Form::open(['method' => 'DELETE','route' => ['categories.destroy', $categorie->id],'style'=>'display:inline']) !!}
                        <button class="btn btn-danger" title="Supprimer" ><i class="fa  fa-trash-o"></i></button>
                        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
                    @endforeach
                </tbody>
              </table>
              {!! $categories->render() !!}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
            
    </div>
    <strong>Copyright &copy; wecode <a href="https://WeCode.com">wecode land</a>.</strong> Tous les droits réservé.
  </footer>
    <!-- jQuery 3 -->
    <script src="/admin/adminLTE/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="/admin/adminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="/admin/adminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/admin/adminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="/admin/adminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- page script -->
    <script>
      $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
          'paging'      : true,
          'lengthChange': true,
          'searching'   : true,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : true
        })
      })
    </script>
      <div class="control-sidebar-bg"></div>
    </div>
    <!-- FastClick -->
    <script src="/admin/adminLTE/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="/admin/adminLTE/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/admin/adminLTE/dist/js/demo.js"></script>
  </body>
</html>






