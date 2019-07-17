<table class="table table-bordered table-hover">
	<thead>
		{!! Form::open(['method' => 'get']) !!}
    		<tr class="">
    			<th>Title</th>
				<th>Slug</th>
    			<th>Content</th>
    			<th colspan='2'>Actions</th>
    		</tr>
		{!! Form::close() !!}
	</thead>
	<tbody>
		@if( $blogs->isNotEmpty() )
			@foreach( $blogs as $blog )
				<tr>
					<td>{!! $blog->title !!}</td>
					<td>{!! $blog->slug !!}</td>
					<td>{!! $blog->description !!}</td>
					<td><a href="{!! route('blogs.show', $blog->id) !!}"><span class='glyphicon glyphicon-eye-open'></span></a></td>
					<td><a href="{!! route('blogs.edit', $blog->id) !!}"><span class="glyphicon glyphicon-pencil"></span></a></td>
				</tr>
			@endforeach
		@else
			<tr><td colspan='7'>No Data found.</td></tr>
		@endif
	</tbody>
</table>
{!! $blogs->links() !!}
