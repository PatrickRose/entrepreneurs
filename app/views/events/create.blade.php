@extends('layouts.base')

@section('title')
Create New Event
@stop

@section('body')

<h1>Create Event</h1>

{{ Form::open(array('route' => 'events.store')) }}
<p>
    {{ Form::label('title', "Event Title") }}
    {{ Form::text('title') }}
</p>

<p>
    {{ Form::label('description', "Event Description") }}
    {{ Form::textarea('description') }}
</p>

<p>
    {{ Form::label('startDate', "Event date") }}
    {{ Form::text('startDate', null, array('class'=>'datepicker')) }}
</p>

<p>
    {{ Form::label('startTime', "Event Time") }}
    {{ Form::text('startTime', null, array('class'=>'datepicker')) }}
</p>

<p>
    {{ Form::label('location', "Location") }}
    {{ Form::text('location') }}
</p>

<p>
    {{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
</p>

{{ Form::close() }}

@stop
