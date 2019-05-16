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
<<<<<<< HEAD
    'titles' 			=> 'TitleController',   
=======
    'titles' 			=> 'TitleController',
>>>>>>> 0eefc3ca3d11e45468819f81a7cfcf489bc621fc
    'bookings' 			=> 'BookingController',
    // 'booking_services' 	=> 'BookingServiceController',
    'countries' 		=> 'CountryController',
    'destinations'		=> 'DestinationController',
    'hotels'			=> 'HotelController',
    // 'hotel_services' 	=> 'HotelServiceController',
<<<<<<< HEAD
    'identifications'	=> 'IdentificationTypeController',
=======
    'identificationTypes'	=> 'IdentificationTypeController',
>>>>>>> 0eefc3ca3d11e45468819f81a7cfcf489bc621fc
    'images'			=> 'ImageController',
    'reviews' 			=> 'ReviewController',
    'services' 			=> 'ServiceController',
    'users' 			=> 'UserController',
    'tours' 			=> 'TourController',
    // 'tour_services' 	=> 'TourServiceController'
]);

