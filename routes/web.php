<?php

use App\Leads;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
    return view('form_leads');
});

Route::post('/new_lead', function (Request $request) {

	$validator = Validator::make($request->all(), [
		'nome' => 'required|max:255',
		'email' => 'required|email',
		'celular' => 'required',
		'endereco' => 'required',
		'numero' => 'required',
		'bairro' => 'required',
		'cidade' => 'required',
		'uf' => 'required',
		'nascimento' => 'required',
		'cep' => 'required'
	]);

	if ($validator->fails()) {
		return redirect('/')
					->withInput()
					->withErrors($validator);
	}

	$lead = new Leads;
	$lead->nome = $request->nome;
	$lead->email = $request->email;
	$lead->celular = $request->celular;
	$lead->endereco = $request->endereco;
	$lead->numero = $request->numero;
	$lead->bairro = $request->bairro;
	$lead->cidade = $request->cidade;
	$lead->uf = $request->uf;
	$lead->cep = $request->cep;

	// Parse Date
	$date = $request->nascimento;
	$date = Carbon::createFromFormat('d/m/Y', $date);
	$lead->nascimento = $date->format('Y-m-d');
	$lead->updated_at = Carbon::now();
	$lead->save();

	$request
		->session()
		->flash(
			'success', 
			'Obrigado por se cadastrar! Em breve faremos contato com você!'
		);

	return redirect('/');
});