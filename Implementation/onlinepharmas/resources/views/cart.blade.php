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



<div class="container">
        <h2>List of medicine</h2>
        <div class="row" >
<div class="col-md-4">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search medicine"
style="background: #f5f7f5; padding:7px; font-size:15px; color: rgb(61, 38, 38);">
</div>
</div>
        <table class="table table-bordered" id="myTable">
            <thead>
            <tr>
                <th>Image</th>
                <th>Medicine</th>
                <th>Rate</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody> 
                @foreach($addtocart as $addtocarts)
                    <tr>
                    <td>
                        <img src="/{{ $addtocarts->image}}" style="height:100px; width:100px;">
                    </td>

                    <td>{!! str_limit($addtocarts->medicine_name,60) !!}</td>

                    <td>{!! str_limit($addtocarts->rate,2200) !!}</td>
                    <td></td>
                        <td><form action="{{url('/cart',$addtocarts->cart_id)}}" method="POST">
                            {{ csrf_field() }} 
                                {!! method_field('DELETE') !!}
                                
                                <button onclick="if (!confirm('Are you sure to delete this medicine?')) { return false }" type="submit" name="delete" class="btn btn-danger btn-sm"> Delete</button>
                            </form></td>
                    </tr> 
                @endforeach
         
            </tbody>
        </table>
    </div>
@endsection



