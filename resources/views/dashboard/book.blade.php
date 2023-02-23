@extends('layouts.main')

@section('title', 'book')
@section('content')
<h1>Halaman Books</h1>
<section class="section">
    <div class="row">
        @if (Session::get('danger'))
        <div class="alert alert-danger">
            {{Session::get('danger')}}
        </div>
        @endif
        @if (Session::get('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif
        <div class="col-lg-11">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="{{ route ('add') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Penulis</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="writer">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Penerbit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="publisher">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="kategori">
                            </div>
                        </div>

                        {{-- <div class="row mb-3">
                           <label class="col-sm-2 col-form-label">Kategori Buku</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" name="kategori">
                                    <option>Pilih Kategori</option>
                                    {{-- @foreach($category as $cate)
                                    <option value="{{ $cate->categoryID }}">{{ $cate['category_name'] }}</option>
                                    @endforeach --}}
                                {{-- </select>
                            </div>
                        </div> --}} 

                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Sinopsis</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" style="height: 100px" name="sinopsis"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="formFile" name="image">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
    </form>
</section>

<div class="row my-5">

    <div class="col">
        <table class="table bg-white rounded shadow-sm table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Sinopsis</th>
                    <th>kategori</th>
                    <th>Cover</th>
                    <th>Action</th>
                </tr>
            <tbody>
                @foreach ($book as $number => $book)
                <tr>
                    <td>{{ $number+1 }}</td>
                    <td>{{$book['title']}}</td>
                    <td>{{$book['writer']}}</td>
                    <td>{{$book['publisher']}}</td>
                    <td>{{$book['sinopsis']}}</td>
                    <td>{{$book['kategori']}}</td>
                    <td>
                        <img width="100px" src="/image/{{$book['image']}}" alt="">
                    </td>
                    <td>
                        <form action="{{route('deleteUser', $book->id)}}"
                            onsubmit="return confirm('Tetap hapus data ini?')">
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
    </div>
</div>

@endsection