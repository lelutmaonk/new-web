@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            
            <form method="POST" action="{{ route('pelayanan.update', ['pelayanan' => $data->pelayanan_id]) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
            
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Formulir {{ $title }}</h6>
                </div>
                <div class="card-body">
            
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Tanggal Permohonan</label>
                                <input type="date" class="form-control @error('tanggal_permohonan') is-invalid @enderror" name="tanggal_permohonan" value="{{ old('tanggal_permohonan', $data->tanggal_permohonan) }}">
                                @error('tanggal_permohonan')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nomor Agenda</label>
                                <input type="text" class="form-control @error('nomor_agenda') is-invalid @enderror" placeholder="" name="nomor_agenda" value="{{ old('nomor_agenda', $data->nomor_agenda) }}">
                                @error('nomor_agenda')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nama Capel</label>
                                <input type="text" class="form-control @error('capel_nama') is-invalid @enderror" placeholder="" name="capel_nama" value="{{ old('capel_nama', $data->capel_nama) }}">
                                @error('capel_nama')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" placeholder="" name="alamat" value="{{ old('alamat', $data->alamat) }}">
                                @error('alamat')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Telepon</label>
                                <input type="number" class="form-control @error('telepon') is-invalid @enderror" placeholder="" name="telepon" value="{{ old('telepon', $data->telepon) }}">
                                @error('telepon')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Daya Permohonan</label>
                                <input type="text" class="form-control @error('daya_permohonan') is-invalid @enderror" placeholder="" name="daya_permohonan" value="{{ old('daya_permohonan', $data->daya_permohonan) }}">
                                @error('daya_permohonan')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tarif</label>
                                <input type="text" class="form-control @error('tarif') is-invalid @enderror" placeholder="" name="tarif" value="{{ old('tarif', $data->tarif) }}">
                                @error('tarif')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Berkas Permohonan</label>
                                <input type="hidden" class="form-control" name="old_file_berkas_permohonan" value="{{ $data->file_berkas_permohonan }}">
                                <input type="file" class="form-control @error('file_berkas_permohonan') is-invalid @enderror" name="file_berkas_permohonan" accept="application/pdf">
                                @error('file_berkas_permohonan')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" class="form-control @error('keterangan') is-invalid @enderror" placeholder="" name="keterangan" value="{{ old('keterangan', $data->keterangan) }}">
                                @error('keterangan')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Formulir {{ $title }} Tambahan</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Tanggal Pembayaran</label>
                                <input type="date" class="form-control @error('tanggal_pembayaran') is-invalid @enderror" name="tanggal_pembayaran" value="{{ old('tanggal_pembayaran', $data->tanggal_pembayaran) }}">
                                @error('tanggal_pembayaran')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Cluster</label>
                                <input type="text" class="form-control @error('cluster') is-invalid @enderror" placeholder="" name="cluster" value="{{ old('cluster', $data->cluster) }}">
                                @error('cluster')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tanggal Permintaan Teknik</label>
                                <input type="date" class="form-control @error('tanggal_permintaan_teknik') is-invalid @enderror" name="tanggal_permintaan_teknik" value="{{ old('tanggal_permintaan_teknik', $data->tanggal_permintaan_teknik) }}">
                                @error('tanggal_permintaan_teknik')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tanggal Peremajaan</label>
                                <input type="date" class="form-control @error('tanggal_peremajaan') is-invalid @enderror" name="tanggal_peremajaan" value="{{ old('tanggal_peremajaan', $data->tanggal_peremajaan) }}">
                                @error('tanggal_peremajaan')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Berkas Clusterisasi</label>
                                <input type="hidden" class="form-control" name="old_file_surat_clusterisasi" value="{{ $data->file_surat_clusterisasi }}">
                                <input type="file" class="form-control @error('file_surat_clusterisasi') is-invalid @enderror" name="file_surat_clusterisasi" accept="application/pdf">
                                @error('file_surat_clusterisasi')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Berkas Surat Izin Tiang</label>
                                <input type="hidden" class="form-control" name="old_file_surat_izin_tiang" value="{{ $data->file_surat_izin_tiang }}">
                                <input type="file" class="form-control @error('file_surat_izin_tiang') is-invalid @enderror" name="file_surat_izin_tiang" accept="application/pdf">
                                @error('file_surat_izin_tiang')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Berkas SPH</label>
                                <input type="hidden" class="form-control" name="old_file_sph" value="{{ $data->file_sph }}">
                                <input type="file" class="form-control @error('file_sph') is-invalid @enderror" name="file_sph" accept="application/pdf">
                                @error('file_sph')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Berkas SIP / TUL 1-03</label>
                                <input type="hidden" class="form-control" name="old_file_berkas_sip" value="{{ $data->file_berkas_sip }}">
                                <input type="file" class="form-control @error('file_berkas_sip') is-invalid @enderror" name="file_berkas_sip" accept="application/pdf">
                                @error('file_berkas_sip')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Berkas PK TUL 1-09</label>
                                <input type="hidden" class="form-control" name="old_file_berkas_pk" value="{{ $data->file_berkas_pk }}">
                                <input type="file" class="form-control @error('file_berkas_pk') is-invalid @enderror" name="file_berkas_pk" accept="application/pdf">
                                @error('file_berkas_pk')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Berkas BA TUL 1-10</label>
                                <input type="hidden" class="form-control" name="old_file_berkas_ba" value="{{ $data->file_berkas_ba }}">
                                <input type="file" class="form-control @error('file_berkas_ba') is-invalid @enderror" name="file_berkas_ba" accept="application/pdf">
                                @error('file_berkas_ba')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Berkas SPBJTL</label>
                                <input type="hidden" class="form-control" name="old_file_berkas_spjbtl" value="{{ $data->file_berkas_spjbtl }}">
                                <input type="file" class="form-control @error('file_berkas_spjbtl') is-invalid @enderror" name="file_berkas_spjbtl" accept="application/pdf">
                                @error('file_berkas_spjbtl')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Berkas Peremajaan</label>
                                <input type="hidden" class="form-control" name="old_file_berkas_peremajaan" value="{{ $data->file_berkas_peremajaan }}">
                                <input type="file" class="form-control @error('file_berkas_peremajaan') is-invalid @enderror" name="file_berkas_peremajaan" accept="application/pdf">
                                @error('file_berkas_peremajaan')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <a href="{{ route('pelayanan.index') }}" class="btn btn-danger">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    
                </div>
            </div>

        </form>

        </div>
    </div>
@endsection