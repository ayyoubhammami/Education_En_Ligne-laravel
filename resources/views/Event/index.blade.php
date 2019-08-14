@extends('layouts.template')
@section('content')

    <div class="row" style="margin-top: 50px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>liste des évènnements</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('Event.create') }}">Créer un nouvel évènnement</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table tablr-hover "  border="2" style="border-style: solid;">
        <tr>
        
            <th>Title</th>
            <th>Date de creation</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($events as $key => $event)
    <tr>
        
        <td>{{ $event->titre }}</td>
        <td>{{ $event->created_at }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('Event.show',$event->id) }}">Voir</a>
            <a class="btn btn-primary" href="{{ route('Event.edit',$event->id) }}">Modifier</a>
             <a title="supprimer" type="button" class="btn btn-danger " data-toggle="modal" data-target="#edit{{ $event->id }}" id="edit{{ $event->id }}">Supprimer</a>
 
            
        </td>
    </tr>




       <div class="modal fade" id="edit{{ $event->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Voulez vous supprimer ce evennement</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn  btn-default" data-dismiss="modal">Fermer</button>
          {!! Form::open(['method' => 'DELETE','route' => ['Event.destroy', $event->id],'style'=>'display:inline']) !!}
            {!! Form::submit('supprimer', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
    @endforeach
    </table>


    {!! $events->render() !!}


@endsection