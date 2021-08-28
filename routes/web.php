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
use Illuminate\Http\Request;
use App\Despesa;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrar-despesa', function (Request $request) {
    Despesa::create([
        'descricao' => $request->descricao,
        'data' => $request->data,
        'usuario' => $request->usuario,
        'valor' => $request->valor
    ]);
    echo "Despesa cadastrada!";
});
Route::get('/pagina-despesa/{id}', function ($id) {
    $despesa = Despesa::find($id);
    return view('pagina', ['despesa' => $despesa]);
});
Route::get('/editar-despesa/{id}', function ($id) {
    $despesa = Despesa::find($id);
    return view('editar', ['despesa' => $despesa]);
});
Route::post('/editar-despesa/{id}', function (Request $request, $id) {
    $despesa = Despesa::find($id);
    $despesa -> update([
        'descricao' => $request->descricao,
        'data' => $request->data,
        'usuario' => $request->usuario,
        'valor' => $request->valor
    ]);
    echo "Despesa editado com sucesso!";
});
Route::get('/excluir-despesa/{id}', function (Request $request, $id) {
    $despesa = Despesa::find($id);
    $despesa -> delete();
    echo "Despesa excluído com sucesso!";
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
