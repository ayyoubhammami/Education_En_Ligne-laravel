@extends('layouts.template')
@section('content')

    <div class="row" style="margin-top: 50px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifier ce  Cour</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('cours.index') }}"><i class="fa fa-arrow-left"></i> Retour</a>
            </div>
        </div>
    </div>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {!! Form::model($cour, ['method' => 'PATCH','route' => ['cours.update', $cour->id],'files' => 'true', 'enctype' => 'multipart/form-data']) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titre formation:</strong>
                {!! Form::text('titre', null, array('placeholder' => 'Titre','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titre video:</strong>
                {!! Form::text('titreV', null, array('placeholder' => 'Titre','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prix</strong>
                {!! Form::text('prix', null, array('placeholder' => 'prix','class' => 'form-control')) !!}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}
            </div>
        </div>

       <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Categorie:</strong>
                <select name="categorie" class="form-control">
                @foreach(App\Categorie::all() as $categorie) 
                <option value="{{$categorie->id}}"
                @if($cour->categorie->id==$categorie->id) selected @endif >{{$categorie->nom}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image</strong>
                <img src="{{asset('/uploads/images/'.$cour->image)}}" width="120px" height="120px"> <br> <br>
                <input type="file" name="image">
            </div>
        </div>
        <hr align="center" width="60%" color="midnightblue" size="3"> 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">  
            <label>Video</label>
            <div class="embed-responsive embed-responsive-16by9" >

                    
                    <link href="http://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
                    <script src="http://vjs.zencdn.net/4.12/video.js"></script>
          
                    <style type="text/css">
                    .vjs-big-play-button {
                        margin-top: 17%;
                        margin-left: 35%;
                        width: 20%;
                        height: 20%;
                    }

                      .vjs-default-skin .vjs-control-bar,
                      .vjs-default-skin .vjs-big-play-button { background: rgba(80,165,248,0.84) }
                      .vjs-default-skin .vjs-slider { background: rgba(80,165,248,0.27999999999999997) }
                      .vjs-default-skin .vjs-control-bar { font-size: 109% }
                    </style>
                    <video id="MY_VIDEO_1" class="video-js center vjs-default-skin " controls preload="auto" width="500" height="264" poster="{{asset('/uploads/images/'.$cour->image)}}" data-setup="{}">
                    <source src="{{asset('/uploads/vedios/'.$cour->fichier)}}" type='video/mp4'>
                    <source src="{{asset('/uploads/vedios/'.$cour->fichier)}}" type='video/webm'>
 
                    </video>
            <br>

            <input type="file" name="vedio" accept="file_extension|audio/*|video/*|image/*|media_type"/>  
            
        

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Modifier</button>
        </div>


    </div>
    {!! Form::close() !!}
</div></div></div>


@endsection