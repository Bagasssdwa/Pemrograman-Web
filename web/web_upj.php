<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
    <title>Pendaftaran - PMB UPJ</title>
</head>
<body>
    <div class="container"> 
        <div class ="row">
            <div class ="col-sm-3">
                
                        <a class ="navbar-brand" href="#">
                            <img class ="img-fluid" src="https://upj.ac.id/upload/module/logo/logo2.png" alt="">
                        </a>
                
              </div>
            <div class ="col-sm-3 mt-4">
                <h6 class ="text-primary fw-bold">INTEGRITY</h6>
                <h6 class ="text-success fw-bold">PROFESSIONALISM</h6>
                <h6 class ="text-danger fw-bold">ENTERPRENEUR</h6>
            </div>
            <div class ="col-sm-3 p-4">
                <h6>Language</h6>
                <i class =" flag flag-en ms-2"></i>
                <i class =" flag flag-id ms-2"></i>
                <img style ="max-width: 70%; float: left; margin: 5px;" src= "https://upj.ac.id/web/templates/assets/images/en-flag.gif">
                <img style ="max-width: 70%; float: left; margin: 5px;" src="https://upj.ac.id/web/templates/assets/images/id-flag.gif">
            </div>
            <div class="col-sm-3 p-4">
              <div class="form-floating mt-3 mb-3">
                    <input class="form-control" type="text" id="search" name="search" placeholder="Enter Search">
                      <label for="search">Search</label>
            </div>
         </div>
    </div>    
    </div>

       <!-- Navbar -->   
       <nav class="navbar navbar-expand-sm bg-primary">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">BERANDA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">JALUR SELEKSI</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    INFORMASI
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="">Program Studi</a></li>
                    <li><a class="dropdown-item" href="">Pengumuman</a></li>
                    <li><a class="dropdown-item" href="">Informasi Pendaftaran</a></li>
              </ul>
            </li>
        </div>
      </nav>
      
 <!-- Carousel -->
 <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://upj.ac.id/upload/module/bannerslider2/highlight_bg_156.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://upj.ac.id/upload/module/bannerslider2/highlight_bg_162.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://upj.ac.id/upload/module/bannerslider2/highlight_bg_152.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


      <div class="container mt-3">

            <form action="/action_page.php">
                <label for="sel" class="form-label">Jenjang</label>
                    <select class="form-select" id="sel" name="sellist">
                        <option>--Pilih Salah Satu--</option>
                        <option>S1 - Strata 1</option>
                    </select>
                    <br>
                
            </form>
        </div>

        <div class="container mt-3">

            <form action="/action_page.php">
                <label for="sel" class="form-label">Program Studi</label>
                    <select class="form-select" id="sel" name="sellist">
                        <option>--Pilih Salah Satu--</option>
                        <option>S1 - Desain Produk</option>
                        <option>S1 - Manajemen</option>
                        <option>S1 - Akuntansi</option>
                        <option>S1 - Psikolog</option>
                        <option>S1 - Informatika</option>
                    </select>
                    <br>
                
            </form>
        </div>

        <div class="container mt-3">

                <form action="/action_page.php">
                    <label for="sel" class="form-label">Sistem Kuliah</label>
                        <select class="form-select" id="sel" name="sellist">
                            <option>--Pilih Salah Satu--</option>
                            <option>Reguler</option>
                            <option>Internasional Class</option>
                            <option>Blended Learning</option>
                        </select>
                        <br>
                    
                </form>
        </div>

      <div class="p-10 bg-secondary">
        <div class="container">
            <div class="row mt-0">
                <div class="col-md-12 rounded bg-white p-5 mt-5">

                <form method="post" action="konfirmasipmb.php">            
                    <h5 class="mt-5 bg-primary p-2 text-white">Jalur Pendaftaran</h5>
                    <div class="form-group mt-5">
                        <select class="form-select" name="jalur_pendaftaran" required>
                            <option>PMB - Reguler Rapor</option>
                            <option>PMB - Reguler Peringkat Kelas</option>
                            <option>PMB - Reguler Ujian Saringan Masuk</option>
                        </select>
                    </div>
                    <h5 class="mt-5 bg-primary p-2 text-white">Identitas Diri</h5>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="first">Nama Lengkap</label>
                            <span class="text-danger">*</span>
                            <input type="text" class="form-control form-control-sm" placeholder="" id="first" name="nama" required>
                            </div>
                        </div>

                        <div class="col-md-6">   
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <span class="text-danger">*</span>                               
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jk" id="jk" value="Laki-laki" required> Laki-laki
                                    </label>
                                    
                                    <label class="ms-1">
                                        <input type="radio" name="jk" id="jk" value="Perempuan"> Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nohp">No. HP</label>
                                <span class="text-danger">*</span>
                                <input type="number" class="form-control form-control-sm" placeholder="" id="nohp" name="no_hp" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Alamat Email</label>
                                <span class="text-danger">*</span>
                                <input type="text" class="form-control form-control-sm" placeholder="" id="email" name="email" required>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-6">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <span class="text-danger">*</span>
                            <div class="input-group">
                                <div class="input-group-text"><i class="fas fa-calendar"></i></div>
                                <input type="date" class="form-control form-control-sm" placeholder="" id="tgl_lahir" name="tgl_lahir" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <span class="text-danger">*</span>
                                <input type="text" class="form-control form-control-sm" placeholder="" id="tempat_lahir" name="tempat_lahir" required>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="kewarganegaraan">Kewarganegaraan</label>
                            <span class="text-danger">*</span>
                                <input type="text" class="form-control form-control-sm" placeholder="" id="kewarganegaraan" name="kewarganegaraan" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nik">NIK/No. KTP</label>
                                <span class="text-danger">*</span>
                                <input type="number" class="form-control form-control-sm" placeholder="" id="nik" name="nik" required>
                            </div>
                        </div>
                    </div>

                    
                    <h5 class="mt-5 bg-primary p-2 text-white">Asal Sekolah</h5>
                  
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="provinsi">Tahun Lulus</label>
                            <span class="text-danger">*</span>
                                <input type="number" class="form-control form-control-sm" placeholder="" id="provinsi" name="tahun_lulus" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="npsn">NPSN</label>
                                <span class="text-danger">*</span>
                                <input type="number" class="form-control form-control-sm" placeholder="" id="npsn" name="npsn" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="jurusan">Jurusan Sekolah</label>
                            <span class="text-danger">*</span>
                                <input type="text" class="form-control form-control-sm" placeholder="" id="jurusan" name="jurusan" required>
                            </div>
                        </div>
                    </div>

                    <h5 class="mt-5 bg-primary p-2 text-white">Pilih Program Studi yang Diinginkan</h5>
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="form-group">
                                <select class="form-select" name="prodi" required>
                                    <option selected="true" disabled="disabled">Pilih Program Studi</option>
                                    <option>Manajemen</option>
                                    <option>Psikologi</option>
                                    <option>Akuntansi</option>
                                    <option>Ilmu Komunikasi</option>
                                    <option>Informatika</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success mt-5">Submit</button>
                </form>


            </div>
        </div>
    </div>
</div>
 
<!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="https://web.facebook.com/universitas.pembangunan.jaya?_rdc=1&_rdrt">
        <i class="fab fa-facebook"></i>
      </a>
      <a href="" class="https://twitter.com/upj_bintaro">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="https://www.youtube.com/user/UPJBIntaro">
        <i class="fab fa-youtube"></i>
      </a>
      <a href="" class="https://www.instagram.com/upj_bintaro/">
        <i class="fab fa-instagram"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>LOGO
          </h6>
         <img src="https://upj.ac.id/web/templates/assets/images/logo-footer.png">
        </div>

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            LINK TO JAYA GROUP
          </h6>
          <p>
            <a href="#!" class="text-reset">Pembangunan Jaya</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Yayasan Pendidikan Jaya</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Yayasan Marga Jaya</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Yayasan Pembangunan Jaya Raya</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact Us</h6>
          <p><i class="fas fa-home me-3"></i> Jl. Cendrawasih Raya Blok B7/P Bintaro Jaya, Sawah Baru, Ciputat, Tangerang Selatan 15413</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            jcal@upj.ac.id
          </p>
          <p><i class="fas fa-phone me-3"></i> (021) 745 5555 - (021) 2986 1525</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://www.instagram.com/bagasssdwa/">Bagas Sadewa</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</body>
<!-- SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
</html>

</body>     
</html>