<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PagesController extends BaseController {
    
    protected $layout = "layouts.main";
    
    public function __construct() {
        $this->beforeFilter('csrf', array('on' => 'post'));
        $this->beforeFilter('auth', array('only' => array('getDashboard')));
    }
    
    public function getCreatePage() {
        $this->layout->content = View::make('pages.create');
    }
    
    public function createPage() {
        $validator = Validator::make(Input::all(), User:: $rules);
        
        if($validator->passes()) {
            $page = new Page;
            $page->name  = Input::get('name');
            $page->richtext = Input::get('richtext');
            $page->save();
            
            return Redirect::to('users/dashboard')->with('message', 'Page created');
        } else {
            return Redirect::to('pages/create')->with('message', 'Errors Occured. Page not created')->withErrors($validator)->withInput();
        }
    }
    
    public function deletePage() {
        
    }
    
    public function updatePage() {
        
    }
    
    
}