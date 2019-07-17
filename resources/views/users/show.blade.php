@extends('layouts.admin.master')

@section('content')
<div class="panel panel-info">
	<div class="panel-heading">
		<strong> Show User Details</strong> <a class="btn btn-link pull-right"
			href="{!! route('users.index') !!}"><span class="close">X</span></a>
	</div>
	<div class="panel-body">
		{!! Form::model($userDetail, ['method'=>'GET', 'class'=>'form-horizontal']) !!}
		<div class="box box-danger">
			<div class="box-body">@include('users.partials.form')</div>
			<div class="overlay"></div>
		</div>
		<div class='col-xs-offset-5'>
			<a class="btn btn-lg btn-info" href="{!! route('users.edit', $userDetail->id) !!}"> Edit </a>
			<a class="btn btn-lg btn-link" href="{!! route('users.index') !!}"> Cancel </a>
		</div>
		{!! Form::close() !!}
	</div>
</div>
@endsection
