@extends('layouts.app')

@section('title')
    Data Service
@endsection

@section('sub-title')
    List data
@endsection

@section('content')
    

<div class="container">
    <a href="service/create" class="btn btn-primary mb-3">Tambah Data</a>

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
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($service as $service)
                <tr>
                    <td>{{  $i++ }}</td>
                    <td>{{ $service->title }}</td>
                    <td>
                        <img src="/image/{{ $service->image }}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                    <a href="{{ route('service.edit', $service->id) }}" class="btn btn-warning">Edit</a>
                        
                        <form action="{{ route('service.destroy', $service->id) }}" method="POST">
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