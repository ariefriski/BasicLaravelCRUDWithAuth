@extends('layouts.app')


@section('main')
<div class="border rounded mt-5 mx-auto d-flex flex-column align-items-stretch bg-white" style="width: 380px;">
        <div class="d-flex justify-content-between flex-shrink-0 p-3 link-dark  border-bottom">
            <span class="fs-5 fw-semibold">Daftar Mahasiswa</span>
            <a href="{{url('page/')}}" class="btn btn-sm btn-primary">Lihat Daftar</a>
        </div>

    </div>

@endsection
