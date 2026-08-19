<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Siswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-warning">
            <h3 class="mb-0">Edit Data Siswa</h3>
        </div>

        <div class="card-body">

            <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama Siswa</label>

                    <input type="text"
                           name="nama"
                           class="form-control"
                           value="{{ $siswa->nama }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kelas</label>

                    <input type="text"
                           name="kelas"
                           class="form-control"
                           value="{{ $siswa->kelas }}"
                           required>
                </div>

                <button type="submit" class="btn btn-primary">
                    Update
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