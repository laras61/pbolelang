@extends('Layout')
@section('Content')



<a href="#" class="btn btn-success mb-3"> + Add New Data</a>


<table class="table table-bordered">
    <tr>
        <th>NO.</th>
        <th>ID Barang</th>
        <th>Tanggal</th>
        <th>Harga Akhir</th>
        <th>Status</th>
    </tr>
    @foreach($tb_lelang as $Get)
    <tr>
        <td>{{ $Get->id_lelang }}</td>
        <td>{{ $Get->id_barang }}</td>
        <td>{{ $Get->tgl_lelang }}</td>
        <td>{{ $Get->harga_akhir }}</td>
        <td>{{ $Get->status_lelang }}</td>
        <td>
            <a href="/controller/edit/{{ $Get->id_user }}" class="btn btn-info">Update</a>
            |
            <a href="/controller/hapus/{{ $Get->id_user }}" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
</table>



@endsection
