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
    <div class="section-empty">
        <div class="container content">
            <div class="row">
                <div class="col-md-3">
                    <p>
                        E-tukang adalah platform layanan tukang online yang berkembang pesat di Indonesia. Kami percaya bahwa tukang memiliki peran penting dalam memenuhi kebutuhan masyarakat akan perbaikan rumah dan gedung yang memerlukan keterampilan dan pengalaman. Oleh karena itu, kami ingin mengundang Anda untuk bergabung dengan kami sebagai mitra tukang E-tukang.
                    </p>
                </div>
                <div class="col-md-3">
                    <p>
                        Sebagai mitra tukang E-tukang, Anda akan mendapatkan banyak keuntungan, seperti kesempatan untuk meningkatkan pendapatan dan mengembangkan keterampilan Anda, dukungan penuh dari tim E-tukang, serta akses ke berbagai peluang kerja yang memungkinkan Anda bekerja secara fleksibel sesuai dengan kebutuhan Anda.
                    </p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="list-group accordion-list" data-time="1000" data-type='accordion'>
                        <div class="list-group-item">
                            <a>Apa persyaratan untuk bergabung sebagai mitra tukang E-tukang? </a>
                            <div class="panel">
                                <div class="inner">
                                    Untuk bergabung sebagai mitra tukang E-tukang, Anda harus memiliki keterampilan dan pengalaman yang diperlukan dalam bidang tukang,
                                    serta memiliki sertifikat atau lisensi yang diperlukan.
                                    <hr class="space s" />
                                    Anda juga harus memiliki kendaraan sendiri dan peralatan yang diperlukan untuk melaksanakan tugas sebagai tukang.
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <a> Bagaimana cara mendaftar sebagai mitra tukang E-tukang?
                            </a>
                            <div class="panel">
                                <div class="inner">
                                    Untuk mendaftar sebagai mitra tukang E-tukang, Anda dapat mengunjungi halaman karir pada website kami dan mengisi formulir pendaftaran yang tersedia.
                                    Setelah itu, tim E-tukang akan menghubungi Anda untuk proses seleksi lebih lanjut.
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <a> Apa keuntungan yang akan saya dapatkan sebagai mitra tukang E-tukang?
                            </a>
                            <div class="panel">
                                <div class="inner">
                                    Sebagai mitra tukang E-tukang, Anda akan mendapatkan banyak keuntungan, seperti kesempatan untuk meningkatkan pendapatan dan mengembangkan keterampilan Anda,
                                    dukungan penuh dari tim E-tukang, serta akses ke berbagai peluang kerja yang memungkinkan Anda bekerja secara fleksibel sesuai dengan kebutuhan Anda.
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <a>Apakah saya perlu memiliki pengalaman kerja sebelum bergabung dengan E-tukang?
                            </a>
                            <div class="panel">
                                <div class="inner">
                                    Ya, Anda harus memiliki pengalaman kerja dalam bidang tukang sebelum bergabung dengan E-tukang.
                                    Kami mencari tukang yang berkualitas dan profesional untuk bergabung dengan kami sebagai mitra tukang E-tukang.
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <a> Bagaimana E-tukang dapat membantu saya meningkatkan keterampilan saya sebagai tukang?</a>
                            <div class="panel">
                                <div class="inner">
                                    E-tukang siap memberikan pelatihan dan dukungan yang diperlukan untuk membantu Anda menjadi tukang yang lebih baik dan terus berkembang.
                                    Kami juga akan memberikan akses ke teknologi terbaru dan dukungan pemasaran yang akan membantu Anda mempromosikan layanan Anda kepada pelanggan potensial.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="space" />
            <h2>Open positions</h2>
            <hr class="space l" />
            <div class="flexslider carousel outer-navs" data-options="minWidth:200,itemMargin:30,numItems:3,controlNav:true,directionNav:true">
                <ul class="slides">
                    <li>
                        <div class="advs-box advs-box-top-icon-img boxed-inverse text-left">
                            <a class="img-box lightbox img-scale-up" href="#">
                                <span><img src="{{ asset('user/img/6.jpg') }}" alt=""></span> 
                            </a>
                            <div class="advs-box-content">
                                <h3>Perbaikan Rumah</h3>
                                <span class="extra-content">For students</span>
                                <p>Layanan perbaikan rumah untuk memperbaiki kerusakan dan masalah di dalam rumah Anda.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="advs-box advs-box-top-icon-img boxed-inverse text-left">
                            <a class="img-box lightbox img-scale-up" href="#">
                                <span><img src="{{ asset('user/img/7.jpg') }}" alt=""></span>
                            </a>
                            <div class="advs-box-content">
                                <h3>Pemasangan dan Penggantian</h3>
                                <span class="extra-content">Urgent needed</span>
                                <p>Layanan pemasangan dan penggantian untuk memasang atau mengganti peralatan atau komponen tertentu di rumah Anda.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="advs-box advs-box-top-icon-img boxed-inverse text-left">
                            <a class="img-box lightbox img-scale-up" href="#">
                                <span><img src="{{ asset('user/img/8.jpg') }}" alt=""></span>
                            </a>
                            <div class="advs-box-content">
                                <h3>Pembersihan</h3>
                                <span class="extra-content">Experience required</span>
                                <p>Layanan pembersihan untuk membersihkan dan merapikan rumah Anda, termasuk ruangan, perabotan, dan area lainnya.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="advs-box advs-box-top-icon-img boxed-inverse text-left">
                            <a class="img-box lightbox img-scale-up" href="#">
                                <span><img src="{{ asset('user/img/9.jpg') }}" alt=""></span>
                            </a>
                            <div class="advs-box-content">
                                <h3>Renovasi</h3>
                                <span class="extra-content">High salary</span>
                                <p>Layanan renovasi untuk memperbarui atau memperbaiki bagian tertentu dari rumah Anda, seperti perombakan ruangan atau pembaruan desain.</p>
                            </div>
                        </div>
                    </li>                    
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a href="/form" class="btn-sm btn" type="submit">Daftar Sekarang</a>
      </div>
          <div class="section-empty bg-white">
        {{-- <div class="container content">
            <div class="row">
                <div class="col-md-3">
                    <h2>CONTACTS US</h2>
                    <hr class="space m" />
                    <ul class="fa-ul ul-dots">
                        <li>18 Piccadilli Road London United Kingdom</li>
                        <li>(123) 4556 5547</li>
                        <li>info@company.com</li>
                        <li>support@company.com</li>
                        <li>Mon - Sat: 9:00 - 18:00</li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <hr class="space visible-sm" />
                    <form action="http://www.framework-y.com/scripts/php/contact-form.php" class="form-box form-ajax" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <p>Name</p>
                                <input id="name" name="name" placeholder="" type="text" class="form-control form-value" required>
                            </div>
                            <div class="col-md-6">
                                <p>Surname</p>
                                <input id="surname" name="surname" placeholder="" type="text" class="form-control form-value" required>
                            </div>
                        </div>
                        <hr class="space xs" />
                        <div class="row">
                            <div class="col-md-3">
                                <p>Town/City</p>
                                <input id="town" name="town" placeholder="" type="text" class="form-control form-value" required>
                            </div>
                            <div class="col-md-3">
                                <p>State</p>
                                <select id="state" name="state" class="form-control form-value" required>
                                    <option selected value="">--</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona </option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California </option>
                                    <option value="CO">Colorado </option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">District Columbia</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia </option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <p>Address</p>
                                <input id="address" name="address" placeholder=" " type="text" class="form-control form-value" required>
                            </div>
                            <div class="col-md-2">
                                <p>Zip Code</p>
                                <input id="zip" name="zip" placeholder=" " type="number" class="form-control form-value" required>
                            </div>
                        </div>
                        <hr class="space xs" />
                        <div class="row">
                            <div class="col-md-6">
                                <p>Phone</p>
                                <input id="phone" name="phone" placeholder=" " type="text" class="form-control form-value">
                            </div>
                            <div class="col-md-6">
                                <p>Email</p>
                                <input id="email" name="email" placeholder=" " type="email" class="form-control form-value" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <hr class="space xs" />
                                <p>About you</p>
                                <textarea id="messagge" name="messagge" class="form-control form-value" required></textarea>
                                <hr class="space s" />
                                <button class="btn-sm btn" type="submit">Send inquiry</button>
                            </div>
                        </div>
                        <div class="success-box">
                            <div class="alert alert-success">Congratulations. Your inquiry has been sent successfully</div>
                        </div>
                        <div class="error-box">
                            <div class="alert alert-warning">Error, please retry. Your inquiry has not been sent</div>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
        <br>
        <br>
        <br>
    </div>
</body>

@endsection
