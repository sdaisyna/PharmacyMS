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
<div class="col-md-4">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search medicine"
style="background: #f5f7f5; padding:7px; font-size:15px; color: rgb(61, 38, 38);">
</div>
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
                    {!! str_limit($addtocarts->rate,2200) !!}
                    </td>
                        <td><form action="{{url('/cart',$addtocarts->cart_id)}}" method="POST">
                            {{ csrf_field() }} 
                                {!! method_field('DELETE') !!}
                                
                                <button onclick="if (!confirm('Are you sure to delete this medicine?')) { return false }" type="submit" name="delete" class="btn btn-danger btn-sm"> Delete</button>
                            </form></td>
                    </tr> 
                @endforeach
         @else
         
         <h1 class="text-center">Your cart is empty !!</h1>
         
         @endif
            </tbody>
        </table>

        <div>
        <span>
        Sub Total:
        </span>
        <span>
        <label id="subTotal"></label>
        </span>
        <br>
        <span>
        Shiping charge:
        </span>
        <span>
        Rs.<label>100</label>
        </span>
        <br>
        <span> GrandTotal:</span>
        <span><label id="GTotal"></label></span>
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



