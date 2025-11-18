<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Berita - Tasty Food</title>
  <link rel="stylesheet" href="{{ asset('css/berita.css') }}?v={{ time() }}">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

  <!-- ======= NAVBAR ======= -->
  <header class="navbar">
    <div class="logo">TASTY FOOD</div>
    <nav class="nav-links">
      <a href="{{ route('home') }}">HOME</a>
      <a href="{{ route('tentang') }}">TENTANG</a>
      <a href="{{ route('berita') }}" class="active">BERITA</a>
      <a href="{{ route('galeri') }}">GALERI</a>
      <a href="{{ route('kontak') }}">KONTAK</a>
    </nav>
  </header>

  <!-- ======= HERO SECTION ======= -->
  <section class="berita-hero">
    <h1>BERITA KAMI</h1>
  </section>

  <!-- ======= BERITA UTAMA ======= -->
  @if($beritaUtama)
  <section class="berita-utama container">
    <div class="berita-box">
      <div class="image">
        @if($beritaUtama->gambar)
          <img src="{{ asset('storage/' . $beritaUtama->gambar) }}" alt="{{ $beritaUtama->judul }}">
        @else
          <img src="{{ asset('ASET/default.jpg') }}" alt="Default">
        @endif
      </div>
      <div class="text">
        <h2>{{ strtoupper($beritaUtama->judul) }}</h2>
        <p>{{ Str::limit($beritaUtama->deskripsi, 250) }}</p>
        <a href="#" class="btn-black">BACA SELENGKAPNYA</a>
      </div>
    </div>
  </section>
  @endif

  <!-- ======= BERITA LAINNYA ======= -->
  <section class="berita-lainnya container">
    <h3>BERITA LAINNYA</h3>
    <div class="berita-grid">
      @forelse($beritaLainnya as $berita)
      <div class="berita-card">
        @if($berita->gambar)
          <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}">
        @else
          <img src="{{ asset('ASET/default.jpg') }}" alt="Default">
        @endif
        <h4>{{ $berita->judul }}</h4>
        <p>{{ Str::limit($berita->deskripsi, 100) }}</p>
        <a href="#">Baca selengkapnya</a>
      </div>
      @empty
        <p>Tidak ada berita lain untuk ditampilkan.</p>
      @endforelse
    </div>
  </section>

  <!-- ======= FOOTER ======= -->
  <footer class="footer">
    <div class="footer-container container">
      <div class="footer-col brand">
        <h3>Tasty Food</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
        <div class="social-icons">
          <a href="#"><img src="{{ asset('ASET/001-facebook.png') }}" alt="Facebook"></a>
          <a href="#"><img src="{{ asset('ASET/002-twitter.png') }}" alt="Twitter"></a>
        </div>
      </div>

      <div class="footer-col">
        <h4>Useful Links</h4>
        <ul>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Hewan</a></li>
          <li><a href="#">Galeri</a></li>
          <li><a href="#">Testimonial</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Privacy</h4>
        <ul>
          <li><a href="#">Karir</a></li>
          <li><a href="#">Tentang Kami</a></li>
          <li><a href="#">Kontak Kami</a></li>
          <li><a href="#">Servis</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Contact Info</h4>
        <ul>
          <li><a href="mailto:tastyfood@gmail.com">tastyfood@gmail.com</a></li>
          <li><a href="tel:+6281234567890">+62 812 3456 7890</a></li>
          <li>Kota Bandung, Jawa Barat</li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>Copyright ©2025 All rights reserved</p>
    </div>
  </footer>

</body>
</html>
