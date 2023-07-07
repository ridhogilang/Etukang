@extends('layout.admin')

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
                            <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                            <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
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
                            <li class="nav-item inlineblock"><a class="nav-link active" data-toggle="tab" href="#details" aria-expanded="true">Details</a></li>                                
                            <li class="nav-item inlineblock"><a class="nav-link" data-toggle="tab" href="#history" aria-expanded="false">History</a></li>
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
                                        <p class="m-b-0"><strong>Order Date: </strong> {{ $data->created_at->format('F d, Y') }}</p>
                                        <p><strong>Order ID: </strong> #00{{ $data->id }}</p>
                                        <p class="m-b-0"><strong>Order Status: </strong><span class="badge badge-success m-b-0">Panding</span></p>
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
                                                        <td class="hidden-sm-down">{{ 'Rp. ' . number_format($data->harga, 0, ',', '.') }}</td>
                                                        <td>{{ 'Rp. ' . number_format($data->harga, 0, ',', '.') }}</td>
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
                                        <p class="m-b-0"><b>Sub-total:</b>{{ 'Rp. ' . number_format($data->harga, 0, ',', '.') }}</p>
                                        <p class="m-b-0">Taq: 11%</p>                                     
                                        <h3 class="m-b-0 m-t-10">{{ 'Rp. ' . number_format($data->harga * 1.11, 0, ',', '.') }}
                                            <hr class="space xs" />
                                        <h6>Virtual Account : {{ $data->invoice }}</h6>

                                        </h3>
                                    </div>                                    
                                    <div class="hidden-print col-md-12 text-right">
                                        <hr>
                                        <button class="btn btn-outline-secondary"><i class="icon-printer"></i></button>
                                        <button class="btn btn-primary" id="copyButton">Copy Virtual Account</button>
                                        <input type="text" id="copyInput" value="{{  $data->invoice }}" style="position: absolute; left: -9999px;">
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
                                        <p class="m-b-0"><strong>Order Date: </strong> {{ $data->created_at->format('F d, Y') }}</p>
                                        <p><strong>Order ID: </strong> #00{{ $data->id }}</p>
                                        <p class="m-b-0"><strong>Order Status: </strong><span class="badge badge-success m-b-0">Panding</span></p>
                                        <hr class="space xs" />
                                    </div>
                                </div>
                                <div class="mt-40"></div>
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

