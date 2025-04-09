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

use App\Models\Product;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'listar')->name('listar');
Route::view('editar', 'editar')->name('editar');
Route::view('excluir', 'excluir')->name('excluir');

// CREATE
Route::post('/cadastrar-produto', function (Request $request) {
    //dd($request->all());

    Product::create([
        'nome' => $request->nome,
        'telefone' => $request->telefone,
        'origem' => $request->origem,
        'datadecontato' => $request->datadecontato,
        'observacao' => $request->observacao
    ]);

    echo "Produto criado com sucesso";
});

// READ
Route::get('/listar-produto/{id}', function($id) {
    //dd(Produto::find($id)); debug and die
    $produto = Produto::find($id);
    return view('listar', ['produto' => $produto]);
});

// 
Route::get('/editar-produto/{id}', function(Request $request, $id) {
    //dd($request->all());
    $produto = Produto::find($id);

    $produto->update([
        'nome' => $request->nome,
        'telefone' => $request->telefone,
        'origem' => $request->origem,
        'datadecontato' => $request->datadecontato,
        'observacao' => $request->observacao
    ]);

    echo "Produto editado com sucesso!";
});

// DELETE
Route::get('/excluir-produto/{id}', function($id) {
    //dd($request->all());
    $produto = Produto::find($id);
    $produto->delete();

    echo "Produto excluido com sucesso!";
});