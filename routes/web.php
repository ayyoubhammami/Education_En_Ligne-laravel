<?php

Route::get('/', function () {
    return view('welcome');
});

//recherche

use App\Cour;
use App\Theme;
use Illuminate\Support\Facades\Input;
 
Route::any ( '/search', function () {

    $q = Input::get ( 'q' );
    if ($q !=""){
    $cour = Cour::where ( 'titre', 'LIKE', '%' . $q . '%' )
    		->orWhere ( 'titreV', 'LIKE', '%' . $q . '%' )->get ();
    $theme=Theme::where ( 'nom', 'LIKE', '%' . $q . '%' )->get();
    if (count ( $cour ) > 0)
        return view ( '/acceuil' )->withDetails ( $cour )->withQuery ( $q );
     
    }
       return view ( '/acceuil' )->withMessage( 'Aucun détail trouvé.' );
} );

//

//atestation page
Route::get('/attest','HomeController@attest');
//
//cours view
Route::get('/cours/{id}','HomeController@developpement')->name('cours'); 

Route::get('/paymentA/{id}','HomeController@paymentA')->name('payementCour');
Route::get('/viewCours/{id}','HomeController@viewCours')->name('viewCours');
Route::get('/Courvideo/{id}','HomeController@video')->name('video');

Route::post('/Courvideo/store/','CommentController@store')->name('comment');
Route::get('Courvideo/{id}/edit','CommentController@edit')->name('edit');
Route::post('/Courvideo/update/{id}','CommentController@update')->name('updateComment');

Route::get('/Courvideo/delete/{id}','CommentController@delete')->name('delete');


Route::get('/attendreponse','UserController@attendreponse')->name('attendreponse');

Route::get('/inscription','UserController@inscription')->name('inscription');

Route::get('/apropos','CourController@apropos')->name('apropos');

//Examens crud
Route::get('Examens',['as'=>'Examens.index','uses'=>'ExamenController@index']);
Route::get('Examens/create',['as'=>'Examens.create','uses'=>'ExamenController@create']);
Route::post('Examens/store',['as'=>'Examens.store','uses'=>'ExamenController@store']); 
Route::get('Examens/show{id}',['as'=>'Examens.show','uses'=>'ExamenController@show']);
Route::get('Examens/{id}/edit',['as'=>'Examens.edit','uses'=>'ExamenController@edit']);
Route::patch('Examens/update/{id}',['as'=>'Examens.update','uses'=>'ExamenController@update']);
Route::delete('Examens/destroy/{id}',['as'=>'Examens.destroy','uses'=>'ExamenController@destroy']);

Route::get('addExam/update/{id}','ExamenController@Remouve')->name('Remouve');
Route::get('readd/{id}','MessageController@Remouve')->name('remouve');
Route::get('read{id}','MessageController@voir')->name('voir');
Route::get('addExam/{id}','ExamenController@addExam')->name('addExam');
//view apprenant examen
Route::get('choisirExam','ExamenController@choisirExam')->name('choisirExam');
Route::get('/payementExamen/{id}','HomeController@payementExamen')->name('payementExamen');
Route::get('/exam/{id}','ExamenController@passer')->name('passer');
Route::post('reponse/store',['as'=>'reponse.store','uses'=>'ReponseController@store']);
//Question
Route::get('addQuestion','QuestionsController@create')->name('createQuestion');
Route::post('Questions/store',['as'=>'Questions.store','uses'=>'QuestionsController@store']);

//Evnts crud
Route::get('Event',['as'=>'Event.index','uses'=>'EventsController@index']);
Route::get('Event/create',['as'=>'Event.create','uses'=>'EventsController@create']);
Route::post('Event/store',['as'=>'Event.store','uses'=>'EventsController@store']); 
Route::get('Event/show{id}',['as'=>'Event.show','uses'=>'EventsController@show']);
Route::get('Event/{id}/edit',['as'=>'Event.edit','uses'=>'EventsController@edit']);
Route::patch('Event/update/{id}',['as'=>'Event.update','uses'=>'EventsController@update']);
Route::delete('Event/destroy/{id}',['as'=>'Event.destroy','uses'=>'EventsController@destroy']);
Route::get('/event/{id}','EventsController@read')->name('readd');
Route::get('/eventtt/','EventsController@allevent')->name('allevent');

//cours CRUD

Route::get('cours',['as'=>'cours.index','uses'=>'CourController@index']);
Route::get('cours/create',['as'=>'cours.create','uses'=>'CourController@create']);
Route::post('cours/store',['as'=>'cours.store','uses'=>'CourController@store']); 
Route::get('cours/show{id}',['as'=>'cours.show','uses'=>'CourController@show']);
Route::get('cours/{id}/edit',['as'=>'cours.edit','uses'=>'CourController@edit']);
Route::patch('cours/update/{id}',['as'=>'cours.update','uses'=>'CourController@update']);
Route::delete('cours/destroy/{id}',['as'=>'cours.destroy','uses'=>'CourController@destroy']);





//themes 
Route::get('themes',['as'=>'themes.index','uses'=>'themeController@index']);
Route::get('themes/create',['as'=>'themes.create','uses'=>'themeController@create']);
Route::post('themes/store',['as'=>'themes.store','uses'=>'themeController@store']); 
Route::get('themes/show{id}',['as'=>'themes.show','uses'=>'themeController@show']);
Route::get('themes/{id}/edit',['as'=>'themes.edit','uses'=>'themeController@edit']);
Route::patch('themes/update/{id}',['as'=>'themes.update','uses'=>'themeController@update']);
Route::delete('themes/destroy/{id}',['as'=>'themes.destroy','uses'=>'themeController@destroy']);

//categories 
Route::get('categories',['as'=>'categories.index','uses'=>'categoriesController@index']);
Route::get('categories/create',['as'=>'categories.create','uses'=>'categoriesController@create']);
Route::post('categories/store',['as'=>'categories.store','uses'=>'categoriesController@store']); 
Route::get('categories/show{id}',['as'=>'categories.show','uses'=>'categoriesController@show']);
Route::get('categories/{id}/edit',['as'=>'categories.edit','uses'=>'categoriesController@edit']);
Route::patch('categories/update/{id}',['as'=>'categories.update','uses'=>'categoriesController@update']);
Route::delete('categories/destroy/{id}',['as'=>'categories.destroy','uses'=>'categoriesController@destroy']);







//Messages
Route::post('sendMessage','MessageController@send')->name('sendMessage');
Route::get('deleteMessage/{id}','MessageController@delete')->name('deleteMessage');
Route::get('read/{id}','MessageController@Remouve')->name('hide');
Route::get('/compose','HomeController@compose');
Route::get('/read/{id}','HomeController@read')->name('read');
Route::get('/EnvoyeMessage/{id}','HomeController@EnvoyeMessage')->name('EnvoyeMessage');
Route::get('/inbox','HomeController@inbox');
Route::get('/Envoye','HomeController@Envoye')->name('Envoye');
//RoleConroler
Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index']);
Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create']);
Route::post('roles/store',['as'=>'roles.store','uses'=>'RoleController@store']); 
Route::get('roles/show{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
Route::post('attachPermissions/{id}','RoleController@attachPermission')->name('attachPermission');
Route::get('detachPermissions/{role_id}/{perm_id}','RoleController@detachPermission')->name('dettachPermission');
Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit']);
Route::get('roles/{id}/permissions',['as'=>'roles.permissions','uses'=>'RoleController@permissions']);
Route::patch('roles/update/{id}',['as'=>'roles.update','uses'=>'RoleController@update']);
Route::delete('roles/destroy/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy']);


//permissions crud 
Route::get('permissions',['as'=>'permissions.index','uses'=>'PermissionController@index']);
Route::get('permissions/create',['as'=>'permissions.create','uses'=>'PermissionController@create']);
Route::post('permissions/store',['as'=>'permissions.store','uses'=>'PermissionController@store']); 
Route::get('permissions/show{id}',['as'=>'permissions.show','uses'=>'PermissionController@show']);
Route::get('permissions/{id}/edit',['as'=>'permissions.edit','uses'=>'PermissionController@edit']);
Route::patch('permissions/update/{id}',['as'=>'permissions.update','uses'=>'PermissionController@update']);
Route::delete('permissions/destroy/{id}',['as'=>'permissions.destroy','uses'=>'PermissionController@destroy']);



//view
Route::get('/acceuil','HomeController@acceuil');
Auth::routes();
Route::get('/enAttend','UserController@enAttend');
Route::get('/registerF','UserController@registerF');
Route::post('createFormateur','UserController@createFormateur')->name('addFormateur');
Route::delete('/destroyformateur/{id}',['as'=>'destroyformateur','uses'=>'UserController@destroyformateur']);


//inscription formateur
Route::post('/addUser','UserController@addUser')->name('addUser');
Route::post('updateImage','UserController@updateImage')->name('updateImage');
//role 
Route::get('/insert','RoleController@insert');
Route::post('/insertR','RoleController@insertR');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/paymentf', 'HomeController@paymentf')->name('paymentf');
Route::prefix('users')->group(function () {
//user 
Route::get('/apprenants', 'UserController@apprenants')->name('apprenants');
Route::get('/formateurs', 'UserController@formateurs')->name('formateurs');
Route::get('/{id}/edit',['as'=>'users.edit','uses'=>'UserController@edit']);
Route::patch('/update/{id}',['as'=>'users.update','uses'=>'UserController@update']);
Route::delete('/destroy/{id}',['as'=>'users.destroy','uses'=>'UserController@destroy']);

});
Route::post('/payement','PayementController@payement')->name('payer');
Route::post('/payementA/{id}','PayementController@payementA')->name('payerA'); 
//paymentExam
Route::post('/payementExamen/{id}','PayementController@payementEx')->name('payementExamen'); 




Route::resource('comment','CommentController',['only'=>['update','destroy']]);

Route::post('comment/create/{thread}','CommentController@addThreadComment')->name('threadcomment.store');

Route::post('reply/create/{comment}','CommentController@addReplyComment')->name('replycomment.store');

//cours view
Route::get('/ajoutformation','CourController@add')->name('addCour');
Route::post('/saveCour','CourController@save')->name('saveCour'); 
Route::get('/MesCours','CourController@MesCours')->name('MesCours');


//select imbriqué
Route::get('/themee','CourController@prodfunct');
Route::get('/findProductName','CourController@findProductName');




// Social login providers...
Route::get('/provider/{provider}', 'Auth\LoginController@redirectToProvider')->name('redirectToProvider');
Route::get('/provider/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

  