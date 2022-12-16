@extends('layouts.app')

@section('title')
    Data Partner
@endsection

@section('sub-title')
    List data
@endsection

@section('content')
    

<div class="container">
    <a href="partner/create" class="btn btn-primary mb-3">Tambah Data</a>

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
                    <th>Nama Perusahaan</th>
                    <th>Logo Perusahaan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($partner as $partner)
                <tr>
                    <td>{{  $i++ }}</td>
                    <td>{{ $partner->name }}</td>
                    <td>
                        <img src="/image/{{ $partner->image }}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                    <a href="{{ route('partner.edit', $partner->id) }}" class="btn btn-warning">Edit</a>
                        
                        <form action="{{ route('partner.destroy', $partner->id) }}" method="POST">
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