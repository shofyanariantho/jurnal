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


<!-- Style -->
@push('style')
<link rel="stylesheet" href="{{asset('admin/assets/css/fonts.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/css/fonts.min.css')}}">
@endpush

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
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">@yield('br-title')</div>
            </div>
            <form action="/cast" method="POST">
                @csrf
                <div class="card-body pb-2">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <label>Nama Kategori</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            @error('judul')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="card-action mt-3">
                                <button type="submit" class="btn btn-success btn-lg btn-block">Tambahkan</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-8">	
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover" >
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kategori</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Umum</td>
                                            <td>
            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Aqidah</td>
                                            <td>
            
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection