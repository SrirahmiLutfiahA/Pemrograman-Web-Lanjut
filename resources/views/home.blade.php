@extends('layouts.app')

@section('title','Home')
@section('content')
<link rel="stylesheet" href="{{asset('css/home.css')}}" >

<section class="banner">
        <h2>WELCOME TO GRANDMA COFFEE<br>Jl. Ronggomulyo 14 Tuban</h2>
    </section>

<!--about-->
<section class="about">
            <h3>Tentang Kami</h3>
            <p>
                Grandma Coffee coffee shop dengan suasana hangat, menu yang unik dengan harga<br>
                yang terjangkau. Kami siap mengantar menu favorit ke rumah Anda!<br> 
                Booking tempat untuk acara silahkan beralih ke menu <li2><a href="contact"><strong>CONTACT</strong></a></li2>.
                
            </p>
</section>

<!--footer-->
<footer>
    <div class="container"></div>
    <small>Copyright &copy; 2020 - Grandma Coffee </small>
</footer>
@endsection