@extends('layouts.master')

@section('title')
    Edit Kategori
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Edit Kategori</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Kategori</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3>Daftar Kategori</h3>
                            </div>
                            @if (session('success'))
                                <div class="card-body">
                                    <div class="alert alert-success alert-dismissible">
                                        {!! session('success') !!}
                                    </div>
                                </div>
                            @endif

                            <form role="form" action="{{ route('products.update', $product->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="PUT">
                                <div class="form-group">
                                    <input type="text" name="code"  value="{{ $product->code }}"class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" id="code" placeholder="Kode Produk" required autofocus>
                                </div>   
                                <div class="form-group">
                                    <label for="name">Kategori</label>
                                    <input type="text" 
                                        name="name"
                                        value="{{ $product->name }}"
                                        class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}" id="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Deskripsi</label>
                                    <textarea name="description" id="description" cols="5" rows="5" class="form-control {{ $errors->has('description') ? 'is-invalid':'' }}">{{ $product->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <input type="number" name="stock" value="{{ $product->stock }}" class="form-control {{ $errors->has('stock') ? 'is-invalid' : '' }}" id="stock" placeholder="Stok" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input type="number" name="price" value="{{ $product->price }}" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" id="price" placeholder="Harga" required autofocus>
                                </div>
                                <div class="form-group">
                                    <select name="category_id" id="category_id" value="{{ $product->category_id }}"
                                        required class="form-control {{ $errors->has('price') ? 'is-invalid':'' }}">
                                        <option value="">Pilih Kategori</option>
                                        @foreach ($categories as $row)
                                            <option value="{{ $row->id }}">{{ ucfirst($row->name) }}</option>
                                        @endforeach
                                    </select>
                                    <p class="text-danger">{{ $errors->first('category_id') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="">Foto</label>
                                    <input type="file" name="photo" class="form-control" value="{{ $product->photo }}"> 
                                    <p class="text-danger">{{ $errors->first('photo') }}</p>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-info">Update</button>
                                    <input type="reset" class="btn btn-md btn-warning pull-right">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection