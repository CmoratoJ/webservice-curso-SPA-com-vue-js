<?php

use App\User;
use App\Conteudo;
use App\Comentario;
 
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//CADASTRO
Route::post('/cadastro', "UsuarioController@cadastro");

//LOGIN
Route::post('/login', "UsuarioController@login");

//PERFIL
Route::middleware('auth:api')->put('/perfil', "UsuarioController@perfil");

//CONTEUDO-ADICIONAR
Route::middleware('auth:api')->post('/conteudo/adicionar', "ConteudoController@adicionar");

//CONTEUDO-LISTA
Route::middleware('auth:api')->get('/conteudo/lista', "ConteudoController@lista");



Route::get('/testes', function(){
	/*
	$user = User::find(1);
	$user2 = User::find(2);

	$conteudos = Conteudo::all();
	foreach ($conteudos as $key => $value) {
		$value->delete();
	}

	
	$user->conteudos()->create([
		'titulo'=>'Conteudo 1',
		'texto'=>"Aqui o texto", 
		'imagem'=>'ulr da imagem',
		'link'=>'Link',
		'data'=>'2018-05-10'
	]);
	return $user->conteudos;
	*/


	/*
	// add Amigos:
	//$user->amigos()->attach($user2->id);
	//$user->amigos()->detach($user2->id);
	$user->amigos()->toggle($user2->id);

	return $user->amigos;
	*/

	/*
	// add Curtidas:
	$conteudo = Conteudo::find(1);
	$user->curtidas()->toggle($conteudo->id);

	//return $conteudo->curtidas()->count();
	return $conteudo->curtidas();
	*/


	/*
	// add Comentarios:
	$conteudo = Conteudo::find(1);
	$user->comentarios()->create([
		'conteudo_id'=>$conteudo->id,
		'texto'=>"Show de bola", 
		'data'=>date('Y-m-d')
	]);
	$user2->comentarios()->create([
		'conteudo_id'=>$conteudo->id,
		'texto'=>"Não gostei", 
		'data'=>date('Y-m-d')
	]);
	return $conteudo->comentarios;
	*/	



});






