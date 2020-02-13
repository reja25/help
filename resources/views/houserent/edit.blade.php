@include('inc.header')

<div class="container">
	<div class="row">
		<div class="col-sm-4">
	<br />
			@include('inc.sidebar')
		</div>
		<div class="col-sm-8">
				<h2>Enter New Renter</h2>
				<hr />
			<form action="{{route('update-rent',$data->id)}}" method="post" >
				@csrf
				@method('PUT')
				<div class="form-group">
					<label for="hno">House no: </label>
					<input type="text" name="hno" value={{$data->hno}} class="form-control"/>
				</div>
				<div class="form-group">
					<label for="hrent">House Rent: </label>
					<div class="input-group-prepend">
						<span class="input-group-text">৳</span>
						<input type="number" name="hrent" value={{$data->hrent}} class="form-control"/>
					</div>
				</div>
				<div class="form-group">
					<input type="submit" value="Update" class="btn btn-warning"/>
				</div>
			</form>
		</div>
	</div>
</div>
@include('inc.footer')