@extends('layouts.scaffold')

@section('body')

    <h1>All Posts</h1>

    @if(Auth::check())
        <p>{{ link_to_route('posts.create', 'Add new post') }}</p>
    @endif

    @if ($posts->count())
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{{ $post->title }}}</td>
                        <td>{{{ $post->content }}}</td>
                        @if(Auth::check())
                            <td>{{ link_to_route('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-info')) }}</td>
                            <td>
                                {{ Form::open(array(
				      'method' => 'DELETE',
				      'route' => array(
					  'posts.destroy', $post->id)
				  )) }}
                                {{ Form::submit('Delete',
						array(
					  'class' => 'btn btn-danger'))
				  }}
                                {{ Form::close() }}
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        There are no posts
    @endif

@stop
