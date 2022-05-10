<?php

use Illuminate\Support\Facades\Route;
//emailcontroller
use App\Http\Controllers\EmailController;
use App\Http\Controllers\TestController;
use App\Jobs\SendEmail;
use App\Mail\HelloEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\App;
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
//group of routes, middleware auth
Route::middleware('auth')->group(function () {
        Route::get('/', [EmailController::class, 'index']);
        //create email
        Route::get('/emails/create', [EmailController::class, 'create']); 
          
        //store email
        Route::post('/emails', [EmailController::class, 'store']);

        //email detail page
        Route::get('/emails/{id}', [EmailController::class, 'show']);

        //edit email
        Route::get('/emails/{id}/edit', [EmailController::class, 'edit']);

             
        //update email
        Route::put('/emails/{id}', [EmailController::class, 'update']);

       

        //delete page
        Route::get('/emails/{id}/delete', [EmailController::class, 'delete']);

        //delete email
        Route::delete('/emails/{id}', [EmailController::class, 'destroy']);

        //before sending email, input recipient email
        Route::get('/emails/{id}/send', [EmailController::class, 'send']);
        
        //send email
        Route::post('/emails/{id}/send', [EmailController::class, 'sendEmail']);

        //sendlog page for all log 
        Route::get('/sentlog', [EmailController::class, 'sentlog']);


         

});
        //debug environment, for testing
        if(!App::environment('production')){
                Route::get('/test/refresh-database', [TestController::class, 'refreshDatabase']);
                Route::get('/test/login-as/{userId}', [TestController::class, 'loginAs']);
        }
