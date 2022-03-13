@extends('layout.admin')

<!-- Breadcrumb -->
@section('br-menu')
    Jurnal
@endsection
@section('br-title')
    List Jurnal
@endsection

<!-- Side Bar - Activate -->
@section('sb-jurnal', 'show')
@section('sb-jurnal-button', 'active')
@section('sb-jurnal-list', 'active')

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
                        <h4 class="card-title">@yield('br-title')</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover" >
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Penulis</th>
                                        <th>Tahun</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @forelse ($jurnal as $key => $item)
                                                <tr>
                                                    <td>{{$key + 1}}</td>
                                                    <td>{{$item->judul}}</td>
                                                    <td>{{$item->penulis}}</td>
                                                    <td>{{$item->tahun}}</td>
                                                    <td>
                                                       
                                                        <form 
                                                            action="/jurnal/{{$item->id}}" method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <a href="/jurnal/{{$item->id}}" class="btn btn-info btn-round btn-xs">Detail</a>
                                                            @auth
                                                            <a href="/jurnal/{{$item->id}}/edit" class="btn btn-warning btn-round btn-xs">Edit</a>
                                                            <input type="submit" class="btn btn-danger btn-round btn-xs" value="Delete">
                                                            @endauth
                                                        </form>
                                                      
                                                    </td>
                                                </tr>
                                        @empty
                                            <h3><b>Jurnal belum ada!</b></h3>	
                                        @endforelse
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection