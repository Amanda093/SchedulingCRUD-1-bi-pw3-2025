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

// READ
Route::get('/', function () {
    // pega todas as informações do Cliente no banco de dados
    $clients = Client::all();

    return view('listar', ['clients' => $clients]);
});


// CREATE
Route::get('/cadastrar', function () {
    return view('cadastrar');
});

Route::post('/cadastrar-cliente', function (Request $request) {
    //dd($request->all());

    Client::create([
        'nome' => $request->nome,
        'telefone' => $request->telefone,
        'origem' => $request->origem,
        'datadecontato' => $request->datadecontato,
        'observacao' => $request->observacao
    ]);

    echo "Cliente criado com sucesso!";
});

// UPDATE
Route::get('/editar/{id}', function ($id) {
    $client = Client::find($id);
    return view('editar', ['client' => $client]);
});

Route::post('/editar-cliente/{id}', function (Request $request, $id) {
    //dd($request->all());
    $client = client::find($id);

    $client->update([
        'nome' => $request->nome,
        'telefone' => $request->telefone,
        'origem' => $request->origem,
        'datadecontato' => $request->datadecontato,
        'observacao' => $request->observacao
    ]);

    echo "cliente editado com sucesso!";
});

// DELETE
Route::get('/excluir/{id}', function () {
    return view('excluir');
});

Route::get('/excluir-client/{id}', function ($id) {
    //dd($request->all());
    $client = client::find($id);
    $client->delete();

    echo "client excluido com sucesso!";
});