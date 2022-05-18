@extends('layouts.admin')

@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
{{-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> --}}
{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
<!------ Include the above in your HEAD tag ---------->

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        {{-- <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Transaksi Detail</h2>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrum-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                    </div>
                </div>
            </div>
        </div> --}}
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
                                                    <img src="http://via.placeholder.com/400x90?text=logo">
                                                </div>

                                                <div class="col-md-6 text-right">
                                                    <p class="font-weight-bold mb-1">Invoice #550</p>
                                                    <p class="text-muted">Due to: 4 Dec, 2019</p>
                                                </div>
                                            </div>

                                            <hr class="my-5">

                                            <div class="row pb-5 p-5">
                                                <div class="col-md-6">
                                                    <p class="font-weight-bold mb-4">Informasi Pemesanan</p>
                                                    <p class="mb-1">{{ $data->name }}</p>
                                                    <p>Acme Inc</p>
                                                    <p class="mb-1">{{ $data->address }}</p>
                                                    <p class="mb-1">{{ $data->phone }}</p>
                                                </div>

                                                <div class="col-md-6 text-right">
                                                    <p class="font-weight-bold mb-4">Payment Details</p>
                                                    <p class="mb-1"><span class="text-muted">VAT: </span> 1425782</p>
                                                    <p class="mb-1"><span class="text-muted">VAT ID: </span> 10253642</p>
                                                    <p class="mb-1"><span class="text-muted">Payment Type: </span> Root</p>
                                                    <p class="mb-1"><span class="text-muted">Name: </span> John Doe</p>
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
                                                                <th class="border-0 text-uppercase small font-weight-bold">ID</th>
                                                                <th class="border-0 text-uppercase small font-weight-bold">Item</th>
                                                                <th class="border-0 text-uppercase small font-weight-bold">Description</th>
                                                                <th class="border-0 text-uppercase small font-weight-bold">Quantity</th>
                                                                <th class="border-0 text-uppercase small font-weight-bold">Unit Cost</th>
                                                                <th class="border-0 text-uppercase small font-weight-bold">Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Software</td>
                                                                <td>LTS Versions</td>
                                                                <td>21</td>
                                                                <td>$321</td>
                                                                <td>$3452</td>
                                                            </tr>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Software</td>
                                                                <td>Support</td>
                                                                <td>234</td>
                                                                <td>$6356</td>
                                                                <td>$23423</td>
                                                            </tr>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Software</td>
                                                                <td>Sofware Collection</td>
                                                                <td>4534</td>
                                                                <td>$354</td>
                                                                <td>$23434</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row-reverse bg-dark text-white p-4">
                                                <div class="py-3 px-5 text-right">
                                                    <div class="mb-2">Grand Total</div>
                                                    <div class="h2 font-weight-light">$234,234</div>
                                                </div>

                                                <div class="py-3 px-5 text-right">
                                                    <div class="mb-2">Discount</div>
                                                    <div class="h2 font-weight-light">10%</div>
                                                </div>

                                                <div class="py-3 px-5 text-right">
                                                    <div class="mb-2">Sub - Total amount</div>
                                                    <div class="h2 font-weight-light">$32,432</div>
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
