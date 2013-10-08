<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
 */

Route::get('/',
           array('as' => 'home',
                 'uses' => 'StaticPagesController@home'
                 )
           );


Route::resource('meetings', 'MeetingsController');


Route::resource('posts', 'PostsController');


Route::get('about',
           array('as' => 'about',
                 'uses' => 'StaticPagesController@about'
                 )
           );

Route::get('join',
           array('as' => 'join',
                 'uses' => 'StaticPagesController@join'
                 )
           );

Route::get('contact',
           array('as' => 'contact',
                 'uses' => 'StaticPagesController@contact'
                 )
           );

Route::get('login',
           array('as' => 'loginPage',
                 'uses' => 'StaticPagesController@loginPage'
                 )
           )->before('guest');

Route::post('login',
            array('as' => 'login',
                  'uses' => 'StaticPagesController@login'
                  )
            )->before('guest');

Route::get('admin',
           array('as' => 'admin',
                 'uses' => 'StaticPagesController@admin'
                 )
           )->before('auth');
