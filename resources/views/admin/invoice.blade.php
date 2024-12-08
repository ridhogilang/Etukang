@extends('layout.admin')

@push('header')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .progress-order-bar {
            width: 100%;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(20px, 1fr));
        }

        .progress-step {
            text-align: center;
            position: relative;
        }

        .progress-step:before,
        .progress-step:after {
            background-color: #c0a359;
            content: "";
            height: 2px;
            position: absolute;
            z-index: 0;
            top: 20px;
        }

        .progress-step:after {
            left: 50%;
            width: 100%;
        }

        .progress-step:last-of-type.is-active:after {
            background-color: #c0a359;
        }

        @media screen and (min-width: 640px) {
            .progress-step:first-of-type:before {
                right: 50%;
                width: 50%;
            }
        }

        @media screen and (max-width: 640px) {

            .progress-step:first-of-type:before,
            .progress-step:last-of-type:after {
                background-color: white !important;
            }
        }

        .progress-step:last-of-type:after {
            left: 50%;
            width: 50%;
        }

        .progress-step:last-of-type .step-line {
            width: 50%;
            right: 0;
        }

        .progress-step .step-count {
            background-color: #c0a359;
            height: 50px;
            width: 50px;
            margin: 0 auto;
            border-radius: 50%;
            color: white;
            line-height: 50px;
            /* Menjaga ikon tetap berada di tengah */
            z-index: 10;
            /* Menjadikan ikon di atas garis */
            font-size: 1.5rem;
            /* Ukuran ikon */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .progress-step .step-count i {
            font-size: 1.2rem;
            /* Ukuran ikon */
            color: white;
        }


        .progress-step.is-active .step-description {
            font-weight: 500;
        }

        .progress-step.is-active:after {
            background-color: #dad6ce;
        }

        .progress-step.is-active~.progress-step .step-count {
            background-color: #dad6ce;
        }

        .progress-step.is-active~.progress-step:after {
            background-color: #dad6ce;
        }

        .step-description {
            font-size: 0.8rem;
        }
    </style>
@endpush

@section('container')
    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Invoices</h2>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Invoice</li>
                        <li class="breadcrumb-item active">Detail Invoice</li>
                    </ul>
                    <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create New</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            @if (session('status') === 'success')
                <div class="success-box">
                    <div class="alert alert-success">
                        Pesanan anda telah berhasil. Silahkan lakukan pembayaran agar pesanan anda dapat segera di proses
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @elseif (session('status') === 'error')
                <div class="error-box">
                    <div class="alert alert-warning">
                        error, pesanan anda gagal silahkan ulangi lagi !!!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @endif

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Your Invoice</h2>
                            <ul class="header-dropdown dropdown dropdown-animated scale-left">
                                <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i
                                            class="icon-refresh"></i></a></li>
                                <li><a href="javascript:void(0);" class="full-screen"><i
                                            class="icon-size-fullscreen"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Print Invoices</a></li>
                                        <li role="presentation" class="divider"></li>
                                        <li><a href="javascript:void(0);">Export to XLS</a></li>
                                        <li><a href="javascript:void(0);">Export to CSV</a></li>
                                        <li><a href="javascript:void(0);">Export to XML</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        @if ($data)
                            <div class="body">
                                <h3>Invoice Details : <strong class="text-primary">#A0000{{ $data->id }}</strong></h3>
                                <ul class="nav nav-tabs-new2">
                                    <li class="nav-item inlineblock"><a class="nav-link active" data-toggle="tab"
                                            href="#details" aria-expanded="true">Details</a></li>
                                    <li class="nav-item inlineblock"><a class="nav-link" data-toggle="tab" href="#history"
                                            aria-expanded="false">History</a></li>
                                </ul>
                                <div class="tab-content mt-3">
                                    <div role="tabpanel" class="tab-pane in active" id="details" aria-expanded="true">
                                        <div class="row clearfix">
                                            <div class="col-md-6 col-sm-6">
                                                <address>
                                                    <strong>{{ $data->nama }}</strong><br>
                                                    {{ $data->alamat }}<br>
                                                    {{ $data->kecamatan->kecamatan }}<br>
                                                </address>
                                            </div>
                                            <div class="col-md-6 col-sm-6 text-right">
                                                <p class="m-b-0"><strong>Order Date: </strong>
                                                    {{ $data->created_at->format('F d, Y') }}</p>
                                                <p><strong>Order ID: </strong> #00{{ $data->id }}</p>
                                                <p class="m-b-0"><strong>Order Status: </strong><span
                                                        class="badge badge-success m-b-0">Panding</span></p>
                                                <hr class="space xs" />
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Item</th>
                                                                <th class="hidden-sm-down">Description</th>
                                                                <th>Quantity</th>
                                                                <th class="hidden-sm-down">Unit Cost</th>
                                                                <th>Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>{{ $data->jenislayanan->jenis }}</td>
                                                                <td class="hidden-sm-down">{{ $data->kerusakan }}</td>
                                                                <td>1</td>
                                                                <td class="hidden-sm-down">
                                                                    {{ 'Rp. ' . number_format($data->harga, 0, ',', '.') }}
                                                                </td>
                                                                <td>{{ 'Rp. ' . number_format($data->harga, 0, ',', '.') }}
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row clearfix">
                                            <div class="col-md-6">
                                                <h6>Note</h6>
                                                <p>Harap lakukan pembayaran melalui virtual account yang sudah ada</p>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <p class="m-b-0">
                                                    <b>Sub-total:</b>{{ 'Rp. ' . number_format($data->harga, 0, ',', '.') }}
                                                </p>
                                                <p class="m-b-0">Taq: 11%</p>
                                                <h3 class="m-b-0 m-t-10">
                                                    {{ 'Rp. ' . number_format($data->harga * 1.11, 0, ',', '.') }}
                                                    <hr class="space xs" />
                                                    <h6>Virtual Account : {{ $data->invoice }}</h6>

                                                </h3>
                                            </div>
                                            <div class="hidden-print col-md-12 text-right">
                                                <hr>
                                                <button class="btn btn-outline-secondary"><i
                                                        class="icon-printer"></i></button>
                                                <button class="btn btn-primary" id="copyButton">Copy Virtual
                                                    Account</button>
                                                <input type="text" id="copyInput" value="{{ $data->invoice }}"
                                                    style="position: absolute; left: -9999px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="history" aria-expanded="false">
                                        <div class="row clearfix">
                                            <div class="col-md-6 col-sm-6">
                                                <address>
                                                    <strong>{{ $data->nama }}</strong><br>
                                                    {{ $data->alamat }}<br>
                                                    {{ $data->kecamatan->kecamatan }}<br>
                                                </address>
                                            </div>
                                            <div class="col-md-6 col-sm-6 text-right">
                                                <p class="m-b-0"><strong>Order Date: </strong>
                                                    {{ $data->created_at->format('F d, Y') }}</p>
                                                <p><strong>Order ID: </strong> #00{{ $data->id }}</p>
                                                <p class="m-b-0"><strong>Order Status: </strong><span
                                                        class="badge badge-success m-b-0">Panding</span></p>
                                                <hr class="space xs" />
                                            </div>
                                        </div>
                                        <div class="mt-40"></div>
                                        <div class="mt-3 mb-5">
                                            <div class="progress-order-bar">
                                                <div class="progress-step">
                                                    <div class="step-line"></div> <!-- Garis Progress -->
                                                    <div class="step-count">
                                                        <i class="fas fa-cart-plus"></i> <!-- Ikon untuk Pemesanan -->
                                                    </div>
                                                    <div class="step-description">Pemesanan</div>
                                                </div>
                                                <div class="progress-step is-active">
                                                    <div class="step-line"></div> <!-- Garis Progress -->
                                                    <div class="step-count">
                                                        <i class="fas fa-credit-card"></i> <!-- Ikon untuk Pembayaran -->
                                                    </div>
                                                    <div class="step-description">Pembayaran</div>
                                                </div>
                                                <div class="progress-step">
                                                    <div class="step-line"></div> <!-- Garis Progress -->
                                                    <div class="step-count">
                                                        <i class="fas fa-truck"></i>
                                                        <!-- Ikon untuk Tukang Menuju Lokasi -->
                                                    </div>
                                                    <div class="step-description">Tukang Menuju Lokasi</div>
                                                </div>
                                                <div class="progress-step">
                                                    <div class="step-line"></div> <!-- Garis Progress -->
                                                    <div class="step-count">
                                                        <i class="fas fa-hammer"></i> <!-- Ikon untuk Pengerjaan -->
                                                    </div>
                                                    <div class="step-description">Pengerjaan</div>
                                                </div>
                                                <div class="progress-step">
                                                    <div class="step-line"></div> <!-- Garis Progress -->
                                                    <div class="step-count">
                                                        <i class="fas fa-check"></i> <!-- Ikon untuk Selesai -->
                                                    </div>
                                                    <div class="step-description">Selesai</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Description</th>
                                                                <th>Date</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Invoice Created</td>
                                                                <td>{{ $data->created_at->format('d M, Y') }}</td>
                                                                <td><span class="badge badge-success">Success</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Invoice Sent</td>
                                                                <td>{{ $data->created_at->format('d M, Y') }}</td>
                                                                <td><span class="badge badge-success">Success</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Invoice Paid</td>
                                                                <td>Waiting for payment..</td>
                                                                <td><span class="badge badge-default">Panding</span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="body">
                                <h4>You do not have an invoice at all</h4>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('footer')
    <script>
        document.getElementById('copyButton').addEventListener('click', function() {
            var copyInput = document.getElementById('copyInput');
            copyInput.select();
            copyInput.setSelectionRange(0, 99999);
            document.execCommand('copy');
            alert('Nomor Virtual Account berhasil disalin!');
        });
    </script>
@endpush
