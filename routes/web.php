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

use App\Models\Client;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'listar')->name('listar');
Route::view('editar', 'editar')->name('editar');
Route::view('excluir', 'excluir')->name('excluir');

// CREATE
Route::post('/cadastrar-cliente', function (Request $request) {
    //dd($request->all());

    Client::create([
        'nome' => $request->nome,
        'telefone' => $request->telefone,
        'origem' => $request->origem,
        'datadecontato' => $request->datadecontato,
        'observacao' => $request->observacao
    ]);

    echo "cliente criado com sucesso";
});

// READ
Route::get('/listar-cliente/{id}', function ($id) {
    //dd(cliente::find($id)); debug and die
    $cliente = cliente::find($id);
    return view('listar', ['cliente' => $cliente]);
});

// 
Route::get('/editar-cliente/{id}', function (Request $request, $id) {
    //dd($request->all());
    $cliente = cliente::find($id);

    $cliente->update([
        'nome' => $request->nome,
        'telefone' => $request->telefone,
        'origem' => $request->origem,
        'datadecontato' => $request->datadecontato,
        'observacao' => $request->observacao
    ]);

    echo "cliente editado com sucesso!";
});

// DELETE
Route::get('/excluir-cliente/{id}', function ($id) {
    //dd($request->all());
    $cliente = cliente::find($id);
    $cliente->delete();

    echo "cliente excluido com sucesso!";
});