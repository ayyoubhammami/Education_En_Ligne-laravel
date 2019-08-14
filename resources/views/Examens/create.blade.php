@extends('layouts.template')
@section('content')

    <div class="row"  style="margin-top: 50px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Créer Nouvel examen</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('Examens.index')}}"> Retour</a>
            </div>
        </div>
    </div>


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
  {!! Form::open(array('route' => 'Examens.store','method'=>'POST','files'=>'true')) !!}
 <label>Thème du Examen </label>
              <select  class="productcategory form-control" id="prod_cat_id">

                  <option value="0" disabled="true" selected="true">-Select-</option>
                  @foreach(App\Theme::all() as $cat)
                      <option value="{{$cat->id}}">{{$cat->nom}}</option>
                  @endforeach

              </select><br>

              <label>Catégorie du Examen </label>
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
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titre:</strong>
                {!! Form::text('titre', null, array('placeholder' => 'Titre','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Note:</strong>
                {!! Form::number('note', null, array('placeholder' => 'Note','class' => 'form-control')) !!}
            </div>
        </div>
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
         <button type="submit" class="btn btn-primary">suivant <span class="fa fa-arrow-right"></span></button>
         {!! Form::close() !!}
        </div> 
    </div>
    


@endsection