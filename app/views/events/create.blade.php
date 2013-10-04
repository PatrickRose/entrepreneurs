@extends('layouts.base')

@section('main')

    <h1>Create Event</h1>

    @if ($errors->any())
        <ul>
            {{ implode('', $errors->all('<li class="error">:message</li>')) }}
        </ul>
    @endif
    
    {{ Form::open(array('route' => 'events.store')) }}
    <ul>
        <li>
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title') }}
        </li>

        <li>
            {{ Form::label('description', 'Description:') }}
            {{ Form::textarea('description') }}
        </li>

        <li>
            {{ Form::label('day', 'Day:') }}
            {{ Form::input('number', 'day') }}
        </li>

        <li>
            {{ Form::label('month', 'Month:') }}
            {{ Form::input('number', 'month') }}
        </li>

        <li>
            {{ Form::label('year', 'Year:') }}
            {{ Form::input('number', 'year') }}
        </li>

        <li>
            {{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
        </li>
    </ul>
    {{ Form::close() }}


@stop
