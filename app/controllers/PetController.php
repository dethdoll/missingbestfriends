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

            $file->move(public_path('images'), time().'-'.$name);
            
            // validate
            // read more on validation at http://laravel.com/docs/validation
            $rules = array(
                'picture'           => 'required',
                'description'       => 'required'
            );
            $validator = Validator::make(Input::all(), $rules);

            // process the login
            if ($validator->fails()) {
                return Redirect::to('pets/create')
                        ->withErrors($validator);
            } else {
                // store
                $pet = new Pet;
                $pet->picture           = $name;
                $pet->type_post         = Input::get('type_post');
                $pet->last_day_seen     = Input::get('last_day_seen');
                $pet->last_seen         = Input::get('last_seen');
                $pet->description       = Input::get('description');
                $pet->phone             = Input::get('phone');
                $pet->email             = Input::get('email');
                $pet->contact_name      = Input::get('contact_name');
                $pet->pet_name          = Input::get('pet_name');
                $pet->type              = Input::get('type');
                $pet->breed             = Input::get('breed');
                $pet->color             = Input::get('color');
                $pet->specific_marks    = Input::get('specific_marks');			
                $pet->save();

                // redirect
                Session::flash('message', 'Successfully created pet!');
                //return Redirect::to('admin/franchise');
            }
            
            
            return('done!');
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
