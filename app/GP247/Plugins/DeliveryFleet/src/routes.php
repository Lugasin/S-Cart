<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::prefix('delivery-fleet')->name('admin.delivery-fleet.')->group(function () {
        Route::get('/', 'App\GP247\Plugins\DeliveryFleet\Controllers\Admin\DeliveryFleetController@index')->name('index');
        Route::get('/create', 'App\GP247\Plugins\DeliveryFleet\Controllers\Admin\DeliveryFleetController@create')->name('create');
        Route::post('/', 'App\GP247\Plugins\DeliveryFleet\Controllers\Admin\DeliveryFleetController@store')->name('store');
        Route::get('/{vehicle}/edit', 'App\GP247\Plugins\DeliveryFleet\Controllers\Admin\DeliveryFleetController@edit')->name('edit');
        Route::put('/{vehicle}', 'App\GP247\Plugins\DeliveryFleet\Controllers\Admin\DeliveryFleetController@update')->name('update');
        Route::delete('/{vehicle}', 'App\GP247\Plugins\DeliveryFleet\Controllers\Admin\DeliveryFleetController@destroy')->name('destroy');
    });
});

Route::prefix('delivery-fleet')->name('delivery-fleet.')->group(function () {
    Route::get('/track', 'App\GP247\Plugins\DeliveryFleet\Controllers\Front\DeliveryFleetController@track')->name('track');
});
