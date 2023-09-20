@extends('layouts.master')
@section('title','petugas')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Petugas</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Petugas</li>
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
                            <h3 class="card-title">Form Petugas</h3>
                        </div>
                        <!-- /.card-header -->

                        <!-- form start -->
                        <form action="{{route ('petugas.update', $operators[0]->id)}}" method="POST"> 
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_petugas">Nama Petugas</label>
                                    <input class="form-control  @error('nama_petugas') is-invalide @enderror" type="text" name="nama_petugas" id="nama_petugas" placeholder="Masukan nama petugas" value="{{ $operators[0]->nama_petugas}}">
                                </div>
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <input class="form-control  @error('jabatan') is-invalide @enderror" type="text" name="jabatan" id="jabatan" placeholder="Masukan jabatan" value="{{ $operators[0]->jabatan}}">
                                </div>
                                <div class="form-group">
                                    <label>No. Telepon</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="number" class="form-control  @error('no_telpon') is-invalide @enderror" name="no_telpon"
                                            data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Masukan angka" value="{{ $operators[0]->no_telpon}}">
                                    </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control  @error('alamat_petugas') is-invalide @enderror" name="alamat_petugas" rows="3" placeholder="Masukan alamat">{{ $operators[0]->alamat_petugas}}</textarea>
                                </div>
                            </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
            </div>{{-- form --}}
        </div>
    </div>
</div>
<!-- /.content -->
</div>
@endsection