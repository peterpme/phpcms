<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Page extends Eloquent {
    
    public static $rules = array(
        'name' => 'required|min:4',
        'richtext' => ''
    );
        
    protected $fillable = array('name', 'richtext');
    
    protected $table='pages';
    
    public function website() {
        return $this->belongsTo('Website');
    }
    
}