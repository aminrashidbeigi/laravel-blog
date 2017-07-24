@extends('main')

@section('content')
      <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Welcome to my blog</h1>
                    <p>Thank you to visiting my blog</p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
                </div>
            </div>
        </div>

        <hr>


    @foreach($posts as $post)
        <div class="row">
            <div class="col-md-8">
                <div class="post">
                    <h1>{{$post->title}}</h1>
                    <p>{{$post->body}}</p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Read more</a></p>
                </div>
            </div>
        </div>
        <hr>

    @endforeach

@endsection