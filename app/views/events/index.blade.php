@extends('layouts.scaffold')

@section('main')

<h1>All Events</h1>

<p>{{ link_to_route('events.create', 'Add new event') }}</p>

@if ($events->count())
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
			@foreach ($events as $event)
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
			@endforeach
		</tbody>
	</table>
@else
	There are no events
@endif

@stop
