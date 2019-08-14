@extends('layouts.template')
@section('content')
<!-- Main content -->
   <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="compose.html" class="btn btn-primary btn-block margin-bottom"><i class="fa fa-reply"></i>Retour réception</a>
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
              <h3 class="box-title" style="color: white;font-family: ROBOTO;" >Lire Mail qu j'ai Envoyé à {{App\User::find($message->sender)->name}} </h3>
          @if($message->Remouve==1)
              <div class="box-tools pull-right">
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-read-info">
                <h3>Sujet: {{$message->subject}}</h3><br>
                <img src="{{asset('/avatar/'.App\User::find($message->reciever)->avatar)}}" class="img-circle" alt="{{App\User::find($message->reciever)->name}}" width="35"> 
                {{App\User::find($message->sender)->email}}
                  <span class="mailbox-read-time pull-right">En :{{$message->created_at}}</span>
              </div>
              <!-- .mailbox-read-info -->
              
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message"><h3>Le message :</h3><br>
                <p>{{$message->message}}</p>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <ul class="mailbox-attachments clearfix"> 
                @if($message->file)
                <li>
                  <span class="mailbox-attachment-icon"><i class="fa fa-file-pdf-o"></i></span>
                  <div class="mailbox-attachment-info">
                    <a href="{{asset('/uploads/files/'.$message->file)}}" target="_blank" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i>{{$message->file}}</a>
                  </div> 
                </li>

                 @endif 

                
              </ul>
            </div>
            <!-- /.box-footer -->
            <div class="box-footer">
              <div class="pull-right">
                
                
              </div>
               <a  href="{{route('remouve',['id'=>$message->id])}}" title="supprimer" type="button" class="btn btn-default btn-lg"><i class="fa fa-trash-o"></i></a>
              <a href="#" OnClick="javascript:window.print()" class="btn btn-default btn-lg"><i class="fa fa-print"></i></a>
            </div>
            <!-- /.box-footer -->

          </div>

          <!-- /. box -->
        </div>

      </div>
      @else
    </div>
                 <a  href="{{route('voir',['id'=>$message->id])}}" title="Voir" type="button" class="btn btn-default btn-lg" >
            <h4 style="color: #858585;">Vous avez caché ce message <i class="fa fa-eye"></i></h4></a>
            @endif
      <!-- /.row -->
    </section>
  

@endsection

