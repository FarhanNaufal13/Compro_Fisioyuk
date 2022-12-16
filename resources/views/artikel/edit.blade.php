@extends('layouts.app')

@section('title')
    Data artikel
@endsection

@section('sub-title')
    Edit data
@endsection


@section('content')
    

<div class="container">
    <a href="/admin/artikel" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data" >
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="judul" value="{{ $artikel->title }}">
                </div>
                @error('title')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Kategori</label>
                    <select name="category" id="" class="form-control" placeholder="pilih kategory" value="{{ $artikel->category }}">
                        <option value="fisioterapy">Fisioterapy</option>
                        <option value="kesehatan">Kesehatan</option>
                        <option value="gayaHidup">Gaya Hidup</option>
                    </select>
                </div>
                @error('category')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Isi Artikel</label>
                    <textarea name="isi" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{ $artikel->isi }}</textarea>
                </div>
                @error('isi')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Penulis</label>
                    <input type="text" class="form-control" name="penulis" placeholder="judul" value="{{ $artikel->penulis }}">
                </div>
                @error('penulis')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Sebagai</label>
                    <input type="text" class="form-control" name="sebagai" placeholder="judul" value="{{ $artikel->sebagai }}">
                </div>
                @error('sebagai')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Sumber</label>
                    <textarea name="sumber" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{ $artikel->sumber }}</textarea>
                </div>
                @error('sumber')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Tanggal Posting</label>
                    <input type="date" class="form-control" name="tanggal" placeholder="tanggal" value="{{ $artikel->tanggal }}">
                </div>
                @error('tanggal')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <img src="/image/{{ $artikel->image }}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Gambar</label>
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