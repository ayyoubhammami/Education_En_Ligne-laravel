@extends('layouts.template')
@section('content')
    <div class="row" style="margin-top: 50px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifier catégorie</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('categories.index') }}"> Retour</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Certains champs sont vides.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::model($categorie, ['method' => 'PATCH','route' => ['categories.update', $categorie->id],'files' => 'true'] ) !!}
    <div class="row">
       <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom:</strong>
                {!! Form::text('nom', null, array('placeholder' => 'nom','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Thème</strong>
                <select name="theme" class="form-control">
                    <option>Choisir theme</option>
                    @foreach(App\Theme::all() as $theme)
                    <option value="{{$theme->id}}" @if($categorie->theme->id==$theme->id) selected @endif>{{$theme->nom}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <img src="{{asset('/uploads/images/'.$categorie->image)}}" width="120px" height="120px">
            <div class="form-group">
                <strong>Image</strong>
                    <input type="file" name="image">   
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Modifier</button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection