<?php

return [
    'words' => [
        'cancel'  => 'Annuler',
        'delete'  => 'Supprimer',
        'edit'    => 'Modifier',
        'yes'     => 'Oui',
        'no'      => 'Non',
        'minutes' => '1 minute| :il ya minutes',
    ],

    'discussion' => [
        'new'          => ''.trans('créer nouvelle discussion'),
        'all'          => 'All '.trans('chatter::intro.titles.discussion'),
        'create'       => 'Créer  '.trans('chatter::intro.titles.discussion'),
        'posted_by'    => 'Publier par ',
        'head_details' => 'Publier dans Category',

    ],
    'response' => [
        'confirm'     => 'Êtes-vous sûr de vouloir supprimer cette response?',
        'yes_confirm' => 'Oui Supprimer ',
        'no_confirm'  => 'Non Merci',
        'submit'      => 'Valide réponse ',
        'update'      => 'Modifier  réponse',
    ],

    'editor' => [
        'title'               => 'Titre pour '.trans('chatter::intro.titles.discussion'),
        'select'              => 'Choisir une Category',
        'tinymce_placeholder' => 'Ecrire Votre '.trans('chatter::intro.titles.discussion').' ici...',
        'select_color_text'   => ' Choisir un couleur pour cette '.trans('chatter::intro.titles.discussion').' (optionnel)',
    ],

    'email' => [
        'notify' => 'Notify me when someone replies',
    ],

    'auth' => 'Please <a href="/:home/login">login</a>
                or <a href="/:home/register">register</a>
                to leave a response.',

];
