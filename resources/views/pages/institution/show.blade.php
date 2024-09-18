@extends('layouts.app')

@section('content')
    <div class="py-4">
        <h3 class="fw-bold mb-2 pb-2 border-bottom">Institution Detail</h3>

        <a href="{{ route('admin.institution.index')}}" class="btn btn-sm btn-secondary mb-2"> Kembali</a>

        <table class="table table-striped table-bordered">
        <tr>
            <th>id</th>
            <td><strong>#{{$institution->id}}</strong></td>
        </tr>    
        <tr>
            <th>Name</th>
            <td><strong>{{$institution->name}}</strong></td>
        </tr>
        </table>
    </div>
@endSection