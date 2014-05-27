@extends('master')

@section('container')

<h2>All Pets</h2>

<table class="table table-striped table-bordered">
	<thead>
            <tr>
                <td>ID</td>
                <td>Lost or Found</td>
                <td>Last day Seen</td>
                <td>Last seen on: </td>
                <td>Description</td>
                <td>Phone</td>
                <td>Email</td>
                <td>Contact Name: </td>
                <td>Pet Name</td>
                <td>Type</td>
                <td>Color</td>
                <td>Breed</td>
                <td>Specific marks</td>
            </tr>
	</thead>
	<tbody>
	@foreach($pets as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->type_post }}</td>
                <td>{{ $value->last_day_seen }}</td>
                <td>{{ $value->last_seen }}</td>
                <td>{{ $value->description }}</td>
                <td>{{ $value->phone }}</td>
                <td>{{ $value->phone }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->contact_name }}</td>
                <td>{{ $value->type }}</td>
                <td>{{ $value->color }}</td>
                <td>{{ $value->breed }}</td>
                <td>{{ $value->specific_marks }}</td>

                <!-- we will also add show, edit, and delete buttons -->
                <td>

                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->
                    {{ Form::open(array('url' => 'admin/franchise/' . $value->id, 'class' => 'pull-right')) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-trash"></button>
                    {{ Form::close() }}				

                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('admin/franchise/' . $value->id . '/edit') }}"><span class="glyphicon glyphicon-pencil"></span></a>			

                </td>
            </tr>
	@endforeach
	</tbody>
</table>

<a href="{{ URL::to('admin/franchise/create') }}">
	<button type="button" class="btn btn-default btn-success">
	  <span class="glyphicon glyphicon-plus"></span> Create new franchise
	</button>
</a>
@stop