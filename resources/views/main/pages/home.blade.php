@extends('main.app')

@section('title')
Home
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('css/custom/reset.css') }}">
<link rel="stylesheet" href="{{ asset('css/custom/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/custom/home.css') }}">
@endsection

@section('content')
@include('main.partials.navbar')

<section id="top" class="hero">
    <h1 data-aos="fade-right" class="hero__title">Piece of Furniture</h1>
    <p data-aos="fade-right" class="hero__description">Mebel dan dekorasi untuk ruangan anda</p>
    <a data-aos="fade-left" href="#about" class="hero__button">Tentang Kami</a>
</section>

<div class="container">
    <div id="about" class="introduce">
        <h1 data-aos="fade-up" class="introduce__title">Tentang Kami</h1>
        <p data-aos="fade-up" class="introduce__text">Kami menyediakan berbagai macam perabotan dan dekorasi rumah
            tangga dengan harga yang
            terjangkau. Website ini berisi informasi katalog produk kami dan juga menyediakan alternatif solusi bagi
            anda untuk
            melihat produk kami melalui fitur Preview 3D dan Augmented Reality(AR) sehingga anda dapat melihat bentuk
            produk
            kami secara 3D tanpa meninggalkan rumah. <a href="#contact">Kontak kami</a> jika anda tertarik untuk
            membeli.
        </p>
    </div>

    <div class="introduce">
        <h1 data-aos="fade-up" class="introduce__title">Profile</h1>
        <p data-aos="fade-up" class="introduce__text">Email : pofurniture@gmail.com</p>
        <p data-aos="fade-up" class="introduce__text">No. Handphone : +62896702815428</p>
        <p data-aos="fade-up" class="introduce__text">Alamat : Jln. Miruek Anggrek No. 40, Darussalam, Aceh Besar. </p>
    </div>

    <div class="collapses">
        <h1 data-aos="fade-up" class="collapses__title">F.A.Q</h1>

        <div data-aos="fade-up" class="collapse">
            <button class="collapse__button">
                Website apa ini?<i class="collapse__icon">&#9650;</i>
            </button>

            <div class="collapse__content">
                Website ini berisi informasi katalog produk kami, dan juga beberapa artikel di halaman blog.
            </div>
        </div>

        <div data-aos="fade-up" class="collapse">
            <button class="collapse__button">
                Apa alasan dibuatnya fitur preview 3D dan Augmented Reality? <i class="collapse__icon">&#9650;</i>
            </button>

            <div class="collapse__content">
                Salah satu kendala beberapa orang ketika melihat produk dekorasi dan perabotan rumah tangga di internet
                adalah
                karena biasanya kita belum tahu pasti bagaimana bentuk asli dari produk tersebut jika tidak dilihat
                secara langsung. Maka dengan fitur Preview 3D dan Augmented Reality, maka kami berharap fitur tersebut
                dapat mempermudah anda untuk mendapat gambaran langsung dari produk tersebut. Fitur ini juga sangat
                berguna di masa Social Distancing dan COVID-19 seperti sekarang ini, dimana anda dapat melihat bentuk
                produk dari rumah tanpa perlu ke toko.
            </div>
        </div>

        <div data-aos="fade-up" class="collapse">
            <button class="collapse__button">
                Apa perbedaan ketika saya membuka website ini di dekstop dan smartphone? <i
                    class="collapse__icon">&#9650;</i>
            </button>

            <div class="collapse__content">
                Jika anda membuka website ini di laptop/pc, anda dapat melihat informasi produk beserta preview model
                3D. Jika anda membuka website ini melalui smartphone dengan support AR, maka anda dapat melihat
                informasi katalog produk dengan preview model 3D beserta fitur Augmented Reality
            </div>
        </div>

        <div data-aos="fade-up" class="collapse">
            <button class="collapse__button">
                Apakah saya bisa membeli barang diwebsite ini? <i class="collapse__icon">&#9650;</i>
            </button>

            <div class="collapse__content">
                Jika anda tertarik untuk membeli, silahkan
                hubungi kami melalui informasi kontak yang sudah disediakan.
            </div>
        </div>

        <div data-aos="fade-up" class="collapse">
            <button class="collapse__button">
                Kenapa fitur Augmented Reality tidak berfungsi? <i class="collapse__icon">&#9650;</i>
            </button>

            <div class="collapse__content">
                Untuk menggunakan fitur AR, pastikan anda membuka website ini menggunakan smartphone yang mendukung
                fitur AR. klik link berikut untuk melihat daftar perangkat yang didukung : <a
                    href="https://developers.google.com/ar/discover/supported-devices">ARCore Supported Devices</a>
            </div>
        </div>

        <div data-aos="fade-up" class="collapse">
            <button class="collapse__button">
                Apakah web ini menyediakan fitur mode terang/gelap? <i class="collapse__icon">&#9650;</i>
            </button>

            <div class="collapse__content">
                Ya, klik ikon matahari/bulan di pojok kanan atas pada menu navbar untuk mengganti mode terang/gelap.
            </div>
        </div>
    </div>

    <div id="contact" class="contact">
        <h1 data-aos="fade-up" class="contact__title">Kontak Kami</h1>

        <form action="{{ route('contacts.store') }}" method="post">
            {{ csrf_field() }}

            <div data-aos="fade-up" class="input-form">
                <label for="name" class="input-form__label">Nama</label>
                <input name="name" type="text" class="input-form__input" id="name" placeholder="nama" required>
            </div>

            <div data-aos="fade-up" class="input-form">
                <label for="phone" class="input-form__label">No. Handphone</label>
                <input name="phone" type="text" class="input-form__input" id="phone" required
                    placeholder="no. handphone">
            </div>

            <div data-aos="fade-up" class="input-form">
                <label for="subject" class="input-form__label">Subjek</label>
                <input name="subject" type="text" class="input-form__input" id="subject" required placeholder="subjek">
            </div>

            <div data-aos="fade-up" class="input-form">
                <label for="message" class="input-form__label">Pesan</label>
                <textarea name="message" class="input-form__input" placeholder="pesan" required id="message"
                    rows="15"></textarea>
            </div>

            <button data-aos="fade-up" type="submit" class="button-form">Kirim Pesan</button>
        </form>
    </div>

    <hr>

    <div class="introduce">
        <h1 data-aos="fade-up" class="introduce__title">Infografis</h1>
        <p data-aos="fade-up" class="introduce__text">
            <img src="{{ asset('img/infografis.png') }}" style="width: 75%">
        </p>

        <p class="introduce__text">
            <a href="{{ asset('img/infografis.png') }}" download
                style="margin-top: 10px; padding: 8px;text-decoration: none;background-color: #000000; color: white; border-radius: 4px; display: inline-block;">Download
                Infografis (PNG)</a>
            <a href="{{ asset('img/infografis.pdf') }}" download
                style="margin-top: 10px; padding: 8px;text-decoration: none;background-color: #FDBD59; color: #000000; border-radius: 4px; display: inline-block;">Download
                Infografis (PDF)</a>
            <a href="#top"
                style="margin-top: 10px; padding: 8px;text-decoration: none;background-color: #636664; color: white; border-radius: 4px; display: inline-block;">Kembali
                keatas</a>
        </p>

    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/custom/navbar.js') }}"></script>
<script src="{{ asset('js/custom/collapse.js') }}"></script>
<script src="{{ asset('js/custom/change-theme.js') }}"></script>
@endsection
