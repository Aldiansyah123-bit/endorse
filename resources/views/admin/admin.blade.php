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
                        <h2 class="content-header-title float-left mb-0">DataTables</h2>
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
                                    <div class="table-responsive">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>
                                                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-flat-success mr-1 mb-1" data-toggle="modal" data-target="#Update"><i class="feather icon-edit"></i></button>
                                                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-flat-danger mr-1 mb-1" data-toggle="modal" data-target="#Delete"><i class="feather icon-trash"></i></button>
                                                    </td>
                                                    @include('admin.modal.endorse')
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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
                        <form action="#">
                            <div class="modal-body">
                                <label>Nama: </label>
                                <div class="form-group">
                                    <input type="text" placeholder="Nama" class="form-control">
                                </div>

                                <label>Alamat: </label>
                                <div class="form-group">
                                    <input type="text" placeholder="Alamat" class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" data-dismiss="modal">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
