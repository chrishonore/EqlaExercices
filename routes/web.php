<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionsController;

Route::get('/', function () {
return view('welcome');
});
Route::get('/desc', function (){
    return view('imagesCompetition');
});
Route::get('/image-competitions', 'QuestionsController@index');

//Route::get('/image', [QuestionsController::class, 'show']);
//Route::get('/questions/{id}', 'QuestionsController@show')->name('questions.show');
//Route::get('/question/{id}', 'QuestionsController@show');
Route::get('/image-competitions', 'QuestionsController@index');
