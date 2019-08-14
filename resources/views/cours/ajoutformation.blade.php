@extends('layouts.template')
@section('content')
<section class="content" style="margin-top: 50px;">
   <div class="box box-warning">
      <div class="box-header with-border ">
          <h3 class="box-title">Publier un cours </h3>
      </div> 
        <div class="pull-right" style="margin-top: -90px;">
                <a class="btn btn-primary" href="{{ route('cours.index') }}"><i class="fa fa-arrow-left"></i> Retour</a>
      </div>
        @if ($message = Session::get('success'))
              <div class="alert alert-success">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <p>{{ $message }}</p>
             </div>
        @endif 
      <!-- /.box-header -->
     <div class="box-body">
      <form method="post" files="true" action="{{route('saveCour')}}" enctype="multipart/form-data">
            @csrf
           <!-- text input -->
          <div class="form-group">
            <label>Titre du Cours</label>
              <input type="text" name="titre" value="{{ old('titre') }}" class="form-control" placeholder="Enter ...">
                 @if ($errors->has('titre'))
                     <span class="invalid-feedback">
                         <strong   style="color: red;">{{ $errors->first('titre') }}</strong>
                     </span>
                 @endif
          </div> 
          <div class="form-group">
            <label>Titre du Vidéo</label>
            <input type="text" name="titreV"  value="{{ old('titreV') }}" class="form-control" placeholder="Enter ...">
              @if ($errors->has('titreV'))
                <span class="invalid-feedback">
                    <strong   style="color: red;">{{ $errors->first('titreV') }}</strong>
                 </span>
              @endif
           </div>               
          <div class="form-group">
            <label>Prix</label>
            <input type="text" name="prix"  value="{{ old('prix') }}" class="form-control" placeholder="Enter ...">
              @if ($errors->has('prix'))
                  <span class="invalid-feedback">
                       <strong  style="color: red;">{{ $errors->first('prix') }}</strong>
                    </span>
               @endif
          </div>   

          <label>Thème du Cours </label>
              <select  class="productcategory form-control" id="prod_cat_id">

                  <option value="0" disabled="true" selected="true">-Select-</option>
                  @foreach(App\Theme::all() as $cat)
                      <option value="{{$cat->id}}">{{$cat->nom}}</option>
                  @endforeach

              </select><br>

              <label>Catégorie du Cours </label>
              <select  class="nom form-control" name="categ">

                  <option value="0" disabled="true" selected="true" >Nom du catégorie</option>
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

            <div class="form-group">
              <label>Description</label>
                    <textarea class="form-control" name="description"  value="{{ old('description') }}" rows="3" placeholder="Enter ..."></textarea>
                     @if ($errors->has('description'))
                         <span class="invalid-feedback">
                             <strong style="color: red;">{{ $errors->first('description') }}</strong>
                         </span>
                     @endif
             </div>
                <div class="row setup-content">
                   <div class="col-xs-12">
                       <div class="col-md-12 well">
                       <label>Vidéo</label>   
                    <input type="file" name="video" value="{{ old('video') }}"  accept="file_extension|audio/*|video/*|media_type"/>


                       </div>
                    </div>
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
        <input style="float: right;" class="btn btn-primary" type="submit" value="Publier">
      </form>
    </div>
    </div>
    </section>

@endsection