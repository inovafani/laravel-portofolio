@extends('dashboard.layout')
@section('konten')
    <div class="pb-3">
        <a href="{{route('halaman.index')}}">
            << kembali
        </a>
    </div>
    <form action="{{route('halaman.store')}}" method="POST">
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input
                type="text"
                class="form-control"
                name="judul"
                id="judul"
                aria-describedby="helpId"
                placeholder="Judul"
            />
        </div>
        
    </form>
@endsection
