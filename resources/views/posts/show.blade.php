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
                        <dt>Post Created At :</dt>
                        <dd>{{$post->created_at}}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>Post Updated At :</dt>
                        <dd>{{$post->updated_at}}</dd>
                    </dl>
                    <div class="row">
                        <div class="col-md-6">
                            {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class'=> 'btn btn-primary btn-block')) !!}
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