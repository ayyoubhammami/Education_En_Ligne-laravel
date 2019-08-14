@extends('layouts.template')
@section('content')
<!-- Main content -->
   <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="/inbox" class="btn btn-primary btn-block margin-bottom" style="font-family: Roboto;"><i class="fa fa-reply"></i>Retour réception</a>
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
                <li class="active"><a href="/inbox"><i class="fa fa-inbox"></i>Réception
                  <span class="label label-primary pull-right">{{App\Message::where('reciever',Auth::user()->id)->get()->count()}}</span></a></li>
                <li><a href="/compose"><i class="fa fa-envelope"></i> Rediger</a></li>
                
                 <li><a href="/Envoye"><i class="fa fa-share-square"></i> Envoyés </a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
        
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border" style="background-color: #6FA4BE;">
              <h3 class="box-title" style="color: white;font-family: ROBOTO;" >Lire mail reçue</h3>
                <div class="box-tools pull-right">
                <a href="#" OnClick="javascript:window.print()" class="btn btn-default btn-sm"><i class="fa fa-print"></i></a>
              </div>
              
            </div>
            <!-- /.box-header -->
            @foreach(App\Message::where('sender',App\User::find($message->sender)->id)->orderBy('created_at','desc')->get() as $message)
            @if(App\User::find($message->reciever)->email==Auth::user()->email)
            @if($message->Remouve==1)
            
            
            <div class="box-body no-padding">
              <div class="mailbox-read-info">
                <h4><b style="text-decoration: underline;">Sujet:</b> {{$message->subject}}</h4><br>
                <img src="{{asset('/avatar/'.App\User::find($message->sender)->avatar)}}" class="img-circle" alt="{{App\User::find($message->sender)->name}}" width="35"> 
                {{App\User::find($message->sender)->email}}
                  <span class="mailbox-read-time pull-right">En :{{$message->created_at}}</span>
              </div>
              <!-- .mailbox-read-info -->

              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message"><h4><b style="text-decoration: underline;">Le message :</b></h4><br>
                <p><h4>{{$message->message}}</h4></p>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <ul class="mailbox-attachments clearfix"> 
                @if($message->file)
                <li><a href="{{asset('/uploads/files/'.$message->file)}}" target="_blank" class="mailbox-attachment-name">
                  <span class="mailbox-attachment-icon"><i class="fa fa-file-pdf-o"></i></span>
                  <div class="mailbox-attachment-info">
                    <i class="fa fa-paperclip"></i>{{$message->file}}</a>
                  </div> 
                </li>
                 @endif  
                
                
              </ul>
               <a  href="{{route('remouve',['id'=>$message->id])}}" title="supprimer" type="button" class="btn btn-default btn-lg"><i class="fa fa-trash-o"></i></a>
            </div>
            <div class="box-footer">
              <div class="pull-right">

              </div>
             
              
            </div>
            
            @else
            <a  href="{{route('voir',['id'=>$message->id])}}" title="Voir" type="button" class="btn btn-default btn-lg">
            <h4 style="color: #858585;">Vous avez caché ce message <i class="fa fa-eye"></i></h4></a> 
            @endif
            @endif
            @endforeach













                       <div class="box-header with-border" style="background-color: #6FA4BE;">
              <h3 class="box-title" style="color: white;font-family: ROBOTO;" >Lire mail que j'ai l'envoyé</h3>
                <div class="box-tools pull-right">
                
              </div>
              
            </div>

 @foreach(App\Message::where('sender',Auth::user()->id)->orderBy('created_at','desc')->get() as $A)
            @if($A->reciever==$message->sender)
           
@if($A->Remouve==1)
            <div class="box-body no-padding" style="background-color: #D1F0EE;">
              <div class="mailbox-read-info">
                <h4><b style="text-decoration: underline;">Sujet:</b> {{$A->subject}}</h4><br>
                <img src="{{asset('/avatar/'.App\User::find($A->sender)->avatar)}}" class="img-circle" alt="{{App\User::find($A->sender)->name}}" width="35"> 
                {{App\User::find($A->sender)->email}}
                  <span class="mailbox-read-time pull-right">En :{{$A->created_at}}</span>
              </div>
              <!-- .mailbox-read-info -->
              <div class="mailbox-controls with-border text-center">               
              </div>
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message"><h4><b style="text-decoration: underline;">Le message :</b></h4><br>
                <p>{{$A->message}}</p>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <ul class="mailbox-attachments clearfix"> 
                @if($A->file)
                <li>
                  <span class="mailbox-attachment-icon"><i class="fa fa-file-pdf-o"></i></span>
                  <div class="mailbox-attachment-info">
                    <a href="{{asset('/uploads/files/'.$message->file)}}" target="_blank" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i>{{$A->file}}</a>
                  </div> 
                </li>
                 @endif  
                
                
              </ul>
            </div>
            <div class="box-footer">
              <div class="pull-right">
              </div>
             <a href="{{route('remouve',['id'=>$A->id])}}" title="supprimer" type="button" class="btn btn-default btn-lg"><i class="fa fa-trash-o"></i></a>
             
            </div>
            @else
           <a  href="{{route('voir',['id'=>$A->id])}}" title="Voir" type="button" class="btn btn-default btn-lg">
            <h4 style="color: #858585;">Vous avez caché ce message <i class="fa fa-eye"></i></h4></a>
            @endif
            @endif
            @endforeach








           


            <!-- /.box-footer -->
            
          
            <!-- /.box-footer -->
             <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Renvoyer un Mail</h3>
            </div>
        {!! Form::open(array('route' => 'sendMessage','method'=>'POST','files'=>'true')) !!}
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
          
                  <select name="reciever" class="form-control hidden">
                        <option selected="true" value="{{App\User::find($message->sender)->id}}">{{App\User::find($message->sender)->email}}</option>       
                </select>
                
              </div>
              <div class="form-group">
                <input type="hidden" name="sender" value="{{Auth::user()->id}}">
                <input class="form-control" name="subject" value="{{$message->subject}}" placeholder="Sujet:">
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
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  

@endsection

