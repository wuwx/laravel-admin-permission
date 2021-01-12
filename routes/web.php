<?php

Route::group(['namespace' => 'Wuwx\LaravelAdminPermission\Http\Controllers', 'as' => 'admin.'], function () {
    Route::resource('auth/permissions', 'PermissionController');
    Route::resource('auth/roles', 'RoleController');
});
