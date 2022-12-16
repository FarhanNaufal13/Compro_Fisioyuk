@extends('layouts.app')

@section('title')
    Data Kontak
@endsection

@section('sub-title')
    Edit data
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
            <form action="/admin/contact/{{ $contact->id }}" method="POST" enctype="multipart/form-data" >
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Nama Perusahaan</label>
                    <input type="text" class="form-control" name="name" placeholder="Nama Perusahaan" value="{{ $contact->name }}">
                </div>
                @error('name')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{ $contact->description }}</textarea>
                </div>
                @error('description')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{ $contact->alamat }}">
                </div>
                @error('alamat')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Email</label>
                    <button type="button" class="btn btn-primary btn-sm mb-3" id='addButton' value='Tambah Jawaban' style="float: right">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-primary btn-sm mb-3 mr-2" id="removeButton" value="Hapus Jawaban" style="float: right">
                        <i class="fas fa-plus"></i></button>
                    <input type="text" class="form-control" name="email" placeholder="email" value="{{ $contact->email }}">
                </div>
                @error('email')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div id="tambah_inputan">

                </div>
                <div class="form-group">
                    <label for="">Telepon</label>
                    <input type="text" class="form-control" name="telepon" placeholder="Alamat" value="{{ $contact->telepon }}">
                </div>
                @error('telepon')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Maps Embed</label>
                    <textarea name="maps_embed" id="" cols="30" rows="10" class="form-control" placeholder="Maps Embed">{{ $contact->maps_embed }}</textarea>
                </div>
                @error('maps_embed')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <img src="/image/{{ $contact->logo }}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Logo</label>
                    <input type="file" class="form-control" name="logo" >
                </div>
                @error('logo')
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

@push('js')

<script>

    $('#addButton').click(function(){
        console.log('jamar');
    });
    
</script>
    
@endpush