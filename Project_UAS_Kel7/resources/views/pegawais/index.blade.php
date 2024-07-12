@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Daftar Pegawai</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Pegawai</h3>
                </div>
                <div class="card-body">
                    <a href="{{ route('pegawais.create') }}" class="btn btn-primary mb-3">Tambah Pegawai</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Gender</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Telpon</th>
                                <th>Alamat</th>
                                <th>Divisi ID</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_pegawai as $pegawai)
                                <tr>
                                    <td>{{ $pegawai->nip }}</td>
                                    <td>{{ $pegawai->nama }}</td>
                                    <td>{{ $pegawai->gender }}</td>
                                    <td>{{ $pegawai->tmp_lahir }}</td>
                                    <td>{{ $pegawai->tgl_lahir }}</td>
                                    <td>{{ $pegawai->telpon }}</td>
                                    <td>{{ $pegawai->alamat }}</td>
                                    <td>{{ $pegawai->divisi_id }}</td>
                                    <td>
                                        <a href="{{ route('pegawais.show', $pegawai->id) }}" class="btn btn-info btn-sm">Read</a>
                                        <a href="{{ route('pegawais.edit', $pegawai->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('pegawais.destroy', $pegawai->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    Footer
                </div>
            </div>
        </section>
    </div>
</div>

@include('admin.footer')
