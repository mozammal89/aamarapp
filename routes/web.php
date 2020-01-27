<?php

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
    return view('frontend.app');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



/*Admin Route Start Here*/
Route::group(['as'=>'admin.','prefix'=>'admin', 'namespace'=>'Admin','middleware'=>['auth','admin']],function(){

		Route::get('dashboard','AdminController@dashboard')->name('dashboard');


});

/*Admin Route End Here*/





/*User Route Start Here*/
Route::group(['as'=>'user.','prefix'=>'user', 'namespace'=>'Member','middleware'=>['auth','user']],function(){

		Route::get('dashboard','MemberController@dashboard')->name('dashboard');


});

/*User Route End Here*/





/*Recharge  Route Start Here*/


		Route::post('recharge/request','Recharge\RechargeController@RechageRequest')->name('recharge.request');

		/*Recharge Success Route Start*/

		Route::post('recharge/success','Recharge\RechargeController@RechageSuccess')->name('recharge.success');

		/* Recharge Success Route Start*/


		/*Recharge Fail Route Start*/

		Route::post('recharge/fail','Recharge\RechargeController@RechageFail')->name('recharge.fail');

		/*Recharge Fail Route Start*/


		/*Recharge cancel Route Start*/

		Route::get('recharge/cancel','Recharge\RechargeController@Rechagefail')->name('recharge.cancel');

	/*Recharge cancel Route End*/




/*Recharge Route End Here*/
