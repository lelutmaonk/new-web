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
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Tanggal Permohonan</label>
                                <input type="date" class="form-control" name="tanggal_permohonan">
                            </div>
                            <div class="form-group">
                                <label>Nomor Agenda</label>
                                <input type="text" class="form-control" placeholder="" name="nomor_agenda">
                            </div>
                            <div class="form-group">
                                <label>Nama Capel</label>
                                <input type="text" class="form-control" placeholder="" name="capel_nama">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" placeholder="" name="alamat">
                            </div>
                            <div class="form-group">
                                <label>Telepon</label>
                                <input type="number" class="form-control" placeholder="" name="telepon">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Daya Permohonan</label>
                                <input type="text" class="form-control" placeholder="" name="daya_permohonan">
                            </div>
                            <div class="form-group">
                                <label>Tarif</label>
                                <input type="text" class="form-control" placeholder="" name="tarif">
                            </div>
                            <div class="form-group">
                                <label>Berkas Permohonan</label>
                                <input type="file" class="form-control" name="file_berkas_permohonan" accept="application/pdf">
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" class="form-control" placeholder="" name="keterangan">
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