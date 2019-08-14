@extends('layouts.template')
@section('content')

    <div class="row"  style="margin-top: 50px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Créer un nouveau thème</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('themes.index') }}"> Retour</a>
            </div>
        </div>
    </div>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong>Cerains champs sont vides.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(array('route' => 'themes.store','method'=>'POST','files'=>'true')) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titre:</strong>
                {!! Form::text('nom', null, array('placeholder' => 'nom','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
          <div class="form-group">
                <strong>Couleur dans le forum:</strong>
                <input type="color" name="color" class="form-control">
        </div>  
        </div>
                <div class="col-xs-2 col-sm-2 col-md-2">
          <div class="form-group">
                <strong>slugan dans le forum :</strong>
                <input type="text" name="slug" class="form-control">
        </div>  
        </div>
        <div class="form-group"><label> image pour ce theme</label>
                <input type="file" name="image" accept="audio/*,video/*,image/*">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Sauvegarder</button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection