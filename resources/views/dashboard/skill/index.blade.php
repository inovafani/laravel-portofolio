@extends('dashboard.layout')
@section('konten')

    <form action="{{route('skill.update')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">PROGRAMMING LANGUAGE & TOOLS</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="_language"
                id="judul"
                aria-describedby="helpId"
                value="{{get_meta_value('_language')}}"
            />
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">WORKFLOW</label>
            <textarea class="form-control summernote" id="isi" name="_workflow" rows="5">{{get_meta_value('_workflow')}}</textarea>
        </div>
        <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
        
    </form>
@endsection
