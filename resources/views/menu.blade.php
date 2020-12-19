@extends('layouts.app')

@section('title','Menu') 
@section('content')


<div class="container-menu">
     <div class="row justify-content-center">
         <div class="col-md-10">
            <div class="card">
                <div class="card-header">OUR MENU</div>
                <div class="card-body-menu">
                 <table class="table table-stripped">
                      <tr>
                        <th><b>No</b></th>
                        <th><b>Image</b></th>
                        <th><b>Nama</b></th>
                        <th><b>Keterangan</b></th>
                        <th><b>Harga</b></th>
                        <th><b>Action</b></th>
                    </tr>
                        @php $id=0; @endphp
            
                        @foreach($data_menu as $value)
                        @php $id++; @endphp
                        <tr>
                            <td>{{$id}}</td>
                            <td>
                                <img src="{{asset('img/'.$value->image)}}" width="100px">
                            </td>                   
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->description }}</td>
                            <td>Rp {{ $value->price }}</td>
                            <td><a href="{{url('/cart/tambah',$value['id'])}}" class="btn btn-success">Pesan</a></td>
                        </tr>
                        @endforeach
                    </table>                 
                 
                </div>    

             </div>
         </div>  
     </div>
 </div>
 @endsection