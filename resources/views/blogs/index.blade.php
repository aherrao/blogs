@extends('layouts.admin.master')

@section('content')
	<a href="{!! route('blogs.create') !!}" class="btn btn-danger pull-right"> Create Blog </a>
	@include('blogs.partials.dashboard')

@endsection