@extends('layouts.appadmin')

@section('title','Menu') 
@section('content')
<div class="container">
     <div class="row justify-content-center">
         <div class="col-md-11">
            <div class="card">
                <div class="card-header">MENU</div>
         
                <div class="card body">
                    <br><p><a href="{{route('menuadmin.create')}}" class="btn btn-primary btn-lg btn-block"> + Tambah Menu</a></p>     
                    <table class="table table-bordered" >
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
                                <img src="{{asset('img/'.$value->image)}}" width="96px">
                            </td>                   
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->description }}</td>
                            <td>{{ $value->price }}</td>

                            <td><a href="{{route('menuadmin.edit',$value['id'])}}" class="btn btn-warning">EDIT</a>
                                <a href="{{route('menuadmin.delete',$value['id'])}}"
                                 onclick="return confirm('Apakah Anda yakin ingin menghapus menu {{$value['name']}}')" class="btn btn-danger">HAPUS</a>
                            </td>
                        </tr>                            
                        @endforeach
                    </table>
                 </div>
                
             </div>
         </div>  
     </div>
 </div>   
 @endsection