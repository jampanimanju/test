@extends('master')
@section('content')
<div class="row">
	<div class="col-md-12">
		<br/>
        <h3>Edit Record</h3>
        <br/>
        @if(count($errors) > 0)
        <div class="alert alert-danger">
        	<ul>
        		@foreach($errors->all() as $error)
        		<li>{{$error}}</li>
        		@endforeach
        	</ul>
        	@endif
        </div>
		<form method="post" action="{{action('studentcontroller@update',$id)}}">
			{{csrf_field()}}
			<input type="hidden" name="_method" value="PATCH">
			<div class="form-group">
				<input type="text" name="first_name" class="form-control" value="{{$student->first_name}}" placeholder="enter your first name"/>
				</div>
				<div class="form-group">
				<input type="text" name="second_name" class="form-control" value="{{$student->second_name}}" placeholder="enter your last name"/>
               </div>
               <div class="form-group">
				<input type="submit" class="btn btn-primary" value="Edit"/>
            </div>
		</form>
	</div>
</div>
@endsection