
@extends('admin.layout.admin')

@section('content')

<h3>Add product</h3>
<div class="row">

    <div class="col-md-6 col-md-offset-3">
        {!! Form::open(['route' => 'product.store', 'method' => 'post', 'files' => true]) !!}

    <div class ="form_group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
        
    </div>

    <div class = "form_group">
        {{ Form::label('description', 'Description') }}
        {{ Form::text('description', null, array('class' => 'form-control')) }}
        
    </div>

    <div class = "form_group">
        {{ Form::label('administration', 'Administration') }}
        {{ Form::text('administration', null, array('class' => 'form-control')) }}
        
    </div>

    <div class = "form_group">
        {{ Form::label('price', 'Price') }}
        {{ Form::text('price', null, array('class' => 'form-control')) }}
        
    </div>

    <div class = "form_group">
        {{ Form::label('category_id', 'Categories') }}
        {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
        
    </div>

    <div class = "form_group">
        {{ Form::label('image', 'Image') }}
        {{ Form::file('image', array('class' => 'form-control')) }}
        
    </div>

    {{ Form::submit('Create', array('class' => 'btn btn-default')) }}

    {!! Form::close() !!}
    </div> 
   </div>
   @endsection
