@extends('layouts.main')

@section('content')
    
    <form action="{{ route('pelayanan.store') }}" method="POST">
        @csrf

        <div class="form-group">
        <label>Jadwal</label>
        <input type="text" class="form-control @error('nomor_agenda') is-invalid @enderror" name="nomor_agenda" value="{{ old('nomor_agenda') }}">
          @error('nomor_agenda')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror
      </div>
        <div class="form-group">
        <label>Jadwal</label>
        <input type="text" class="form-control @error('capel_nama') is-invalid @enderror" name="capel_nama" value="{{ old('capel_nama') }}">
          @error('capel_nama')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror
      </div>


        <button type="submit">Test</button>

    </form>

@endsection