@extends('layouts.admin')

@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <!-- app ecommerce details start -->
            {{-- <div class="app-ecommerce-details"> --}}
                <div class="content-overlay"></div>
                <div class="header-navbar-shadow"></div>
                <div class="content-wrapper">
                    <div class="content-body">
                        <!-- app ecommerce details start -->
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body p-0">
                                            <div class="row p-5">
                                                <div class="col-md-6">
                                                    <img src="{{ asset('admin/app-assets/images/logo/logo-primary.png') }}">
                                                </div>

                                                <div class="col-md-6 text-right">
                                                    <p class="font-weight-bold mb-1">INVOICE {{ $data->no_invoice }}</p>
                                                    <p class="text-muted">Tanggal {{ Date::parse($data->crated_at)->format('j F Y') }}</p>
                                                </div>
                                            </div>

                                            <hr class="my-5">

                                            <div class="row pb-5 p-5">
                                                <div class="col-md-6">
                                                    <p class="font-weight-bold mb-4">Informasi Pemesanan</p>
                                                    <p class="mb-1">Nama : {{ $data->nama }}</p>
                                                    {{-- <p>Acme Inc</p> --}}
                                                    <p class="mb-1">Alamat : {{ $data->alamat }}</p>
                                                    <p class="mb-1">Email : {{ $data->email }}</p>
                                                </div>

                                                <div class="col-md-6 text-right">
                                                    <p class="font-weight-bold mb-4">Catatan</p>
                                                    <p class="mb-1">{{ $data->catatan }}</p>
                                                </div>
                                            </div>

                                            <div class="row p-5">
                                                <div class="col-md-12 text-center">
                                                    <img src="{{ asset('storage/bukti') }}/{{ $data->foto }}" width="800">
                                                </div>
                                            </div>

                                            <div class="row p-5">
                                                <div class="col-md-12">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th class="border-0 text-uppercase small font-weight-bold">Foto</th>
                                                                <th class="border-0 text-uppercase small font-weight-bold">Nama Endorse</th>
                                                                <th class="border-0 text-uppercase small font-weight-bold">Umur</th>
                                                                <th class="border-0 text-uppercase small font-weight-bold">Alamat</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <img src="{{ asset('storage/avatar') }}/{{ $data->endorse->foto }}" width="200">
                                                                </td>
                                                                <td>{{ $data->endorse->nama }}</td>
                                                                <td>{{ $data->endorse->umur }}</td>
                                                                <td>{{ $data->endorse->alamat }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row-reverse bg-dark text-white p-4">
                                                <div class="py-3 px-5 text-right">
                                                    <div class="mb-2">Harga</div>
                                                    <div class="h2 font-weight-light">Rp. {{ number_format($data->harga) }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-light mt-5 mb-5 text-center small">by : <a class="text-light" target="_blank" href="http://totoprayogo.com">totoprayogo.com</a></div>

                        </div>


                    </div>
                </div>
            </div>
            <!-- app ecommerce details end -->

        </div>
    </div>
</div>
<!-- END: Content-->

@endsection
