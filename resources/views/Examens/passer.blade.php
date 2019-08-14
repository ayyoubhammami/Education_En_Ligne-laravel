@extends('layouts.template')
@section('content')

 {!! Form::open(array('route' => 'reponse.store','method'=>'POST','files'=>'true')) !!}

<div class="col-lg-12 col-lg-offset-0">

   <div style="background-color: white;width: auto;margin-top: 50px;margin-bottom: 50px;">
		<h2>Liste des questions"<span style="color: #82D02F;">{{$examen->titre}}</span> "</h2>
	  @foreach($examen->questions->take(1) as $quest)
	  <div style="margin: 20px;">
			<ul>
		 		<li style="list-style-type: disc;"><h3>{{$quest->annonce}}</h3></li>
			</ul>
			<input type="hidden" name="questions" class="form-control" placeholder="reponse" value="{{$quest->id}}">
			<input type="hidden" name="choixVrai" class="form-control" placeholder="reponse" value="{{$quest->choixVrai}}">
			<input type="hidden" name="user_id" value="{{Auth::user()->id}}" class="form-control" placeholder="reponse"><br>
			<h4><input type="checkbox" name="reponce" value="{{$quest->choix1}}" id="ch1"><label for="ch1">{{$quest->choix1}}	</label></h4><br>
			<h4><input type="checkbox" name="reponce" value="{{$quest->choix2}}" id="ch2"><label for="ch2">{{$quest->choix2}}	</label></h4><br>
			<h4><input type="checkbox" name="reponce" value="{{$quest->choix3}}" id="ch3"><label for="ch3">{{$quest->choix3}}	</label></h4><br>
		</div>
		@endforeach
		<input type="submit" class="btn btn-primary " name="" style="margin-left: 400px;margin-bottom: 20px;"  value="Rèpondre">
	</div>
	
</div>
{!! Form::close() !!}

@endsection