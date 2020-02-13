@include('inc.header')

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <br />
            @include('inc.sidebar')
        </div>
        <div class="col-sm-8">
            <h2>Monthly Renter Payment (update)</h2>
             <hr />
                <form action="{{route('update-payment',$data->id)}}" method="post">
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
                    <select name="rname" id="rname" class="form-control" onchange="rname(this.value)">
                        <option value="">-- Select Your Renter --</option>
                        @foreach($renter_name as $rn)
                            <option value="{{$rn->id}}">{{$rn->rname}}</option>
                        @endforeach
                    </select>
                </div>
                    <div class="form-group">
                        <label for="hno">House Number: </label>
                        <input type="text"  id="hno" value="{{$data->hno}}" class="form-control"/>
                        <input type="hidden" name="room_id" id="room_id" class="form-control"/>
                    </div>
                <div class="form-group">
                    <label for="hno">House Rent: </label>
                    <div class="input-group-prepend">
                        <span class="input-group-text">৳</span>
                        <input type="text" name="hrent" id="hrent" value="{{$data->hrent}}" class="form-control"/>
                    </div>
                </div>
                    <div class="form-group">
                        <label for="hrent">Paid by Renter: </label>
                        <div class="input-group-prepend">
                            <span class="input-group-text">৳</span>
                            <input type="text" name="renter_payment" value="{{$data->renter_payment}}" id="renter_payment" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="hrent">Due Payement (if any): </label>
                        <div class="input-group-prepend">
                            <span class="input-group-text">৳</span>
                            <input type="text" name="due_payment" value="{{$data->due_payment}}" id="due_payment" class="form-control" />
                        </div>
                    </div>
				<div class="form-group">
					<label for="jdate">Paid date :</label>
					<input type="date" name="jdate" value="{{$data->jdate}}" class="form-control"/>
				</div>
				<div class="form-group">
                    <label for="paid_month">Paid Month: </label>
                    <select name="paid_month" id="paid_month" class="form-control">
                        <option value="">-- Select Month --</option>
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="Octobar">Octobar</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>
                </div>
				<div class="form-group">
                    <label for="paid_year">Paid Year: </label>
                    <select name="paid_year" class="form-control">
                        <option value="">-- Select Year --</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                    </select>
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
   function rname(rname){
            $('#hno').val();
            $('#hrent').val();
            $.ajax({
                type: 'GET',
                url: "{{route('get_houserent')}}",
                data: {rname:rname},
                success: function(sdata){
                    $('#hno').val(sdata[0]);
                    $('#hrent').val(sdata[1]);
                    $('#room_id').val(sdata[2]);
                },

            });
    }
		$('#rname').val(<?= $data->renter_id ?>);
		rname(<?= $data->renter_id ?>);
</script>
<script>
    $('#renter_payment').keyup(function () {
        var renter_payment = $('#renter_payment').val();
        var house_rent = $('#hrent').val();
        $('#due_payment').val(house_rent-renter_payment);
    })
</script>
