@extends('layouts.base')

@section('title')
    Admin Page
@stop

@section('body')
    <p>
	{{ link_to_route('events.create', 'Create Event') }}
    </p>

@stop
