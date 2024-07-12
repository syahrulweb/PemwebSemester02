@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Daftar Pengajuan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Pengajuan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Pengajuan</h3>
                    <div class="card-tools">
                        <a href="{{ route('pengajuan.create') }}" class="btn btn-primary">Buat Pengajuan Baru</a>
                    </div>
                </div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <p>{{ $message }}</p>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                
                                <th>Tanggal Awal</th>
                                <th>Tanggal Akhir</th>
                                <th>Jumlah</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                                <th>NIP</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_pengajuan as $pengajuan)
                                <tr>
                                   
                                    <td>{{ $pengajuan->tanggal_awal }}</td>
                                    <td>{{ $pengajuan->tanggal_akhir }}</td>
                                    <td>{{ $pengajuan->jumlah }}</td>
                                    <td>{{ $pengajuan->ket }}</td>
                                    <td>{{ $pengajuan->status }}</td>
                                    <td>{{ $pengajuan->nip }}</td>
                                    <td>
                                        <a href="{{ route('pengajuan.edit', $pengajuan->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('pengajuan.destroy', $pengajuan->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                        <form action="{{ route('pengajuan.terima', $pengajuan->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-success">Terima</button>
                                        </form>
                                        <form action="{{ route('pengajuan.tolak', $pengajuan->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-danger">Tolak</button>
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
