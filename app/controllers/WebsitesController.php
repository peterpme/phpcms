<?php

class WebsitesController extends BaseController {

    public function __construct() {
        $this->beforeFilter('csrf', array('on' => 'post'));
        $this->beforeFilter('auth', array('only' => array('index')));
    }

    //    Instead of querying the User Auth every time, query it once?

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        
        $user = Auth::User();
        $userId = Auth::id();
        $websites = $user->websites;
      
       print_r($userId);
        
        return View::make('websites.index')
                ->with('website', $websites);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        
        return View::make('websites.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {

        $validator = Validator::make(Input::all(), Website::$rules);
        
        if ($validator->passes()){
            $website = new Website;
            $website->name = Input::get('name');
            $website->web_address = Input::get('web_address');
            $website->push();
//            $website->associate(Auth::user())->save();
            
//            $user = Auth::User();
//            $userId = Auth::id();
//            $website->users()->attach($website);
//            $user->websites()->attach($userId);
            
            $user = Auth::User();
            $website->users()->save($user);

//            $user->websites()->save($user);
                        
            
            Session::flash('message', 'Successful Website Creation');
            return Redirect::to('websites');
        } else {
            return Redirect::to('websites/create')
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
        
        $website = Website::find($id);
        
        return View::make('websites.show')
                ->with('website', $website);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        
        $website = Website::find($id);
        
        return View::make('websites.edit')
                ->with('website', $website);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        
        $website = Website::find($id);
        $website->name = Input::get('name');
        $website->web_address = Input::get('web_address');
        $website->save();
        
        Session::flash('message', 'Updated Website Info');
        return Redirect::to('websites');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        
        $website = Website::find($id);
        $website->delete();
        
        Session::flash('message', 'Deleted Website');
        Return Redirect::to('websites');
    }

}
