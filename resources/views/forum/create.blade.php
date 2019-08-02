@extends('layouts.app')
@section('content')

<div class="container" style="margin:60px;">
  <form class="" action="{{route('forum.store')}}" method="post">
    {{csrf_field()}}
    <div class="">
      <label for="">Judul</label>
      <input type="text" name="judul" value="{{old('judul')}}" class="form-control">
    </div>
    <div class="">
      <label for="">Pertanyaan</label>
      <textarea rows="8" cols="80" type="text" name="name" class="form-control" value="">
      </textarea>
    </div>
    <br>
    <div class="">
      <button type="submit" class="btn btn-primary" value="save" name="button">Submit</button>
    </div>
  </form>
</div>

@endsection
