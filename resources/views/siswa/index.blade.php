<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Siswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Data Siswa</h3>
        </div>

        <div class="card-body">

            <a href="{{ route('siswa.create') }}" class="btn btn-success mb-3">
                + Tambah Siswa
            </a>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive">

                <table class="table table-bordered table-striped">

                    <thead class="table-dark">
                        <tr>
                            <th width="10%">No</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th width="25%">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($siswas as $siswa)

                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $siswa->nama }}</td>

                                <td>{{ $siswa->kelas }}</td>

                                <td>

                                    <a href="{{ route('siswa.edit', $siswa->id) }}"
                                       class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <form action="{{ route('siswa.destroy', $siswa->id) }}"
                                          method="POST"
                                          class="d-inline">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin ingin menghapus data ini?')">
                                            Hapus
                                        </button>

                                    </form>

                                </td>
                            </tr>

                        @empty

                            <tr>
                                <td colspan="4" class="text-center">
                                    Belum ada data siswa.
                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

</body>
</html>          