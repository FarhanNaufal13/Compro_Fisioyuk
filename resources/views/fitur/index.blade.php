@extends('layouts.app')

@section('title')
    Data Fitur
@endsection

@section('sub-title')
    List data
@endsection

@section('content')
    

<div class="container">
    <a href="fitur/create" class="btn btn-primary mb-3">Tambah Data</a>

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
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($fitur as $fitur)
                <tr>
                    <td>{{  $i++ }}</td>
                    <td>{{ $fitur->title }}</td>
                    <td>{{ $fitur->description }}</td>
                    <td>
                        <img src="/image/{{ $fitur->image }}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                    <a href="{{ route('fitur.edit', $fitur->id) }}" class="btn btn-warning">Edit</a>
                        
                        <form action="{{ route('fitur.destroy', $fitur->id) }}" method="POST">
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