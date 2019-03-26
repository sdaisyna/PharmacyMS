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

Route::get('/medicine', function () {
    return view('medicine');
});//->middleware('auth'); //restrict page without login

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/help', function () { 
    return view('help');
});

Route::get('/register', function () {
    return view('auth.register');
}); 


Route::get('/editprofile', function (){
    return view ('medicine/editprofile');
});




Route::get('/editprofile/{id}','EditProfileController@edit');
Route::put('/updateprofile/{id}','EditProfileController@update');//yo chai update garya 



Auth::routes();

//For Admin action
Route:: group(['middleware'=>'admin'],function(){
    Route::get('/admindash','AdminController@admindash');

    Route::get('/pharmacistPanel', function () {
        return view('medicine.pharmacistpanel');
    }); 

    Route::get('/pharmacistPanel/{id}','PharmacistProfileController@edit');
Route::put('/updateprofile/{id}','PharmacistProfileController@update');//yo chai update garya 


//insert medicine type


});
 
 


//insert medicine
Route::get('/addmedicinetype', function (){
    return view ('medicine/insertmedicinetype');
});

Route::get('/addmedicine','InsertMedicineController@create');

Route::post('/insertmedicine','InsertMedicineController@store');

Route::get('/addmedicine','InsertMedicineController@getMedicineType');
Route::delete('/addmedicine/{id}','InsertMedicineController@destroy');//delete

//update medicinetype
Route::get('/updatemedicinetype/{id}','InsertMedicineTypeController@edit');
Route::put('insertmedicinetype/{id}','InsertMedicineTypeController@update');

//update medicine
Route::get('/updatemedicine/{id}','InsertMedicineController@edit');
Route::put('insertmedicine/{id}','InsertMedicineController@update');


//insert medicinetype
Route::get('/addmedicinetype/{id}','InsertMedicineController@create');
Route::post('/insertmedicinetype','InsertMedicineTypeController@store');
Route::get('/addmedicinetype','InsertMedicineTypeController@index');

Route::delete('/addmedicinetype/{id}','InsertMedicineTypeController@destroy');//delete
 

//Contact 
Route::post('/gocontactinfo','ContactController@store'); //form ma call gareko route


Route::get('medicine', 'InsertMedicineTypeController@medcategory');//fetching of medicine type






Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cart','CartController@viewcart');



