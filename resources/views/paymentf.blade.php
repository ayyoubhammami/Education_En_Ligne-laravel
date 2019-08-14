<!DOCTYPE html>
<html>
<head>
  <title>payment </title>
</head>
<body>
<body style=" background-image:url(/images/bkg.jpg); background-size: 3800px;">
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
                width: 50%;
            }
            /* Just looks nicer */
            .credit-card-box .panel-heading img {
                min-width: 180px;
            }
</style>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <link rel="stylesheet" href="{{ url('/') }}/admin/adminLTE/bower_components/Ionicons/css/ionicons.min.css">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('/') }}/admin/adminLTE//bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ url('/') }}/admin/adminLTE//bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  
<!------ Include the above in your HEAD tag ---------->


  <div class="container  well col-lg-8 col-sm-8 col-xm-12  col-md-offset-2 col-sm-offset-2 col-xm-offset-2 col-lg-offset-2" style="opacity: 1;overflow: scroll; height: 540px; margin-top: 50px;">
     <h1 style="text-align: center;color:red;">inscription formateur</h1><br> <h4 style="color: #757575;">Étape 1 :</h4><br><h5> Inscription 

Afin de vous inscrire pour participer aux cours en ligne veuillez s'il vous plaît remplir le formulaire d'inscription en ligne accessible au MDP Event Database. Les champs marqués d'un astérisque rouge [*] sont obligatoires. Veuillez, s'il vous plaît, prendre le temps de remplir correctement le formulaire. Après avoir cliqué sur le bouton "Soumettre", vous recevrez une réponse automatique par courriel confirmant la réception de votre demande. <br>
 
 
<h4 style="color: red;">Étape 2 :</h4><br> Paiement des frais de cours 
 
Les frais de cours sont entre 600 et 800 USD par participant et par cours. Les coordonnées bancaires seront fournies par l'UNITAR après l'enregistrement. Votre place dans le cours sera garantie une fois que vous avez reçu une facture et payé les frais d’inscription par virement bancaire.   Si vous le souhaitez, vous pouvez  nous envoyer  une confirmation de votre paiement / transfert à mdp-elearning@unitar.org par pour accélérer le processus d'inscription.<br>

Veuillez noter que nous offrons des réductions pour les groupes de 10 personnes ou plus inscrites au même cours en ligne.

Veuillez nous contacter pour plus d'information: mdp-elearning@unitar.org<br>

Durée du cours en semaines  Prix normal Prix pour 10 personnes ou plus
2-4 semaines  600 USD 450 USD
6-8 semaines  800 USD 600 USD<br>
 
Un nombre limité de bourses sera accordé aux candidats des pays les moins avancés (PMAs) selon la liste de l'UN-OHRLLS. L'UNITAR se réserve le droit de faire une sélection parmi les candidats. Pour plus d'informations, cliquez ici.
 
<h4 style=" color:red;">Important :</h4> Lors de l'inscription aux cours, le demandeur accepte d'effectuer le paiement total du cours de l'UNITAR (s) dès la réception des informations de paiement. L'UNITAR se réserve le droit d'annuler l'inscription d'un demandeur à tout moment en cas de non-réception du paiement. Le paiement est non remboursable mais peut être crédité à un autre cours dans certaines conditions.<br>

 
<h4 style="color: #757575;">Étape 3 : </h4> <br> Confirmation de votre participation 

Dès réception de votre paiement, vous recevrez par courriel une confirmation de l'UNITAR pour vous informer de votre acceptation dans le cours auquel vous vous êtes enregistré et des instructions spécifiques pour accéder aux cours seront fournies par l'UNITAR. 

<h4 style="color: #757575;">Étape 4 : </h4><br>Accès au cours 

Le participant accepté recevra un nom d'utilisateur et un mot de passe le vendredi avant le début du cours. </h4></div>
    <div class="row">
        <!-- You can make it whatever width you want. I'm making it full width
             on <= small devices and 4/12 page width on >= medium devices -->
        <div class="col-xs-12 col-md-4 col-lg-8 col-lg-offset-2" style="padding-top: 20px;">
        
        
            <!-- CREDIT CARD FORM STARTS HERE -->
            <div class="panel panel-default credit-card-box  ">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" > Details</h3>
                        <div class="display-td" >                            
                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                        </div>
                    </div>                    
                </div>
                <div class="panel-body">
                <form role="form" method="POST" action="{{route('payer')}}">
                    @csrf
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">Numéro de la carte</label>
                                    <div class="input-group">
                                        <input 
                                            type="text"
                                            class="form-control"
                                            name="num_carte"
                                            placeholder="Valid Card Number"
                                            autocomplete="cc-number"
                                            required autofocus 
                                        />
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <input type="hidden" name="payed" value="1">
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label for="cardExpiry"><span class="hidden-xs">Expiration</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input 
                                        type="text" 
                                        class="form-control" 
                                        name="expire_carte"
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
                                        type="tel" 
                                        class="form-control"
                                        name="cvc_carte"
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
                                    <input type="text" class="form-control" name="couponCode" />
                                </div>
                            </div>                        
                        </div>
                        <div class="row">
                        <div class="col-xs-12">
                        <input type="submit" class=" btn btn-success btn-lg btn-block" value="payer">
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
            
            
    






<!--script steps -->



<!--script payement cards-->
<script>

var $form = $('#payment-form');
$form.find('.subscribe').on('click', payWithStripe);

/* If you're using Stripe for payments */
function payWithStripe(e) {
    e.preventDefault();
    
    /* Abort if invalid form data */
    if (!validator.form()) {
        return;
    }

    /* Visual feedback */
    $form.find('.subscribe').html('Validating <i class="fa fa-spinner fa-pulse"></i>').prop('disabled', true);

    var PublishableKey = 'pk_test_6pRNASCoBOKtIshFeQd4XMUh'; // Replace with your API publishable key
    Stripe.setPublishableKey(PublishableKey);
    
    /* Create token */
    var expiry = $form.find('[name=cardExpiry]').payment('cardExpiryVal');
    var ccData = {
        number: $form.find('[name=cardNumber]').val().replace(/\s/g,''),
        cvc: $form.find('[name=cardCVC]').val(),
        exp_month: expiry.month, 
        exp_year: expiry.year
    };
    
    Stripe.card.createToken(ccData, function stripeResponseHandler(status, response) {
        if (response.error) {
            /* Visual feedback */
            $form.find('.subscribe').html('Try again').prop('disabled', false);
            /* Show Stripe errors on the form */
            $form.find('.payment-errors').text(response.error.message);
            $form.find('.payment-errors').closest('.row').show();
        } else {
            /* Visual feedback */
            $form.find('.subscribe').html('Processing <i class="fa fa-spinner fa-pulse"></i>');
            /* Hide Stripe errors on the form */
            $form.find('.payment-errors').closest('.row').hide();
            $form.find('.payment-errors').text("");
            // response contains id and card, which contains additional card details            
            console.log(response.id);
            console.log(response.card);
            var token = response.id;
            // AJAX - you would send 'token' to your server here.
            $.post('/account/stripe_card_token', {
                    token: token
                })
                // Assign handlers immediately after making the request,
                .done(function(data, textStatus, jqXHR) {
                    $form.find('.subscribe').html('Payment successful <i class="fa fa-check"></i>');
                })
                .fail(function(jqXHR, textStatus, errorThrown) {
                    $form.find('.subscribe').html('There was a problem').removeClass('success').addClass('error');
                    /* Show Stripe errors on the form */
                    $form.find('.payment-errors').text('Try refreshing the page and trying again.');
                    $form.find('.payment-errors').closest('.row').show();
                });
        }
    });
}
/* Fancy restrictive input formatting via jQuery.payment library*/
$('input[name=cardNumber]').payment('formatCardNumber');
$('input[name=cardCVC]').payment('formatCardCVC');
$('input[name=cardExpiry').payment('formatCardExpiry');

/* Form validation using Stripe client-side validation helpers */
jQuery.validator.addMethod("cardNumber", function(value, element) {
    return this.optional(element) || Stripe.card.validateCardNumber(value);
}, "Please specify a valid credit card number.");

jQuery.validator.addMethod("cardExpiry", function(value, element) {    
    /* Parsing month/year uses jQuery.payment library */
    value = $.payment.cardExpiryVal(value);
    return this.optional(element) || Stripe.card.validateExpiry(value.month, value.year);
}, "Invalid expiration date.");

jQuery.validator.addMethod("cardCVC", function(value, element) {
    return this.optional(element) || Stripe.card.validateCVC(value);
}, "Invalid CVC.");

validator = $form.validate({
    rules: {
        cardNumber: {
            required: true,
            cardNumber: true            
        },
        cardExpiry: {
            required: true,
            cardExpiry: true
        },
        cardCVC: {
            required: true,
            cardCVC: true
        }
    },
    highlight: function(element) {
        $(element).closest('.form-control').removeClass('success').addClass('error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-control').removeClass('error').addClass('success');
    },
    errorPlacement: function(error, element) {
        $(element).closest('.form-group').append(error);
    }
});

paymentFormReady = function() {
    if ($form.find('[name=cardNumber]').hasClass("success") &&
        $form.find('[name=cardExpiry]').hasClass("success") &&
        $form.find('[name=cardCVC]').val().length > 1) {
        return true;
    } else {
        return false;
    }
}

$form.find('.subscribe').prop('disabled', true);
var readyInterval = setInterval(function() {
    if (paymentFormReady()) {
        $form.find('.subscribe').prop('disabled', false);
        clearInterval(readyInterval);
    }
}, 250);

</script>

</section></div></div></h5></div>
<div class="  col-lg-12" style="background-color: white;height: 30px; margin-top: 20px;">
<footer class=" footer container-fluid text-center " style="border-color: white; text-align: center;">
  <p style="color: black;"><strong>Copyright</strong> © 2017-2018 Wecode. All rights reserved.</p>
</footer>

 
    
