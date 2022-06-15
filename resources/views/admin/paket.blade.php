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
                        <h2 class="content-header-title float-left mb-0">Data Endorse</h2>
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
                                    <button type="button" class="btn btn-outline-primary mr-1 mb-1" data-toggle="modal" data-target="#CreateAdd">
                                        Tambah Data
                                    </button>

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
                                                    <th>Nama Endorse</th>
                                                    <th>Nama Paket</th>
                                                    <th>Keterangan</th>
                                                    <th>Harga</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $item)
                                                    <tr>
                                                        <td class="product-img"><img src="{{ asset('storage/avatar') }}/{{ $item->foto }}" alt="Img placeholder" width="200">
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->company }}</td>
                                                        <td>{{ $item->address_company }}</td>
                                                        <td>{{ $item->age }}</td>
                                                        <td>
                                                            <a href="{{ route('endorse.show',[$item->id]) }}" class="btn btn-icon btn-icon rounded-circle btn-flat-primary mr-1 mb-1"><i class="feather icon-eye"></i></a>
                                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-flat-success mr-1 mb-1" data-toggle="modal" data-target="#Update{{ $item->id }}"><i class="feather icon-edit"></i></button>
                                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-flat-danger mr-1 mb-1" data-toggle="modal" data-target="#Delete{{ $item->id }}"><i class="feather icon-trash"></i></button>
                                                        </td>
                                                        @include('admin.modal.endorse')
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
<div class="modal fade text-left" id="CreateAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Tambah Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('paket.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <label>Nama Endorse: </label>
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Nama Endorse" class="form-control">
                    </div>
                    <label>Nama Paket : </label>
                    <div class="form-group">
                        <input type="text" name="nama" placeholder="Nama Paket" class="form-control">
                    </div>
                    <label>Keterangan: </label>
                    <div class="form-group">
                        <input type="text" name="keterangan" placeholder="Keterangan" class="form-control">
                    </div>

                    <label>Harga : </label>
                    <div class="form-group">
                        <input type="text" name="harga" placeholder="Nama Instagram" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
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
