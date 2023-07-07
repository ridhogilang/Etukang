@extends('layout.main')

@section('container')

<div class="section-slider">
        <div class="flexslider slider white" data-options="animation:fade,controlNav:false,slideshowSpeed:4000">
            <ul class="slides">
                <li>
                    <div class="bg-cover" style="background-image:url('{{ asset('user/img/10.jpg') }}')"></div>
                </li>
                <li>
                    <div class="bg-cover" style="background-image:url('{{ asset('user/img/2.jpg') }}')"></div>
                </li>
            </ul>
        </div>
        <div class="container content overlay-content white">
            <div class="row">
                <div class="col-md-6">
                    <hr class="space" />
                    <h1 class="text-uppercase">Sulusi Tukang<br /> Terpercaya Anda</h1>
                    <p>Dapatkan layanan tukang terbaik, untuk seluruh kerusakan dengan sangat mudah dalam satu aplikasi.</p>
                    <hr class="space l" />
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <a href="/kontak" class="btn btn-sm btn-yellow nav-justified">Contact us</a>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <a href="/tukang" class="btn btn-sm btn-border nav-justified">Cari Tukang</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="space space-250" />
        </div>
    </div>
    <div class="section-empty section-over">
        <div class="container content">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="flexslider carousel outer-navs" data-options="minWidth:210,itemMargin:60,numItems:2,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <div class="advs-box advs-box-top-icon-img boxed-inverse text-left">
                                    <a class="img-box lightbox img-scale-up" href="#">
                                        <span><img src="{{ asset('user/img/5.jpg') }}" alt=""></span>
                                    </a>
                                    <div class="advs-box-content">
                                        <h3>Pemeliharaan Rumah</h3>
                                        <p>
                                            Banyak layanan yang tersedia ntuk gedung, rumah, atau apartemen anda, mulai dari perbaikan, pemasangan, pemeliharaan dan lainya.
                                        </p>
                                        <a href="#" class="btn btn-xs btn-border">View service</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="advs-box advs-box-top-icon-img boxed-inverse text-left">
                                    <a class="img-box lightbox img-scale-up" href="#">
                                        <span><img src="{{ asset('user/img/3.jpg') }}" alt=""></span>
                                    </a>
                                    <div class="advs-box-content">
                                        <h3>Bangun & Renovasi</h3>
                                        <p>
                                            Baritahu kami rencana Anda. Tenang, izinkan kami membantu anda mewujukan renovasi impian Anda. Ditangani oleh konsultan proyek.
                                        </p>
                                        <a href="#" class="btn btn-xs btn-border">View service</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="advs-box advs-box-top-icon-img boxed-inverse text-left">
                                    <a class="img-box lightbox img-scale-up" href="#">
                                        <span><img src="{{ asset('user/img/4.jpg') }}" alt=""></span>
                                    </a>
                                    <div class="advs-box-content">
                                        <h3>Inspirasi Desain</h3>
                                        <p>
                                            Temukan ide, inspirasi gaya, dan bawa inspirasi ide tersebut ke rumah Anda. Jadikan rumah anda lebih berwarna dan bersinar, sama seperti Anda !!
                                        </p>
                                        <a href="#" class="btn btn-xs btn-border">View service</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 boxed white">
                    <h2 class="text-color">Kenapa?<br />harus Etukang</h2>
                    <hr class="space m" />
                    <p class="text-s">
                        Anda masih ragu dengan e tukang? dan kenapa harus Etukang? Telah banyak projek dan klein yang merasa terbantu dengan adanya Etukang
                    </p>
                    <hr class="space l" />
                    <table class="grid-table border-table text-left grid-table-sm-12">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="icon-box counter-box-icon">
                                        <div class="icon-box-cell">
                                            <i class="im-gears text-xl text-color"></i>
                                        </div>
                                        <div class="icon-box-cell">
                                            <label class="counter text-l" data-speed="5000" data-to="1026">1026</label>
                                            <p class="text-s">Projects</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="icon-box counter-box-icon">
                                        <div class="icon-box-cell">
                                            <i class="im-engineering text-xl  text-color"></i>
                                        </div>
                                        <div class="icon-box-cell">
                                            <label class="counter text-l" data-speed="5000" data-to="965">965</label>
                                            <p class="text-s">Clients</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <hr class="space l" />
                    <a href="#" class="btn btn-xs btn-border">More projects</a>
                </div>
            </div>
            <hr class="space" />
            <div class="row ">
                <div class="col-md-8">
                    <h2>Terms and Conditions (Syarat dan Ketentuan)</h2>
                    <p>
                        Syarat dan Ketentuan ini mengatur penggunaan situs web dan aplikasi e-tukang. Dengan mengakses atau menggunakan layanan kami, Anda setuju untuk terikat dengan Syarat dan Ketentuan ini. Jika Anda tidak setuju dengan Syarat dan Ketentuan ini, Anda tidak diizinkan untuk menggunakan situs web atau aplikasi e-tukang.
                        <hr class="space s" />
                        Anda harus mematuhi semua hukum dan peraturan yang berlaku dalam penggunaan layanan kami. Kami tidak bertanggung jawab atas pelanggaran hukum yang dilakukan oleh pengguna kami. Kami juga berhak untuk menolak layanan kami kepada siapa saja yang melanggar Syarat dan Ketentuan ini.
                    </p>
                    <a href="#" class="btn-text">Download brochure</a>
                </div>
                <div class="col-md-4">
                    <ul class="fa-ul ul-squares no-margins">
                        <hr class="space s" />
                        <hr class="space s" />
                        <hr class="space s" />
                        <li>Layanan Pelanggan 24/7</li>
                        <li>Pemesanan yang Mudah & Fleksibel</li>
                        <li>Pencarian Cepat dan Mudah</li>
                        <li>Harga Terjangkau dan Transparan</li>
                        <li>Ulasan dan Rating</li>
                        <li>Tukang yang Terpercaya</li>
                        <li>Beragam Pilihan Layanan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty bg-white">
        <div class="container content">
            <table class="grid-table border-table grid-table-xs-12 text-left">
                <tbody>
                    <tr>
                        <td>
                            <h2>Layanan Profesional Kami</h2>
                        </td>
                        <td>
                            <hr class="space m visible-xs" />
                            <p>
                                Kami menyediakan layanan profesional terbaik dalam berbagai bidang untuk memenuhi kebutuhan Anda.
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <hr class="space" />
            <div class="flexslider carousel outer-navs" data-options="minWidth:200,itemMargin:30,numItems:3,controlNav:true,directionNav:true">
                <ul class="slides">
                    <li>
                        <div class="advs-box advs-box-multiple boxed-inverse" data-anima="scale-up" data-trigger="hover">
                            <a class="img-box"><img class="anima" src="{{ asset('user/img/6.jpg') }}" alt="" /></a>
                            <div class="circle"><i class="im-solar"></i></div>
                            <div class="advs-box-content">
                                <h3>Kelistrikan</h3>
                                <p>
                                    Interdum iusto pulvinar consequuntur augu s est odit mi quosliquid semper, veritatis dignissimos pericello constro pretese mertolo.
                                </p>
                                <a class="btn-text" href="#">Enter now </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="advs-box advs-box-multiple boxed-inverse" data-anima="scale-up" data-trigger="hover">
                            <a class="img-box"><img class="anima" src="{{ asset('user/img/7.jpg') }}" alt="" /></a>
                            <div class="circle"><i class="im-pencil-ruler"></i></div>
                            <div class="advs-box-content">
                                <h3>Bangunan</h3>
                                <p>
                                    Interdum iusto pulvinar consequuntur augu s est odit mi quosliquid semper, veritatis dignissimos pericello constro pretese mertolo.
                                </p>
                                <a class="btn-text" href="#">Enter now </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="advs-box advs-box-multiple boxed-inverse" data-anima="scale-up" data-trigger="hover">
                            <a class="img-box"><img class="anima" src="{{ asset('user/img/8.jpg') }}" alt="" /></a>
                            <div class="circle"><i class="im-suitcase"></i></div>
                            <div class="advs-box-content">
                                <h3>Perawatan Rumah</h3>
                                <p>
                                    Interdum iusto pulvinar consequuntur augu s est odit mi quosliquid semper, veritatis dignissimos pericello constro pretese mertolo.
                                </p>
                                <a class="btn-text" href="#">Enter now </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="advs-box advs-box-multiple boxed-inverse" data-anima="scale-up" data-trigger="hover">
                            <a class="img-box"><img class="anima" src="{{ asset('user/img/9.jpg') }}" alt="" /></a>
                            <div class="circle"><i class="im-worker"></i></div>
                            <div class="advs-box-content">
                                <h3>Interior</h3>
                                <p>
                                    Interdum iusto pulvinar consequuntur augu s est odit mi quosliquid semper, veritatis dignissimos pericello constro pretese mertolo.
                                </p>
                                <a class="btn-text" href="#">Enter now </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="advs-box advs-box-multiple boxed-inverse" data-anima="scale-up" data-trigger="hover">
                            <a class="img-box"><img class="anima" src="{{ asset('user/img/11.jpg') }}" alt="" /></a>
                            <div class="circle"><i class="im-worker"></i></div>
                            <div class="advs-box-content">
                                <h3>Lain-lain</h3>
                                <p>
                                    Interdum iusto pulvinar consequuntur augu s est odit mi quosliquid semper, veritatis dignissimos pericello constro pretese mertolo.
                                </p>
                                <a class="btn-text" href="#">Enter now </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section-bg-image parallax-window white" data-natural-height="1080" data-natural-width="1920" data-parallax="scroll" data-image-src="{{ asset('user/img/12.jpg') }}">
        <div class="container content">
            <div class="row">
                <div class="col-md-8 boxed" data-anima="fade-left">
                    <h2 class="text-color">Subscribe to our newsletter</h2>
                    <p class="text-s">
                        Jangan lewatkan informasi terbaru tentang layanan dan penawaran kami. Berlanggananlah untuk menerima newsletter kami secara berkala.
                    </p>
                    <hr class="space m" />
                    <form action="/" method="post" class="form-box" >
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <p>Name</p>
                                <input id="name" name="name" placeholder="" type="text" class="form-control form-value" required>
                            </div>
                            <div class="col-md-6">
                                <p>Email</p>
                                <input id="email" name="email" placeholder="" type="email" class="form-control form-value" required>
                            </div>
                        </div>
                        <hr class="space m" />
                        <button class="btn-xs btn-border btn" type="submit">Subscribe now</button>
                        <hr class="space m" />

                        @if (session('status') === 'success')
                        <div class="success-box">
                            <div class="alert alert-success">Congratulations. Your message has been sent successfully</div>
                        </div>
                        @elseif (session('status') === 'error')
                        <div class="error-box">
                            <div class="alert alert-warning">Error, please retry. Your message has not been sent</div>
                        </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="section-empty no-paddings-y text-center">
        <div class="content">
            <div class="tab-box full-width" data-tab-anima="fade-in">
                <ul class="nav nav-tabs nav-justified nav-center">
                    <li class="active"><a href="#">Our process</a></li>
                    <li><a href="#">Build process</a></li>
                    <li><a href="#">Energy</a></li>
                    <li><a href="#">Renovation steps</a></li>
                </ul>
                <div class="panel active">
                    <div class="row box-steps">
                        <div class="step-item col-md-4">
                            <span class="step-number">1</span>
                            <h3>Client request</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                                Utenim ad minim veniam quis nostrud exercitation ullamco laboro.
                            </p>
                        </div>
                        <div class="step-item col-md-4">
                            <span class="step-number">2</span>
                            <h3>Quotation</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                                Utenim ad minim veniam quis nostrud exercitation ullamco laboro.
                            </p>
                        </div>
                        <div class="step-item col-md-4">
                            <span class="step-number">3</span>
                            <h3>Project start</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                                Utenim ad minim veniam quis nostrud exercitation ullamco laboro.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel">
                    <div class="row box-steps">
                        <div class="step-item col-md-4">
                            <span class="step-number">1</span>
                            <h3>Client request</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                                Utenim ad minim veniam quis nostrud exercitation ullamco laboro.
                            </p>
                        </div>
                        <div class="step-item col-md-4">
                            <span class="step-number">2</span>
                            <h3>Quotation</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                                Utenim ad minim veniam quis nostrud exercitation ullamco laboro.
                            </p>
                        </div>
                        <div class="step-item col-md-4">
                            <span class="step-number">3</span>
                            <h3>Project start</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                                Utenim ad minim veniam quis nostrud exercitation ullamco laboro.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel">
                    <div class="row box-steps">
                        <div class="step-item col-md-4">
                            <span class="step-number">1</span>
                            <h3>Client request</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                                Utenim ad minim veniam quis nostrud exercitation ullamco laboro.
                            </p>
                        </div>
                        <div class="step-item col-md-4">
                            <span class="step-number">2</span>
                            <h3>Quotation</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                                Utenim ad minim veniam quis nostrud exercitation ullamco laboro.
                            </p>
                        </div>
                        <div class="step-item col-md-4">
                            <span class="step-number">3</span>
                            <h3>Project start</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                                Utenim ad minim veniam quis nostrud exercitation ullamco laboro.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel">
                    <div class="row box-steps">
                        <div class="step-item col-md-4">
                            <span class="step-number">1</span>
                            <h3>Client request</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                                Utenim ad minim veniam quis nostrud exercitation ullamco laboro.
                            </p>
                        </div>
                        <div class="step-item col-md-4">
                            <span class="step-number">2</span>
                            <h3>Quotation</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                                Utenim ad minim veniam quis nostrud exercitation ullamco laboro.
                            </p>
                        </div>
                        <div class="step-item col-md-4">
                            <span class="step-number">3</span>
                            <h3>Project start</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                                Utenim ad minim veniam quis nostrud exercitation ullamco laboro.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="section-empty bg-white">
        <div class="container content">
            <table class="grid-table border-table cell-50 grid-table-xs-12">
                <tbody>
                    <tr>
                        <td><img src="../images/logos/logo-1.png" alt=""></td>
                        <td><img src="../images/logos/logo-2.png" alt=""></td>
                        <td><img src="../images/logos/logo-3.png" alt=""></td>
                        <td><img src="../images/logos/logo-4.png" alt=""></td>
                        <td><img src="../images/logos/logo-5.png" alt=""></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="section-empty">
        {{-- <div class="container content">
            <div class="row">
                <div class="col-md-4 boxed white row-17">
                    <br>
                    <br>
                    <h2 class="text-color">Menjadi Penyedia Jasa</h2>
                    <p class="text-s">
                        Kami akan menghubungkan Anda dengan customer sehingga Anda dapat meningkatkan kinerja bisnis Anda.
                    </p>
                    <hr class="space m" />
                    <a href="#" class="btn-xs btn-border btn">Daftar Sekarang</a>
                </div>
                <div class="col-md-8">
                    <div class="flexslider carousel outer-navs" data-options="minWidth:240,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <div class="advs-box advs-box-top-icon boxed-inverse text-left row-17" data-href="">
                                    <i class="im-crane icon circle"></i>
                                    <h3>Homes</h3>
                                    <span class="extra-content">Get 50% discount</span>
                                    <p>
                                        Interdum iusto pulvinar consequuntur augue optio, fusceod tempor incididunt utlabo et dolore baeto asprio martisio.
                                    </p>
                                    <a href="#" class="btn btn-xs">Open</a>
                                </div>
                            </li>
                            <li>
                                <div class="advs-box advs-box-top-icon boxed-inverse text-left row-17" data-href="">
                                    <i class="im-office-lamp icon circle"></i>
                                    <h3>Interiors</h3>
                                    <span class="extra-content">Vintage and modern</span>
                                    <p>
                                        Interdum iusto pulvinar consequuntur augue optio, rep ta fusceod tempor incididunt and dolore baeto asprio percole.
                                    </p>
                                    <a href="#" class="btn btn-xs">Open</a>
                                </div>
                            </li>
                            <li>
                                <div class="advs-box advs-box-top-icon boxed-inverse text-left row-17" data-href="">
                                    <i class="im-repair icon circle"></i>
                                    <h3>Assistance</h3>
                                    <span class="extra-content">Active 24/7</span>
                                    <p>
                                        Interdum iusto pulvinar consequuntur augue optio, rep ta fusceod tempor incididunt utlabore et dolore baeto asprio.
                                    </p>
                                    <a href="#" class="btn btn-xs">Open</a>
                                </div>
                            </li>
                            <li>
                                <div class="advs-box advs-box-top-icon boxed-inverse text-left row-17" data-href="">
                                    <i class="im-thread icon circle"></i>
                                    <h3>Raw materials</h3>
                                    <span class="extra-content">Get 70% discount</span>
                                    <p>
                                        Interdum iusto pulvinar consequuntur augue optio, rep ta fusceod tempor incididunt utlabore dolore baeto eccome.
                                    </p>
                                    <a href="#" class="btn btn-xs">Open</a>
                                </div>
                            </li>
                            <li>
                                <div class="advs-box advs-box-top-icon boxed-inverse text-left row-17" data-href="">
                                    <i class="im-computer icon circle"></i>
                                    <h3>Web services</h3>
                                    <span class="extra-content">Latest technologies</span>
                                    <p>
                                        Interdum iusto pulvinar consequuntur augue optio, rep ta fusceod tempor incididunt utlabore dolore baeto asprio.
                                    </p>
                                    <a href="#" class="btn btn-xs">Open</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <div class="section-bg-image parallax-window white" data-natural-height="800" data-natural-width="1920" data-parallax="scroll" data-image-src="{{ asset('user/img/16.jpg') }}">
        <div class="container content">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h1 class="text-uppercase">Watch our company<br />presentation</h1>
                    <hr class="space l" />
                    <a href="https://www.youtube.com/watch?v=C_OCHaUNrho" data-lightbox-anima="fade-right" class="btn btn-play lightbox mfp-iframe text-color">Watch video <i></i></a>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="row vertical-row">
                        <div class="col-md-3">
                            <p class="progress-label">Constructions</p>
                        </div>
                        <div class="col-md-9">
                            <div class="progress">
                                <div class="progress-bar" data-progress="80">
                                    <span><span class="counter" data-to="80">80</span> %</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="space m" />
                    <div class="row vertical-row">
                        <div class="col-md-3">
                            <p class="progress-label">Roofing</p>
                        </div>
                        <div class="col-md-9">
                            <div class="progress">
                                <div class="progress-bar" data-progress="50">
                                    <span><span class="counter" data-to="50">50</span> %</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="space m" />
                    <div class="row vertical-row">
                        <div class="col-md-3">
                            <p class="progress-label">Secure</p>
                        </div>
                        <div class="col-md-9">
                            <div class="progress">
                                <div class="progress-bar" data-progress="100">
                                    <span><span class="counter" data-to="100">100</span> %</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty bg-white">
        <div class="container content">
            <div class="social-feed-tw flexslider carousel outer-navs" data-social-id="yellow_au" data-options="minWidth:250,show_media:false,limit: 10"></div>
        </div>
    </div>
    <i class="scroll-top scroll-top-mobile show fa fa-sort-asc"></i>


@endsection

