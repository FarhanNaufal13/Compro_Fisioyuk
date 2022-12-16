@extends('layouts.app')

@section('title')
    Data Team
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
            <form action="/admin/team/{{ $team->id }}" method="POST" enctype="multipart/form-data" >
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Judul" value="{{ $team->name }}">
                </div>
                @error('name')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{ $team->description }}</textarea>
                </div>
                @error('description')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <img src="/image/{{ $team->image }}" alt="" class="img-fluid">
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