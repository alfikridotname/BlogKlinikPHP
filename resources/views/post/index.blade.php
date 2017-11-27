@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	@foreach($posts as $post)
            <div class="panel panel-default">
                <div class="panel-heading"><strong>{{ ucfirst($post->title)}}</strong>
                    <div class="pull-right">
                        <form class="form-group" action="{{ route('post.destroy', $post) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('post.edit',$post) }}" class="btn btn-xs btn-warning">Edit</a>
                            <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
                <div class="panel-body">
                    <p>
                    	{{ str_limit($post->content, 300, ' ...') }}
                        <a href="{{ route('post.details',$post) }}" class="btn btn-xs btn-success">Read More</a>
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection