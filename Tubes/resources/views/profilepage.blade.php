@extends('layouts.layout')

@section('content')
<div class="container">
    <span class=" text-center">
        <h3 class="fw-bold">Halaman Profil</h3>
    </span>
    
    <div class="row">
        <div class="col-3 my-1 p-2">
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a href="">Info Profil</a>
                    </li>
                    <li class="list-group-item">Ubah password</li>
                    <li class="list-group-item">
                        <a href="createresep">Tambah Resep</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-8 bg-body-tertiary py-1">
            <div class="text-center">
                Selamat Datang di halaman profil, {{ Auth::user()->name }}
            </div>
            <div class="border border-secondary my-1 p-2">
                <h4 class="fw-bold">Tentang Anda</h4>
                <form action="{{ route('profilepage.update') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        Username:
                        <br>
                        <input type="text" name="name" value="{{ $user->name }}">
                    </div>
                    <div class="my-2 form-group">
                        Email:
                        <br>
                        <input type="text" name="email" value="{{ $user->email }}">
                    </div>
                    <div class="my-2 form-group">
                        Password Saat Ini:
                        <br>
                        <input type="password" name="current_password" required>
                    </div>
                    <div class="mb-2 form-group">
                        Password Baru:
                        <br>
                        <input type="password" name="new_password" required>
                    </div>   
                    <div class="mb-2 form-group">
                        Konfirmasi Password Baru:
                        <br>
                        <input type="password" name="new_password_confirmation">
                    </div>    
                    <button type="submit" class="btn btn-secondary">Update Profil</button>             
                </form>
            </div>
            
            <div class="border border-secondary my-2 p-2">
                <h4 class="fw-bold">Tambah Resep Anda</h4>
            <form action="{{ route('resep.store') }}" method="POST">
                @csrf
                <div class="form-group">
                Nama Resep
                <br>
                <input type="text" name="judul">
            </div>
            <div class="form-group">
                Deskripsi
                <br>
                <textarea name="" id="" cols="80" rows="10" name="dekripsi"></textarea>
            </div>
            <div class="form-group">
                Bahan - Bahan
                <br>
                <textarea name="" id="" cols="80" rows="10" name="bahan"></textarea>
            </div>
            <div class="form-group">
                Cara Pembuatan
                <br>
                <textarea name="" id="" cols="80" rows="10" name="langkah"></textarea>
            </div>
            <button type="submit" class="btn btn-secondary">Tambah Resep</button>
            </form>
            
            </div>
        </div>
    </div>
</div>

@endsection