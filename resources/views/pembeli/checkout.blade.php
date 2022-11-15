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
            <th scope="col">Alamat tujuan</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
            @php $no = 1 @endphp
            @foreach($transactions as $transaction)
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $transaction->produk->nama }}</td>
                    <td>{{ $transaction->total_harga }}</td>
                    <td><b>{{ $transaction->jumlah_barang }}x</b></td>
                    <td>{{ $transaction->user->name }}</td>
                    <td>{{ $transaction->alamat }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <a href="{{ route('user.transaksi', Auth::user()->id) }}" class="btn btn-warning">Checkout</a> --}}
</div>

@endsection