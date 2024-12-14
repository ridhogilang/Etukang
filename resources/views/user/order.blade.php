@extends('layout.main')

@section('container')
<div class="header-base">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="title-base text-left">
                    <h1>form Order</h1>
                    <p>Formulir untuk memesan layanan dari eTukang. Anda dapat mengisi jenis layanan, deskripsi pekerjaan, alamat, kontak, dan waktu preferensi. eTukang akan memproses permintaan Anda dan menghubungi Anda untuk detail lebih lanjut.</p>
                </div>
            </div>
            <div class="col-md-3">
                <ol class="breadcrumb b white">
                    <li><a href="/">Home</a></li>
                    <li><a href="/tukang">Tukang</a></li>
                    <li class="active">Form Order</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="section-empty section-item">
    <div class="container content">
        @if (session('status') === 'success')
        <div class="success-box">
            <div class="alert alert-success">
                Congratulations. Anda telah berhasil melakukan pendaftaran akun
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        @elseif (session('status') === 'error')
            <div class="error-box">
                <div class="alert alert-warning">
                    Error, please retry. Pendaftaran akun gagal
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        @endif        
        <div class="row">
            <div class="col-md-9">
                <h2>Data Tukang</h2>
                <hr class="space m" />
                <form action="/order" class="form-box" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <input value="{{ old('tukang_id', $post->user_id) }}" id="tukang_id" name="tukang_id" type="hidden">
                            <p>Nama Tukang</p>
                            <input value="{{ old('nama', $post->nama) }}" id="namatukang" name="namatukang" placeholder="name" type="text" class="form-control form-value" required readonly>
                        </div>
                        <div class="col-md-6">
                            <p>Jenis Layanan</p>
                            <input value="{{ old('jenislayanan', $post->jenislayanan->jenis) }}" id="jenislayanan" name="jenislayanan" placeholder="Jenis Layanan" type="text" class="form-control form-value" required readonly>
                            <input value="{{ old('jenislayanan', $post->jenislayanan->id) }}" id="jenislayanan_id" name="jenislayanan_id" type="hidden">
                        </div>
                        <div class="col-md-6">
                            <p>Kabupaten</p>
                            <input value="{{ old('kabupaten', $post->kecamatan->kabupaten) }}" id="kecamatan" name="kabupaten" placeholder="kabupaten" type="text" class="form-control form-value" required readonly>
                            <input value="{{ $invoice }}" id="invoice" name="invoice" type="hidden">

                        </div>
                        <div class="col-md-6">
                            <p>Alamat</p>
                            <input value="{{ old('alamat_tukang', $post->alamat) }}" id="alamat_tukang" name="alamat_tukang" placeholder="alamat" type="text" class="form-control form-value" required readonly>
                        </div>
                    </div>
                    <hr class="space xs" />
                    <p>Deskripsi Tukang</p>
                    <hr class="space xs" />
                    <textarea id="messagge" name="messagge" class="form-control form-value" required readonly>{{ old('deskripsi', $post->deskripsi) }}</textarea>
                    <hr class="space s" />
                    <div class="row">
                        <div class="col-md-6">
                            <p>Jasa</p>
                            <input value="{{ 'Rp. ' . number_format($post->jenislayanan->harga, 0, ',', '.') }}" id="hargaa" name="hargaa" placeholder="hargaa" type="text" class="form-control form-value" required readonly>
                            <input value="{{ old('harga', $post->jenislayanan->harga) }}" id="harga" name="harga" type="hidden" required>
                            <h6>*Harga belum termasuk PPN dan perbaikan sparepart kerusakan</h6>
                        </div>
                    </div>
                    <hr class="space m" />
                    <hr />
                    <hr class="space m" />
                    <h2>Order Form</h2>
                    <hr class="space m" />
                    <div class="row">
                        <div class="col-md-6">
                            <input value="{{ auth()->user()->id }}" id="user_id" name="user_id" type="hidden">
                            <p>Nama Pemesan</p>
                            <input id="nama" name="nama" placeholder="Nama Pemesan" value="{{ auth()->user()->username }}" type="text" class="form-control form-value" required>
                        </div>
                        <div class="col-md-4">
                            <p>Kabupaten</p>
                            <select name="kecamatan_id" id="kecamatan_id" class="form-control form-value">
                                <option value="">Pilih Kabupaten</option>                                    
                                @foreach ($kecamatan as $item)
                                    <option value="{{ $item->id }}">{{ $item->kabupaten }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <p>Alamat Pemesan</p>
                            <input id="alamat" name="alamat" placeholder="Alamat Pemesan" type="text" class="form-control form-value" required>
                        </div>
                        <div class="col-md-6">
                            <p>Tanggal Pemesanan</p>
                            <input name="tanggal" id="tanggal" type="text" data-toggle="datepicker" class="form-control form-value" placeholder="Pilih tanggal pemesanan" required>
                        </div>
                        <hr class="space xs" />
                        <p>Deskripsi Kerusakan</p>
                        <hr class="space xs" />
                        <textarea id="kerusakan" name="kerusakan" class="form-control form-value" required></textarea>
                        <hr class="space s" />

                        <button class="btn-sm btn" type="submit">Order Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('footer')
    <script src="{{ asset('user/scripts/php/datepicker.min.js') }}"></script>
@endpush