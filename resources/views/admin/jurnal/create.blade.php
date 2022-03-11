@extends('layout.admin')

<!-- Breadcrumb -->
@section('br-menu')
    Jurnal
@endsection
@section('br-title')
    Tambah Jurnal
@endsection

<!-- Side Bar - Activate -->
@section('sb-jurnal', 'show')
@section('sb-jurnal-button', 'active')
@section('sb-jurnal-add', 'active')

<!-- Style -->
@push('style')
<link rel="stylesheet" href="{{asset('admin/assets/css/fonts.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/css/fonts.min.css')}}">
@endpush

<!-- Script -->
@push('script')
<script src="https://cdn.tiny.cloud/1/b3e6w4l9ra038lxzw31ylk4mproemhjzozdzm43psvebevgd/tinymce/5/tinymce.min.js" referrerpolicy="origin">
</script>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
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
                        <div class="col-md-6 col-lg-8 pb-3">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" name="judul" class="form-control">
                            </div>
                            @error('judul')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label>Penulis</label>
                                <input type="text" name="penulis" class="form-control">
                            </div>
                            @error('penulis')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label>Abstrak</label>
                                <textarea name="abstrak" class="form-control" rows="15"></textarea>
                            </div>
                            @error('abstrak')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-lg-4">	
                            <div class="form-group">
                                <label>Tahun</label>
                                <input type="number" name="tahun" class="form-control">
                            </div>
                            @error('tahun')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label>Kategori</label>
                                <select name="kategori_jurnal_id" class="form-control">
                                    <option>Umum</option>
                                    <option>Syariah</option>
                                    <option>Fiqih</option>
                                    <option>Aqidah</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Upload Cover</label>
                                <input type="file" name="cover" class="form-control-file">
                            </div>
                            <div class="form-group">
                                <label>Upload File</label>
                                <input type="file" name="file" class="form-control-file">
                            </div>			
                            <div class="card-action mt-3">
                                <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection