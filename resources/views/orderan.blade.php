@extends('layouts.appadmin')

@section('title','Menu') 
@section('content')
<div class="container">
     <div class="row justify-content-center">
         <div class="col-md-11">
            <div class="card">
                <div class="card-header">IN ORDER</div>
				
					<table class="table table-stripped">
					<tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Total</th>
						<th>Action</th>
						<th>&nbsp;</th>
                    </tr>
					
					
						@php $id=1; 
                            $total=0;
                            $subtotal=0;

                        @endphp

						@foreach($cart as $ct =>  $value) 
						 @php
                            $total = $value['price'] * $value['jumlah'];
                         @endphp   
						
						
                    <tr>
                        <td>{{$id++}}</td> 
                        <td>{{$value['name']}}</td>   
						<td>Rp {{$value['price']}}</td>
                        <td>{{$value['jumlah']}}</td>
                        <td>Rp {{$total}}</td>
                        <td><a href="{{url('/cart/hapus/'.$ct)}}" class="btn btn-success">SELESAI</a></td>
                    </tr>
                     @endforeach
                     
                    </table>
               </div>
         </div>  
     </div>
 </div>   
 @endsection