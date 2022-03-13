@extends('layout.admin')

<!-- Breadcrumb -->
@section('br-menu')
    Jurnal
@endsection
@section('br-title')
    Edit Kategori Jurnal
@endsection

<!-- Side Bar - Activate -->
@section('sb-jurnal', 'show')
@section('sb-jurnal-button', 'active')
@section('sb-jurnal-kategori', 'active')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">@yield('br-menu')</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="#">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">@yield('br-title')</a>
            </li>
        </ul>
    </div>
    <div class="page-category">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">@yield('br-title')</div>
                    </div>
                    <div class="card-body pb-2">
                        <form action="/admin/jurnal/kategori/{{$kategori->id}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Kategori</label>
                                        <input type="text" name="nama" value="{{$kategori->nama}}" class="form-control">
                                    </div>
                                    @error('nama')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <label>Deskripsi Kategori</label>
                                        <textarea name="deskripsi" class="form-control" rows="3">{{$kategori->deskripsi}}</textarea>
                                    </div>
                                    @error('deskripsi')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div>
                                        <button type="submit" class="btn btn-success mx-2 my-2">Update</button>
                                        <a href="/admin/jurnal/kategori" class="btn btn-warning">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection