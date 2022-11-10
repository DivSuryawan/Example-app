<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body{
      font-family: Verdana;
    }
    .mb-3 input{
      background-color: rgb(229, 233, 236);
    }
    .card{
      width: 80rem;
     
    }
   
  </style>
</head>
<body>
<div class="container ">
    <div class="card mt-5 border-success">
      <div class="card-body mt-3">
        <h5 class="card-title text-center">Edit Data</h5>
      <form action="{{ route ('pegawai.update',$pegawai->id)}}" method="POST">
        @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" value="{{ $pegawai->name }}" class="form-control " name="name" id="name" aria-describedby="emailHelp" placeholder="Input name here...">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" value="{{ $pegawai->email }}" class="form-control " name="email" id="email" aria-describedby="emailHelp" placeholder="Input email here...">
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="alamat" value="{{ $pegawai->alamat }}"class="form-control" id="alamat" name="alamat" placeholder="Input alamat here...">
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-success"  type="submit" style="width: 300px;">Update  Data</button>
          
          </div>
      </form>
      </div>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>