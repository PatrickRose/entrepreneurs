@extends('layouts.base')

@section('main')

    @if ($errors->any())
        <ul>
            {{ implode('', $errors->all('<li class="error">:message</li>')) }}
        </ul>
    @endif

    <h1>Edit Event</h1>

    {{ Form::model($event, array('method' => 'PATCH', 'route' => array('events.update', $event->id))) }}

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
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('events.show', 'Cancel', $event->id, array('class' => 'btn')) }}
        </li>
    </ul>
    {{ Form::close() }}

@stop
