@extends('layouts.template')
@section('content')
 <section id="imgBanner">
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
       <!--=========== BEGIN COURSE BANNER SECTION ================-->


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!--- Include the above in your HEAD tag-->

   
        </section>
        <!--=========== END COURSE BANNER SECTION ================-->
        
        <!--=========== BEGIN CONTACT SECTION ================-->
        <section id="contact">
          
           <div class="row">
              <div class="col-lg-12 col-md-12"> 
                <div class="title_area col-md-offset-0">
                  <h2 class="title_two">Sécurité des paiements </h2>
                    <h5 style="line-height: 20px;">

                        Tous les paiements effectués sur jachete.tn sont traités, évalués et contrôlés par le système de paiement<br> de La Poste Tunisienne, leader tunisien du paiement sécurisé. Ceci nous permet de lutter contre la fraude à la carte bancaire ou postale.<br>

                        Si le système estime qu'il y a un risque et refuse d'assurer une transaction, il se peut alors que votre commande soit refusée.<br>

                        Ce processus utilise le protocole HTTPS, le plus sûr à ce jour en matière de paiement sécurisé. Ce protocole permet <br>de faire transiter toutes vos données confidentielles de manière inintelligible sur le Web. <br>Toute anomalie constatée par notre partenaire lors de la vérification <br>entraînera le refus  de votre commande.
                    </h5>
                </div>
              </div>
           </div>
         
       
          
  <style>
           body {
        margin-top:40px;
    }
    .stepwizard-step p {
        margin-top: 10px;
    }
    .stepwizard-row {
        display: table-row;
    }
    .stepwizard {
        display: table;
        width: 50%;
        position: relative;
    }
    .stepwizard-step button[disabled] {
        opacity: 1 !important;
        filter: alpha(opacity=100) !important;
    }
    .stepwizard-row:before {
        top: 14px;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 100%;
        height: 1px;
        background-color: #ccc;
        z-order: 0;
    }
    .stepwizard-step {
        display: table-cell;
        text-align: center;
        position: relative;
    }
    .btn-circle {
        width: 30px;
        height: 30px;
        text-align: center;
        padding: 6px 0;
        font-size: 12px;
        line-height: 1.428571429;
        border-radius: 15px;
    }</style>

    <style> 
    /* Padding - just for asthetics on Bootsnipp.com */
    body { margin-top:20px; }

    /* CSS for Credit Card Payment form */
    .credit-card-box .panel-title {
        display: inline;
        font-weight: bold;
    }
    .credit-card-box .form-control.error {
        border-color: red;
        outline: 0;
        box-shadow: inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(255,0,0,0.6);
    }
    .credit-card-box label.error {
      font-weight: bold;
      color: red;
      padding: 2px 8px;
      margin-top: 2px;
    }
    .credit-card-box .payment-errors {
      font-weight: bold;
      color: red;
      padding: 2px 8px;
      margin-top: 2px;
    }
    .credit-card-box label {
        display: block;
    }
    /* The old "center div vertically" hack */
    .credit-card-box .display-table {
        display: table;
    }
    .credit-card-box .display-tr {
        display: table-row;
    }
    .credit-card-box .display-td {
        display: table-cell;
        vertical-align: middle;
        width: 100%;
    }
    /* Just looks nicer */
    .credit-card-box .panel-heading img {
        min-width: 180px;
    }
    </style>


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Include the above in your HEAD tag -->

    <div class="container">
      
    <div class="stepwizard col-md-offset-2">
        <div class="stepwizard-row setup-panel">
          <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-primary ">Payment securisé</a>
            <p></p>
          </div>
         
        </div>
      </div>
      
      
        <div class="row setup-content" id="step-3">
          <div class="col-xs-6 col-md-offset-2">
            <div class="col-md-12">

    <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">        
                            <!-- CREDIT CARD FORM STARTS HERE -->
                            <div class="panel panel-default credit-card-box">
                                <div class="panel-heading display-table" >
                                    <div class="row display-tr" >
                                        <h3 class="panel-title display-td" >Payment Details</h3>
                                        <div class="display-td" >                            
                                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                                        </div>
                                    </div>                    
                                </div>
                                <div class="panel-body">
                                    <form role="form" method="POST" action="{{route('payerA',['id'=>$cour->id])}}">
                                    @csrf
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="form-group">
                                                    <label for="cardNumber">Numéro du card</label>
                                                    <div class="input-group">
                                                        <input 
                                                            type="tel"
                                                            class="form-control"
                                                            name="num_card"
                                                            placeholder="Valid Card Number"
                                                            autocomplete="cc-number"
                                                            required autofocus 
                                                        />
                                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                                    </div>
                                                </div>                            
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-7 col-md-7">
                                                <div class="form-group">
                                                    <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                                    <input 
                                                        type="date" 
                                                        class="form-control" 
                                                        name="date_exp"
                                                        placeholder="MM / YY"
                                                        autocomplete="cc-exp"
                                                        required 
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-xs-5 col-md-5 pull-right">
                                                <div class="form-group">
                                                    <label for="cardCVC">CV CODE</label>
                                                    <input 
                                                        type="Number" 
                                                        class="form-control"
                                                        name="code_cv"
                                                        placeholder="CVC"
                                                        autocomplete="cc-csc"
                                                        required
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="form-group">
                                                    <label for="couponCode">COUPON CODE</label>
                                                    <input type="text" class="form-control" name="code_coupon" />
                                                </div>
                                            </div>                        
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12"> 
                                                <input type="hidden" name="cour_id" value="{{$cour->id}}">
                                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                <input type="hidden" name="paye" value="{{$cour->paye}}">
                                                <div>
                                            <input type="submit" class="btn btn-info col-xs-12" name="" value="payer" >
                                           
                                        </div>
                                            </div>
                                        </div>
                                        <div class="row" style="display:none;">
                                            <div class="col-xs-12">
                                                <p class="payment-errors"></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>            
                            <!-- CREDIT CARD FORM ENDS HERE -->        
                          </div>            
                        </div> 
           </div>
         </div>
       </div>
    </div>
  </div>
</section>
       
 

       
   

@endsection

