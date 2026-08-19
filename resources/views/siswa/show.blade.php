<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Siswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-info text-white">
            <h3 class="mb-0">Detail Data Siswa</h3>
        </div>

        <div class="card-body">

            <div class="mb-3">
                <label class="fw-bold">ID</label>
                <p>{{ $siswa->id }}</p>
            </div>

            <div class="mb-3">
                <label class="fw-bold">Nama Siswa</label>
                <p>{{ $siswa->nama }}</p>
            </div>

            <div class="mb-3">
                <label class="fw-bold">Kelas</label>
                <p>{{ $siswa->kelas }}</p>
            </div>

            <a href="{{ route('siswa.index') }}" class="btn btn-secondary">
                Kembali
            </a>

            <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-warning">
                Edit
            </a>

        </div>

    </div>

</div>

</body>
</html>