@extends('main')

@section('content')

    <div class="row">
        @foreach($tags as $tag)
            <div class="col-md-7">
                <h3>{{$tag->name}}</h3>
            </div>
            <div class="col-md-1">
                {!! Html::linkRoute('tags.edit', 'Edit', array($tag->id), array('class'=> 'btn btn-block btn-default')) !!}
            </div>
            <div class="col-md-1">
                {!! Form::model($tag, ['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) !!}
                {{ Form::submit('Delete', array('class' => 'btn btn-danger btn-block')) }}
                {!! Form::close() !!}
            </div>

        @endforeach


        <div class="col-md-3">
            <div class="well">
                {!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}
                <h3>New Tag</h3>
                {{Form::label('name', 'Name:')}}
                {{Form::text('name', null, ['class' => 'form-control'])}}
                {{Form::submit('Create', ['class' => 'btn btn-success btn-block'])}}
                {!! Form::close() !!}
            </div>
        </div>


    </div>
@endsection

