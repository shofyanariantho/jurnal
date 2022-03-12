@extends('layout.admin')

<!-- Breadcrumb -->
@section('br-menu')
    Jurnal
@endsection
@section('br-title')
    Kategori Jurnal
@endsection

<!-- Side Bar - Activate -->
@section('sb-jurnal', 'show')
@section('sb-jurnal-button', 'active')
@section('sb-jurnal-kategori', 'active')

<!-- Script -->
@push('script')
<script src="{{asset('admin/assets/js/setting-demo2.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#basic-datatables').DataTable({
        });
    });
</script>
@endpush

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
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <form action="/admin/jurnal/kategori" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Nama Kategori</label>
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                    @error('nama')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <label>Deskripsi Kategori</label>
                                        <textarea name="deskripsi" class="form-control" rows="3"></textarea>
                                    </div>
                                    @error('deskripsi')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="card-action mt-3">
                                        <button type="submit" class="btn btn-success btn-lg btn-block">Tambahkan</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6 col-lg-8">	
                                <div class="table-responsive mt-2">
                                    <table id="basic-datatables" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kategori</th>
                                                <th>Deskripsi</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($kategori as $key => $item)
                                                <tr>
                                                    <td>{{$key + 1}}</td>
                                                    <td>{{$item->nama}}</td>
                                                    <td>{{$item->deskripsi}}</td>
                                                    <td>
                                                        <form 
                                                            action="/admin/jurnal/kategori/{{$item->id}}" method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <a href="/admin/jurnal/kategori/{{$item->id}}/edit" class="btn btn-warning btn-round btn-xs">Edit</a>
                                                            <input type="submit" class="btn btn-danger btn-round btn-xs" value="Delete">
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <h3><b>Kategori belum ada!</b></h3>	
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection