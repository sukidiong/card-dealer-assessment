<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Illuminate\Http\Response;

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
    return view('card-dealer');
});
Route::post('/{controller}/{method}', 
function(Request $request, $controller, $method='index'){
    $controllerName = Str::studly($controller).'Controller';
        $app = app();

        try{
            $controller = $app->make("App\Http\Controllers\\" . $controllerName );
            if(!empty($controller)){
                $methodName= $method;
                if(method_exists($controller, $methodName)){
                    $request = $app->make('Illuminate\Http\Request');
                    $p=$request->post();
                    $ret= $controller->$methodName($request);
                    return $ret;
                }else{
                    return response()->json([],404);
                }
            }
            return response()->json([]);
        }catch(exception $e ){
            report($e);
            abort(404);
        }
})
->where(
    [
        'controller'=>'[A-Za-z0-9]+',
        'method'=>'[A-Za-z0-9_]+'
    ]
)
->name('appRoute_action');
Route::fallback(function () {
    abort(404);
});