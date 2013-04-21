<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FeelingsPost
 *
 * @author David Wambugu <davidwambugu@gmail.com>
 */
class FeelingsPost extends Eloquent {
    protected $table='feelingspost';
    
    public function feeling() {
        return $this->belongsTo('Feeling');
    }
}