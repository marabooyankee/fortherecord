<?php

class Feeling extends Eloquent {
    protected $guarded = array();

    public static $rules = array();
    
    public function posts() {
        return $this->belongsToMany('Post', 'feelingspost');
    }
    public function feelingsposts() {
        return $this->hasMany("FeelingsPost");
    }
    
}