@extends('layouts.template')
@section('content')
 <style type="text/css">

 #imaginary_container{
    margin-top:20%; /* Don't copy this */
}
.stylish-input-group .input-group-addon{
    background: white !important; 
}
.stylish-input-group .form-control{
  border-right:0; 
  box-shadow:0 0 0; 
  border-color:#ccc;
}
.stylish-input-group button{
    border:0;
    background:transparent;
}</style>



<style class="cp-pen-styles">html, body {
  background-color: #f0f2fa;
  font-family: "PT Sans", "Helvetica Neue", "Helvetica", "Roboto", "Arial", sans-serif;
  color: #555f77;
  -webkit-font-smoothing: antialiased;
}

input, textarea {
  outline: none;
  border: none;
  display: block;
  margin: 0;
  padding: 0;
  -webkit-font-smoothing: antialiased;
  font-family: "PT Sans", "Helvetica Neue", "Helvetica", "Roboto", "Arial", sans-serif;
  font-size: 1rem;
  color: #555f77;
}
input::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
  color: #ced2db;
}
input::-moz-placeholder, textarea::-moz-placeholder {
  color: #ced2db;
}
input:-moz-placeholder, textarea:-moz-placeholder {
  color: #ced2db;
}
input:-ms-input-placeholder, textarea:-ms-input-placeholder {
  color: #ced2db;
}

p {
  line-height: 1.3125rem;
}

.comments {
  margin: 2.5rem auto 0;
  max-width: 60.75rem;
  padding: 0 1.25rem;
}

.comment-wrap {
  margin-bottom: 1.25rem;
  display: table;
  width: 100%;
  min-height: 5.3125rem;
}

.photo {
  padding-top: 0.625rem;
  display: table-cell;
  width: 3.5rem;
}
.photo .avatar {
  height: 2.25rem;
  width: 2.25rem;
  border-radius: 50%;
  background-size: contain;
}

.comment-block {
  padding: 1rem;
  background-color: #fff;
  display: table-cell;
  vertical-align: top;
  border-radius: 0.1875rem;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.08);
}
.comment-block textarea {
  width: 100%;
  resize: none;
}

.comment-text {
  margin-bottom: 1.25rem;
}

.bottom-comment {
  color: #acb4c2;
  font-size: 0.875rem;
}

.comment-date {
  float: left;
}

.comment-actions {
  float: right;
}
.comment-actions li {
  display: inline;
  margin: -2px;
  cursor: pointer;
}
.comment-actions li.complain {
  padding-right: 0.75rem;
  border-right: 1px solid #e1e5eb;
}
.comment-actions li.reply {
  padding-left: 0.75rem;
  padding-right: 0.125rem;
}
.comment-actions li:hover {
  color: #0095ff;
}
</style>
   <!--=========== BEGIN COURSE BANNER SECTION ================-->












<section id="imgBanner">
<!------ Include the above in your HEAD tag ---------->
  <div class="row" style="margin-top:-50px;">
        <div class="col-sm-6 col-sm-offset-2">
            <div id="imaginary_container" > 
                <div class="input-group stylish-input-group">
                    <input type="text" class="form-control"  placeholder="Search" >
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div>
            </div>
        </div>
    </div>
 </section>    
    <!--=========== BEGIN CONTACT SECTION ================-->
    <section id="contact"  style="margin-top:2px;margin-left:-50px; width:1025px;">   
       <section>
      <div class="col-sm-10" style="background-color:; margin-top:-30px; margin-left:20px; width:730px;">  
       <div class="timeline-body">
          <link href="http://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
          <script src="http://vjs.zencdn.net/4.12/video.js"></script>
            <style type="text/css">
                    .vjs-big-play-button {
                        margin-top: 25%;
                        margin-left: 35%;
                        width: 20%;
                        height: 20%; }
                      .vjs-default-skin .vjs-control-bar,
                      .vjs-default-skin .vjs-big-play-button { background: rgba(80,165,248,0.84) }
                      .vjs-default-skin .vjs-slider { background: rgba(80,165,248,0.27999999999999997) }
                      .vjs-default-skin .vjs-control-bar { font-size: 109% }
            </style>
            <iframe src="{{asset('/uploads/vedios/'.$cour->fichier)}}?rel=0" frameborder="0" 
                scrolling="no" 
              muted="true"
               allowfullscreen width="100%"
               class="video-js center vjs-default-skin " controls preload="auto" width="700" height="350"></iframe>                                
       </div>
        <div>
              <h4><b> {{$cour->titreV}}:
               {{$cour->description}} </b> </h4> publié le &nbsp;{{$cour->created_at->format('d/M/Y')}} 
        </div>
        <h1>Merci de donné votre note </h1>
            <fieldset class="rating" >
                   <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                   <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                   <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                   <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                   <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars">   </label>
                   <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                   <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                   <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                   <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                  
                   <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks           big time - 0.5 stars"></label>
               </fieldset>
<style type="text/css">
  @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

fieldset, label { margin: 0; padding: 0; }
h1 { font-size: 1.5em; margin: 10px; }

/****** Style Star Rating Widget *****/

.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 
</style>


<br><br>
<div id="fb-root" ></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.12&appId=1996405730609370&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-href="" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" ></div>
<br><br>        
       <section style="background-color: #DDE7F3;padding: 15px;border-radius: 10px;">
           <div class="comments">
               <div class="comment-wrap">
                    <div class="photo">
                        <div class="pull-left image">
                            <img src="{{asset('/avatar/'.Auth::user()->avatar)}}" class="img-circle" alt="User Image" width="25">
                        </div>
                       </div>
                    <div class="comment-block">
                       <form method="post" action="{{route('comment')}}">
                          @csrf
                           <input type="hidden" name="cour"  value="{{$cour->id}}">
                               <textarea id="" cols="30" name="body" style="font-size: 14px; " rows="3" placeholder="Ajouter commentaire..."></textarea> 
                        </div>  
                              <input type="submit"  value="comment" class="btn btn-lg"> 
                    </div>
                        </form>
           @foreach($cour->comments as $comment)
      <div class="comment-wrap">
        <div class="photo">
          <img src="{{asset('/avatar/'.$comment->user->avatar)}}" class="img-circle" alt="{{$comment->user->name}}" width="20">          
        </div>      
        <div class="comment-block">        
            <p class="comment-text"><h4> {{$comment->body}}</h4></p>
            <div class="bottom-comment">
                <div class="comment-date">{{$comment->created_at}}</div>
                @if($comment->user == Auth::user())
                <ul class="comment-actions">
                    <li  class="complain"><a class="btn " id="edit{{ $comment->id }}"><small>Modifier</small></a></li>
                   <li class="reply"> <a class="btn" href="{{route('delete',['id'=>$comment->id])}}"> <small>Supprimer</small> </a></li>
                </ul>
                @endif
            </div>
            
        </div>
        
    </div>@endforeach



 <div class="card-footer">
      <!-- 
 <a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Modifier</a> -->
                        
  </div>
<!-- Subscribe for upcomming event modal -->
@foreach(App\Comment::all() as $comment)
<div id="editModal{{$comment->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
            </div>
            <div class="modal-body">
               <form method="post" action="{{route('updateComment',['id'=>$comment->id])}}">
                @csrf
                    <div class="form-group">
                        <label for="email">Modifier mon commentaire</label>
                        <input type="text" class="form-control" id="email" name="body" aria-describedby="emailHelp" placeholder=""         value="{{$comment->body}}"> 
                        <small id="emailHelp" class="form-text text-muted"></small> 
                    </div>
                
            </div>
            <div class="modal-footer">
               
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-success">Enregistrer</button>
                </form>
            </div>
        </div>
        
    </div>
</div>
@endforeach
<!-- /Subscribe for upcomming event modal -->
  
</section>

   </div>
  <div class="col-sm-6 col-sm-offset-1" style="background-color: ; margin: 10px;padding: 5px; width: 250px; margin-top:-30px">        
              @foreach(App\Cour::where('categorie_id',$cour->categorie->id)->get() as $coure)
              @if($coure->user->id==$cour->user->id)      
              <div class="timeline-item">
               
                <div class="timeline-body col-sm-12">
                  <div class="embed-responsive embed-responsive-4by3">
                   <link href="http://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
                    <script src="http://vjs.zencdn.net/4.12/video.js"></script>
          
                    <style type="text/css">
                    .vjs-big-play-button {
                        margin-top: 18% ;
                        margin-left: 40%;
                        width: 10% ;
                        height: 10% ;  
                    } 

                      .vjs-default-skin .vjs-control-bar,
                      .vjs-default-skin .vjs-big-play-button { background: rgba(80,165,248,0.6) }
                      .vjs-default-skin .vjs-slider { background: rgba(80,165,248,0.279) }
                      .vjs-default-skin .vjs-control-bar { font-size: 110% }
                    </style> <div>
                    <video id="MY_VIDEO_1" class="video-js center vjs-default-skin  vjs-big-play-centered  " controls preload="auto" width="150" height="100" margin-top="-50" poster="{{asset('/uploads/images/'.$coure->image)}}" data-setup="{}">
                    <source src="{{asset('/uploads/vedios/'.$coure->fichier)}}" type='video/mp4'>
                    <source src="{{asset('/uploads/vedios/'.$coure->fichier)}}" type='video/webm'>
                    </video>
                <div  style="color:#ffffff;padding:1px;"><a href="{{route('video',['id'=>$coure->id])}}"><h4> {{$coure->titreV}}</h4></a> </div>

                     <hr > 
                  </div>
               </div>
             </div>
             @endif
             @endforeach 
    </div>      
</section>   

 </div>

@endsection