@extends('layouts.app')

@section('title','Contact')
@section('content')
<link rel="stylesheet" href="{{asset('css/contact.css')}}" >
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

<div class="cover">
<h3>CONTACT US</h3>  
    <section class="contact">
            <div class="container">         
                <div class="opsi">
                    <h4>Address</h4>
                    <p>JL Ronggomulyo 14 Latsari, Tuban, 62315</p>
                </div>
                <div class="opsi">
                     <h4>Email</h4>
                    <p>grandmacoffee@gmail.com</p>
                </div>
                <div class="opsi">
                    <h4>Telp</h4>
                    <p>(021) 12345678</p>
                </div>
                <div class="opsi">
                    <h4>Whatsapp</h4>
                    <p>085203876900</p>
                </div>
           
        </div>
    </section>

<h3>GET SOCIAL</h3>
    <section class="contact2">
        <div class="container2">
            <ul>
                <li class="sosmed">
                <a href="https://instagram.com/grandmacoffee.id?igshid=1hcyddeobqv2r" >
                    <i class="fab fa-instagram fa-3x" style="color : crimson"></i>
                    <div class="ig">Instagram</div>
                </a>
                </li>
                <li class="sosmed">
                <a href="https://www.facebook.com/grandmacoffeetuban">
                    <i class="fab fa-facebook-square fa-3x" style="color : blue"></i> 
                    <div class="fb">Facebook</div>
                </a>
                </li>
                <li class="sosmed">
                <a href="https://twitter.com/gramshardcoffee">
                    <i class="fab fa-twitter fa-3x" style="color : deepskyblue"></i>
                    <div class="tw">Twitter</div>
                </a>
                </li>
            </ul>
        </div>
    </section>
    </div>

<footer>
    <div class="container"></div>
    <small>Copyright &copy; 2020 - Grandma Coffee </small>
</footer>
    @endsection