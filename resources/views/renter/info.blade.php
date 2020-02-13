@include('inc.header')
<div class="container">

	<div class="row">
		<div class="col-sm-4">
			@include('inc.sidebar')
		</div>
		<div class="col-sm-8">
			<div class="card mb-3">
			  <h3 class="card-header">Renter Individual Information</h3>
			  <div class="card-body">
				<h4 class="card-title"><span class="text-info">{{$data->rname}}</span></h4>
				<h6 class="card-subtitle text-muted">Renter of Maa Manzil</h6>
			  </div>
			  
			  <img style="height: 200px; width: 325px; display: block;" src="{{url('uploads/'.$data->image)}}" alt="Renter image">
			  <div class="card-body">
				<p class="card-text"><span class="text-success">Description:&nbsp; </span>{{$data->comments}}</p>
			  </div>
			  <ul class="list-group list-group-flush">
				<li class="list-group-item"><span class="text-success">Profession:&nbsp; </span>{{$data->profession}}</li>
				<li class="list-group-item"><span class="text-success">National Id no:&nbsp; </span>{{$data->nid}}</li>
				<li class="list-group-item"><span class="text-success">House Number:&nbsp; </span>{{$data->room->hno}}</li>
				<li class="list-group-item"><span class="text-success">House Rent:&nbsp; </span>{{$data->hrent}}</li>
				<li class="list-group-item"><span class="text-success">Advance Paid:&nbsp; </span>{{$data->advance}}</li>
				<li class="list-group-item"><span class="text-success">Joining Date:&nbsp; </span>{{$data->jdate}}</li>
				<li class="list-group-item"><span class="text-success">Contact Number:&nbsp; </span>{{$data->phone}}</li>
			  </ul>
			 
			  <div class="card-footer text-muted">
				2 days ago
			  </div>
			</div>
			
			<div class="card">
			  <div class="card-body">
				<h4 class="card-title">Monthly Payment of <span class="text-info">{{$data->rname}}</span></h4>
                  @foreach($mrp as $m)
                      <li class="list-group-item"><span class="text-success">Paid By Renter:&nbsp; </span>{{$m->renter_payment}}</li>
                      <li class="list-group-item"><span class="text-success">Due Payment of this month:&nbsp; </span>{{$m->due_payment}}</li>
                      <li class="list-group-item"><span class="text-success">Date of Paid: </span>{{$m->jdate}}</li>
                      <li class="list-group-item"><span class="text-success">Pay for Month:&nbsp; </span>{{$m->month}}</li>
                      <li class="list-group-item"><span class="text-success">Year:&nbsp; </span>{{$m->year}}</li>
                  @endforeach
			  </div>
			</div>
		</div>
	</div>
</div>
@include('inc.footer')
