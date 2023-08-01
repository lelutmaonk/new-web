@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Formulir {{ $title }}</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('vendor-teknik.store') }}" enctype="multipart/form-data">
                        @csrf

                    <div class="row">
                        <div class="col-lg-12">

                            <div class="form-group">
                                <label>Nama Vendor Teknik</label>
                                <input type="text" class="form-control @error('vendor_teknik_nama') is-invalid @enderror" name="vendor_teknik_nama">
                                @error('vendor_teknik_nama')
                                <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                              </div>

                        </div>
                    </div>
                    
                    <a href="{{ route('vendor-teknik.index') }}" class="btn btn-danger">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    

                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection