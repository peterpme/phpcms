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
        } else {
            return Redirect::to('pages/create')
                    ->withErrors($validator)
                    ->withInput(Input::all());
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
        
        $page = Page::find($id);
        
        return View::make('pages.edit')
                ->with('page', $page);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        
        // do I really need validation here?
            $page = Page::find($id);
            $page->name = Input::get('name');
            $page->richtext = Input::get('richtext');
            $page->save();
            
            Session::flash('message', 'Updated Page');
            return Redirect::to('pages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $page = Page::find($id);
        $page->delete();
        
        Session::flash('message', 'Deleted Page');
        return Redirect::to('pages');
    }
}