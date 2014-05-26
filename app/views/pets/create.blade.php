@extends('master')

@section('container')

<h1>Pet</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('route' => 'pets.store', 'files' => true)) }}

	<div class="form-group">

                
            <!--div id="userpic" class="userpic">
               <div class="js-preview userpic__preview"></div>
               <div class="btn btn-success js-fileapi-wrapper">
                  <div class="js-browse">
                     <span class="btn-txt">Choose</span>
                     <input type="file" name="filedata" id="picture">
                  </div>
                  <div class="js-upload" style="display: none;">
                     <div class="progress progress-success"><div class="js-progress bar"></div></div>
                     <span class="btn-txt">Uploading</span>
                  </div>
               </div>
            </div-->                
		{{ Form::label('picture', 'Picture') }}
		{{ Form::file('picture') }}	
                
                {{ Form::label('lost', 'Lost') }}
                {{ Form::radio('type_post', 'l') }}
                
                {{ Form::label('found', 'Found') }}
                {{ Form::radio('type_post', 'f') }}    
                <br>

		{{ Form::label('last_day_seen', 'Last day seen') }}
		{{ Form::text('last_day_seen', Input::old('last_day_seen'), array('class' => 'form-control')) }}		

		{{ Form::label('last_seen', 'last seen') }}
		{{ Form::text('last_seen', Input::old('last_seen'), array('class' => 'form-control')) }}		

		{{ Form::label('description', 'Description') }}
		{{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}		

		{{ Form::label('phone', 'Phone') }}
		{{ Form::text('phone', Input::old('phone'), array('class' => 'form-control')) }}		

		{{ Form::label('email', 'Email') }}
		{{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}			

		{{ Form::label('contact_name', 'Contact name') }}
		{{ Form::text('contact_name', Input::old('contact_name'), array('class' => 'form-control')) }}		

		{{ Form::label('pet_name', 'Pet name') }}
		{{ Form::text('pet_name', Input::old('pet_name'), array('class' => 'form-control')) }}		

		{{ Form::label('type', 'Type') }}
		{{ Form::text('type', Input::old('type'), array('class' => 'form-control')) }}		

		{{ Form::label('color', 'Color') }}
		{{ Form::text('color', Input::old('color'), array('class' => 'form-control')) }}		

		{{ Form::label('breed', 'Breed') }}
		{{ Form::text('breed', Input::old('breed'), array('class' => 'form-control')) }}		

		{{ Form::label('specific_marks', 'Specific marks') }}
		{{ Form::text('specific_marks', Input::old('specific_marks'), array('class' => 'form-control')) }}		
                
        </div>

	{{ Form::submit('Submit your lost pet!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop
