@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Formulir Tambah Pelayanan</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('pelayanan.store') }}" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Tanggal Permohonan</label>
                                <input type="date" class="form-control @error('tanggal_permohonan') is-invalid @enderror" name="tanggal_permohonan" value="{{ old('tanggal_permohonan') }}">
                                @error('tanggal_permohonan')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nomor Agenda</label>
                                <input type="text" class="form-control @error('nomor_agenda') is-invalid @enderror" placeholder="" name="nomor_agenda" value="{{ old('nomor_agenda') }}">
                                @error('nomor_agenda')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nama Capel</label>
                                <input type="text" class="form-control @error('capel_nama') is-invalid @enderror" placeholder="" name="capel_nama" value="{{ old('capel_nama') }}">
                                @error('capel_nama')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" placeholder="" name="alamat" value="{{ old('alamat') }}">
                                @error('alamat')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Telepon</label>
                                <input type="number" class="form-control @error('telepon') is-invalid @enderror" placeholder="" name="telepon" value="{{ old('telepon') }}">
                                @error('telepon')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Daya Permohonan</label>
                                <input type="text" class="form-control @error('daya_permohonan') is-invalid @enderror" placeholder="" name="daya_permohonan" value="{{ old('daya_permohonan') }}">
                                @error('daya_permohonan')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tarif</label>
                                <input type="text" class="form-control @error('tarif') is-invalid @enderror" placeholder="" name="tarif" value="{{ old('tarif') }}">
                                @error('tarif')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Berkas Permohonan</label>
                                <input type="file" class="form-control @error('file_berkas_permohonan') is-invalid @enderror" name="file_berkas_permohonan" accept="application/pdf">
                                @error('file_berkas_permohonan')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" class="form-control @error('keterangan') is-invalid @enderror" placeholder="" name="keterangan" value="{{ old('keterangan') }}">
                                @error('keterangan')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <a href="{{ route('pelayanan.index') }}" class="btn btn-danger">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    

                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection