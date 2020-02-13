@include('inc.header')

<div class="container">
	<div class="row">
		<div class="col-sm-4">
	<br />
			@include('inc.sidebar')
		</div>
		<div class="col-sm-8">
				<h2>Enter House payment Method</h2>
				<hr />
			<form action="{{route('storeh')}}" method="post" >
				@csrf
				<div class="form-group">
					<label for="hno">House no: </label>
					<input type="text" name="hno" class="form-control"/>
				</div>
				<div class="form-group">
					<label for="hrent">House Rent: </label>
					<div class="input-group-prepend">
						<span class="input-group-text">৳</span>
						<input type="number" name="hrent" class="form-control"/>
					</div>
				</div>
				<div class="form-group">
					<input type="submit" value="submit" class="btn btn-primary"/>
				</div>
			</form>
		</div>
	</div>
</div>
@include('inc.footer')
