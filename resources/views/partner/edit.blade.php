@extends('layouts.app')

@section('title')
    Data Partner
@endsection

@section('sub-title')
    Edit data
@endsection


@section('content')
    

<div class="container">
    <a href="/admin/partner" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('partner.update', $partner->id) }}" method="POST" enctype="multipart/form-data" >
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Nama Perusahaan</label>
                    <input type="text" class="form-control" name="name" placeholder="Nama Partner" value="{{ $partner->name }}">
                </div>
                @error('name')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <img src="/image/{{ $partner->image }}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Logo Perusahaan</label>
                    <input type="file" class="form-control" name="image" >
                </div>
                @error('image')
                    <small style="color:red">{{ $message }}</small>
                @enderror
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
        </form>
        </div>
    </div>
</div>

@endsection