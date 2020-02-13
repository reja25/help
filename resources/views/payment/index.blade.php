@include('inc.header')

{{--<style type="text/css">
.container{
	margin:0px;
}
</style>--}}

<div class="container">
<h3><center>Monthly Rent Payment</center></h3><br />

	<div class="row">
		<div class="col-sm-2">
			@include('inc.sidebar')
		</div>
		<div class="col-sm-10">
			<table class="table table-hover">
			  <thead>
				<tr class="table-primary">
				  <th scope="row">ID</th>
				  <td>Renter Name</td>
				  <td>House Number</td>
				  <td>House Rent</td>
                  <td>Month-Year</td>
				  <td>Renter Payment</td>
				  <td>Due Payment</td>
				  <td>Date of Paid</td>
				  <td>action</td>
				</tr>
			  </thead>


			  <tbody>
				@foreach($data as $d)
				<tr class="table-secondary">
				  <th scope="row">{{$d->id}}</th>
				  <td>{{$d->renter->rname}}</td>
				  <td>{{$d->renter->room->hno}}</td>
				  <td>{{$d->renter->room->hrent}}</td>
                  <td>{{$d->month}}-{{$d->year}}</td>
				  <td>{{$d->renter_payment}}</td>
				  <td>{{intval($d->renter->room->hrent)-intval($d->renter_payment)}}</td>
                    <td>{{$d->jdate}}</td>

				  <td>
					<a href="{{url('mrp/'.$d->id.'/edit-payment')}}" class="btn btn-warning btn-sm">edit</a>
					<a href="{{url('mrp/'.$d->id.'/delete')}}" class="btn btn-danger btn-sm">delete</a>
				</tr>
				@endforeach
			  </tbody>
			</table>

		</div>
	</div>
</div>
@include('inc.footer')
