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

Route::get('/boisson/ajouter-boisson','BoissonController@create');// Formulaire de création d'une boisson

Route::post('/boissons/liste_des_boissons','BoissonController@store');

Route::get('/ingredients','IngredientController@listIngredients');

Route::get('/ventes','VenteController@listeVente');

Route::get('/recettes','RecetteController@listRecettes');

Route::get('/gestion','GestionMonnaieController@listMonnaie');

Route::get('/boissons/liste_des_boissons','BoissonController@afficheBoissons')->name('test');

Route::get('/boissons/lister_et_trier_nom','BoissonController@triNomBoissons');

Route::get('/boissons/lister_et_trier_prix','BoissonController@triPrixBoissons');

Route::get('/boisson/{code}','MachineACafeController@showDrink');// Méthode sans ORM

?>
