@extends('layouts.layout')

@section('content')
    <span class="text-center">
                    <h3 class="fw-bold">Halaman Profil</h3>
                </span>
                
                <div class="text-center">
                    Selamat Datang di halaman profil, {{ Auth::user()->name }}
                </div>
    <div class="container">
        <div class="row">
            <!-- Sidebar/Nav -->
            <div class="col-md-3">
                <div class="card">
                <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="/profile" class="nav-link">Profil</a>
                        </li>
                        <li class="list-group-item">
                            <a href="/resep/create" class="nav-link">Tambah Resep</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-md-9">
                
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
            </div>
        </div>
    </div>
@endsection
