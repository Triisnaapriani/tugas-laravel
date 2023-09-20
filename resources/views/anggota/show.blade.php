@extends('layouts.master')
@section('title', 'anggota')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Anggota</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Anggota</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form Anggota</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="kode_anggota">Kode Anggota</label>
                                        <input type="text" class="form-control" name="kode_anggota" id="kode_anggota" 
                                            placeholder="Masukan kode" value="{{ $anggota[0]->kode_anggota}}"disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" name="nama_anggota" id="nama"
                                            placeholder="Masukan nama" value="{{ $anggota[0]->nama_anggota}}"disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" name="jk_anggota" id="jk_anggota"
                                            placeholder="Masukan nama" value="{{ $anggota[0]->jk_anggota}}"disabled>
                                    </div>
                                     <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" name="jurusan_anggota" id="jurusan_anggota"
                                            placeholder="Masukan nama" value="{{ $anggota[0]->jurusan_anggota}}" disabled>
                                    </div>
                                
                                    <div class="form-group">
                                        <label>No. Telepon</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>
                                            <input type="number" class="form-control" name="no_telpon"
                                                placeholder="Masukan angka" value="{{ $anggota[0]->no_telpon}}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" name="alamat_anggota" rows="3" placeholder="Masukan alamat"disabled>{{ $anggota[0]->alamat_anggota}}</textarea>
                                        </div>
                                </div>
                                <div class="card-footer">
                                    <input type="button" class="btn btn-danger" value="kembali" onclick="history.back()">
                                </div>

                                <!-- /.content -->
                        </div>
                    @endsection