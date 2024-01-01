@extends('layouts.layout')

@section('content')
<div class="container-fluid pt-4" style="background-color: #F5F8FB">
      <div class="container">
        <img src="gambar/Makanan Ringan/makanan ringan.png" class="img-fluid" alt="">
        <div class="container text-center m-3">
          <h1 class="fw-bold">Serba Serbi Makanan Ringan</h1>
        <h4">Temukan berbagai jenis resep makanan ringan yang dapat kamu buat dengan mudah.</h4>
        </div>
      </div>
      <div class="container-fluid text-center">
        <div class="row mb-4">
          <div class="col-10 offset-1">
            <div class="row">
              <div class="col-4">
                <img src="gambar/Makanan Ringan/risol.png" class="img-fluid" alt="">
                <p>RISOL MAYO</p>
              </div>
              <div class="col-4">
                <a href="Resep Cireng.html" style="text-decoration:none">
                  <img src="gambar/Makanan Ringan/cireng.png" class="img-fluid" alt="">
                  <p>CIRENG BANDUNG</p>
                </a>
              </div>
              <div class="col-4">
                <img src="gambar/Makanan Ringan/leker.png" class="img-fluid" alt="">
                <p>LEKER</p>
              </div>
            </div>
            <div class="col-1"></div>
          </div>
        </div> 
        <div class="row">
          <div class="col-10 offset-1">
            <div class="row">
              <div class="col-4">
                <img src="gambar/Makanan Ringan/kentang goreng.png" class="img-fluid" alt="">
                <p>KENTANG GORENG</p>
              </div>
              <div class="col-4">
                <img src="gambar/Makanan Ringan/martabak.png" class="img-fluid" alt="">
                <p>MARTABAK TELUR</p>
              </div>
              <div class="col-4">
                <img src="gambar/Makanan Ringan/bola keju.png" class="img-fluid" alt="">
                <p>BOLA KEJU</p>
              </div>
            </div>
          </div>
          <div class="col-1"></div>
        </div> 
      </div>
    </div>
@endsection