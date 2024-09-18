@extends('layouts.app')

@section('content')
    <div class="py-4">
        <h3 class="fw-bold mb-2 pb-2 border-bottom">Ubah Institution</h3>

        <a href="{{ route('admin.institution.index')}}" class="btn btn-sm btn-secondary mb-2"> Kembali</a>

        <form action="{{ route('admin.institution.update', $institution->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group mb-2">
                <label for="id" class="form-label">ID<span class="text-danger">*</span></label>
                <input type="number" name="id" id="id" value="{{ old('id', $institution->id) }}" class="form-control @error('id') is-invalid @enderror"/>
                
                @error('id') 
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror

            </div>
            <div class="form-group mb-2">
                <label for="name" class="form-label">Nama<span class="text-danger">*</span></label>
                <input type="text" name="name" id="name" value="{{ old('name', $institution->name) }}" class="form-control @error('name') is-invalid @enderror"/>
                
                @error('name') 
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror

            </div>

            <button type="submit" class="btn btm-sm mb-2 btn-primary">
                Simpan
            </button>
            <a href="{{ route('admin.institution.index')}}" class="btn btn-sm mb-2 btn-secondary"> Batal</a>
        </form>

    </div>
@endSection