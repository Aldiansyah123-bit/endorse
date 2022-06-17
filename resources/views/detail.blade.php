@extends('layouts.web')

@section('css')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/plugins/forms/validation/form-validation.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/pages/app-ecommerce-details.css">
    <!-- END: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/vendors/css/tables/datatable/datatables.min.css">


    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">

    <!-- END: Custom CSS-->
@endsection

@section('content')
<div class="">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <!-- app ecommerce details start -->
            <section class="app-ecommerce-details">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-5 mt-2">
                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('storage/avatar') }}/{{ $data->foto }}" class="img-fluid" alt="product image">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <h5>Nama : {{ $data->nama }}
                                </h5>
                                <p class="text-success font-medium-2 mr-1 mb-0">Umur : {{ $data->umur }} Tahun</p>
                                <hr>
                                <p>Minat & Bakat : {{ $data->minat }}</p>
                                {{-- <div class="ecommerce-details-price d-flex flex-wrap">
                                    <p class="text-primary font-medium-3 mr-1 mb-0">Rp. {{ number_format($data->price) }}</p>
                                </div> --}}
                                <hr>
                                <p class="font-weight-bold mb-25"> Alamat : {{ $data->alamat }}
                                </p>
                                <p class="font-weight-bold"> Tinggi Badan : {{ $data->tinggi }}
                                    <p class="font-weight-bold"> Berat Badan : {{ $data->berat }}
                                    {{-- <p class="font-weight-bold"> <i class="feather icon-navigation mr-50 font-medium-2"></i>{{ $data->address_company }} --}}
                                </p>
                                <hr>
                                <form action="/transaksi" method="POST" enctype="multipart/form-data" class="form-horizontal" novalidate>
                                    @csrf
                                    <div class="form-group">
                                        <label class="font-weight-bold">Harga</label>
                                        <ul class="list-unstyled mb-0">
                                            @foreach ($paket as $item)
                                                <li class="d-inline-block mr-2">
                                                    <fieldset>
                                                        <label>
                                                            <input type="radio" name="harga" data-toggle="modal" data-target="#Update" value="{{ $item->harga }}">
                                                            {{ $item->nama }}
                                                        </label>
                                                    </fieldset>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">FORMULIR PEMESANAN</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            {{-- <form action="/transaksi" method="POST" enctype="multipart/form-data">
                                                @csrf --}}
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Nama / Olshop</label>
                                                            <div class="controls">
                                                                <input type="text" hidden name="endorse_id" class="form-control" value="{{ $data->id }}">
                                                                <input type="text" name="nama" class="form-control" data-validation-required-message="Nama Wajib di Isi" placeholder="Masukkan Nama / Olshop Anda">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <div class="controls">
                                                                <input type="email" name="email" class="form-control" data-validation-required-message="Email Wajib di Isi" placeholder="Massukkan Email">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Upload Bukti Pembayaran</label><br>
                                                            <div class="controls">
                                                                <input type="file" name="foto" class="form-control" data-validation-required-message="Bukti Pembayaran Wajib di Isi" placeholder="Upload Bukti Pembayaran" accept="image/jpeg,image/png,image/jpg">
                                                            </div>
                                                            <label class="font-size:10px;"><b> No Rekening Pembayaran : 19384958494 </b></label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Alamat</label>
                                                            <div class="controls">
                                                                <textarea type="text" name="alamat" class="form-control" data-validation-required-message="Alamat Anda Wajib di Isi" placeholder="Masukkan Alamat Anda" rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Catatan</label>
                                                            <div class="controls">
                                                                <textarea type="text" name="catatan" class="form-control" placeholder="Masukkan Catatan Anda" rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-outline-primary">Checkout</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div></form>
</div>
<!-- END: Content-->
<div class="modal fade text-left" id="Update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Detail Paket</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">

                    <table class="table">
                        <thead>
                            <tr>
                                <th class="border-0 text-uppercase small font-weight-bold">Nama Paket :</th>
                                <td>
                                    <b> {{ $item->nama }}</b>
                                </td>
                            </tr>
                            <tr>
                                <th class="border-0 text-uppercase small font-weight-bold">Harga :</th>
                                <th> Rp. {{ number_format($item->harga) }}</th>
                            </tr>
                            <tr>
                                <th class="border-0 text-uppercase small font-weight-bold">Keterangan :</th>
                                <th>{{ $item->keterangan }}</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')

    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('admin') }}/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('admin') }}/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('admin') }}/app-assets/js/core/app-menu.js"></script>
    <script src="{{ asset('admin') }}/app-assets/js/core/app.js"></script>
    <script src="{{ asset('admin') }}/app-assets/js/scripts/components.js"></script>

    <script src="{{ asset('admin') }}/app-assets/js/scripts/pages/bootstrap-toast.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('admin') }}/app-assets/js/scripts/forms/validation/form-validation.js"></script>
    <!-- END: Page JS-->
    <script src="{{ asset('admin') }}/app-assets/js/scripts/pages/app-ecommerce-details.js"></script>

        <!-- BEGIN: Page Vendor JS-->
        <script src="{{ asset('admin') }}/app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
        <script src="{{ asset('admin') }}/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
        <script src="{{ asset('admin') }}/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
        <script src="{{ asset('admin') }}/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
        <script src="{{ asset('admin') }}/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
        <script src="{{ asset('admin') }}/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
        <script src="{{ asset('admin') }}/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
        <script src="{{ asset('admin') }}/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>


@endsection
