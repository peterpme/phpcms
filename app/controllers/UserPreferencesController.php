<?php

class UserPreferencesController extends \BaseController {

	/**
	 * Display a listing of userpreferences
	 *
	 * @return Response
	 */
	public function index()
	{
            $user = Auth::User();
            
            return View::make('userpreferences.index')
                    ->with('user', $user);
	}

	/**
	 * Show the form for creating a new userpreferences
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('userpreferences.create');
	}

	/**
	 * Store a newly created userpreferences in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Userpreferencess::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Userpreferencess::create($data);

		return Redirect::route('userpreferences.index');
	}

	/**
	 * Display the specified userpreferences.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
            $user = Auth::User();
            
            return View::make('userpreferences.show')
                    ->with('user', $user);
	}

	/**
	 * Show the form for editing the specified userpreferences.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('userpreferences.edit', compact('userpreferences'));
	}

	/**
	 * Update the specified userpreferences in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		$user = Auth::User();
                $user->firstname = Input::get('firstname');
                $user->lastname = Input::get('lastname');
                $user->email = Input::get('email');

		$user->save();
                Session::flash('message', 'Updated User Account Information');

		return Redirect::route('userpreferences.index');
	}

	/**
	 * Remove the specified userpreferences from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Userpreferencess::destroy($id);

		return Redirect::route('userpreferences.index');
	}

}
