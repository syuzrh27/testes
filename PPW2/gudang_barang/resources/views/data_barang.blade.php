@extends('layouts.app')

@section('content')
<h1>Daftar Barang</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Supplier</th>
        </tr>
    </thead>
    <tbody>
        @foreach($barang as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_barang }}</td>
                <td>{{ $item->harga }}</td>
                <td>{{ $item->stok }}</td>
                <td>{{ $item->supplier->nama_supplier }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
