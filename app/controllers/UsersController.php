<?php

class UsersController extends BaseController {
    protected $layout = "layouts.main";
    
    public function getRegister() {
        $this->layout->content = View::make('users.register');
    }
    public function postCreate() {
        $validator = Validator::make(Input::all(), User::$rules);
        
        if ($validator->passes()){
            // validation passed
        } else {
            // validation failed
        }
    }
}