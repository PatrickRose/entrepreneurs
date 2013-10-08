<?php

class Post extends Eloquent {
    protected $guarded = array();

    public static $rules = array(
        'title' => 'required',
        'content' => 'required'
    );

    public function fix_rules() {
        $rules = Post::$rules;
        $rules['title'] .= ',' . $this->id . ',id';
        return $rules;
    }

}
