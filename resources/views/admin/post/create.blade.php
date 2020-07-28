@extends('template_backend.template')
@section('content')

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Data Post</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        <li class="breadcrumb-item text-muted active">Tambah Post
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-12">
            <div class="card">
            <div class="card-body">

                @if(count($errors)>0)
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                            <strong>Error - </strong>{{ $error }}
                    </div>
                    @endforeach
                @endif

                @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                        <strong>Success - </strong>{{ Session('success') }}
                </div>
                @endif

            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data" class="mt-4">
            @csrf
            <div class="form-group">
                <h4 class="card-title">Judul Post</h4>
                <input type="text" name="judul" class="form-control">
            </div>
            <div class="form-group">
                <h4 class="card-title">Kategori Post</h4>
                <select class="form-control" name="category_id">
                    <option value="" holder>Pilih Kategori</option>
                    @foreach ($category as $result)
                    <option value="{{ $result->id }}">{{ $result->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <h4 class="card-title">Tags</h4>
                <select multiple="multiple" class="form-control tags" name="tags[]">
                    @foreach ($tags as $tags )
                    <option value="{{ $tags->id }}">{{ $tags->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <h4 class="card-title">Isi Content</h4>
                <textarea type="text" name="content" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <h4 class="card-title">Thumbnail</h4>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01" name="gambar">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
            </div>
            <div class="form-group">
                <button class="btn btn-rounded btn-primary btn-block">Simpan Post</button>
            </div>
        </form>

    </div>
    </div>
    <div class="form-group">
        <a href="{{ route('post.index') }}" class="btn btn-rounded btn-danger">Kembali</a>
        </div>
        </div>
            </div>
             </div>

@endsection


