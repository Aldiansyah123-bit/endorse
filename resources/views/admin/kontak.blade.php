@extends('layouts.admin')

@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Data Kontak</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Zero configuration table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    {{-- <button type="button" class="btn btn-outline-primary mr-1 mb-1" data-toggle="modal" data-target="#CreateAdd">
                                        Tambah Data
                                    </button> --}}

                                    @if (session('message'))
                                        <div class="alert alert-primary" role="alert">
                                            {{-- <h4 class="alert-heading">Primary</h4> --}}
                                            <p class="mb-0">
                                                {{session('message')}}
                                            </p>
                                        </div>
                                        {{-- <div class="alert alert-success alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                <h5><i class="icon fas fa-check"></i> {{session('message')}}</h5>
                                        </div> --}}
                                    @endif
                                    <div class="table-responsive">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Pesan</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $item)
                                                    <tr>
                                                        <td>{{ $item->nama }}</td>
                                                        <td>{{ $item->email }}</td>
                                                        <td>{{ $item->pesan }}</td>
                                                        <td>
                                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-flat-info mr-1 mb-1" data-toggle="modal" data-target="#Show{{ $item->id }}"><i class="feather icon-eye"></i></button>
                                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-flat-danger mr-1 mb-1" data-toggle="modal" data-target="#Delete{{ $item->id }}"><i class="feather icon-trash"></i></button>
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
            </section>
        </div>
    </div>
</div>

{{-- modal --}}
<div class="modal fade text-left" id="Delete{{ $item->id ?? '' }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Delete</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('kontak.destroy',[$item->id ?? '']) }}" method="POST">
                @csrf
                @method('delete')
                <div class="modal-body">
                    Apakah data ingin dihapus
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Hapus</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade text-left" id="Show{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Detail Data </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- <form action="{{ route('paket.update',[$item->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') --}}
                <div class="modal-body">
                    <label>Nama </label>
                    <div class="form-group">
                        <input type="text" placeholder="Nama Paket" class="form-control" value="{{ $item->nama }}" readonly>
                    </div>
                    <label>Email </label>
                    <div class="form-group">
                        <input type="text" placeholder="Keterangan" class="form-control" value="{{ $item->email }}" readonly>
                    </div>

                    <label>Pesan</label>
                    <div class="form-group">
                        <input type="text" placeholder="Nama Instagram" class="form-control" value="{{ $item->pesan }}" readonly>
                    </div>
                </div>
                {{-- <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div> --}}
            </form>
        </div>
    </div>
</div>
<script>
    @if (session('message'))
        toastr()->success('{{ session('message') }}');
    @endif
</script>
    <!-- /.modal-dialog --
@endsection
