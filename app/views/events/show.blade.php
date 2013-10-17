@extends('layouts.base')

@section('title')
    {{ $event->title }}
@stop

@section('body')

    <h1>Show Event</h1>

    <p>{{ link_to_route('events.index', 'Return to all events') }}</p>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Day</th>
                <th>Month</th>
                <th>Year</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{{ $event->title }}}</td>
                <td>{{{ $event->description }}}</td>
                <td>{{{ $event->day }}}</td>
                <td>{{{ $event->month }}}</td>
                <td>{{{ $event->year }}}</td>
                <td>{{ link_to_route('events.edit', 'Edit', array($event->id), array('class' => 'btn btn-info')) }}</td>
                <td>
                    {{ Form::open(array('method' => 'DELETE', 'route' => array('events.destroy', $event->id))) }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }}
                </td>
            </tr>
        </tbody>
    </table>

@stop
