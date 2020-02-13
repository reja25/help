@include('inc.header')
@include('inc.jumbo')
{{--<style type="text/css">
.container{
	margin-top:0px;
	margin-bottom:0px;
}
</style>--}}

<div class="container">

	<div class="row">
		<div class="col-sm-4">
			@include('inc.sidebar')
		</div>

		<div class="col-sm-8">
			<a href="#" class="list-group-item list-group-item-action active">
				Summary
			</a>
				<ul class="list-group">
				   <li class="list-group-item d-flex justify-content-between align-items-center">
					Total house for Rent
					<h4><span class="badge badge-primary badge-pill">{{$total_rooms}}</span></h4>
				  </li>
				  <li class="list-group-item d-flex justify-content-between align-items-center">
					Total Available house for Rent
					<h4><span class="badge badge-primary badge-pill">{{ $total_rooms_bl[0]->id }}</span></h4>
				  </li>
				  <li class="list-group-item d-flex justify-content-between align-items-center">
					Total Renter Exist
                      <h4><span class="badge badge-primary badge-pill">{{$total_renter}}</span></h4>
				  </li>
				  <li class="list-group-item d-flex justify-content-between align-items-center">
					Total Amount Of Loss By Empty Room
					<h4><span class="badge badge-primary badge-pill">৳{{ $total_rooms_bl[0]->hrent }}</span></h4>
				  </li>
				  <li class="list-group-item d-flex justify-content-between align-items-center">
                        Total Due this month
                        <h4><span class="badge badge-primary badge-pill">৳{{$total_due}}</span></h4>
                    </li>
				  <li class="list-group-item d-flex justify-content-between align-items-center">
					Total Income of this month
					<h4><span class="badge badge-success badge-pill">৳{{$total_payments}}</span></h4>
				  </li>
				</ul>
				
		</div>
	</div>
</div>
@include('inc.footer')
