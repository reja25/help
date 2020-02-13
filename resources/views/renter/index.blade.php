@include('inc.header')

{{--<style type="text/css">--}}
{{--.container{--}}
	{{--margin-left:0px;--}}
	{{--margin-right:0px;--}}
{{--}--}}
{{--</style>--}}

<div class="container">
<h3><center>Renter List</center></h3><br />

	<div class="row">
		<div class="col-sm-2">
			@include('inc.sidebar')
		</div>
		<div class="col-sm-10">
			<table class="table table-hover">
			  <thead>
				<tr class="table-primary">
				  <th scope="row">Renter ID</th>
				  <td>Renter Name</td>
				  <td>Renter Prof.</td>
				  <td>Renter NID</td>
				  <td>House Number</td>
				  <td>House Rent</td>
				  <td>Advance</td>
				  <td>Joining Date</td>
				  <td>Phone</td>
				  <td>Comments</td>
				  <td>Image</td>
				  <td>action</td>
				</tr>
			  </thead>
			  
			   
			  <tbody>
			  @foreach($data as $d)
				<tr class="table-secondary">
				  <th scope="row">{{$d->id}}</th>
				  <td>{{$d->rname}}</td>
				  <td>{{$d->profession}}</td>
				  <td>{{$d->nid}}</td>
				  <td>{{$d->room->hno}}</td>
				  <td>{{$d->room->hrent}}</td>
				  <td>{{$d->advance}}</td>
				  <td>{{$d->jdate}}</td>
				  <td>{{$d->phone}}</td>
				  <td>{{$d->comments}}</td>
				  <td><img src="{{url('uploads/'.$d->image)}}" width="50px" alt="" /></td>
				  <td>
					<a href="{{url('/show-details/'.$d->id)}}" class="btn btn-info btn-sm">view</a>
					<a href="{{url('renter/'.$d->id.'/edit')}}" class="btn btn-warning btn-sm">edit</a>
					<a href="{{url('renter/'.$d->id.'/delete')}}" class="btn btn-danger btn-sm">delete</a>
					
				</tr>
				@endforeach
			  </tbody>
			</table> 
		</div>
	</div>
</div>
@include('inc.footer')
