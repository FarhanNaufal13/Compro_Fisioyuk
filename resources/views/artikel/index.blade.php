@extends('layouts.app')

@section('title')
    Data Artikel
@endsection

@section('sub-title')
    List data
@endsection

@section('content')
    

<div class="container">
    <a href="artikel/create" class="btn btn-primary mb-3">Tambah Data</a>

    @if ($message = Session::get('message')) 
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Isi Artikel</th>
                    <th>Penulis</th>
                    <th>Sebagai</th>
                    <th>Sumber</th>
                    <th>Tanggal Posting</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($artikel as $artikel)
                <tr>
                    <td>{{  $i++ }}</td>
                    <td>{{ $artikel->title }}</td>
                    <td>{{ $artikel->category }}</td>
                    <td>{{ $artikel->isi }}</td>
                    <td>{{ $artikel->penulis}}</td>
                    <td>{{ $artikel->sebagai }}</td>
                    <td>{{ $artikel->sumber }}</td>
                    <td>{{ $artikel->tanggal }}</td>
                    <td>
                        <img src="/image/{{ $artikel->image }}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                    <a href="{{ route('artikel.edit', $artikel->id) }}" class="btn btn-warning">Edit</a>
                        
                        <form action="{{ route('artikel.destroy', $artikel->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection