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
  'tours'                 =>  'TourController'
<<<<<<< HEAD
]);

// Route::get('add',function(){
//   Schema::table('hotels',function($table){
//     $table->integer('number_of_night');
//   });
// });
=======
]);
>>>>>>> d29d64d54889577371586a2e5d4f103120a1a378
