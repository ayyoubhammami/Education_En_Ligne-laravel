@extends('layouts.template')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row" style="margin-top: 50px;">
        <div class="col-md-3">
          <a href="inbox" class="btn btn-primary btn-block margin-bottom"><i class="fa fa-reply"></i>Retour Réception</a>
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Dossier</h3>
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="/inbox"><i class="fa fa-inbox"></i> Réception
                  <span class="label label-primary pull-right">{{App\Message::where('reciever',Auth::user()->id)->get()->count()}}</span></a></li>
                <li><a href="/compose"><i class="fa fa-envelope" ></i> Rediger</a></li>
                <li><a href="/Envoye"><i class="fa fa-share-square"></i> Envoyés</a></li>
                </li>             
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
         
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          @if ($message = Session::get('success'))
              <div class="alert alert-success">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <p>{{ $message }}</p>
             </div>
        @endif 
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Créer un nouveau Message</h3>
            </div>
        {!! Form::open(array('route' => 'sendMessage','method'=>'POST','files'=>'true')) !!}
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
           @if(Auth::user()->role->name=="Admin")
                <select name="reciever" class="form-control">
                  <option value="">TO</option>
                  @foreach(App\User::where('role_id','!=','1')->get() as $user)

                      @if($user->role_id==2)
                        <option value="{{$user->id}}">{{$user->email}}</option>
                      @endif
                      @if($user->role_id==3)
                        <option value="{{$user->id}}" style="background-color: #ECF0F5">{{$user->email}}</option>
                      @endif

                  @endforeach
                 </select>
           @elseif(Auth::user()->role->name=="Formateur")
                 <select name="reciever" class="form-control">
                  <option value="">TO</option>
             @foreach(App\User::where('role_id','!=','3')->get() as $user)

                @if($user->role_id==2)
                  <option value="{{$user->id}}">{{$user->email}}</option>
                @endif
                @if($user->role_id==1)
                  <option value="{{$user->id}}" style="background-color: #ECF0F5">{{$user->email}}</option>
                @endif

              @endforeach
                </select>
                @else
                  <select name="reciever" class="form-control">
                  <option value="">TO</option>
                  @foreach(App\User::where('role_id','!=','2')->get() as $user)
                    
                      @if($user->role_id==3)
                        <option value="{{$user->id}}">{{$user->email}}</option>
                      @endif
                      @if($user->role_id==1)
                        <option value="{{$user->id}}" style="background-color: #ECF0F5">{{$user->email}} </option>
                      @endif

                  @endforeach
                </select>
                @endif
              </div>
              <div class="form-group">
                <input type="hidden" name="sender" value="{{Auth::user()->id}}">
                <input class="form-control" name="subject" placeholder="Sujet:">
              </div>
              <div class="form-group">
                    <textarea id="compose-textarea" name="message" class="form-control" style="height: 300px">
                    </textarea>
              </div>
              <div class="form-group">
                <input type="file" name="image" accept="audio/*,video/*,image/*">
                <p class="help-block">Max.100MB</p>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Envoyer</button>
              </div>
              <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Annuler</button>
            </div>
            {!! Form::close() !!}
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>



@endsection

