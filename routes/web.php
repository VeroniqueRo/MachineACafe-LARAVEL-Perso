<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexController@bienvenue');

Route::get('/machineACafe','MachineACafeController@listDrink');

Route::get('/ingredients','IngredientController@listIngredients');

Route::get('/ventes','VenteController@listeVente');

Route::get('/recettes','RecetteController@listRecettes');

Route::get('/gestionMonnaie','GestionMonnaieController@listMonnaie');

Route::get('/boissons/lister-boissons','BoissonController@afficheBoissons');

Route::get('/boissons/lister-boissons-trinom','BoissonController@triNomBoissons');

Route::get('/boissons/lister-boissons-triprix','BoissonController@triPrixBoissons');

Route::get('/boissons/show','BoissonController@triPrixBoissons');

Route::get('/boisson/{code}','MachineACafeController@showDrink');// Méthode sans ORM


// Route::get('/boisson-ORM/{id}','BoissonController@showBoisson');

// Route::controllers([
//     'auth'=> 'Auth\AuthController',
//     'password' => 'Auth\PasswordController',
// ]);

?>
