@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Pegawai</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Pegawai</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('pegawais.update', $pegawai->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nip">NIP:</label>
                            <input type="text" name="nip" class="form-control" value="{{ $pegawai->nip }}" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" name="nama" class="form-control" value="{{ $pegawai->nama }}" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender:</label>
                            <select name="gender" class="form-control" required>
                                <option value="L" {{ $pegawai->gender == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="P" {{ $pegawai->gender == 'P' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tmp_lahir">Tempat Lahir:</label>
                            <input type="text" name="tmp_lahir" class="form-control" value="{{ $pegawai->tmp_lahir }}" required>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir:</label>
                            <input type="date" name="tgl_lahir" class="form-control" value="{{ $pegawai->tgl_lahir }}" required>
                        </div>
                        <div class="form-group">
                            <label for="telpon">Telpon:</label>
                            <input type="text" name="telpon" class="form-control" value="{{ $pegawai->telpon }}" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <textarea name="alamat" class="form-control" required>{{ $pegawai->alamat }}</textarea>
                        </div>
                        <div class="form-group">
                        <label for="divisi_id">Divisi ID:</label>
    <select name="divisi_id" class="form-control" required>
        <option value="" disabled {{ is_null($pegawai->divisi_id) ? 'selected' : '' }}>Pilih Divisi ID</option>
        @for ($i = 1; $i <= 6; $i++)
            <option value="{{ $i }}" {{ $pegawai->divisi_id == $i ? 'selected' : '' }}>{{ $i }}</option>
        @endfor
    </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="card-footer">
                    Footer
                </div>
            </div>
        </section>
    </div>
</div>

@include('admin.footer')
