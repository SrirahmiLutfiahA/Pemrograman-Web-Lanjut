@extends('layouts.appadmin')
 
@section('content')
<div class="container">
     <div class="row justify-content-center">
         <div class="col-md-10">
            <div class="card">
                <div class="card-header">TAMBAH MENU</div>

                <div class="card body">
                   <form method="POST" action="{{route('menuadmin.store')}}">

                   @csrf
                   @method('PUT')

                    <br>
                   <div class="form-group row">
                    <label class="col-md-4 text-md-right">Gambar</label>
                    <div class="col-md-6" width="100px">
                        <input type="file" name="image" class="form-control-file">
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-md-4 text-md-right">Nama Menu</label>
                    <div class="col-md-6">
                        <input type="text" name="name" class="form-control" placeholder="Masukkan nama menu">
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-md-4 text-md-right">Deskripsi Menu</label>
                    <div class="col-md-6">
                        <input type="text" name="description" class="form-control" placeholder="Masukkan deskripsi menu">
                    </div>
                    </div>

        
                    <div class="form-group row">
                    <label class="col-md-4 text-md-right">Harga</label>
                    <div class="col-md-6">
                        <input type="text" name="price" class="form-control" placeholder="Masukkan harga">
                    </div>
                    </div>


                    <div class="form-group row">
                         <label class="col-md-4 text-md-right"></label>
                            <div class="col-md-6">
                                <button class="btn btn-success" type="submit">SIMPAN</button>
                                <a class="btn btn-danger" href="{{ route('menuadmin') }}" role="button">BATAL</a>
                        </div>
                    </div>

                   </form>
                 </div>
             </div>
         </div>  
     </div>
 </div>   
 @endsection