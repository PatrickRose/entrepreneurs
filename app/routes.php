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

Route::get('logout',
           array('as' => 'logout',
                 'uses' => 'StaticPagesController@logout'
                 )
           )->before('auth');

Route::resource('events', 'MeetingsController');

Route::resource('posts', 'PostsController');

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

Route::get('about',
	   array('as' => 'about',
		 'uses' => 'StaticPagesController@about'
		 )
	   );

Route::get('membership',
	   array('as' => 'membership',
		 'uses' => 'StaticPagesController@membership'
		 )
	   );

Route::get('contact',
	   array('as' => 'contact',
		 'uses' => 'StaticPagesController@contact'
		 )
	   );
