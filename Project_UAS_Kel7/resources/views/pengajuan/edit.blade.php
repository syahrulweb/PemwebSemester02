@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Pengajuan</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Edit Pengajuan</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('pengajuan.update', $pengajuan->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="tanggal_awal">Tanggal Awal</label>
                            <input type="date" class="form-control" name="tanggal_awal" id="tanggal_awal" value="{{ $pengajuan->tanggal_awal }}" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_akhir">Tanggal Akhir</label>
                            <input type="date" class="form-control" name="tanggal_akhir" id="tanggal_akhir" value="{{ $pengajuan->tanggal_akhir }}" required>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="number" class="form-control" name="jumlah" id="jumlah" value="{{ $pengajuan->jumlah }}" required>
                        </div>
                        <div class="form-group">
                            <label for="ket">Keterangan</label>
                            <textarea class="form-control" name="ket" id="ket" required>{{ $pengajuan->ket }}</textarea>
                        </div>
                        <div class="form-group">
        <label for="status">Status</label>
        <select class="form-control" name="status" id="status" required>
            <option value="pending" {{ $pengajuan->status == 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="terima" {{ $pengajuan->status == 'terima' ? 'selected' : '' }}>Terima</option>
            <option value="tolak" {{ $pengajuan->status == 'tolak' ? 'selected' : '' }}>Tolak</option>
        </select>
    </div>
    <!-- Other fields -->
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('pengajuan.index') }}" class="btn btn-secondary">Kembali</a>
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" class="form-control" name="nip" id="nip" value="{{ $pengajuan->nip }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('pengajuan.index') }}" class="btn btn-secondary">Kembali</a>
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
