@extends('layouts.main')

@section('title', 'rent-log')
@section('content')

<h1>Edit User</h1>
<form id="create-form" action="{{route('update', $user->id)}}" method="POST">
    @csrf

    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" value={{ $user->name }} class="form-control" id="name"
                    placeholder="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" value={{ $user->email}} class="form-control" id="email"
                    placeholder="email">
            </div>
            <div class="mb-3">
                <label for="noHp" class="form-label">No Hp</label>
                <input type="number" name="no_hp" value={{ $user->no_hp}} class="form-control" id="noHp"
                    placeholder="No Hp">
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" name="address" id="address" rows="3">{{ $user->address}}</textarea>
            </div>
            <button type="Submit" class="btn btn-primary btn-lg">Edit</button>
        </div>
    </div>
</form>

@endsection
