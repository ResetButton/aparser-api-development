<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use ResetButton\Aparser\ClassName;

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
    $aparser = new ResetButton\Aparser\Aparser('http://192.168.2.31:9091/API','gaa32435hyh543');
    dd($aparser->getProxy());
});
