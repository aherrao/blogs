@extends('layouts.admin.master')

@section('content')
	<a href="{!! route('users.create') !!}" class="btn btn-danger pull-right"> Create user </a>
	@include('users.partials.dashboard')

@endsection