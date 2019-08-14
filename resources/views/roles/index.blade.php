@extends('layouts.template')
@section('content')





    <div class="row" style="margin-top: 50px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Liste des rôles </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('roles.create') }}"> Créer Nouvel rôle </a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered table-responsive table-striped " border="2" style="border-style: solid;">
        <tr>
            <th> id</th>
            <th>nom</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($roles as  $role)
    <tr>
         <td>{{ $role->id }}</td>
        <td>{{ $role->name }}</td>
        <td>
            <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Modifier</a>
            <a class="btn btn-info" href="{{ route('roles.permissions',$role->id) }}">Permission</a>
            
            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Supprimer', ['class' => 'btn btn-danger ','Disabled ']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
 {!! $roles->render() !!}







 
@endsection