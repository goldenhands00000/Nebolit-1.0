<?php
use App\Comment;

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
    $comments=Comment::select(['id','rating','name','text'])->get();
    return view('welcome')->with(['comments'=>$comments]);
});
//Route::get("clinics","ClinicController@getAll");
//Route::get("clinic/{id}","ClinicController@getOne");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('comment/{id}', 'HomeController@showComment')->name('commentShow');

Route::get('/information_about_us', 'HomeController@showInformation')->name('about_us');

Route::get('/reviews', 'HomeController@showReviews')->name('reviews');

Route::get('/personal_acoount', 'HomeController@accountParlour')->name('parlour');

Route::post('/personal_acoount/send', 'SendEmailController@send');

Route::post('/reviews/send_comment', 'HomeController@send_comment');

Route::get('/services_of_clinic', 'DepartmentController@showServices')->name('services');

Route::get('/services_of_clinic/{id}', 'DepartmentController@showOneService')->name('one_service');

?>