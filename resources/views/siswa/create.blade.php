<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Siswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Tambah Data Siswa</h3>
        </div>

        <div class="card-body">

            <form action="{{ route('siswa.store') }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama Siswa</label>

                    <input type="text"
                           name="nama"
                           class="form-control"
                           placeholder="Masukkan nama siswa"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kelas</label>

                    <input type="text"
                           name="kelas"
                           class="form-control"
                           placeholder="Contoh: XII PPLG 1"
                           required>
                </div>

                <button type="submit" class="btn btn-success">
                    Simpan
                </button>

                <a href="{{ route('siswa.index') }}" class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>

    </div>

</div>

</body>
</html>