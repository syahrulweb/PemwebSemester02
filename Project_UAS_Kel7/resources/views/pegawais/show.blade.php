@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail Pegawai</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Informasi Pegawai</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nip">NIP:</label>
                                <p>{{ $pegawai->nip }}</p>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <p>{{ $pegawai->nama }}</p>
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender:</label>
                                <p>{{ $pegawai->gender }}</p>
                            </div>
                            <div class="form-group">
                                <label for="tmp_lahir">Tempat Lahir:</label>
                                <p>{{ $pegawai->tmp_lahir }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir:</label>
                                <p>{{ $pegawai->tgl_lahir }}</p>
                            </div>
                            <div class="form-group">
                                <label for="telpon">Telpon:</label>
                                <p>{{ $pegawai->telpon }}</p>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat:</label>
                                <p>{{ $pegawai->alamat }}</p>
                            </div>
                            <div class="form-group">
                                <label for="divisi_id">Divisi ID:</label>
                                <p>{{ $pegawai->divisi_id }}</p>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('pegawais.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
                <div class="card-footer">
                    Footer
                </div>
            </div>
        </section>
    </div>
</div>

@include('admin.footer')
