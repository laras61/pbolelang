@extends('Layout')
@section('Content')



<a href="#" class="btn btn-success mb-3" > + Add New Data</a>


<table class="table table-bordered text-center">
    <tr>
        <th>NO.</th>
        <th>Nama Barang</th>
        <th>Tanggal</th>
        <th>Harga awal</th>
        <th>Deskripsi</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    @foreach($tb_barang as $Get)
    <tr>
        <td>{{ $Get->id_barang }}</td>
        <td>{{ $Get->nama_barang }}</td>
        <td>{{ $Get->tgl }}</td>
        <td>{{ $Get->harga_awal }}</td>
        <td>{{ $Get->deskripsi_barang }}</td>
        <td>{{ $Get->status_barang }}</td>
        <td>
            <a href="/controller/edit/{{ $Get->id_barang}}" class="btn btn-info">Update</a>
            |
            <a href="/controller/hapus/{{ $Get->id_barang}}" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
</table>



@endsection
