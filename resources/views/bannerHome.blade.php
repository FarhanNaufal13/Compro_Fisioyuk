@extends('layouts.app')

@section('title')
    Data Banner Home
@endsection

@section('sub-title')
    Edit Data
@endsection


@section('content')
    

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if ($message = Session::get('message')) 
                <div class="alert alert-success">
                    <strong>Berhasil</strong>
                    <p>{{ $message }}</p>
                </div>
            @endif
            <form action="/admin/bannerHome/{{ $bannerHome->id }}" method="POST" enctype="multipart/form-data" >
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Nama Perusahaan" value="{{ $bannerHome->title }}">
                </div>
                @error('title')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{ $bannerHome->description }}</textarea>
                </div>
                @error('description')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Sub Judul</label>
                    <input type="text" class="form-control" name="sub_title" placeholder="Nama Perusahaan" value="{{ $bannerHome->sub_title }}">
                </div>
                @error('sub_title')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <img src="/image/{{ $bannerHome->image }}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">image</label>
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