<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Register
 *
 * @author soowoo
 */
class Register extends Eloquent {
    protected $guarded = array();
    protected $table = 'registered_users';
    public $timestamps = 'false';
    
    public static function saveFormData($data) 
    {
        DB::table('registered_users')->insert($data);
    }
}
