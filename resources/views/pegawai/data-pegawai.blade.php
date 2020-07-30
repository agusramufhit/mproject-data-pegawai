@extends('layouts.admin')


@section('content')
    <!-- Begin Page Content -->
<div class="card card-info card-outline">
    <div class="card-header">
        <div class="card-tools">
            <a href="{{ route('create-pegawai')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Aksi</th>
            </tr>
            @foreach($dataPegawai as $item)
            <tr>
                <td>{{ $item->nama}}</td>
                <td>{{ $item->alamat}}</td>
                <td>{{date('d-m-Y', strtotime($item->tgllhr))}}</td>
                <td><a href="{{ url('edit-pegawai')}}" <i class="fas fa-edit"><i></a> | <a href="#" <i class="fas fa-trash-alt"
                    style="color:red"><i></a></td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@include('sweetalert::alert')
  <!-- /.container-fluid -->
@endsection