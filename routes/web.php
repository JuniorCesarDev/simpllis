<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->middleware(['auth', 'verified']);;

Route::get('/dashboard', function () {
   //return Inertia::render('Dashboard');
   return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function(){

    Route::prefix('cliente')->as('cliente.')->group(function(){
        Route::get('lista','ClienteController@lista')->name('lista');
        Route::get('cadastro','ClienteController@cadastro')->name('cadastro');
        Route::post('cadastro','ClienteController@cadastrosalvar')->name('cadastrosalvar');
        Route::get('editar/{id}','ClienteController@editar')->name('editar');
        Route::post('editar/{id}','ClienteController@update')->name('update');
        Route::get('deletar/{id}','ClienteController@deletar')->name('deletar');
    });

    Route::prefix('veiculo')->as('veiculo.')->group(function(){
        Route::get('lista','VeiculoController@lista')->name('lista');
        Route::get('cadastro','VeiculoController@cadastro')->name('cadastro');
        Route::post('cadastro','VeiculoController@veiculoSalvar')->name('veiculoSalvar');
        Route::get('editar/{id}','VeiculoController@editar')->name('editar');
        Route::post('editar/{id}','VeiculoController@update')->name('update');
        Route::get('deletar/{id}','VeiculoController@deletar')->name('deletar');
    });

    Route::prefix('revisao')->as('revisao.')->group(function(){
        Route::get('lista','RevisaoController@lista')->name('lista');
        Route::get('cadastro','RevisaoController@cadastro')->name('cadastro');
        Route::post('cadastro','RevisaoController@revisaosalvar')->name('revisaosalvar');
        Route::get('editar/{id}','RevisaoController@editar')->name('editar');
        Route::post('editar/{id}','RevisaoController@update')->name('update');
        Route::get('deletar/{id}','RevisaoController@deletar')->name('deletar');
    });

    Route::prefix('dashboard')->as('dashboard.')->group(function(){
        Route::get('','DashbordController@DashRevisoes')->name('DashRevisoes');
    });

    Route::prefix('relatorio')->as('relatorio.')->group(function(){
        Route::get('cliente','RelatorioController@cliente')->name('cliente');
        Route::get('veiculo','RelatorioController@veiculo')->name('veiculo');
        Route::get('revisao','RelatorioController@revisao')->name('revisao');
    });

    Route::prefix('relatorio_cliente')->as('relatorio_cliente.')->group(function(){
        Route::get('lista','RelatorioClientesController@lista')->name('lista');
        Route::get('todos_clientes','RelatorioClientesController@todos_clientes')->name('todos_clientes');
    });

    Route::prefix('relatorio_veiculo')->as('relatorio_veiculo.')->group(function(){
        Route::get('lista','RelatorioVeiculoController@lista')->name('lista');
        Route::get('todos_veiculos','RelatorioVeiculoController@todos_veiculos')->name('todos_veiculos');
        Route::get('indece','RelatorioVeiculoController@indece')->name('indece');
        Route::get('todas_marcas','RelatorioVeiculoController@todas_marcas')->name('todas_marcas');
        Route::get('ordMF','RelatorioVeiculoController@ordMF')->name('ordMF');
    });

    Route::prefix('relatorio_revisao')->as('relatorio_revisao.')->group(function(){
        Route::get('lista','RelatorioRevisaoController@lista')->name('lista');
        Route::get('todos_revisoes','RelatorioRevisaoController@todos_revisoes')->name('todos_revisoes');
        Route::get('marcas_revisoes','RelatorioRevisaoController@marcas_revisoes')->name('marcas_revisoes');
    });

});

require __DIR__.'/auth.php';
