@extends('layouts.template')
@section('content')
   
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
    {!! Form::model($users, ['method' => 'PATCH','route' => ['users.update', $users->id]]) !!}
    <div class="row" style="margin-top: 50px;">
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('home') }}"> Retour</a>
            </div>
        <div class="col-xs-8 col-sm-8 col-md-8" style="margin-top: 50px;">
            <div class="form-group">
                <strong>Nom && Prénom:</strong>
                {!! Form::text('name', null, array('placeholder' => 'name','class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                <strong>Mail:</strong>
                <input type="text" name="email" value="{{Auth::user()->email}}" class="form-control" readonly>
            </div>
             <div class="form-group">
                <strong>Mot de passe:</strong>
                {!! Form::text('show_password', null, array('placeholder' => 'mot de pass','class' => 'form-control')) !!}
            </div>
             <div class="form-group">
                <strong>Téléphone:</strong>
                {!! Form::text('tel', null, array('placeholder' => 'num','class' => 'form-control')) !!}
            </div>
             <div class="form-group">
                <strong>cin:</strong>
                {!! Form::text('cin', null, array('placeholder' => 'num','class' => 'form-control',)) !!}
            </div>
            <div class="form-group">  
                <strong>Niveau d'étude</strong>
                <select name="niveau" class="form-control">
                    <option value="null">choisir votre niveau</option>
                    <option value="Etudiant" @if(Auth::user()->niveau == 'Etudiant') selected @endif>Etudiant</option>
                    <option value="Professeur" @if(Auth::user()->niveau == 'Professeur') selected @endif>Professeur</option>
                    <option value="Ingénieur" @if(Auth::user()->niveau == 'Ingénieur') selected @endif>Ingénieur</option>
                    <option value="Doctorant" @if(Auth::user()->niveau == 'Doctorant') selected @endif>Doctorant</option>
                    <option value="Autre" @if(Auth::user()->niveau == 'Autre') selected @endif>Autre</option>
                </select>
            </div>

    </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Sauvegarder</button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection