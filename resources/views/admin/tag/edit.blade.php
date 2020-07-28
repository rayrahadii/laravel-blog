@extends('template_backend.template')
@section('content')

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Data Tag</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        <li class="breadcrumb-item text-muted active">Edit Tag
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


            <form action="{{ route('tag.update', $tag->id) }}" method="POST" class="mt-4">
            @csrf
            @method('patch')
            <div class="form-group">
                <h4 class="card-title">Nama Kategori</h4>
            <input type="text" name="name" value="{{ $tag->name }}" class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-rounded btn-primary btn-block">Update Tag</button>
            </div>
        </form>

    </div>
    </div>
    <div class="form-group">
        <a href="{{ route('tag.index') }}" class="btn btn-rounded btn-danger">Kembali</a>
        </div>
        </div>
            </div>
             </div>

@endsection