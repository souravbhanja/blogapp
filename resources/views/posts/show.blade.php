@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-secondary btn-sm">Go Back</a>
    <div class="py-3">
      <h2>{{$post->title}}</h2>
      <img style="width: 100%;" src="/storage/cover_images/{{$post->cover_image}}" alt="cover_image_by_{{$post->user->name}}">
      <br/><br/>
      {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at->format('d-m-Y')}} by {{$post->user->name}}</small>
    <hr>
    @if (!Auth::guest())
      @if (Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-secondary"><span class="fa fa-edit"></span> Edit</a>

        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
          {{Form::hidden('_method', 'DELETE')}}
          {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
      @endif
    @endif
@endsection