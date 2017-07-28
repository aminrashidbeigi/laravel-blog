@extends('main')

@section('content')

    <div class="row">
        @foreach($categories as $category)
                <div class="col-md-7">
                    <h3>{{$category->name}}</h3>
                </div>
                <div class="col-md-1">
                    {!! Html::linkRoute('categories.edit', 'Edit', array($category->id), array('class'=> 'btn btn-block btn-default')) !!}
                </div>
                <div class="col-md-1">
                    {!! Form::model($category, ['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}
                    {{ Form::submit('Delete', array('class' => 'btn btn-danger btn-block')) }}
                    {!! Form::close() !!}
                </div>

        @endforeach


        <div class="col-md-3">
            <div class="well">
                {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
                <h3>New Category</h3>
                {{Form::label('name', 'Name:')}}
                {{Form::text('name', null, ['class' => 'form-control'])}}
                {{Form::submit('Create', ['class' => 'btn btn-success btn-block'])}}
                {!! Form::close() !!}
            </div>
        </div>


    </div>
@endsection

