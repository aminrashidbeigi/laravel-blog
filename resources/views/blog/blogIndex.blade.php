@extends('main')

@section('content')

    @foreach($posts as $post)
        <div class="row">
            <div class="col-md-10">
                <h3>{{$post->title}}</h3>
                <p>{{$post->body}}</p>
            </div>
            <div class="col-md-2">
                {!! Html::linkRoute('posts.show', 'Read More', array($post->id), array('class'=> 'btn btn-default')) !!}
            </div>

        </div>
        <hr>
    @endforeach
    <div class="text-center">
        {{ $posts->links() }}
    </div>



@endsection

