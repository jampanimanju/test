@extends('master')
@section('content')
<div class="row">
	<div class="col-md-12">
	    <br/>
		<h3 align="center">student data</h3>
		<br/>
		@if($message=Session::get('success'))
		<div class="alert alert-success">
			<p>{{$message}}</p>
			
		</div>

		@endif
		<div align="right">
			<a href="{{route('student.create')}}" class="btn btn-primary">add</a>
			
		</div>
		<table class="table table-bordered table-striped table-hover">
			<tr>
				<th>first_name</th>
				<th>second_name</th>
				<th>edit</th>
				<th>delete</th>
			</tr>
			@foreach($students as $row)
			<tr>
				<td>{{$row['first_name']}}</td>
				<td>{{$row['second_name']}}</td>
				<td><a href="{{action('studentcontroller@edit',$row['id'])}}" class="btn btn-warning">Edit</a></td>
				<td>
					<form method="post" class="delete_form" action="{{action('studentcontroller@destroy',$row['id'])}}">
						{{csrf_field()}}
					<input type="hidden" name="_method" value="DELETE">
					<button type="submit" class="btn btn-danger">Delete</button>
						
					</form>
				
				</td>	
			</tr>
			@endforeach
		</table>
		<script>
			$(document).ready(function(){
                 $('.delete_form').on('submit',function(){
                 	if(confirm("are you sure you want delete"))
                 	{
                 		return true;
                 	}
                 	else
                 	{
                 		return false;
                 	}

                 });
			});
		</script>
@endsection