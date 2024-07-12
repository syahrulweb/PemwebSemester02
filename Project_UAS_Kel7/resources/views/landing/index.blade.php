<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Pengajuan Cuti - Perusahaan IT</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('landing/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-header fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Perusahaan IT</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="{{ route('pegawais.index') }}">Pegawai</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('divisi.index') }}">Divisi</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="{{ route('jatah.index') }}">Jatah Cuti</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('pengajuan.index') }}">Pengajuan Cuti</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li> -->
                        <li class="nav-item">
                            <a href="{{ route('logout') }}" class="nav-link text-dark">
                                <i class="nav-icon fas fa-th"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Selamat Datang di Sistem Pengajuan Cuti</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Kami menyediakan layanan untuk pengajuan cuti bagi karyawan perusahaan IT. Silakan mengisi formulir pengajuan cuti di bawah ini!</p>
                        <a class="btn bg-light    btn-xl" href="#pengajuan-cuti">Ajukan Cuti</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-secondary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Tentang Perusahaan IT</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Kami adalah perusahaan teknologi yang berfokus pada pengembangan solusi IT terkini. Bergabunglah dengan kami untuk menciptakan masa depan digital yang lebih baik!</p>
                        <a class="btn btn-light btn-xl" href="#services">Layanan Kami</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Layanan Kami</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Solusi Cloud</h3>
                            <p class="text-muted mb-0">Kami menyediakan solusi cloud terbaru untuk mendukung transformasi digital bisnis Anda.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Pengembangan Software</h3>
                            <p class="text-muted mb-0">Tim kami siap membantu dalam pengembangan perangkat lunak sesuai kebutuhan perusahaan Anda.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-shield fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Keamanan Siber</h3>
                            <p class="text-muted mb-0">Layanan keamanan siber yang dapat diandalkan untuk melindungi data dan infrastruktur IT perusahaan Anda.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-people fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Konsultasi IT</h3>
                            <p class="text-muted mb-0">Konsultasi IT untuk strategi dan implementasi teknologi yang efektif dalam mencapai tujuan bisnis Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Kategori</div>
                                <div class="project-name">Nama Proyek</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/2.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Kategori</div>
                                <div class="project-name">Nama Proyek</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/3.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Kategori</div>
                                <div class="project-name">Nama Proyek</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/4.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/4.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Kategori</div>
                                <
                                <div class="project-name">Nama Proyek</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/5.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/5.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Kategori</div>
                                <div class="project-name">Nama Proyek</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/6.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/6.jpg" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Kategori</div>
                                <div class="project-name">Nama Proyek</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to action-->
        <section class="page-section bg-dark text-white" id="pengajuan-cuti">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4">Ajukan Cuti Sekarang!</h2>
                <form action="{{ route('pengajuan.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="tanggal_awal">Tanggal Awal</label>
        <input type="date" class="form-control" name="tanggal_awal" id="tanggal_awal" required>
    </div>
    <div class="form-group">
        <label for="tanggal_akhir">Tanggal Akhir</label>
        <input type="date" class="form-control" name="tanggal_akhir" id="tanggal_akhir" required>
    </div>
    <div class="form-group">
        <label for="jumlah">Jumlah</label>
        <input type="number" class="form-control" name="jumlah" id="jumlah" required>
    </div>
    <div class="form-group">
        <label for="ket">Keterangan</label>
        <textarea class="form-control" name="ket" id="ket" rows="3" required></textarea>
    </div>
    <div class="form-group mb-4">
        <label for="nip" class="col-md-6">NIP</label>
        <input type="text" class="form-control" name="nip" id="nip" required>
    </div>
    <div class="form-group mb-4 ">
        <button type="submit" class="btn bg-info">Simpan</button>
        <a href="{{ route('pengajuan.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</form>

            </div>

        </section>
        <section>
        <section class="page-section bg-dark text-white" id="pengajuan">
        
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Hubungi Kami</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Kami siap membantu Anda. Silakan hubungi kami untuk informasi lebih lanjut tentang layanan kami.</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Nama lengkap Anda..." data-sb-validations="required" />
                                <label for="name">Nama lengkap</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nama harus diisi.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="nama@example.com" data-sb-validations="required,email" />
                                <label for="email">Alamat email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Alamat email harus diisi.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Format email tidak valid.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Nomor telepon</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Nomor telepon harus diisi.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Masukkan pesan Anda di sini..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Pesan</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Pesan harus diisi.</div>
                            </div>
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Pengiriman formulir berhasil!</div>
                                    Untuk mengaktifkan formulir ini, silakan mendaftar di
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error saat mengirim pesan!</div></div>
                            <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Kirim</button></div>
                        </form>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>+1 (555) 123-4567</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Hak Cipta &copy; 2024 - Nama Perusahaan</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('landing/js/scripts.js')}}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
