@extends('layouts.app')
@section('title')@stop 
@section('content')

<!-- Banner Area Starts -->
<section class="banner-area other-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1> Your Cart</h1>
                <a href="index.php">Home</a> <span>|</span> <a href="features.php">Your Cart</a>
            </div>
        </div>
    </div>
</section> 
<!-- Banner Area End -->
<br>
<br>
<div class="container">
<div class="row" >
    <form class="form-header" action="" method="POST">
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" 
                    placeholder="Search medicine">
                <div class="input-group-append">
                    <button class="btn btn-secondary"><i class="fa fa-search"></i></button>
                 </div>
    </form>
        </div>
        <a class="btn btn-primary mb-3 pr-4 pl-4" style="margin-left:750px;"
                     href="{{url('/orders')}}" type="submit">View Orders</a>
    <table class="table" style="border:1px solid;" id="myTable">
        <thead class="bg-dark" >
            <tr class="text-light">
                <th>Image</th>
                <th>Medicine</th>
                <th>Rate</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody> 
            @if($addtocart->count()>0)
                @foreach($addtocart as $addtocarts)
                    <tr>
                    <td style="display: none;" class="mId">
                        <input type="text" name="mId[]" value="{{$addtocarts->medicine_id}}" readonly>
                    </td>
                    <td>
                        <img src="/{{ $addtocarts->image}}" style="height:100px; width:100px;">
                    </td>

                    <td>{!! $addtocarts->medicine_name !!}</td>

                    <td class="price">{!! $addtocarts->rate !!}</td>

                    <td> 
                        <input type="number" name="qty[]" class="form-control mb-3 col-sm-3 qty" value="1"
                               min="1" oninput="validity.valid||(value='')">
                    </td>

                    <td class="total">
                    {!! $addtocarts->rate !!}
                    </td>
                        <td><form action="{{url('/cart',$addtocarts->cart_id)}}" method="POST">
                            {{ csrf_field() }} 
                                {!! method_field('DELETE') !!}
                                
                                <button onclick="if (!confirm('Are you sure to remove from cart?')) { return false }" 
                                        type="submit" name="delete" class="btn btn-danger btn-sm"> Remove</button>
                            </form></td>
                    </tr> 
                @endforeach
            @else
         
        <h1 class="text-center">Your cart is empty !!</h1>
         
            @endif
        </tbody>
    </table>
        <div class="border-bottom border-white "></div>
            <hr class="border">
                <div class="container">
                    <div class="row">
                        <div class="col-9"></div>
                    <div class="mt-3">
                        <span>Subtotal  &nbsp; Rs. </span>
                        <span><label id="subTotal"></label></span>
                        <br>
                        <span>Shipping charges &nbsp;</span>
                        <span>Rs.<label>100</label></span>
                        <hr>
                        <span class="mt-2"> <b class="text-dark">Net Amount Payable  &nbsp;Rs.</b></span>
                        <span><label id="NTotal"></label></span>
                    </div>
                    <p>*Price shown includes of all applicable taxes, fees and subject to availability.</p>
                    <div class="col-9 mr-3"></div>
                                <input type="hidden" name="medicine_id" value="" />
									@auth
									    <input type="hidden" name="user_id" value="{{Auth::user()->id}}" />
									@endauth
                                    <button class="btn btn-success mb-3 pr-4 pl-4"  data-toggle="modal" 
                                            data-target="#g" type="submit">Proceed to order</button>
                    </div>
                </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="g" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel" style="text-align:center;">Delivery info</h3>
      </div>
      <div class="modal-body">
      <div class="">
        <article class="card-body mx-auto" style="">
    	    <form class="form-horizontal" method="POST" action="">
                {{ csrf_field() }} 

        <div class="form-group input-group{{ $errors->has('address') ? ' has-error' : '' }}">
          <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-map-marker"></i> </span>
           </div>
            <input id="address" name="address" class="form-control" placeholder="Address to deliver" type="text"
                     value="{{ old('address') }}" required autofocus>
              @if ($errors->has('address'))
                <span class="help-block">
                    <strong>{{ $errors->first('address') }}</strong>
                </span>
              @endif
        </div>

        <div class="form-group input-group{{ $errors->has('phone_no') ? ' has-error' : '' }}">
        	<div class="input-group-prepend">
    		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
    		</div>
    		<label class="custom-select" style="max-width: 120px;">+977</label>
        	<input id="phone_no" name="phone_no" class="form-control" placeholder="Phone number"
                     type="text" value="{{ old('phone_no') }}" required autofocus>
            @if ($errors->has('phone_no'))
                <span class="help-block">
                <strong>{{ $errors->first('phone_no') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <button type="submit" id="btnConfirm" class="btn btn-success btn-block">Check out </button>
        </div> 
            </form>
        </article>
    </div>
</div> 
</div>
</div>
</div>

<script>
      var msg = '{{Session::get('success')}}';
      var exist = '{{Session::has('success')}}';
      if(exist)
      {
        alert(msg);
      }
</script>
       
<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
        var rate = $('.total');
		var total = 0;
		var Nettotal = 0;
		$.each(rate, function(i, price){
		var pc=$(this).text();  
			if (pc!= 'NA'){
				total = total + parseInt(pc,10);
				Nettotal = total + 100;
			}});
				$('#subTotal').text(total);
				$('#NTotal').text(Nettotal);
                $('.qty').on('keyup change', function () {
					var q = $(this).val();
					var p = $(this).closest('tr').find('.price').text();
					var tot = p*q;
                $(this).closest('tr').find('.total').text(tot);
                    var rate = $('.total');
					var total = 0;
					var Nettotal = 0;
				$.each(rate, function(i, price){
					var pc=$(this).text();  
					    if (pc!= 'NA'){
							total = total + parseInt(pc,10);
							Nettotal = total + 100;
				    }
                });
				$('#subTotal').text(total);
				$('#NTotal').text(Nettotal);
            });
        });
</script>
</div>

<script>
    function myFunction() {
    // Declare variables 
    var input, filter, table, tr, td, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
    if (td.innerHTML.toUpperCase().indexOf(filter) > -1)
    {
        tr[i].style.display = "";
    }
    else
    {
        tr[i].style.display = "none";
    }
    } 
  }
}
</script>

<script src="{{asset('js/app.js')}}"></script>
<script type="text/javascript">
    $('#btnConfirm').click(function(e){
            e.preventDefault();
            var mId = $("input[name='mId[]']").map(function(){return $(this).val();}).get();
            var qty = $("input[name='qty[]']").map(function(){return $(this).val();}).get();
            var shipAddress = $('#address').val();
            var contactNo = $('#phone_no').val();

                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
							url: "{{URL('/order')}}",
							method: 'post',
							data: {
								mId : mId,
								qty : qty,
								shipAddress : shipAddress,
								contactNo : contactNo
							},
							success:function(response){
								console.log(response);
								if (response.success==true) {
						            alert(response.messagePass);
						            location.reload();
						        }
						        else{
						            alert(response.messageFail);
						        }
							}
							
						});
					}); 
</script>
@endsection



