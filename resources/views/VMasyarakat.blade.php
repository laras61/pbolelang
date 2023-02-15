@extends('Layout')
@section('Content')



<a href="#" onclick="ModalTambahMasyarakat()"  class="btn btn-success mb-3"> + Add New Data</a>


<table class="table">
    <thead class="thead-dark">
        <tr>
            <th>NO.</th>
            <th>ID user</th>
            <th>Nama Lengkap</th>
            <th>Username</th>
            <th>Password</th>
            <th>Telepon</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tb_masyarakat as $Get)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $Get->id_user }}</td>
            <td>{{ $Get->nama_lengkap }}</td>
            <td>{{ $Get->username }}</td>
            <td>{{ $Get->password }}</td>
            <td>{{ $Get->telp }}</td>
            <td>
                <a href="#" onclick="ModalEditMasyarakat({{ $Get->id_user }} ,'{{ $Get->nama_lengkap }}')" class="btn btn-info" >Update</a>
                |
                <a href="#" onclick="ModalHapusMasyarakat({{ $Get->id_user }})" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>

<!-- Form Modal Tambah masyarakat -->
<form action="masyarakat/tambah" method="post">
    @csrf
<div class="modal fade" id="ModalTambahMasyarakat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" >Form Tambah</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="mb-3">
                <label  class="form-label">ID user</label>
                <input type="text" class="form-control" name="id_user" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Nama Lengkap</label>
                <textarea name="nama_lengkap" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label  class="form-label">Username</label>
                <textarea name="username" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label  class="form-label">Password</label>
                <textarea name="password" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label  class="form-label">Telepon</label>
                <textarea name="telp" class="form-control" required></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
        </div>
        </div>
    </div>
</div>
</form>
<!-- Form Modal Tambah masyarakat -->

<!-- Form Modal Hapus masyarakat-->
<form action="masyarakat/hapus" method="post">
    @csrf
<div class="modal fade" id="ModalHapusMasyarakat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Hapus</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
          <div class="modal-footer">
              <input type="hidden" name="id_user">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
          </div>
      </div>
    </div>
  </div>
</form>
  <!-- Form Modal Hapus masyarakat-->


  <!-- Form Modal Edit Berita -->
<form action="berita/edit" method="post">
    @csrf
<div class="modal fade" id="ModalEditMasyarakat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" >Form Ubah</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="mb-3">
                <label  class="form-label">ID user</label>
                <input type="text" class="form-control" name="id_user" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Nama Lengkap</label>
                <textarea name="nama_lengkap" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label  class="form-label">Username</label>
                <textarea name="username" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label  class="form-label">Password</label>
                <textarea name="password" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label  class="form-label">Telepon</label>
                <textarea name="telp" class="form-control" required></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
        </div>
        </div>
    </div>
</div>
</form>
<!-- Form Modal Edit Masyarakat -->

<script>

    // Modal Tambah masyarakat
    function ModalTambahMasyarakat () {
           $('#ModalTambahMasyarakat').modal('show');
       }
    // Modal Tambah masyarakat

    // Modal Hapus Masyarakat
    function ModalHapusMasyarakat ($id) {
        $('[name="id_user"]').val($id);
        $('#ModalHapusMasyarakat').modal('show');
    }
    // Modal Tambah Masyarakat


       // Modal Edit Masyarakat
     function ModalEditMasyarakat (id,nama) {
        $('[name="id_user"]').val(id);
        $('[name="nama_lengkap"]').val(nama);
        $('#ModalEditMasyarakat').modal('show');
     }
// Modal Edit Masyarakat


</script>



@endsection
