@include('inc.header')

<div class="container">
	<div class="row">
		<div class="col-sm-4">
	<br />
			@include('inc.sidebar')
		</div>
		<div class="col-sm-8">
				<h2>Enter New Renter (Update)</h2>
				<hr />
			<form action="{{route('update',$data->id)}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="rname">Renter's Name: </label>
					<input type="text" name="rname" value={{$data->rname}} class="form-control"/>
				</div>
				<div class="form-group">
					<label for="profession">Renter's Profession: </label>
					<input type="text" name="profession" value={{$data->profession}} class="form-control"/>
				</div>
				<div class="form-group">
					<label for="nid">Renter's NID No: </label>
					<input type="text" name="nid" value={{$data->nid}} class="form-control"/>
				</div>
				<div class="form-group">
					<label for="hno">House No: </label>
					<select name="room_id" id="hno" class="form-control">
						<option value="">-- Select Your House Number --</option>
							@foreach($h_number as $hn)
							<option value="{{$hn->id}}" <?= $data->room_id==$hn->id?"selected":""; ?>>{{$hn->hno}}</option>
							@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="hrent">Monthly House Rent: </label>
					<div class="input-group-prepend">
						<span class="input-group-text">৳</span>
						<input type="text" name="hrent" id="hrent"  value={{$data->hrent}} class="form-control"/>
					</div>
				</div>
				<div class="form-group">
					<label for="advance">Advance payment: </label>
					<div class="input-group-prepend">
						<span class="input-group-text">৳</span>
						<input type="number" name="advance" value={{$data->advance}} class="form-control"/>
					</div>
				</div>
				<div class="form-group">
					<label for="jdate">Joining Date :</label>
					<input type="date" name="jdate" value={{$data->jdate}} class="form-control"/>
				</div>
				<div class="form-group">
					<label for="phone">Renter's phone: </label>
					<input type="text" name="phone" value={{$data->phone}} class="form-control"/>
				</div>
				<div class="form-group">
					<label for="comments">Comments: </label>
					<textarea class="form-control" name="comments" >{{$data->comments}}</textarea>
				</div>
				<div class="form-group">
					<label for="comments">Renter Active/Inactive: </label>
					<select class="form-control" name="status">
						<option value="1" <?= $data->status==1?'selected':''; ?>>Active</option>
						<option value="0" <?= $data->status==0?'selected':''; ?>>Inactive</option>
					</select>
				</div>
				
				<div class="form-group">
					<label for="image">Renter Photo: </label>
					<input type="file" name="image"/>
					<img src="{{url('uploads/'.$data->image)}}" width="50px" alt="" />
				</div>
				<div class="form-group">
					<input type="submit" value="Update" class="btn btn-warning"/>
				</div>
			</form>
			
		</div>
	</div>
</div>
@include('inc.footer')
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#hno').on('change',function(){
            var hno = $(this).val();

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
