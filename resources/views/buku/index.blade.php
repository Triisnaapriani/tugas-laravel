@extends('layouts.master')
@push('css')
<link rel="stylesheet" href="{{asset ('Template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset ('Template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('Template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

@endpush


@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Perpustakaan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Buku</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Tahun Terbit</th>
                                <th>Stok</th>
                                <th>No. Rak</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($buku as $key => $values)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $values->kode_buku }}</td>
                                    <td>{{ $values->judul_buku }}</td>
                                    <td>{{ $values->penulis_buku }}</td>
                                    <td>{{ $values->penerbit_buku }}</td>
                                    <td>{{ $values->tahun_terbit }}</td>
                                    <td>{{ $values->stok }}</td>
                                    <td>{{ $values->id_rak }}</td>
                                    <td>
                                        <a href="" class="btn-sm btn-info">Show</a>
                                        <a href="" class="btn-sm btn-warning">Edit</a>
                                        <a href="" class="btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>Data masih kosong</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                {{-- card footer --}}
                <div class="card-footer">
                    <div class="row justify-content-between">
                        <div class="col-3">
                            <a class="btn btn-primary" href="{{ route('anggota.create') }}" role="button">
                                <i class="fas fa-plus"></i>
                                 Data Anggota</a>
                        </div>
                        <div class="col-3">
                            <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled"
                                        id="example2_previous"><a href="#" aria-controls="example2"
                                            data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#"
                                            aria-controls="example2" data-dt-idx="1" tabindex="0"
                                            class="page-link">1</a></li>
                                    <li class="paginate_button page-item"><a href="#"
                                            aria-controls="example2" data-dt-idx="2" tabindex="0"
                                            class="page-link">2</a></li>
                                    <li class="paginate_button page-item next disable" id="example2_next"><a
                                            href="#" aria-controls="example2" data-dt-idx="3"
                                            tabindex="0" class="page-link">Next</a></li>
                                </ul>
                            </div>
                        </div>
            </div>
            </div>
          </div>
        </div>
                <!-- /.card -->
                

@endsection

@push('script')
<script src="{{asset ('Template/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset ('Template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset ('Template/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset ('Template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset ('Template/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset ('Template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset ('Template/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset ('Template/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset ('Template/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset ('Template/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset ('Template/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset ('Template/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
@endpush