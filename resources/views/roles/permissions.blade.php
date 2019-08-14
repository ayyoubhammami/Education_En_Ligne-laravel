@extends('layouts.template')
@section('content')
<div class="row" style="margin-top: 50px;">
	<div class="pull-right">
                <a class="btn btn-primary" href="{{ route('roles.index') }}"> retour</a>
            </div>
<h3>La liste des Permissions affecté aux {{$role->name}}s:</h3>
@foreach($role->permissions as $permission)
<table>
<td>{{$permission->name}}</td>
<td><a href="{{route('dettachPermission',['role_id'=>$role->id,'perm_id'=>$permission->id])}}">
<i class="fa fa-times" aria-hidden="true"></i></a></td>
</table>
@endforeach
<h3>La liste de Permissions non affecté aux {{$role->name}}s: </h3>
<form method="post" action="{{route('attachPermission',['id'=>$role->id])}}">
{{ csrf_field() }}
@foreach(App\Permission::all() as $permission)
@if(!$role->permissions->contains($permission))
<table>
<td>
	{{$permission->name}}
</td>	
<td>
	<input type="checkbox" name="permissions[]" value="{{$permission->id}}"> 
</td>
</table>
@endif
@endforeach
<input type="submit" name="Valider" class="btn btn-primary">
</form>
</div>
@endsection