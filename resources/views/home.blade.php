@extends('layout')

@section('content')
    @foreach($posts as $post)
        <div class="panel">
            <div class="panel-heading">
                <h3>
                    <a class="text-primary" href='{{url("posts/show/$post->id")}}'>{{$post->title}}</a>
                </h3>
            </div>
            <div class="panel-body">
                {!! $post->body !!}
            </div>
            <div class="panel-footer">
                <p>
                    نویسنده: {{$post->user->name}}
                </p>
            </div>
        </div>

    @endforeach

@endsection
