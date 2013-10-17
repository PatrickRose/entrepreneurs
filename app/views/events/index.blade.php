@extends('layouts.base')

@section('title')
    Events
@stop

@section('body')

    <h1>All Events</h1>

    @if(Auth::check())
        <p>{{ link_to_route('events.create', 'Add new event') }}</p>
    @endif

    @if ($events->count())
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>StartDate</th>
                    <th>StartTime</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($events as $event)
                    <tr>
                        <td>{{{ $event->title }}}</td>
                        <td>{{{ $event->description }}}</td>
                        <td>{{{ $event->startDate }}}</td>
                        <td>{{{ $event->startTime }}}</td>
                        @if(Auth::check())
                            <td>{{ link_to_route('events.edit',
						 'Edit',
						 array($event->id),
						 array(
					  'class' => 'btn btn-info')) }}</td>
                            <td>
                                {{ Form::open(array(
				      'method' => 'DELETE',
				      'route' => array(
					  'events.destroy',
					  $event->id)
				  )) }}
                                {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                                {{ Form::close() }}
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        There are no events
    @endif

@stop
