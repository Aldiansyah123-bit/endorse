@extends('layouts.admin')

@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- page users view start -->
            <section class="page-users-view">
                <div class="row">
                    <!-- account start -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Account</div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="users-view-image">
                                        <img src="{{ asset('storage/avatar') }}/{{ $data->foto }}" class="users-avatar-shadow w-100 rounded mb-2 pr-2 ml-1" alt="avatar">
                                    </div>
                                    <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                        <table>
                                            <tr>
                                                <td class="font-weight-bold">Nama</td>
                                                <td>{{ $data->nama }}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Umur</td>
                                                <td>{{ $data->umur }}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Alamat</td>
                                                <td>{{ $data->alamat }}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Tinggi Badan</td>
                                                <td>{{ $data->tinggi }}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Berat Badan</td>
                                                <td>{{ $data->berat }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-5">
                                        <table class="ml-0 ml-sm-0 ml-lg-0">
                                            <tr>
                                                <td class="font-weight-bold">Nama Instgram</td>
                                                <td>{{ $data->instgram }}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Jumlah Followers</td>
                                                <td>{{ $data->number }}</td>
                                            </tr>
                                            {{-- <tr>
                                                <td class="font-weight-bold">Alamat Perusahaan</td>
                                                <td>{{ $data->address_company }}</td>
                                            </tr> --}}
                                        </table>
                                    </div>
                                    <div class="col-12">
                                        <a href="{{ route('endorse.index') }}" class="btn btn-outline-primary mr-1"><i class="feather icon-skip-back mr-1"></i>Kembali</a>
                                        {{-- <button class="btn btn-outline-danger"><i class="feather icon-trash-2"></i> Delete</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- account end -->
                    <!-- information start -->
                    <div class="col-md-6 col-12 ">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title mb-2">Minat & Bakat</div>
                            </div>
                            <div class="card-body">
                                {{ $data->minat }}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page users view end -->

        </div>
    </div>
</div>
<!-- END: Content-->
@endsection
