@extends('admin')

@section('content')

	<h3>Add Product</h3>
	
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			{!! Form::open(['route' => 'product.store', 'method' => 'POST', 'files' => true]) !!}
			
			<div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, array('class' => 'form-control')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('description', 'Description') !!}
                {!! Form::text('description', null, array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('price', 'Price') !!}
                {!! Form::text('price', null, array('class' => 'form-control')) !!}
            </div>
			<div class="form-group">
                {!! Form::label('category_id', 'Categories') !!}
                {!! Form::select('category_id',[1=>'Cactus'], null, ['class' => 'form-control','prepend' => 'Please Select']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('image', 'Image') !!}
                {!! Form::file('image',array('class' => 'image')) !!}
            </div>
			{!! Form::submit('Create', array('class' => 'btn btn-default')) !!}
            {!! Form::close() !!}
		</div>
        
    </div>



@endsection