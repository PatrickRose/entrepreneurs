@extends('layouts.base')

@section('title')
    Create New Event
@stop

@section('body')

    <h1>Create Event</h1>

    {{ Former::open()->method('POST')->rules(array('name' => 'required')) }}

    <p>{{ Former::text('title')->required() }}</p>

    <p>{{ Former::textarea('description') }}</p>

    <p>{{ Former::date('startDate')->id('datepicker') }}</p>

    {{ Former::close() }}

    <script>
     $(function() {
         $('.form-horizontal.control-group.controls#datepicker').datepicker()
     });
    </script>

@stop
