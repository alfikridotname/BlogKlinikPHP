@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
	        <div class="col-md-8 col-md-offset-2">
	        	<div class="panel panel-default">
	        		<div class="panel-heading">Edit Post</div>
	        		<div class="panel-body">
	        			<form class="form-group" action="{{ route('post.update',$post)}}" method="post">
				            {{ csrf_field() }}
				            {{ method_field('PATCH') }}
				            <div class="form-group">
				                <label for="">Title</label>
				                <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $post->title }}">
				            </div>
				            <div class="form-group">
				                <label for="">Category Id</label>
				                <select class="form-control" name="category_id" id="category_id">
				                    @foreach($categories as $category)
			                        	<option 
			                        	value="{{ $category->id }}"
			                        	@if ($category->id === $post->category_id)
			                        		selected 
			                        	@endif
			                        	>
			                        	{{ $category->name }}
			                        	</option>
				                    @endforeach
				                </select>
				            </div>
				            <div class="form-group">
				                <label for="">Content</label>
				                <textarea class="form-control" name="content" id="content" rows="10" placeholder="Content">{{ $post->content }}</textarea>
				            </div>
				            <div class="form-group">
				                <input name="save" id="save" class="btn btn-primary" type="submit" value="Save">
				                <button type="reset" class="btn btn-default">Reset</button>
				            </div>
				        </form>
	        		</div>
	        	</div>
	        </div>
        </div>
    </div>
@endsection