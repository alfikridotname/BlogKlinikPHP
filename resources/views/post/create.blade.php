@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">New Post</div>
                    <div class="panel-body">
                        <form class="form-group has-feedback{{ $errors->has('title') ? ' has-error' : '' }}" action="{{ route('post.store')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Title" value="{{ old('title') }}">
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group has-feedback{{ $errors->has('category_id') ? ' has-error' : '' }}">
                                <label for="">Category Id</label>
                                <select class="form-control" name="category_id" id="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group has-feedback{{ $errors->has('content') ? ' has-error' : '' }}">
                                <label for="">Content</label>
                                <textarea class="form-control" name="content" id="content" rows="5" placeholder="Content">{{ old('content') }}</textarea>
                                @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
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