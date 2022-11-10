<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Read Data</title>
</head>
<body>
    <div class="container">
        <h3 class="mt-5 text-center" >Data Pegawai</h3>

        <a href="/create" class="btn btn-outline-primary"> + Tambah Pegawai Baru</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-info" role="alert">
                {{ $message }}
            </div>
        @endif

    <br />

        <table class="table">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Opsi</th>
        </tr>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->name }}</td>
                <td>{{ $p->alamat }}</td>
                <td>{{ $p->email }}</td>
                <td>
                    <a href="{{route('pegawai.edit',$p->id)}}" class="btn btn-outline-warning">Edit</a>
                    <a href="{{route('pegawai.delete',$p->id)}}" onsubmit="return confirm('Apakah Anda Yakin ?');" class="btn btn-outline-danger">Hapus</a>
                    
                    
                </td>
            </tr>
        @endforeach
    </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>