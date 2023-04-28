<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Home');
});

Route::get('/Tirupati_Packages', function () {
    return view('packages.Tirupati_Packages');
})->name('Tirupati_Packages');

Route::get('/Rental_Packages', function () {
    return view('packages.rental_Packages');
})->name('rental_Packages');

Route::get('/explore-in-a-day', function () {
    return view('packages.one_day_trip');
})->name('explore-in-a-day');

Route::get('/out_station', function () {
    return view('packages.out_station');
})->name('out_station');

Route::get('/special', function () {
    return view('packages.special');
})->name('special');

Route::get('/kalahasti', function () {
    return view('packages.kalahasti');
})->name('kalahasti');


Route::get('/nri', function () {
    return view('packages.nri');
})->name('nri');

Route::get('/srivani', function () {
    return view('packages.srivani');
})->name('srivani');

Route::get('/tirupathi', function () {
    return view('packages.tirupathi');
})->name('tirupathi');

// tour packages routes
Route::get('/tirupati-archieve', function () {
    return view('tour_packages.tirupati-archieve');
})->name('tirupati-archieve');

Route::get('/kalahasti-archieve', function () {
    return view('tour_packages.kalahasti-archieve');
})->name('kalahasti-archieve');

Route::get('/nri', function () {
    return view('tour_packages.nri');
})->name('nri');


// rental packages
Route::get('/rental', function () {
    return view('rental_packages.rental');
})->name('rental');


// Rental Cars Routes
Route::get('/rental_etios', function () {
    return view('rental_cars.rental_etios');
})->name('Etios');

Route::get('/rental_innova', function () {
    return view('rental_cars.rental_innova');
})->name('innova');

Route::get('/rental_swift', function () {
    return view('rental_cars.rental_swift');
})->name('swift');

Route::get('/rental_tempo', function () {
    return view('rental_cars.rental_tempo');
})->name('tempo');



// Booking
Route::get('/booking', function () {
    return view('booking.booking');
})->name('booking');


// Route::get('/payment',function(){
//     return view('booking.payment');
// })->name('payment');



// kalahasti-cars

Route::get('/kalahasti-etios', function () {
    return view('kalahasti_cars.kalahasti-etios');
})->name('kalahasti-etios');

Route::get('/kalahasti-innova', function () {
    return view('kalahasti_cars.kalahasti-innova');
})->name('kalahasti-innova');

Route::get('/kalahasti-tempo', function () {
    return view('kalahasti_cars.kalahasti-tempo');
})->name('kalahasti-tempo');

Route::get('/kalahasti-swift', function () {
    return view('kalahasti_cars.kalahasti-swift');
})->name('kalahasti-swift');



// one day trip cars
Route::get('/etios', function () {
    return view('one_day_trip_cars.etios');
})->name('etios');

Route::get('/innova', function () {
    return view('one_day_trip_cars.innova');
})->name('innova');

Route::get('/tempo', function () {
    return view('one_day_trip_cars.tempo');
})->name('tempo');

Route::get('/swift', function () {
    return view('one_day_trip_cars.swift');
})->name('swift');




// out station cars
Route::get('/etios-car-rentals-outstation', function () {
    return view('out_station_cars.etios-car-rentals-outstation');
})->name('etios-outstation');

Route::get('/innova-car-rentals-outstation', function () {
    return view('out_station_cars.innova-car-rentals-outstation');
})->name('innova-outstation');

Route::get('/tempo-car-rentals-outstation', function () {
    return view('out_station_cars.tempo-car-rentals-outstation');
})->name('tempo-outstation');

Route::get('/swift-car-rentals-outstation', function () {
    return view('out_station_cars.swift-car-rentals-outstation');
})->name('swift-outstation');


// Terms and condition
Route::get('/terms_and_condition', function () {
    return view('terms_and_condition');
})->name('terms_and_condition');
