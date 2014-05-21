<?php

class PetController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
            return View::make('pets.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
            // TODO: Validation Add
            // TODO: Add file upload in a try catch
            $file = Input::file('picture');
                                  
            $name = $file->getClientOriginalName();

            $image = Image::make(file_get_contents('http://blog.xtremetattoosupplies.com/wp-content/uploads/2014/03/o-GRUMPY-CAT-APOCALYPSE-facebook.jpg'));

            $file->move(public_path('images'), time().'-'.$name);
            
            return Response::make($image, 200, ['Content-Type' => 'image/jpg']);
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
