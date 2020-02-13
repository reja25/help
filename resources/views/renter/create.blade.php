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
			<form action="{{route('store')}}" method="post" enctype="multipart/form-data">
				@csrf
				
				@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				
				<div class="form-group">
					<label for="rname">Renter's Name: </label>
					<input type="text" name="rname" class="form-control"/>
				</div>
				<div class="form-group">
					<label for="profession">Renter's Profession: </label>
					<input type="text" name="profession" class="form-control"/>
				</div>
				<div class="form-group">
					<label for="nid">Renter's NID No: </label>
					<input type="text" name="nid" class="form-control"/>
				</div>
				<div class="form-group">
					<label for="hno">House No: </label>
					<select name="room_id" id="room_id" class="form-control">
						<option value="">-- Select Your House Number --</option>
							@foreach($h_number as $hn)
							<option value="{{$hn->id}}">{{$hn->hno}}</option>
							@endforeach
					</select>
					
					
				</div>
				<div class="form-group">
					<label for="hrent">Monthly House Rent: </label>
					<div class="input-group-prepend">
						<span class="input-group-text">৳</span>
						<input type="text" name="hrent" id="hrent" class="form-control"/><span class="hrent_error"></span>
					</div>
				</div>
				<div class="form-group">
					<label for="advance">Advance payment: </label>
					<div class="input-group-prepend">
						<span class="input-group-text">৳</span>
						<input type="number" name="advance" class="form-control"/>
					</div>
				</div>
				<div class="form-group">
					<label for="jdate">Joining Date :</label>
					<input type="date" name="jdate" class="form-control"/>
				</div>
				<div class="form-group">
					<label for="phone">Renter's phone: </label>
					<input type="text" name="phone" class="form-control"/>
				</div>
				<div class="form-group">
					<label for="comments">Comments: </label>
					<textarea class="form-control" name="comments" ></textarea>
					<input type="hidden" name="status" value="1" />
				</div>
				
				<div class="form-group">
					<label for="image">Renter Photo: </label>
					<input type="file" name="image"/>
				</div>
				<div class="form-group">
					<input type="submit" value="submit" class="btn btn-primary"/>
				</div>
			</form>
		</div>
	</div>
</div>

@include('inc.footer')
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
				$('#room_id').on('change',function(){
					var hno = $(this).val();
					// alert(hno);
						$.ajax({
							type: 'GET',
							url: "http://localhost/hrm_new/public/hrent?house_id="+hno,
							data: {},
							success: function(sdata){
								$('#hrent').val(sdata);
							}
							
						});
					
				});
			});
	</script>
