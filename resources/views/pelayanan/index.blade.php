@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Tabel {{ $title }}</h6>
                    </div>
                    <a href="{{ route('pelayanan.create') }}" class="btn btn-sm btn-outline-success">Tambah {{ $title }} </a>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                        <th>Tanggal Permohonan</th>
                        <th>Nomor Agenda</th>
                        <th>Nama Capel</th>
                        <th>Daya Permohonan</th>
                        <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($data as $item)
                        <tr>
                            <td>{{ $item->tanggal_permohonan }}</td>
                            <td>{{ $item->nomor_agenda }}</td>
                            <td>{{ $item->capel_nama }}</td>
                            <td>{{ $item->daya_permohonan }}</td>
                            <td>
                                <a href="" class="btn btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <a href="" class="btn btn-sm btn-warning"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="12"><div class="text-center mt-4"><h5>Data Tidak Tersedia</h5></div></td>
                        </tr>
                    @endforelse
                    </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>

        </div>
    </div>
@endsection