@extends('layouts.app')

@section('content')
@guest
<h1 class="text-center" style="margin-top:100px;">NGAPAIN ?</h1>
@else
    @if( Auth::user()->is_admin == true )
    <div class="container" style="margin-top: 70px">
        <form class="" action="{{ route('post.store') }}" method="post" enctype="multipart/from-data" >
            {{ csrf_field() }}
            <div class="form-group has-feedback{{ $errors->has('title') ? ' has-error' : '' }}">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Post title" value="{{ old('title') }}">
                @if ($errors->has('title'))
                    <span class="help-block">
                        <p>{{ $errors->first('title') }}</p>
                    </span>
                @endif

      @endguest
            </div>

            <div class="form-group">
                <label for="">Category</label>
                <select name="category_id" id="" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id}}"> {{ $category->name }} </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group has-feedback{{ $errors->has('title') ? ' has-error' : '' }}">
                <label for="">link</label>
                <input type="text" class="form-control" name="link" placeholder="link video" value="{{ old('link') }}">
                @if ($errors->has('link'))
                    <span class="help-block">
                        <p>{{ $errors->first('link') }}</p>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('content') ? ' has-error' : '' }}  has-feedback{{ $errors->has('title') ? ' has-error' : '' }}">
                <label for="">Content</label>
                <textarea name="content" rows="5" class="form-control" placeholder="Post content">{{ old('content') }}</textarea>
                @if ($errors->has('content'))
                    <span class="help-block">
                        <p>{{ $errors->first('content') }}</p>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </form>
    </div>
    @endif
    <!--admin -->
@endsection
