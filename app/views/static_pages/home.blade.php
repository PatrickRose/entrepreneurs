@extends('layouts.base')

@section('body')
    <div class='events'>
        <h2>Our next event</h2>
        @if(!$event)
            <p>[No events planned]</p>
        @else
            <h3>
		Our next event is in {{ \Carbon::now() - $event->startDate }}
	    </h3>
            <p>
		{{ str_replace("\n", "</p><p>", $event->description) }}
	    </p>
            <p>
		{{ $event->location }} at {{ $event->startDate }}
	    </p>
        @endif
    </div>
@stop
