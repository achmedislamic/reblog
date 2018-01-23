@extends('layouts.master')

@section('content')
<div class="blog-post">
            <h2 class="blog-post-title">{{$post->title}}</h2>
            <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}}</p>
            {{$post->body}}
            
            <hr>

            <div class="comments">
              <ul class="list-group">
              @foreach($post->comments as $comment)
                <li class="list-group-item">
                  <b>{{$comment->created_at->diffForHumans()}}: &nbsp</b>
                {{$comment->body}}

                </li>
              @endforeach
              </ul>
              
              <div class="card">
                <div class="card-block">
                  <form action="/posts/{{$post->id}}/comments" method="POST">
                    {{csrf_field()}}
                    <div class="input-group">
                      <textarea name="body" class="form-control" placeholder="enter your comment" required></textarea>
                    </div>
                    <div class="input-group">
                      <button class="btn btn-primary" type="submit">Add Comment</button>
                    </div>
                  </form>
                  @include('layouts.errors')
                </div>
              </div>
            </div>
          </div><!-- /.blog-post -->
b
@endsection