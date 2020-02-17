<?php

Route::apiResources([
    'cities' => 'CityController',
    'delivery_times' => 'DeliveryTimeController'
]);

Route::post('cities/{city}/delivery-times', 'CityController@attachDeliveryTimesToCity');