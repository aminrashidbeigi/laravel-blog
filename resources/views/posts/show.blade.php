@extends('main')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1> {{ $post->title }}</h1>
            <p>{{ $post->body }}</p>
        </div>
        <div class="row">
            <div class="col-md-3 col-md-offset-1">
                <div class="well">
                    <dl class="dl-horizontal">
                        <label>Post Created At :</label>
                        <p>{{$post->created_at}}</p>
                    </dl>
                    <dl class="dl-horizontal">
                        <label>Post Updated At :</label>
                        <p>{{$post->updated_at}}</p>
                    </dl>
                    <dl class="dl-horizontal">
                        <label>Post URL :</label>
                        <p>{{url($post->slug)}}</p>
                    </dl>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class'=> 'btn btn-primary btn-lg btn-block')) !!}
                        </div>

                        <div class="col-md-6">
                            {!! Form::model($post, ['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger btn-lg btn-block')) }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection