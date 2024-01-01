@extends('layouts.layout')

@section('content')
<!-- Main Page -->
<div class="container-fluid">
      <div class="row" style="background-color: #F5F8FB;">
        <div class="col-12 ps-4 pt-5">
          <div class="row">
            <div class="col-6 offset-1">
            <img src="gambar/Home/10 makanan.png" class="img-fluid" alt="">
            <h2 class="fw-bold">10 MAKANAN LOW BUDGET VERSI ANAK KOST</h2>
            </div>
            <!-- Sidebar -->
            <div class="col-3 offset-1">
              <div class="row">
                <div class="col-12 mb-2">
                  <img src="gambar/Home/babi kecap.png" class="img-fluid" alt="">
                  <div class="text-center">Resep Babi Kecap</div>
                </div>
                <div class="col-12 mb-2">
                  <img src="gambar/Home/tumis kangkung.png" class="img-fluid" alt="">
                  <div class="text-center">Resep Cah Kangkung</div>
                </div>
                <div class="col-12 mb-5">
                  <img src="gambar/Home/nasi goreng.png" class="img-fluid" alt="">
                  <div class="text-center">Resep Nasi Goreng</div>
                </div>
              </div>
              <div class="col-1"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center m-4">
      <h2 class="fw-bold">CEK RESEP MENU LAINNYA</h2>
    </div>
    
    <div class="container-fluid text-center">
      <div class="row mb-4">
        <div class="col-10 offset-1">
          <div class="row">
            <div class="col-4">
              <img src="gambar/Home/rendang.png" class="img-fluid" alt="">
              <p>RESEP RENDANG</p>
            </div>
            <div class="col-4">
              <a href="{{ route('resepikanbakar') }}"> <!-- Ganti 'resep.ikan-bakar' dengan nama route yang sesuai -->
              <img src="gambar/Home/ikan bakar.png" class="img-fluid" alt="">
              <p>RESEP IKAN BAKAR</p>
              </a>
            </div>
            <div class="col-4">
              <img src="gambar/Home/ayam goreng.png" class="img-fluid" alt="">
              <p>RESEP AYAM GORENG</p>
            </div>
          </div>
          <div class="col-1"></div>
        </div>
      </div> 
      <div class="row">
        <div class="col-10 offset-1">
          <div class="row">
            <div class="col-4">
              <img src="gambar/Home/sop.png" class="img-fluid" alt="">
              <p>RESEP SOP</p>
            </div>
            <div class="col-4">
              <img src="gambar/Home/bakso.png" class="img-fluid" alt="">
              <p>RESEP BAKSO</p>
            </div>
            <div class="col-4">
              <img src="gambar/Home/roti goreng.png" class="img-fluid" alt="">
              <p>RESEP ROTI GORENG</p>
            </div>
          </div>
        </div>
        <div class="col-1"></div>
      </div> 
    </div>
@endsection
