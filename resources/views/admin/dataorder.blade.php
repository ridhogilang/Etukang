@extends('layout.admin')

@push('header')
    <link rel="stylesheet" href="{{ asset('admin/vendor/jquery-datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/sweetalert/sweetalert.css') }}" />
    <style>
        td.details-control {
            background: url('{{ asset('admin/images/details_open.png') }}') no-repeat center center;
            cursor: pointer;
        }

        tr.shown td.details-control {
            background: url('{{ asset('admin/images/details_close.png') }}') no-repeat center center;
        }
    </style>
@endpush

@section('container')
    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Tabel Data Order</h2>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Order</li>
                        <li class="breadcrumb-item active">Data Order</li>
                    </ul>
                    <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create New</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">

            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Data Order Tukang</h2>
                        <ul class="header-dropdown dropdown dropdown-animated scale-left">
                            <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i
                                        class="icon-refresh"></i></a></li>
                            <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false"></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another Action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        {{-- <button id="addToTable" class="btn btn-primary m-b-15" type="button">
                            <i class="icon wb-plus" aria-hidden="true"></i> Add row
                        </button> --}}
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tukang</th>
                                        <th>Layanan</th>
                                        <th>Kecamatan</th>
                                        <th>Saldo</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tukang</th>
                                        <th>Layanan</th>
                                        <th>Kecamatan</th>
                                        <th>Saldo</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @if (Auth::user()->role_id == 3)
                                        @foreach ($data as $post)
                                            <tr class="gradeA">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $post['nama'] }}</td>
                                                <td>{{ $post->tukang->nama }}</td>
                                                <td>{{ $post->jenislayanan->jenis }}</td>
                                                <td>{{ $post->kecamatan->kabupaten }}</td>
                                                <td>{{ 'Rp. ' . number_format($post->harga * 1.11, 0, ',', '.') }}</td>
                                                <td class="actions">
                                                    @if ($post->otw == 0 && $post->selesai == 0)
                                                        <button class="btn btn-primary" id="otw-btn-{{ $post->id }}"
                                                            data-action="otw" data-id="{{ $post->id }}">Menuju
                                                            Lokasi</button>
                                                    @elseif ($post->otw == 1 && $post->selesai == 0)
                                                        <button class="btn btn-primary"
                                                            id="selesai-btn-{{ $post->id }}" data-action="selesai"
                                                            data-id="{{ $post->id }}">Selesai</button>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    @elseif(Auth::user()->role_id == 1)
                                        @foreach ($semua as $post)
                                            <tr class="gradeA">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $post['nama'] }}</td>
                                                <td>{{ $post->tukang->nama }}</td>
                                                <td>{{ $post->jenislayanan->jenis }}</td>
                                                <td>{{ $post->kecamatan->kabupaten }}</td>
                                                <td>{{ 'Rp. ' . number_format($post->harga * 1.11, 0, ',', '.') }}</td>
                                                <td class="actions">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save"
                                                        data-toggle="tooltip" data-original-title="Save" hidden><i
                                                            class="icon-drawer" aria-hidden="true"></i></a>
                                                        <button
                                                            class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard"
                                                            data-toggle="tooltip" data-original-title="Discard" hidden><i
                                                                class="icon-close" aria-hidden="true"></i></a>
                                                            <button
                                                                class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit"
                                                                data-toggle="tooltip" data-original-title="Edit"><i
                                                                    class="icon-pencil" aria-hidden="true"></i></a>
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                                    data-toggle="tooltip" data-original-title="Remove"><i
                                                                        class="icon-trash" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @elseif(Auth::user()->role_id == 2)
                                        @foreach ($user as $post)
                                            <tr class="gradeA">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $post['nama'] }}</td>
                                                <td>{{ $post->tukang->nama }}</td>
                                                <td>{{ $post->jenislayanan->jenis }}</td>
                                                <td>{{ $post->kecamatan->kabupaten }}</td>
                                                <td>{{ 'Rp. ' . number_format($post->harga * 1.11, 0, ',', '.') }}</td>
                                                <td class="actions">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save"
                                                        data-toggle="tooltip" data-original-title="Save" hidden><i
                                                            class="icon-drawer" aria-hidden="true"></i></a>
                                                        <button
                                                            class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard"
                                                            data-toggle="tooltip" data-original-title="Discard" hidden><i
                                                                class="icon-close" aria-hidden="true"></i></a>
                                                            <button
                                                                class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit"
                                                                data-toggle="tooltip" data-original-title="Edit"><i
                                                                    class="icon-pencil" aria-hidden="true"></i></a>
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                                    data-toggle="tooltip" data-original-title="Remove"><i
                                                                        class="icon-trash" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('footer')
    <script src="{{ asset('admin/bundles/datatablescripts.bundle.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery-datatable/buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('admin/js/pages/tables/jquery-datatable.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Event delegation untuk menangani klik pada tombol yang dimuat dinamis
            document.body.addEventListener('click', function(e) {
                // Jika tombol 'Menuju Lokasi' diklik
                if (e.target && e.target.matches('button[data-action="otw"]')) {
                    const postId = e.target.getAttribute('data-id'); // Ambil ID dari atribut data-id
                    if (postId) { // Pastikan postId ada
                        console.log('Tombol "Menuju Lokasi" diklik, ID Post:', postId);
                        // Menampilkan konfirmasi SweetAlert sebelum melanjutkan
                        Swal.fire({
                            title: 'Apakah Anda yakin?',
                            text: "Ingin memproses pesanan ini menuju lokasi?",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Ya, Proses!',
                            cancelButtonText: 'Batal'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                updateStatus(postId,
                                'otw'); // Panggil fungsi untuk memperbarui status
                            }
                        });
                    } else {
                        console.error('ID tidak ditemukan pada tombol');
                    }
                }

                // Jika tombol 'Selesai' diklik
                if (e.target && e.target.matches('button[data-action="selesai"]')) {
                    const postId = e.target.getAttribute('data-id'); // Ambil ID dari atribut data-id
                    if (postId) { // Pastikan postId ada
                        console.log('Tombol "Selesai" diklik, ID Post:', postId);
                        // Menampilkan konfirmasi SweetAlert sebelum melanjutkan
                        Swal.fire({
                            title: 'Apakah Anda yakin?',
                            text: "Ingin menandai pesanan ini sebagai selesai?",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Ya, Selesaikan!',
                            cancelButtonText: 'Batal'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                updateStatus(postId,
                                'selesai'); // Panggil fungsi untuk memperbarui status
                            }
                        });
                    } else {
                        console.error('ID tidak ditemukan pada tombol');
                    }
                }
            });
        });

        // Fungsi untuk mengupdate status di server menggunakan AJAX
        function updateStatus(postId, action) {
            // Menyiapkan data yang akan dikirim ke server
            const data = {
                _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content'), // CSRF token
                id: postId
            };

            // Tentukan URL berdasarkan aksi (Menuju Lokasi atau Selesai)
            let url;
            let status;

            if (action === 'otw') {
                url = `/order/${postId}/otw`;
                status = {
                    otw: 1
                }; // Set otw menjadi true (1)
            } else if (action === 'selesai') {
                url = `/order/${postId}/selesai`;
                status = {
                    selesai: 1
                }; // Set selesai menjadi true (1)
            }

            // Mengirim request AJAX ke server
            fetch(url, {
                    method: 'POST', // Menggunakan POST untuk mengupdate data
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        ...data, // Menambahkan data yang sudah disiapkan sebelumnya
                        ...status, // Menambahkan status yang sesuai
                    })
                })
                .then(response => response.json()) // Mengambil respons dari server
                .then(data => {
                    if (data.success) {
                        console.log(`Status berhasil diperbarui untuk post ID ${postId}`);

                        // Menampilkan alert dengan SweetAlert
                        Swal.fire({
                            icon: 'success',
                            title: 'Status Berhasil Diperbarui',
                            text: `Status order ID ${postId} telah berhasil diperbarui menjadi ${action === 'otw' ? 'Menuju Lokasi' : 'Selesai'}.`,
                            confirmButtonText: 'OK'
                        }).then(() => {
                            // Reload halaman setelah alert ditutup
                            location.reload();
                        });

                        // Setelah berhasil update, ubah teks tombol sesuai status
                        const button = document.getElementById(`${action}-btn-${postId}`);
                        if (button) { // Pastikan tombol ada sebelum diubah
                            if (action === 'otw') {
                                button.textContent = 'Selesai'; // Ganti teks tombol menjadi 'Selesai'
                                button.setAttribute('data-action', 'selesai'); // Ubah action menjadi selesai
                            } else if (action === 'selesai') {
                                button.textContent = 'Selesai'; // Tombol tetap 'Selesai' jika sudah selesai
                                button.disabled = true; // Nonaktifkan tombol jika sudah selesai
                            }
                        } else {
                            console.error(`Tombol dengan ID ${action}-btn-${postId} tidak ditemukan`);
                        }
                    } else {
                        console.error('Gagal memperbarui status');
                    }
                })
                .catch(error => {
                    console.error('Terjadi kesalahan saat mengupdate status:', error);
                });
        }
    </script>
@endpush
