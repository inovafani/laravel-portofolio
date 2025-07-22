@extends('dashboard.layout')
@section('konten')
    <form action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-between">
            <div class="col-5">
                <h3>Profile</h3>
                <div class="mb-3">
                    <label for="_foto" class="form-label">Foto</label>
                    <input type="file" class="form-control form-control-sm" name="_foto" id="_foto">
                </div>
                <div class="mb-3">
                    <label for="_kota" class="form-label">Kota</label>
                    <input type="text" class="form-control form-control-sm" name="_kota" id="_kota">
                </div>
                <div class="mb-3">
                    <label for="_provinsi" class="form-label">Provinsi</label>
                    <input type="text" class="form-control form-control-sm" name="_provinsi" id="_provinsi">
                </div>
                <div class="mb-3">
                    <label for="_nohp" class="form-label">No HP Update</label>
                    <input type="text" class="form-control form-control-sm" name="_nohp" id="_nohp">
                </div>
                <div class="mb-3">
                    <label for="_email" class="form-label">Email</label>
                    <input type="text" class="form-control form-control-sm" name="_email" id="_email">
                </div>
            </div>
            <div class="col-5">
                <h3>Akun Media Sosial</h3>
                <div class="mb-3">
                    <label for="_email" class="form-label">Email</label>
                    <input type="text" class="form-control form-control-sm" name="_email" id="_email">
                </div>
            </div>
        </div>
        
        <button class="btn btn-primary" name="simpan" type="submit">Update</button>
        
    </form>
@endsection


