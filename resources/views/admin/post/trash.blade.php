@extends('template_backend.template')
@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Trash Post</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        <li class="breadcrumb-item text-muted active">Trash Post List
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                    <strong>Success - </strong>{{ Session('success') }}
            </div>
            @endif
            
                <br>
                <div class="table-responsive">
                    <table id="table1" class="table table-striped table-bordered no-wrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Thumbnail</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($post as $result)
                                
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $result->judul }}</td>
                                <td>{{ $result->category->name }}</td>
                                <td><img src="{{ asset( $result->gambar) }}" class="img-fluid" style="width: 100px;"></td>
                                <td class="text-center" width="150px">
                                    
                                <form action="{{ route('post.kill', $result->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                        <a href="{{ route('post.restore', $result->id) }}" class="btn btn-success btn-circle">
                                                <i class="fas fa-recycle"></i>
                                            </a>
                                            <button type="submit" class="btn btn-danger btn-circle">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                        
                                    </td>
                            </tr>
                            @endforeach
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