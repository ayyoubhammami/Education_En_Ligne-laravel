
@extends('layouts.template')
@section('content')
 @if ($message = Session::get('success'))
        <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <p>{{ $message }}</p>
        </div>
    @endif
    <section class="content-header" style="margin-top: 10px;">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> accueil</a></li>
        <li class="active">  liste formateurs en attente</li>
      </ol>
    </section>

<!-- Main content -->
    <section class="content">
      <div class="row" style="margin-top: 50px;">
        <h1>
        liste des formateurs en attente 
        </h1>
        <div class="col-xs-6 col-lg-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nom </th>
                  <th>Email </th>
                  <th>Spetialite</th>
                  <th>Niveau</th>
                  <th>Date d'inscription</th>
                  <th>Cv</th>
                  <th width="200">Action</th>
                </tr>
                </thead>
                <tbody> 
                <tr >
                  @foreach(App\Formateur::all() as $formateur)
            {!! Form::open(array('route' => 'addUser','method'=>'POST','files'=>'true')) !!}
                  @csrf
                <input type="hidden" name="role_id" value="{{$formateur->role_id}}">
                <input type="hidden" name="formateur" value="{{$formateur->id}}">
                <input type="hidden" name="password" value="{{$formateur->password}}">
                <input type="hidden" name="password_confirmation" value="{{$formateur->password_confirmation}}">
                <input type="hidden" name="sexe" value="{{$formateur->sexe}}">
                 <input type="hidden" name="date" value="{{$formateur->date}}">
                 <input type="hidden" name="tel" value="{{$formateur->tel}}">
                     
                  <input type="hidden" name="cin" value="{{$formateur->cin}}">
                  <td> {{$formateur->name}}
                    <input type="hidden" name="name" value="{{$formateur->name}}">
                  </td>
                   <td style="background-color: #DBDBDB; text-align: center; font-size: 15px;">{{$formateur->email}}
                    <input type="hidden" name="email" value="{{$formateur->email}}">

                   </td>
                   <td>
                     @foreach(App\theme::all() as $Theme)
                            @if($Theme->id==$formateur->specialite) 
                            {{$Theme->nom}}
                            @endif
                            @endforeach
                  <input type="hidden" name="specialite" value="{{$formateur->specialite}}">
                  </td>
                   <td>{{$formateur->niveau}}
                  <input type="hidden" name="niveau" value="{{$formateur->niveau}}">
                   </td>
                   <td>{{$formateur->created_at}}</td> 
                   <td>
                    <a href="{{asset('/uploads/cv/'.$formateur->cv)}}" target="_blank" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i>{{$formateur->cv}}</a>
                  </td>
                  
                   <td>
                    <input type="submit" class="btn btn-primary" value="Accepter">
                    <a title="supprimer" type="button" class="btn btn-danger " data-toggle="modal" data-target="#edit{{ $formateur->id }}" id="edit{{ $formateur->id }}"><i class="fa fa-trash-o" ></i>Refuser</a>
                   {!! Form::close() !!}
                  
                  </tr>
                  
                 <div class="modal fade" id="edit{{ $formateur->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Voulez vous supprimer cet user</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn  btn-default" data-dismiss="modal">annulé</button>
           {!! Form::open(['method' => 'DELETE','route' => ['destroyformateur', $formateur->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Refuser ', ['class' => 'btn btn-danger']) !!}
                   {!! Form::close() !!}</td>
      </div>
    </div>
  </div>
</div>
                  @endforeach













                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>



@endsection




