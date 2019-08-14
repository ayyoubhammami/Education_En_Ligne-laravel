@extends('layouts.template')
@section('content')
<div style="width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">
<div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">
       <span style="font-size:50px; font-weight:bold"><i class="fa fa-certificate" style=""></i>
Certificat d'achèvement</span>
       <br><br>
       <span style="font-size:25px"><i>
C'est pour certifier que</i></span>
       <br><br>
       <span style="font-size:30px"><b>{{Auth::user()->name}}</b></span><br/><br/>
       <span style="font-size:25px"><i>a terminé l'examen</i></span> <br/><br/>
       <span style="font-size:30px">Examen nom</span> <br/><br/>
       <span style="font-size:20px">avec score  <b>score</b></span> <br/><br/><br/><br/>
       <span style="font-size:25px"><i>En</i></span><br>
      
      <span style="font-size:30px">{{ date('d/M/Y') }}</span>
</div>
</div>
@endsection