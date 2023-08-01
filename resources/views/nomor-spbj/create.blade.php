@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Formulir {{ $title }}</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('nomor-spbj.store') }}" enctype="multipart/form-data">
                        @csrf

                    <div class="row">
                        <div class="col-lg-12">

                            <div class="form-group">
                                <label>Nomor SPBJ</label>
                                <input type="text" class="form-control @error('nomor') is-invalid @enderror" name="nomor">
                                @error('nomor')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Waktu Awal</label>
                                <input type="date" class="form-control @error('jangka_waktu_awal') is-invalid @enderror" name="jangka_waktu_awal">
                                @error('jangka_waktu_awal')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Waktu Akhir</label>
                                <input type="date" class="form-control @error('jangka_waktu_akhir') is-invalid @enderror" name="jangka_waktu_akhir">
                                @error('jangka_waktu_akhir')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Nilai Kontrak</label>
                                <input type="text" class="form-control @error('nilai_kontrak') is-invalid @enderror" name="nilai_kontrak">
                                @error('nilai_kontrak')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>

                        </div>
                    </div>
                    
                    <a href="{{ route('nomor-spbj.index') }}" class="btn btn-danger">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    

                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection