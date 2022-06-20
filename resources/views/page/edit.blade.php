@extends('layouts.app')
@section('main')
<div class="mt-5 mx-auto" style="width: 380px">
    <div class="card">
        <div class="card-body">
            <form action="{{url("/page/$mahasiswa->id")}}" method="POST">
                @csrf @method('PATCH')
                <div class="mb-3">
                    <label  for="" class="form-label">Nama</label>
                    <input name="nama" type="text" class="form-control" value="{{$mahasiswa->nama}}">
                    @error('nama')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label  for="" class="form-label">Jurusan</label>
                    <textarea name="jurusan" class="form-control" id="" rows="3" >{{$mahasiswa->jurusan}}</textarea>
                    @error('jurusan')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label name="usia" for="" class="form-label">Usia</label>
                    <input  name="usia" type="text" class="form-control" value="{{$mahasiswa->usia}}">
                    @error('usia')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</div>
@endsection