@extends('layout.main')

@section('content')

<div class="row">
    <div class="small-6 small-centered columns">
    
<h3>Shipping Info</h3>

{!! Form::open(['route' => 'address.store', 'method' => 'post']) !!}


    <div class ="form_group">
        {{ Form::label('addressline', 'Address Line') }}
        {{ Form::text('addressline', null, array('class' => 'form-control')) }}
        
    </div>


    <div class ="form_group">
        {{ Form::label('city', 'City') }}
        {{ Form::text('city', null, array('class' => 'form-control')) }}
        
    </div>
 

    <div class ="form_group">
        {{ Form::label('state', 'State/County') }}
        {{ Form::text('state', null, array('class' => 'form-control')) }}
        
    </div>


    <div class ="form_group">
        {{ Form::label('zip', 'Zip') }}
        {{ Form::text('zip', null, array('class' => 'form-control')) }}
        
    </div>


    <div class ="form_group">
        {{ Form::label('country', 'Country') }}
        {{ Form::text('country', null, array('class' => 'form-control')) }}
        
    </div>

    <div class ="form_group">
        {{ Form::label('phone', 'Phone Number') }}
        {{ Form::text('phone', null, array('class' => 'form-control')) }}
        
    </div>
    {{ Form::submit('Proceed To Payment', array('class' => 'button success')) }}

 {!! Form::close() !!}
</div>
</div>

@endsection