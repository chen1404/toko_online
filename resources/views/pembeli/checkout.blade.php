@extends('layouts.app')

@section('title')
  Penjual Homepage
@endsection

@section('content')

<div class="container mt-5 pt-5">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Total Harga</th>
            <th scope="col">Jumlah Barang</th>
            <th scope="col">Penjual</th>
            <th scope="col">Id Produk</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
            @php $no = 1 @endphp
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $product->produk->nama }}</td>
                    <td>{{ $product->total_harga }}</td>
                    <td><b>{{ $product->jumlah_barang }}x</b></td>
                    <td>{{ $product->user->name }}</td>
                    <td>{{ $product->produk_id }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('pembeli.checkout', Auth::user()->id) }}" class="btn btn-warning">Checkout</a>
</div>

@endsection