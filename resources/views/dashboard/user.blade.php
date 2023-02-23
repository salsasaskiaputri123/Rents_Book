@extends('layouts.main')

@section('title', 'user')
@section('content')

<h1>Data Users</h1>
<div class="card vh-100 my-3">
    @if (Session('success'))
    <div class="alert alert-success scslgn">
        {{Session('success')}}
    </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">No Hp</th>
                <th scope="col">Adress</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $dt)
            <tr>

                <th scope="row">1</th>
                <td>{{$dt->name}}</td>
                <td>{{$dt->email}}</td>
                <td>{{$dt->no_hp}}</td>
                <td>{{$dt->address}}</td>
                <td>
                    <form action="{{route('deleteUser', $dt->id)}}" method="POST"
                        onsubmit="return confirm('Tetap hapus data ini ?')">
                        @csrf
                        <a href="{{route('editUser', $dt->id)}}" class="btn btn-primary">Edit</a>
                        <button class="btn btn-warning">Delete</button>
                    </form>
                </td>
                @endforeach
            </tr>
        </tbody>
    </table>

    @endsection
