@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">
                <div class="col-lg-12 well">
                    <form method="POST" action="{{ route('register') }}">
                        <div class="card-body">
                            <div class="col-lg-12 well">
                                <div class="col">
                                    <div class="jumbotron" id="transparent-grey">
                                        <div class="container">
                                            <div class="text-center" style="margin-top: -30px; color: #438DBA; font-family: Roboto;">
                                                 <h1><b>Chère apprenant</b></h1>
                                            </div>
                                            <div class="row">
                                                <p style="font-size: 25pt; font-weight:bold">
                                                    suivez des cours 100% en ligne avec un prix raisonnable 
                                                </p>
                                            </div>
                                             <div class="row">                    
                                                <div class="col-md-4">
                                                    <img width="250" src="/imgg/profil.png">   
                                                </div>
                                              <div class="col-md-8" style="color: #438DBA;"> <br>                           
                                                <h3><ol>*Découvrir tout les bénéfiques </ol></h3>
                                                <h3><ol>*enréchir votre expérinece </ol>
                                                <ol>* suivre des cours </ol></h3>
                                                <h3><ol>* avoir une attestation</ol></h3>
                                              </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 col-lg-12 col-lg-offset-2 col-sm-offset-2" ><hr>
                                                </div>
                                            </div>
                                        </div>
                                     <p class="fleft" style="color: red; margin-top: 10px; margin-left: 110px;">
                                        <b>NB:</b>
                                            * Les champs sont obligatoires
                                        </p>
                                     <div class="card-body">
                                        <div class="col-lg-12 well">
                                            <form method="POST" action="{{ route('register') }}">
                                                @csrf 
                                                <div class="row">
                                                    <div class="col-sm-12 form-group">   
                                                        <div class="form-group row">
                                                            <label for="role_id" class="col-md-4 col-form-label text-md-right">Type d'inscription
                                                            </label><br>
                                                          <div class="col-md-6">
                                                            <select name="role_id" class="form-control" >
                                                                @foreach(\App\Role::where('name','=','Apprenant')->get() as $role)
                                                                <option value="{{$role->id}}" selected>{{$role->name}}</option>
                                                                @endforeach
                                                            </select>
                                                            @if($errors->has('role_id'))
                                                            <p style="color: red;"> {{ $errors->first('role_id') }}</p>
                                                            @endif
                                                          </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                     <div class="col-sm-12 form-group">
                                                        <div class="form-group row">
                                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom et prénom') }} <span  style="color:red;"><b>*</b>    </span> 
                                                            </label>
                                                          <div class="col-md-6">
                                                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                                             @if ($errors->has('name'))
                                                            <span class="invalid-feedback">
                                                             <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                            @endif
                                                          </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="email"  class="col-md-4 col-form-label text-md-right">{{ __('Adresse mail') }}<span  style="color:red;"><b>*</b></span> 
                                                            </label>
                                                          <div class="col-md-6">
                                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                                            @if ($errors->has('email'))
                                                                <span class="invalid-feedback">
                                                                    <strong>{{ $errors->first('email') }}</strong>
                                                                </span>
                                                            @endif
                                                          </div>
                                                        </div>
                                                 <div class="form-group row">
                                                    <label for="cin" class="col-md-4 col-form-label text-md-right">CIN<span  style="color:red;">*</span></label>
                                                     <div class="col-md-6">
                                                        <input type="text" name="cin" placeholder="entrer votre numero cin .." value="{{ old('cin')}}" class="form-control">
                                                         @if($errors->has('cin'))
                                                        <p style="color: red;"> {{ $errors->first('cin') }}</p>
                                                        @endif
                                                     </div>
                                                        
                                                 </div>  
                                                 <div class="form-group row">
                                                    <label for="sexe" class="col-md-4 col-form-label text-md-right"   name="sexe" value="{{ old('sexe')}}" >Sexe<span  style="color:red;">*</span></label>
                                                    <input type="radio" name="sexe" id="male" value="homme">
                                                     <label for="male">Homme</label> &nbsp;&nbsp;&nbsp;&nbsp;
                                                     <input type="radio" name="sexe" id="female" value="femme"><label for="female">Femme</label>
                                                     <div class="col-md-6" style="margin-left: 200px;">
                                                      @if($errors->has('sexe'))
                                                        <p style="color: red;"> {{ $errors->first('sexe') }}</p>
                                                        @endif
                                                       </div>  
                                                </div>

                                                 <div class="form-group row">
                                                    <label for="date" class="col-md-4 col-form-label text-md-right">Date de naissance<span  style="color:red;">*</span></label>
                                                  <div class="col-md-6">
                                                    <input type="date" name="date" placeholder="Enter votre Nom.." value="{{ old('date')}}" class="form-control">
                                                  </div>
                                                  <div class="col-md-6" style="margin-left: 200px;">
                                                    @if($errors->has('date'))
                                                    <p style="color: red;"> {{ $errors->first('date') }}</p>

                                                    @endif 
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('mot de passe') }}<span  style="color:red;"><b>*</b></span> </label>

                                                    <div class="col-md-6">
                                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                                        <div class="col-md-6" style="margin-left: 200px;">
                                                        <div class="col-md-6" style="margin-left: 200px;">  
                                                        @if ($errors->has('password'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                      </div>
                                                      </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmer mot de passe') }}<span  style="color:red;"><b>*</b></span> </label>

                                                    <div class="col-md-6">
                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                                    </div>
                                                    <div class="col-md-6" style="margin-left: 200px;">
                                                       @if ($errors->has('password_confirmation'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                               <div class="form-group row">
                                                    <label for="select1" class="col-md-4 col-form-label text-md-right">Niveau d'étude <span  style="color:red;"><b>*</b></span> </label>
                                                 <div class="col-md-6">
                                                    <select  name="select1" class="form-control" >
                                                        
                                                        @foreach(App\niveau::all() as $Niveau) 
                                                        <option value="{{$Niveau->nom_niv}}">{{$Niveau->nom_niv}}</option>
                                                        @endforeach
                                                        <option value="">Autre</option>
                                                    </select>
                                                 </div>
                                                  <div class="col-md-6" style="margin-left: 200px;">
                                                    @if($errors->has('select1'))
                                                    <p style="color: red;"> {{ $errors->first('select1') }}</p>
                                                    @endif
                                                  </div>
                                               </div>  
                                            <div class="form-group row" > 
                                                <label  for="select2" class="col-md-4 col-form-label text-md-right">Spécialité <span  style="color:red;"><b>*</b></span> </label><br>
                                                <div class="col-md-6">
                                                     <select name="select2"   class="form-control" >
                                                         
                                                        @foreach(App\theme::all() as $Theme)   
                                                        <option value="{{$Theme->id}}">{{$Theme->nom}}</option>
                                                        @endforeach   
                                                        <option value="1">Autre</option>   
                                                    </select>
                                                    @if($errors->has('select2'))
                                                    <p style="color: red;"> {{ $errors->first('select2') }}</p>
                                                    @endif
                                                 </div> 
                                            </div>
                                             <div class="form-group row">
                                                <label  for="selectelt2" class="col-md-4 col-form-label text-md-right">Numéro de téléphone<span  style="color:red;"><b>*</b></span></label>
                                                 <div class="col-md-6">
                                                    <input type="Int" name="tel" placeholder="+216 55 552 551.." value="{{ old('tel')}}" class="form-control">
                                                 </div>
                                                    <div class="col-md-6" style="margin-left: 200px;">

                                                    @if($errors->has('tel'))
                                                        <p style="color: red;"> {{ $errors->first('tel') }}</p>
                                                    @endif
                                                  </div>
                                              </div>
                                            </div>
                                            <body style=" background-image:url(/imgg/bk.jpg); ">
                                                <div class="form-group row mb-0"  style="color: #438DBA; margin-left:250px;">
                                                    <input type="submit" class="btn btn-primary" value="Register" style="margin-right:10px;" >
                                                    <input type="reset" class="btn btn-social" name="" value="annuler"> 
                                                </div>
                                            </div>
                                        {!! Form::close() !!}
                                    </div>  
                                 </div>
                                </div>
                            </div>
                        <div class="col-lg-12" style="background-color: white;height: 30px;">    
                            <footer class=" footer container-fluid text-center " style="border-color: white; text-align: center;">
                              <p style="color: black;"><strong>Copyright</strong> © 2017-2018 Wecode. All rights reserved.</p>
                            </footer>
                        </div> 
@endsection




