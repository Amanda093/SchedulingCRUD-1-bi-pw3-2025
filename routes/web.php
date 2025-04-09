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


// CREATE
Route::post('/cadastrar-client', function (Request $request) {
    //dd($request->all());

    Client::create([
        'nome' => $request->nome,
        'telefone' => $request->telefone,
        'origem' => $request->origem,
        'datadecontato' => $request->datadecontato,
        'observacao' => $request->observacao
    ]);

    echo "client criado com sucesso";
});

// READ
Route::get('/listar-client/{id}', function ($id) {
    //dd(client::find($id)); debug and die
    $client = client::find($id);
    return view('listar', ['client' => $client]);
});

// 
Route::get('/editar-client/{id}', function (Request $request, $id) {
    //dd($request->all());
    $client = client::find($id);

    $client->update([
        'nome' => $request->nome,
        'telefone' => $request->telefone,
        'origem' => $request->origem,
        'datadecontato' => $request->datadecontato,
        'observacao' => $request->observacao
    ]);

    echo "client editado com sucesso!";
});

// DELETE
Route::get('/excluir-client/{id}', function ($id) {
    //dd($request->all());
    $client = client::find($id);
    $client->delete();

    echo "client excluido com sucesso!";
});