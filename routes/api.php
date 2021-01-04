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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


/*DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=smartshop
DB_USERNAME=user
DB_PASSWORD=password

DB_CONNECTION=pgsql
DB_HOST=ec2-34-237-89-96.compute-1.amazonaws.com
DB_PORT=5432
DB_DATABASE=d7c4vvhi5ifbj6
DB_USERNAME=cdcshdtwbmbsjv
DB_PASSWORD=7bad180dc0924f0df48ce5b275489fb09e9be30a87d161dfc5dcab80235fb88f

*/


