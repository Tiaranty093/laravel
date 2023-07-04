@extends('template/admin/index')


@section('content')
    <h1>Tambah Produk</h1>
    <form action="{{ route('produk.store') }}" method="POST">
    @crsf
    <div class="from-group">
        <label for="name">Nama Produk</label>
        <input type="text" name="name" id="name
        class"form-control>
    </div>

    <div class="from-group">
        <label for="name">Nama Produk</label>
        <input type="text" name="name" id="price"
        class"form-control>
    </div>

    <div class="from-group">
        <label for="name">Nama Produk</label>
        <input type="text" name="name" id="descrption"
        class"form-control>
    </div>


    <button tpe="submit" class="btn btn=primary >Tambah</button

    <div class="form"></div>

    </form>
@endsection