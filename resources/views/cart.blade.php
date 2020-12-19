@extends('layouts.app')

@section('title','Order')
@section('content')

	@if(empty($cart))
		<h3>
            Anda belum mempunyai pesanan, Silahkan kembali ke <li2><a href="menu"><strong>MENU</strong></a></li2> untuk memesan.
        </h3>

	@else
	<div class="container">
     <div class="row justify-content-center">
         <div class="col-md-10">
            <div class="card-menu-menu">
                <div class="card-header">YOUR ORDER</div>
                <div class="card body">
				
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
                        <td><a href="{{url('/cart/hapus/'.$ct)}}" class="btn btn-danger">Hapus</a></td>
                    </tr>
                    
                        @php 
                            $subtotal += $total;
                        @endphp

					 @endforeach
                     
                     <tr>
                        <th colspan="4">TOTAL BAYAR</th>
                        <th>Rp {{$subtotal}}</th>
                        <th>&nbsp;</th>
                     </tr>
					</table>

                    <a href="{{route('klikpesan')}}" class="btn btn-success">PESAN</a>

                </div>
             </div>
         </div>  
     </div>
 </div>
@endif
@endsection