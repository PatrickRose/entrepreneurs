@extends('layouts.base')

@section('title')
    Create New Event
@stop

@section('body')

    <h1>Create Event</h1>

    {{ Form::open(array('route' => 'events.store')) }}
    <p>{{ Form::text('title') }}</p>

    <p>{{ Form::textarea('description') }}</p>

    <p>{{ Form::date('startDate') }}</p>

    <p>{{ Form::time('startTime') }}</p>

    <p>{{ Form::text('location') }}</p>

    <p>{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}</p>

    {{ Form::close() }}

@stop
