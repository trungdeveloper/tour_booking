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
  'titles'                =>  'TitleController',   
  'bookings'              =>  'BookingController',
  'countries'             =>  'CountryController',
  'destinations'          =>  'DestinationController',
  'hotels'                =>  'HotelController',
  'identificationTypes'   =>  'IdentificationTypeController',
  'images'                =>  'ImageController',
  'reviews'               =>  'ReviewController',
  'services'              =>  'ServiceController',
  'users'                 =>  'UserController',
<<<<<<< HEAD
  'tours'                 =>  'TourController'
=======
  'tours'                 =>  'TourController',
  'userTypes'             =>  'UserTypeController'
>>>>>>> d89f00bc29f3892b81ff7d51cb7e587398486702
]);

