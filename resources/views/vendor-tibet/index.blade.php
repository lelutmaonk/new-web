@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Tabel {{ $title }}</h6>
                    </div>
                    <a href="{{ route('vendor-tibet.create') }}" class="btn btn-sm btn-outline-success">Tambah {{ $title }} </a>
                </div>

                
                {{-- message success --}}
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible ml-2 mr-2" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h6><i class="fas fa-check"></i><b> Success!</b></h6>
                        {{ session('success') }}
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                        <th>Nama Vendor Tibet</th>
                        <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($data as $item)
                        <tr>
                            <td>{{ $item->vendor_tibet_nama }}</td>
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