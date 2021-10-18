@extends('layouts.master')

@section('title', 'Halaman Pengarang')

@section('section')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1>Daftar Pengarang Buku</h1>
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
            <h3 class="card-title">Daftar Pengarang Buku</h3>
        </div>
        <div class="card-body">
            <div class="col-lg-12">
                <label for="nama_pengarang">
                    Nama Pengarang :
                </label>
                {{ $pengarang->nama_pengarang }}
                <br>

                <label for="email">
                    Email Pengarang :
                </label>
                {{ $pengarang->email }}
                <br>

                <label for="tlp">
                    Nomor telepon Pengarang :
                </label>
                {{ $pengarang->tlp }}
                <br>

            </div>
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
