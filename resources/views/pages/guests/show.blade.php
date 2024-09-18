@extends('layouts.app')

@section('content')
    <div class="py-4">
        <h3 class="fw-bold mb-2 pb-2 border-bottom">Guest Detail</h3>

        <a href="{{ route('admin.guests.index')}}" class="btn btn-sm btn-secondary mb-2"> Kembali</a>

        <table class="table table-striped table-bordered">
        <tr>
            <th>id</th>
            <td><strong>#{{$guest->id}}</strong></td>
        </tr>    
        <tr>
            <th> Guest Name</th>
            <td><strong>{{$guest->fullname}}</strong></td>
        </tr>
        <tr>
            <th>From</th>
            <td><strong>{{$guest->from}}</strong></td>
        </tr>
        <tr>
            <th>Phone Number</th>
            <td><strong>{{$guest->phonenumber}}</strong></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><strong>{{$guest->email}}</strong></td>
        </tr>
        <tr>
            <th>Note</th>
            <td><strong>{{$guest->note}}</strong></td>
        </tr>
        <tr>
            <th>Created At</th>
            <td><strong>{{$guest->created_at}}</strong></td>
        </tr>
        <tr>
            <th>Updated At</th>
            <td><strong>{{$guest->updated_at}}</strong></td>
        </tr>
        </table>
    </div>
@endSection