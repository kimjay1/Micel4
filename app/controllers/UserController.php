<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();
		return View::make('users.index')->with('users' , $users);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.adduser');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$rules = array(
			'fname'			=>	'required',
			'lname'			=>	'required',
			'username'		=>	'required',
			'password'		=>	'required',			
			'email'			=> 	'required|email'
		);
		
		$validator = Validator::make(Input::all(), $rules);
		
		//do again
		if ($validator->fails()){
			return Redirect::to('/users')
				->withErrors($validator)
				->withInput();
		
		} else {
		$users = new User;
		$users->fname = Input::get('fname');
		$users->mname = Input::get('mname');
		$users->lname = Input::get('lname');
		$users->app_role= 'user';
		$users->username = Input::get('username');
		$users->email = Input::get('email');
		$users->password = Hash::make(Input::get('password'));
		$users->save();
		return Redirect::to('users')->with('message', 'Success!');
	}
}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
