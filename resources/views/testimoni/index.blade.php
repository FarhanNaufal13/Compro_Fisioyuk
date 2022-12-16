@extends('layouts.app')

@section('title')
    Data Testomoni
@endsection

@section('sub-title')
    List data
@endsection

@section('content')
    

<div class="container">
    <a href="testimoni/create" class="btn btn-primary mb-3">Tambah Data</a>

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
                    <th>Nama</th>
                    <th>Profesi</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($testimoni as $testimoni)
                <tr>
                    <td>{{  $i++ }}</td>
                    <td>{{ $testimoni->name }}</td>
                    <td>{{ $testimoni->profession }}</td>
                    <td>{{ $testimoni->description }}</td>
                    <td>
                        <img src="/image/{{ $testimoni->image }}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <a href="{{ route('testimoni.edit', $testimoni->id) }}" class="btn btn-warning">Edit</a>
                        
                        <form action="{{ route('testimoni.destroy', $testimoni->id) }}" method="POST">
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