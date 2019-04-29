@foreach($medicine as $medicines)
                <div class="col-md-6"  > 
                    <div class="text-center shadow bg-white" style=" padding:2rem; margin:2rem 2rem">
                        <img src="{!! $medicines->image!!}" height="120px;">
                        <h3>{!! $medicines->medicine_name!!}</h3>
                        <p class="pt-3"> Rs.{!! $medicines->rate!!}</p>
                            <form action="{{url('/cart',$medicines->medicine_id)}}" method="post">
                                {{csrf_field()}}
                                @auth
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}"/>
                                @endauth
                                    <button class="btn btn-md btn-primary">Add to Cart</button> <br>
                            </form>
                        <small><a  href="" data-toggle="modal" data-target="#g{!! $medicines->medicine_id !!}">
                        <u>View-Info</u>
                        </a></small>

<!-- Modal -->
<div class="modal fade" id="g{!! $medicines->medicine_id !!}" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title text-info" id="exampleModalLabel">Product Detail</h3>
      </div>
    <div class="modal-body">
        <div class="text-left"> 
            <h6>
                <b class="text-dark">Medicine category:</b>
                <label style="font-weight:400;">{!!$medicines->medicine_type_name !!}</label>   
            </h6>
            <h6>
                <b class="text-dark">Description: </b>
                <label style="font-weight:400;">{!!$medicines->description !!}</label>
            </h6>
            <h6>
                <b class="text-dark">Manufactured date: </b>
                <label style="font-weight:400;">{!!$medicines->manufacture_date !!}</label>
            </h6>
            <h6>
                <b class="text-dark">Expiry date: </b>
                <label style="font-weight:400;">{!!$medicines->expiry_date !!}</label>
            </h6>
            <h6>
                <b class="text-dark">Quantity: </b>
                <label style="font-weight:400;">{!!$medicines->quantity !!}</label>
            </h6>
        </div>
    </div> 
    </div>
  </div>
</div>



        </div>
    </div>
    @endforeach