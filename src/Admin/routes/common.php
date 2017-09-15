<?php

Route::group(['middleware' => ['web'], 'namespace' => 'Xiaocui\TestModul\Controllers'], function () {

    //人员管理
    Route::resource('personnel', 'PersonnelController');
});