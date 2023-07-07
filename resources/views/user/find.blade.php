@extends('layout.main')

@section('container')

<div class="header-title white" data-parallax="scroll" data-natural-height="1080" data-natural-width="1920" data-image-src="{{ asset('user/img/14.jpg') }}">
    <div class="container">
        <div class="title-base">
            <hr class="anima" />
            <h1>Cari Tukang Anda Disini!</h1>
            <p>Temukan tukang yang berkualitas dan berpengalaman dengan mudah melalui pencarian kami yang memungkinkan Anda mencari berdasarkan kategori layanan, wilayah, dan ulasan pelanggan.</p>
        </div>
    </div>
</div>
<div class="section-empty">
    <div class="container content">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="tab-box left" data-tab-anima="fade-in">
                    <ul class="nav nav-tabs col-md-4">
                        <li class="active"><a>Semua Tukang</a></li>
                        <li><a>Perbaikan Rumah</a></li>
                        <li><a>Pemasangan dan Penggantian</a></li>
                        <li><a>Pembersihan</a></li>
                        <li><a>Renovasi</a></li>
                        <li><a>Tukang Kayu</a></li>
                        <li><a>Tukang Besi</a></li>
                        <li><a>Tukang Listrik</a></li>
                        <li><a>Tukang Pipa</a></li>
                        <li><a>Best Tukang</a></li>
                    </ul>
                    <div class="panel-box col-md-8">
                        <form action="">
                            <ul class="list-texts list-texts-justified">
                                <div class="col-md-6">
                                    <label for="category">Layanan:</label>
                                    <select name="category" id="category" class="form-control form-value" required>
                                        <option value="">Pilih Layanan</option>
                                        @foreach ($layanan as $item)
                                            <option value="{{ $item->id }}" {{ request('category') == $item->id ? 'selected' : '' }}>{{ $item->jenis }}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="btn btn-primary">Cari</button>
                                </div>
                                <div class="col-md-6">
                                    <label for="kecamatan">Kecamatan:</label>
                                    <select name="kecamatan" id="kecamatan" class="form-control form-value" required>
                                        <option value="">Pilih Kecamatan</option>                                    
                                        @foreach ($kecamatan as $item)
                                            <option value="{{ $item->id }}" {{ request('kecamatan') == $item->id ? 'selected' : '' }}>{{ $item->kecamatan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </ul>
                        </form>
                        <hr class="space xs" />
                        <br>
                        <div class="panel active" >
                            <h2>Semua Tukang</h2>
                            <hr class="space l" />
                            <div class="row">
                            @if ($semua->count())
                            @foreach ($semua as $post)
                                <div class="col-md-12">
                                    <div class="advs-box advs-box-side-img advs-box-blog boxed-inverse" data-anima="scale-rotate" data-trigger="hover">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a class="img-box">
                                                    <img class="anima" src="../../../images/gallery/image-1.jpg" alt="" />
                                                </a>
                                            </div>
                                            <div class="col-md-8">
                                                <h2><a>{{ $post["nama"] }}</a></h2>
                                                <hr>
                                                <div class="tag-row icon-row">
                                                    <span><i class="fa fa-calendar"></i><a>{{ $post->created_at->diffForHumans() }}</a></span>
                                                    <span><i class="fa fa-bookmark"></i><a href="#">{{ $post->jenislayanan->jenis }}</a></span>
                                                    <span><i class="fa fa-pencil"></i><a>{{ $post->kecamatan->kecamatan }}</a></span>
                                                </div>
                                                <p>
                                                    {{ $post["deskripsi"] }}
                                                </p>
                                                <a class="btn btn-xs" href="/tukang/{{ $post["id"] }}">order</a>
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
                        <div class="panel" >
                            <h2>Perbaikan Rumah</h2>
                            <hr class="space l" />
                            <div class="row">
                            @if ($perbaikan->count())
                            @foreach ($perbaikan as $post)
                                <div class="col-md-12">
                                    <div class="advs-box advs-box-side-img advs-box-blog boxed-inverse" data-anima="scale-rotate" data-trigger="hover">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a class="img-box">
                                                    <img class="anima" src="../../../images/gallery/image-1.jpg" alt="" />
                                                </a>
                                            </div>
                                            <div class="col-md-8">
                                                <h2><a>{{ $post["nama"] }}</a></h2>
                                                <hr>
                                                <div class="tag-row icon-row">
                                                    <span><i class="fa fa-calendar"></i><a>{{ $post->created_at->diffForHumans() }}</a></span>
                                                    <span><i class="fa fa-bookmark"></i><a href="#">{{ $post->jenislayanan->jenis }}</a></span>
                                                    <span><i class="fa fa-pencil"></i><a>{{ $post->kecamatan->kecamatan }}</a></span>
                                                </div>
                                                <p>
                                                    {{ $post["deskripsi"] }}
                                                </p>
                                                <a class="btn btn-xs" href="/tukang/{{ $post["id"] }}">order</a>
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
                                        <div class="advs-box advs-box-side-img advs-box-blog boxed-inverse" data-anima="scale-rotate" data-trigger="hover">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <a class="img-box">
                                                        <img class="anima" src="../../../images/gallery/image-1.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="col-md-8">
                                                    <h2><a>{{ $post["nama"] }}</a></h2>
                                                    <hr>
                                                    <div class="tag-row icon-row">
                                                        <span><i class="fa fa-calendar"></i><a>{{ $post->created_at->diffForHumans() }}</a></span>
                                                        <span><i class="fa fa-bookmark"></i><a href="#">{{ $post->jenislayanan->jenis }}</a></span>
                                                        <span><i class="fa fa-pencil"></i><a>{{ $post->kecamatan->kecamatan }}</a></span>
                                                    </div>
                                                    <p>
                                                        {{ $post["deskripsi"] }}
                                                    </p>
                                                    <a class="btn btn-xs" href="/tukang/{{ $post["id"] }}">order</a>
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
                                        <div class="advs-box advs-box-side-img advs-box-blog boxed-inverse" data-anima="scale-rotate" data-trigger="hover">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <a class="img-box">
                                                        <img class="anima" src="../../../images/gallery/image-1.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="col-md-8">
                                                    <h2><a>{{ $post["nama"] }}</a></h2>
                                                    <hr>
                                                    <div class="tag-row icon-row">
                                                        <span><i class="fa fa-calendar"></i><a>{{ $post->created_at->diffForHumans() }}</a></span>
                                                        <span><i class="fa fa-bookmark"></i><a href="#">{{ $post->jenislayanan->jenis }}</a></span>
                                                        <span><i class="fa fa-pencil"></i><a>{{ $post->kecamatan->kecamatan }}</a></span>
                                                    </div>
                                                    <p>
                                                        {{ $post["deskripsi"] }}
                                                    </p>
                                                    <a class="btn btn-xs" href="/tukang/{{ $post["id"] }}">order</a>
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
                                        <div class="advs-box advs-box-side-img advs-box-blog boxed-inverse" data-anima="scale-rotate" data-trigger="hover">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <a class="img-box">
                                                        <img class="anima" src="../../../images/gallery/image-1.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="col-md-8">
                                                    <h2><a>{{ $post["nama"] }}</a></h2>
                                                    <hr>
                                                    <div class="tag-row icon-row">
                                                        <span><i class="fa fa-calendar"></i><a>{{ $post->created_at->diffForHumans() }}</a></span>
                                                        <span><i class="fa fa-bookmark"></i><a href="#">{{ $post->jenislayanan->jenis }}</a></span>
                                                        <span><i class="fa fa-pencil"></i><a>{{ $post->kecamatan->kecamatan }}</a></span>
                                                    </div>
                                                    <p>
                                                        {{ $post["deskripsi"] }}
                                                    </p>
                                                    <a class="btn btn-xs" href="/tukang/{{ $post["id"] }}">order</a>
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
                                        <div class="advs-box advs-box-side-img advs-box-blog boxed-inverse" data-anima="scale-rotate" data-trigger="hover">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <a class="img-box">
                                                        <img class="anima" src="../../../images/gallery/image-1.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="col-md-8">
                                                    <h2><a>{{ $post["nama"] }}</a></h2>
                                                    <hr>
                                                    <div class="tag-row icon-row">
                                                        <span><i class="fa fa-calendar"></i><a>{{ $post->created_at->diffForHumans() }}</a></span>
                                                        <span><i class="fa fa-bookmark"></i><a href="#">{{ $post->jenislayanan->jenis }}</a></span>
                                                        <span><i class="fa fa-pencil"></i><a>{{ $post->kecamatan->kecamatan }}</a></span>
                                                    </div>
                                                    <p>
                                                        {{ $post["deskripsi"] }}
                                                    </p>
                                                    <a class="btn btn-xs" href="/tukang/{{ $post["id"] }}">order</a>
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
                                        <div class="advs-box advs-box-side-img advs-box-blog boxed-inverse" data-anima="scale-rotate" data-trigger="hover">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <a class="img-box">
                                                        <img class="anima" src="../../../images/gallery/image-1.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="col-md-8">
                                                    <h2><a>{{ $post["nama"] }}</a></h2>
                                                    <hr>
                                                    <div class="tag-row icon-row">
                                                        <span><i class="fa fa-calendar"></i><a>{{ $post->created_at->diffForHumans() }}</a></span>
                                                        <span><i class="fa fa-bookmark"></i><a href="#">{{ $post->jenislayanan->jenis }}</a></span>
                                                        <span><i class="fa fa-pencil"></i><a>{{ $post->kecamatan->kecamatan }}</a></span>
                                                    </div>
                                                    <p>
                                                        {{ $post["deskripsi"] }}
                                                    </p>
                                                    <a class="btn btn-xs" href="/tukang/{{ $post["id"] }}">order</a>
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
                                        <div class="advs-box advs-box-side-img advs-box-blog boxed-inverse" data-anima="scale-rotate" data-trigger="hover">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <a class="img-box">
                                                        <img class="anima" src="../../../images/gallery/image-1.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="col-md-8">
                                                    <h2><a>{{ $post["nama"] }}</a></h2>
                                                    <hr>
                                                    <div class="tag-row icon-row">
                                                        <span><i class="fa fa-calendar"></i><a>{{ $post->created_at->diffForHumans() }}</a></span>
                                                        <span><i class="fa fa-bookmark"></i><a href="#">{{ $post->jenislayanan->jenis }}</a></span>
                                                        <span><i class="fa fa-pencil"></i><a>{{ $post->kecamatan->kecamatan }}</a></span>
                                                    </div>
                                                    <p>
                                                        {{ $post["deskripsi"] }}
                                                    </p>
                                                    <a class="btn btn-xs" href="/tukang/{{ $post["id"] }}">order</a>
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
                                        <div class="advs-box advs-box-side-img advs-box-blog boxed-inverse" data-anima="scale-rotate" data-trigger="hover">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <a class="img-box">
                                                        <img class="anima" src="../../../images/gallery/image-1.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="col-md-8">
                                                    <h2><a>{{ $post["nama"] }}</a></h2>
                                                    <hr>
                                                    <div class="tag-row icon-row">
                                                        <span><i class="fa fa-calendar"></i><a>{{ $post->created_at->diffForHumans() }}</a></span>
                                                        <span><i class="fa fa-bookmark"></i><a href="#">{{ $post->jenislayanan->jenis }}</a></span>
                                                        <span><i class="fa fa-pencil"></i><a>{{ $post->kecamatan->kecamatan }}</a></span>
                                                    </div>
                                                    <p>
                                                        {{ $post["deskripsi"] }}
                                                    </p>
                                                    <a class="btn btn-xs" href="/tukang/{{ $post["id"] }}">order</a>
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

