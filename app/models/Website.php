<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Website extends Eloquent {
   
    public static $rules = array(
        'name' => 'required|min:4',
        'web_address' => 'required'
    );
        
    protected $fillable = array('name', 'web_address');
    
    protected $table='websites';
    
    public function users() {
        return $this->belongsToMany('User');
    }
    
    public function pages() {
        return $this->hasMany('Page');
    }
}