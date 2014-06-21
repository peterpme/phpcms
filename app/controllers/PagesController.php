<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PagesController extends BaseController {
    
    public function __construct() {
        $this->beforeFilter('csrf', array('on' => 'post'));
        $this->beforeFilter('auth', array('only' => array('getDashboard')));
    }

    protected $layout = "layouts.main";

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        
        $pages = Page::all();
        
        return View::make('pages.index')
                ->with('pages', $pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        
        return View::make('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {

        
        $validator = Validator::make(Input::all(), Page::$rules);
        
        if ($validator->passes()){
            $page = new Page;
            $page->name = Input::get('name');
            $page->richtext = Input::get('richtext');
            $page->save();
            
            Session::flash('message', 'Successful Page Creation');
            return Redirect::to('pages');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        
        
        $page = Page::find($id);
        
        return View::make('pages.show')
                ->with('page', $page);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }
    

//    public function getView() {
//        $this->layout->content = View::make('pages.view');
//    }
//
//    public function getCreate() {
//        $this->layout->content = View::make('pages.create');
//    }
//
//    public function postCreate() {
//        $validator = Validator::make(Input::all(), Page:: $rules);
//
//        if ($validator->passes()) {
//            $page = new Page;
//            $page->name = Input::get('page-name');
//            $page->richtext = Input::get('page-richtext');
//            $page->save();
//
//            return Redirect::to('users/dashboard')->with('message', 'Page created');
//        } else {
//            return Redirect::to('pages/create')->with('message', 'Errors Occured. Page not created')->withErrors($validator)->withInput();
//        }
//    }
//
//    public function getDelete() {
//        $this->layout->content = View::make('pages.delete');
//    }
//
//    public function getUpdate() {
//        $this->layout->content = View::make('pages.update');
//    }

}
