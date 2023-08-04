<?php

use Illuminate\Support\Facades\Route;

//ROTAS PRINCIPAIS
Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');

Route::get('/login', function () {
    return 'Login';
})->name('site.login');

//APP
Route::prefix('/app')->group(function(){
    Route::get('/clientes', function () {
        return 'Clientes';
    })->name('app.clientes');
    Route::get('/fornecedores', 'FornecedoresController@index')->name('app.fornecedores');
    Route::get('/produtos', function () {
        return 'Produtos';
    })->name('app.produtos');
});

//REDIRECIONAMENTO
Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

// Route::get('/rota2', function () {
//     return redirect()->route('site.rota1');
// })->name('site.rota2');
// Route::redirect('/rota2', 'rota1');

//CONTINGÊNCIA
Route::fallback(function () {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir para a página principal.';
});

//POR PARÂMETRO
Route::get('/contato/{nome}/{categoria_id}/{assunto?}/{mensagem?}', 
function (
    string $nome = 'Desconhecido', 
    int $categoria_id = 1
    )   {
    echo "Aqui é: $nome - $categoria_id" ;
}
)->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');
