@include('layouts.header')
<div class="container">

    <div class="billTop mt-2">
            <button type="button" id="btnPrint" value="Print" onClick="printReport()" class="ttt btn btn-primary mb-2">Print Order receipt</button>
    </div>
<div class="container col-md-8 mt-5 pt-5 bg-light" id="printableArea">
<div class="billingHead">
        <h3 class="text-center font-weight-bold mb-5">Medino Pharmacy

        </h3>
    <div class="row">
    <p class="text-left col-md-6">Date:  <label><?php
        echo date('Y-m-d');
        ?></label>

    </p>

    <p class="text-right col-md-6">Bill No. {{$bill->order_id}}</p>
    </div>
    <div class="customer text-left">
    <lable>Customer Names: {{Auth::user()->name}}</label> <br>
    <p>Customer Address: {{Auth::user()->address}}</p>
    </div>
    <table class="table table-bordered" border="1">
            <thead>
                <tr>
                    <th >S.N</th>
                    <th>Item</th>
                    <th>Item Price (Nrs.)</th>
                    <th>Item Quantity</th>
                    <th>Amount</th>
                </tr>
            </thead>
                <tbody>
                    @foreach($billMedicine as $key => $data)
                    <tr class="trItems">
                        <td>{{$key + 1}}</td>
                        <td>{{$data->medicine_name}}</td>
                        <td class="Price">{{$data->rate}}</td>
                        <td class="Qty">{{$data->quantity}}</td>
                        <td class="Amt"></td>
                    </tr>
                    @endforeach
                </tbody>
        </table>

        <script src="{{asset('js/app.js')}}"></script>
        <script>
            $(document).ready(function(){
                  $('.trItems').each(function(){
                    var q = $(this).closest('tr').find('.Qty').text();
                            var p = $(this).closest('tr').find('.Price').text();
                            var tot = p*q;
                            $(this).closest('tr').find('.Amt').text(tot);
                });


                var Prices = $('.Amt');
                            var total = 0;
                            var Gtotal = 0;
                             $.each(Prices, function(i, Price){
                              var pc=$(this).text();
                              if (pc!= 'NA'){
                                   total = total + parseInt(pc,10);
                                //    Gtotal = total + 100;
                              }});
                            // $('#subTot').text(total);
                            // $('#gTot').text(Gtotal);





                var subTot = total;
                $("#subTot").text(subTot);

                var vat = (subTot)/100*13;
                var round = Math.round(vat);
                $("#vat").text(round);

                $("#gTot").text(subTot+round);


                $('#dis').keyup(function(){
                    var disPer = $(this).val();
                    var disAmt = ((subTot+round)/100)*disPer;
                    var roundedDis = Math.round(disAmt);
                    $("#gTot").text(subTot+round-roundedDis);
                });

                $('#dis').change(function(){
                    var disPer = $(this).val();
                    var disAmt = ((subTot+round)/100)*disPer;
                    var roundedDis = Math.round(disAmt);
                    $("#gTot").text(subTot+round-roundedDis);
                });
            });

        </script>








</div>
<div class="billingBody">
<div class="Total text-right">

 Sub Total : <label  id="subTot"></label> <br>

 Shipping charge : <label id="vat"></label> <br>
 <!-- Discount :&nbsp <input  id="dis" type="number" min="0" max="100"> % <br> -->
Grand Total : <label  id="gTot"></label>
</div>
<p class="col text-center">Thank you for your visit we hope you liked our service.</p>
<p>Medino Pharmacy</p>
<p>
Maharajgunj, Nepal
16-Chandol, Kathmandu</p>
<p>+01 4385316</p>
</div>
</div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">
    function printReport()
    {
        document.getElementById('btnPrint').style.visibility = 'hidden';
        var prtContent = document.getElementById("printableArea");
        window.print(prtContent);
        document.getElementById('btnPrint').style.visibility = 'visible';
    }
</script>

