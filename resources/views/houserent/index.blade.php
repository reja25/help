@include('inc.header')

{{--<style type="text/css">
.container{
	margin-left:0px;
	margin-right:0px;
}
</style>--}}

<div class="container">
<h3><center>House Rent Method</center></h3><br />

	<div class="row">
		<div class="col-sm-2">
			@include('inc.sidebar')
		</div>
		<div class="col-sm-10">

            <a href="{{ url('addh') }}" class="btn btn-info btn-sm">Add New</a>
			<table class="table table-hover">
			  <thead>
				<tr class="table-primary">
				  <th scope="row">ID</th>
				  <td>House Number</td>
				  <td>House Rent</td>
				  <td>Status</td>
				  <td>action</td>
				</tr>
			  </thead>
			  
			   
			  <tbody>
			  @foreach($data as $d)
				<tr class="table-secondary">
				  <th scope="row">{{$d->id}}</th>
				  <td>{{$d->hno}}</td>
				  <td>{{$d->hrent}}</td>
				  <td>{{$d->status == 1? 'Active' : 'Inactive'}}</td>
				  <td>
					<a href="{{url('him/'.$d->id.'/edit-rent')}}" class="btn btn-warning btn-sm">edit</a>
					<a href="{{url('him/'.$d->id.'/delete')}}" class="btn btn-danger btn-sm">delete</a>
				</td>
				</tr>
				@endforeach
			  </tbody>
			</table>
			
		</div>
	</div>
</div>
@include('inc.footer')
