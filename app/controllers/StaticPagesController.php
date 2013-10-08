<?php

class StaticPagesController extends BaseController
{

    public function home()
    {
        $events = Meeting::where('startDate', '>=', \Carbon\Carbon::now());
        return View::make('static_pages.home')->with(
            array('event' => $events->first()));
    }

    public function loginPage()
    {
        return View::make('static_pages.login');
    }

    public function login()
    {
        if (Auth::guest()) {
            $user = array(
                'username' => Input::get('username'),
                'password' => Input::get('password')
            );

            if (Auth::attempt($user)) {
                return Redirect::route('home');
            }

            // authentication failure! lets go back to the login page
            return Redirect::route('login')->with('flash_error', 'Your username/password combination was incorrect.')->withInput();
        }
        return Redirect::route('home');

        //
    }
}
