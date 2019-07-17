<table class="table table-bordered table-hover">
	<thead>
		{!! Form::open(['method' => 'get']) !!}
    		<tr class="">
    			<th>#Id</th>
    			<th>First Name</th>
    			<th>Middle Name</th>
    			<th>Surname</th>
    			<th>User Type</th>
    			<th colspan='2'>Actions</th>
    		</tr>
		{!! Form::close() !!}
	</thead>
	<tbody>
		@if( $userDetails->isNotEmpty() )
			@foreach( $userDetails as $userDetail )
				<tr>
					<td>{!! $userDetail->user_id !!}</td>
					<td>{!! $userDetail->first_name !!}</td>
					<td>{!! $userDetail->middle_name !!}</td>
					<td>{!! $userTypes[$userDetail->user_type_id] ?? ''!!}</td>
					<td><a href="{!! route('users.show', $userDetail->id) !!}"><span class='glyphicon glyphicon-eye-open'></span></a></td>
					<td><a href="{!! route('users.edit', $userDetail->id) !!}"><span class="glyphicon glyphicon-pencil"></span></a></td>
				</tr>
			@endforeach
		@else
			<tr><td colspan='7'>No Data found.</td></tr>
		@endif
	</tbody>
</table>
{!! $userDetails->links() !!}
