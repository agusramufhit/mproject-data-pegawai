@extends('layouts.admin')


@section('content')
    <!-- Begin Page Content -->
<div class="card card-info card-outline">
<div class="card-header">
    <h3>Create Data Pegawai</h3>
</div>

    <div class="card-body">
        <form action="{{ route('edit-pegawai', = edit="$id"))}}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" id="nama" name="nama" value="{{ edit('$id')}}" class="form-control" placeholder="Nama Pegawai">
            </div>
            <div class="form-group">
                <textarea name="alamat" id="alamat" value="{{ edit('$alamat')}}" class="form-control" placeholder="Alamat Pegawai"></textarea>
            </div>
            <div class="form-group">
                <input type="date" id="tgllhr" name="tgllhr" value="{{ edit('$tgllhr')}}" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Simpan Data</button>
            </div>
    </div>
</div>
  <!-- /.container-fluid -->
@endsection