<?php
   
    
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        #return view('welcome');
        echo 'Screw you !';
    });


	Route::get('customer/{id}', function($id){
	$customer = App\Customer::find($id);
	echo $customer->name;
	//var_dump($customer);
	});

	Route::get('customer_name', function(){
		$customer = App\Customer::where('name','=','sime')->first();
		echo $customer->id;
	});
    
    Route::get('fuck/{name}', function ($name){
    	echo 'Fuck off' . ' ' . $name;
    });


	//create an item
    Route::post('test', function(){
    	echo 'POST CREATE SHIT !!';
    });
    
    //read an item
    Route::get('test', function(){
    	echo 'GET SOME SHIT !!';
    	echo '<form method="POST" action="test">';
    	echo '<input type="submit">';
    	echo '<input type="hidden" value="DELETE" name="_method">';
    	echo '</form>';
    });
    
    //update an item
    Route::put('test', function(){
    	echo 'UPDATE SOME SHIT !!';
    });

    //delete an item
    Route::delete('test', function(){
    	echo 'DELETE SOME SHIT !!';
    });

});
