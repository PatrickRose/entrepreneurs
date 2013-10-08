<?php

class Meeting extends Eloquent {
    protected $guarded = array();

    public static $rules = array(
        'title' => 'required|unique',
        'description' => 'required',
        'day' => 'required',
        'month' => 'required',
        'year' => 'required'
    );

    public function fix_rules() {
        $rules = Meeting::$rules;
        $rules['startDate'][] = 'after:' .Carbon::now();
        $rules['title'] .= ',' . $this->id . ',id';
        return $rules;
    }

}
