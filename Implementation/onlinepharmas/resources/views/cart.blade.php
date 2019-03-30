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
                        <input type="text" class="form-control" placeholder="Search medicine" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-secondary"><i class="fa fa-search"></i></button>
                    </div>
                </form>
</div>
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
                    <td>
                        <img src="/{{ $addtocarts->image}}" style="height:100px; width:100px;">
                    </td>

                    <td>{!! str_limit($addtocarts->medicine_name,60) !!}</td>

                    <td class="price">{!! str_limit($addtocarts->rate,2200) !!}</td>
                    <td>
               
                        
                        <input type="number" class="form-control mb-3 col-sm-3 qty" value="1"  min="1">
                     
                       
                    </td>
                    <td class="total">
                    {!! $addtocarts->rate !!}
                    </td>
                        <td><form action="{{url('/cart',$addtocarts->cart_id)}}" method="POST">
                            {{ csrf_field() }} 
                                {!! method_field('DELETE') !!}
                                
                                <button onclick="if (!confirm('Are you sure to remove from cart?')) { return false }" type="submit" name="delete" class="btn btn-danger btn-sm"> Remove</button>
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
        <span>
        <label id="subTotal"></label>
        </span>
        <br>
        <span>
        Shipping charges &nbsp;
        </span>
        <span>
        Rs.<label>100</label>
        </span>
        <hr>
        
        <span class="mt-2"> <b class="text-dark">Net Amount Payable  &nbsp;Rs.</b></span>
        <span><label id="GTotal"></label></span>
        
        </div>
        <p>*Price shown includes of all applicable taxes, fees and subject to availability.</p>
        <div class="col-9 mr-3"></div>
        <button class="btn btn-success mb-3 pr-4 pl-4">Proceed to order</button>
        </div>
        </div>
        </div>
        </div>
       

        <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
					<script type="text/javascript">
						$(document).ready(function(){

							var prices = $('.total');
							var total = 0;
							var Gtotal = 0;
							 $.each(prices, function(i, price){
							  var pc=$(this).text();  
							  if (pc!= 'NA'){
							       total = total + parseInt(pc,10);
							       Gtotal = total + 100;
							  }});
							$('#subTotal').text(total);
							$('#GTotal').text(Gtotal);



							$('.qty').on('keyup change', function () {
						    
						    var q = $(this).val();
						    var p = $(this).closest('tr').find('.price').text();
						    var tot = p*q;

						    $(this).closest('tr').find('.total').text(tot);

						    var prices = $('.total');
							var total = 0;
							var Gtotal = 0;
							 $.each(prices, function(i, price){
							  var pc=$(this).text();  
							  if (pc!= 'NA'){
							       total = total + parseInt(pc,10);
							       Gtotal = total + 100;
							  }});
							$('#subTotal').text(total);
							$('#GTotal').text(Gtotal);
						});		
						});
						
                    </script>
    </div>
@endsection



