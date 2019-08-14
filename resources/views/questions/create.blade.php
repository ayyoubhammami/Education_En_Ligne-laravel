@extends('layouts.template')
@section('content')
   {!! Form::open(array('route' => 'Questions.store','method'=>'POST','files'=>'true')) !!}

 <div class="row" style="margin-top: 50px;">
 	    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Examen:</strong>
                <select name="examen" class="form-control" readonly>
                    @foreach(App\Examen::orderBy('created_at','desc')->limit('1')->get() as $examen)
                    @if($examen->user_id == Auth::user()->id)
                    <option value="{{$examen->id}}">{{$examen->titre}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="color: green;">Question1:</strong><br>
                {!! Form::text('annonce[]', null, array('placeholder' => 'question1','class' => 'form-control')) !!}
                <label>choix1</label><input type="text" name="ch1" placeholder="choix1" class="form-control"><br>
                 <label>choix2</label><input type="text" name="ch2" placeholder="choix2" class="form-control"><br>
                 <label>choix3</label><input type="text" name="ch3" placeholder="choix3" class="form-control"><br>
                 <label>repance vrai</label><input type="text" name="ch4" placeholder="repance" class="form-control"><br>
            </div>
            <div class="form-group">
                <strong style="color: green;">Question2:</strong><br>
                {!! Form::text('annonce[]', null, array('placeholder' => 'question2','class' => 'form-control')) !!}
                <label>choix1</label><input type="text" name="ch1" placeholder="choix1" class="form-control"><br>
                 <label>choix2</label><input type="text" name="ch2" placeholder="choix2" class="form-control"><br>
                 <label>choix3</label><input type="text" name="ch3" placeholder="choix3" class="form-control"><br>
                 <label>repance vrai</label><input type="text" name="ch4" placeholder="repance" class="form-control"><br>
            </div>
            <div class="form-group">
                <strong style="color: green;">Question3:</strong><br>
                {!! Form::text('annonce[]', null, array('placeholder' => 'question3','class' => 'form-control')) !!}
                <label>choix1</label><input type="text" name="ch1" placeholder="choix1" class="form-control"><br>
                 <label>choix2</label><input type="text" name="ch2" placeholder="choix2" class="form-control"><br>
                 <label>choix3</label><input type="text" name="ch3" placeholder="choix3" class="form-control"><br>
                 <label>repance vrai</label><input type="text" name="ch4" placeholder="repance" class="form-control"><br>
            </div>
            <div class="form-group">
                <strong style="color: green;">Question4:</strong><br>
                {!! Form::text('annonce[]', null, array('placeholder' => 'question4','class' => 'form-control')) !!}
                <label>choix1</label><input type="text" name="ch1" placeholder="choix1" class="form-control"><br>
                 <label>choix2</label><input type="text" name="ch2" placeholder="choix2" class="form-control"><br>
                 <label>choix3</label><input type="text" name="ch3" placeholder="choix3" class="form-control"><br>
                 <label>repance vrai</label><input type="text" name="ch4" placeholder="repance" class="form-control"><br>
            </div>
            <div class="form-group">
                <strong style="color: green;">Question5:</strong><br>
                {!! Form::text('annonce[]', null, array('placeholder' => 'question5','class' => 'form-control')) !!}
                <label>choix1</label><input type="text" name="ch1" placeholder="choix1" class="form-control"><br>
                 <label>choix2</label><input type="text" name="ch2" placeholder="choix2" class="form-control"><br>
                 <label>choix3</label><input type="text" name="ch3" placeholder="choix3" class="form-control"><br>
                 <label>repance vrai</label><input type="text" name="ch4" placeholder="repance" class="form-control"><br>
            </div>
             <div class="form-group">
                <strong style="color: green;">Question6:</strong><br>
                {!! Form::text('annonce[]', null, array('placeholder' => 'question6','class' => 'form-control')) !!}
                <label>choix1</label><input type="text" name="ch1" placeholder="choix1" class="form-control"><br>
                 <label>choix2</label><input type="text" name="ch2" placeholder="choix2" class="form-control"><br>
                 <label>choix3</label><input type="text" name="ch3" placeholder="choix3" class="form-control"><br>
                 <label>repance vrai</label><input type="text" name="ch4" placeholder="repance" class="form-control"><br>
            </div>
            <div class="form-group">
                <strong style="color: green;">Question7:</strong> <br>
                {!! Form::text('annonce[]', null, array('placeholder' => 'question7','class' => 'form-control')) !!}
                <label>choix1</label><input type="text" name="ch1" placeholder="choix1" class="form-control"><br>
                 <label>choix2</label><input type="text" name="ch2" placeholder="choix2" class="form-control"><br>
                 <label>choix3</label><input type="text" name="ch3" placeholder="choix3" class="form-control"><br>
                 <label>repance vrai</label><input type="text" name="ch4" placeholder="repance" class="form-control"><br>
            </div>
            <div class="form-group">
                <strong style="color: green;">Question8:</strong> <br>
                {!! Form::text('annonce[]', null, array('placeholder' => 'question8','class' => 'form-control')) !!}
                <label>choix1</label><input type="text" name="ch1" placeholder="choix1" class="form-control"><br>
                 <label>choix2</label><input type="text" name="ch2" placeholder="choix2" class="form-control"><br>
                 <label>choix3</label><input type="text" name="ch3" placeholder="choix3" class="form-control"><br>
                 <label>repance vrai</label><input type="text" name="ch4" placeholder="repance" class="form-control"><br>
            </div>
            <div class="form-group">
                <strong style="color: green;">Question9:</strong><br>
                {!! Form::text('annonce[]', null, array('placeholder' => 'question9','class' => 'form-control')) !!}
                <label>choix1</label><input type="text" name="ch1" placeholder="choix1" class="form-control"><br>
                 <label>choix2</label><input type="text" name="ch2" placeholder="choix2" class="form-control"><br>
                 <label>choix3</label><input type="text" name="ch3" placeholder="choix3" class="form-control"><br>
                 <label>repance vrai</label><input type="text" name="ch4" placeholder="repance" class="form-control"><br>
            </div>
            <div class="form-group">
                <strong style="color: green;">Question10:</strong><br>
                {!! Form::text('annonce[]', null, array('placeholder' => 'question10','class' => 'form-control')) !!}<label>choix1</label><input type="text" name="ch1" placeholder="choix1" class="form-control"><br>
                 <label>choix2</label><input type="text" name="ch2" placeholder="choix2" class="form-control"><br>
                 <label>choix3</label><input type="text" name="ch3" placeholder="choix3" class="form-control"><br>
                 <label>repance vrai</label><input type="text" name="ch4" placeholder="repance" class="form-control"><br>
            </div>
        </div>

 </div>
   <div class="col-xs-12 col-sm-12 col-md-12 text-center">  
         <button type="submit" class="btn btn-primary">suivant <span class="fa fa-arrow-right"></span></button>
        </div>
{!! Form::close() !!}
@endsection