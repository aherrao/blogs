@extends('layouts.admin.master')

@section('content')
	<div class="panel panel-info">
		<div class="panel-heading">
			<strong> Edit User Detail</strong>
			<a class="btn btn-link pull-right" href="{!! route('users.index') !!}"><span class="close">X</span></a>
		</div>
		<div class="panel-body">
			{!! Form::model($userDetail, ['method' => 'PATCH', 'route' => ['users.update', $userDetail->id], 'class'=>'form-horizontal']) !!}

				@include('users.partials.form')

				<div class='col-xs-offset-6'>
					{!! Form::submit('Save', ['class' => 'btn btn-lg btn-success']) !!}
					<a class="btn btn-link" href="{!! route('users.index') !!}"> Cancel </a>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection