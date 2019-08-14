
<div class="container" style="margin-top: 40px;">

          <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
          <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
         <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
            <!------ Include the above in your HEAD tag ---------->

    <div class="col-md-8 col-md-offset-2" > 
     @if ($message = Session::get('success'))
        <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close"> &times;</a>
            <p>{{ $message }}</p>
        </div>
    @endif    
      <div class="row"><br>
         <div class="jumbotron">
          <img src="/imgg/mail.png" width="120" class="col-md-3">
              <h2>Votre demande d'inscription est mise en considération </h2> 
            <p><br><br>
                Merci d'attendre un mail de confirmation, votre compte sera accepté par notre administrateur en tenant compte de votre cv que vous avez mis.<br>
                <h3 style="color: red">
                    NB:
                </h3>
                votre compte sera désactivé jusqu'à votre payement sinon il sera supprimé dans un jour( le temps se sera compté de début d'acceptation jusqu'à l'après 24h)<br>
                merci pour votre compéhension 
            </p>
              <p>
                <a class="btn btn-primary btn-lg" href="/">Retour à la page d'acceuil</a>
              </p>
          </div>
        </div>
   </div>
</div>




<style type="text/css">
        @import url(http://fonts.googleapis.com/css?family=Roboto);
    *
    {
        font-family: 'Roboto';
    }
    body
    {
        background-image: url(/imgg/bk.jpg);
   
</style>