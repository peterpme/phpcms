<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Page extends Eloquent {
    
    public static $rules = array(
        'page-name' => 'required|alpha_num|min:4',
        'page-richtext' => 'alpha_num'
    );
        
    protected $fillable = array('page-name', 'page-richtext');
    
    protected $table='pages';
    
    public function user(){
        return $this->belongsTo('User');
    }
    
}