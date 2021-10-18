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
            <a href="{{ route('pengarang.create') }}" class="btn btn-success">
                Tambah Data Pengarang
            </a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                @php
                $no = 1;
                @endphp
                <tbody>
                    @foreach ($pengarang as $data)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $data->nama_pengarang }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->tlp }}</td>
                        <td>
                            <a href="{{ route('pengarang.show', $data->id) }}" class="btn btn-info">
                                Show
                            </a>
                            <br>
                            <a href="{{ route('pengarang.edit', $data->id) }}" class="btn btn-warning">
                                Edit
                            </a>
                            <br>
                            <form action="{{ route('pengarang.destroy', $data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    Hapus
                                </button>
                            </form>
                            {{-- <a href="" class="btn btn-danger">
                    Hapus
                  </a> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- @foreach ($pengarang as $data)
                Nama Pengarang Buku : {{ $data->nama_pengarang }} <br>
            Email Pengarang : {{ $data->email }} <br>
            Tlp Pengarang : {{ $data->tlp }} <br>
            <b>Datar Buku</b> <br>
            @foreach ($data->book as $item)
            Nama Buku : {{ $item->nama_buku }} <br>
            @if($item->jumlah_halaman > 1)
            Jumlah Halaman Buku : {{ $item->jumlah_halaman }} <br>
            @else
            Jumlah Halaman Buku : <b>Belum mempunyai jumlah halaman</b> <br>
            @endif
            Translate Judul Buku : {!! $item->translate_judul_buku ?? '<i>Translate Buku Belum Tersedia</i>' !!} <br>
            @endforeach
            <hr>
            @endforeach --}}
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
