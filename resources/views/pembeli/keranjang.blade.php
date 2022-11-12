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
            <th scope="col">Harga</th>
            <th scope="col">Gambar</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
            @php $no = 1 @endphp
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $product->nama }}</td>
                    <td>{{ $product->harga }}</td>
                    <td>{{ $product->gambar }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('checkout', Auth::user()->id) }}" class="btn btn-warning">Checkout</a>
</div>

@endsection