@extends('layouts.base')

@section('title')
    Welcome
@stop

@section('body')
    Th'art nesh thee ah'll learn thi god's own county nah then. Ee by gum mardy bum dahn t'coil oil. Gi' o'er god's own county. Ne'ermind t'foot o' our stairs. Ah'll box thi ears tha what that's champion big girl's blouse. Ee by gum that's champion ah'll learn thi. That's champion. By 'eck wacken thi sen up a pint 'o mild what's that when it's at ooam. Breadcake. Where there's muck there's brass. Ah'll gi' thee a thick ear. Th'art nesh thee appens as maybe ah'll learn thi. - See more at: http://tlipsum.appspot.com/#sthash.V293yDwN.dpuf
    <div class='events'>
        <h2>Our next event</h2>
        @if(!$event)
            <p>[No events planned]</p>
        @else
            <h3>
		Our next event is in {{ \Carbon\Carbon::createFromFormat("Y-m-d", $event->startDate)->diffInDays() }} days
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
