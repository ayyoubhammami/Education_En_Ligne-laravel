@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <div class="col-lg-12 well">
                        <div class="col">
                            <div class="jumbotron" id="transparent-grey">
                                <div class="container"><div class="text-center" style="margin-top: -30px; color: #438DBA; font-family: Roboto;"> <h1><b>Chère Formateur</b></h1></div>
                                        <div class="row">
                                            <p style="font-size: 25pt; font-weight:bold">
                                                 Vos cours seront vendus! 
                                                    Voulez-vous vous s'inscrire pour un accès en ligne?
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                             <img width="250" src="/imgg/profil.png">   
                                            </div>
                                            <div class="col-md-8" ; style= "color: #438DBA;"> <br>
                                                <h3><ol>*prix raisonnable</ol></h3>
                                                <h3><ol>*Découvrir tout les bénéfiques </ol></h3>
                                                <h3><ol>*enréchir votre carrière</ol>
                                                <ol>*publier vos cours </ol></h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-lg-12 col-lg-offset-2 col-sm-offset-2" >
                                             <hr>
                                            </div>
                                        </div>
                                </div>
                                <p class="fleft" style="color: red; margin-top: 10px; margin-left: 110px;"><b>NB:</b>
                                     *Les champs sont obligatoires
                                </p>

        {!! Form::open(array('route' => 'addFormateur','method'=>'POST','files'=>'true')) !!}
                        @csrf
                        <div class="row">
                            <div class="col-sm-12 form-group">
                           
                        <div class="form-group row">
                            <label for="role_id" class="col-md-4 col-form-label text-md-right">Type d'inscription</label><br>
                            <div class="col-md-6">
                                <select name="role_id" class="form-control" >
                                    @foreach(\App\Role::where('name','=','Formateur')->get() as $role)
                                    <option value="{{$role->id}}" selected>{{$role->name}}</option>
                                    @endforeach
                                </select>
                             </div>
                                @if($errors->has('role_id'))
                                <p style="color: red;"> {{ $errors->first('role_id') }}</p>

                                @endif
                         </div>
                        </div></div>


                        <div class="row">
                            <div class="col-sm-12 form-group">
                           
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom et prénom') }}<span  style="color:red;"><b>*</b></span> </label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>@if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                             <div class="col-md-6" style="margin-left: 200px;">
                                
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse mail') }}<span  style="color:red;"><b>*</b></span> </label>

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
                            <label for="cin" class="col-md-4 col-form-label text-md-right">CIN<span  style="color:red;"><b>*</b></span></label>
                         <div class="col-md-6">
                            <input type="int" name="cin" placeholder="entrer votre numero cin .." value="{{ old('cin')}}" class="form-control">
                          </div>
                             <div class="col-md-6" style="margin-left: 200px;">
                                @if($errors->has('cin'))
                                <p style="color: red;"> {{ $errors->first('cin') }}</p>

                                @endif
                         </div>
                      </div>
                          <div class="form-group row">
                            <label for="sexe" class="col-md-4 col-form-label text-md-right"   name="sexe" value="{{ old('sexe')}}" >Sexe<span  style="color:red;"><b>*</b></span></label>
                            <div class="col-md-6">
                                 <input type="radio" name="sexe" id="male" value="homme">
                                 <label for="male">Homme</label> &nbsp;&nbsp;&nbsp;
                                 <input type="radio" name="sexe" id="female" value="femme"><label for="female">Femme</label>
                        </div>
                             <div class="col-md-6" style="margin-left: 200px;">
                                  @if($errors->has('sexe'))
                                <p style="color: red;"> {{ $errors->first('sexe') }}</p>

                                @endif
                                 
                            </div></div>



                           <div class="form-group row">
                                <label for="date" class="col-md-4 col-form-label text-md-right">Date de naissance <span  style="color:red;"><b>*</b></span> </label>
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
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe ') }}<span  style="color:red;"><b>*</b></span> </label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">{{ __('Confirmer mot de passe') }}<span  style="color:red;"><b>*</b></span> </label>

                            <div class="col-md-6">
                                <input id="password_confirmation" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" required>
                                @if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                        
                         <div class="form-group row"  class="form-control">
                            
                            <label for="niveau" class="col-md-4 col-form-label text-md-right">Niveau d'étude  </label><br>
                                    <div class="col-md-6">         
                                    <select class="form-control"  name="niveau">

                                    @foreach(App\niveau::where('id','!=','1')->get() as $Niveau) 
                                    
                                    <option value="{{$Niveau->nom_niv}}">{{$Niveau->nom_niv}}</option>
                                    
                                    @endforeach
                                    <option value="Autre">Autre</option>
                                    @if($errors->has('niveau'))
                                <p style="color: red;"> {{ $errors->first('niveau') }}</p>

                                @endif
                                
                                </select>
                            </div>
                                
                            </div>
                        
                    <div class="form-group row"> 
                        <label  for="specialite" class="col-md-4 col-form-label text-md-right">Spécialité  </label><br>
                            <div class="col-md-6">
                                <select name="specialite" class="form-control" >
                                     
                                     @foreach(App\theme::all() as $Theme)   
                                    <option value="{{$Theme->id}}">{{$Theme->nom}}</option>
                                    @endforeach   
                                    <option value="1">autre</option>   
                               </select>
                                
                                </div> 
                                @if($errors->has('specialite'))
                                <p style="color: red;"> {{ $errors->first('specialite') }}</p>

                                @endif
                                
                         </div>
                        


                         <div class="form-group row">
                            <label  for="tel" class="col-md-4 col-form-label text-md-right">Numéro de téléphone<span  style="color:red;"><b>*</b></span> </label>
                         <div class="col-md-6">
                            <input type="int" name="tel" placeholder="+216 55 552 551.." value="{{ old('tel')}}" class="form-control">
                         </div>
                            <div class="col-md-6" style="margin-left: 200px;">
                            @if($errors->has('tel'))
                                <p style="color: red;"> {{ $errors->first('tel') }}</p>

                            @endif
                        </div>
                    </div>



                    <div class="form-group row">                             
                        <label for="file" class="col-md-4 col-form-label text-md-right">Ajouter votre cv <span  style="color:red;"><b>*</b></span> </label>
                             <div class="col-md-6">
                                    <span class="btn btn-default btn-file " >
                                        <input type="file" id="imgInp" name="cv" class="form-control">
                                    </span>                                
                            </div>
                            <div class="col-md-6" style="margin-left: 200px;">
                                @if($errors->has('cv'))
                                    <p style="color: red;"> {{ $errors->first('cv') }}</p>
                                @endif  
                            </div>  
                    </div>
                   

</style>
<script type="text/javascript">
  $(document).ready( function() {
      $(document).on('change', '.btn-file :file', function() {
    var input = $(this),
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
      
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });   
  });
  
</script>
<!--fi upload image-->


   

<body style=" background-image:url(/imgg/bk.jpg); ">
    



              <div class="form-group row mb-0"  style="color: #438DBA;">
                            <div class="col-md-6 offset-md-4" >
                                <button type="submit" class="btn btn-primary" >
                                    Register
                                </button>
                        <input type="reset" class="btn btn-social" name="" value="annuler"> 
                        </div> </div>
                        
                                 
                    </div>
                {!! Form::close() !!}
                </div>
    </div>
</div>



<div class="col-lg-12" style="background-color: white;height: 30px;">
<footer class="main-footer">
    <div class="text-center hidden-xs"> 
    <strong>Copyright &copy; wecode <a href="https://WeCode.com">wecode land</a>.</strong> Tous les droits réservé. </div>
  </footer>

</div>

  
@endsection





