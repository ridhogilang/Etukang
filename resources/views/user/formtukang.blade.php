@extends('layout.main')

@section('container')

<body>
    <div class="header-title ken-burn-out white" data-parallax="scroll" data-natural-height="800" data-natural-width="1920" data-image-src="{{ asset('user/img/17.jpg') }}">
        <div class="container">
            <div class="title-base">
                <hr class="anima" />
                <h1>Careers</h1>
                <p>Ayo, bergabunglah dengan kami dan menjadi bagian dari tim E-tukang sebagai mitra tukang. Nikmati kesempatan untuk berkembang dan meraih sukses bersama-sama dengan dukungan penuh dari kami!</p>
            </div>
        </div>
    </div>
    <div class="section-empty bg-white">
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
                <div class="col-md-3">
                    <h2>CONTACTS US</h2>
                    <hr class="space m" />
                    <ul class="fa-ul ul-dots">
                        <li>Jl. Tentara Rakyat Mataram No.55-57</li>
                        <li>Kota Yogyakarta, DIY</li>
                        <li>etukang@gmail.com</li>
                        <li>+62 876 8765 9875</li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <hr class="space visible-sm" />
                    <form action="/form" method="post" class="form-box">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input value="{{ auth()->user()->id }}" id="tukang_id" name="tukang_id" type="hidden">
                                <p>Nama</p>
                                <input id="nama" name="nama" placeholder="" type="text" class="form-control form-value" required>
                            </div>
                            <div class="col-md-6">
                                <p>Jenis Layanan</p>
                                <select name="jenislayanan_id" id="jenislayanan_id" class="form-control form-value">
                                    <option value="">Pilih Layanan</option>                                    
                                    @foreach ($layanan as $item)
                                        <option value="{{ $item->id }}">{{ $item->jenis }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <hr class="space xs" />
                        <div class="row">
                            <div class="col-md-6">
                                <p>Alamat</p>
                                <input id="alamat" name="alamat" placeholder="" type="text" class="form-control form-value" required>
                            </div>
                            <div class="col-md-3">
                                <p>Kecamatan</p>
                                <select name="kecamatan_id" id="kecamatan_id" class="form-control form-value">
                                    <option value="">Pilih Kecamatan</option>                                    
                                    @foreach ($kecamatan as $item)
                                        <option value="{{ $item->id }}">{{ $item->kecamatan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <hr class="space xs" />
                        <div class="row">
                            <div class="col-md-6">
                                <p>Nomor</p>
                                <input id="nomor" name="nomor" placeholder=" " type="text" class="form-control form-value">
                            </div>
                            <div class="col-md-6">
                                <p>Sertifikat</p>
                                <label>
                                    <input type="radio" id="sertifikat" name="sertifikat" value="ada"> Sudah Punya
                                </label>
                                <label>
                                    <input type="radio" id="sertifikat" name="sertifikat" value="tidak"> Belum Punya
                                </label>
                            </div>                                                  
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <hr class="space xs" />
                                <p>Deskripsi</p>
                                <textarea id="deskripsi" name="deskripsi" class="form-control form-value" required></textarea>
                                <hr class="space s" />
                                <button class="btn-sm btn" type="submit">Send inquiry</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
