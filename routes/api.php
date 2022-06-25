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

Route::get('/', function (Request $request) {
    $aparser = new ResetButton\Aparser\Aparser('http://192.168.2.31:20000/API','gaa32435hyh54321');


    $json = '{
        "password": "gaa32435hyh54321",
        "action": "getProxies",
        "data": {
            "checkers": [
                "default"
            ]
        }
    }';
    $aparser->makeRawRequest($json);



    $aparser->getProxy(["checkers" => [ "default"]]);

    $aparserProxyRequest = new \ResetButton\Aparser\Dto\Request\AparserGetProxyRequest();
    $aparserProxyRequest->setCheckers(["default"]);
    $aparser->makeRequest($aparserProxyRequest);


});
