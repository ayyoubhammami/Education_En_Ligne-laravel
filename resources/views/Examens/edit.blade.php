@extends('layouts.template')
@section('content')


    <div class="row"  style="margin-top: 50px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifier Examen</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Examens.index') }}"> Retour</a>
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


    {!! Form::model($examen, ['method' => 'PATCH','route' => ['Examens.update', $examen->id],'files' => 'true']) !!}
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12"> 
            <div class="form-group">
                <strong>Titre:</strong>
                {!! Form::text('titre', null, array('placeholder' => 'titre','class' => 'form-control')) !!}
            </div>
        </div>
      
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Modifier</button>
        </div>


    </div>
    {!! Form::close() !!}


@endsection