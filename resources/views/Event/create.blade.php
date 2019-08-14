@extends('layouts.template')
@section('content')

<section class="content-header" style="padding-top: 10px;">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> accueil</a></li>
        <li class="active">évènement</li>
      </ol>
</section>

    <div class="row" style="margin-top: 50px;">
         <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Event.index') }}"> Retour</a>
            </div>
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Créer un nouvel évènement</h2>
            </div>

        </div>
    </div>
  <section class="content">
     <div class="box box-warning">
        <div class="box-header with-border">
              <h3 class="box-title">Publier évènnement </h3>
        </div>
            <!-- /.box-header -->
        <div class="box-body">
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

            {!! Form::open(array('route' => 'Event.store','method'=>'POST','files'=>'true')) !!}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                         <strong>Type:</strong>
                         <div class="form-group row" >                           
                                <div class="col-md-6">
                                    <select name="Type"  id="select"  class="form-control" >
                                    <option value="null">Choisir type</option>
                                    <option value="compétition">Compétition</option>
                                    <option value="vidéo_en_direct">Vidéo en direct</option>
                                     </select>
                                     @if($errors->has('Type'))
                                        <p style="color: red;"> {{ $errors->first('Type') }}</p>
                                     @endif          
                                </div> 
                          </div>
                                <style>
                                    .masquer{
                                        display:none;
                                         }
                                    .afficher{
                                     display:block;
                                    }
                                 </style>
                                    <div id="video" class="masquer">
                                        <h3 style="color: red;background-color: #D7DFEA;"> pour démarrer une session en direct , copier le  lien                        de votre vidéo et  le coller si dessous dans la description.
                                     </h3>
                                 <IFRAME 
                                         src="https://www.ustream.tv/broadcaster/23587453" width="850" height="600">       
                                 </IFRAME><br><label>Lien</label>
                                 <input type="lien" name="lien" class="form-control" placeholder="lien de video live">        
                                 </div>      
                                 <div id="compétition" class="masquer">  
                                 </div> 
                                 <!-- include jQuery library --> 
                                 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script> 
                                 <script>            
                                     $("#select").change(function () {
                                         select = document.getElementById("select");
                                         choice = select.selectedIndex;
                                         valeur = select.options[choice].value;                
                    
                                          $(".afficher").removeClass("afficher").addClass("masquer"); 
                    
                                         if(valeur == "vidéo_en_direct"){
                                                $("#video").removeClass("masquer").addClass("afficher");
                                          }else if(valeur == "compétition"){
                                                $("#compétition").removeClass("masquer").addClass("afficher");
                                         }else if(valeur == "compétition"){
                                                $("#contact").removeClass("masquer").addClass("afficher");
                                         }
                    
                                        });
                                 </script>


            <label>Thème du Evénement </label>
              <select  class="productcategory form-control" id="prod_cat_id">

                  <option value="0" disabled="true" selected="true">-Select-</option>
                  @foreach(App\Theme::all() as $cat)
                      <option value="{{$cat->id}}">{{$cat->nom}}</option>
                  @endforeach

              </select><br>

              <label>Catégorie du Evénement </label>
              <select  class="nom form-control" name="categ">

                  <option value="0" disabled="true" selected="true" >Nom du Catégorie</option>
              </select><br>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

            <script type="text/javascript">
                $(document).ready(function(){

                    $(document).on('change','.productcategory',function(){
                        // console.log("hmm its change");

                        var cat_id=$(this).val();
                        // console.log(cat_id);
                        var div=$(this).parent();

                        var op=" ";

                        $.ajax({
                            type:'get',
                            url:'{!!URL::to('findProductName')!!}',
                            data:{'id':cat_id},
                            success:function(data){
                                //console.log('success');

                                //console.log(data);

                                //console.log(data.length);
                                op+='<option value="0" selected disabled>choisir Categorie</option>';
                                for(var i=0;i<data.length;i++){
                                op+='<option value="'+data[i].id+'">'+data[i].nom+'</option>';
                               }

                               div.find('.nom').html(" ");
                               div.find('.nom').append(op);
                            },
                            error:function(){

                            }
                        });
                    });



                      $(document).on('change','.nom',function () {
                        var prod_id=$(this).val();

                        var a=$(this).parent();
                        console.log(prod_id);
                        var op="";
                        $.ajax({
                            type:'get',
                            url:'{!!URL::to('findPrice')!!}',
                            data:{'id':prod_id},
                            dataType:'json',//return data will be json
                            success:function(data){
                                console.log("price");
                                console.log(data.price);

                                // here price is coloumn name in products table data.coln name

                                a.find('.prod_price').val(data.price);

                            },
                            error:function(){

                            }
                        });


                    });

                });

            </script>
              
                 <strong>Titre:</strong>
            {!! Form::text('titre', null, array('placeholder' => 'Titre','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Date:</strong>
                        {!! Form::date('date', null, array('placeholder' => 'date','class' => 'form-control')) !!}
                    </div>
                     <div class="form-group">
                        <strong>Temps:</strong>
                        {!! Form::Time('temps', null, array('placeholder' => 'temps','class' => 'form-control')) !!}
                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Description:</strong>
                        {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}
                    </div>
                    <div class="form-group">
                        <input type="file" name="file" accept="audio/*,video/*,image/*">
                        <p class="help-block">Max.100MB</p>
                    </div>
                                    <div class="row setup-content">
                   <div class="col-xs-12">
                       <div class="col-md-12 well">
                           <label>Image</label>   
                        <input type="file" name="image" value="{{ old('image') }}" accept="file_extension|audio/*|video/*|image/*|media_type"/>
                          @if ($errors->has('image'))
                               <span class="invalid-feedback">
                                  <strong style="color: red;">{{ $errors->first('image') }}</strong>
                               </span>
                          @endif
                      </div>
                    </div>
                </div>     
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Publier</button>
                </div>
            </div>
            {!! Form::close() !!}
         </div>
    </div>
</section>
@endsection