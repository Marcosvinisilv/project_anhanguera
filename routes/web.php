<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();
// Auth::routes(['register' => false]);
// Authentication Routes...
// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('login', 'Auth\LoginController@login');
// Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// // Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// // Password Reset Routes...
// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// // Email Verification Routes...
// Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
// Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
// Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');




Route::resource('/', 'WelcomeController');
// Método Resource para ver as rotas que são criadas
//Digite no Terminal php artisan route:list
//Método Resouce cria automáticos padrões de Crud
// Exemplo: [metodos] abaixo...
// index,store,create,update,show,destroy,edit
Route::resources([
    'home'      => 'HomeController',
    'info'      => 'InfoController',
    'admin'     => 'AdminController',
    'doacoes'   => 'DoacoesController',
    'votar'     => 'VotarController',
    'downloads' => 'DownloadsController',
    'classes'   => 'ClassesController',  // Rota para url /classes que acesso o controllador Classes Controller
    'cadclass'  => 'CadclassController', // Rota para cadastrar a Classe no Controllador CadclassController
]);

Route::put('/removeradmin/{id}','AdminController@removeradmin')->name('removeradmin');
Route::put('/tornaradmin/{id}','AdminController@tornaradmin')->name('tornaradmin');
// Rota via get na rota /carregarMais no Controllador ClassesControlller no método
// carregarMais com nome de carregar para facilidar ao chamar a rota com o blade.
 Route::get('/carregarMais','ClassesController@carregarMais')->name('carregar'); 
 // Rota via get /credits na rota /credits no controllador CreditsController chamando o método index 
 //apenas só para exibição da página.
 Route::get('/credits','CreditsController@index')->name('credits');
// Route::post('/admin','AdminController@store')->name('users.store');
// Route::get('/admin','AdminController@show')->name('show.listar');
// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/cadcli', 'ClientesController@index')->name('cadcli');

//Testes de Produts

/*
|===================================
| Verbos HTTP 
|===================================
| PUT , GET , POST , DELETE ;
*/
// Route::resource('products','ProductsControllers');
// Route::delete('/products/{id}','ProductsController@destroy')->name('products.destroy');
// Route::put('/products/{id}','ProductsController@update')->name('products.update');
// Route::get('/products/{id}/edit','ProductsController@edit')->name('products.edit');
// Route::get('/products/create','ProductsController@create')->name('products.create');
// Route::get('/products/{id}','ProductsController@show')->name('products.show');
// Route::get('/products','ProductsController@index')->name('products.index');
// Route::post('/products','ProductsController@store')->name('products.store');
