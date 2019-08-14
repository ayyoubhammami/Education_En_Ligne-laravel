@extends('layouts.template')
@section('content')


    <div class="row"  style="margin-top: 50px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifier Thème</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('themes.index') }}"> Retour</a>
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


    {!! Form::model($theme, ['method' => 'PATCH','route' => ['themes.update', $theme->id],'files' => 'true']) !!}
    <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12"> 
            <div class="form-group">
                <strong>Title:</strong>
                {!! Form::text('nom', null, array('placeholder' => 'nom','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
          <div class="form-group">
                <strong>Couleur dans le forum :</strong>
                <input type="color" name="color" class="form-control" value="{{$theme->color}}">
        </div>  
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
          <div class="form-group">
                <strong>slugan dans le forum :</strong>
                <input type="text" name="slug" class="form-control" value="{{$theme->slug}}">
        </div>  
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image pour ce theme</strong>
                <img src="{{asset('/uploads/themes/'.$theme->image_th)}}" width="120px" height="120px"> <br> <br>
                <input type="file" name="image">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Modifier</button>
        </div>


    </div>
    {!! Form::close() !!}


@endsection