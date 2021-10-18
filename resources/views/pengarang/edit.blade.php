@extends('layouts.master')

@section('title', 'Halaman Pengarang')

@section('section')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1>Edit Pengarang Buku</h1>
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
            <h3 class="card-title">Edit Pengarang Buku</h3>
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
            <form action="{{ route('pengarang.update', $pengarang->id) }}" method="POST" accept="">
                @csrf
				@method('PUT')

                <div class="form-group">
                    <div class="col-lg-12">
                        Masukan Nama Pengarang
                    </div>
                    <div class="col-lg-12">
                        <input type="text" value="{{ $pengarang->nama_pengarang }}" class="form-control" name="nama_pengarang" placeholder="Masukan nama pengarang" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-12">
                        Masukan Email Pengarang
                    </div>
                    <div class="col-lg-12">
                        <input type="email" value="{{ $pengarang->email }}" class="form-control" name="email" placeholder="Masukan alamat email pengarang" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-12">
                        Masukan Nomor Telepon Pengarang
                    </div>
                    <div class="col-lg-12">
                        <input type="text" value="{{ $pengarang->tlp }}" class="form-control" name="tlp" placeholder="Masukan nomor telepon pengarang" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-danger"> Rubah Data</button>
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
