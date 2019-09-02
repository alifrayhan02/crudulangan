@extends('template')
@section('content')
    <section class="main-section">
        <div class="content">
            <h1>Tambah Barang</h1>
            <hr>
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li><strong>{{ $error }}</strong>
                    @endforeach
            </div>
        @endif

        <form action="{{ route('barang.store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="kode_barang">Kode Barang:</label>
                <input type="text" class="form-control" id="kode" name="kode_barang">
            </div>
            <div class="form-group">
                <label for="nama">Nama Barang:</label>
                <input type="text" class="form-control" id="nama" name="nama_barang">
            </div>
            <div class="form-group">
                <label for="stok">Stok:</label>
                <input type="text" class="form-control" id="nohp" name="stok">
            </div>
            <div class="form-group">
                <label for="harga">Harga:</label>
                <textarea class="form-control" id="harga" name="harga"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-md btn-primary">Submit</button>
                <button type="reset" class="btn btn-md btn-danger">Cancel</button>
            </div>
        </form>
    </div>
</section>
@endsection
