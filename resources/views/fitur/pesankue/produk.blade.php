@extends('layouts.user.master')
 
@section('content')


<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

        <div class="carousel-item active">
       
        <div class="container">

            <div class="section-title">
                <span>Produk</span>
                <h2>Kue</h2>
                <p>Berbagai macam produk kue yang kami sediakan</p>
            </div>

            
            <div class="row">
            @foreach($data as $d)
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="box">
                    <span>KUE KUE</span>
                   
                    <p>Gambar :</p>
                    <p>Nama :</p>
                    <p>Harga : </p>
                    <p>Detail (Button) :</p>
                    <p>Button keranjang : </p>
                    </div>
                </div>
                @endforeach


            </div>
            
        </div>
            </div>
        </div>
        </div>
        </section>
        </main><!-- End #main -->
  @endsection
