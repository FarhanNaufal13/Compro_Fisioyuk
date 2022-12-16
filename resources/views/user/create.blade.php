@extends('layouts.app')

@section('title')
    Data User
@endsection

@section('sub-title')
    Tambah data
@endsection

@section('content')
    

<div class="container">
    <a href="/admin/user" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="name" placeholder="Nama">
                </div>
                @error('name')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
                @error('email')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Pasword</label>
                    <input type="password" class="form-control" name="password" placeholder="password">
                </div>
                @error('password')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image" >
                </div>
                @error('image')
                    <small style="color:red">{{ $message }}</small>
                @enderror
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" >Submit</button>
            </div>
        </form>
        </div>
    </div>
</div>

@endsection