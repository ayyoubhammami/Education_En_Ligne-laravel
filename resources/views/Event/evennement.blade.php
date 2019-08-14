
@extends('layouts.template')
@section('content')

 <div class="row" style="margin-top: 50px;">
    <div class="col-xs-12">
        <div class="panel panel-default widget">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-time"></span>
                <h3 class="panel-title">
                   L'event sera en  {{ $event->date }} </h3>
               
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-2 col-md-1">
                                <img src="{{asset('/avatar/'.App\User::find($event->user_id)->avatar)}}" width="70" /></div>
                            <div class="col-xs-10 col-md-10">
                                <div>
                                    <h2>
                                       {{ $event->titre }}</h2>
                                    <div class="mic-info">
                                      <h4>  par :<a href="#"> {{App\User::find($event->user_id)->name}}l</a>&nbsp;publié en{{ $event->created_at->format('d/M/Y') }} </h4>
                                    </div>
                                </div>
                                <div class="comment-text">
                                            <IFRAME 
                                                src="{{ $event->lien }}" width="830" height="600">       
                                             </IFRAME>
                                    <a href="{{ $event->lien }}"> <h3>voci le lien du video</h3></a>
                                    <h3>{{ $event->description }}</h3> 

                                    <div>
                                      <span class="mailbox-attachment-icon"><i class="fa fa-file-pdf-o"></i></span>
                                     <div class="mailbox-attachment-info">
                                   <a href="{{asset('/uploads/events/'.$event->file)}}" target="_blank" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i>fichier{{$event->file}}</a>
                                      </div> 
                                </div> 
                               
                                
                            </div>
                        </div>
                    </li>

                </ul>
                
            </div>
        </div>
    </div>
</div>

<style type="text/css">
.widget .panel-body { padding:0px; }
.widget .list-group { margin-bottom: 0; }
.widget .panel-title { display:inline }
.widget .label-info { float: right; }
.widget li.list-group-item {border-radius: 0;border: 0;border-top: 1px solid #ddd;}
.widget li.list-group-item:hover { background-color: rgba(86,61,124,.1); }
.widget .mic-info { color: #666666;font-size: 11px; }
.widget .action { margin-top:5px; }
.widget .comment-text { font-size: 12px; }
.widget .btn-block { border-top-left-radius:0px;border-top-right-radius:0px; }

</style>



@endsection
                                           
                                 