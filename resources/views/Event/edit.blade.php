@extends('layouts.template')
@section('content')

    <div class="row" style="padding-top: 50px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifier évènement</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Event.index') }}"> Retour</a>
            </div>
        </div>
    </div>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong>Certains champs sont vides.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {!! Form::model($event, ['method' => 'PATCH','route' => ['Event.update', $event->id],'files' => 'true', 'enctype' => 'multipart/form-data']) !!}
    <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titre:</strong>
                {!! Form::text('titre', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
            </div>
        </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Categorie:</strong>
                <select name="categorie" class="form-control">
                @foreach(App\Categorie::all() as $categorie) 
                <option value="{{$categorie->id}}"
                @if($event->categorie->id==$categorie->id) selected @endif >{{$categorie->nom}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Temps:</strong>
                {!! Form::date('date', null, array('placeholder' => 'Date','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Temps:</strong>
                {!! Form::time('temps', null, array('placeholder' => 'temps','class' => 'form-control')) !!}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description: </strong>
                {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image</strong>
                <img src="{{asset('/uploads/events/'.$event->image)}}" width="120px" height="120px"> <br> <br>
                <input type="file" name="image">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Modifier</button>
        </div>


    </div>
    {!! Form::close() !!}


@endsection