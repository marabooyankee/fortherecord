<?php

class Post extends Eloquent {

    protected $guarded = array();
    public static $rules = array();

    protected $fillable=array("feeling", "colour");
    
    public function feelings() {
        return $this->belongsToMany('Feeling', 'feelingspost');
    }
}