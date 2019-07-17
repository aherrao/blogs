@extends('layouts.admin.master')

@section('content')
<div class="panel panel-info">
	<div class="panel-heading">
		<strong> Show User Details</strong> <a class="btn btn-link pull-right"
			href="{!! route('blogs.index') !!}"><span class="close">X</span></a>
	</div>
	<div class="panel-body">
		{!! Form::model($blog, ['method'=>'GET', 'class'=>'form-horizontal']) !!}
		<div class="box box-danger">
			<div class="box-body">@include('blogs.partials.form')</div>
			<div class="overlay"></div>
		</div>
		<div class='col-xs-offset-5'>
			<a class="btn btn-lg btn-info" href="{!! route('blogs.edit', $blog->id) !!}"> Edit </a>
			<a class="btn btn-lg btn-link" href="{!! route('blogs.index') !!}"> Cancel </a>
		</div>
		{!! Form::close() !!}
	</div>
</div>
@endsection
