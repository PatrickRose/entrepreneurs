<?php namespace ShefEnt;

class Helpers {

    public static function get_links() {
        $base = array(
            array('Home', url('')),
            array('About', route('about')),
            array('Events', route('meetings.index')),
            array('Join', route('join')),
            array('Contact', route('contact')),
        );
        if (\Auth::check()) {
            $base[] = array('Admin Page', route('admin'));

        }

        return $base;
    }

}
?>
