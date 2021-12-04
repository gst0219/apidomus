<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

/****************************************************
****************************************************
**************Promotor methods**********************
****************************************************
****************************************************/

Route::get('/PromotorCtrl/index', 'PromotorController@index');

Route::post('/PromotorCtrl/create', 'PromotorController@create');

Route::post('/PromotorCtrl/edit', 'PromotorController@edit');

Route::post('/PromotorCtrl/delete', 'PromotorController@delete');

Route::post('/PromotorCtrl/getpromotor', 'PromotorController@getPromotor');

Route::post('/PromotorCtrl/login', 'PromotorController@login');


/****************************************************
****************************************************
**************Prospecto methods**********************
****************************************************
****************************************************/

Route::get('/ProspectoCtrl/index',      'ProspectoController@index');

Route::post('/ProspectoCtrl/create',    'ProspectoController@create');

Route::post('/ProspectoCtrl/edit',      'ProspectoController@edit');

Route::post('/ProspectoCtrl/delete',    'ProspectoController@delete');

Route::post('/ProspectoCtrl/getpromotor', 'ProspectoController@getProspecto');


/****************************************************
****************************************************
**************Ocupaciones methods**********************
****************************************************
****************************************************/

Route::get( '/OcupacionCtrl/index',       'OcupacionController@index');

Route::post('/OcupacionCtrl/create',      'OcupacionController@create');

Route::post('/OcupacionCtrl/edit',        'OcupacionController@edit');

Route::post('/OcupacionCtrl/delete',      'OcupacionController@delete');

Route::post('/OcupacionCtrl/getocupacion', 'OcupacionController@getOcupacion');

/****************************************************
****************************************************
**************Sector methods**********************
****************************************************
****************************************************/

Route::get( '/SectorCtrl/index',       'SectorController@index');

Route::post('/SectorCtrl/create',      'SectorController@create');

Route::post('/SectorCtrl/edit',        'SectorController@edit');

Route::post('/SectorCtrl/delete',      'SectorController@delete');

Route::post('/SectorCtrl/getsector', 'SectorController@getSector');

/****************************************************
****************************************************
**************TipoCita methods**********************
****************************************************
****************************************************/

Route::get( '/TipoCitaCtrl/index',       'TipoCitaController@index');

Route::post('/TipoCitaCtrl/create',      'TipoCitaController@create');

Route::post('/TipoCitaCtrl/edit',        'TipoCitaController@edit');

Route::post('/TipoCitaCtrl/delete',      'TipoCitaController@delete');

Route::post('/TipoCitaCtrl/getsector',   'TipoCitaController@getSector');

/****************************************************
****************************************************
**************Inmueble methods**********************
****************************************************
****************************************************/

Route::get( '/InmuebleCtrl/index',       'InmuebleController@index');

Route::post('/InmuebleCtrl/create',      'InmuebleController@create');

Route::post('/InmuebleCtrl/edit',        'InmuebleController@edit');

Route::post('/InmuebleCtrl/delete',      'InmuebleController@delete');

Route::post('/InmuebleCtrl/getInmueble',   'InmuebleController@getInmueble');

/****************************************************
****************************************************
**************etdesarrollo methods**********************
****************************************************
****************************************************/

Route::get( '/eDesarrolloCtrl/index',       'EtapaDesarrolloController@index');

Route::post('/eDesarrolloCtrl/create',      'EtapaDesarrolloController@create');

Route::post('/eDesarrolloCtrl/edit',        'EtapaDesarrolloController@edit');

Route::post('/eDesarrolloCtrl/delete',      'EtapaDesarrolloController@delete');

Route::post('/eDesarrolloCtrl/getedesarrollo', 'EtapaDesarrolloController@geteDesarrollo');


/****************************************************
****************************************************
**************Cliente methods**********************
****************************************************
****************************************************/

Route::get( '/ClienteCtrl/index',           'ClienteController@index');

Route::post('/ClienteCtrl/create',          'ClienteController@create');

Route::post('/ClienteCtrl/edit',            'ClienteController@edit');

Route::post('/ClienteCtrl/delete',          'ClienteController@delete');

Route::post('/ClienteCtrl/login',          'ClienteController@login');

Route::post( '/ClienteCtrl/getCliente',           'ClienteController@getCliente');






/****************************************************
****************************************************
**************CitaProspecto methods**********************
****************************************************
****************************************************/

Route::post( '/CitaProspectoCtrl/index',           'CitaProspectoController@index');

Route::post('/CitaProspectoCtrl/create',          'CitaProspectoController@create');

Route::post('/CitaProspectoCtrl/edit',            'CitaProspectoController@edit');

Route::post('/CitaProspectoCtrl/delete',          'CitaProspectoController@delete');

Route::post('/CitaProspectoCtrl/getCita',          'CitaProspectoController@getCita');






/****************************************************
****************************************************GET
**************Apartado methods**********************
****************************************************
****************************************************/

Route::get( '/ApartadoCtrl/index',           'ApartadoController@index');

Route::post('/ApartadoCtrl/create',          'ApartadoController@create');

Route::post('/ApartadoCtrl/edit',            'ApartadoController@edit');

Route::post('/ApartadoCtrl/delete',          'ApartadoController@delete');





/****************************************************
****************************************************
**************agendapromotor methods**********************
****************************************************
****************************************************/

Route::get( '/AgendaPromotorCtrl/index',           'AgendaPromotorController@index');

Route::post('/AgendaPromotorCtrl/create',          'AgendaPromotorController@create');

Route::post('/AgendaPromotorCtrl/edit',            'AgendaPromotorController@edit');

Route::post('/AgendaPromotorCtrl/delete',          'AgendaPromotorController@delete');








