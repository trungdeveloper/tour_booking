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
    return view('welcome');
})->name('home');


Route::resources([
  'titles'                =>  'TitleController',   
  'bookings'              =>  'BookingController',
  'countries'             =>  'CountryController',
  'destinations'          =>  'DestinationController',
  'hotels'                =>  'HotelController',
  'identificationTypes'   =>  'IdentificationTypeController',
  'reviews'               =>  'ReviewController',
  'services'              =>  'ServiceController',
  'users'                 =>  'UserController',
  'tours'                 =>  'TourController',
  'userTypes'             =>  'UserTypeController',
  'tourImages'            =>  'TourImageController'
]);




Route::resource('hotelImages', 'HotelImageController')->only(['edit', 'update', 'destroy']);
Route::resource('customerMessages', 'CustomerMessageController')->only(['index', 'store', 'destroy']);

Route::patch('hotelImages/{hotelImage}/set_as_main', 'HotelImageController@setAsMain')
  ->name('hotelImages.setAsMain');

Route::get('login', 'LoginController@login')->name('login');
Route::post('login', 'LoginController@authenticate')->name('login.authenticate');
Route::get('logout', 'LoginController@logout')->name('login.logout');

Route::get('/forbidden', function () {
  return view('forbidden');
})->name('forbidden');


