@extends('layouts.app')
@section('content')
<div class="page-heading">
        <div class="page-title mb-3">
            <h3>
                <span class="bi bi-building"></span> 
                Create New - Institution
            </h3>
        </div>

        <a href="{{ route('admin.institution.index')}}" class="btn btn-sm btn-secondary mb-2"> Kembali</a>

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <div class="form-group mb-2">
                        <form action="{{ route('admin.institution.store') }}" method="POST">
                            @csrf

                        <label for="name" class="form-label">Institution Nama<span class="text-danger">*</span></label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror"/>
            
                        @error('name') 
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror  
                    </div>
                </div>
            </div>
        </section>
        <button type="submit" class="btn btm-sm mb-2 btn-primary">
            Simpan
        </button>
        <a href="{{ route('admin.institution.index')}}" class="btn btn-sm mb-2 btn-secondary"> Batal</a>
    </form>

</div>
@endsection