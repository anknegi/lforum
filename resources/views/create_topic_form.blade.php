@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            	 
                <div class="panel-heading">Create Post</div>
                  <div class="panel-body">
				{!! Form::open(array('url' => 'foo/bar', 'method' => 'put')) !!}
				<div class="form-group">
				{!! Form::label('title', 'Post Title') !!}

				{!! Form::text('ptitle', array('class' =>'form-control')) !!}
			    </div>
			    <div class="form-group">
				{!! Form::label('Description') !!}
				{!! Form::textarea('descripion') !!}
				{!! Form::close() !!}
				</div>
				  </div>
			</div>
		</div>
	</div>
		
</div>

@endsection
