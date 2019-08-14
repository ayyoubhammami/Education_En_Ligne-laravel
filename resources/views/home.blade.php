@extends('layouts.template')
@section('content')
<div class="pull-right">          
              </div>

            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-1 col-sm-offset-2 col-md-offset-2 col-lg-offset-1 toppad" style="margin-top: 20px;"  >
              
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <p>{{ $message }}</p>
        </div>
        @endif
          <div class="panel panel-info"> 
                <div class="panel-heading">
                  <h3 class="panel-title">Mon profil</h3>
                  <span class="pull-right" style="margin-top:-23px;">
                                <a href="{{ route('users.edit',Auth::user()->id) }}" data-original-title="Modifier mon compte" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i>Modifier</a>

                                <!--<a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>-->
                  </span>
                </div>
              <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-lg-5" align="center" style="padding-bottom: 20px;"><img alt="User Pic" src="{{asset('/avatar/'.Auth::user()->avatar)}}"  class="img-circle img-responsive" width="100px" height="20px">  </div>
                  <div style="padding-top: 50px;">
                      {!!Form::open(['url'=>route('updateImage'),'method'=>'POST','files'=>'true' ]  ) !!}
                      <label>Modifier ma Photo de Profil</label>
                      <input type="file" name="image"><br>
                       <button type="submit" class="btn btn-primary" ><span class="fa fa-check-circle"> Modifier la photo de profil</span></button>
                      {!!Form::close() !!}
                      
                        
                   
                    <div class=" col-md-9 col-lg-9 "> 
                      <table class="table table-user-information">
                        <tbody>
                          <tr>
                            <td>Nom && Prénom : </td>
                            <td>{{Auth::user()->name}}</td>
                          </tr>
                           <tr>
                            <td>Date de naissance: </td>
                            <td>{{Auth::user()->date}}</td>
                          </tr>
                          <tr>
                            <td>Départment:</td>
                            @foreach(App\theme::all() as $Theme)
                            @if(Auth::user()->specialite==$Theme->id) 
                            <td>{{$Theme->nom}}</td>
                            @endif
                            @endforeach
                          </tr>
                           <tr>
                            <td>Niveau d'étude:</td>
                            <td>{{Auth::user()->niveau}}</td>
                          </tr>
                          <tr>
                            <td>Téléphone:</td>
                            <td>{{Auth::user()->tel}}</td>
                          </tr>
                         
                       
                          <tr>
                            <td>Email</td>
                            <td><a href="mailto:info@support.com">{{Auth::user()->email}}</a></td>
                         
                         </tr>
                        </tbody>
                      </table>                      
                      
                    </div>
                  </div>
                </div>
                     
                          <p class="pull-right">date d'inscription : {{Auth::user()->created_at->format('d/M/Y')}}</p>
                            
                    
                </div>
              </div>
            </div>
@endsection