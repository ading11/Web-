<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<span class="text-center">
                    <h3 class="fw-bold">Halaman Profil</h3>
                </span>
                
                <div class="text-center">
                    Selamat Datang di halaman Tambah resep, {{ Auth::user()->name }}
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
</body>
</html>