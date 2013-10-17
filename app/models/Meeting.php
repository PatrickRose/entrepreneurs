<?php

use Carbon\Carbon;

class Meeting extends Eloquent {
    protected $guarded = array();

    public static $rules = array(
        'title' => 'required',
        'description' => 'required',
	'startDate' => 'required|after:',
	'startTime' => 'required',
	'location' => 'required'
    );

    public function fix_rules($creating = true) {
        $rules = Meeting::$rules;
        $rules['startDate'] .= Carbon::now();
        if (!$creating) {
            $rules['title'] .= '|unique,' . $this->id . ',id';
        }
        return $rules;
    }

}
