@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Formulir Tambah Pelayanan</h6>
                </div>
                <div class="card-body">
                    <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your
                        email with anyone else.</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection