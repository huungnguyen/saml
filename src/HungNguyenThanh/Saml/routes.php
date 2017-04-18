<?php
/**
 * Created by PhpStorm.
 * User: hungnguyen
 * Date: 17/04/2017
 * Time: 17:27
 */
Route::group([
    'prefix' => config('saml.routesPrefix'),
    'middleware' => config('saml.routesMiddleware')
], function () {
    Route::get('/logout', array(
        'as' => 'saml_logout',
        'uses' => 'HungNguyenThanh\Saml\Controllers\SamlController@logout',
    ));

    Route::get('/metadata', array(
        'as' => 'saml_metadata',
        'uses' => 'HungNguyenThanh\Saml\Controllers\SamlController@metadata',
    ));

    Route::get('/login', array(
        'as' => 'saml_login',
        'uses' => 'HungNguyenThanh\Saml\Controllers\SamlController@login',
    ));

    Route::post('/acs', array(
        'as' => 'saml_acs',
        'uses' => 'HungNguyenThanh\Saml\Controllers\SamlController@acs',
    ));
    Route::get('/sls', array(
        'as' => 'saml_sls',
        'uses' => 'HungNguyenThanh\Saml\Controllers\SamlController@sls',
    ));

    Route::get('/test', function (){
        return 'test';
    });
});