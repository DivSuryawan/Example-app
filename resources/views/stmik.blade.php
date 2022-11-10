
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page | Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <style>
        html{
          scroll-behavior: smooth;
        }
        body{
            background-color: #232531;
            font-family: verdana;
        }
        /* navbar */
        .navbar{
            background-color: rgb(58, 182, 244);
        }
        .navbar-nav {
            margin-left: auto;
            color: white;
        }

        /* banner */
        .info{
           
            margin-top: 200px;
            color: white;  
        } 
        .paragraph{
          text-align: justify;
        }
        /*agenda  */
        .agenda-list{
            color: white;
            text-align: center;
            
        }
        .info-agenda{
            text-align: center;
            color: white;
        }
        .list{
          width: 400px;
        }
       
    </style>
</head>
  <body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark ">
  <div class="container ">
   <a class="navbar-brand" href="#">
      <img src="{{ asset('asset/img/logo.png') }}"  width="30" height="30" class="d-inline-block align-text-top">
      rusunawa
    </a>
 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav  mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Agenda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Testimoni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Hubungi Kami</a>
        </li>
        <li class="nav-item">
            <a  href="" class="btn btn-secondary" type="submit">Login</a >
        </li>
      </ul>
    </div>
  </div>
</nav>
{{-- home page --}}


     <section id="banner">
        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="info col-md-6 ">
                        <h2 class="title text-center" id="home">SISTEM INFORMASI <span style="color: #2191e7">RUSUNAWA<span> </h2>
                        <h5 class="text-center mt-3">STMIK Adhi Guna</h5>
                        <p class="paragraph fw-lighter mt-5">
                           Sekolah Tinggi ini didirikan oleh Yayasan Pendidikan dan Pembinaan Manajemen (YPPM) ADHI GUNA, berdasarkan Akta Notaris No.16 tanggal 17 Maret 1999, dan perubahan YPPM ADHI GUNA No. 02 tanggal 01 Maret 2006 Notaris ANAND UMAR ADNAN, S.H.,M.H.STMIK ADHI GUNA didirikan berdasarkan Surat Keputusan Menteri Pendidikan Nasional Nomor : 16/D/O/2001 tanggal 14 Februari 2001. STMIK ADHI GUNA melaksanakan kuliah perdana pada tanggal 17 September 2001, dengan 71 orang mahasiswa dari dua program studi yakni program studi sistem informasi dan program studi teknik informatika jenjang strata satu.
                        </p>
                    </div>
                    <div class="img-baner col-md-6 mt-5 ">
                        <img src="{{ asset('asset/img/stmikadhiguna.jpg') }}" class="mt-5" width="500" height="500">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir baner -->

    {{-- agenda --}}
    <section>
    <div class="container agenda ">
        <div class="row">
            <div class="info-agenda col-md-12 mt-5">
                 <h4 class="title" id="home">AGENDA KEGIATAN <span style="color: #2191e7">RUSUNAWA<span> </h4>
                <P>Agenda kegiatan yang ada di Rusunawa</P>
             </div>
        </div>
        <div class="agenda-list row mt-3 owl-carousel owl-theme" id="one">
            <div class="col-md-4 list">
                <img src="	https://pmb.stmikadhiguna.ac.id/daftar/asset/Sampul%20PMB%20Thn%202022.jpg" class="ml-5"  height="350">
                <p class="paragraph mt-2">
                          Informasi tentang jalur tes, jadwal tes dan juga mengenai jadwal pendaftaran ulangnya untuk bergabung serta melanjutkan pendidikan anda di Sekolah Tinggi Manajemen Informatika dan Komputer (STMIK) Adhi Guna bisa dengan lebih mudah anda temukan pada halaman resmi lainnya yang khusus diperuntukkan bagi anda yang ingin mendaftarkan diri di kampus tersebut dengan mengakses http://pmb. stmikadhiguna. ac. id.
                 </p>
            </div>
            <div class="col-md-4 list ">
                <img src="	https://pmb.stmikadhiguna.ac.id/daftar/asset/Sampul%20PMB%20Thn%202022.jpg" class="ml-5"  height="350">
                <p class="paragraph mt-2">
                   Informasi tentang jalur tes, jadwal tes dan juga mengenai jadwal pendaftaran ulangnya untuk bergabung serta melanjutkan pendidikan anda di Sekolah Tinggi Manajemen Informatika dan Komputer (STMIK) Adhi Guna bisa dengan lebih mudah anda temukan pada halaman resmi lainnya yang khusus diperuntukkan bagi anda yang ingin mendaftarkan diri di kampus tersebut dengan mengakses http://pmb. stmikadhiguna. ac. id.
                 </p>
            </div>
            <div class="col-md-4 list ">
                <img src="	https://pmb.stmikadhiguna.ac.id/daftar/asset/Sampul%20PMB%20Thn%202022.jpg" class="ml-5"  height="350">
                <p class="paragraph mt-2">
                   Informasi tentang jalur tes, jadwal tes dan juga mengenai jadwal pendaftaran ulangnya untuk bergabung serta melanjutkan pendidikan anda di Sekolah Tinggi Manajemen Informatika dan Komputer (STMIK) Adhi Guna bisa dengan lebih mudah anda temukan pada halaman resmi lainnya yang khusus diperuntukkan bagi anda yang ingin mendaftarkan diri di kampus tersebut dengan mengakses http://pmb. stmikadhiguna. ac. id.
                 </p>
            </div>
        </div>
     </div>
     </section>

    {{-- akhir agenda --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script> 
    
    <script>
        $(document).ready(function() {
            var one = $("#one");
            // var two = $("#two");
            one.owlCarousel({
                items: 3,
                loop: true,
                autoplay: true,
                animateOut: 'fadeOut',
                autoplayTimeout: 3000,
                nav: true,
                autoplayHoverPause: true,
                margin: 10,
            });
            // two.owlCarousel({
            //     items: 7,
            //     loop: true,
            //     autoplay: true,
            //     animateOut: 'fadeOut',
            //     autoplayTimeout: 3000,
            //     nav: true,
            //     autoplayHoverPause: true,
            //     margin: 10,
            // });
        });
    </script>
  </body>
</html>