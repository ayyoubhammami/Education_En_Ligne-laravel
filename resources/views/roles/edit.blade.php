@extends('layouts.template')
@section('content')
    
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
    {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
    <div class="row" style="margin-top: 50px;">
         <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('roles.index') }}"> Retour</a>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom:</strong>
                {!! Form::text('name', null, array('placeholder' => 'nom','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Modifier</button>
        </div>
    </div></div>
    {!! Form::close() !!}


@endsection