@extends('layout.main')

@section('container')

<div class="section-map box-middle-container row-20">
    <div class="google-map" data-parallax="scroll" data-natural-height="800" data-natural-width="1920"
        data-image-src="{{ asset('user/img/15.jpg') }}"></div>
    <div class="overlaybox overlaybox-side overlaybox">
        <div class="container content">
            <div class="row">
                <div class="col-md-6 overlaybox-inner box-middle" data-anima="fade-left">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Etukang</h2>
                            <p class="text-left text-s">
                                Dapatkan layanan tukang terbaik, untuk seluruh kerusakan dengan sangat mudah dalam satu aplikasi.
                            </p>
                            <hr class="space s" />
                            <div class="btn-group social-group btn-group-icons social-colors">
                                <a target="_blank" href="facebook.com"><i class="fa fa-facebook"></i></a>
                                <a target="_blank" href="twitter.com"><i class="fa fa-twitter"></i></a>
                                <a target="_blank" href="linkedin.com"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <hr class="space m visible-xs" />
                            <h2>Contacts</h2>
                            <hr class="space m" />
                            <ul class="fa-ul ul-squares no-margins text-s">
                                <li>Jl. Tentara Rakyat Mataram No.55-57</li>
                                <li>Kota Yogyakarta, DIY</li>
                                <li>etukang@gamil.com</li>
                                <li>+62 876 8765 9875</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </div>
</div>
<div class="section-empty">
    <div class="container content">
        <div class="row">
            <div class="col-md-6 col-sm-12 text-left">
                <h2>Pesan dan Saran</h2>
                <p>
                    Kami berkomitmen untuk memberikan layanan tukang yang berkualitas tinggi dan memuaskan untuk pelanggan kami. Jika Anda memiliki saran atau masukan untuk meningkatkan layanan kami, silakan beritahu kami.
                </p>
                <hr class="space m" />
                <form action="/kontak"  method="post" class="form-box">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <p>Name</p>
                            <input id="nama" name="nama" placeholder="" type="text" class="form-control form-value" required>
                        </div>
                        <div class="col-md-6">
                            <p>Email</p>
                            <input id="email" name="email" placeholder="" type="email" class="form-control form-value" required>
                        </div>
                    </div>
                    <hr class="space xs" />
                    <p>Subject</p>
                    <input id="subjek" name="subjek" placeholder="" type="text" class="form-control form-value" required>
                    <hr class="space xs" />
                    <p>Messagge</p>
                    <textarea id="pesan" name="pesan" placeholder="" class="form-control form-value" required></textarea>
                    <hr class="space s" />
                    <button type="submit" class="btn-sm btn">Send messagge</button>
                    <hr class="space s" />
                    
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
            <div class="col-md-6 col-sm-12">
                <table class="table table-hover text-s">
                    <thead>
                        <tr>
                            <th>Day</th>
                            <th>Morning</th>
                            <th>Afternoom</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Monday</th>
                            <td>8am - 12am</td>
                            <td>15PM - 19PM</td>
                        </tr>
                        <tr>
                            <th>Tuesday</th>
                            <td>8am - 12am</td>
                            <td>5pm - 9pm</td>
                        </tr>
                        <tr>
                            <th>Wednesday</th>
                            <td>8am - 12am</td>
                            <td>5pm - 9pm</td>
                        </tr>
                        <tr>
                            <th>Thirsday</th>
                            <td>8am - 12am</td>
                            <td>5pm - 9pm</td>
                        </tr>
                        <tr>
                            <th>Friday</th>
                            <td>8am - 12am</td>
                            <td>5pm - 9pm</td>
                        </tr>
                        <tr>
                            <th>Saturday</th>
                            <td>8am - 12am</td>
                            <td>Closed</td>
                        </tr>
                        <tr>
                            <th>Sunday</th>
                            <td>Closed</td>
                            <td>Closed</td>
                        </tr>
                    </tbody>
                </table>
                <hr class="space m" />
            </div>
        </div>
    </div>
</div>
<i class="scroll-top scroll-top-mobile show fa fa-sort-asc"></i>

@endsection
