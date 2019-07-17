@extends('layouts.admin.master')

@section('content')
	<div class="panel panel-info">
		<div class="panel-heading">
			<strong> Edit User Detail</strong>
			<a class="btn btn-link pull-right" href="{!! route('blogs.index') !!}"><span class="close">X</span></a>
		</div>
		<div class="panel-body">
			{!! Form::model($blog, ['method' => 'PATCH', 'route' => ['blogs.update', $blog->id], 'class'=>'form-horizontal']) !!}

				@include('blogs.partials.form')

				<div class='col-xs-offset-6'>
					{!! Form::submit('Save', ['class' => 'btn btn-lg btn-success']) !!}
					<a class="btn btn-link" href="{!! route('blogs.index') !!}"> Cancel </a>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection