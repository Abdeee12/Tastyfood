<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - Tasty Food</title>
    {{-- Pastikan file CSS ada di public/css/kontak.css --}}
    <link rel="stylesheet" href="{{ asset('css/kontak.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

    <!-- NAVBAR -->
    <header class="navbar">
        <div class="logo">TASTY FOOD</div>
        <nav class="nav-links">
            <a href="{{ route('home') }}">HOME</a>
            <a href="{{ route('tentang') }}">TENTANG</a>
            <a href="{{ route('berita') }}">BERITA</a>
            <a href="{{ route('galeri') }}">GALERI</a>
            <a href="{{ route('kontak') }}" class="active">KONTAK</a>
        </nav>
    </header>

    <!-- HERO KONTAK -->
    <section class="hero-kontak">
        KONTAK KAMI
    </section>

    <!-- FORM KONTAK -->
    <section class="kontak-section">
        <form class="kontak-form">
            <input type="text" placeholder="Subject">
            <textarea placeholder="Message"></textarea>
            <input type="text" placeholder="Nama">
            <input type="email" placeholder="Email">
            <button type="submit">KIRIM</button>
        </form>
    </section>

<section class="kontak-info">
    <div class="info-item">
        <img src="{{ asset('ASET/Group 66.png') }}" alt="Email">
        <h4>EMAIL</h4>
        <p>{{ $kontak->email ?? 'Belum diatur' }}</p>
    </div>
    <div class="info-item">
        <img src="{{ asset('ASET/Group 67.png') }}" alt="Phone">
        <h4>PHONE</h4>
        <p>{{ $kontak->telepon ?? 'Belum diatur' }}</p>
    </div>
    <div class="info-item">
        <img src="{{ asset('ASET/Group 68.png') }}" alt="Location">
        <h4>LOCATION</h4>
        <p>{{ $kontak->alamat ?? 'Belum diatur' }}</p>
    </div>
</section>




</body>
</html>
