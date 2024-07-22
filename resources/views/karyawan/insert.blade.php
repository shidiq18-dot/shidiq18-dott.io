@extends('layout.app')
@section('title', 'Tambah karyawan')
@section('content')
    <!-- Basic Card Example -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Murid</h1>

    <div class="row">
        <div class="col-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Tambah Murid</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('karyawan.add.insert') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control">
                            @error('nama')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control"></textarea>
                            @error('alamat')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>no Telp</label>
                            <input type="number" name="no_telp" class="form-control">
                            @error('no_telp')
                                {{ $message }}
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i>Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
