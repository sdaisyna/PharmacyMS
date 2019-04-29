@extends('layouts.app_login')
@section('title')@stop 
@section('content')

<!-- Banner Area Starts -->
<section class="banner-area other-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1> Your Orders</h1>
                <a href="index.php">Home</a> <span>|</span> <a href="features.php">Your Orders</a>
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
    <table class="table" style="border:1px solid;" id="myTable">
        <thead class="bg-dark" >
            <tr class="text-light">
                <th>Order Date</th>
                <th>Shipping Address</th>
                <th>Phone No</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody> 
            @if($orders->count()>0)
                @foreach($orders as $data)
                    <tr>
                        <td>{{$data->order_date}}</td>

                        <td>{{$data->shipping_address}}</td>

                        <td class="price">{{$data->phone_no}}</td>

                        <td>
                            <form method="post" action="{{url('/genBill')}}">
                            {{csrf_field()}}
                            {{method_field('GET')}}
                            <input type="hidden" name="mId" value="{{$data->order_id}}">
                            <button type="submit" name="genBill" class="btn btn-primary btn-sm mr-4">
                            Order Receipt
                            </form>
                        </td>
                    </tr> 
                @endforeach
            @else
         
        <h1 class="text-center">You don't have order list !!</h1>
         
            @endif
        </tbody>
    </table>
        
        <br>
        <br>
        <br>
</div>
</div>
<br><br><br>
<br><br><br>
<br><br><br>


<script>
      var msg = '{{Session::get('success')}}';
      var exist = '{{Session::has('success')}}';
      if(exist)
      {
        alert(msg);
      }
</script>
       
<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>

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



