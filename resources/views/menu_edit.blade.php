@extends('layouts.appadmin')
 
@section('content')
<div class="container">
     <div class="row justify-content-center">
         <div class="col-md-10">
            <div class="card">
                <div class="card-header">EDIT MENU</div>

                <div class="card body">
                   <form method="POST" action="{{route('menuadmin.update', $data_menu['id'])}}">

                   @csrf
                   @method('PUT')

                    <br>
                   <div class="form-group row">
                    <label class="col-md-4 text-md-right">Gambar</label>
                    <div class="col-md-6">
                        <input type="file" name="image" value ="{{$data_menu['image']}}" class="form-control-file">
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-md-4 text-md-right">Nama Menu</label>
                    <div class="col-md-6">
                        <input type="text" name="name" value ="{{$data_menu['name']}}" class="form-control" >
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-md-4 text-md-right">Deskripsi Menu</label>
                    <div class="col-md-6">
                        <input type="text" name="description" value ="{{$data_menu['description']}}" class="form-control" >
                    </div>
                    </div>

        
                    <div class="form-group row">
                    <label class="col-md-4 text-md-right">Harga</label>
                    <div class="col-md-6">
                        <input type="text" name="price" value ="{{$data_menu['price']}}" class="form-control" >
                    </div>
                    </div>


                    <div class="form-group row">
                         <label class="col-md-4 text-md-right"></label>
                        <div class="col-md-6">
                        <button class="btn btn-success" type="submit">SIMPAN</button>
                        </div>
                    </div>

                   </form>
                 </div>
             </div>
         </div>  
     </div>
 </div>   
 @endsection