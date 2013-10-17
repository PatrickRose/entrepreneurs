<?php namespace ShefEnt;

class Helpers {

    public static function get_links() {
        $base = array(
            array('Home', url('')),
            array('Events', route('events.index')),
        );
        foreach (Post::all() as $post) {
            $base[] = array($post->name,
                            route('posts.show', $post->id));
        }
        if (\Auth::check()) {
            $base[] = array('Admin Page', route('admin'));

        }
        return $base;
    }

}
?>
