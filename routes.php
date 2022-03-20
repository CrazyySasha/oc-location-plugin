<?php

Route::group(['prefix' => 'api/crazy/location'], function () {

    Route::group(['prefix' => 'v1.0.1'], function () {

        Route::group(['prefix' => 'locations'], function () {
            Route::get('/', [\Crazy\Location\Api\Locations::class, 'get']);
            Route::post('/', [\Crazy\Location\Api\Locations::class, 'create']);
        });
    });
});
