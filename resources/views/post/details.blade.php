@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- Post Detail -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{ route('post.details',$post) }}"><h4>{{ ucfirst($post->title)}}</h4></a>
                            <small>Posted on {{ $post->created_at }} | Alfikri</small>
                    </div>
                    <div class="panel-body">
                        <p style="text-align: justify;">
                            <strong>{{ $post->title }}</strong> - {{ $post->content }}
                        </p>
                    </div>
                    <div class="panel-footer">
                        <label>Kategori : </label>
                        <button class="btn btn-xs btn-danger">{{ $post->category->name }}</button>
                    </div>
                </div>
                <!-- Comment -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        New Comment
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('post.comment.store', $post) }}" class="" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <textarea name="message" id="message" cols="50" rows="3" class="form-control" placeholder="Berikan komentar . . . ."></textarea>
                            </div>
                            <div class="form-group">
                                <button>Post</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Comment -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Comments
                    </div>
                    @foreach($post->comments()->get() as $comment)
                    <div class="panel-body">
                        <small>Created at {{ $comment->created_at->diffForHumans() }}</small>
                        <br>
                        <small>{{ $comment->user->name }}</small>
                        <p>
                        &raquo {{ $comment->message }}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>Search</strong>
                    </div>
                    <div class="panel-body">
                        <form class="form-group" action="" method="post">
                            <div class="input-group">
                                <input type="text" name="search" id="search" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                <button class="btn btn-primary">Go</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><strong>Category</strong>
                    </div>
                    <div class="panel-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection