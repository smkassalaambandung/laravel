@extends('layouts.master')

@section('title', 'Halaman Pengarang')

@section('section')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1>Tambah Pengarang Buku</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    {{-- menampilkan data pengarang & bukunya --}}
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Pengarang Buku</h3>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('pengarang.store') }}" method="POST" accept="">
                @csrf
                <div class="form-group">
                    <div class="col-lg-12">
                        Masukan Nama Pengarang
                    </div>
                    <div class="col-lg-12">
                        <input type="text" value="{{ old('nama_pengarang') }}" class="form-control" name="nama" placeholder="Masukan nama pengarang">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-12">
                        Masukan Email Pengarang
                    </div>
                    <div class="col-lg-12">
                        <input type="email" value="{{ old('email') }}" class="form-control" name="email" placeholder="Masukan alamat email pengarang">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-12">
                        Masukan Nomor Telepon Pengarang
                    </div>
                    <div class="col-lg-12">
                        <input type="text" value="{{ old('tlp') }}" class="form-control" name="tlp" placeholder="Masukan nomor telepon pengarang">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-danger"> Simpan Data</button>
                    </div>
                </div>

            </form>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection
