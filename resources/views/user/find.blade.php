@extends('layout.main')

@push('header')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
@endpush

@section('container')

    <div class="header-title white" data-parallax="scroll" data-natural-height="1080" data-natural-width="1920"
        data-image-src="{{ asset('user/img/14.jpg') }}">
        <div class="container">
            <div class="title-base">
                <hr class="anima" />
                <h1>Cari Tukang Anda Disini!</h1>
                <p>Temukan tukang yang berkualitas dan berpengalaman dengan mudah melalui pencarian kami yang memungkinkan
                    Anda mencari berdasarkan kategori layanan, wilayah, dan ulasan pelanggan.</p>
            </div>
        </div>
    </div>
    <div class="section-empty">
        <div class="container content">
            <div class="mb-5">
                <div id="map" style="width: 100%; height: 700px;"></div>
            </div><br><br>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="tab-box left" data-tab-anima="fade-in">
                        <ul class="nav nav-tabs col-md-4">
                            <li class="active"><a>Semua Tukang</a></li>
                            <li><a>Tukang Kayu</a></li>
                            <li><a>Tukang Besi</a></li>
                            <li><a>Tukang Keramik</a></li>
                            <li><a>Tukang Air/Sumur</a></li>
                            <li><a>Tukang Kaca</a></li>
                            <li><a>Tukang Ac</a></li>
                            <li><a>Tukang Genteng/Plafon</a></li>
                            <li><a>Tukang Pipa</a></li>
                        </ul>
                        <div class="panel-box col-md-8">
                            <form action="">
                                <ul class="list-texts list-texts-justified">
                                    <div class="col-md-6">
                                        <label for="category">Layanan:</label>
                                        <select name="category" id="category" class="form-control form-value" required>
                                            <option value="">Pilih Layanan</option>
                                            @foreach ($layanan as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ request('category') == $item->id ? 'selected' : '' }}>
                                                    {{ $item->jenis }}</option>
                                            @endforeach
                                        </select>
                                        <button type="submit" class="btn btn-primary">Cari</button>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="kecamatan">Kabupaten :</label>
                                        <select name="kabupaten" id="kecamatan" class="form-control form-value" required>
                                            <option value="">Pilih Kabupaten</option>
                                            @foreach ($kecamatan as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ request('kabupaten') == $item->id ? 'selected' : '' }}>
                                                    {{ $item->kabupaten }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </ul>
                            </form>
                            <hr class="space xs" />
                            <br>
                            <div class="panel active">
                                <h2>Semua Tukang</h2>
                                <hr class="space l" />
                                <div class="row">
                                    @if ($semua->count())
                                        @foreach ($semua as $post)
                                            <div class="col-md-12">
                                                <div class="advs-box advs-box-side-img advs-box-blog boxed-inverse"
                                                    data-anima="scale-rotate" data-trigger="hover">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <a class="img-box">
                                                                <img class="anima"
                                                                    src="../../../images/gallery/image-1.jpg"
                                                                    alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h2><a>{{ $post['nama'] }}</a></h2>
                                                            <hr>
                                                            <div class="tag-row icon-row">
                                                                <span><i
                                                                        class="fa fa-calendar"></i><a>{{ $post->created_at->diffForHumans() }}</a></span>
                                                                <span><i class="fa fa-bookmark"></i><a
                                                                        href="#">{{ $post->jenislayanan->jenis }}</a></span>
                                                                <span><i
                                                                        class="fa fa-pencil"></i><a>{{ $post->kecamatan->kabupaten }}</a></span>
                                                            </div>
                                                            <p>
                                                                {{ $post['deskripsi'] }}
                                                            </p>
                                                            <a class="btn btn-xs"
                                                                href="/tukang/{{ $post['id'] }}">order</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="space s" />
                                            </div>
                                        @endforeach
                                    @else
                                        <p>We don't have any event yet here.</p>
                                    @endif
                                </div>
                                <div class="d-flex justify-content-center">
                                    {{ $semua->links() }}
                                </div>
                            </div>
                            <div class="panel">
                                <h2>Perbaikan Rumah</h2>
                                <hr class="space l" />
                                <div class="row">
                                    @if ($perbaikan->count())
                                        @foreach ($perbaikan as $post)
                                            <div class="col-md-12">
                                                <div class="advs-box advs-box-side-img advs-box-blog boxed-inverse"
                                                    data-anima="scale-rotate" data-trigger="hover">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <a class="img-box">
                                                                <img class="anima"
                                                                    src="../../../images/gallery/image-1.jpg"
                                                                    alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h2><a>{{ $post['nama'] }}</a></h2>
                                                            <hr>
                                                            <div class="tag-row icon-row">
                                                                <span><i
                                                                        class="fa fa-calendar"></i><a>{{ $post->created_at->diffForHumans() }}</a></span>
                                                                <span><i class="fa fa-bookmark"></i><a
                                                                        href="#">{{ $post->jenislayanan->jenis }}</a></span>
                                                                <span><i
                                                                        class="fa fa-pencil"></i><a>{{ $post->kecamatan->kabupaten }}</a></span>
                                                            </div>
                                                            <p>
                                                                {{ $post['deskripsi'] }}
                                                            </p>
                                                            <a class="btn btn-xs"
                                                                href="/tukang/{{ $post['id'] }}">order</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="space s" />
                                            </div>
                                        @endforeach
                                    @else
                                        <p>We don't have any event yet here.</p>
                                    @endif
                                </div>
                            </div>
                            <div class="panel">
                                <h2>Pemasangan dan Penggantian</h2>
                                <hr class="space l" />
                                <div class="row">
                                    @if ($pemasangan->count())
                                        @foreach ($pemasangan as $post)
                                            <div class="col-md-12">
                                                <div class="advs-box advs-box-side-img advs-box-blog boxed-inverse"
                                                    data-anima="scale-rotate" data-trigger="hover">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <a class="img-box">
                                                                <img class="anima"
                                                                    src="../../../images/gallery/image-1.jpg"
                                                                    alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h2><a>{{ $post['nama'] }}</a></h2>
                                                            <hr>
                                                            <div class="tag-row icon-row">
                                                                <span><i
                                                                        class="fa fa-calendar"></i><a>{{ $post->created_at->diffForHumans() }}</a></span>
                                                                <span><i class="fa fa-bookmark"></i><a
                                                                        href="#">{{ $post->jenislayanan->jenis }}</a></span>
                                                                <span><i
                                                                        class="fa fa-pencil"></i><a>{{ $post->kecamatan->kabupaten }}</a></span>
                                                            </div>
                                                            <p>
                                                                {{ $post['deskripsi'] }}
                                                            </p>
                                                            <a class="btn btn-xs"
                                                                href="/tukang/{{ $post['id'] }}">order</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="space s" />
                                            </div>
                                        @endforeach
                                    @else
                                        <p>We don't have any event yet here.</p>
                                    @endif
                                </div>
                            </div>
                            <div class="panel">
                                <h2>Pembersihan</h2>
                                <hr class="space l" />
                                <div class="row">
                                    @if ($pembersihan->count())
                                        @foreach ($pembersihan as $post)
                                            <div class="col-md-12">
                                                <div class="advs-box advs-box-side-img advs-box-blog boxed-inverse"
                                                    data-anima="scale-rotate" data-trigger="hover">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <a class="img-box">
                                                                <img class="anima"
                                                                    src="../../../images/gallery/image-1.jpg"
                                                                    alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h2><a>{{ $post['nama'] }}</a></h2>
                                                            <hr>
                                                            <div class="tag-row icon-row">
                                                                <span><i
                                                                        class="fa fa-calendar"></i><a>{{ $post->created_at->diffForHumans() }}</a></span>
                                                                <span><i class="fa fa-bookmark"></i><a
                                                                        href="#">{{ $post->jenislayanan->jenis }}</a></span>
                                                                <span><i
                                                                        class="fa fa-pencil"></i><a>{{ $post->kecamatan->kabupaten }}</a></span>
                                                            </div>
                                                            <p>
                                                                {{ $post['deskripsi'] }}
                                                            </p>
                                                            <a class="btn btn-xs"
                                                                href="/tukang/{{ $post['id'] }}">order</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="space s" />
                                            </div>
                                        @endforeach
                                    @else
                                        <p>We don't have any event yet here.</p>
                                    @endif
                                </div>
                            </div>
                            <div class="panel">
                                <h2>Renovasi</h2>
                                <hr class="space l" />
                                <div class="row">
                                    @if ($renovasi->count())
                                        @foreach ($renovasi as $post)
                                            <div class="col-md-12">
                                                <div class="advs-box advs-box-side-img advs-box-blog boxed-inverse"
                                                    data-anima="scale-rotate" data-trigger="hover">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <a class="img-box">
                                                                <img class="anima"
                                                                    src="../../../images/gallery/image-1.jpg"
                                                                    alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h2><a>{{ $post['nama'] }}</a></h2>
                                                            <hr>
                                                            <div class="tag-row icon-row">
                                                                <span><i
                                                                        class="fa fa-calendar"></i><a>{{ $post->created_at->diffForHumans() }}</a></span>
                                                                <span><i class="fa fa-bookmark"></i><a
                                                                        href="#">{{ $post->jenislayanan->jenis }}</a></span>
                                                                <span><i
                                                                        class="fa fa-pencil"></i><a>{{ $post->kecamatan->kabupaten }}</a></span>
                                                            </div>
                                                            <p>
                                                                {{ $post['deskripsi'] }}
                                                            </p>
                                                            <a class="btn btn-xs"
                                                                href="/tukang/{{ $post['id'] }}">order</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="space s" />
                                            </div>
                                        @endforeach
                                    @else
                                        <p>We don't have any event yet here.</p>
                                    @endif
                                </div>
                            </div>
                            <div class="panel">
                                <h2>Tukang Kayu</h2>
                                <hr class="space l" />
                                <div class="row">
                                    @if ($kayu->count())
                                        @foreach ($kayu as $post)
                                            <div class="col-md-12">
                                                <div class="advs-box advs-box-side-img advs-box-blog boxed-inverse"
                                                    data-anima="scale-rotate" data-trigger="hover">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <a class="img-box">
                                                                <img class="anima"
                                                                    src="../../../images/gallery/image-1.jpg"
                                                                    alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h2><a>{{ $post['nama'] }}</a></h2>
                                                            <hr>
                                                            <div class="tag-row icon-row">
                                                                <span><i
                                                                        class="fa fa-calendar"></i><a>{{ $post->created_at->diffForHumans() }}</a></span>
                                                                <span><i class="fa fa-bookmark"></i><a
                                                                        href="#">{{ $post->jenislayanan->jenis }}</a></span>
                                                                <span><i
                                                                        class="fa fa-pencil"></i><a>{{ $post->kecamatan->kabupaten }}</a></span>
                                                            </div>
                                                            <p>
                                                                {{ $post['deskripsi'] }}
                                                            </p>
                                                            <a class="btn btn-xs"
                                                                href="/tukang/{{ $post['id'] }}">order</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="space s" />
                                            </div>
                                        @endforeach
                                    @else
                                        <p>We don't have any event yet here.</p>
                                    @endif
                                </div>
                            </div>
                            <div class="panel">
                                <h2>Tukang Besi</h2>
                                <hr class="space l" />
                                <div class="row">
                                    @if ($besi->count())
                                        @foreach ($besi as $post)
                                            <div class="col-md-12">
                                                <div class="advs-box advs-box-side-img advs-box-blog boxed-inverse"
                                                    data-anima="scale-rotate" data-trigger="hover">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <a class="img-box">
                                                                <img class="anima"
                                                                    src="../../../images/gallery/image-1.jpg"
                                                                    alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h2><a>{{ $post['nama'] }}</a></h2>
                                                            <hr>
                                                            <div class="tag-row icon-row">
                                                                <span><i
                                                                        class="fa fa-calendar"></i><a>{{ $post->created_at->diffForHumans() }}</a></span>
                                                                <span><i class="fa fa-bookmark"></i><a
                                                                        href="#">{{ $post->jenislayanan->jenis }}</a></span>
                                                                <span><i
                                                                        class="fa fa-pencil"></i><a>{{ $post->kecamatan->kabupaten }}</a></span>
                                                            </div>
                                                            <p>
                                                                {{ $post['deskripsi'] }}
                                                            </p>
                                                            <a class="btn btn-xs"
                                                                href="/tukang/{{ $post['id'] }}">order</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="space s" />
                                            </div>
                                        @endforeach
                                    @else
                                        <p>We don't have any event yet here.</p>
                                    @endif
                                </div>
                            </div>
                            <div class="panel">
                                <h2>Tukang Listrik</h2>
                                <hr class="space l" />
                                <div class="row">
                                    @if ($listrik->count())
                                        @foreach ($listrik as $post)
                                            <div class="col-md-12">
                                                <div class="advs-box advs-box-side-img advs-box-blog boxed-inverse"
                                                    data-anima="scale-rotate" data-trigger="hover">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <a class="img-box">
                                                                <img class="anima"
                                                                    src="../../../images/gallery/image-1.jpg"
                                                                    alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h2><a>{{ $post['nama'] }}</a></h2>
                                                            <hr>
                                                            <div class="tag-row icon-row">
                                                                <span><i
                                                                        class="fa fa-calendar"></i><a>{{ $post->created_at->diffForHumans() }}</a></span>
                                                                <span><i class="fa fa-bookmark"></i><a
                                                                        href="#">{{ $post->jenislayanan->jenis }}</a></span>
                                                                <span><i
                                                                        class="fa fa-pencil"></i><a>{{ $post->kecamatan->kabupaten }}</a></span>
                                                            </div>
                                                            <p>
                                                                {{ $post['deskripsi'] }}
                                                            </p>
                                                            <a class="btn btn-xs"
                                                                href="/tukang/{{ $post['id'] }}">order</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="space s" />
                                            </div>
                                        @endforeach
                                    @else
                                        <p>We don't have any event yet here.</p>
                                    @endif
                                </div>
                            </div>
                            <div class="panel">
                                <h2>Tukang Pipa</h2>
                                <hr class="space l" />
                                <div class="row">
                                    @if ($pipa->count())
                                        @foreach ($pipa as $post)
                                            <div class="col-md-12">
                                                <div class="advs-box advs-box-side-img advs-box-blog boxed-inverse"
                                                    data-anima="scale-rotate" data-trigger="hover">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <a class="img-box">
                                                                <img class="anima"
                                                                    src="../../../images/gallery/image-1.jpg"
                                                                    alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h2><a>{{ $post['nama'] }}</a></h2>
                                                            <hr>
                                                            <div class="tag-row icon-row">
                                                                <span><i
                                                                        class="fa fa-calendar"></i><a>{{ $post->created_at->diffForHumans() }}</a></span>
                                                                <span><i class="fa fa-bookmark"></i><a
                                                                        href="#">{{ $post->jenislayanan->jenis }}</a></span>
                                                                <span><i
                                                                        class="fa fa-pencil"></i><a>{{ $post->kecamatan->kabupaten }}</a></span>
                                                            </div>
                                                            <p>
                                                                {{ $post['deskripsi'] }}
                                                            </p>
                                                            <a class="btn btn-xs"
                                                                href="/tukang/{{ $post['id'] }}">order</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="space s" />
                                            </div>
                                        @endforeach
                                    @else
                                        <p>We don't have any event yet here.</p>
                                    @endif
                                </div>
                            </div>
                            <div class="panel">
                                <h2>Best Tukang</h2>
                                <hr class="space l" />
                                <p>We don't have any event yet here.</p>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                {{-- <div class="col-md-3 col-sm-12">
                <div class="fixed-area" data-top="10" data-bottom="300">
                    <div class="row">
                        <div class="col-md-12 boxed white">
                            <h4 class="text-color">MANUFACTORING 2019 CONFERENCE</h4>
                            <p class="text-s">Lorem ipsum dolor sit amet consectetur adipiscing elitua.</p>
                            <hr />
                            <div class="countdown text-left text-m" data-time="02/21/2020 10:30:00" data-utc-offset="-5">
                                <div>
                                    <span class="days countdown-values text-m text-color">00</span><br /><span class="countdown-label text-xs">Days</span>
                                </div>
                                <div>
                                    <span class="hours countdown-values text-m text-color">00</span><br /><span class="countdown-label text-xs">Hours</span>
                                </div>
                                <div>
                                    <span class="minutes countdown-values text-m text-color">00</span><br /><span class="countdown-label text-xs">Mins</span>
                                </div>
                                <div>
                                    <span class="seconds countdown-values text-m text-color">00</span><br /><span class="countdown-label text-xs">Secs</span>
                                </div>
                            </div>
                            <hr class="space s" />
                            <a href="#" class="btn-border btn btn-xs">View event</a>
                        </div>
                    </div>
                </div>
            </div> --}}
            </div>
        </div>
    </div>

@endsection

@push('footer')
    {{-- <script>
        // Variabel peta global
        let map;
        const overlays = {}; // Untuk menyimpan layer tukang berdasarkan jenis layanan

        // Tile Layer untuk OpenStreetMap
        const osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
            maxZoom: 19
        });

        // Fungsi untuk mengambil data layanan dan tukang dari server
        async function fetchLayananWithTukang() {
            const response = await fetch('/api/layanan-tukang'); // Endpoint API
            const layanan = await response.json();

            // Verifikasi struktur data yang diterima
            console.log(layanan); // Untuk memastikan data yang diterima adalah objek yang benar

            // Pastikan layanan adalah objek
            if (typeof layanan !== 'object') {
                console.error('Data yang diterima bukan objek:', layanan);
                return; // Keluar dari fungsi jika data tidak sesuai
            }

            // Layer group untuk "Semua Layanan"
            const allTukangGroup = L.layerGroup(); // Semua tukang dari semua layanan

            // Iterasi objek layanan menggunakan Object.keys
            Object.keys(layanan).forEach(layananKey => {
                const tukangGroup = L.layerGroup();

                layanan[layananKey].forEach(tukang => {
                    const lokasi = tukang.lokasi.split(',');

                    // Pastikan lokasi valid
                    if (lokasi.length === 2) {
                        const lat = parseFloat(lokasi[0]);
                        const lon = parseFloat(lokasi[1]);

                        // Pastikan lat dan lon adalah angka yang valid
                        if (!isNaN(lat) && !isNaN(lon)) {
                            const marker = L.marker([lat, lon]).bindPopup(`
                        <b>${tukang.nama}</b><br>
                        Layanan: ${layananKey}<br>
                        Alamat: ${tukang.alamat}<br>
                        Deskripsi: ${tukang.deskripsi}<br>
                        Harga: Rp ${tukang.harga}
                    `);

                            tukangGroup.addLayer(marker);
                            allTukangGroup.addLayer(marker);
                        } else {
                            console.error('Koordinat tidak valid:', tukang.lokasi);
                        }
                    } else {
                        console.error('Format lokasi tidak benar:', tukang.lokasi);
                    }
                });

                // Menambahkan grup tukang ke kontrol overlay berdasarkan jenis layanan
                overlays[layananKey] = tukangGroup;
            });

            // Menambahkan layer group "Semua Layanan" ke kontrol overlay
            overlays['Semua Layanan'] = allTukangGroup;

            // Menambahkan kontrol layer untuk memilih overlay
            L.control.layers(null, overlays).addTo(map);

            // Menampilkan "Semua Layanan" secara default
            allTukangGroup.addTo(map);
        }

        // Fungsi untuk mengatur lokasi peta ke lokasi pengguna
        function setMapToUserLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    const userLat = position.coords.latitude;
                    const userLon = position.coords.longitude;
                    const userLocation = [userLat, userLon];

                    // Inisialisasi peta dengan lokasi pengguna
                    map = L.map('map', {
                        center: userLocation,
                        zoom: 13, // Sesuaikan zoom level sesuai kebutuhan
                        layers: [osm]
                    });

                    // Menambahkan lingkaran di lokasi pengguna
                    L.circle(userLocation, {
                        color: 'blue',
                        fillColor: '#30a0ff',
                        fillOpacity: 3,
                        radius: 100 // Radius dalam meter
                    }).addTo(map).bindPopup("Your Location");

                    // Memanggil fungsi untuk menambahkan tukang ke peta
                    fetchLayananWithTukang();
                }, function() {
                    alert("Lokasi pengguna tidak dapat diakses.");
                    fallbackToDefaultLocation(); // Fallback ke lokasi default
                });
            } else {
                alert("Geolocation tidak didukung oleh browser ini.");
                fallbackToDefaultLocation(); // Fallback ke lokasi default
            }
        }

        // Fungsi fallback jika geolocation gagal
        function fallbackToDefaultLocation() {
            const defaultLocation = [39.73, -104.99]; // Lokasi default, misalnya Denver
            map = L.map('map', {
                center: defaultLocation,
                zoom: 10,
                layers: [osm]
            });

            // Menambahkan lingkaran di lokasi default
            L.circle(defaultLocation, {
                color: 'red',
                fillColor: '#ff5733',
                fillOpacity: 0.5,
                radius: 10 // Radius dalam meter
            }).addTo(map).bindPopup("Default Location");

            // Memanggil fungsi untuk menambahkan tukang ke peta
            fetchLayananWithTukang();
        }

        // Panggil fungsi untuk mengatur lokasi peta
        setMapToUserLocation();
    </script> --}}
    <script>
        // Variabel peta global
        let map;
        const overlays = {}; // Untuk menyimpan layer tukang berdasarkan jenis layanan

        // Tile Layer untuk OpenStreetMap
        const osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
            maxZoom: 19
        });

        // Fungsi untuk mengambil data layanan dan tukang dari server
        async function fetchLayananWithTukang() {
            const response = await fetch('/api/layanan-tukang'); // Endpoint API
            const layanan = await response.json();

            // Verifikasi struktur data yang diterima
            console.log(layanan); // Untuk memastikan data yang diterima adalah objek yang benar

            // Pastikan layanan adalah objek
            if (typeof layanan !== 'object') {
                console.error('Data yang diterima bukan objek:', layanan);
                return; // Keluar dari fungsi jika data tidak sesuai
            }

            // Layer group untuk "Semua Layanan"
            const allTukangGroup = L.layerGroup(); // Semua tukang dari semua layanan

            // Warna marker untuk setiap layanan
            const warnaLayanan = {
                'Tukang Kayu': 'brown',
                'Tukang Besi': 'gray',
                'Tukang Keramik': 'blue',
                'Tukang Sumur': 'green',
                'Tukang Kaca': 'red',
                'Tukang AC': 'purple',
                'Tukang Genteng': 'orange',
                'Tukang Pipa': 'pink'
            };

            // Iterasi objek layanan menggunakan Object.keys
            Object.keys(layanan).forEach(layananKey => {
                const tukangGroup = L.layerGroup();

                layanan[layananKey].forEach(tukang => {
                    const lokasi = tukang.lokasi.split(',');

                    // Pastikan lokasi valid
                    if (lokasi.length === 2) {
                        const lat = parseFloat(lokasi[0]);
                        const lon = parseFloat(lokasi[1]);

                        // Pastikan lat dan lon adalah angka yang valid
                        if (!isNaN(lat) && !isNaN(lon)) {
                            // Tentukan warna marker berdasarkan layanan
                            const markerColor = warnaLayanan[layananKey];

                            // Buat marker dengan warna yang sesuai
                            const marker = L.marker([lat, lon], {
                                icon: L.icon({
                                    iconUrl: `https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-icon.png`,
                                    iconSize: [25, 41],
                                    iconAnchor: [12, 41],
                                    popupAnchor: [1, -34],
                                    shadowAnchor: [10, 25],
                                    shadowSize: [41, 41],
                                })
                            }).bindPopup(`
                            <b style="font-size: 18px;">${tukang.nama}</b><br>
                            <span style="font-size: 16px; color: #007bff;">Layanan: ${layananKey}</span><br><br>
                            Alamat: ${tukang.alamat}<br><br><br>
                            <a class="btn btn-xs" href="/tukang/${tukang.id}">Order</a>
                         `);

                            // Menambahkan tooltip dengan nama layanan di samping marker
                            marker.bindTooltip(layananKey, {
                                permanent: true,
                                direction: 'right', // Tooltip akan berada di sebelah kanan marker
                                offset: [10, 0], // Menambahkan offset untuk memberi jarak
                                className: 'custom-tooltip' // CSS class untuk styling tooltip
                            }).openTooltip();

                            tukangGroup.addLayer(marker);
                            allTukangGroup.addLayer(marker);
                        } else {
                            console.error('Koordinat tidak valid:', tukang.lokasi);
                        }
                    } else {
                        console.error('Format lokasi tidak benar:', tukang.lokasi);
                    }
                });

                // Menambahkan grup tukang ke kontrol overlay berdasarkan jenis layanan
                overlays[layananKey] = tukangGroup;
            });

            // Menambahkan layer group "Semua Layanan" ke kontrol overlay
            overlays['Semua Layanan'] = allTukangGroup;

            // Menambahkan kontrol layer untuk memilih overlay
            L.control.layers(null, overlays).addTo(map);

            // Menampilkan "Semua Layanan" secara default
            allTukangGroup.addTo(map);
        }



        // Fungsi untuk mengatur lokasi peta ke lokasi pengguna
        function setMapToUserLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    const userLat = position.coords.latitude;
                    const userLon = position.coords.longitude;
                    const userLocation = [userLat, userLon];

                    // Inisialisasi peta dengan lokasi pengguna
                    map = L.map('map', {
                        center: userLocation,
                        zoom: 13, // Sesuaikan zoom level sesuai kebutuhan
                        layers: [osm]
                    });

                    // Menambahkan lingkaran di lokasi pengguna
                    L.circle(userLocation, {
                        color: '#4285F4',
                        fillColor: '#C7D5EF',
                        fillOpacity: 1,
                        radius: 100 // Radius dalam meter
                    }).addTo(map).bindPopup("Your Location");

                    // Memanggil fungsi untuk menambahkan tukang ke peta
                    fetchLayananWithTukang();
                }, function() {
                    alert("Lokasi pengguna tidak dapat diakses.");
                    fallbackToDefaultLocation(); // Fallback ke lokasi default
                });
            } else {
                alert("Geolocation tidak didukung oleh browser ini.");
                fallbackToDefaultLocation(); // Fallback ke lokasi default
            }
        }

        // Fungsi fallback jika geolocation gagal
        function fallbackToDefaultLocation() {
            const defaultLocation = [39.73, -104.99]; // Lokasi default, misalnya Denver
            map = L.map('map', {
                center: defaultLocation,
                zoom: 10,
                layers: [osm]
            });

            // Menambahkan lingkaran di lokasi default
            L.circle(defaultLocation, {
                color: 'red',
                fillColor: '#ff5733',
                fillOpacity: 0.5,
                radius: 10 // Radius dalam meter
            }).addTo(map).bindPopup("Default Location");

            // Memanggil fungsi untuk menambahkan tukang ke peta
            fetchLayananWithTukang();
        }

        // Panggil fungsi untuk mengatur lokasi peta
        setMapToUserLocation();
    </script>
@endpush
