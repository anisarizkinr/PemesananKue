@extends('layouts.master')
@section('header')
    <nav id="navbar" class="navbar">
            <ul>
            <li><a class="nav-link" href="{{ url('/')}}">Home</a></li>
            
            <li><a class="nav-link" href="{{ url('supplier')}}">Supplier</a></li>
            <li><a class="nav-link" href="{{ url('pelanggan')}}">Pelanggan</a></li>
            <li><a class="nav-link" href="{{ url('pegawai')}}">Pegawai</a></li>
            <li><a class="nav-link scrollto" href="{{ url('contact')}}">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
@endsection

@section('content')
<section id="why-us" class="why-us">
        <div class="container">
            <div class="section-title">
                <span>Barang</span>
                <h2>Barang</h2>
                <p>Berbagai Merek Mobil dengan Kualitas Terbaik dapat Anda dapatkan di Raja Mobil</p>
            </div>

            
            <div class="row">
               
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="box">
                    <span>KUE KUE</span>
                   
                    <p>Transmisi :</p>
                    <p>Bahan bakar :</p>
                    <p>Mesin : </p>
                    <p>Tempat duduk :</p>
                    <p>Varian warna : </p>
                    </div>
                </div>
              

            </div>
            
        </div>
        </section>

@endsection