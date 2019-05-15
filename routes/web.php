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
});

Route::resources([
    'titles' 			=> 'TitleController',
    'bookings' 			=> 'BookingController',
    // 'booking_services' 	=> 'BookingServiceController',
    'countries' 		=> 'ContryController',
    'destinations'		=> 'DestinationController', 
    'hotels'			=> 'HotelController',
    // 'hotel_services' 	=> 'HotelServiceController',
    'identifications'	=> 'IdentificationTypeController',
    'images'			=> 'ImageController',
    'reviews' 			=> 'ReviewController',
    'services' 			=> 'ServiceController',
    'users' 			=> 'UserController',
    'tours' 			=> 'TourController',
    // 'tour_services' 	=> 'TourServiceController'
]);
//***********  PROJECT LARAVEL **********************\
//***********       2019       **********************\

Route::get('Pindex',[
    'as'=>'Index',
    'uses'=>'Controller@getindex'
]);

Route::get('Pfooter',[
    'as'=>'Footer',
    'uses'=>'Controller@getfooter'
]);
Route::get('Pmainpage',[
    'as'=>'Mainpage',
    'uses'=>'Controller@getmainpage'
]);

