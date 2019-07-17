@extends('layouts.app')

@section('content')
	<div class="panel panel-danger">
		<div class="panel-heading">
			<strong></strong>
			<a class="btn btn-link pull-right" href="{!! route('users.index') !!}"><span class="close">X</span></a>
		</div>
		<div class="panel-body">
			<div class='col-xs-offset-6'>
				<h1>Access Denied...</h1>
			</div>
		</div>
	</div>
@endsection