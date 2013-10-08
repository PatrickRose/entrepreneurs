@extends('layouts.base')

@section('body')

    {{ Former::open()->method('POST')
      ->rules(array('username' => 'required',
		    'password' => 'required'
		    )) }}

    <p>{{ Former::text('username')->required() }}</p>

    <p>{{ Former::password('password')->required() }}</p>

    <p>{{ Former::submit()->class('btn btn-primary') }}</p>

    {{ Former::close() }}

@stop
